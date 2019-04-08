<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
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
                                    <input type="text" name="name" value="<?= isset($_REQUEST['id']) ? $ficha->fichaName : ''; ?>" class="form-control" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> required minLength="7" maxLength="7" min="1000000" max="2000000"">
                                </div>
                            </div>
                            <div class=" col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Numero De Cupos Disponibles</label>
                                        <input type="text" name="students" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> value="<?= isset($_REQUEST['id']) ? $ficha->student : ''; ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 px-100">
                                    <div class="datepicker-container">
                                        <div class="form-group">
                                            <label>Fecha De Inicio Del Programa</label>
                                            <input type="text" name="date_start" class="form-control" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> placeholder="Fecha" value="<?= isset($_REQUEST['id']) ? $ficha->date_start : ''; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-100">
                                    <div class="datepicker-container">
                                        <div class="form-group">
                                            <label>Fecha De Finalizacion Del Programa</label>
                                            <input type="text" name="date_finish" class="form-control" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> placeholder="Fecha" value="<?= isset($_REQUEST['id']) ? $ficha->date_finish : ''; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Accion</label>
                                        <select name="gender" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?> class="form-control">
                                            <option value="1">Mañana</option>
                                            <option value="2">Mixta</option>
                                            <option value="3">Nocturna</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right form-group">
                                <a  href="#" class="btn btn-link btn-primary btn-round" onclick="history.back()" >Volver</a>
                            <button class=" btn btn-primary btn-round" <?= isset($_REQUEST['d']) ? 'disabled' : ''; ?>>Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div> 