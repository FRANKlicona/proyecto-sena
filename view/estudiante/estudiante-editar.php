<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $estudiante->student_name : "Creando Estudiante"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=estudiante&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $estudiante->id; ?>">
                        <div class="row">
                        <div class="col-md-4 pr-1">
                        <label for=""></label>
                        </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ficha</label>
                                    <select name="token_id" class="form-control">
                                        <option disabled="" <?= !isset($_REQUEST['id']) ? 'Selected' : ''; ?> value="">Seleccione la ficha </option>
                                        <?php foreach ($this->model->ListarFicha() as $d) : ?>
                                        <option <?= isset($_REQUEST['id']) ? (($d->id == $estudiante->token_id) ? 'Selected' : '') : ""; ?> value="<?= $d->id; ?>">
                                            <?= $d->name; ?>
                                        </option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 px-100">
                                <div class="datepicker-container">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" name="date" class="form-control" placeholder="Fecha" data-datepicker-color="simple" value="<?= $estudiante->date; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Accion</label>
                                    <select name="action_id" class="form-control">
                                        <option disabled="" <?= !isset($_REQUEST['id']) ? 'Selected' : ''; ?> value="">Seleccione la accion</option>
                                        <?php foreach ($this->model->ListarAccion() as $d) : ?>
                                        <option <?= isset($_REQUEST['id']) ? (($d->id == $estudiante->action_id) ? 'Selected' : '') : ""; ?> value="
                                            <?= $d->id; ?>">
                                            <?= $d->name; ?>
                                        </option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-right form-group">
                            <a type="button" href="?c=estudiante" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div> 