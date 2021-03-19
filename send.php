<?php

         $destinatario = 'jstewartmr@hotmail.com';

         $nombre= $_POST['nombre'];
          $asunto= $_POST['subject'];
           $email= $_POST['email'];
            $mensaje= $_POST['message'];


            $header ="Enviado desde la pagina de correos del prettyboy" ;
            $mensajeCompleto= $mensaje . "\n Atentamente:" . $nombre ;


            @mail($nombre,  $asunto, $mensajeCompleto , $header );

            echo "<script>alert('correo enviado exitosamente')</script>";
            echo "<script>setTimeout(\"location.href='index.html'\" , 1000) </script>";


?>