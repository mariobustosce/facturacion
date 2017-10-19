<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <td><h2>Sistema de Facturación<small>1.0&nbsp;&nbsp;&nbsp;</small> </h2></td>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url("login/menu");?>"><i class="fa fa-dashboard"></i> Menu</a></li>
        <li class="active"><a href="#">Detalles Nominas</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
     
     <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Gastos</h3>
              <table>
        <td><h1><small>Codigo Nomina:</small></td>
        <td></td> <td></td> <td></td> 
        <td><br><form id="form1" name="form1" method="post" action="<?php echo  site_url();?>/buscarCliente">
        <select id="clientes" name="clientes" style="width:200px" class="form-control" onchange="document.getElementById('form1').submit();">
            <option value="">Seleccione</option>
            <?php
                foreach ($cliente as $cl) {
                    echo "<option value='".$cl["id_cliente"]."'>".strtoupper($cl["cliente"])."</option>";}?>
        </select></form></td>
        </table>

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
                  <th>ID_Nomina</th>
                  <th>FechaRegistro</th>
                  <th>EstadoNomina</th>
                  <th>Nombres</th>
                  <th>ApellidoP</th>
                  <th>ApellidoM</th>
                  <th>Rut</th>
                  <th>Supervisor</th>
                  <th>Cliente</th>
                  <th>Cadena</th>
                  <th>Local</th>
                  <th>Ciudad</th>
                  <th>Region</th>
                  <th>CargoTrabajador</th>
                  <th>Jornada</th>
                  <th>FormaPago</th>
                  <th>Banco</th>
                  <th>NCuentaB</th>
                  <th>CO</th>
                  <th>TipoContrato</th>
                  <th>FechaInicio</th>
                  <th>FechaTermina</th>
                  <th>DiasTrabajados</th>
                  <th>SueldoBase</th>
                  <th>SueldoBaseProp</th>
                  <th>Gratificacion</th>
                  <th>BonoCualitativo</th>
                  <th>BonoCuantitavo</th>
                  <th>Cumplimiento</th>
                  <th>Bonos</th>
                  <th>N_HorasExtras</th>
                  <th>ValorHorasExtras</th>
                  <th>Aguinaldo</th>
                  <th>TotalImponible</th>
                  <th>Colacion</th>
                  <th>Movilizacion</th>
                  <th>MovilizacionVariable</th>
                  <th>Viatico</th>
                  <th>TotalHaber</th>
                  <th>DescuentoPrevicional</th>
                  <th>SueldoLiquido</th>
                  <th>SIS</th>
                  <th>Mutual</th>
                  <th>SeguroCesantia</th>
                  <th>ProvisionVacaciones</th>
                  <th>ProvisionFiniquito</th>
                  <th>Banefe</th>
                  <th>TotalCostoPersonal</th>
                  <th>ComisionAgencia</th>
                  <th>CostoFinalCliente</th>
                  <th>Observacion</th>
                  <th>LlegadaFulltime</th>
                  <th>LlegadaPartime</th>
                  <th>LlegadaSupervisor</th>
                  <th>DocCelular</th>
                  <th>DocTablet</th>
                  <th>DocNotebook</th>
                  <th>DocCredencial</th>
                  <th>DocUniforme</th>
                  <th>DocEPP</th>
                  <th>DocClub360</th>
                  <th>DocCloud</th>
                  <th>DocIntranet</th>
                  <th>DocApenet</th>
            </tr>
        </thead><a href=""></a>
        <tbody>

