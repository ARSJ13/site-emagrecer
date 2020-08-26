<?php

if(isset($_POST['email'] && !empty($_POST['email']))){

  $nome = addslashes($_POST['nome'])
  $telefone = addslashes($_POST['telefone'])
  $email = addslashes($_POST['email'])
  $mensagem = addslashes($_POST['mensagem'])

  $to = "avivaldo.ribeiro@gmail.com";
  $subject = "contato - site";
  $body = "Nome: ".$nome. "\n".
          "Telefone: ".$telefone. "\n".
          "Email: ".$email. "\n".
          "Mensagem: ".$mensagem;
  $header = "From:arsj.dev@gmail.com"."\r\n"."Reply-To:".$email."\e\n"."X=Mailer:PHP/".phpversion();

  if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
  
  }else{
    echo("Email não enviado!");
  }
}



?>