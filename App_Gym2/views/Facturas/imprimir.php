<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Factura";

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once('../html/head.php')  ?>
    </head>

    <body id="page-top">
     
        <!-- Imprimir Modal -->
        <div class="row"  id="modalFacturaImprimir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <style>
                        @media print {
                            .no-imprimir {
                                display: none;
                            }
                        }
                    </style>

                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalFactura">Factura</h5>


                    </div>
                    <form id="Facturas_form">
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="cli_id" id="DatosCliente" class="control-label">Datos Cliente</label>
                               
                            </div>

                            <div class="form-group">
                                <label for="fa_fecha" id="Fecha" class="control-label">Fecha</label>
                               
                            </div>
                            <div class="form-group">
                                <label for="men_id" id="Membresia" class="control-label">Membresia</label>
                       

                            </div>
                            <div class="form-group">
                                <label for="fa_montol_total" id="ValoraPagar" class="control-label">Valor a Pagar</label>
                                

                            </div>
                            <div class="modal-footer">
                     
                                <button type="button" class="btn btn-secondary no-imprimir" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>


        <input type="hidden" name="id_empleado" id="id_empleado" value="">


        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>
        <script src="./imprimirF.js"></script>


    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>