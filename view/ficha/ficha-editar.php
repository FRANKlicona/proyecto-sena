<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-1 ">
        <div class="col-md-10 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $ficha->fichaName . ' - ' . $ficha->programaName : "Creando ficha"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=ficha&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $ficha->id; ?>">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Numero De Ficha</label>
                                    <input required type="text" name="name" value="<?= isset($_REQUEST['id']) ? $ficha->fichaName : ''; ?>" class="form-control" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> required minLength="7" maxLength="7" min="1000000" max="2000000"">
                                </div>
                            </div>
                            <div class=" col-md-2 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Numero De Cupos</label>
                                        <input required type="text" name="student" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> value="<?= isset($_REQUEST['id']) ? $ficha->student : ''; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nivel de formacion</label>
                                        <select requiered name="formation_level" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> class="form-control">
                                                <option selected disabled value="">Escoja el nivel de formacion</option>
                                                <option value="1">Tecnico</option>
                                                <option value="2">Tecnologo</option>
                                                <option value="3">Curso corto</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    
                            <div class="row">
                                <div class="col-md-6 px-100">
                                    <div class="datepicker-container">
                                        <div class="form-group">
                                            <label>Fecha De Inicio Del Programa</label>
                                            <input required type="date" min="<?= date('Y-m-d'); ?>" name="date_start" class="form-control" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> placeholder="Fecha" value="<?= isset($_REQUEST['id']) ? $ficha->date_start : ''; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-100">
                                    <div class="datepicker-container">
                                        <div class="form-group">
                                            <label>Fecha De Finalizacion Del Programa</label>
                                            <input required type="date" min="<?= date('Y-m-d'); ?>" name="date_finish" class="form-control" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> placeholder="Fecha" value="<?= isset($_REQUEST['id']) ? $ficha->date_finish : ''; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Programa</label>
                                        <select requiered name="program_id" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> class="form-control">
                                            <option selected disabled value="">Escoja el programa de la ficha</option>
                                            <?php foreach ($this->model->ListarPrograma() as $d):?>
                                            <option value="<?= $d->id; ?>"><?= $d->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label for="">Estado</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="1">Etapa Lectiva</option>
                                            <option value="2">Etapa Productiva</option>
                                            <option value="3">Finalizado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jornada</label>
                                        <select requiered name="journey" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> class="form-control">
                                            <option selected disabled value="">Escoja la jornada de la ficha</option>
                                            <option value="1">Mañana</option>
                                            <option value="2">Mixta</option>
                                            <option value="3">Nocturna</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sede</label>
                                        <select requiered name="place" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> class="form-control">
                                            <option selected disabled value="">Escoja la sede de la ficha</option>
                                            <option value="1">CCyS</option>
                                            <option value="2">Empreder</option>
                                            <option value="3">Petroquimico</option>
                                            <option value="4">Nautico</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right form-group">
                                <a href="#" class="btn btn-link btn-primary btn-round" onclick="history.back()">Volver</a>
                                <button class=" btn btn-primary btn-round" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?>>Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>