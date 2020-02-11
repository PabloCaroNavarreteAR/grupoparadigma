<?php

if(isset($_POST['g-recaptcha-response'])){
    $secret="6Ldr4NcUAAAAAC6cR5kpobgsRiAMr38PnJe4pSKH";
    $ip=$_SERVER['REMOTE_ADDR'];
    $capcha=$_POST['g-recaptcha-response'];
    $result=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$capcha."&remoteip=".$ip."");
    var_dump($result);
    $array=json_decode($result, TRUE);
        if($array['success']){
            //variables recibidas
            $nombre=$_REQUEST['nombre'];
            $apellido=$_REQUEST['apellido'];
            $email=$_REQUEST['email'];
            $telefono=$_REQUEST['telefono'];
            $mensaje=$_REQUEST['mensaje'];


            $contenido='<table width="600" align="center" style="border-radius:10px;border:1px solid #999999;">
            <tr>
                <td style="text-align:center;" height="50"><img src="https://grupo-paradigma.firebaseapp.com/img/footer/brand-mail.png" width="120" height="auto" alt="Grupo Paradigma" /></td>
            </tr>
            <tr>
                <td height="30" style="text-align:center;"><h2 style="font-family:Montserrat, sans-serif;font-size:20px;font-weight:normal;">Contacto</h2></td>
            </tr>
            <tr>
                <td style="text-align:center;"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">'.$email.'</span></td>
            </tr>
            <tr>
                <td height="20">&nbsp;</td>
            </tr>
            <tr>
                <td style="border-top:1px solid #999999">
                    <table width="500" align="center">
                        <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">Nombre</span></td>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">Apellido</span></td>
                        </tr>
                        <tr>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">'.$nombre.'</span></td>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">'.$apellido.'</span></td>
                        </tr>
                        <tr>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">Email</span></td>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">Teléfono</span></td>
                        </tr>
                        <tr>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">'.$email.'</span></td>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">'.$telefono.'</span></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="500" align="center">
                        <tr>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">Mensaje</span></td>
                        </tr>
                        <tr>
                            <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">'.$mensaje.'</span></td style="text-align:center">
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="20">&nbsp;</td>
                <td height="20">&nbsp;</td>
            </tr>
            <tr>
                <td style="text-align:center" height="30"><span style="font-family:Montserrat, sans-serif;font-size:13px;font-weight:normal;">Grupo Paradigma</span></td>
            </tr>
            </table>';
                //configurando el envio
                require("includes/class.phpmailer.php");
                require("includes/class.smtp.php");

                // Datos de la cuenta de correo utilizada para enviar vía SMTP
                $smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
                $smtpUsuario = "grupo.paradigma.empresa@gmail.com";  // Mi cuenta de correo
                $smtpClave = "Jura1475";  // Mi contraseña

                // Email donde se enviaran los datos cargados en el formulario de contacto
                $emailDestino = "p.caronavarrete@gmail.com";

                $mail = new PHPMailer();
                //$mail->SMTPDebug = 2;  
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->Port = 465; 
                $mail->SMTPSecure = 'ssl';
                $mail->IsHTML(true); 
                $mail->CharSet = "utf-8";


                // VALORES A MODIFICAR //
                $mail->Host = $smtpHost; 
                $mail->Username = $smtpUsuario; 
                $mail->Password = $smtpClave;

                $mail->From = $smtpUsuario; // Email desde donde envío el correo.
                $mail->FromName = "Grupo Paradigma";
                $mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

                $mail->Subject = "Contacto - Grupo Paradigma"; // Este es el titulo del email.
                $mensajeHtml = nl2br($contenido);
                $mail->Body = "{$mensajeHtml}"; // Texto del email en formato HTML
                $mail->AltBody = "{$contenido}"; // Texto sin formato HTML
                // FIN - VALORES A MODIFICAR //

                $estadoEnvio = $mail->Send(); 
                if($estadoEnvio):
                    echo '<script>window.location.href = "index.php?status=ok";</script>';
                else:
                    echo '<script>window.location.href = "index.php?status=false";</script>';
                endif;
        }
        else{
            echo "Complete el recaptcha";
        }
}
else{
    echo "Complete el recaptcha";
}

?>