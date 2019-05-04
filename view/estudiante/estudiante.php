<?php
$c = $this->model->Cantidad();
$cant = $c[0]->cant;
if ($cant > 0) {
	$page = false;
	//examino la pagina a mostrar y el inicio del registro a mostrar
	$page =  isset($_REQUEST["page"]) ? $_REQUEST["page"] : false;
	if (!$page) {
		$init = 0;
		$page = 1;
		//$c = 12;
	} else {
		$init = ($page - 1) * 13;
	}
}
//calculo el total de paginas
$total_pages = ceil($cant / 13);
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Listado de
						<?= strtoupper($_REQUEST['c']); ?> <a class="btn btn-sm btn-primary btn-round pull-right" href="?c=estudiante&a=Faker"><i class="now-ui-icons ui-1_simple-add"></i></a>
					</h4>

				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="myTable" class="table">
							<thead class=" text-primary">
								<th>
									Nombre
								</th>
								<th>
									Estado
								</th>
								<th>
									Identificación
								</th>
								<th>
									Ficha
								</th>
								<th>
									Acciones
								</th>
							</thead>
							<tbody>
								<?php
								if (isset($init)) :
									foreach ($this->model->Listar(13, $init) as $r) :
									?>
										<tr>
											<td>
												<?= $r->student_name." ".$r->last_name; ?>
											</td>
											<td>
												<?= $r->status ?>
											</td>
											<td>
												<?= $r->identification; ?>
											</td>
											<td>
												<?= $r->tok_name; ?>
											</td>
											<td class="text-center">
												<div class="btn-group btn-group-sm btn-group-round" role="group" aria-label="Basic example">
													<a type=button" class="btn btn-sm btn-info btn-round" href="?c=estudiante&a=Crud&id=<?= $r->id; ?>">
														<i class="now-ui-icons ui-2_settings-90"></i>
													</a>
												</div>
											</td>
										</tr>
									<?php 
									endforeach;
								else :
									?>
										<tr>
											<td>
												<h2 class="title">
													<p>
														No 
													</p>
												</h2>
											</td>
											<td>
												<h2 class="title">
													<p>
														se 
													</p>
												</h2>
											</td>
											<td>
												<h2 class="title">
													<p>
														econtraron 
													</p>
												</h2>
											</td>
											<td>
												<h2 class="title">
													<p>
														resultados
													</p>
												</h2>
											</td>
										</tr>
									<?php
								endif; 
									?>
							</tbody>
							<nav>
								<ul class="pagination pagination-primary">
									<?php
									if ($total_pages > 1) {
										if ($page != 1) {
											?>
											<li class="page-item"><a class="page-link" href="index.php?c=estudiante&page=<?= $page - 1; ?>"><span aria-hidden="true">&laquo;</span></a></li>
										<?php
										}
										for ($i = 1; $i <= $total_pages; $i++) {
												if ($page == $i) {
												?>
												<li class="page-item active"><a class="page-link" href="#"><?= $page; ?></a></li>
												<?php
												} else {
												?>
												<li class="page-item"><a class="page-link" href="index.php?c=estudiante&page=<?= $i; ?>"><?= $i; ?></a></li>
												<?php
												}
										}
										if ($page != $total_pages) {
											?>
											<li class="page-item"><a class="page-link" href="index.php?c=estudiante&page=<?= $page + 1; ?>"><span aria-hidden="true">&raquo;</span></a></li>
										<?php
										}								
									}
									?>
								</ul>
							</nav>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<h6>Elementos econtrados :<?= ' ' . $cant; ?></h6>
				</div>
			</div>
		</div>
	</div>
</div>