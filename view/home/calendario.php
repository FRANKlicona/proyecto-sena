<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row offset-md-1">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-mini modal-neutral" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="now-ui-icons travel_info"></i>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
            </div>
            <div class="modal-body">
                <p id="name"></p>
            </div>
            <div class="modal-footer">
                <form action="?c=Actividad&a=Crud" method="post">
                    <input type="hidden" id="id1" name="id">
                    <button class="btn btn-link btn-primary" type="submit">Editar</button>
                </form>
                <form action="?c=Actividad&a=Eliminar" method="post">
                    <input type="hidden" id="id2" name="id">
                    <button class="btn btn-link btn-primary" type="submit">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 id="name" class="title title-up">Creando Actividad</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="form-group" action="?c=Actividad&a=Guardar" method="post">
                            <input type="hidden" id="id" name="id" value="">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" min="<?= date('Y-m-d'); ?>" name="date" required id="date" class="form-control" placeholder="Company" value="aquivalafecha">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ficha</label>
                                        <select name="token_id" required class="form-control">
                                            <option  disabled="" <?= !isset($_REQUEST['id']) ? 'Selected' : ''; ?> value="">Seleccione la ficha correspondiente</option>
                                            <?php foreach ($this->model->ListarFicha() as $d) : ?>
                                            <option <?= isset($_REQUEST['id']) ? (($d->id == $actividad->token_id) ? 'Selected' : '') : ""; ?> value="<?= $d->id; ?>">
                                                <?= $d->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Accion</label>
                                        <select name="action_id" required class="form-control">
                                            <option  disabled="" <?= !isset($_REQUEST['id']) ? 'Selected' : ''; ?> value="">Seleccione la ficha correspondiente</option>
                                            <?php foreach ($this->model->ListarAccion($_SESSION['dimension_id']) as $d) : ?>
                                            <option <?= isset($_REQUEST['id']) ? (($d->id == $actividad->action_id) ? 'Selected' : '') : ""; ?> value="
                                            <?= $d->id; ?>">
                                                <?= $d->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center form-group">
                                <button name="submit" tipe="submit" class=" btn btn-primary btn-round">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 