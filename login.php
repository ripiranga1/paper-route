<?php
$page_name = 'Login';
include_once 'header.php';

$usuario = $senha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $usuario = test_input($_POST["usuario"]);
    $senha = test_input($_POST["senha"]);
    
    if( $usuario == 'admin' && $senha == '123' ) {
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