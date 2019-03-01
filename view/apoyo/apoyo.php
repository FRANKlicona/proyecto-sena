<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Actividades de
                        <?= strtoupper($_REQUEST['c']); ?>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    Ficha
                                </th>
                                <th>
                                    Programa
                                </th>
                                <th class="text-right">
                                    Fecha
                                </th>
                                <th class="text-center">
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach ($this->model->Listar() as $r): ?>
                                <tr>
                                    <td>
                                        <?php echo $r->name; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->token; ?>
                                    </td>
                                    <td>
                                        <?php echo $r->program; ?>
                                    </td>
                                    <td class="text-right">
                                        <?php echo $r->date; ?>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="?c=cliente&a=Crud&id=<?php echo $r->id; ?>">Editar</a>

                                        <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
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