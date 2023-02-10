<?php 
$page_name = 'Login';
include_once 'header.php';
?>

<body>
    
    <div class="container splash-page-container">
        <div class="row splash-page">
            <div class="col-sm ps-0">
                <img src="assets/img/entregas.jpg" alt="">
            </div>
            <div class="col-sm d-grid login-form" style="background-color:white; border-radius:10px">
                <form action="login" method="post">
                    <div class="mb-1">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                    </div>
                    <div class="mb-4">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                    </div>
                    <div class="d-grid mb-1">
                        <button class="btn btn-primary" type="submit">Entrar</button>
                    </div>
                    <div><a href="esqueceu_senha">Esqueci minha senha</a></div>
                </form>
            </div>
        </div>
    </div>

</body>