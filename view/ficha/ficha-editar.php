<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $ficha->fichaName.' - '.$ficha->programaName : "Creando ficha"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=ficha&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $ficha->id; ?>">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Numero De Ficha</label>
                                    <input type="text" value="<?= $ficha->fichaName ?>"  name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Numero De Cupos Disponibles</label>
                                    <input type="text" value="<?= $ficha->student ?>" name="student" class="form-control">
                                </div>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-md-6 px-100">
                                <div class="datepicker-container">
                                    <div class="form-group">
                                        <label>Fecha De Inicio Del Programa</label>
                                        <input type="date" name="date_start" value="<?= $ficha->date_start ?>" class="form-control" placeholder="Fecha" value="<?= $ficha->date; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 px-100">
                            <div class="datepicker-container">
                                <div class="form-group">
                                    <label>Fecha De Finalizacion Del Programa</label>
                                    <input type="date" name="date_finish" value="<?= $ficha->date_finish ?>" class="form-control" placeholder="Fecha" value="<?= $ficha->date; ?>">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Jornada</label>
                                    <select name="journey" class="form-control">
                                        <option value="1">Mañana</option>
                                        <option value="2">Mixta</option>
                                        <option value="3">Nocturna</option>
                                    </select>
                                </div>
                            </div>
                            <?php //if(!isset($_REQUEST['id'])): ?>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Codigo De Peticion</label>
                                        <input type="text" value="<?= $ficha->pass_code ?>" name="pass_code" class="form-control">
                                    </div>
                                </div>
                            <?php //endif; ?>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Programa De Formacion</label>
                                    <select name="program_id" class="form-control">
                                        <?php foreach ($this->model->ListarPrograma() as $r):?>
                                            <option value="<?= $r->id ?>"><?= $r->name ?></option>
                                        <?php endforeach; ?>    
                                    </select>
                                </div>
                            </div>
                        <div class="text-right form-group">
                            <a type="button" href="?c=ficha" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div> 