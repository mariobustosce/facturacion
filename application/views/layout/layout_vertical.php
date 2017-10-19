<body class="hold-transition skin-green  sidebar-mini " >
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="text-align: center; color: white;"><a href="<?php echo base_url("login/menu");?>">MENÚ</a></li>
      <!--    <li class="header">Cliente</li>
         <li><a href="#"><span>Selecione Cliente</span></a></li>
        <li><a href="#"><form id="form1" name="form1" method="post" action="<?php echo  site_url();?>/buscarCliente">
        <select id="clientes" name="clientes" style="width:200px" class="form-control" onchange="document.getElementById('form1').submit();">
            <option value="">Seleccione</option>
            <?php
                foreach ($clientes as $cl) {
                    echo "<option value='".$cl["id_cliente"]."'>".strtoupper($cl["cliente"])."</option>";}?>
        </select></form></a> 
        </form></li> -->
        <li class="header">Areas</li>
        <li class="treeview">
          <a href="controlador/vista">
            <i class="fa fa-file-text-o"></i>
            <span>Facturacion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/cFacturacion");?>"><i class="fa fa-circle-o"></i>Detalle Facturación</a></li>
        </ul>
        </li>
        <!-- <li class="treeview">
          <a href="controlador/vista">
            <i class="fa fa-file-text-o"></i>
            <span>Remuneraciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/cremuneraciones");?>"><i class="fa fa-circle-o"></i>Nominas ingresadas</a></li>
        </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Remuneraciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/cremuneraciones");?>"><i class="fa fa-circle-o"></i>Remuneraciones</a></li>
           <li><a href="<?php echo base_url("funciones/cnomina");?>"><i class="fa fa-circle-o"></i>Detalle de Nomina</a></li>
        </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url("funciones/cgastos");?>">
            <i class="fa fa-dollar"></i>
            <span>Gastos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/cgastos");?>"><i class="fa fa-circle-o"></i>Detalle de Gastos</a></li>
        </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-buysellads"></i>
            <span>Sistemas Audisis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/csistemas");?>"><i class="fa fa-circle-o"></i>Detalle de Sistemas</a></li>
        </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fax"></i>
            <span>Telefonia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/ctelefonia");?>"><i class="fa fa-circle-o"></i>Detalle de Telefonia</a></li>
        </ul>
         
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Bodega</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/cbodega");?>"><i class="fa fa-circle-o"></i>Detalle de Bodega</a></li>
        </ul>
         
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i>
            <span>ChileExpress</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/cchileexpress");?>"><i class="fa fa-circle-o"></i>Detalle ChileExpress</a></li>
        </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-usd"></i>
            <span>Reliquidaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
          <li><a href="<?php echo base_url("funciones/creliquidaciones");?>"><i class="fa fa-circle-o"></i>Detalle Reliquidaciones</a></li>
        </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i>
            <span>Proyectos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("funciones/cproyectos");?>"><i class="fa fa-circle-o"></i>Proyectos</a></li>
            
          <!--   <li><a href="<?php echo base_url("nominalist/chequeonimonas");?>"><i class="fa fa-circle-o"></i>Historial de Nominas</a></li> -->
         
          </ul>
        </li>

      </ul>
    </section>
  </aside>
</body>