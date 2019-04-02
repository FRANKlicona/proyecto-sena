<?php 
$c = $this->model->Cantidad();
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
                    <h4 class="card-title"> fichaes de
                        <?= strtoupper($_REQUEST['c']); ?> <a class="btn btn-sm btn-primary btn-round pull-right" href="?c=ficha&a=Crud"><i class="now-ui-icons ui-1_simple-add"></i></a>
                    </h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table">
                            <thead class=" text-primary">
                                <th>
                                    Ficha
                                </th>
                                <th>
                                    # Estudiantes
                                </th>
                                <th>
                                    Fecha De Inicio
                                </th>
                                <th>
                                    Fecha De Finalizacion
                                </th>
                                <th>
                                    Jornada
                                </th>
                                <th>
                                    Codigo
                                </th>
                                <th>
                                    Programa
                                </th>
                                <th class="text-center">
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($this->model->Listar(13, $init) as $r) :
                                    ?>
                                <tr>
                                    <td>
                                        <?php echo $r->fichaName; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->student; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->date_start; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->date_finish; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->journey; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->pass_code; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->programaName; ?>
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm btn-group-round" role="group" aria-label="Basic example">
                                            <a type=button" class="btn btn-sm btn-info btn-round" href="?c=ficha&a=Crud&id=<?php echo $r->id; ?>">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <nav>
                                <ul class="pagination pagination-primary">
                                    <?php
                                    if ($total_pages > 1) {
                                        if ($page != 1) {
                                            ?>
                                    <li class="page-item"><a class="page-link" href="index.php?c=ficha&page=<?= $page - 1; ?>"><span aria-hidden="true">&laquo;</span></a></li>
                                    <?php

                                }
                                for ($i = 1; $i <= $total_pages; $i++) {
                                    if ($page == $i) {
                                        ?>
                                    <li class="page-item active"><a class="page-link" href="#"><?= $page; ?></a></li>
                                    <?php

                                } else {
                                    ?>
                                    <li class="page-item"><a class="page-link" href="index.php?c=ficha&page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php
                                    if ($page != $total_pages) {
                                        ?>
                                    <li class="page-item"><a class="page-link" href="index.php?c=ficha&page=<?= $page + 1; ?>"><span aria-hidden="true">&raquo;</span></a></li>
                                    <?php

                                }
                            }
                        }
                    }
                    ?>
                                </ul>
                            </nav>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <h6>Elementos econtrados :<?= ' ' . $cant; ?></h6>
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
                <form action="?c=ficha&a=Eliminar" method="post">
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