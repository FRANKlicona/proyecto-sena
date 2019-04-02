<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando Remision Del Aprendiz: " . strtoupper($remision->stutent) : "Creando Actividad"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=remision&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $remision->id ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cedula</label>
                                    <input type="text" value="<?= $remision->identification_id?>" class="form-control" name="identification_id">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="datepicker-container">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" value="<?= $remision->date_create ?>" name="date_create" class="form-control" placeholder="Fecha" data-datepicker-color="simple">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Accion</label>
                                    <select name="referal_type" class="form-control">
                                        <?php if(isset($_REQUEST['id'])): ?>
                                            <option value="<?php if($remision->referal_type == 'Trabajo_Social' ){ echo 1;}else{ echo 2;} ?>"><?= $remision->referal_type ?></option>
                                        <?php endif; ?>
                                        <option value="1">
                                           <p>Trabajo Social</p> 
                                        </option>
                                        <option value="2">
                                           <p>Psicologia</p>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Numero De Orden</label>
                                    <input type="text" value="<?= $remision->n_orden ?>" class="form-control" name="n_orden">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="idReasonReferal">Razon</label>
                                <textarea id="idReasonReferal" name="reason_referal" class="form-control" cols="10" rows="10"><?= $remision->reason_referal ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Instructor</label>
                                    <input type="text" class="form-control" value="<?= $remision->instructor_name ?>" name="instructor_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Firma Instructor</label>
                                    <input type="text" class="form-control" name="instructor_firm">
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="idReasonReferal">Situacion Encontrada</label>
                                <textarea id="idReasonReferal" name="situation_found" class="form-control" cols="10" rows="10"><?= $remision->situation_found ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="idReasonReferal">Compromisos</label>
                                <textarea id="idReasonReferal" name="promises" class="form-control" cols="10" rows="10"><?= $remision->promises ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Firma Psicologo/a</label>
                                    <input type="text" class="form-control" name="psico_firm_before">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Firma Estudiante</label>
                                    <input type="text" class="form-control" name="student_firm">
                                </div>
                            </div>    
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="datepicker-container">
                                        <div class="form-group">
                                            <label>Fecha De Evaluacion</label>
                                            <input type="date" name="date_eval" value="<?= $remision->date_eval ?>" class="form-control" placeholder="Fecha" data-datepicker-color="simple">
                                        </div>
                                    </div>
                                </div>
                                <div <?php if(!isset($_REQUEST['id'])){echo('hidden');} ?> class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Accion</label>
                                        <select name="eval_track"  class="form-control">
                                            <option value="<?php if($remision->eval_track) ?>">
                                                <p>No</p> 
                                            </option>
                                            <option value="1">
                                                <p>Si</p>
                                            </option>
                                        </select>
                                    </div>
                                    </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha Establecida Para Cumplir Compromisos </label>
                                        <input type="date" name="date_promises" value="<?= $remision->date_promises ?>" class="form-control" placeholder="Fecha" data-datepicker-color="simple">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Firma Psicologo/a</label>
                                        <input type="text" class="form-control" name="psico_firm_after">
                                    </div>
                                </div>
                            </div>
                            <div <?php if(!isset($_REQUEST['id'])){echo('hidden');} ?> class="col-md-6">
                                <div class="form-group">
                                    <label>Programa De Formacion</label>
                                    <select name="program_id" class="form-control">
                                        <?php foreach ($this->model->ListarPrograma() as $r):?>
                                            <option value="<?php echo $r->id ?>"><?php echo $r->name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>    
                        <div class="text-right form-group">
                            <a type="button" href="?c=actividad" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 