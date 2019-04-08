<div class="page-header clear-filter" filter-color="">
    <div class="page-header-image" style="background-image:url(assets/img/login3.jpg)"></div>
    <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-login card-plain">
                    <form class="form" method="post" action="?c=Home&a=ValidacionUser">
                        <div class="card-header text-center">
                            <div class="logo-container">
                                <img src="assets/img/logo-login.png" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                </div>
                                <input required type="email" name="email" class="form-control" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Email...">
                            </div>
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons text_caps-small"></i>
                                    </span>
                                </div>
                                <input required type="password" name="password" minlength="8" placeholder="Contraseña..." pattern="[A-Za-z0-9!?-]{8,12}" class="form-control" />
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Acceder</button>
                            <div class=" pull-left">
                                <h6>
                                    <a href="?c=Home&a=Ingreso" class="link">Registrarse</a>
                                </h6>
                            </div>
                            <div class="pull-right">
                                <h6>
                                    <a href="?c=Home&a=Recuperar" class="link">Olvidaste la contraseña?</a>
                                </h6>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>