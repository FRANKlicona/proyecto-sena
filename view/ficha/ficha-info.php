<div class="panel-header panel-header-sm">
</div>
<div class="content">
   <div class="col-12">
      <div class="card card-chart">
         <div class="card-header">
            <h5 class="card-category">No. de ficha</h5>
            <h4 class="card-title"><?= $ficha->tok_name; ?></h4>
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
            <div class="row">
               <div class="col-md-5">
                  <h5>Programa de Formacion</h5>
                  <p><?= $ficha->pro_name; ?></p>
                  <h5>Codigo de Solicitud</h5>
                  <p><?= $ficha->pass_code; ?></p>
               </div>
               <div class="col-md-3">
                  <h5>Fecha de inicio</h5>
                  <p><?= $ficha->date_start; ?></p>
                  <h5>Fecha de finalizacion</h5>
                  <p><?= $ficha->date_finish; ?></p>
               </div>
               <div class="col-md-4">
                  <h5>Jornada</h5>
                  <p><?= $ficha->journey; ?></p>
                  <h5>Cantidad de estudiantes</h5>
                  <p><?= $ficha->student; ?></p>
               </div>
            </div>
         </div>
         <div class="card-footer">
            <div class="stats">
               <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title"> Registros</h4>
            </div>
            <div class="row">
               <div class="col-md-6 ">
                  <div class="card-header">
                     <h6 class=""> Peticiones</h6>
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#pending" role="tab">
                              <i class="now-ui-icons ui-1_bell-53"></i> Pendientes
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#denied" role="tab">
                              <i class="now-ui-icons ui-1_simple-remove"></i> Rechazadas
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#accepted" role="tab">
                              <i class="now-ui-icons ui-1_check"></i> Aceptadas
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="card-body">
                     <!-- Tab panes -->
                     <div class="tab-content text-center">
                        <div class="tab-pane active" id="pending" role="tabpanel">
                           <div class="table-full-width table-responsive">
                              <table class="table">
                                 <tbody>
                                    <?php foreach ($this->listado->ListarPeticion('NO') as $peticion) : ?>
                                       <tr>
                                          <td class="text-left">En la ficha <strong><a href="?c=Ficha&a=Info&id=<?= $peticion->tok_id; ?>"><?= $peticion->tok_name; ?></a></strong>, el <strong><?= $peticion->requester . " "; ?></strong> solicito <strong><?= $peticion->acc_name . " "; ?></strong></td>
                                          <td class="td-actions text-right">
                                             <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                             </button>
                                             <button title="" class="btn btn-success btn-round btn-icon btn-icon-mini btn-neutral" onclick="passValue2(<?= $peticion->ide ?>,<?= $peticion->tok_id ?>,<?= $peticion->acc_id ?>)" data-toggle="modal" data-target="#myModal2">
                                                <i class="now-ui-icons ui-1_check"></i>
                                             </button>
                                          </td>
                                       </tr>
                                    <?php endforeach; ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="tab-pane" id="denied" role="tabpanel">
                           <div class="table-full-width table-responsive">
                              <table class="table">
                                 <tbody>
                                    <?php foreach ($this->listado->ListarPeticion('RECHAZADA') as $peticion) : ?>
                                       <tr>
                                          <td class="text-left">En la ficha <strong><a href="?c=Ficha&a=Info&id=<?= $peticion->tok_id; ?>"><?= $peticion->tok_name; ?></a></strong>, el <strong><?= $peticion->requester . " "; ?></strong> solicito <strong><?= $peticion->acc_name . " "; ?></strong></td>
                                       </tr>
                                    <?php endforeach; ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="tab-pane" id="accepted" role="tabpanel">
                           <div class="table-full-width table-responsive">
                              <table class="table">
                                 <tbody>
                                    <?php foreach ($this->listado->ListarPeticion('SI') as $peticion) : ?>
                                       <tr>
                                          <td class="text-left">En la ficha <strong><a href="?c=Ficha&a=Info&id=<?= $peticion->tok_id; ?>"><?= $peticion->tok_name; ?></a></strong>, el <strong><?= $peticion->requester . " "; ?></strong> solicito <strong><?= $peticion->acc_name . " "; ?></strong></td>
                                       </tr>
                                    <?php endforeach; ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 ">
                  <div class="card-header">
                     <h6 class=""> Actividades</h6>
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link  active " data-toggle="tab" href="#home" role="tab">
                              <i class="now-ui-icons ui-1_bell-53"></i> Pendientes
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                              <i class="now-ui-icons travel_info"></i> Vencidas
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                              <i class="now-ui-icons ui-1_check"></i> Realizadas
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="card-body">
                     <!-- Tab panes -->
                     <div class="tab-content text-center">
                        <div class="tab-pane active" id="home" role="tabpanel">
                           <table class="table">
                              <thead class=" text-primary">
                                 <th>
                                    Actividad
                                 </th>
                                 <th>
                                    Fecha
                                 </th>
                              </thead>
                              <tbody>
                                 <?php foreach ($this->listado->ListarActividad('pending') as $actividad) : ?>
                                    <tr>
                                       <td>
                                          <?= $actividad->acc_name; ?>
                                       </td>
                                       <td>
                                          <?= $actividad->date; ?>
                                       </td>
                                    </tr>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                           <table class="table">
                              <thead class=" text-primary">
                                 <th>
                                    Actividad
                                 </th>
                                 <th>
                                    Fecha
                                 </th>
                              </thead>
                              <tbody>
                                 <?php foreach ($this->listado->ListarActividad('denied') as $actividad) : ?>
                                    <tr>
                                       <td>
                                          <?= $actividad->acc_name; ?>
                                       </td>
                                       <td>
                                          <?= $actividad->date; ?>
                                       </td>
                                    </tr>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel">
                           <table class="table">
                              <thead class=" text-primary">
                                 <th>
                                    Actividad
                                 </th>
                                 <th>
                                    Fecha
                                 </th>
                              </thead>
                              <tbody>
                                 <?php foreach ($this->listado->ListarActividad('accepted') as $actividad) : ?>
                                    <tr>
                                       <td>
                                          <?= $actividad->acc_name; ?>
                                       </td>
                                       <td>
                                          <?= $actividad->date; ?>
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