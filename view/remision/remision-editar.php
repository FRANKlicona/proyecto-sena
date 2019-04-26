<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Proceso de remision del aprendiz: " . strtoupper($remision->stutent) : "Generando Remision"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=remision&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= isset($_REQUEST['id']) ? $remision->id : "" ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cedula</label>
                                    <input required type="text" value="<?= isset($_REQUEST['id']) ? $remision->identification_id : "" ?>" class="form-control" name="identification_id">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="datepicker-container">
                                    <h5>Fecha: <?= date('y-m-d'); ?> </h5>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="idReasonReferal">Razon</label>
                        <textarea required id="idReasonReferal" name="reason_referal" class="form-control" cols="10" rows="10"><?= isset($_REQUEST['id']) ? $remision->reason_referal : "" ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre Instructor</label>
                            <input required type="text" class="form-control" value="<?= isset($_REQUEST['id']) ? $remision->instructor_name : "" ?>" name="instructor_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email </label>
                            <input required type="email"  name="instructor_email" value="<?= isset($_REQUEST['id']) ? $remision->date_promises : "" ?>" class="form-control" placeholder="email de quien realiza la remision" data-datepicker-color="simple">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="idReasonReferal">Situacion Encontrada</label>
                                <textarea required id="idReasonReferal" name="situation_found" class="form-control" cols="10" rows="10"><?= isset($_REQUEST['id']) ? $remision->situation_found : "" ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="idReasonReferal">Compromisos</label>
                                <textarea required id="idReasonReferal" name="promises" class="form-control" cols="10" rows="10"><?= isset($_REQUEST['id']) ? $remision->promises : "" ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Psicologo/a</label>
                                    <input required type="text" class="form-control" name="psico_firm_before">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Estudiante</label>
                                    <input required type="text" class="form-control" name="student_firm">
                                </div>
                            </div> 
                        </div> -->
                <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="datepicker-container">
                                    <div class="form-group">
                                        <label>Fecha De Evaluacion</label>
                                        <input required type="date" min="<?= date('Y-m-d'); ?>" name="date_eval" value="<?= isset($_REQUEST['id']) ? $remision->date_eval : "" ?>" class="form-control" placeholder="Fecha" data-datepicker-color="simple">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Evaluacion</label>
                                    <select required name="eval_track" class="form-control">
                                        <option disabled selected value="">Cumplio con los compromisos?</option>
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
                                    <label>Nombre Psicologo/a</label>
                                    <input required type="text" class="form-control" name="psico_firm_after">
                                </div>
                            </div>
                        </div> -->
                <div class="text-right form-group">
                    <a href="#" class="btn btn-link btn-primary btn-round" onclick="history.back()">Volver</a> <button class=" btn btn-primary btn-round">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>