<?php foreach($clientes as $c) {  
            
        echo"  <tr> 
          <td>".$c['ID_Nomina']."</td>
                  <td>".$c['FechaRegistro']."</td>
                  <td>".$c['EstadoNomina']."</td>
                  <td>".$c['Nombres']."</td>
                  <td>".$c['ApellidoP']."</td>
                  <td>".$c['ApellidoM']."</td>
                  <td>".$c['Rut']."</td>
                  <td>".$c['Supervisor']."</td>
                  <td>".$c['Cliente']."</td>
                  <td>".$c['Cadena']."</td>
                  <td>".$c['Local']."</td>
                  <td>".$c['Ciudad']."</td>
                  <td>".$c['Region']."</td>
                  <td>".$c['CargoTrabajador']."</td>
                  <td>".$c['Jornada']."</td>
                  <td>".$c['FormaPago']."</td>
                  <td>".$c['Banco']."</td>
                  <td>".$c['NCuentaB']."</td>
                  <td>".$c['CO']."</td>
                  <td>".$c['TipoContrato']."</td>
                  <td>".$c['FechaInicio']."</td>
                  <td>".$c['FechaTermina']."</td>
                  <td>".$c['DiasTrabajados']."</td>
                  <td>".$c['SueldoBase']."</td>
                  <td>".$c['SueldoBaseProp']."</td>
                  <td>".$c['Gratificacion']."</td>
                  <td>".$c['BonoCualitativo']."</td>
                  <td>".$c['BonoCuantitavo']."</td>
                  <td>".$c['Cumplimiento']."</td>
                  <td>".$c['Bonos']."</td>
                  <td>".$c['N_HorasExtras']."</td>
                  <td>".$c['ValorHorasExtras']."</td>
                  <td>".$c['Aguinaldo']."</td>
                  <td>".$c['TotalImponible']."</td>
                  <td>".$c['Colacion']."</td>
                  <td>".$c['Movilizacion']."</td>
                  <td>".$c['MovilizacionVariable']."</td>
                  <td>".$c['Viatico']."</td>
                  <td>".$c['TotalHaber']."</td>
                  <td>".$c['DescuentoPrevicional']."</td>
                  <td>".$c['SueldoLiquido']."</td>
                  <td>".$c['SIS']."</td>
                  <td>".$c['Mutual']."</td>
                  <td>".$c['SeguroCesantia']."</td>
                  <td>".$c['ProvisionVacaciones']."</td>
                  <td>".$c['ProvisionFiniquito']."</td>
                  <td>".$c['Banefe']."</td>
                  <td>".$c['TotalCostoPersonal']."</td>
                  <td>".$c['ComisionAgencia']."</td>
                  <td>".$c['CostoFinalCliente']."</td>
                  <td>".$c['Observacion']."</td>
                  <td>".$c['LlegadaFulltime']."</td>
                  <td>".$c['LlegadaPartime']."</td>
                  <td>".$c['LlegadaSupervisor']."</td>";
                  

                    if ($c['DocCelular'] == null) {

                        echo "<td><label></label></td>";
                  
                    }else{
                        echo "<td><label><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></i></label></td>";
                    }if ($c['DocTablet'] == null) {

                        echo "<td><label></label></td>";
                  
                    }else{
                        echo "<td><label><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></i></label></td>";
                    }if ($c['DocNotebook'] == null) {

                        echo "<td><label></label></td>";
                  
                    }else{
                        echo "<td><label><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></i></label></td>";
                    }if ($c['DocCredencial'] == null) {

                        echo "<td><label></label></td>";
                  
                    }else{
                        echo "<td><label><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></i></label></td>";
                    }if ($c['DocUniforme'] == null) {

                        echo "<td><label></label></td>";
                  
                    }else{
                        echo "<td><label><a href='".$c['DocUniforme']."'><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></i></a></label></td>";
                    }
                    if ($c['DocEPP'] == null){

                        echo "<td><label></label></td>";
                    }else{
                         echo "<td><label><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></i></label></td>";
                    }
                    if ($c['DocClub360'] == null){

                        echo "<td><label></label></td>";
                    }else{
                         echo "<td><label><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></i></label></td>";
                    }
                    if ($c['DocCloud']== null) {

                        echo "<td><label></label></td>";
                  
                    }else{
                        echo "<td><label><i style='color: #00c0ef' class=' glyphicon glyphicon-ok'></i></label></td>";
                    }
                    if ($c['DocIntranet'] == null) {

                        echo "<td><label></i></label></td>";
                  
                    }else{
                        echo "<td><label><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></label></td>";
                    }
                    if ($c['DocApenet'] == null) {

                        echo "<td><label></label></td>";
                  
                    }else{
                        echo "<td><label><i style='color: #00c0ef' class='glyphicon glyphicon-ok'></i></label></td>";
                    }
                  echo"
             </tr>
             ";}?>
        </tbody>
    </table>
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
          <?php 

  foreach ($totales as $t)  {
    echo" 
            <div class='box-footer'>
              <div class='row'>
                <div class='col-sm-3 col-xs-6'>
                  <div class='description-block border-right'>
                    <span class='description-percentage text-green'><i class='fa fa-caret-up'></i> 17%</span>
                    <h5 class='description-header'>$".number_format($t["SueldoBasePropocional"])."</h5>
                    <span class='description-text'>Total Sueldo Base Proporcional</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class='col-sm-3 col-xs-6'>
                  <div class='description-block border-right'>
                    <span class='description-percentage text-yellow'><i class='fa fa-caret-left'></i> 0%</span>
                    <h5 class='description-header'>$".number_format($t["TotalCostoPersonal"])."</h5>
                    <span class='description-text'>Totale Costo Personal</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class='col-sm-3 col-xs-6'>
                  <div class='description-block border-right'>
                    <span class='description-percentage text-green'><i class='fa fa-caret-up'></i></span>
                    <h5 class='description-header'>".$t["ncontratos"]."</h5>
                    <span class='description-text'>N° de Contratos </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class='col-sm-3 col-xs-6'>
                  <div class='description-block'>
                    <span class='description-percentage text-red'><i class='fa fa-caret-down'></i> 18%</span>
                    <h5 class='description-header'>$".number_format($t["TotalCostoFinalCliente"])."</h5>
                    <span class='description-text'>Total Costo Final Cliente</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
            ";}?>

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