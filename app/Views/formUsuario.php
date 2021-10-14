<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">Formulario Creación de Usuario</h3>
        <div class="grid_3 grid_4">
            <div class="bs-example">
                <div class="panel-body panel-body-inputin">
                    <form role="form" id="formUsuario" name="formUsuario" class="form-horizontal" method="POST"
                        action="<?php echo base_url().'/crearUsuario'?>">

                        <input type="hidden" name="hiddenid" id="hiddenid" value="<?= old('hiddenid')?>">

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="nombres">Nombres</label>
                            <div class="input-group in-grp1">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" class="form-control1 u_nombres" placeholder="Nombres"
                                    name="u_nombres" id="u_nombres" value="<?= old('u_nombres')?>">
                            </div>
                            <p class="help is-danger"><?= session('errors.u_nombres')?></p>
                            &nbsp;&nbsp;
                            <span id='msg-u_nombres'></span>

                            <div class="clearfix"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="u_apellido">Apellidos</label>

                            <div class="input-group in-grp1">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" class="form-control1 u_apellido" id="u_apellido"
                                    placeholder="Apellidos" name="u_apellido" value="<?= old('u_apellido')?>">
                            </div>
                            <p class="help is-danger"><?= session('errors.u_apellido')?></p>&nbsp;&nbsp;
                            <span id="msg-u_apellido"></span>

                            <div class="clearfix"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="email">Correo Electronico</label>

                            <div class="input-group input-icon right in-grp1">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                <input id="email" class="form-control1 u_correo" type="email"
                                    placeholder="Correo Electronico" name="u_correo" value="<?= old('u_correo')?>">
                            </div>
                            <p class="help is-danger"><?= session('errors.u_correo')?></p>&nbsp;&nbsp;
                            <span id='msg-email'></span>

                            <div class="clearfix"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="rol">Rol</label>
                                <div class="input-group input-icon right in-grp1">
                                    <span class="input-group-addon">
                                        <i class="fa fa-indent"></i>
                                    </span>
                                    <select class="form-select form-control1 " id="roles" name="roles"
                                        aria-label="Default select example">
                                        <option selected disabled>--------------- Selecciona un Rol ---------------
                                        </option>
                                        <?php foreach($roles as $rol ): ?>
                                        <option id="roles" value="<?php echo $rol->r_rol ?>"
                                            name="<?php echo $rol->r_rol ?>"><?php echo $rol->r_rol ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                &nbsp;&nbsp;
                                <span id="msg-roles" class="alert-danger"></span>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="row">
                            <div align="center" class="col-sm-8 col-sm-offset-2">
                                <button type="button" class="btn btn-primary btn-lg btn guardarBtn"
                                    id="guardarBtn">Guardar</button>
                                <button type="button" class="btn btn-default btn" name="btnCancelar">Cancelar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="grid_3 grid_5">
            <div class="xs tabls">
                <div class="bs-example4" data-example-id="contextual-table">
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <?php foreach($usuarios as $key=>$data): ?>
                            <tr>
                                <td type="" style="display:none;" class="u_id" id="u_id"><?php echo $data['u_id']?></td>
                                <td><?php echo $data['u_nombres']?></td>
                                <td><?php echo $data['u_apellidos']?></td>
                                <td><?php echo $data['u_correo']?></td>
                                <td>
                                    <?php 
                                    switch ($data['u_rol']) {
                                        case 1:
                                            echo ("SuperAdmin");
                                            break;
                                        case 2:
                                            echo ("Administrador");
                                            break;
                                        case 3:
                                            echo ("Editor");
                                            break;
                                        case 4:
                                            echo ("Lector");
                                            break;        
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a type="button" style="vertical-align: inherit;"
                                        class="btn btn-warning btn-sm editar_btn" id="editar" name="editar">Editar</a>
                                </td>
                                <td>
                                    <a type="button" name="eliminarUsuario" id="eliminarBtn"
                                        class="btn btn-danger btn-sm">Eliminar</a>
                                </td>

                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                  
                </div>
            </div><!-- /.table-responsive -->
        </div>
    </div>
    </section>