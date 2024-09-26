<?php
    session_start();

    if((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true) && (!isset($_SESSION['email'])) == true){
        
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        
        header('Location: ../index.html');
    }
    
    include 'menu.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">INSERIR UM CLIENTE</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Painel de clientes</a></li>
                <li class="breadcrumb-item active">INSERIR UM CLIENTE</li>
            </ol>
            <form action="insere_clientes.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone"  required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
                <button type="reset" class="btn btn-danger btn-sm">Limpar</button>
            </form>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Cadastro De Clientes 2024</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="assets/demo/chart-pie-demo.js"></script>
</body>

</html>