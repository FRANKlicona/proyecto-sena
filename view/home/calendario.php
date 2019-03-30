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
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 id="name" class="title title-up">Crear Actividad</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="form-group" action="?c=Actividad&a=Guardar" method="post">
                            <input type="text" id="id"name="id" value="">
                            <div class="row">
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="text" name="date" id="date" class="form-control" placeholder="Company" value="aquivalafecha">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Ficha</label>
                                        <input type="text" name="token_id" id="token_id" class="form-control" placeholder="Username" value="">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Actividad</label>
                                        <input type="text" name="action_id" id="action_id" class="form-control" placeholder="Fecha" data-datepicker-color="simple" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center form-group">
                                <button class=" btn btn-primary btn-round">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 