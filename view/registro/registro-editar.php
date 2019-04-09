<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-2 ">
        <div class="col-md-9 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando Registro : #" . $registro->id : "Generando Registro de Actividad"; ?>
                    </h5>

                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=registro&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $registro->id; ?>">
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Aprendices</label>
                                    <input id="t" required type="text" name="students" class="form-control" onblur="totales()" pattern="[0-9!?-]{1,4}" maxlength="4" max="2000" placeholder="Cantidad Total" value="<?= $registro->students; ?>">
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Hombres</label>
                                    <input id="h" required type="text" name="men" class="form-control" onblur="totales()"  pattern="[0-9!?-]{1,3}" maxlength="3" placeholder="Cantidad de Hombre" value="<?= $registro->men; ?>">
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Mujeres</label>
                                    <input id="m" required type="text" name="women" class="form-control" onblur="totales()"  pattern="[0-9!?-]{1,3}" maxlength="3" placeholder="Cantidad de Mujeres"  value="<?= $registro->women; ?>">
                                </div>
                            </div>
                            <div class="col-md-3 px-100">
                                <div class="form-group">
                                    <label for="">Duracion</label>
                                    <input required class="form-control" type="time" name="duration" id="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Actividad</label>
                                    <select required name="activity_id" class="form-control">
                                        <option disabled="" <?= !isset($_REQUEST['id']) ? 'Selected' : ''; ?> value="">Seleccione la Actividad</option>
                                        <?php foreach ($this->model->ListarActividad() as $d) : ?>
                                            <option <?= isset($_REQUEST['id']) ? (($d->id == $registro->act_id) ? 'Selected' : '') : ""; ?> value="<?= $d->id; ?>">
                                                <?= $d->exe_name." - ".$d->tok_name; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5 px-100">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ficha</label>
                                    <select required name="token_id" class="form-control">
                                        <option disabled="" <?= !isset($_REQUEST['id']) ? 'Selected' : ''; ?> value="">Seleccione la ficha correspondiente</option>
                                        <?php foreach ($this->model->ListarFicha() as $d) : ?>
                                            <option <?= isset($_REQUEST['id']) ? (($d->id == $registro->tok_id) ? 'Selected' : '') : ""; ?> value="<?= $d->id; ?>">
                                                <?= $d->name; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 px-100">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Programa</label>
                                    <select required name="program_id" class="form-control">
                                        <option disabled="" <?= !isset($_REQUEST['id']) ? 'Selected' : ''; ?> value="">Seleccione el programa correspondiente</option>
                                        <?php foreach ($this->model->ListarPrograma() as $d) : ?>
                                            <option <?= isset($_REQUEST['id']) ? (($d->id == $registro->pro_id) ? 'Selected' : '') : ""; ?> value="<?= $d->id; ?>">
                                                <?= $d->name; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-right form-group">
                            <a href="#" class="btn btn-link btn-primary btn-round" onclick="history.back()">Volver</a> <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>