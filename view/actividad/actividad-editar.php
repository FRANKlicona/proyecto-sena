<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-1 ">
        <div class="col-md-11 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $apoyo->name : "Creando Actividad"; ?>
                    </h5>

                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=apoyo&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $apoyo->id; ?>">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="name" class="form-control" placeholder="Company" value="<?= $apoyo->name; ?>">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Ficha</label>
                                    <input type="text" name="token" class="form-control" placeholder="Username" value="<?= $apoyo->token; ?>">
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="datepicker-container">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" name="date" class="form-control" placeholder="Fecha" data-datepicker-color="simple" value="<?= $apoyo->date; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Programa</label>
                                    <input type="text" name="program" class="form-control" placeholder="Email" value="<?= $apoyo->program; ?>">
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dimension</label>
                                    <select name="dimension_id" class="form-control">
                                        <?php foreach ($this->model->ListarDimension() as $d) : ?>
                                        <option <?= isset($_REQUEST['id']) ?( ($d->id == $apoyo->dimension_id) ? 'Selected' : ''): ""; ?> value="
                                            <?= $d->id; ?>">
                                            <?= $d->name; ?>
                                        </option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 pl-1">
                                <div class="form-group">
                                    <label>Duracion</label>
                                    <input type="text" name="duration" class="form-control" placeholder="Last Name" value="<?= $apoyo->duration; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="text-right form-group">
                            <a type="button" href="?c=apoyo" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div> 