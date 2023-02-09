<?php 
$page_name = 'Login';
include_once 'header.php';
?>

<body>

    <div class="container" style="width:70%; background-color:#f2f2f2; padding: 30px 30px; margin: 15vh auto">
        <div class="row splash-page">
            <div class="col-sm ps-0">
                <img src="assets/img/entregas.jpg" style="width:100%; object-fit:cover; height:50vh; border-radius:10px" alt="">
            </div>
            <div class="col-sm d-grid login-form" style="background-color:white; border-radius:10px">
                <form action="login" method="post">
                    <div class="mb-1">
                        <label for="usuario" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de usuário" required>
                    </div>
                    <div class="mb-4">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                    </div>
                    <div class="d-grid mb-3">
                        <button class="btn btn-primary" type="submit">Entrar</button>
                    </div>
                    <div><a href="#">Esqueci minha senha de novo again</a></div>
                </form>
            </div>
        </div>
    </div>

</body>