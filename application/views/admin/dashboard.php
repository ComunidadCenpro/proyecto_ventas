
        <!-- =============================================== -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>
            Dashboard
            <small> / Panel Control </small>
        </h2>
    </div>
</div>
        <!-- Content Wrapper. Contains page content -->
<div class="wrapper wrapper-content">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Clientes</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $cantClientes;?></h1>
                                <a href="<?php echo base_url();?>mantenimiento/clientes" class="small-box-footer">Ver Clientes <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- small box -->
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Productos</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $cantProductos;?></h1>
                                <a href="<?php echo base_url();?>mantenimiento/productos" class="small-box-footer">Ver Productos <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- small box -->
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Usuarios</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $cantUsuarios;?></h1>
                                <a href="<?php echo base_url();?>administrador/usuarios" class="small-box-footer">Ver Clientes <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- small box -->
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Ventas</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $cantVentas;?></h1>
                                <a href="<?php echo base_url();?>movimientos/ventas" class="small-box-footer">Ver Ventas <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- small box -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Grafico estadistico</h3>

                                <div class="box-tools pull-right">
                                    <select name="year" id="year" class="form-control">
                                        <?php foreach($years as $year):?>
                                            <option value="<?php echo $year->year;?>"><?php echo $year->year;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div id="grafico" style="min-width: 310px; height: 400px;margin: 0 auto"></div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
