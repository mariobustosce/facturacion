<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <h2>Sistema de Facturación<small>1.0&nbsp;&nbsp;&nbsp;</small> </h2>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url("login/menu");?>"><i class="fa fa-dashboard"></i> Menu</a></li>
        <li class="active"><a href="#">Remuneraciones</li>
      </ol>
      
    </section>
    <!-- Main content -->
    <section class="content">
     
     <div class="row">
        <div class="col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa  fa-usd"></i></span>
<?php 

  foreach ($totalesnomina as $t)  {
    echo" 
            <div class='info-box-content'>
              <span class='info-box-text'>Total Costo Cliente</span>
              <span class='info-box-number'>$".number_format($t["TotalCostoFinalCliente"])."<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class='col-md-3'>
          <div class='info-box'>
            <span class='info-box-icon bg-green'><i class='fa fa-users'></i></span>

            <div class='info-box-content'>
              <span class='info-box-text'>N° Contratos</span>
              <span class='info-box-number'>".$t["ncontratos"]."</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class='col-md-3'>
          <div class='info-box'>
            <span class='info-box-icon bg-yellow'><i class='fa fa-black-tie'></i></span>

            <div class='info-box-content'>
              <span class='info-box-text'>N° Contratos Fijos</span>
              <span class='info-box-number'>5</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class='col-md-3'>
          <div class='info-box'>
            <span class='info-box-icon bg-red'><i class='fa fa-industry'></i></span>

            <div class='info-box-content'>
              <span class='info-box-text'>N° Contratos Indefinido</span>
              <span class='info-box-number'>25</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
 ";}?>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">

              <h3 class="box-title">Gastos</h3>
              <h3>Cliente:&nbsp;&nbsp;<small><?php echo $totalesnomina[0]["nombrecliente"]; ?></small></h3>

              <!-- <div class="box-tools pull-right">
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
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>Rango Fecha: 1 Abril, 2017 - 30 Junio, 2014</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <table id="tabla" class="display nowrap" cellspacing="0" width="100%">
                      <thead>
                              <tr>
                                <th>Cliente</th>
                                <th>Estado</th>
                                <th>Fecha Ingreso</th>
                              </tr>
                      </thead>
                      <tbody>
                        <?php 
                        foreach($totalesnomina as $c) {
echo "     
            <tr>  
              <td>".$c['nombrecliente']."</td>
              <td>".$c['EstadoNomina']."</td> 
              <td>".$c['FechaRegistro']."</td>
            </tr>";
        } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <!-- <div class="col-md-4">
                  <p class="text-center">
                    <strong>Totales</strong>
                  </p>

                  <div class="progress-group">
                    <div class="info-box bg-green" style="height: 60px;">
                      <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Remuneracion</span>
                          <span class="info-box-number">5,200</span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                          </div>
                          <span class="progress-description">50% Increase in 30 Days</span>
                        </div>
                    /.info-box-content
                    </div>
                  </div>
                  /.progress-group
                  <div class="progress-group">
                    <div class="info-box bg-green">
                      <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Telefonia</span>
                          <span class="info-box-number">5,200</span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                          </div>
                          <span class="progress-description">50% Increase in 30 Days</span>
                        </div>
                    /.info-box-content
                    </div>

                     <div class="progress-group">
                    <div class="info-box bg-green">
                      <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Inventory</span>
                          <span class="info-box-number">5,200</span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                          </div>
                          <span class="progress-description">50% Increase in 30 Days</span>
                        </div>
                    /.info-box-content
                    </div>
                  </div>
                  <div class="progress-group">
                    <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Inventory</span>
              <span class="info-box-number">5,200</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
            </div>
            /.info-box-content
          </div>
                  </div>
                  /.progress-group
                  <div class="progress-group">
                    <span class="progress-text">Vis</span>
                    <span class="progress-number"><b>480</b>/800</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  /.progress-group
                  div class="progress-group">
                    <span class="progress-text">Send Inquiries</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  /.progress-group
                </div>
                /.col
              </div> -->
         <!--      /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">Total Sueldo Proporcional</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">Totale Imponibles</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813</h5>
                    <span class="description-text">Comicion Total Agencia</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">$14,863.00</h5>
                    <span class="description-text">Total Costo final Cliente</span>
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
      
      <!-- /.row -->



<script type="text/javascript">
  
  $(document).ready(function() {
    var table = $('#tabla').DataTable( {
      searching   : true,  
      info        : true,
      lengthMenu : [[5, 15, 25,50, -1], [5,15, 25, 50, "All"]],
      scrollX     : true,
      autoWidth   : true,
        "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
    } );
} );


</script>
<style type="text/css">
  
  td {

    font-size:20px;

}
</style>