<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["cliente_id"])) {
    $_SESSION["ruta"] = "Recibo Membresias";
?>

<!DOCTYPE html>
<html lang="es">

<head>
<?php require_once('../html/head.php')  ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body class="bg-white">
<?php include_once('../html/header.php')  ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Compra Tu Membresia</h4>
            <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="../Dashboard/home.php">Menu</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">compras</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Contact Start -->
<div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Informacion para deposito</h4>
            <h4 class="display-4 font-weight-bold">Deposito</h4>
        </div>
        <div class="row px-3 pb-2">
            <div class="col-sm-4 text-center mb-3">
                <h4 class="font-weight-bold">Numero de cuenta</h4>
                <p>2256389563</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                
                <h4 class="font-weight-bold">Propietario cuenta</h4>
                <p>EnnerGymm</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
             
                <h4 class="font-weight-bold">Telefono</h4>
                <p>0987654321</p>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative  mt-5" style="margin-bottom: 90px;">
                <div class="card shadow mb-4">

                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Lista de Membresias Expiradas</h6>
                                        <button id="comprarBtn" onclick="cargaselect()" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalfactura">Comprar Membresia</button></div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                            <tr>
                                                    <th>#</th>
                                                    <th>Datos Cliente</th>
                                                    <th>Fecha</th>
                                                    <th>Membresia</th>
                                                    <th>Monto "$"</th>
                                                    <th>voucher de pago</th>
                                                    <th>Estado</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaFactura'></tbody>
                                        </table>
                                    </div>
                    </div>
    </div>
      <!-- Ventanas Modales -->
      <div class="modal fade" id="modalfactura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tituloModalFactura">Nueva <?php echo $_SESSION["ruta"] ?></h5>
                            <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="Recibo_form">
                            <div class="modal-body">
                                <input type="hidden" name="id_recibo" id="id_recibo">
                                    <div class="form-group">
                                        <label for="cli_id" class="control-label">Cedula Cliente</label>
                                        <select name="cli_id" id="cli_id" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="fa_fecha" class="control-label">Fecha</label>
                                        <input type="date" name="fa_fecha" id="fa_fecha" class="form-control" required readonly>
                                    </div>

                                        <div class="form-group">
                                            <label for="men_id" class="control-label">Membresia</label>
                                            <select onchange="calcularvalor(this)" name="men_id" id="men_id" class="form-control">
                                            </select>
                                        </div>
                                            <div class="form-group">
                                                <label for="fa_montol_total" class="control-label">Valor a Pagar "$"</label>
                                                <input type="text" name="fa_montol_total" id="fa_montol_total" class="form-control" readonly />                                      
                                            </div>
                                            <div class="form-group">
                                            <label for="men_estado" class="control-label">Estado</label>
                                            <input type="text" name="estado" id="estado" class="form-control" value="Pendiente" readonly required>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">Imagen de Categoria</label>
                                                <input type="file" name="imagen" id="imagen" class="form-control">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                <button type="button" class="btn btn-secondary" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="imageModal" class="modal">
                                <div class="modal-content" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                    <img id="modalImage" src="" alt="Imagen" style="max-width: 100%; max-height: 80vh;">
                                    <button type="button" class="btn btn-secondary" onclick="cerrarModal()" data-dismiss="modal">Cerrar Imagen</button>
                                </div>
                            </div>

                                 
        </div>

  


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<script src="../../Plog/vendor/jquery/jquery.min.js"></script>
<script src="../../Plog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../Plog/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../../Plog/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="../../public/vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        verificarMembresia(); // Llamada a la función una vez que la página ha cargado
    });
</script>

<script src="./recibom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    // Obtener el elemento del campo de fecha
    var fechaInicioInput = document.getElementById('fa_fecha');    
    // Obtener la fecha actual
    var fechaActual = new Date();
    // Obtener los componentes de fecha de tu computadora local
    var year = fechaActual.getFullYear();
    var month = ('0' + (fechaActual.getMonth() + 1)).slice(-2);
    var day = ('0' + fechaActual.getDate()).slice(-2);
    // Formatear la fecha actual en el formato requerido por el campo de entrada de fecha (AAAA-MM-DD)
    var formattedFechaActual = year + '-' + month + '-' + day;
    // Establecer la fecha actual como el valor del campo de entrada de fecha
    fechaInicioInput.value = formattedFechaActual;
</script>
</body>

</html>
<?php
} else {
    header("Location:../../index.php");
}
?>