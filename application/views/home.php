<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="theme-color" content="">
		<title>Call Monitor - Home</title>
		<link rel="shortcut icon" href="/assets/imgs/phoneoutline.ico" type="image/x-icon">

		<!-- JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.0.1/color-thief.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.18.0/sweetalert2.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fc-3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.pt-BR.min.js"></script>
		<script src="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-pt_BR.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
		<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
		<script src="http://jcrop-cdn.tapmodo.com/v0.9.12/js/jquery.Jcrop.min.js"></script>

		<!--C3 Charts-->
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/d3/d3.min.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/c3/c3.min.js"></script>
		<!--Mapael-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-mapael/2.1.0/js/jquery.mapael.min.js"></script>
		<script src="/home/js_brasilids"></script>

		<!-- App scripts -->
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/ladda/dist/spin.min.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/ladda/dist/ladda.min.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/ladda/dist/ladda.jquery.min.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/metisMenu/dist/metisMenu.min.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/iCheck/icheck.min.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/peity/jquery.peity.min.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/sparkline/index.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/scripts/homer.js"></script>

		<!-- CSS -->
		<!-- Vendor styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"/>
		<link rel="stylesheet" href="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fc-3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"/>
		<link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.18.0/sweetalert2.min.css"/>
		<link rel="stylesheet" href="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/metisMenu/dist/metisMenu.css"/>
		<link rel="stylesheet" href="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/animate.css/animate.css"/>
		<link rel="stylesheet" href="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/ladda/dist/ladda-themeless.min.css"/>
		<link rel="stylesheet" href="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/c3/c3.min.css"/>
		<link rel="stylesheet" href="http://jcrop-cdn.tapmodo.com/v0.9.12/css/jquery.Jcrop.min.css"/>

		<!-- App styles -->
		<link rel="stylesheet" href="/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" href="/assets/pe-icon-7-stroke/css/helper.css">
		<link rel="stylesheet" href="http://webapplayers.com/homer_admin-v2.0/light-shadow/styles/style.css">
		<!-- <link rel="stylesheet" href="http://webapplayers.com/homer_admin-v2.0/styles/style.css"> -->

		<!-- Custom styles -->
		<link rel="stylesheet" href="/assets/custom.css">
	</head>
	<body class="light-skin fixed-navbar sidebar-scroll hide-sidebar" style="color: #333333">
		<!-- Header -->
		<div id="header">
			<div id="logo" class="light-version" style="padding: 0; margin: auto;">
				<img id="bannerheader" class="center-block" style="max-height: 100%" src="/assets/imgs/phoneoutlinelogo.png" alt="Logo" crossOrigin="anonymous">
			</div>
			<div id="logomobile" class="small-logo" style="padding-top: 0px; position: absolute; width: 80%; height: 100%">
				<img id="bannerheaders" class="center-block" style="max-height: 100%; max-width: 80%;" src="/assets/imgs/phoneoutlinelogo.png" alt="Logo" crossOrigin="anonymous">
			</div>
			<div role="navigation">
				<div id="hide-menu" class="header-link" style="z-index: 900">
					<i class="fa fa-bars"></i>
				</div>
				<div class="mobile-menu">
					<button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
						<i class="fa fa-chevron-down"></i>
					</button>
					<div class="collapse mobile-navbar" id="mobile-collapse">
						<ul class="nav navbar-nav">
							<li>
								<a class="" href="#">Perfil</a>
							</li>
							<li>
								<a class="" href="#">Configurações</a>
							</li>
							<li>
								<a class="" href="#">Sair</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="navbar-right">
						<ul class="nav navbar-nav no-borders">
							<li class="dropdown" title="Atualizar">
								<a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown" aria-expanded="false">
									<i class="pe-7s-refresh"></i>
									<span id="countdownrefresh" class="label label-success" style="right: 5px; display: none;">0</span>
								</a>
								<ul id="cdrefreshlist" class="dropdown-menu hdropdown bounceInDown">
										<div class="title">Atualizar em:</div>
										<!-- {* <li>
											<a class="cdrefreshitem" data-refreshtm="10">
												<i id="icheck10" class="fa fa-check" style="display: none"></i>
												10 segundos
											</a>
										</li>
										<li>
											<a class="cdrefreshitem" data-refreshtm="30">
												<i id="icheck30" class="fa fa-check" style="display: none"></i>
												30 segundos
											</a>
										</li> *} -->
										<li>
											<a class="cdrefreshitem" data-refreshtm="60">
												<i id="icheck60" class="fa fa-check" style="display: none"></i>
												1 minuto</a>
										</li>
										<li>
											<a class="cdrefreshitem" data-refreshtm="300">
												<i id="icheck300" class="fa fa-check" style="display: none"></i>
												5 minutos</a>
										</li>
										<li>
											<a class="cdrefreshitem" data-refreshtm="600">
												<i id="icheck600" class="fa fa-check" style="display: none"></i>
												10 Minutos</a>
										</li>
										<li class="summary">
											<a class="cdrefreshitem" data-refreshtm="disable">
												<i id="icheckdisable" class="fa fa-check"></i>
												Desligado
											</a>
										</li>
								</ul>
							</li>

							<li class="dropdown" title="Opções">
								<a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown" aria-expanded="false">
								<i class="pe-7s-user"></i>
								</a>
								<ul class="dropdown-menu hdropdown bounceInDown">
									<div class="title">Nome do Usuário</div>
									<li><a>Perfil</a></li>
									<li><a>Cofigurações</a></li>
									<li class="summary"><a href="/login">Sair</a></li>
								</ul>
							</li>
						</ul>
				</div>
			</div>
		</div>

		<!-- Left Menu -->
		<aside id="menu">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
				<div id="navigation" style="overflow: hidden; width: auto; height: 100%;">
					<div class="profile-picture">
						<a href="index.html">
							<img src="assets/imgs/user-circle-o.png" class="img-circle m-b" alt="logo">
						</a>

						<div class="stats-label text-color">
							<span class="font-extra-bold font-uppercase">Robert Razer</span>

							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">
									<small class="text-muted">Founder of App <b class="caret"></b></small>
								</a>
								<ul class="dropdown-menu animated flipInX m-t-xs">
									<li><a href="contacts.html">Contacts</a></li>
									<li><a href="profile.html">Profile</a></li>
									<li><a href="analytics.html">Analytics</a></li>
									<li class="divider"></li>
									<li><a href="login.html">Logout</a></li>
								</ul>
							</div>

							<div id="sparkline1" class="small-chart m-t-sm"><canvas width="119" height="30" style="display: inline-block; width: 119px; height: 30px; vertical-align: top;"></canvas></div>
							<div>
								<h4 class="font-extra-bold m-b-xs">
									$260 104,200
								</h4>
								<small class="text-muted">Your income from the last year in sales product X.</small>
							</div>
						</div>
					</div>
					<ul class="nav" id="side-menu">
							<li id="lihome" data-page="home" class="active">
								<a><span class="nav-label">Home</span></a>
							</li>
							<li id="licat" data-page="categories" data-desc="Adicionar, editar e remover categorias.">
								<a><span class="nav-label">Categorias</span></a>
							</li>
							<li id="likey" data-page="keywords" data-desc="Adicionar, editar e remover palavras-chave.">
								<a><span class="nav-label">Palavras-Chave</span></a>
							</li>
							<li id="liusr" data-page="users" data-desc="Adicionar, editar e remover usuários.">
								<a><span class="nav-label">Usuários</span></a>
							</li>
							<li id="ligp" data-page="groups" data-desc="Adicionar, editar e remover grupos.">
								<a><span class="nav-label">Grupos</span></a>
							</li>
							<li id="lirep" data-page="reports" data-desc="Exibir relatórios.">
								<a><span class="nav-label">Relatórios</span></a>
							</li>
							<!-- <li>
								<a href="#"><span class="nav-label">Interface</span><span class="fa arrow"></span> </a>
								<ul class="nav nav-second-level collapse" aria-expanded="false">
									<li><a href="panels.html">Panels design</a></li>
									<li><a href="typography.html">Typography</a></li>
									<li><a href="buttons.html">Colors &amp; Buttons</a></li>
									<li><a href="components.html">Components</a></li>
									<li><a href="alerts.html">Alerts</a></li>
									<li><a href="modals.html">Modals</a></li>
									<li><a href="loading_buttons.html">Loading buttons</a></li>
									<li><a href="draggable.html">Draggable panels</a></li>
									<li><a href="code_editor.html">Code editor</a></li>
									<li><a href="email_template.html">Email template</a></li>
									<li><a href="nestable_list.html">List</a></li>
									<li><a href="tour.html">Tour</a></li>
									<li><a href="icons.html">Icons library</a></li>
								</ul>
							</li> -->
					</ul>
				</div>
			<div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 0px; position: absolute; top: 0px; opacity: 0.3; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 383.21px;"></div>
			<div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
			</div>
		</aside>

		<!-- Main Wrapper -->
		<div id="wrapper">
			<div id="divhome" class="container-fluid content animate-panel" data-effect="zoomIn" data-child="element">
				<!-- {* Change client *} -->
				<!-- {* <div id="changeclient" class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 element">
						<div class="hpanel">
							<div class="panel-body">
								<select id="selclient" class="selectpicker" data-size="10" data-width="fit" data-live-search="true" data-style="btn-default btn-sm" title="Selecione um cliente">
									{foreach from=$clients item=client}
										<option data-clientid="{$client.Id}">{$client.Nome}</option>
									{/foreach}
								</select>
							</div>
						</div>
					</div>
				</div> *} -->

				<!-- {* C3 Charts *} -->
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4 element">
						<div class="hpanel stats">
							<div class="panel-body h-200">
								<div class="stats-title text-center">
									<h4>Requisições planos de saúde</h4>
								</div>
								<div id="chartdonut"></div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 element">
						<div class="hpanel stats">
							<div class="panel-body h-200">
								<div class="stats-title text-center">
									<h4>DDD ligações recebidas</h4>
								</div>
								<br>
								<div id="brmap" class="mapcontainer">
									<div class="map"></div>
									<div class="areaLegend" style="position: absolute; top: 55%"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 element">
						<div class="hpanel stats">
							<div class="panel-body h-200">
								<div class="stats-title text-center">
									<h4>Sentimentos</h4>
								</div>
								<div id="chartstacked"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- {* Evolution c3 chart and datepicker*} -->
				<div class="row">
					<div class="col-sm-7 col-md-7 col-lg-7 element">
						<div class="hpanel stats">
							<div class="panel-body h-200">
								<div class="stats-title text-center">
									<h4>Ligações por dia</h4>
								</div>
								<div id="chartlinestacked"></div>
							</div>
						</div>
					</div>

					<div class="col-sm-5 col-md-5 col-lg-5 element">
						<div class="hpanel stats">
							<div class="panel-body h-200">
								<!-- {* <div id="datepicker" class="center-block datepicker-inline"></div> *} -->
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12 text-center">
										<div id="event_period">
											<div id="dpsdate" type="text" class="actual_range">
												<h5 class="text-center">DATA INICIAL</h5>
											</div>
											<div id="dpedate" type="text" class="actual_range">
												<h5 class="text-center">DATA FINAL</h5>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="center-block text-center">
											<button id="dpbtn" class="ladda-button btn btn-primary" data-style="zoom-in">Confirmar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- {* Butons *} -->
				<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 element">
							<div class="hpanel">
								<div id="divbtnsnews" class="panel-body">
									<div id="btnsgroupnews" class="btn-group btn-group-justified center-block" role="group" aria-label="...">
										<div class="btn-group" role="group">
											<button id="btnasearch" class="btn btn-primary" type="button"><i class="fa fa-search-plus"></i> Pesquisa avançada</button>
										</div>
										<div class="btn-group" role="group">
											<button id="btnmyclipp" class="btn btn-primary" type="button"><i class="fa fa-thumb-tack"></i> Minhas Pesquisas </button>
										</div>
										<div class="btn-group" role="group">
											<button id="btncharts" class="btn btn-primary" type="button"><i class="fa fa-line-chart"></i> Estatísticas</button>
										</div>
										<!-- {* <div class="btn-group" role="group">
											<a id="btnnpapper" class="btn btn-primary" type="button"><i class="fa fa-newspaper-o"></i> Banca</a>
										</div> *} -->
										<div class="btn-group" role="group">
											<button id="btnepdf" class="btn btn-primary" type="button"><i class="fa fa-file-pdf-o"></i> PDF</button>
										</div>
										<div class="btn-group" role="group">
											<button id="btneexcel" class="btn btn-primary" type="button"><i class="fa fa-file-excel-o"></i> Excel</button>
										</div>
										<div class="btn-group" role="group">
											<button id="btnforward" class="btn btn-primary" type="button"><i class="fa fa-arrow-circle-right"></i> Encaminhar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>

				<!-- {* Subjects and Keywords *} -->
				<!-- {* <div id="sublistrow" class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 element">
						<div class="hpanel">
							<div id="sublist" class="panel-body center-block text-center"></div>
						</div>
					</div>
				</div> *} -->

				<!-- {* News Table *} -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 element">
						<div id="newstable" class="hpanel">
							<div class="panel-body">
								<div id="divtablenews" class="table-responsive">
									<table id="tablenews" cellpadding="0.5" cellspacing="1" class="table table-bordered table-striped table-hover">
										<thead>
											<tr>
												<th class="text-center">Data/Hora</th>
												<th class="text-center">Tipo</th>
												<th class="text-center">Origem</th>
												<th class="text-center">Destino</th>
												<th class="text-center">Tempo</th>
												<th class="text-center">Texto</th>
												<th class="text-center">Avaliação</th>
											</tr>
										</thead>
										<tbody id="tnewsbody" class="text-center">
											<tr>
												<td class="text-center"></th>
												<td class="text-center"></th>
												<td class="text-center"></th>
												<td class="text-center"></th>
												<td class="text-center"></th>
												<td class="text-center"></th>
												<td class="text-center"></th>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th class="text-center">Data/Hora</th>
												<th class="text-center">Tipo</th>
												<th class="text-center">Origem</th>
												<th class="text-center">Destino</th>
												<th class="text-center">Tempo</th>
												<th class="text-center">Texto</th>
												<th class="text-center">Avaliação</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- {* Export News Table *} -->
				<div class="row" style="display: none">
					<div class="col-sm-12 col-md-12 col-lg-12 element">
						<div class="hpanel">
							<div class="panel-body">
								<div id="divtableexport" class="table-responsive">
									<table id="tableexport" cellpadding="0.5" cellspacing="1" class="table table-bordered table-striped table-hover">
										<thead>
											<tr>
												<th class="text-center">ID</th>
												<th class="text-center">Data</th>
												<th class="text-center">Hora</th>
												<th class="text-center">Título</th>
												<th class="text-center">URL</th>
												<th class="text-center">URL Sistema</th>
												<th class="text-center">Tipo de Veículo</th>
												<th class="text-center">Veículo</th>
												<th class="text-center">Editoria</th>
												<th class="text-center">Assunto</th>
												<th class="text-center">Palavra-Chave</th>
												<th class="text-center">Tier</th>
												<th class="text-left">Valor</th>
												<th class="text-left">Audiência</th>
												<th class="text-center">Avaliação</th>
												<th class="text-center">Motivação</th>
											</tr>
										</thead>
										<tbody class="text-center"></tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="divheader" class="normalheader" style="display: none;">
				<div class="hpanel">
					<div class="panel-body">
						<a class="small-header-action" href="">
							<div class="clip-header"><i class="fa fa-arrow-down"></i></div>
						</a>
						<div id="hbreadcrumb" class="pull-right">
							<ol class="hbreadcrumb breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active"><span id="divcbheader"></span></li>
							</ol>
						</div>
						<h2 id="divtheader" class="font-light m-b-xs"></h2>
						<small id="divdheader"></small>
					</div>
				</div>
			</div>

			<div id="divmenu" class="content" style="display: none;"></div>

			<!-- <footer class="footer">
				<span class="pull-right">
					Call Monitor
				</span>
			</footer> -->

			<div class="modal fade" id="showsinglenews" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" style="margin-top: 15px">
					<div class="modal-content">
						<div class="modal-header text-center" style="padding: 15px">
							<div id="modaltitlerow" class="row">
								<div class="col-sm-4 col-md-4 col-lg-4 text-left">
									<h5 id="modaltitleve" class="text-primary"></h5>
									<h5 id="modaltitleed" class="text-primary"></h5>
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4 text-center">
									<h5 id="modaltitlevm" class="text-primary"></h5>
									<h5 id="modaltitleva" class="text-primary"></h5>
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4 text-right">
									<h5 id="modaltitlevq" class="text-primary"></h5>
									<h5 id="modaltitlevv" class="text-primary"></h5>
								</div>
							</div>
						</div>
						<div class="modal-body">
							<div id="modalcsinglenewsi" class="row" style="display: none">
								<div id="mediaimgload" class="col-sm-4 col-md-4 col-lg-4 center-block text-center" style="padding-top: 5%">
									<img src="/assets/imgs/loading.gif" width="40"><br>
								</div>
								<div id="mediactni" class="col-sm-4 col-md-4 col-lg-4" style="max-height: 400px; overflow-y: hidden; overflow-x: hidden; display: none">
								</div>
								<div class="col-sm-8 col-md-8 col-lg-8">
									<h5 id="datemediactni" class="text-muted"></h5>
									<p id="modaltitlevki" class="text-primary"></p>
									<h3 id="mediactnti"></h3>
									<p id="modal-texti" class="text-justify"></p>
								</div>
								<div id="divmediacanvas" style="display: none"></div>
							</div>

							<div id="modalcsinglenewsv" style="display: none">
								<div class="row">
									<div id="mediavideoload" class="col-sm-12 col-md-12 col-lg-12 center-block text-center">
										<img src="/assets/imgs/loading.gif" width="50"><br>
									</div>
									<div id="mediactnv" class="col-sm-12 col-md-12 col-lg-12" style="display: none"></div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12 center-block">
										<h5 id="datemediactnv" class="text-muted"></h5>
										<p id="modaltitlevkv" class="text-primary"></p>
										<h3 id="mediactntv"></h3>
										<p id="modal-textv" class="text-justify"></p>
									</div>
								</div>
							</div>

							<br>

							<div id="modalwsinglenews" class="row center-block text-center">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<img src="/assets/imgs/loading.gif" alt="Carregando" width="60">
									<h3 id="waitmsg">Carregando...</h3>
								</div>
							</div>

							<h6 id="modalcsingid" class="font-trans pull-right"></h6>
						</div>
						<div id="modasnfooter" class="modal-footer">
							<div id="btnsgroupsnews" class="btn-group btn-group-justified center-block" style="display: none;">
								<div class="btn-group">
									<a id="btndown" class="btn btn-sm w-xs btn-default">Baixar</a>
								</div>
								<div class="btn-group">
									<a id="btnexpand" class="btn btn-sm w-xs btn-default">Expandir</a>
								</div>
								<div class="btn-group">
									<a id="btnwapp" class="btn btn-sm w-xs btn-default">Enviar por WhatsApp</a>
								</div>
								<div class="btn-group">
									<a id="btnmail" class="btn btn-sm w-xs btn-default">Enviar por e-mail</a>
								</div>
								<div class="btn-group">
									<a id="btnurl" class="btn btn-sm w-xs btn-default" target="_blank">Abrir página</a>
								</div>
								<div class="btn-group">
									<a id="btnclose" class="btn btn-sm w-xs btn-default" data-dismiss="modal">Fechar</a>
								</div>
								<div class="btn-group">
									<a id="btnselclo" class="btn btn-sm w-xs btn-primary">Fechar e selecionar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="advancedsearch" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" style="margin-top: 15px">
					<div class="modal-content">
						<div class="modal-header text-center" style="padding: 15px">
							<h3>Pesquisa avançada</h3>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
										<label>Assunto</label>
										<select id="adssubject" class="selectpicker form-control"
										data-size="10" data-style="btn btn-sm btn-default"
										data-live-search="true" data-selected-text-format="count > 5" multiple>
										</select>
									</div>
									<div class="form-group">
										<label>Palavra-chave</label>
										<select id="adskeyword" class="selectpicker form-control disabled"
										data-size="10" data-style="btn btn-sm btn-default"
										data-live-search="true" data-selected-text-format="count > 5"
										title="Selecione o assunto" multiple disabled>
										</select>
									</div>
									<div class="form-group">
										<label>Tipo de Veículo</label>
										<select id="adstveiculo" class="selectpicker form-control"
										data-size="10" data-style="btn btn-sm btn-default"
										data-live-search="true" data-selected-text-format="count > 5" multiple>
										</select>
									</div>
									<div id="adsveiculositesfg" class="form-group" style="display: none;">
										<label>Veículo - Sites</label>
										<input id="adsveiculosites" type="text" placeholder="Digite para pesquisar" autocomplete="off">
										</select>
									</div>
									<div class="form-group">
										<label>Veículo</label>
										<select id="adsveiculo" class="selectpicker form-control disabled"
										data-size="10" data-style="btn btn-sm btn-default"
										data-live-search="true" data-selected-text-format="count > 5"
										title="Selecione o tipo de veículo" multiple disabled>
										</select>
									</div>
									<div class="form-group">
										<label>Editoria</label>
										<select id="adseditoria" class="selectpicker form-control disabled"
										data-size="10" data-style="btn btn-sm btn-default" data-live-search="true"
										data-selected-text-format="count > 5" title="Selecione o veículo" multiple disabled>
										</select>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
										<label>Data</label>
										<div class="input-daterange input-group" id="adsdatepicker">
											<input type="text" class="input-sm form-control tooltipinput" id="adsstartdate" name="adsstartdate" placeholder="Início" autocomplete="off"
											data-toggle="tooltip" data-placement="top" title="Preenchimento obrigatório!"/>
											<span class="input-group-addon">Até</span>
											<input type="text" class="input-sm form-control tooltipinput" id="adsenddate" name="adsenddate" placeholder="Fim" autocomplete="off"
											data-toggle="tooltip" data-placement="top" title="Preenchimento obrigatório!"/>
										</div>
									</div>

									<div class="form-group">
										<label>Hora</label>
										<div class="input-daterange input-group">
											<input required type="text" class="input-sm form-control clockpicker" id="adsstarttime" name="adsstarttime" placeholder="Início" value="00:00" autocomplete="off"/>
											<span class="input-group-addon">Até</span>
											<input required type="text" class="input-sm form-control clockpicker" id="adsendtime" name="adsendtime" placeholder="Fim" value="23:59" autocomplete="off"/>
										</div>
									</div>

									<div class="form-group">
										<label>Estado</label>
										<select id="adsstates" class="selectpicker form-control" data-size="10" data-style="btn btn-sm btn-default" data-live-search="true" multiple>
										</select>
									</div>

									<div class="form-group">
										<label>Texto</label>
										<input type="text" id="adstext" name="adstext" class="form-control input-sm" autocomplete="off">
									</div>

									<div class="row">
										<div class="col-sm-4 col-md-4 col-lg-4">
											<div class="form-group">
												<label>Destaque</label>
												<div>
													<label style="font-weight: normal;">
														<input type="radio" data-type="adsdestaque" name="adsdestaque" data-val="1" class="i-checks">
													</label>
													Sim
												</div>
												<div>
													<label style="font-weight: normal;">
														<input type="radio" data-type="adsdestaque" name="adsdestaque" data-val="2" class="i-checks">
													</label>
													Não
												</div>
											</div>
										</div>

										<div class="col-sm-4 col-md-4 col-lg-4">
											<div class="form-group">
												<label>Motivação</label>
												<div>
													<label style="font-weight: normal;">
														<input type="checkbox" data-type="adsmotivacao" data-val="0" class="i-checks">
													</label>
													Espontânea
												</div>
												<div>
													<label style="font-weight: normal;">
														<input type="checkbox" data-type="adsmotivacao" data-val="1" class="i-checks">
													</label>
													Provocada
												</div>
											</div>
										</div>

										<div class="col-sm-4 col-md-4 col-lg-4">
											<div class="form-group">
												<label>Avaliação</label>
												<div>
													<label style="font-weight: normal;">
														<input type="checkbox" data-type="adsavaliacao" name="adsavaliacao" data-val="1" class="i-checks checkavaliacao">
													</label>
													Negativo
												</div>
												<div>
													<label style="font-weight: normal;">
														<input type="checkbox" data-type="adsavaliacao" name="adsavaliacao" data-val="2" class="i-checks checkavaliacao">
													</label>
													Neutro
												</div>
												<div>
													<label class="" style="font-weight: normal;">
														<input type="checkbox" data-type="adsavaliacao" name="adsavaliacao" data-val="3" class="i-checks checkavaliacao">
													</label>
													Positivo
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar </button>
							<button id="adsbtn" type="button" class="ladda-button btn btn-primary" data-style="zoom-in">Pesquisar</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="myclipping" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sm" style="margin-top: 15px">
					<div class="modal-content">
						<div class="modal-header text-center" style="padding: 15px">
							<h4>Meu Clipping</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-12">
									<div id="mclippcreate">
										<dt id="mclippcnews"></dt>
										<div class="input-group">
											<input id="mclippiname" type="text" class="form-control input-sm tooltipinput" placeholder="Nome" aria-label="Nome"
											data-toggle="tooltip" data-placement="top" data-original-title="Preenchimento obrigatório!" autocomplete="off">
											<div class="input-group-btn">
												<button id="mclippbtncreate" class="ladda-button btn btn-sm btn-primary disabled" disabled data-style="zoom-in">
													Criar
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-12">
									<div id="mclippwait" class="center-block text-center">
										<img src="/assets/imgs/loading.gif" width="40">
									</div>
									<div id="mclipplist" class="list-group" style="display: none; max-height: 350px; overflow-y: auto;"></div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-sm btn-primary" data-dismiss="modal">Fechar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<script type="text/javascript" charset="utf-8" src="/home/js_functions"></script>
	<script type="text/javascript" charset="utf-8">
		var clientsel = 'true';
		var clientselid = 1;
		var clientselb = (clientsel == 'true');

		var rfdata, dtworker, dtrefreshworker, cid, cliid, tablenews, tableexport, tablenewsfn, cname, firsttabn,
		sectabn, subjectid, subjectnm, keywordid, keywordnm, keywordtb, keywordgf, subjectskeywords,
		headerlogo, subjecctid, subjectcount, keywordcount, mediatype, idtitle, adssearchdata,
		imgobj, jcrop_api, snewsx1, snewsy1, snewsx2, snewsy2, snewsmw, snewsmh, currtable;
		var adsdestaque = null;
		var jcropdestroy = false, vmotesp = false, vmotprov = false, vmotnenh = false, vavaneg = false,
		vavaneu = false, vavapos = false, vavanenh = false, vadvsearch = false, vmyclipp = false;
		var subkeywordsarr = [], tvarr = [], varr = [], earr = [], pcarr = [], trselected = [],
		adssubjectarr = [], adskeywordarr = [], adstveiculoarr = [], adsveiculoarr = [], adsveiculossitesarr = [],
		adseditoriaarr = [], adsstatesarr = [], adsmotivacaoarr = [], adsavaliacaoarr = [], arrtest = [],
		idsnots = [], idskws = [];

		if (window.Worker) {
			dtworker = new Worker('/home/js_worker');
		}

		var d = new Date();
		var day = d.getDate();
		var day = ('0' + day).slice(-2);
		var month = (d.getMonth() + 1);
		var month = ('0' + month).slice(-2);
		var year = d.getFullYear();
		var todaydate = year+'-'+month+'-'+day;
		var todaydate_br = day+'/'+month+'/'+year;
		var cdatebtn = $('#dpbtn').ladda();
		var cadsbtn = $('#adsbtn').ladda();
		var btncmclipp = $('#mclippbtncreate').ladda();

		$(document).ready(function() {
			$('#hide-menu').on('click', function(event){
				setTimeout(function() {
					cdonw = $('#chartdonut').width();
					chartdonut.resize({'width': cdonw});

					cstw = $('#chartstacked').width();
					chartstacked.resize({'width': cstw});

					cliw = $('#chartlinestacked').width();
					chartlinestacked.resize({'width': cliw});
				}, 500);

				if ($('body').hasClass('hide-sidebar')) {
					$('body').removeClass('hide-sidebar').addClass('show-sidebar');
				} else {
					$('body').removeClass('show-sidebar').addClass('hide-sidebar');
				}

				// if ($(window).width() < 769) {
				// 	$("body").toggleClass("show-sidebar");
				// } else {
				// 	$("body").toggleClass("hide-sidebar");
				// }
			});

			// set_tablenews(false, false);

			// tableexport = $('#tableexport').DataTable({
			// 	'order': [
			// 		[0, 'asc']
			// 	],
			// 	'destroy': true,
			// 	'autoWidth': true,
			// 	'rowId': 'Id',
			// 	'buttons': {
			// 		'buttons': [
			// 			{
			// 				'title': 'ExportarExcel',
			// 				'extend': 'excelHtml5',
			// 				// 'action': function(dt) {
			// 				// 	console.log(dt);
			// 				// },
			// 				'customize': function(xlsx) {
			// 					console.log(xlsx);
			// 					var sheet = xlsx.xl.worksheets['sheet1.xml'];

			// 					//bold at colunm "C"
			// 					// $('row c[r^="C"]', sheet).attr('s','2');
			// 					// $('row c[r^="C"]', sheet).attr('s','2');

			// 					// console.log($('row c[r="2"]', sheet));

			// 					//background row 2
			// 					$('row r[r="2"]', sheet).attr('s', '20');

			// 					//line on all rows
			// 					$('row', sheet).each(function(index, elem) {
			// 						// console.log($(elem));
			// 						// $('row c[r*="10"]', sheet).attr( 's', '25' );
			// 						$(elem).attr( 's', '25' );
			// 					});
			// 				}
			// 			}
			// 		]
			// 	},
			// 	'language': {'url': '//cdn.datatables.net/plug-ins/1.10.15/i18n/Portuguese-Brasil.json'}
			// });

			$('#tablenews').DataTable();
		});

		$('#adsdatepicker').datepicker({
			format: "dd/mm/yyyy",
			language: 'pt-BR',
			todayBtn: true,
			todayHighlight: true,
			autoclose: true
			}).on('change', function(){
				$('#adsenddate').focus();
		});

		$('#adsstarttime').clockpicker({
			autoclose: true,
		}).on('change', function(){
			$('#adsendtime').focus();
			$('html').css('overflow-y', 'hidden');
		});

		$('#adsendtime').clockpicker({
			autoclose: true
		});

		$('#event_period').datepicker({
			format: "dd/mm/yyyy",
			language: 'pt-BR',
			todayBtn: true,
			todayHighlight: true,
			inputs: $('.actual_range')
		});

		$('.tooltipinput').tooltip({
			trigger: 'manual'
		});

		$('#modal-texti').slimScroll({
			height: '250px',
			railVisible: true,
			touchScrollStep: 800
		});

		// var chartdonut = c3.generate({
		// 	bindto: document.getElementById('chartdonut'),
		// 	data: {
		// 		columns: [
		// 			['Amil', Math.floor((Math.random() * 100) + 10)],
		// 			['Unimed', Math.floor((Math.random() * 100) + 10)],
		// 			['Assim', Math.floor((Math.random() * 100) + 10)],
		// 			['Amil', Math.floor((Math.random() * 100) + 10)],
		// 			['Golden Cross', Math.floor((Math.random() * 100) + 10)],
		// 			['Intermédica', Math.floor((Math.random() * 100) + 10)],
		// 			['Sulamérica', Math.floor((Math.random() * 100) + 10)]
		// 		],
		// 		type: 'donut'
		// 	},
		// 	donut: {
		// 		label: {
		// 			format: function (value) { return value; }
		// 		}
		// 	}
		// });

		var chartdonut = c3.generate({
			bindto: '#chartdonut',
			data: {
				columns: [['Planos de Saúde', 0]],
				type: 'donut'
			},
			donut: {
				label: {
					format: function (value) { return value; }
				}
			}
		});

		// $('#brmap').mapael({
		// 	map : {
		// 		name: 'brasil',
		// 		defaultArea: {
		// 			attrs: {
		// 				"stroke": "##FFFFFF",
		// 				"stroke-width": 2
		// 			},
		// 				attrsHover: {
		// 				"fill": "#838383",
		// 				"stroke-width": 2
		// 			}
		// 		}
		// 	}
		// });
		var mapareas = {};
		var esdata = [
				{
						"Id": "11",
						"uf": "MG",
						"Estado": "Minas Gerais",
						"QNoticias": Math.floor((Math.random() * 100) + 10)
				},
				{
						"Id": "7",
						"uf": "DF",
						"Estado": "Distrito Federal",
						"QNoticias": Math.floor((Math.random() * 100) + 10)
				},
				{
						"Id": "19",
						"uf": "RJ",
						"Estado": "Rio de Janeiro",
						"QNoticias": Math.floor((Math.random() * 100) + 10)
				},
				{
						"Id": "26",
						"uf": "SP",
						"Estado": "Sao Paulo",
						"QNoticias": Math.floor((Math.random() * 100) + 10)
				}
		]

		esdata.map(function(obj, index){
			mapareas[obj.Id] = {
				text: {
					content: obj.uf,
					attrs: {
						'font-size': 20,
						'fill': '#202020'
					}
				},
				value: obj.QNoticias,
				tooltip: {content: '<span style="font-weight:bold;">'+obj.Estado+'</span><br />Matérias: '+obj.QNoticias}
			}
		});

		$('#brmap').mapael({
			map : {
				name: 'brasil',
				defaultArea: {
					attrs: {
						fill: '#CFCFCF',
						stroke: '#FFFFFF',
						'stroke-width': 2
					},
						attrsHover: {
						fill: '#DA7910',
						animDuration: 50,
						'stroke-width': 2
					}
				}
			},
			legend: {
				area: {
					slices: [
						{
							max: 0,
							attrs: {
								fill: "#CFCFCF"
							},
							label: "Nenhum"
						},
						{
							min: 1,
							max: 10,
							attrs: {
								fill: "#66D1E7"
							},
							label: "Menos que 10"
						},
						{
							min: 11,
							max: 20,
							attrs: {
								fill: "#4DBCD3"
							},
							label: "Entre 11 e 20"
						},
						{
							min: 21,
							max: 30,
							attrs: {
								fill: "#3291AA"
							},
							label: "Entre 21 e 30"
						},
						{
							min: 31,
							attrs: {
								fill: "#1A727D"
							},
							label: "Acima de 31"
						}
					]
				}
			},
			areas: mapareas
		});

		// var chartstacked = c3.generate({
		// 	bindto: document.getElementById('chartstacked'),
		// 	data: {
		// 		columns: [
		// 			['1', Math.floor((Math.random() * 100) + 10)],
		// 			['2', Math.floor((Math.random() * 100) + 10)],
		// 			['3', Math.floor((Math.random() * 100) + 10)]
		// 		],
		// 		type: 'bar',
		// 		names: {
		// 			'1': 'Negativo',
		// 			'2': 'Neutro',
		// 			'3': 'Positivo'
		// 		},
		// 		colors: {
		// 			'0': '#0010C7',
		// 			'1': '#BF0D00',
		// 			'2': '#FF8934',
		// 			'3': '#00CF03'
		// 		}
		// 	},
		// 	grid: {
		// 		y: {
		// 			lines: [{value: 0}]
		// 		}
		// 	}
		// });

		var chartstacked = c3.generate({
			bindto: document.getElementById('chartstacked'),
			data: {
				columns: [
					['1', 0],
					['2', 0],
					['3', 0]
				],
				type: 'bar',
				names: {
					'1': 'Negativo',
					'2': 'Neutro',
					'3': 'Positivo'
				},
				colors: {
					'0': '#0010C7',
					'1': '#BF0D00',
					'2': '#FF8934',
					'3': '#00CF03'
				}
			},
			grid: {
				y: {
					lines: [{value: 0}]
				}
			}
		});

		datearr = ['Data'];
		for (var i = 5; i >= 1; i--) {
			var dt = new Date();
			dt.setDate(dt.getDate()-i);
			var day = dt.getDate();
			var day = ('0' + day).slice(-2);
			var month = (dt.getMonth() + 1);
			var month = ('0' + month).slice(-2);
			var year = dt.getFullYear();
			var cdate = year+'-'+month+'-'+day;

			datearr.push(cdate);
		}
		datearr.push(todaydate);

		var chartlinestacked = c3.generate({
			bindto: document.getElementById('chartlinestacked'),
			size: {
				height: 300
			},
			data: {
					x: 'Data',
					columns: [
						datearr,
						['Quantidade', Math.floor((Math.random() * 100) + 10), Math.floor((Math.random() * 100) + 10), Math.floor((Math.random() * 100) + 10), Math.floor((Math.random() * 100) + 10) ,Math.floor((Math.random() * 100) + 10), Math.floor((Math.random() * 100) + 10), Math.floor((Math.random() * 100) + 10)],
						['Atendidas', Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10) ,Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10)],
						['Perdidas', Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10) ,Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10), Math.floor((Math.random() * 20) + 10)]
					],
					axes: {
						'Quantidade': 'y2',
					},
					types: {
						'Quantidade': 'bar',
						'Atendidas': 'spline',
						'Perdidas': 'spline'
					},
					names: {
						'Quantidade': 'Quantidade',
						'Atendidas': 'Atendidas',
						'Perdidas': 'Perdidas'
					}
			},
			axis: {
					x: {
							type: 'timeseries',
							tick: {
								format: '%Y-%m-%d'
							}
					},
					y2: {
						show: true,
					}
			}
		});

		// get_tveiculos(function(data) {
		// 	data.map(function(val, index) {
		// 		html = '<option data-type="adstveiculo" data-tveiculoid="'+val.Id+'" value="'+val.Id+'">'+val.Nome+'</option>';
		// 		$('#adstveiculo').append(html);
		// 	});
		// 	$('#adstveiculo').selectpicker('refresh');
		// });

		// get_states(function(data) {
		// 	data.map(function(val, index) {
		// 		html = '<option data-type="adsstates" data-stateid="'+val.id+'" title="'+val.uf+'" value="'+val.id+'">'+val.nome+'</option>';
		// 		$('#adsstates').append(html);
		// 	});
		// 	$('#adsstates').selectpicker('refresh');
		// });

		// var sites = new Bloodhound({
		// 	datumTokenizer: Bloodhound.tokenizers.obj.whitespace('Nome'),
		// 	queryTokenizer: Bloodhound.tokenizers.whitespace,
		// 	remote: {
		// 		url: document.origin+'/home/editorias_sites?query=%QUERY',
		// 		wildcard: '%QUERY',
		// 		filter: function (rsites) {
		// 			return $.map(rsites, function(site) {
		// 				return {
		// 					'Id': site.Id,
		// 					'Nome': site.Nome
		// 				};
		// 			});
		// 		},
		// 		identify: function(rsites) { return rsites.Id; }
		// 	}
		// });

		// sites.initialize();

		// $('#adsveiculosites').tagsinput({
		// 	typeaheadjs: [
		// 		{
		// 			minLength: 3,
		// 			hint: true,
		// 			highlight: true,
		// 			limit: 20,
		// 		},
		// 		{
		// 			itemText: 'Nome',
		// 			itemValue: 'Id',
		// 			name: 'sites',
		// 			displayKey: 'Nome',
		// 			source: sites.ttAdapter(),
		// 		},
		// 	],
		// 	freeInput: false,
		// 	itemText: 'Nome',
		// 	itemValue: 'Id'
		// });

		$('.twitter-typeahead').css('display', 'inline');

		if (clientselb) {
			subkeywordsarr = [];
			tvarr = [], varr = [], earr = [], pcarr = [];

			$('#changeclient').css('display', 'none');
			$('#selclient').attr('disabled', true);
			$('#selclient').addClass('disabled');

			$('#btnnpapper').attr({
				'href': 'http://v22.multclipp.com.br/banca/?path='+clientselid,
				'target': '_blank'
			});

			salertloading(isTouchDevice());

			load_data('startpage', clientselid, todaydate, todaydate);
		}

		if (clientselid == 0) {
			console.log('no client selected!');
		} else {
			cliid = clientselid;
		}
	</script>
	<script type="text/javascript" charset="utf-8" src="/home/js_eventlisteners"></script>
	<script type="text/javascript" charset="utf-8" src="/assets/readalong.js"></script>
</html>