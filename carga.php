<?php
    include './conexion/conexion.php';
    if(isset($_POST['enviar'])){
        if($_FILES["file"]["error"] > 0){
            echo "Error: ".$_FILES["file"]["error"]."<br />";
        }
        else{
            if(file_exists("upload/".$_FILES["file"]["name"])) {
                echo "Archivo Existe";
            }
            else{
                if($_POST['nombre'] <> '' and $_POST['descripcion'] <> ''){
                    $tmp = $_FILES["file"]["tmp_name"];
                    $arch = $_FILES["file"]["name"];
                    $idUnico = time();
                    $dir = "upload/".$idUnico."_".$arch;
                    move_uploaded_file($tmp, $dir);
                    $fecha = date('Y-m-d');
                    $sql = "INSERT INTO carga_archivo (nombre_archivo, nombre_archivo_upload, fecha_carga, descripcion) values('".$_POST['nombre']."','".$dir."','".$fecha."','".$_POST['descripcion']."')";
                    mysql_query($sql);
                }
            }
                //echo $idUnico;
                //echo "Nombre Archivo: ".$_FILES["file"]["name"]."<br />";
                //echo "Tipo: ".$_FILES["file"]["type"]."<br />";
                //echo "Tamaño: ".($_FILES["file"]["size"]/1024)."kb <br />";
                //echo "Almacenado en: ".$_FILES["file"]["tmp_name"];
        }
    }
        //<meta http-equiv="Refresh" content="1;url=http://carga.aarojasm.cl"/>
?>
<html>
    <head>
    	<meta http-equiv="Refresh" content="1;url=http://carga.aarojasm.cl"/>
    </head>
<body>
</body>
</html>