
<?php
$para="contacto@traasa.com";
$nombre=$_POST["name"];
$telefono=$_POST["phone"];
$asunto="Mensaje de traasa.com enviado por $nombre: ";
$msg=$_POST["message"];
$mensaje='<html>
         <head></head>
		 <body>
		 <h2><b><i>'.$nombre.'</i></b></h2><br>
		<br><b><i>Tel&eacute;fono: </b></i>
		'.$telefono.' <br>'.$msg.'
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
                                               alert ( 'mensaje enviado corectamente' ) ;
                                    </script>
                             </head>
                       </html> " ;
else
                echo " 

                        <html>
                            <head>
                                 <meta http-equiv = 'REFRESH' content = ' 0 ; url=contacto.html ' > 
                                     <script>
                                               alert ( 'Mensaje no enviado, favor de llenar todos los campos de texto' ) ;
                                    </script>
                             </head>
                       </html> " ;


?>
