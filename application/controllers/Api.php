<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	function index() {
		header("HTTP/1.1 401: Not Authorized");
	}

	function get_companies() {
		$this->load->model('api_model');
		$companies = $this->api_model->get_companies();

		header('Content-Type: application/json, charset=utf-8');
		print json_encode($companies);
	}

	function check_file($idcompany, $filename) {
		$this->load->model('api_model');
		$numfound = $this->api_model->check_file($idcompany, $filename);

		if ($numfound == 0) {
			print json_encode($message["file_exist"] = 0);
		} else {
			print json_encode($message["file_exist"] = 1);
		}
	}

	function check_noanswer($idcompany, $idrec) {
		$this->load->model('api_model');
		$numfound = $this->api_model->check_noanswer($idcompany, $idrec);

		if ($numfound == 0) {
			print json_encode($message["file_exist"] = 0);
		} else {
			print json_encode($message["file_exist"] = 1);
		}
	}

	function save_file() {
		if ($this->input->method(TRUE) == 'POST') {
			$postdata = ($_POST = json_decode(file_get_contents("php://input"),true));
			$didemp = (int)$postdata['id_emp'];
			$namehash = sha1($postdata['filename']);
			$filename = $postdata['filename'];

			$this->load->model('api_model');
			$numfound = $this->api_model->check_file($didemp, $filename);
			if ($numfound == 0) {
				$protocol = 'http';
				$port = '8983';
				$host = '74.208.40.204';
				$path = '/solr/recordings';
				$url = $protocol."://".$host.":".$port.$path."/select?rows=1&sort=idi+desc&wt=json";
				$data = array(
					"query" => "*:*"
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
				$resultidselect = json_decode(curl_exec($ch));

				if (isset($resultidselect->response->docs[0]->id)) {
					$idresult = (int)$resultidselect->response->docs[0]->id;
				} else {
					$idresult = 0;
				}

				$did = $idresult + 1;
				$didrec = $postdata['id_rec'];
				$dfilename = $postdata['filename'];
				$dphone = $postdata["phone"];
				$dportrec = $postdata["port_rec"];
				$dtype = $postdata["type"];
				$dstartrec = $postdata["start_rec"];
				$dendrec = $postdata["end_rec"];
				$dtranscstart = $postdata["transc_start"];
				$dtranscend = $postdata["transc_end"];
				$dcontent = $postdata["text_content"];
				$dtimes = json_encode($postdata['text_times']);
				$snow = strtotime("now");
				$dnow = date('Y-m-d\TH:i:s\Z', $snow);

				$url = $protocol."://".$host.":".$port.$path."/update?wt=json";
				//insert into Solr
				$data = array(
					"add" => array(
						"doc" => array(
							"hash" => $namehash,
							"id" => $did,
							"id_emp" => (int)$didemp,
							"id_rec" => $didrec,
							"filename" => $dfilename,
							"phone" => $dphone,
							"port_rec" => $dportrec,
							"type" => $dtype,
							"start_rec" => $dstartrec,
							"end_rec" => $dendrec,
							"transc_start" => $dtranscstart,
							"transc_end" => $dtranscend,
							"inserted" => $dnow,
							"text_content" => $dcontent,
							"text_times" => $dtimes
						),
					"commitWithin" => 200,
					),
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
				$resultcurl = curl_exec($ch);

				header('Content-Type: application/json');
				$message = "File created with id ".$did;
				print json_encode($message);
			} else {
				header('Content-Type: application/json');
				$message = "File already on database!";
				print json_encode($message);
			}
		} else {
			header("HTTP/1.1 403 Forbidden");
		}
	}

	function get_file($idcompany, $date, $filename) {
		$rootdir = '/audiofiles/';
		$destfile = $rootdir.$idcompany.'/'.$date.'/'.$filename;
		// var_dump($destfile);
		// exit();

		if (file_exists($destfile)) {
			header('X-Sendfile: '.$destfile);
			header('Content-Type: audio/mpeg');
			header('Content-Disposition: attachment; filename="'.basename($destfile).'"');
			header('Access-Control-Allow-Origin: *');
		} else {
			echo "Não econtrado!";
			// header("HTTP/1.1 404 Not Found");
		}
	}

	function get_calls() {
		if ($this->input->method(TRUE) == 'POST') {
			$postdata = ($_POST = json_decode(file_get_contents("php://input"),true));

			$this->load->model('api_model');
			$data = $this->api_model->get_calls($postdata);

			header('Content-Type: application/json');
			print json_encode($data);
		} else {
			header('HTTP/1.1 403 Forbidden');
		}
	}

	function get_call_info($idcinfo) {
		$this->load->model('api_model');
		$data = $this->api_model->get_call_info($idcinfo);

		header('Content-Type: application/json');
		print json_encode($data);
	}

	function categories() {
		$this->load->model('api_model');
		header('Content-Type: application/json, charset=utf-8');
		print json_encode($this->api_model->get_categories());
	}

	function add_category() {
		if ($this->input->method(TRUE) == 'POST') {
			$postdata = ($_POST = json_decode(file_get_contents("php://input"),true));

			$this->load->model('api_model');
			$id['id_added'] = $this->api_model->add_category($postdata);
			header('Content-Type: application/json, charset=utf-8');
			print json_encode($id);
		} else {
			header("HTTP/1.1 403 Forbidden");
		}
	}

	function edit_category() {
		if ($this->input->method(TRUE) == 'POST') {
			$postdata = ($_POST = json_decode(file_get_contents("php://input"),true));

			$this->load->model('api_model');
			$id['id_edited'] = $this->api_model->edit_category($postdata);
			header('Content-Type: application/json, charset=utf-8');
			print json_encode($id);
		} else {
			header("HTTP/1.1 403 Forbidden");
		}
	}

	function remove_category() {
		if ($this->input->method(TRUE) == 'POST') {
			$postdata = ($_POST = json_decode(file_get_contents("php://input"),true));

			$this->load->model('api_model');
			$id['id_removed'] = $this->api_model->remove_category($postdata);
			header('Content-Type: application/json, charset=utf-8');
			print json_encode($id);
		} else {
			header("HTTP/1.1 403 Forbidden");
		}
	}

	function keywords() {
		$this->load->model('api_model');
		header('Content-Type: application/json, charset=utf-8');
		print json_encode($this->api_model->get_keywords());
	}

	function add_keyword() {
		if ($this->input->method(TRUE) == 'POST') {
			$postdata = ($_POST = json_decode(file_get_contents("php://input"),true));

			$this->load->model('api_model');
			$id['id_added'] = $this->api_model->add_keyword($postdata);
			header('Content-Type: application/json, charset=utf-8');
			print json_encode($id);
		} else {
			header("HTTP/1.1 403 Forbidden");
		}
	}

	function search_term_result_bycat($idcategory) {
		if ($this->input->method(TRUE) == 'POST') {
			$postdata = ($_POST = json_decode(file_get_contents("php://input"),true));

			$this->load->model('api_model');

			$keywords = $this->api_model->get_keywords_bycat($idcategory);

			$results = array();
			foreach ($keywords as $keyword) {
				$searchdata = array(
					'startdate' => $postdata['startdate'],
					'enddate' => $postdata['enddate'],
					'search_term' => $keyword['searchterm']
				);

				$resultsolr = $this->api_model->search_term_result_bycat($searchdata);

				// var_dump($resultsolr);
				// exit();

				$result = array(
					'keyword' => $keyword['name'],
					'keyword_id' => (int)$keyword['id'],
					'quant' => $resultsolr->response->numFound
				);

				array_push($results, $result);
			}

			header('Content-Type: application/json, charset=utf-8');
			print json_encode($results);
		} else {
			header("HTTP/1.1 403 Forbidden");
		}
	}
}
