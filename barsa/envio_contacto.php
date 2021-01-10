
<?php
$para="barsa_proyectos@yahoo.com.mx";
$nombre=$_POST["name"];
$ap_pat=$_POST["pat"];
$ap_mat=$_POST["mat"];
$telefono=$_POST["phone"];
$email=$_POST["email"];
$msg=$_POST["message"];
$asunto="Mensaje de BARSA PROYECTOS enviado por ".$nombre." ".$ap_pat." ".$ap_mat;

$mensaje='<html>
         <head></head>
		 <body>
		 <h2><b><i>'.'Mensaje desde BARSA PROYECTOS, enviado por: '.$nombre." ".$ap_pat." ".$ap_mat.'</i></b></h2>
		<br><b><i>Tel&eacute;fono: </b></i>
		'.$telefono.' <br>'.'<b><i>Correo: </b></i>'.$email.'<br><b><i> Mensaje</i></b>:<br> '.$msg.'
		</body>
		</html>
		';
$de=$_POST["email"];



$headers ='MIME-Version: 1.0' . "\r\n";
$headers .='Content-type: text/html; charset=utf-8' . "\r\n";
$headers .="From: $de  \r\n ";
$headers .="To: $para; \r\n  Subject:$asunto \r\n";


if(mail($para,$asunto,$mensaje,$headers))
                echo " 

                        <html>
                            <head>
                                 <meta http-equiv = 'REFRESH' content = ' 0 ; url=contacto.html ' > 
                                     <script>
                                               alert ( 'El mensaje se ha enviado correctamente, gracias por tu interes' ) ;
                                    </script>
                             </head>
                       </html> " ;
else
                echo " 

                        <html>
                            <head>
                                 <meta http-equiv = 'REFRESH' content = ' 0 ; url=contacto.html ' > 
                                     <script>
                                               alert ( 'El mensaje no fue enviado, favor de llenar todos los campos de texto' ) ;
                                    </script>
                             </head>
                       </html> " ;


?>
