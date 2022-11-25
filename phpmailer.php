<?php 

    
        if(isset($_POST['wyslij'])){
                $mail_c = $_POST['mail_c'];
            $imie_c = $_POST['imie_c'];
            $msg_c = $_POST['msg_c'];
            require 'phpmailer/PHPMailerAutoload.php';
            try{
            $mail = new PHPMailer;
            
            $mail->CharSet = 'UTF-8';
            
            $mail->Username='admin@jakubtarkowski.com';

            $mail->setFrom('admin@jakubtarkowski.com');
            $mail->addAddress('admin@jakubtarkowski.com','Admin');
            $mail->addReplyTo($mail_c,$mail_c);
            
            $mail->isHTML(true);
            $mail->Subject='Wiadmość ze strony jakubtarkowski.com';
            $mail->Body='<h1>Wiadomośc ze strony jakubtarkowski.com</h1><p>'.$msg_c.'</p><br><br><p>Imię i nazwisko: '.$imie_c.'</p><p>Adres e-mail: '.$mail_c.'</p>';
            
            $mail->send();
             echo "<script type='text/javascript'>alert(\"Wiadomość wysłana. Odezwiemy się w ciągu 24h.\");</script>";
            echo("<script>location.href = 'account_main.php';</script>");
        }catch (Exception $e){
                echo "<script type='text/javascript'>alert(\"Niestety nie udało się wysłać wiadomości.\");</script>";
            }
        }

?>