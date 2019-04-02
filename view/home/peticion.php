
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login3.jpg)"></div>
        <div class="content">
            <div class="container">
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
                               