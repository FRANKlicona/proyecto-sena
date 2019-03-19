<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-2 ">
        <div class="col-md-9 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando Registro : #" . $registro->id : "Creando Actividad"; ?>
                    </h5>

                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=registro&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $registro->id; ?>">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Aprendices</label>
                                    <input type="text" name="students" class="form-control" placeholder="Company" value="<?= $registro->students; ?>">
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Hombres</label>
                                    <input type="text" name="men" class="form-control" placeholder="Username" value="<?= $registro->men; ?>">
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Mujeres</label>
                                    <input type="text" name="women" class="form-control" placeholder="Fecha" data-datepicker-color="simple" value="<?= $registro->women; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="">Fecha</label>
                                    <input class="form-control" type="date" name="date" id="">
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="">duration</label>
                                    <input class="form-control" type="time" name="duration" id="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Actividad</label>
                                    <select name="activity_id" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($this->model->ListarActividad() as $d) : ?>
                                        <option <?= isset($_REQUEST['id']) ? (($d->id == $registro->act_id) ? 'Selected' : '') : ""; ?> value="<?= $d->id; ?>">
                                            <?= $d->name; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ficha</label>
                                    <select name="token_id" class="form-control">
                                        <option value=""></option>
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
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Programa</label>
                                    <select name="program_id" class="form-control">
                                        <option value=""></option>
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
                            <a type="button" href="?c=registro" class="btn btn-link btn-primary btn-round" ">Volver</a>
                                <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div> 