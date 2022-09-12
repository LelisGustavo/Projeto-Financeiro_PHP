<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/ContaDAO.php';

$objDAO = new ContaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $id_conta = $_GET['cod'];

    $dados = $objDAO->DetalharConta($id_conta);

    if (count($dados) == 0) {
        header('location: consultar_conta.php');
        exit;
    }

} elseif (isset($_POST['btnSalvar'])) {

    $id_conta = $_POST['cod'];
    $nome_banco = $_POST['banco_conta'];
    $agencia = $_POST['agencia_conta'];
    $numero_conta = $_POST['numero_conta'];
    $saldo = $_POST['saldo_conta'];

    $ret = $objDAO->AlterarConta($id_conta, $nome_banco, $agencia, $numero_conta, $saldo);

    header('location: consultar_conta.php?ret=' . $ret);
    exit;
} elseif (isset($_POST['btnExcluir'])) {

    $id_conta = $_POST['cod'];

    $ret = $objDAO->ExcluirConta($id_conta);

    header('location: consultar_conta.php?ret=' . $ret);
    exit;
} else {
    header('location: consultar_conta.php');
    exit;
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
                        <?php include_once '_msg.php' ?>
                        <h2>Alterar Conta</h2>
                        <h5>Aqui você poderá alterar todas as suas contas </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_conta.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_conta'] ?>">
                    <div class="form-group" id="divConta_1">
                        <label>Nome do banco*</label>
                        <input class="form-control" placeholder="Digite o nome do banco.. " id="banco_conta" name="banco_conta" maxlength="20" value="<?= $dados[0]['banco_conta'] ?>"/>
                    </div>
                    <div class="form-group" id="divConta_2">
                        <label>Agência*</label>
                        <input class="form-control" placeholder="Digite a agência" id="agencia_conta" name="agencia_conta" maxlength="8" value="<?= $dados[0]['agencia_conta'] ?>">
                    </div>
                    <div class="form-group" id="divConta_3">
                        <label>Número da conta*</label>
                        <input class="form-control" placeholder="Digite o número da conta" id="numero_conta" name="numero_conta" maxlength="12" value="<?= $dados[0]['numero_conta'] ?>"/>
                    </div>
                    <div class="form-group" id="divConta_4">
                        <label>Saldo*</label>
                        <input class="form-control" placeholder="Digite o saldo da conta" id="saldo_conta" name="saldo_conta" maxlength="10" value="<?= $dados[0]['saldo_conta'] ?>"/>
                    </div>
                    <button type="submit" onclick="return ValidarConta()" name="btnSalvar" class="btn btn-success">Salvar</button>
                    <button type="button" data-toggle="modal" data-target="#modal_excluir" class="btn btn-danger">Excluir</button>

                    <div class="modal fade" id="modal_excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confiirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir a conta: <b><?= $dados[0]['banco_conta'] ?> </b> / Agência: <b> <?= $dados[0]['agencia_conta'] ?> </b> - Número <b> <?= $dados[0]['numero_conta'] ?> ?</b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="btnExcluir" class="btn btn-primary">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>