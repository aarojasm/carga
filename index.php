<?php

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Carga de Archivos</title>
        <link rel="stylesheet" href="./css/StyleSheet.css" type="text/css"/>
    </head>
    <body>
        <?php include './include/encabezado.html';?>
        <div class="page">
            <div class="page-wrap">
                <form action="./carga.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td><label>Nombre Archivo</label></td>
                            <td><input type="text" name="nombre" required placeholder="ingresar nombre" maxlength="255"/></td>
                        </tr>
                        <tr>
                            <td><label style="top: 0;">Descripción</label></td>
                            <td><textarea id="txtDescripcion" name="descripcion" style="width: 400px; height: 70px;" ></textarea></td>
                        </tr>
                        <tr>
                            <td>Archivo</td>
                            <td><input type="file" name="file" id="file"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="enviar" title="Enviar!"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <!--<?php include './include/footer.html';?>-->
    </body>
</html>