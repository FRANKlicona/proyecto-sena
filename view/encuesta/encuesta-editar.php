<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row offset-md-1 ">
        <div class="col-md-11 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= strtoupper($_REQUEST['v']) ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=encuesta; ?>&a=Guardar" method="post">
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
                                    <select name="register_id" class="form-control">
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
                                    <input type="text" name="munipality" class="form-control" placeholder="Nombre Del Municipio">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-3 pr-1">
                                <label>Genero</label>
                                <div class="form-check">
                                    <input class="form-check-input" id="m" type="radio" name="gender_id" value="M" checked>
                                    <label class="form-check-label" for="m">
                                        Masculino
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" id="f" type="radio" name="gender_id" value="F">
                                    <label class="form-check-label" for="f">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Edad</label>
                                    <input type="text" required name="age" class="form-control" placeholder="Edad">
                                </div>
                            </div>
                        </div>
                        <div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_1" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_1" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_1" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_2" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_2" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_2" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>                                            
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-12 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_3" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_3" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_3" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_4" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_4" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_4" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_5" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_5" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_5" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_6" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_6" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_6" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_7" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_7" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_7" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_8" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_8" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_8" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_9" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_9" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_9" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>
                        <hr>
                        <p>La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                        <div class="col-md-3 pl-1">
                            <div class="form-check">
                                <input class="form-check-input" id="q1" type="radio" name="question_10" value="1" checked>
                                <label class="form-check-label" for="q1">
                                    En Desacuredo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q2" type="radio" name="question_10" value="2">
                                <label class="form-check-label" for="q2">
                                    De Acuerdo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="q3" type="radio" name="question_10" value="3">
                                <label class="form-check-label" for="q3">
                                    Ni De Acuerdo Ni En Desacuerdo
                                </label>
                            </div>
                        </div>
                        <div class="text-right form-group content">
                            <a type="button" href="?c=encuesta; ?>" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div> 