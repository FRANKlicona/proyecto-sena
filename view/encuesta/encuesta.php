<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <?= strtoupper($_REQUEST['c'].'s'); ?><a class="btn btn-sm btn-primary btn-round pull-right" href="?c=encuesta&a=Crud&v=<?= isset($_REQUEST['v']) ? $_REQUEST['v'] : ""; ?>"><i class="now-ui-icons ui-1_simple-add"></i></a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Regional
                                </th>
                                <th>
                                    Municipio
                                </th>
                                <th>
                                    Centro De Formacion
                                </th>
                                <th>
                                    Edad
                                </th>
                                <th>
                                    Modalidad De Formacion
                                </th>
                                <th>
                                    Genero
                                </th>
                                <th>
                                    Actividad
                                </th>
                                <th>
                                    Programa De Formacion
                                </th>
                                
                                <th class="text-center">
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach ($this->model->Listar() as $r) : ?>
                                <tr>
                                    <td>
                                        <?php echo $r->region; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->munipality; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->edificication; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->age; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->training_modality; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->gender_id; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->activity; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->program; ?>
                                    </td>                                    
                                    <!--<td class="text-center">
                                        <div class="btn-group btn-group-sm btn-group-round" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-warning btn-round " onclick="passValue(<?= $r->id ?>)" data-toggle="modal" data-target="#myModal2">
                                                <i class="now-ui-icons files_paper "></i>
                                            </button>
                                            <a type=button" class="btn btn-sm btn-info btn-round" href="?c=actividad&a=Crud&id=<?php echo $r->id; ?>&v=<?= $_REQUEST['v']; ?>">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger btn-round" onclick="passValue(<?= $r->id ?>)" data-toggle="modal" data-target="#myModal1">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                        </div>
                                    </td>-->
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="now-ui-icons travel_info"></i>
                </div>
            </div>
            <div class="modal-body">
                <p>¿Seguro desea eliminar este registro?</p>
            </div>
            <div class="modal-footer">
                <form action="?c=actividad&a=Eliminar" method="post">
                    <input type="hidden" id="_id" name="id">
                    <button type="submit" class="btn btn-link btn-neutral">SI</a>
                </form>
                <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">NO</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 class="title title-up">Agregando Registro</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="form-group" action="?c=registro&a=Guardar" method="post">
                            <input type="hidden" name="id" value="">
                            <div class="row">
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Aprendices</label>
                                        <input type="text" name="students" class="form-control" placeholder="Company" value="">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Hombres</label>
                                        <input type="text" name="men" class="form-control" placeholder="Username" value="">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="datepicker-container">
                                        <div class="form-group">
                                            <label>Mujeres</label>
                                            <input type="text" name="women" class="form-control" placeholder="Fecha" data-datepicker-color="simple" value="">
                                            <input type="hidden" id="activity_id" name="activity_id" value="">
                                        </div>
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