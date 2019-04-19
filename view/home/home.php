<?php if ($_SESSION['dimension_id'] == '7') : ?>
   <div class="panel-header panel-header-md">
      <div class="wrapper">
         <canvas id="chart-0"></canvas>
      </div>
   </div>
   <div class="content">
      <div class="row">
         <div class="col-md-4">
            <div class="card card-user">
               <div class="image">
                  <img src="assets/img/bg5.jpg" alt="...">
               </div>
               <div class="card-body">
                  <div class="author">
                     <a href="#">
                        <img class="avatar border-gray" src="assets/img/mike.jpg" alt="...">
                        <h5 class="title"><?= $_SESSION['name'] . " " . $_SESSION['last_name']; ?></h5>
                     </a>
                     <p class="description">
                        <?= $_SESSION['email']; ?>
                     </p>
                  </div>
                  <p class="description text-center">
                     <?= $_SESSION['tell']; ?>
                  </p>
               </div>
               <hr>
               <div class="button-container">
                  <div class="social-description">
                     <h2>26</h2>
                     <p>Actividades realizadas</p>
                  </div>
                  <div class="social-description">
                     <h2>26</h2>
                     <p>Peticiones aceptadas</p>
                  </div>
                  <div class="social-description">
                     <h2>48</h2>
                     <p>Actividades pendientes</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-8">
            <div class="row justify-content-center">
               <div class="col-md-4 col-6">
                  <div class="card card-user">
                     <div class="author">
                        <a href="#">
                           <button class="avatar border-gray btn btn-success btn-round btn-icon btn-lg "><i class="fas fa-heartbeat "></i></button>
                           <h6 class="">Salud</h6>
                        </a>
                     </div>
                     <hr>
                     <div class="button-container">
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-google-plus-g"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="card card-user ">
                     <div class="author">
                        <a href="#">
                           <button class="avatar border-gray btn btn-info btn-round btn-icon btn-lg "><i class="fas fa-hand-holding-usd"></i></button>
                           <h6 class="">Apoyo y Sostenimiento</h6>
                        </a>
                     </div>
                     <hr>
                     <div class="button-container">
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-google-plus-g"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-7">
                  <div class="card card-user ">
                     <div class="author">
                        <a href="#">
                           <button class="avatar border-gray btn btn-primary btn-round btn-icon btn-lg "><i class="fab fa-font-awesome-flag"></i></button>
                           <h6 class="">Liderazgo</h6>
                        </a>
                     </div>
                     <hr>
                     <div class="button-container">
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-google-plus-g"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="col-md-4  col-6">
                  <div class="card card-user ">
                     <div class="author">
                        <a href="#">
                           <button class="avatar border-gray btn btn-warning btn-round btn-icon btn-lg "><i class="fas fa-brain"></i></button>
                           <h6 class="">Psicologia</h6>
                        </a>
                     </div>
                     <hr>
                     <div class="button-container">
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-google-plus-g"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="card  card-user ">
                     <div class="author">
                        <a href="#">
                           <button class="avatar border-gray btn btn-danger btn-round btn-icon btn-lg "><i class="fas fa-guitar"></i></button>
                           <h6 class="">Cultura</h6>
                        </a>
                     </div>
                     <hr>
                     <div class="button-container">
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-google-plus-g"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="col-md-5 offset-0 col-7 ">
                  <div class="card  card-user ">
                     <div class="author">
                        <a href="#">
                           <button class="avatar border-gray btn btn-secondary btn-round btn-icon btn-lg "><i class="fas fa-dumbbell"></i></button>
                           <h6 class="">Deporte</h6>
                        </a>
                     </div>
                     <hr>
                     <div class="button-container">
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-link btn-icon btn-round btn-lg">
                           <i class="fab fa-google-plus-g"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">

               <div class="col-md-6">
                  <div class="card  card-tasks">
                     <div class="card-header ">
                        <h5 class="card-category">Peticion de</h5>
                        <h4 class="card-title">Actividades </h4>
                     </div>
                     <div class="card-body ">
                        <div class="table-full-width table-responsive">
                           <table class="table">
                              <tbody>
                                 <?php foreach ($this->model->ListarPeticion(false) as $r) : ?>
                                    <tr>
                                       <td class="text-left">En la ficha <strong><a href="?c=Ficha&a=Info&id=<?= $r->tok_id; ?>"><?= $r->tok_name; ?></a></strong>, el <strong><?= $r->requester . " "; ?></strong> solicito <strong><?= $r->acc_name . " "; ?></strong></td>


                                       <td class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="" class="btn btn-warning btn-round btn-icon btn-icon-mini btn-neutral">
                                             <i class="now-ui-icons location_bookmark"></i>
                                          </button>
                                          <button title="" class="btn btn-success btn-round btn-icon btn-icon-mini btn-neutral" onclick="passValue2(<?= $r->ide ?>,<?= $r->tok_id ?>,<?= $r->acc_id ?>)" data-toggle="modal" data-target="#myModal2">
                                             <i class="now-ui-icons ui-1_check"></i>
                                          </button>


                                       </td>
                                    </tr>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="card-footer ">
                        <hr>
                        <div class="stats">
                           <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
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
                        <div class="chart-area">
                           <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
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
         </div>
      </div>
   </div>
