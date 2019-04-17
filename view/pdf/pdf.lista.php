<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-category">Listado de</h5>
                    <h4 class="card-title"> Informes</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    Generado por
                                </th>
                                <th>
                                    Periodo/Fecha
                                </th>
                                <th class="text-right">
                                    Ver
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Informe Trimestral
                                    </td>
                                    <td>
                                        Sistema
                                    </td>
                                    <td>
                                        <?= date("Y-m-d", mt_rand(0, 500000000)); ?>
                                    </td>
                                    <td class="text-right">
                                        <a href="?c=pdf&a=GenerarPdf&doc=Trimestral&name=Trimestral" class="btn btn-icon btn-round btn-link btn-sm">
                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Informe Mensual
                                    </td>
                                    <td>
                                        Usuario/Sistema
                                    </td>
                                    <td>
                                        <?= date("Y-m-d", mt_rand(0, 500000000)); ?>
                                    </td>
                                    <td class="text-right">
                                        <a href="?c=pdf&a=GenerarPdf&doc=Mensual&name=Mensual" class="btn btn-icon btn-round btn-link btn-sm">
                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Informe de Beneficiario
                                    </td>
                                    <td>
                                        Lider de Dimension
                                    </td>
                                    <td>
                                        <?= date("Y-m-d", mt_rand(0, 500000000)); ?>
                                    </td>
                                    <td class="text-right">
                                        <a href="?c=pdf&a=GenerarPdf&doc=Beneficiado&name=Beneficiado" class="btn btn-icon btn-round btn-link btn-sm">
                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Informe de Desersion
                                    </td>
                                    <td>
                                        Instructor/Lider/Funcionario
                                    </td>
                                    <td>
                                        <?= date("Y-m-d", mt_rand(0, 500000000)); ?>
                                    </td>
                                    <td class="text-right">
                                        <a href="?c=pdf&a=GenerarPdf&doc=Desersion&name=Desersion" class="btn btn-icon btn-round btn-link btn-sm">
                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Informe de Remision
                                    </td>
                                    <td>
                                        Instructor/Funcinario
                                    </td>
                                    <td>
                                        <?= date("Y-m-d", mt_rand(0, 500000000)); ?>
                                    </td>
                                    <td class="text-right">
                                        <a href="?c=pdf&a=GenerarPdf&doc=Remision&name=Remision" class="btn btn-icon btn-round btn-link btn-sm">
                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-9">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Indice de </h5>
                        <h4 class="card-title">Desercion</h4>
                        <div class="dropdown">
                            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                <i class="now-ui-icons loader_gear"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <a class="dropdown-item text-danger" href="#">Remove Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="myLineChart"></canvas>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-category">All Persons List</h5>
                        <h4 class="card-title"> Employees Stats</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Country
                                    </th>
                                    <th>
                                        City
                                    </th>
                                    <th class="text-right">
                                        Salary
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            Oud-Turnhout
                                        </td>
                                        <td class="text-right">
                                            $36,738
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Minerva Hooper
                                        </td>
                                        <td>
                                            Curaçao
                                        </td>
                                        <td>
                                            Sinaai-Waas
                                        </td>
                                        <td class="text-right">
                                            $23,789
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sage Rodriguez
                                        </td>
                                        <td>
                                            Netherlands
                                        </td>
                                        <td>
                                            Baileux
                                        </td>
                                        <td class="text-right">
                                            $56,142
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Doris Greene
                                        </td>
                                        <td>
                                            Malawi
                                        </td>
                                        <td>
                                            Feldkirchen in Kärnten
                                        </td>
                                        <td class="text-right">
                                            $63,542
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mason Porter
                                        </td>
                                        <td>
                                            Chile
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $78,615
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">2018 Sales</h5>
                        <h4 class="card-title">All products</h4>
                        <div class="dropdown">
                            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                <i class="now-ui-icons loader_gear"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <a class="dropdown-item text-danger" href="#">Remove Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="myPieChart"></canvas>
                            <!-- <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="es_ES" data-type="horizontal" data-theme="light" data-vanity="franklicona"><a class="LI-simple-link" href='https://co.linkedin.com/in/franklicona?trk=profile-badge'>Frank Licona</a></div> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-9">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Email Statistics</h5>
                        <h4 class="card-title">24 Hours Performance</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-mini fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <button type="button" class="close " data-dismiss="modal" aria-hidden="true">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                    <h4 class="title title-up text-center">Escoja una fecha</h4>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-group" action="?c=home&a=AprovarActividad" method="post">
                                <div class="text-center form-group">
                                    <label>Fecha</label>
                                    <input type="hidden" id="ide" name="ide">
                                    <input type="hidden" id="token_id" name="token_id">
                                    <input type="hidden" id="action_id" name="action_id">
                                    <input type="date" min="<?= date('Y-m-d'); ?>" required name="date" class="form-control " value="">
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
</div>