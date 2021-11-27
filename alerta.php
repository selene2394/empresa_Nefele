<!– PARA EJEMPLO DASC — >
<?php
$tipo = $_GET['tipo'];
$operacion = $_GET['operacion'];
$destino=$_GET['destino'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Confirmación de registro </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/sweetalert.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="js/sweetalert.min.js"></script>

    </head>
    <body>
        <?php
        if (strnatcasecmp($tipo, "exito") == 0) {
            ?>
            <script>
                $(document).ready(function () {
                    swal({
                        title: "Operación Exitosa",
                        text: "<?php echo$operacion; ?>",
                        type: "success"
                    },
                            function () {
                                window.location.href = '<?php echo $destino?>';
                            });
                });
            </script>
            <?php
        } else {
            ?>
            <script>
                $(document).ready(function () {
                    swal({
                        title: "Operación Erronea",
                        text: "<?php echo$operacion; ?>",
                        type: "error"
                    },
                            function () {
                                window.location.href = '<?php echo $destino?>';
                            });
                });
            </script>
            <?php
        }
        ?>
    </body>
</html>

