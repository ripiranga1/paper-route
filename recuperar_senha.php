<?php
include_once 'define.php';
include_once 'functions.php';

$email_recuperacao = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'pdo/ConsultaPDO.php';
    $qryObj = new ConsultaPDO();
    
    $email_recuperacao = test_input($_POST["email_recuperacao"]);
    $qry_email_recuperacao = $qryObj->general_query("select id_usuario from `usuario` where `usuario_email` = '$email_recuperacao'");

    if ( $qry_email_recuperacao ) {
        $nova_senha = substr(md5(time()), 0, 8);
        $ns_cripto = md5( md5($nova_senha) );
        if ( mail($email_recuperacao, 'Nova Senha', 'Sua nova senha: ' . $nova_senha) ) {
            $qryObj->general_update("update usuario set senha = '$ns_cripto' where usuario_email = '$email_recuperacao' ");
            echo "<script>
                alert('Uma nova senha foi enviada ao seu Email!');
                location.replace('./')
            </script>";            
            exit();
        } else {
            echo "<script>
                alert('Algo não correu bem! Por favor tente novamente');
                location.replace('./esqueceu_senha')
            </script>";
            exit();
        }
    } else {
        echo "<script>
            alert('Email não encontrado! Por favor tente novamente');
            location.replace('./esqueceu_senha')
        </script>";
        exit();
    } 
} else {
    header('Location:./');
    exit();
}