<?php else : ?>
   <div class="panel-header panel-header-sm">
   </div>
   <div class="content">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">
                  <h5 class="title"><?= $_SESSION['dimension']; ?></h5>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="card  card-tasks">
                     <div class="card-header ">
                        <h5 class="card-category">Peticion de</h5>
                        <h4 class="card-title">Actividades</h4>
                     </div>
                     <div class="card-body ">
                        <div class="table-full-width table-responsive">
                           <table class="table">
                              <tbody>
                                 <?php foreach ($this->model->ListarPeticion(true) as $r) : ?>
                                    <tr>
                                       <td class="text-left">En la ficha <strong><a href="?c=Ficha&a=Info&id=<?= $r->tok_id; ?>"><?= $r->tok_name; ?></a></strong><?= $r->requester . " "; ?></strong> solicito <strong><?= $r->acc_name . " "; ?></strong></td>
                                       <td class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="" class="btn btn-warning btn-round btn-icon btn-icon-mini btn-neutral">
                                             <i class="now-ui-icons location_bookmark"></i>
                                          </button>
                                          <button title="" class="btn btn-success btn-round btn-icon btn-icon-mini btn-neutral" onclick="passValue2(<?= $r->ide ?>,<?= $r->tok_id ?>,<?= $r->acc_id ?>)" data-toggle="modal" data-target="#myModal2">
                                             <i class="now-ui-icons ui-1_check"></i>
                                          </button>
                                       </td>
                                    </tr>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="card-footer ">
                        <hr>
                        <div class="stats">
                           <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card card-chart">
                     <div class="card-header">
                        <h5 class="card-category">Email Statistics</h5>
                        <h4 class="card-title">24 Hours Performance</h4>
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
            <div class="row">
               <div class=" col-md-6">
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
                        <div class="chart-area">
                           <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                        </div>
                     </div>
                     <div class="card-footer">
                        <div class="stats">
                           <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card card-chart">
                     <div class="card-header">
                        <h5 class="card-category">Email Statistics</h5>
                        <h4 class="card-title">24 Hours Performance</h4>
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
         <div class="col-md-4">
            <div class="card card-user">
               <div class="image">
                  <img src="assets/img/bg5.jpg" alt="...">
               </div>
               <div class="card-body">
                  <div class="author">
                     <a href="#">
                        <img class="avatar border-gray" src="assets/img/mike.jpg" alt="...">
                        <h5 class="title"><?= $_SESSION['name'] . " " . $_SESSION['last_name']; ?></h5>
                     </a>
                     <p class="description">
                        <?= $_SESSION['email']; ?>
                     </p>
                  </div>
                  <p class="description text-center">
                     <?= $_SESSION['tell']; ?>
                  </p>
               </div>
               <hr>
               <div class="button-container">
                  <div class="social-description">
                     <h2>26</h2>
                     <p>Actividades realizadas</p>
                  </div>
                  <div class="social-description">
                     <h2>26</h2>
                     <p>Peticiones aceptadas</p>
                  </div>
                  <div class="social-description">
                     <h2>48</h2>
                     <p>Actividades pendientes</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php endif; ?>
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