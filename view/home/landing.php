<div class="wrapper">
	<div class="page-header page-header-small">
		<div class="page-header-image" data-parallax="true" style="background-image: url('assets/img/IMG_20180305_113033_HDR.jpg');">
		</div>
		<div class="content-center">
			<div class="container">
				<h1 class="title">Bienestar al Aprendiz</h1>
				<div class="text-center">
					<a href="#pablo" class="btn btn-primary btn-icon btn-round">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#pablo" class="btn btn-primary btn-icon btn-round">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#pablo" class="btn btn-primary btn-icon btn-round">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section section-about-us">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<h2 class="title">SENA Centro de Comercio y Servicio Regional Bolivar</h2>
					<h5 class="description">En bienestar tenemos para ti un conjunto de actividades y procesos que te hara crecer como un aprendiz integral durante tu formacion, tambien nos preocupamos por que tu experia en SENA sea inmemorable para que asi como nosotros nos recuerdes con afecto.</h5>
				</div>
			</div>
			<div class="separator separator-primary"></div>
			<div class="section-story-overview">
				<div class="row">
					<div class="col-md-6">
						<div class="image-container image-left" style="background-image: url('assets/img/login2.jpg')">
							<!-- First image on the left side -->
							<p class="blockquote blockquote-primary">"El bienestar debe ser apoyo fundamental en los programas de formación profesional integral ofrecidos por el Servicio Nacional de Aprendizaje."
								<br>
								<br>
								<small>-SENA</small>
							</p>
						</div>
						<!-- Second image on the left side of the article -->
						<div class="image-container" style="background-image: url('assets/img/IMG_20180731_175705 (2).jpg')"></div>
					</div>
					<div class="col-md-5">
						<!-- First image on the right side, above the article -->
						<div class="image-container image-right" style="background-image: url('assets/img/IMG_20171120_094738_HDR.jpg')"></div>
						<h3>Para medir la efectividad que las 9 dimensiones, se establecieron tres indicadores:</h3>
						<p>
							<h6>
								Aumento Nivel del Logro Educativo de los Aprendices
							</h6>
							Establecer y aumentar la valoración al interior de la entidad de la excelencia académica. ​ ​
						</p>
						<p>
							<h6>
								Disminución de la Deserción de los programas de Formación
							</h6>
							Disminuir la presencia de factores que aumentan la probabilidad de los aprendices de desertar de los procesos de formación profesional por causas de rezago escolar, falta de los recursos mínimos para garantizar su proceso de formación o desmotivación.
						</p>
						<p>
							<h6>
								Crecimiento Personal del Aprendiz
							</h6>
							Aumentar el conocimiento de sí mismo y de los demás miembros de la comunidad, reconocimiento de fortalezas y debilidades, el desarrollo de habilidades y la definición de metas para la vida, bajo los principios y valores que cada uno profesa. ​
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section section-tabs">
		<div class="container">
			<div class="row">
				<div class="col-md-10 ml-auto  mr-auto">
					<h2 id="activities" class="">Actividades Programadas</h2>
					<!-- Tabs with Background on Card -->
					<div class="card">
						<div class="card-header">
							<ul class="nav nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#psico" role="tab">Psicologia</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#health" role="tab">Salud</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#suport" role="tab">Apoyo y Sostenimiento</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#culture" role="tab">Cultura</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#sport" role="tab">Deporte</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#lider" role="tab">Liderazgo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#all" role="tab">Todas</a>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<!-- Tab panes -->
							<div class="tab-content text-center">
								<div class="tab-pane active" id="psico" role="tabpanel">
									<ul>
										<?php foreach ($this->model->ListarAccion(5) as $a) : ?>
											<li>
												<?= $a->name; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="tab-pane" id="health" role="tabpanel">
									<ul>
										<?php foreach ($this->model->ListarAccion(6) as $a) : ?>
											<li>
												<?= $a->name; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="tab-pane" id="suport" role="tabpanel">
									<ul>
										<?php foreach ($this->model->ListarAccion(1) as $a) : ?>
											<li>
												<?= $a->name; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="tab-pane" id="culture" role="tabpanel">
									<ul>
										<?php foreach ($this->model->ListarAccion(2) as $a) : ?>
											<li>
												<?= $a->name; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="tab-pane" id="sport" role="tabpanel">
									<ul>
										<?php foreach ($this->model->ListarAccion(3) as $a) : ?>
											<li>
												<?= $a->name; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="tab-pane" id="lider" role="tabpanel">
									<ul>
										<?php foreach ($this->model->ListarAccion(4) as $a) : ?>
											<li>
												<?= $a->name; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="tab-pane" id="all" role="tabpanel">
									<ul>
										<?php foreach ($this->model->ListarAccion("") as $a) : ?>
											<li>
												<?= $a->name; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="tab-content gallery">
				<div id="calendar"></div>
			</div>
		</div>
	</div>
	<div class="section section-contact-us text-center">
		<div class="container">
			<h2 class="title" id="formularioPet">Solicitar Actividad</h2>
			<div class="row">

				<div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
					<form action="?c=home&a=ValidacionPeticion" method="post">
						<div class="input-group input-lg">
							<div class="input-group input-lg">
								<select name="requester" required class="form-control" style="height:45px">
									<option disabled="" selected value="">Quien la requiere?</option>
									<option value="Vocero">Vocero</option>
									<option value="Instructor">Instructor</option>
								</select>
							</div>
						</div>
						<div class="input-group input-lg">

							<select name="token_id" required class="form-control" style="height:45px">
								<option disabled="" selected value="">Ficha</option>
								<?php foreach ($this->model->ListarFicha() as $d) : ?>
									<option <?= isset($_REQUEST['id']) ? (($d->id == $actividad->token_id) ? 'Selected' : '') : ""; ?> value="<?= $d->id; ?> ">
										<?= $d->name; ?>
									</option>
								<?php endforeach; ?>
							</select>

						</div>
						<div class="row">
							<div class="input-group input-lg col-3">
								<input type="text" name="pass_code" required class="form-control" minlength="3" maxlength="3" placeholder="Codigo">
							</div>
							<div class="input-group input-lg col-9">
								<input type="email" name="email" required class="form-control" placeholder="Correo Electronico">
							</div>
						</div>
						<button name="submit" type="submit" class="btn btn-primary btn-round btn-block btn-lg">Pedir</button>
					</form>
				</div>
			</div>
		</div>
	</div>