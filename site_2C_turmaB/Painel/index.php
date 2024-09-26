<?php
    session_start();

    if((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true) && (!isset($_SESSION['email'])) == true){
        
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        
        header('Location: ../index.html');
    }

    include 'conecta.php';
    include 'menu.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Painel de controle</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Site 2C - Turma B</li>
            </ol>
            <a href='form_insere_clientes.php'><button class='btn btn-outline-secondary'
                    style="margin-bottom: 1rem;">INSERIR UM CLIENTE</button></a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabela de clientes
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM clientes";
                            $consulta = $conexao->query($sql);
                            while ($dados = $consulta->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $dados['id_cliente'] . "</td>";
                                echo "<td>" . $dados['nome_cliente'] . "</td>";
                                echo "<td>" . $dados['email_cliente'] . "</td>";
                                echo "<td>" . $dados['telefone'] . "</td>";
                                echo "<td>
                                            <a href='form_atualiza_cliente.php?id_cliente=" . $dados["id_cliente"] . "'><button class='btn btn-primary'>Atualizar</button></a>
                                            <a href='apaga_cliente.php?id_cliente=" . $dados["id_cliente"] . "'><button class='btn btn-danger' onclick='return confirmDelete()'>Deletar</button></a>
                                    </td>";
                                echo "</tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
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
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

<script>
function confirmDelete() {
    return confirm("Você tem certeza de que deseja deletar os dados?");
}
</script>
</body>



</html>
