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
                <form action="recuperar_senha" method="post">
                    <div class="mb-3">
                        <label for="email_recuperacao" class="form-label">Email de recuperação</label>
                        <input type="email" class="form-control" id="email_recuperacao" name="email_recuperacao" placeholder="Email" required>
                    </div>
                    <div class="d-grid mb-1">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                    <div><a href="index">Voltar</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

<?php include_once 'header.php'; ?>