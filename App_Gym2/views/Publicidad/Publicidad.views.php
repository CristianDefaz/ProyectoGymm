<?php
include_once('../../config/sesiones.php');

if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Envio de Publicidad";

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once('../html/head.php')  ?>
        <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

    </head>

    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <?php require_once('../html/menu.php') ?>
            <!-- End of Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- Topbar -->
                    <?php include_once('../html/header.php')  ?>
                    <!-- End of Topbar -->

                    <div class="container-fluid">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION["ruta"] ?></h1>
                        </div>
                        <div class="container mt-5">
        
        <form  id="miFormulario" method="post" enctype="multipart/form-data">
        
            <div class="form-group">
                <label for="asunto">Asunto:</label>
                <input type="text" class="form-control" id="asunto" name="asunto" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="adjuntar">Adjuntar Imagen :</label>
                <input type="file" class="form-control-file" id="adjuntar" name="adjuntar">
            </div>
            <button type="button" id="enviarBtn" class="btn btn-primary">Enviar</button>
        </form>
    </div>
                    </div>
                </div>
                <div>

                </div>
                <div class="container mt-5" id="resultadoContainer">
                    <!-- Aquí se mostrará la respuesta -->
                </div>

                <!-- Footer -->
                <?php include_once('../html/footer.php') ?>
                <!-- End of Footer -->
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>

        <script src="./Tablamonto.js"></script>



        <script>
                document.getElementById("enviarBtn").addEventListener("click", function() {
                var asunto = document.getElementById("asunto").value;
                var mensaje = document.getElementById("mensaje").value;
                var adjuntar = document.getElementById("adjuntar").files[0]; // Obtiene el archivo adjunto

                // Crear un objeto FormData para enviar los datos
                var formData = new FormData();
                formData.append("asunto", asunto);
                formData.append("mensaje", mensaje);
                formData.append("adjuntar", adjuntar);

                // Realizar una solicitud AJAX para enviar los datos al servidor
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "./Publicidad.correo.php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Manejar la respuesta del servidor aquí
                        document.getElementById("resultadoContainer").innerHTML = xhr.responseText;
                    }
                };
                xhr.send(formData);
            });

    </script>
        
       

        

    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>