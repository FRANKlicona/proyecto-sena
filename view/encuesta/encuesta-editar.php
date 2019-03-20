<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-1 ">
        <div class="col-md-11 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= strtoupper($_REQUEST['v']) ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=encuesta&v=<?= $_REQUEST['v']; ?>&a=Guardar" method="post">
                        <input type="hidden" name="id">
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Regional</label>
                                    <input type="text" name="region" class="form-control" placeholder="Nombre Regional">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Centro De Formacion</label>
                                    <input type="text" name="edificication" class="form-control" placeholder="Nombre Del Centro De Formacion">
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Modalidad De Formacion</label>
                                    <select name="training_modality" class="form-control">
                                        <option value="1">Presencial</option>
                                        <option value="2">Virtual</option>
                                        <option value="3">A Distancia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre De La Actividad</label>
                                    <select name="training_modality" class="form-control">
                                        <?php foreach ($this->model->ListarActivity() as $d) : ?>
                                            <option value="<?= $d->id; ?>"><?= $d->name; ?></option>
                                        <?php endforeach; ?>        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Programa De Formacion</label>
                                    <select name="program_id" class="form-control">
                                        <?php foreach ($this->model->ListarProgram() as $d) : ?>
                                        <option value="<?= $d->id; ?>"><?= $d->name; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 pl-1">
                                <div class="form-group">
                                    <label>Municipio</label>
                                    <input type="text" name="duration" class="form-control" placeholder="Nombre Del Municipio">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-3 pr-1">
                                <label>Genero</label>
                                <div class="form-check">
                                    <input class="form-check-input" id="m" type="radio" name="gender_id" value="1" checked>
                                    <label class="form-check-label" for="m">
                                        Masculino
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" id="f" type="radio" name="gender_id" value="2">
                                    <label class="form-check-label" for="f">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Edad</label>
                                    <input type="text" name="edificication" class="form-control" placeholder="Edad">
                                </div>
                            </div>
                        </div>
                        <div>
                        <div class="row">
                        <p class="col-md-12 pr-1">
                                    La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar  
                                </p>
                        </div>
                        <div class="col-md-3 pr-1">
                            <label>Genero</label>
                                <div class="form-check">
                                    <input class="form-check-input" id="m" type="radio" name="gender_id" value="1" checked>
                                    <label class="form-check-label" for="m">
                                        Masculino
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" id="f" type="radio" name="gender_id" value="2">
                                    <label class="form-check-label" for="f">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-right form-group">
                            <a type="button" href="?c=encuesta&v=<?= $_REQUEST['v']; ?>" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div> 