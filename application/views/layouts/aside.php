<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
      <li class="nav-header">
        <div class="dropdown profile-element"> 
          <center>
          <span>
            <!-- <img alt="image" src="<?php echo base_url(); ?>img/1514588_535522619940308_470080477099354984_n.jpg" style="height: 70px;"/> -->
          </span>
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="clear"> 
                <span class="hidden-xs"><?php echo $this->session->userdata("nombre")?></span>

            </span> 
          </a>
          </center>
        </div>
        <div class="logo-element">
          <?= ucwords($this->session->userdata('alias')); ?>
        </div>
      </li>
      <li>
        <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-th"></i> <span class="nav-label">Inicio</span><span class="fa arrow"></span></a>
      </li>
      <li>
        <a href=""><i class="fa fa-cogs"></i> <span class="nav-label">Mantenimiento</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url();?>mantenimiento/categorias"><i class="fa fa-circle-o"></i> Categorias</a></li>
            <li><a href="<?php echo base_url();?>mantenimiento/clientes"><i class="fa fa-circle-o"></i> Clientes</a></li>
            <li><a href="<?php echo base_url(); ?>mantenimiento/productos"><i class="fa fa-circle-o"></i> Productos</a></li>
            <li><a href="<?php echo base_url(); ?>mantenimiento/proveedores"><i class="fa fa-circle-o"></i> Proveedores</a></li>
        </ul>
      </li> 
    <li>
        <a href=""><i class="fa fa-share-alt"></i> <span class="nav-label">Movimientos</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url();?>movimientos/ventas"><i class="fa fa-circle-o"></i> Ventas</a></li>
            <li><a href="<?php echo base_url();?>movimientos/compras"><i class="fa fa-circle-o"></i> Compras</a></li>
        </ul>
      </li> 
      <li>
        <a href=""><i class="fa fa-user-circle-o"></i> <span class="nav-label">Administrador</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url();?>administrador/usuarios"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            <li><a href="<?php echo base_url();?>administrador/permisos"><i class="fa fa-circle-o"></i> Permisos</a></li>
        </ul>
      </li> 
      <li >
        <a href=""><i class="fa fa-print"></i> <span>Reportes</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url();?>reportes/ventas"><i class="fa fa-circle-o"></i> Reporte Ventas</a></li>
            <li><a href="<?php echo base_url();?>reportes/pedidos"></i> Reporte Pedidos</a></li>
            <li><a href="<?php echo base_url();?>reportes/productos"></i> Reporte Productos</a></li>
            
        </ul>
      </li>
    </ul>
  </div>
</nav>