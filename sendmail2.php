<?php
	$nombre = $_POST ["nombre"];
	$telefono = $_POST ["telefono"];



$mail = "Hola Adminsitrador, correo nuevo<br> 
Nombre : ".$nombre." <br>
Telefono : ".$telefono." <br>
";
//Titulo
$titulo = "Correo Nuevo de la Pagina Web Top Computing";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Pagina Web Top Computing <info@top-computing.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("ventas@top-computing.com",$titulo,$mail,$headers);//Propulcity.mexico@wri.org
if($bool){
   header('Location: index.php?e=1');
}else{
   header('Location: index.php?e=0');
}
?>