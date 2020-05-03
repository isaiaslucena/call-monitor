<div class="row">
	<div class="col-lg-12">
		<div class="hpanel">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<div class="text-right">
							<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modaladdkey">
								<i class="fa fa-plus"></i> Adicionar
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-body p-xl">
				<div id="divtablekeywords" class="table-responsive">
					<table id="tablekeywords" cellpadding="0.5" cellspacing="1" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">ID</th>
								<th class="text-center">Palavra-Chave</th>
								<th class="text-center">Categoria</th>
								<th class="text-center">Opções</th>
							</tr>
						</thead>
						<tbody id="tablekeywordsbody" class="text-center"></tbody>
						<tfoot>
							<tr>
								<th class="text-center">ID</th>
								<th class="text-center">Palavra-Chave</th>
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

<div class="modal fade" id="modaladdkey" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" style="margin-top: 15px">
		<div class="modal-content">
			<div class="modal-header text-center" style="padding: 15px">
				<h3 id="maddtitle">Adicionar</h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class=" col-md-12">
						<div class="form-group">
							<label>Nome de Palavra-chave</label>
							<input type="text" class="form-control" id="maddkeyinpname" required aria-required="true" aria-invalid="true" autocomplete="off">
							<label id="maddkeyinpnameerr" class="error" for="" style="display: none"></label>
						</div>
						<div class="form-group">
							<label>Prioridade</label>
							<select id="maddkeyinpprio" class="form-control m-b">
								<option selected val="1">1</option>
								<option val="2">2</option>
								<option val="3">3</option>
								<option val="4">4</option>
								<option val="5">5</option>
							</select>
						</div>
						<div class="form-group">
							<label>Categoria</label>
							<select id="maddkeyinpcat" class="form-control m-b" required>
								<option selected val="selectone">Selecione uma categoria</option>
								<?php foreach ($categories as $category) { ?>
									<option val="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
								<?php } ?>
							</select>
							<label id="maddkeyinpcaterr" class="error" for="" style="display: none"></label>
						</div>
						<div class="form-group">
							<label>Termo de busca</label>
							<textarea type="text" class="form-control" id="maddkeyinpsearcht" required aria-required="true" aria-invalid="true" autocomplete="off" rows="8"></textarea>
							<label id="maddkeyinpsearchterr" class="error" for="" style="display: none"></label>
						</div>
					</div>
				</div>
			</div>
			<div id="modasnfooter" class="modal-footer">
				<button id="maddkeybtncancel" class="btn w-xs btn-default" data-dismiss="modal">Cancelar</button>
				<button id="maddkeybtnadd" type="button" class="ladda-button btn btn-primary" data-style="zoom-in" data-edit="false">Adicionar</button>
			</div>
		</div>
	</div>
</div>