<!-- set up the modal to start hidden and fade in and out -->
<?php if (isset($tipoerror)){ 
 if ($tipoerror == 1){
   $class = 'alert alert-danger';
   $mensaje = 'Usuario o contraseña incorrectos';
 }
?>
<div id="myModal" class="modal fade">
  <div class="modal-dialog ">
    <div class="<?php echo $class; ?>">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <?php echo $mensaje; ?>
      </div>
      <!-- dialog buttons -->
      <!--<div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>-->
    </div>
  </div>
</div>
<?php } ?>
<!-- sometime later, probably inside your on load event callback -->
<script>
    $("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
        $("#myModal a.btn").on("click", function(e) {
            console.log("button pressed");   // just as an example...
            $("#myModal").modal('hide');     // dismiss the dialog
        });
    });
    $("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
        $("#myModal a.btn").off("click");
    });
    
    $("#myModal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
        $("#myModal").remove();
    });
    
    $("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
      "backdrop"  : "static",
      "keyboard"  : true,
      "show"      : true                     // ensure the modal is shown immediately
    });
</script>