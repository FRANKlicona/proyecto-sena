    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login3.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="card" data-background-color="orange">
                    <?php if (!isset($_REQUEST['no_reff'])) : ?>
                        <div class="card-header-text">
                            <h2 class="title">
                                Continue con la solicitud
                            </h2>
                        </div>
                        <form action="?c=home&a=RegistrarPeticion" method="post">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="container">
                                                Usted como <?= isset($_REQUEST['requester']) ? $_REQUEST['requester'] : ''; ?>
                                                de la ficha <strong>
                                                    <?php
                                                    $id = $_REQUEST['ficha'];
                                                    echo $this->model->ObtenerFicha($id)->name;
                                                    ?>
                                                </strong>solocita
                                            </h2>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">

                                                <div class="col-1">
                                                    <label style="color:white" for="poblation" class="btn btn-icon btn-md btn-round btn-warning">1</label>
                                                    <label style="color:white" for="dimension_id" class="btn btn-icon btn-md btn-round btn-warning">2</label>
                                                    <label style="color:white" for="action_id" class="btn btn-icon btn-md btn-round btn-warning">3</label>
                                                    <label style="color:white" for="reasons" class="btn btn-icon btn-md btn-round btn-warning">4</label> </div>
                                                <div class="col-10">
                                                    <h3>
                                                        <input name="token_id" type="hidden" value="<?= $_REQUEST['ficha'] ?>">
                                                        <input name="requester" type="hidden" value="<?= $_REQUEST['requester'] ?>">
                                                        <input name="email" type="hidden" value="<?= $_REQUEST['email'] ?>">
                                                        <input type="hidden" name="dimension_id" value="<?= $_REQUEST['dimension_id']; ?>">
                                                        <div class="">

                                                            <select id="poblation" required name="poblation" class="input-group btn btn-round btn-link btn-neutral ">
                                                                <option selected disabled="" class="text-left" value="">Poblacion?</option>
                                                                <option style="color:black; background:none;" value="1">Grupo</option>
                                                                <option style="color:black; background:none;" value="2">Aprendiz</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div>
                                                            <div class="nav-item dropdown">
                                                                <a href="#" class="dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                                                                    <p>Dimension?</p>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                                                    <?php foreach ($this->model->ListarDimensiones("") as $d) : ?>
                                                                        <ul><a style="color:black" href=" <?= Index::url(); ?>&dimension_id=<?= $d->id; ?>"><?= $d->name; ?></a></ul>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="actions" class="">
                                                            <select id="action_id" required name="action_id" class="input-group btn btn-round btn-link btn-neutral ">
                                                                <option selected disabled="" value="">Actividad?</option>
                                                                <?php if (isset($_REQUEST['dimension_id'])) : ?>
                                                                    <?php foreach ($this->model->ListarAccion($_REQUEST['dimension_id']) as $d) : ?>
                                                                        <option style="color:black; background:none;" value="<?= $d->id; ?>"><?= $d->name; ?></option>
                                                                    <?php endforeach;
                                                            else : ?>
                                                                    <option disabled="" value="">Por favor esocoja una dimension</option>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                        <div class="">
                                                            <select id="reasons" required name="reasons" class="input-group btn btn-round btn-link btn-neutral ">
                                                                <option selected disabled="" value="">Motivo?</option>
                                                                <option style="color:black; background:none;" value="1">Problematica encontrada</option>
                                                                <option style="color:black; background:none;" value="2">Eventualidad Presentada</option>
                                                                <option style="color:black; background:none;" value="3">Sin Especificar</option>
                                                            </select>
                                                        </div>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="">
                                    <button name="submit" type="summit" class="btn  btn-primary btn-round btn-icon btn-lg">
                                        <i class="now-ui-icons align-middle ui-1_check"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php else : ?>
                        <div class="card-header-title">
                            <h2 class="title">
                                El estado de su Peticion es
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title">
                                        Peticion
                                    </h3>
                                    <p><b>Fecha de solicitud: </b> <?= $pet->date_create; ?></p>
                                    <p><b>Solicitante :</b> <?= $pet->requester; ?></p>
                                    <p><b>Correo : </b><?= $pet->email; ?></p>
                                    <p><b>Estado : </b>
                                        <?php if ($pet->checkit == 'SI') : ?>
                                            Su solicitud con No referencia <?= $pet->no_reff; ?> fue aceptada y fue programada para el <?= $act->date; ?>
                                        <?php else :; ?>
                                            Su solicitud aun no ha sido aceptada por favor intente en otro momento
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <?php if ($pet->checkit == 'SI') : ?>
                                    <div class="col-md-6">
                                        <h3 class="title">
                                            Actividad
                                        </h3>
                                        <p><b>Esta actividad fue aceptada el </b> <?= $act->date_create; ?></p>
                                        <p><b>Ficha :</b> <?= $act->name; ?></p>
                                        <p><b>Sede : </b><?= $act->place; ?></p>
                                        <p><b>Estado : </b>
                                            <?php if ($act->checkit == 'SI') : ?>
                                                Esta actividad ya fue realizada el <?= $act->date; ?>
                                            <?php else : ?>
                                                Esta actividad fue programada para el dia <?= $act->date; ?> aun no se ha realizado
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-6">
                                        <h3 class="title">
                                            No existe actividad con dicho No referencia
                                        </h3>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- </div>
            </div> -->