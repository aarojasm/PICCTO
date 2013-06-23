<?php

    function enviarCorreo($destinatario,$asunto,$nombreContacto, $nombreEmpresa, $telefono,$direccion,$ciudad,$correoContacto,$cuerpoCorreo)
    {
        $htmlCorreo = "
        <!DOCTYPE html>
        <html lang=\"es\">
            <head>
                <meta charset=\"utf-8\" />
                <style>
                    .lbl{
                    color: #ff1f79;
                    font-weight: bold;
                    font-family: Calibri;
                    font-size: 30px;
                    text-align: center;
                    }
                    .td1{
                    width: 300px;
                    height: 30px;
                    }
                </style>
            </head>
            <body>
                <table style=\"width: 723px;\">
							    <tr>
								    <td class=\"td1\"><label class=\"lbl\">Nombre</label></td>
								    <td>"."$nombreContacto"."</td>
							    </tr> 
							    <tr>
								    <td class=\"td1\"><label class=\"lbl\">Empresa</label></td>
								    <td>"."$nombreEmpresa"."</td>
							    </tr>
							     <tr>
								    <td class=\"td1\"><label class=\"lbl\">Teléfono</label> </td>
								    <td>"."$telefono"."</td>
							    </tr>
							     <tr>
								    <td class=\"td1\"><label class=\"lbl\">Correo Electronico</label> </td>
								    <td>"."$correoContacto"."</td>
							    </tr>
							     <tr>
								    <td class=\"td1\"><label class=\"lbl\">Dirección</label> </td>
								    <td>"."$direccion"."</td>
							    </tr>
							     <tr>
								    <td class=\"td1\"><label class=\"lbl\">Cuidad</label> </td>
								    <td>"."$ciudad"."</td>
							    </tr>
							     <tr>
								    <td colspan=\"2\">
                                        "."$cuerpoCorreo"."
                                    </td>
							    </tr>
					    </table>
            </body>
        </html>";

        // Cabecera que especifica que es un HMTL
        $cabeceras  = 'MIME-Version: 1.0'."\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8'."\r\n";
        mail($destinatario,'Contacto página',$htmlCorreo,$cabeceras);
    }
?>