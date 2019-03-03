<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-2 ">
        <div class="col-md-9 ">
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
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Programa</label>
                                    <input type="text" name="program" class="form-control" placeholder="Email" value="<?= $apoyo->program; ?>">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-8 col-sm-5 mb-3">
                                <div class="dropdown bootstrap-select">
                                    <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select" tabindex="-1">
                                        <option class="bs-title-option" value=""></option>
                                        <?php foreach ($this->model->ListarDimension() as $d) : ?>
                                        <option value="<?= $d->id; ?>">
                                            <?= $d->name; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <button type="button" class="dropdown-toggle btn btn-primary btn-round" data-toggle="dropdown" role="button" title="Single Option">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Single Option</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu " role="combobox">
                                        <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                            <ul class="dropdown-menu inner show"></ul>
                                            <?php foreach ($this->model->ListarDimension() as $d) : ?>
                                            <option value="<?= $d->id; ?>">
                                                <?= $d->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                    <option class="bs-title-option" value="">Single Select</option>\
                                    <?php foreach ($this->model->ListarDimension() as $d) : ?>
                                    <option value="<?= $d->id; ?>">
                                        <?= $d->name; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2 pl-1">
                                <div class="form-group">
                                    <label>Duracion</label>
                                    <input type="number" name="duration" class="form-control" placeholder="Last Name" value="<?= $apoyo->duration; ?>">
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