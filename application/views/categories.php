<div class="row">
	<div class="col-md-12">
		<div class="hpanel">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<div class="text-right">
							<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modaladdcat">
								<i class="fa fa-plus"></i> Adicionar
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-body p-xl">
				<div id="divtablecategories" class="table-responsive">
					<table id="tablecategories" cellpadding="0.5" cellspacing="1" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">ID</th>
								<th class="text-center">Categoria</th>
								<th class="text-center">Opções</th>
							</tr>
						</thead>
						<tbody id="tablecategoriesbody" class="text-center"></tbody>
						<tfoot>
							<tr>
								<th class="text-center">ID</th>
								<th class="text-center">Categoria</th>
								<th class="text-center">Opções</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modaladdcat" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm" style="margin-top: 15px">
		<div class="modal-content">
			<div class="modal-header text-center" style="padding: 15px">
				<h3 id="maddtitle">Adicionar</h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class=" col-md-12">
						<div class="form-group">
							<label>Nome de categoria</label>
							<input type="text" class="form-control" id="maddcatinpname" required aria-required="true" aria-invalid="true" autocomplete="off">
							<label id="maddcatinpnameerr" class="error" for="" style="display: none"></label>
						</div>

					</div>
				</div>
			</div>
			<div id="modasnfooter" class="modal-footer">
				<button id="maddcatbtncancel" class="btn w-xs btn-default" data-dismiss="modal">Cancelar</button>
				<button id="maddcatbtnadd" type="button" class="ladda-button btn btn-primary" data-style="zoom-in" data-edit="false">Adicionar</button>
			</div>
		</div>
	</div>
</div>