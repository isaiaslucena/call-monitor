<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {
	public function get_companies() {
		return $this->db->get('companies')->result_array();
	}

	public function check_file($idcompany, $filename) {
		$protocol = 'http';
		$port = '8983';
		$host = '74.208.40.204';
		$path = '/solr/recordings';
		$url = $protocol."://".$host.":".$port.$path."/select?wt=json";

		$namehash = sha1($filename);
		$data = array(
			'query' => 'hash:'.$namehash,
			'filter' => 'id_emp:'.$idcompany
		);
		$data_string = json_encode($data);
		$header = array(
			'Content-Type: application/json',
			'Content-Length: '.strlen($data_string),
			'charset=UTF-8'
		);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$resultselect = json_decode(curl_exec($ch));

		if (isset($resultselect->response->numFound)) {
			$numfound = (int)$resultselect->response->numFound;
		} else {
			$numfound = 0;
		}

		return $numfound;
	}

	public function check_noanswer($idcompany, $idrec) {
		$protocol = 'http';
		$port = '8983';
		$host = '74.208.40.204';
		$path = '/solr/recordings';
		$url = $protocol."://".$host.":".$port.$path."/select?wt=json";

		$data = array(
			'query' => 'id_emp:'.$idcompany,
			'filter' => array(
				'id_rec:'.$idrec,
				'type:"N"'
				)
		);
		$data_string = json_encode($data);
		$header = array(
			'Content-Type: application/json',
			'Content-Length: '.strlen($data_string),
			'charset=UTF-8'
		);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$resultselect = json_decode(curl_exec($ch));

		if (isset($resultselect->response->numFound)) {
			$numfound = (int)$resultselect->response->numFound;
		} else {
			$numfound = 0;
		}

		return $numfound;
	}

	public function save_file($data) {
		return "teste";
	}

	public function get_calls($data) {
		$protocol = 'http';
		$port = '8983';
		$host = '74.208.40.204';
		$path = '/solr/recordings';
		$url = $protocol."://".$host.":".$port.$path."/select?wt=json&sort=".$data['sort'].'&rows=500';

		if (empty($data['type'])) {
			$types = '(I OR R OR N)';
		} else {
			$types = $data['type'];
		}

		$data = array(
			'query' => 'id_emp:'.$data['id_emp'],
			'filter' => array(
				'start_rec:['.$data['startdate'].' TO '.$data['enddate'].']',
				'type:'.$types
			)
		);
		$data_string = json_encode($data);
		$header = array(
			'Content-Type: application/json',
			'Content-Length: '.strlen($data_string),
			'charset=UTF-8'
		);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		return json_decode(curl_exec($ch));
	}

	public function get_call_info($idcinfo) {
		$protocol = 'http';
		$port = '8983';
		$host = '74.208.40.204';
		$path = '/solr/recordings';
		$url = $protocol."://".$host.":".$port.$path."/select?wt=json";
		$data = array(
			"query" => "idi:".$idcinfo
		);
		$data_string = json_encode($data);
		$header = array(
			'Content-Type: application/json',
			'Content-Length: '.strlen($data_string),
			'charset=UTF-8'
		);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		return json_decode(curl_exec($ch));
	}

	public function get_categories() {
		return $this->db->get('categories')->result_array();
	}

	public function add_category($data) {
		$data_insert = array(
			'name' => $data['name']
		);
		$this->db->insert('categories', $data_insert);
		return $this->db->insert_id();
	}

	public function edit_category($data) {
		$this->db->set('name', $data['name']);
		if (isset($data['enable'])) {
			$this->db->set('enable', $data['enable']);
		}
		$this->db->where('id', $data['id']);
		$this->db->update('categories');
	}

	public function remove_category($data) {
		$this->db->delete('categories', array('id' => $data['id']));
	}

	public function get_keywords() {
		$query = "SELECT keywords.*, categories.name AS category FROM keywords JOIN categories ON keywords.idcategory = categories.id";
		return $this->db->query($query)->result_array();
	}

	public function add_keyword($data) {
		$data_insert = array(
			'name' => $data['name'],
			'idcategory' => $data['idcategory'],
			'priority' => $data['priority'],
			'searchterm' => $data['searchterm']
		);
		$this->db->insert('keywords', $data_insert);
		return $this->db->insert_id();
	}

	public function edit_keyword($data) {
		$this->db->set('name', $data['name']);
		$this->db->where('id', $data['id']);
		$this->db->update('keywords');
	}

	public function remove_keyword($data) {
		$this->db->delete('keywords', array('id' => $data['id']));
	}

	public function get_keywords_bycat($idcat) {
		$query = "SELECT * FROM keywords WHERE idcategory = ".$idcat;
		return $this->db->query($query)->result_array();
	}

	public function search_term_result_bycat($data) {
		$protocol = 'http';
		$port = '8983';
		$host = '74.208.40.204';
		$path = '/solr/recordings';
		$url = $protocol."://".$host.":".$port.$path."/select?wt=json";
		$data = array(
			'query' => $data['search_term'],
			'filter' => array(
				'start_rec:['.$data['startdate'].' TO '.$data['enddate'].']',
				'type:R'
			)
		);
		$data_string = json_encode($data);
		$header = array(
			'Content-Type: application/json',
			'Content-Length: '.strlen($data_string),
			'charset=UTF-8'
		);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		return json_decode(curl_exec($ch));
	}
}