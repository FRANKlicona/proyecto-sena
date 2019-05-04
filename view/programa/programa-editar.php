<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $programa->name : "Creando Programa"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=programa&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $programa->id ?>">
                        <div class="row">
                            <div class="col-md-11 pr-1">
                                <div class="form-group">
                                    <label>Nombre Del Programa</label>
                                    <input required type="text" name="name" value="<?= isset($_REQUEST['id']) ? $programa->name : "" ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 pr-1">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select required name="status" class="form-control">
                                        <option selected disabled value="">Escoja el estado del programa</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 pr-1">
                                <div class="form-group">
                                    <label>Modalidad</label>
                                    <select required name="mode" class="form-control">
                                        <option selected disabled value="">Escoja la modalidad del progama</option>
                                        <option value="1">Virtual</option>
                                        <option value="2">Presencial</option>
                                        <option value="3">A Distancia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select required name="type" class="form-control">
                                        <option selected disabled value="">Escoja el tipo de progama</option>
                                        <option value="1">Articulacion con la media</option>
                                        <option value="2">Programa Sena</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Convenio</label>
                                    <select required name="agreement" class="form-control">
                                        <option selected disabled value="">Escoja un convenio</option>
                                        <option value="1">IDER</option>
                                        <option value="2">TECNAR</option>
                                        <option value="3">Ninguno</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-right form-group">
                            <a href="#" class="btn btn-link btn-primary btn-round" onclick="history.back()">Volver</a> <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>