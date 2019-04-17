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
               <div class="col-md-6">
                  <div class="card-header">
                     <h5 class="card-title"> Peticiones</h5>
                  </div>
                  <div class="card-body">
                     <div class="table-full-width table-responsive">
                        <table class="table">
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="form-check">
                                       <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" checked>
                                          <span class="form-check-sign"></span>
                                       </label>
                                    </div>
                                 </td>
                                 <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                                 <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                       <i class="now-ui-icons ui-2_settings-90"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                       <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>            
               <div class="col-md-6">
                  <div class="card-header">
                     <h5 class="card-title"> Actividades</h5>
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