<?php 
$order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
$change = isset($_REQUEST['change']) ? $_REQUEST['change'] : '1';
$shr = isset($_REQUEST['shr']) ? ' and fichas.name = ' . $_REQUEST['shr'] : '';
$c = $this->model->Cantidad($shr);
$cant = $c[0]->cant;
if ($cant > 0) {
    $page = false;
    //examino la pagina a mostrar y el inicio del registro a mostrar
    $page =  isset($_REQUEST["page"]) ? $_REQUEST["page"] : false;
    if (!$page) {
        $init = 0;
        $page = 1;
        //$c = 12;
    } else {
        $init = ($page - 1) * 13;
    }
}

//calculo el total de paginas
$total_pages = ceil($cant / 13);
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <h4 class="card-title"> Actividades de
                                <?= strtoupper($_REQUEST['c']); ?>
                            </h4>
                        </div>
                        <div class="col-md-2 col-sm-2 col-6">
                            <ul class="pagination pagination-primary pull-right">
                                <?php
                                if ($total_pages > 1) {
                                    if ($page != 1) {
                                        ?>
                                <li class="page-item"><a class="page-link" href="index.php?c=actividad&page=<?= $page - 1; ?>"><span aria-hidden="true">&laquo;</span></a></li>
                                <?php

                            }
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($page == $i) {
                                    ?>
                                <li class="page-item active"><a class="page-link" href="#"><?= $page; ?></a></li>
                                <?php

                            } else {
                                ?>
                                <li class="page-item"><a class="page-link" href="index.php?c=actividad&page=<?= $i; ?>"><?= $i; ?></a></li>
                                <?php
                                if ($page != $total_pages) {
                                    ?>
                                <li class="page-item"><a class="page-link" href="index.php?c=actividad&page=<?= $page + 1; ?>"><span aria-hidden="true">&raquo;</span></a></li>
                                <?php

                            }
                        }
                    }
                }
                ?>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-3 col-6 ">
                            <h6 class="pull-right"><?= $cant . ' '; ?>resultados</h6>
                        </div>
                        <div class="col-md-3 col-sm-10 col-10">
                            <form action="?c=Actividad" method="POST">
                                <div class="input-group no-border">
                                    <input required type="text" value="" name="shr" class="form-control" minlength="7" maxlength="7" pattern="[0-9!?-]{7,7}" placeholder="buscar...">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-1 col-sm-2 col-2">
                            <a class="btn btn-sm btn-primary btn-round pull-right" href="?c=actividad&a=Crud">
                                <i class="now-ui-icons ui-1_simple-add"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table">
                            <thead class=" text-primary">
                                <th>
                                    <a href="?c=Actividad&order=exe_name&change=<?= $change * -1; ?>">
                                        Actividad
                                    </a>
                                </th>
                                <th>
                                    <a href="?c=Actividad&order=tok_name&change=<?= $change * -1; ?>">
                                        Ficha
                                    </a>
                                </th>
                                <th>
                                    <a href="?c=Actividad&order=date&change=<?= $change * -1; ?>">
                                        Fecha
                                    </a>
                                </th>
                                <th class="text-center">
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($this->model->Listar(13, $init, $order, $change, $shr) as $r) :
                                    ?>
                                <tr>
                                    <td>
                                        <?= $r->exe_name; ?>
                                    </td>
                                    <td>
                                        <a href="?c=ficha&a=Crud&id=<?= $r->tok_id; ?>&d=" class="btn btn-link " data-toggle="tooltip" data-placement="top" title="<?= $r->pro_name; ?>" data-container="body" data-animation="true"><?= $r->tok_name; ?></a>

                                    </td>
                                    <td>
                                        <?= $r->date; ?>
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm btn-group-round" role="group" aria-label="Basic example">
                                            <a type=button" class="btn btn-sm btn-info btn-round" href="?c=actividad&a=Crud&id=<?=$r->id; ?>">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">

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
    </di v> 