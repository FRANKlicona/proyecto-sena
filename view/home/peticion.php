<<<<<<< HEAD
<?php

print_r ( $_REQUEST['data']);

?>
=======

>>>>>>> refs/remotes/origin/master
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login3.jpg)"></div>
        <div class="content">
            <div class="container">
<<<<<<< HEAD
                <div class="card card-login card-plain">
                    <div class="card-header">
                        <h3 class="title">¿Qué requiere el <?=$requester ?> </h3>
                    </div>
                    <form action="?c=login&a=Registro" method="post">
                        <div class="card-body">
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"></label>
                                        <input type="hidden" name="id" value="">
                                        <input type="text" name="name" class="form-control" placeholder="..." value="">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label for="last_name">Apellidos</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="..." value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ">
                                    <div class="form-group">
                                        <label for="tell">Telefono</label>
                                        <input type="text" name="tell" class="form-control" placeholder="Ej: 300 0000 000" value="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="Email">Correo Electronico</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="dimension_id">Dimension</label>
                                        <select class="form-control" name="dimension_id" id="">
                                            <?php foreach ($this->model->ListarDimensiones() as $d) : ?>
                                            <option value="<?php echo $d->id ?>"><?php echo $d->name; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input type="password" name="password" class="form-control" placeholder="*******" value="">
                                        <input type="hidden" name="rol_id" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div> 
=======
                    <h1 class="title">Usted como <?=isset($_REQUEST['requester'])? $_REQUEST['requester'] : ''; ?> 
                    de la ficha <strong><?php $id = $_REQUEST['ficha']; $row =$this->model->ObtenerFicha($id); echo $row[0]->name; ?></strong> necesita </h1>
                <div class="card card-login card-plain">
                    <div class="card-header">

                    </div>
                    <form action="?c=home&a=Guardar" method="post">
                    <input name="token_id" type="hidden" value="<?=$_REQUEST['ficha'] ?>">
                    <input name="requester" type="hidden" value="<?=$_REQUEST['requester'] ?>">
                        <div class="card-body">
                           
                            
                                <div class="row">
                            <div class="col-md-11 pr-1">
                                <div class="form-group">
                                    <label for="Peticion">Accion</label>
                                    <select name="action_id" class="form-control">
                                        <?php foreach ($this->model->ListarAccion() as $d) : ?>
                                        <option <?= isset($_REQUEST['id']) ? (($d->id == $actividad->action_id) ? 'Selected' : '') : ""; ?> value="
                                            <?= $d->id; ?>">
                                            <?= $d->name; ?>
                                        </option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                            <button type="summit" class="btn btn-primary btn-round btn-block btn-lg" >Pedir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                               
>>>>>>> refs/remotes/origin/master
