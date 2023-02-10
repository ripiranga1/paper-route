<?php
session_start();
$page_name = 'Login';
include_once 'header.php';

$login = $senha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once './pdo/ConsultaPDO.php';
    $qryObj = new ConsultaPDO();
    
    $login = test_input( $_POST["login"] );
    $senha = test_input( $_POST["senha"] );
    $senha = md5( md5($senha) );

    $qry_login = $qryObj->general_query("select * from `usuario` where `usuario_login` = '$login' and `usuario_senha` = '$senha'; ");
    
    if( $qry_login ) {
        $_SESSION['usuario_id'] = $qry_login[0]['id_usuario'];
        $_SESSION['usuario_nome'] = $qry_login[0]['usuario_nome'];
        $_SESSION['usuario_perfil'] = $qry_login[0]['usuario_perfil'];

        header('Location:painel');
        exit();
    } else {
        echo "<script>
            alert('Usuário ou senha incorreto');
            location.replace('./')
        </script>";            
    } 
} else {
    header('Location:./');
    exit();
}

include_once 'footer.php';
?>