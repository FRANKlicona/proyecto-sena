<div class="page-header clear-filter" filter-color="">
    <div class="page-header-image" style="background-image:url(assets/img/login3.jpg)"></div>
    <div class="content">
 <div class="container">
            <div class="card card-signup" data-background-color="orange">
                <form class="form" action="?c=login&a=RegistroUser" method="post">
                    <div class="card-header text-center">
                        <h3 class="card-title title-up">Ingresa </h3>
                        <div class="logo-container">
                            <img class="btn btn-icon btn-link btn-lg " src="assets/img/logo-login.png" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group no-border">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                    </div>
                                    <input type="hidden" name="id" value="">
                                    <input required type="hidden" name="name" class="form-control" placeholder="Nombres" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" value="<?= $_REQUEST['name']; ?>">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="input-group no-border">
                                    <input required type="hidden" name="last_name" class="form-control" placeholder="Apellidos" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" value="<?= $_REQUEST['last_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                            </div>
                            <input required type="tel" name="tell" class="form-control" number="true" pattern="[0-9!?-]{10,10}" placeholder="Telefono" value="">
                        </div>
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                            </div>
                            <input required type="hidden" name="email"  class="form-control form-control-success" email="true" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Email" value="<?= $_REQUEST['email']; ?>">
                        </div>
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                            </div>
                            <select required class="form-control" name="dimension_id" id="">
                                <option selected disable value="">Dimension</option>
                                <?php foreach ($this->model->ListarDimensiones() as $d) : ?>
                                    <option value="<?php echo $d->id ?>"><?php echo $d->name; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                            </div>
                            <input required type="password" name="password-test" id="pass" class="form-control" minlength="8" placeholder="Contraseña" pattern="[A-Za-z0-9!?-]{8,12}" value="">
                        </div>
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                            </div>
                            <input required type="password" name="password" id="passed" equalTo="#pass" class="form-control" minlength="8" placeholder="Confirme su contraseña" pattern="[A-Za-z0-9!?-]{8,12}" value="">
                            <input type="hidden" name="rol_id" value="1">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-neutral btn-round btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
            <!-- </div> -->
        </div>
    </div>