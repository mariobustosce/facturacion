<body class="hold-transition skin-red sidebar-mini" >
<div class="content-wrapper"> 
  <section class="content-header">
      <br>
      <h1 align="center">
        Facturacion - <?php echo $cuenta['cliente']; ?>
      </h1>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <table>
             <div class="box-body"> 
                <td width="3%">
                </td> 
                <td width="30%"><h2 class="tituloclientes" align="left"><font color="black">Seleccionar Clientes</font></h2>
                <form id="form1" name="form1" method="post" action="<?php echo  site_url();?>funciones/buscarClientes">
                  <h2>
                  <select id="cliente" name="cliente" style="width:200px" class="form-control" onchange="document.getElementById('form1').submit();">
                    <option value="">Seleccione</option>
                    <?php
                      foreach ($cliente as $c) {
                        echo "<option value='".$c['id_cliente']."'>".$c['cliente']."</option>";
                      }                                        
                    ?>
                  </select> 
                  </h2>
                </form>
                </td>
              </div>
            </table> 
          </div>
        </div>
      </div>
    </section>
  </section>
</div>
</body>
