
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Compras
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <form action="<?php echo base_url();?>movimientos/compras/store" method="POST" class="form-horizontal">
                            <div class="form-group">
                                
                                <div class="col-md-3">
                                    <label for="">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha" required>
                                </div>
                            </div>
                            <label>Productos:</label>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        <th>Stock Minimo</th>
                                        <th>Categoria</th>
                                        <th>Prioridad</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($productos)):?>
                                        <?php foreach($productos as $producto):?>

                                            <tr>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->id;?></td>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->codigo;?></td>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->nombre;?></td>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->descripcion;?></td>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->precio;?></td>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->stock;?></td>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->stock_minimo;?></td>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->categoria;?></td>
                                                <td bgcolor="<?php echo $producto->color;?>"><?php echo $producto->prioridad;?></td>
                                                <?php $dataproducto = $producto->id."*".$producto->codigo."*".$producto->nombre."*".$producto->descripcion."*".$producto->precio."*".$producto->stock."*".$producto->stock_minimo."*".$producto->categoria;?>
                                                <td bgcolor="<?php echo $producto->color;?>">
                                                        <center>
                                                            <a onclick="agregar('<?php echo $producto->id;?>','<?php echo $producto->codigo;?>','<?php echo $producto->nombre;?>','<?php echo $producto->precio;?>','<?php echo $producto->stock;?>');" class="btn btn-primary"><span class="fa fa-plus"></span></a>
                                                        </center>
                                                </td>
                                            </tr>

                                        <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                    
                            <table id="tbcompras" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        <th>Cantidad</th>
                                        <th>Importe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>

                            <div class="form-group">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Subtotal:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="subtotal" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">IGV:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="igv" id="igv" readonly="readonly">
                                    </div>
                                </div>
                               <!--  <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Descuento:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="descuento" value="0.00" readonly="readonly">
                                    </div>
                                </div> -->
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Total:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="total" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                </div>
                                
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
