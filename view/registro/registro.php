<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <?= strtoupper($_REQUEST['c']); ?> de Actividades<a class="btn btn-primary btn-sm btn-round pull-right" href="?c=registro&a=Crud"><i class="now-ui-icons ui-1_simple-add"></i></a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Cantidad de asistentes
                                </th>
                                <th>
                                    Mujeres/Hombre
                                </th>
                                <th>
                                    Actividad
                                </th>
                                <th>
                                    Programa
                                </th>
                                <th class="text-right">
                                    Ficha
                                </th>
                                <th class="text-center">
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach ($this->model->Listar() as $r) : ?>
                                <tr>
                                    <td>
                                        <?php echo $r->students; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->women . ' / ' . $r->men; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->acc_name; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->pro_name; ?>
                                    </td>
                                    <td class="text-right">
                                        <?php echo $r->tok_name; ?>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-warning btn-round" href="?c=apoyo&a=Crud&id=<?php echo $r->id; ?>"><i class="now-ui-icons ui-2_settings-90"></i></a>
                                        <button class="btn btn-danger btn-round" data-toggle="modal" data-target="#myModal1">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </td>
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
                <a type="button" class="btn btn-link btn-neutral" href="?c=apoyo&a=Eliminar&id=<?php echo $r->id; ?>">SI</a>
                <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">NO</button>
            </div>
        </div>
    </div>
</div> 