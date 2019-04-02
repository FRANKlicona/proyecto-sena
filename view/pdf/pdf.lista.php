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
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Indice de </h5>
                    <h4 class="card-title">Desercion</h4>
                    <div class="dropdown">
                        <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                            <i class="now-ui-icons loader_gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="?c=pdf&a=GenerarPdf&doc=Trimestral&name=Trimestral">Generar PDF</a>
                            <a class="dropdown-item" href="?c=pdf&a=GenerarPdf&doc=Desersion&name=Desersion">Desersion</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <a class="dropdown-item text-danger" href="#">Remove Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="lineChartExample"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Actividades VS Estudiante</h5>
                    <h4 class="card-title">Eficiencia</h4>
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
                    <div class="chart-area">
                        <canvas id="lineChartExample"></canvas>
                    <!-- <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="es_ES" data-type="vertical" data-theme="light" data-vanity="franklicona"><a class="LI-simple-link" href='https://co.linkedin.com/in/franklicona?trk=profile-badge'>Frank Licona</a></div> -->
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Satisfaccion de </h5>
                    <h4 class="card-title">Aprendices</h4>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="barChartSimpleGradientsNumbers"></canvas>
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