<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $programa->name : "Creando Ficha"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=programa&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $programa->id ?>">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Nombre Del Programa</label>
                                    <input type="text" name="name" value="<?= isset($_REQUEST['id'])?$programa->name:"" ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 pr-1">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-right form-group">
                            <a type="button" href="?c=actividad" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div> 