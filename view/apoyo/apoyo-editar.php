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
                            <div class="col-md-8 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Programa</label>
                                    <input type="text" name="program" class="form-control" placeholder="Email" value="<?= $apoyo->program; ?>">
                                </div>
                            </div>
                            <div class="btn-group bootstrap-select"><button type="button" class="dropdown-toggle bs-placeholder btn btn-primary btn-round" data-toggle="dropdown" role="button" title="Single Select"><span class="filter-option pull-left">Single Select</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                <div class="dropdown-menu open" role="combobox">
                                    <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                        <li data-original-index="1" class="disabled"><a tabindex="-1" class="" data-tokens="null" role="option" href="#" aria-disabled="true" aria-selected="false"><span class="text">Choose city</span><span class="material-icons  check-mark"> done </span></a></li>
                                        <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Foobar</span><span class="material-icons  check-mark"> done </span></a></li>
                                        <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Is great</span><span class="material-icons  check-mark"> done </span></a></li>
                                    </ul>
                                </div><select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98">
                                    <option class="bs-title-option" value="">Single Select</option>\
                                    <?php foreach ($this->model->ListarDimension() as $d) : ?>
                                    <option value="<?= $d->id; ?>"><?= $d->name; ?></option>
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