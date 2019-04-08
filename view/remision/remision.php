<?php 
$c = $this->model->Cantidad();
$cant = $c[0]->cant;
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Actividades de
                        <?= strtoupper($_REQUEST['c']); ?> <a class="btn btn-sm btn-primary btn-round pull-right" href="?c=remision&a=Crud<?= isset($_REQUEST['v']) ? $_REQUEST['v'] : ""; ?>"><i class="now-ui-icons ui-1_simple-add"></i></a>
                    </h4>
                    <h6>Elementos econtrados :<?= ' ' . $cant; ?></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table">
                            <thead class=" text-primary">
                                <th style="font-size:15px">
                                    # Orden
                                </th>
                                <th style="font-size:15px">
                                    Referencia
                                </th>
                                <th style="font-size:15px">
                                    Fecha De Creacion
                                </th>
                                <th style="font-size:15px">
                                    Aprendiz
                                </th>
                                <th style="font-size:15px">
                                    Programa De Formacion
                                </th>
                                <th style="font-size:15px">
                                    Compromisos
                                </th>
                                <th style="font-size:15px">
                                    Fecha para Cumplir Compromisos
                                </th>
                                <th style="font-size:15px">
                                    ¿compromiso Cumplido?
                                </th>
                                <th style="font-size:15px">
                                    Instructor
                                </th>
                                <th style="font-size:15px">
                                    Fecha De Evaluacion
                                </th>
                                
                                <th style="font-size:15px" class="text-center">
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php 
                                if ($cant > 0) {
                                    $page = false;

                                    //examino la pagina a mostrar y el inicio del registro a mostrar
                                    if (isset($_GET["page"])) {
                                        $page = $_GET["page"];
                                    }

                                    if (!$page) {
                                        $init = 0;
                                        $page = 1;
                                        //$c = 12;
                                    } else {
                                        $init = ($page - 1) * 12;
                                    }
                                    //calculo el total de paginas
                                    $total_pages = ceil($cant / 12);

                                    foreach ($this->model->Listar(12, $init) as $r) :
                                        ?>
                                <tr>
                                    <td>
                                        <?= $r->n_orden; ?>
                                    </td>
                                    <td>
                                        <?= $r->referal_type; ?>
                                    </td>
                                    <td>
                                        <?= $r->date_create; ?>
                                    </td>
                                    <td>
                                        <?= $r->stutent;?>
                                    </td>
                                    <td>
                                        <?= $r->program; ?>
                                    </td>
                                    <td>
                                        <?= $r->promises; ?>
                                    </td>
                                    <td>
                                        <?= $r->date_promises; ?>
                                    </td>
                                    <td>
                                        <?= $r->eval_track; ?>
                                    </td>
                                    <td>
                                        <?= $r->instructor_name; ?>
                                    </td>
                                    <td>
                                        <?= $r->date_eval ?>
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm btn-group-round" role="group" aria-label="Basic example">
                                            <a type=button" class="btn btn-sm btn-info btn-round" href="?c=remision&a=Crud&id=<?= $r->id; ?>">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger btn-round" onclick="passValue(<?= $r->id ?>)" data-toggle="modal" data-target="#myModal1">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
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
                                                <li class="page-item"><a class="page-link" href="index.php?c=remision&page=<?= $page - 1; ?>"><span aria-hidden="true">&laquo;</span></a></li>
                                                <?php
                                            }
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                if ($page == $i) {
                                                    ?>
                                                    <li class="page-item active"><a class="page-link" href="#"><?= $page; ?></a></li>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <li class="page-item"><a class="page-link" href="index.php?c=remision&page=<?= $i; ?>"><?= $i; ?></a></li>
                                                    <?php
                                                    if ($page != $total_pages) {
                                                        ?>
                                                    <li class="page-item"><a class="page-link" href="index.php?c=remision&page=<?= $page + 1; ?>"><span aria-hidden="true">&raquo;</span></a></li>
                                                    <?php
                                                    }
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
                <form action="?c=remision&a=Eliminar" method="post">
                    <input type="hidden" id="_id" name="id">
                    <button type="submit" class="btn btn-link btn-neutral">SI</a>
                </form>
                <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">NO</button>
            </div>
        </div>
    </div>
</div>