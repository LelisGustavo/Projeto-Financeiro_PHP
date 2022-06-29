<?php

require_once '../DAO/ContaDAO.php';

if (isset($_POST['btnCadastrar'])) {
    $nome_banco = $_POST['nome_banco'];
    $agencia = $_POST['agencia'];
    $numero_conta = $_POST['numero_conta'];
    $saldo = $_POST['saldo'];

    $objDAO = new ContaDAO();

    $ret = $objDAO->CadastrarConta($nome_banco, $agencia, $numero_conta, $saldo);
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php';
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php'; ?>
                        <h2>Nova Conta</h2>
                        <h5>Aqui você poderá cadastrar todas as suas contas </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_conta.php" method="post">
                    <div id="divConta_1" class="form-group">
                        <label>Nome do banco*</label>
                        <input class="form-control" placeholder="Digite o nome do banco.. " id="nome_banco" name="nome_banco" />
                    </div>
                    <div id="divConta_2" class="form-group">
                        <label>Agência*</label>
                        <input class="form-control" placeholder="Digite a agência" id="agencia" name="agencia" />
                    </div>
                    <div id="divConta_3" class="form-group">
                        <label>Número da conta*</label>
                        <input class="form-control" placeholder="Digite o número da conta" id="numero_conta" name="numero_conta" />
                    </div>
                    <div id="divConta_4" class="form-group">
                        <label>Saldo*</label>
                        <input class="form-control" placeholder="Digite o saldo da conta" id="saldo" name="saldo" />
                    </div>
                    <button type="submit" onclick="return ValidarConta()" class="btn btn-success" name="btnCadastrar">Cadastrar</button>
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>