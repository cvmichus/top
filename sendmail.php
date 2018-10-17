<?php
	$nombre = $_POST ["name"];
	$correo = $_POST ["email"];
	$asunto = $_POST ["subject"];
	$comentarios = $_POST ["message"];


$mail = "Hola Adminsitrador, correo nuevo<br> 
Nombre : ".$nombre." <br>
Correo : ".$correo." <br>
Asunto : ".$asunto." <br>
Mensaje : ".$comentarios." <br>
";
//Titulo
$titulo = "Correo Nuevo de la Pagina Web propulcity.mx";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Pagina Web Top Computing < info@top-computing.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("ventas@top-computing.com",$titulo,$mail,$headers);//Propulcity.mexico@wri.org
if($bool){
   header('Location: contacto.php?e=1');
}else{
   header('Location: contacto.php?e=0');
}
?>