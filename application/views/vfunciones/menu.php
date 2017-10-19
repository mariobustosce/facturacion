<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Sistema de Facturación<small>1.0</small> </h2>
        <ol class="breadcrumb">
        <li><a href="<?php echo base_url("login/menu");?>"><i class="fa fa-dashboard"></i> Menu</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <table>
              <td><h3 class="box-title">Cliente</td> 
                <form id="form1" name="form1" method="post" action="<?php echo  site_url();?>/buscarCliente">
                    <td><select id="clientes" name="clientes" style="width:200px" class="form-control" onchange="document.getElementById('form1').submit();">
                        <option value="">Seleccione</option>
            <?php
                foreach ($cliente as $cl) {echo "<option value='".$cl["cliente"]."'>".strtoupper($cl["cliente"])."</option>";}?></select></td></form> <small>Cliente Asignado</small></h3>
                </table>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Fecha: 16 Mayo, 2017 - 16 Octubre, 2017</strong>
                  </p>

                                <div class="chart">
                                  <!-- Sales Chart Canvas -->
                                  <div class="box box-primary">
                          <div class="box-header with-border">
                            <i class="fa fa-bar-chart-o"></i>

                            <h3 class="box-title">Costos total por mes</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <div class="box-body">
                            <div id="bar-chart" style="height: 400px;"></div>
                          </div>
                          <!-- /.box-body-->
                        </div> 
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Totales</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Remuneraciones</span>
                    <span class="progress-number"><b>$1.345.876</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Gastos</span>
                    <span class="progress-number">$3.545.777</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 100%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Sistemas Audisis</span>
                    <span class="progress-number"><b>$6.325.600</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 100%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Telefonia</span>
                    <span class="progress-number"><b>$345.876</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Bodega</span>
                    <span class="progress-number">$1.550.800</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-primary" style="width: 100%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Finiquitos</span>
                    <span class="progress-number">$7.345.870</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 100%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Envios</span>
                    <span class="progress-number">$2.562.543</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 100%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Boletas de Honorarios</span>
                    <span class="progress-number">$1.130.872</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Reliquidaciones</span>
                    <span class="progress-number">$1.745.976</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Proyectos</span>
                    <span class="progress-number">$445.876</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-primary" style="width: 100%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <!-- <div class="progress-group">
                    <span class="progress-text">Vis</span>
                    <span class="progress-number"><b>480</b>/800</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div> -->
                  <!-- /.progress-group -->
                  <!-- div class="progress-group">
                    <span class="progress-text">Send Inquiries</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div> -->
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$1.800.210</h5>
                    <span class="description-text">Total Facturación Neta</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$342.000</h5>
                    <span class="description-text">Total IVA</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$2.142.000</h5>
                    <span class="description-text">Total Facturacion</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <a href="<?php echo base_url("funciones/cFacturacion");?>"><button type="button" class="btn btn-block btn-primary btn-lg">Facturar</button></a>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

<script type="text/javascript">
  
var bar_data = {
      data : [['Mayo', 10], ['Junio', 8], ['Julio', 4], ['Agosto', 13], ['Septiembre', 17], ['Octubre', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })


</script>
      
<style type="text/css">
  
  td {

    font-size:20px;

}
</style>