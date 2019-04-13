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
                  <div class="card card-chart">
                     <div class="card-header">
                        <h5 class="card-category">Global Sales</h5>
                        <h4 class="card-title">Shipped Products</h4>
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