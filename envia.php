<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['msg']);

    $destino = "samukaapereira@gmail.com";
    $assunto = "Contato - Portfolio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: samukaapereira@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail($destino,$assunto,$corpo,$cabeca,$mensagem)) {
        echo("E-mail eviado com sucesso!");
    } else {
        echo("Houve um erro ao enviar o e-mail!");
    }

?>