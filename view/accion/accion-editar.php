<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-1 ">
        <div class="col-md-11 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $accion->name : "Creando accion"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=accion&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $accion->id; ?>">
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="datepicker-container">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre de la actividad" data-datepicker-color="simple" value="<?= $accion->name; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dimension</label>
                                    <select name="dimension_id" class="form-control">
                                    <option value=""></option>
                                        <?php foreach ($this->model->ListarDimension() as $d) : ?>
                                        <option <?= isset($_REQUEST['id']) ? (($d->id == $accion->dimension_id) ? 'Selected' : '') : ""; ?> value="
                                            <?= $d->id; ?>">
                                            <?= $d->name; ?>
                                        </option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-right form-group">
                            <a type="button" href="?c=accion; ?>" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div> 