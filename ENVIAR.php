<?php

//Llamando a los campos

$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$tatto=$_POST["tatto"];
$mensaje=$_POST["mensaje"];

//Datos para el correo

$destinatario="cobainceci@gmail.com";
$asunto="Contacto desde nuestra web";

//Crear variable de todo lo que se envia en el correo
$carta= "De: $nombre \n";
$carta.="WhatsApp: $telefono \n";
$carta.="Email: $correo \n";
$carta.="Link Tatto: $tatto \n";
$carta.="De que trata mi tatuaje: $mensaje";

//Enviando mensaje 

mail($destinatario,$asunto,$carta);
header("Location:MENSAJE.html");
?>
