<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $actividad->name : "Creando Actividad"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=actividad&v=<?= $_REQUEST['v']; ?>&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $actividad->id; ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cedula</label>
                                    <input type="text" class="form-control" name="identification">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="datepicker-container">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" name="date_create" class="form-control" placeholder="Fecha" data-datepicker-color="simple">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Accion</label>
                                    <select name="referal_type" class="form-control">
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
                                    <input type="text" class="form-control" name="n_orden">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="idReasonReferal">Razon</label>
                                <textarea id="idReasonReferal" name="reason_referal" class="form-control" cols="10" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Instructor</label>
                                    <input type="text" class="form-control" name="instructor">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Firma Instructor</label>
                                    <input type="text" class="form-control" name="instructor">
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="idReasonReferal">Situacion Encontrada</label>
                                <textarea id="idReasonReferal" name="situation_found" class="form-control" cols="10" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="idReasonReferal">Compromisos</label>
                                <textarea id="idReasonReferal" name="promises" class="form-control" cols="10" rows="10"></textarea>
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
                                            <input type="date" name="date_eval" class="form-control" placeholder="Fecha" data-datepicker-color="simple">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Accion</label>
                                        <select name="eval_track" <?php if(!isset($_REQUEST['id'])){echo('disabled');} ?> class="form-control">
                                            <option value="2">
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
                                        <input type="date" name="date_eval" class="form-control" placeholder="Fecha" data-datepicker-color="simple">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Firma Psicologo/a</label>
                                        <input type="text" class="form-control" name="psico_firm_after">
                                    </div>
                                </div>
                            </div>    
                        <div class="text-right form-group">
                            <a type="button" href="?c=actividad&v=<?= $_REQUEST['v']; ?>" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 