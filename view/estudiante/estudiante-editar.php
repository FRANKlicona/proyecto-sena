
<div class="panel-header panel-header-sm">
</div>
<div class="content ">
    <div class="row offset-md-3 ">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        <?= isset($_REQUEST['id']) ? "Editando : " . $estudiante->name : "Nuevo estudiante"; ?>
                    </h5>
                </div>
                <div class="card-body">
                    <form class="form-group" action="?c=estudiante&a=Guardar" method="post">
                        <input type="hidden" name="id" value="<?= $estudiante->id; ?>">
                        <div class="row">
                            <div class="col-md-6">
                            <label for="">Identificacion</label>
                            <input type="text" class="form-control" name="identification" value="<?=$estudiante->identification;?>" >
                            </div>
                            <div class="col-md-6 ">
                                <label for="">Nombres</label>
                                <input class="form-control" type="text" name="name" placeholder="Nombres del aprendiz" value="<?=$estudiante->name;?>">
                            </div>
                            <div class="col-md-6 ">
                                <label for="">Apellidos</label>
                                <input class="form-control" type="text" name="last_name" placeholder="Apellidos del aprendiz" value="<?=$estudiante->last_name;?>">
                            </div>
                            <div class="col-md-3">
                                <label>Genero</label>
                                    <select class="form-control" name="gender" id="">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                             <div class="col-md-3">
                                <label for="">Edad</label>
                                <input class="form-control" type="text" name="age" placeholder="Ej:18" id="" value="<?=$estudiante->age;?>" >
                             </div>   
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ficha</label>
                                    <select name="token_id" class="form-control" style="height:45px">
                                        <option disabled="" selected value="">Ficha</option>
                                        <?php foreach ($this->model->ListarFicha() as $d) : ?>
                                        <option <?= isset($_REQUEST['id']) ? (($d->id == $estudiante->token_id) ? 'Selected' : '') : ""; ?> value="<?= $d->id; ?> ">
                                        <?= $d->name; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <label for="">Email</label>
                                <input type="email" name="email" id="" class="form-control"value="<?=$estudiante->email;?>" >
                            </div>  
                            <div class="col-md-3">
                                <label for="">Numerdo de celular</label>
                                <input type="text" class="form-control" name="cell" placeholder="Ej : 3001258796" value="<?=$estudiante->cell;?>" >
                            </div>
                             
                             <div class="col-md-3">
                                <label for="">RH</label>
                                 <select class="form-control" name="HR" id="">
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                             
                                </select>
                             </div>
                            
                        </div>
                         <input type="hidden" name="status" value="En formacion" > 
                        <div class="text-right form-group">
                            <a type="button" href="?c=estudiante" class="btn btn-link btn-primary btn-round" ">Volver</a>
                            <button class=" btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div> 