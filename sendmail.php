<?php
    //Email: metonimiacontato@gmail.com
    
    if(isset($_POST'[email']) && !empty($_POST['email'])){

        $nome    =   addlashers($_POST['name'])
        $email    =   addlashers($_POST['email'])
        $assunto  =   addlashers($_POST['subject'])
        $mensagem  =   addlashers($_POST['message'])
    

        $to = "metonimiacontato@gmail.com"
        $subject = "* Suporte Metonímia *"
        $body = "Nome: ".$nome. "\r\n".
                "Email: ".$email. "\r\n".
                "Mensagem: ".$mensagem;
        $header = "From:luizlimacontato1171@gmail.com"."\r\n".
                    "Reply-To:".$email."\r\n".
                    "X=Mailer:PHP/".phpversion();


       if(mail($to, $subject, $message, $body, $header)){

            echo("Seu E-mail foi enviado :D !")

       }else{
            echo("Ocorreu um erro, verifique se preencheu tudo corretamente... :(")
       }
    }
