    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login3.jpg)"></div>
        <div class="content">
            <div class="container">

                <div class="">
                    <div class="">
                    </div>
                    <form action="?c=home&a=Guardar" method="post">
                        <input name="token_id" type="hidden" value="<?= $_REQUEST['ficha'] ?>">
                        <input name="requester" type="hidden" value="<?= $_REQUEST['requester'] ?>">
                        <div class="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-12 ">
                                        <h1 class="title">Usted como <?= isset($_REQUEST['requester']) ? $_REQUEST['requester'] : ''; ?>
                                            de la ficha
                                        </h1>
                                    </div>
                                    <h1 class="title">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <strong>
                                                    <?php
                                                                        $id = $_REQUEST['ficha'];
                                                                        $row = $this->model->ObtenerFicha($id);
                                                                        echo $row[0]->name;
                                                                        ?>
                                                </strong> necesita
                                                <!-- </h1> -->
                                            </div>
                                            <div class="col-md-5 col-11 ">

                                                <!-- <h1 class="title"> -->
                                                <select required name="action_id" class="btn btn-round col-12 btn-link btn-neutral ">
                                                    <option selected disabled="" value=""><strong>Escoja...</strong></option>
                                                    <?php foreach ($this->model->ListarAccion() as $d) : ?>
                                                                            <option <?= isset($_REQUEST['id']) ? (($d->id == $actividad->action_id) ? 'Selected' : '') : ""; ?> value="
                                                                            <?= $d->id; ?>">
                                                                            <strong><?= $d->name; ?></strong>
                                                                            </option>
                                                                                                <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-1 col-1 ">
                                                <div class="text-center">
                                                    <button name="submit" type="summit" class="btn  btn-primary btn-icon btn-round btn-block btn-lg">
                                                        <i class="now-ui-icons align-middle ui-1_check"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- </div>
</div> -->