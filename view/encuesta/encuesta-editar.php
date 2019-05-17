<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row offset-md-1 ">
        <div class="col-md-11   ">
            <div class="card">
                <div class="offset-1 col-md-10 ">
                    <div class="card-header">
                        <h5 class="title">
                            <?= strtoupper($_REQUEST['c']) ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <form class="form-group" action="?c=encuesta&a=Guardar" method="post">
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Regional</label>
                                        <input requiered type="text" name="region" class="form-control" placeholder="Nombre Regional">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Centro De Formacion</label>
                                        <input requiered type="text" name="edificication" class="form-control" placeholder="Nombre Del Centro De Formacion">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Modalidad De Formacion</label>
                                        <select requiered name="training_modality" class="form-control">
                                            <option value="1">Presencial</option>
                                            <option value="2">Virtual</option>
                                            <option value="3">A Distancia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre De La Actividad</label>
                                        <select requiered name="register_id" class="form-control">
                                            <option value="" selected disabled>Escoja una Actividad</option>
                                            <?php foreach ($this->model->ListarRegistro() as $d) : ?>
                                                <option value="<?= $d->id; ?>"><?= $d->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Programa De Formacion</label>
                                        <select requiered name="program_id" class="form-control">
                                            <option value="" disabled selected>Escoja un programa</option>
                                            <?php foreach ($this->model->ListarPrograma() as $d) : ?>
                                                <option value="<?= $d->id; ?>"><?= $d->name; ?></option>
                                            <?php endforeach; ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 pl-1">
                                    <div class="form-group">
                                        <label>Municipio</label>
                                        <input requiered type="text" name="munipality" class="form-control" placeholder="Nombre Del Municipio">
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
                                        <input requiered type="text" required name="age" class="form-control" placeholder="Edad">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <hr>
                                <p>1. La actividad me permitio a mi conocreme a mi mismo: mis fortalezas y mis aspectos por mejorar</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_1" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_1" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_1" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>2. La actividad me brindo la posibilidad de conocer e interactuar de manera positiva y constructiva con mis compañero</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_2" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_2" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_2" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>3. La actividad me proporciono nuevos conocimientos entorno a los temas abordados</p>
                                <div class="col-md-12 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_3" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_3" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_3" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>4. La forma como se desarrollo la actividad me facilito mantener la atencion e interes de manera constante</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_4" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_4" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_4" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>5. Considero que este tipo de actividades aumentan mi motivacion e intencion de permanecer en el SENA</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_5" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_5" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_5" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>6. La actividad fomento el fortalecimiento de los valores humanos e institucionales</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_6" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_6" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_6" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>7. Las personas encargardas de la actividad demostraron dominio del tema</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_7" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_7" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_7" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>8. El espacio utilizado para la catividad fue adecuado para el desarrollo y cumplimiento de los objetivos de la misma</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_8" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_8" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_8" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>9. Los recursos fisicos y/o materiales empleados para el desarrollo de la actividad fueron suficientes y adecuados</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_9" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_9" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_9" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <p>10. La actividad en un conjunto me brindo un tiempo de bienestar de entrenamiento de aprendizaje y/o de crecimiento personal</p>
                                <div class="col-md-3 pl-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_10" value="1" checked>
                                        <label class="form-check-label" for="">
                                            En Desacuredo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_10" value="2">
                                        <label class="form-check-label" for="">
                                            De Acuerdo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="" type="radio" name="question_10" value="3">
                                        <label class="form-check-label" for="">
                                            Ni De Acuerdo Ni En Desacuerdo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right form-group content">
                                <a href="#" class="btn btn-link btn-primary btn-round" onclick="history.back()">Volver</a> <button class=" btn btn-primary btn-round">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>