    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login3.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="card" data-background-color="orange">
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
                                                echo $this->model->ObtenerFicha($id)[0]->name;
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
                                                    <div class="">
                                                        <select id="poblation" required name="poblation" class="input-group btn btn-round btn-link btn-neutral ">
                                                            <option selected disabled="" class="text-left" value="">Para un?</option>
                                                            <option style="color:black; background:none;" value="1">Grupo</option>
                                                            <option style="color:black; background:none;" value="2">Aprendiz</option>
                                                        </select>
                                                    </div>
                                                    <div class="">
                                                        <select id="dimension_id" required name="dimension_id" class="input-group btn btn-round btn-link btn-neutral ">
                                                            <option selected disabled="" value="">Dimension</option>
                                                            <?php foreach ($this->model->ListarDimensiones("") as $d) : ?>
                                                                <option style="color:black; background:none;" value="<?= $d->id; ?>"><?= $d->name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="">
                                                        <select id="action_id" required name="action_id" class="input-group btn btn-round btn-link btn-neutral ">
                                                            <option selected disabled="" value="">Escoja una actividad</option>
                                                            <?php foreach ($this->model->ListarAccion("") as $d) : ?>
                                                                <option style="color:black; background:none;" value="<?= $d->id; ?>"><?= $d->name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="">
                                                        <select id="reasons" required name="reasons" class="input-group btn btn-round btn-link btn-neutral ">
                                                            <option selected disabled="" value="">Escoja un Motivo?</option>
                                                            <option style="color:black; background:none;" value="r1">Problematica encontrada</option>
                                                            <option style="color:black; background:none;" value="r2">Eventualidad Presentada</option>
                                                            <option style="color:black; background:none;" value="r3">Sin Especificar</option>
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
                </div>
            </div>
        </div>
        <!-- </div>
</div> -->