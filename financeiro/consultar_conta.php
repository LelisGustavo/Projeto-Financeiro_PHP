<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/ContaDAO.php';

$opcao = '';

$objDAO = new ContaDAO();

if (isset($_POST['btnPesquisar'])) {

    $opcao = $_POST['filtro'];
    $contas = $objDAO->FiltrarConta($opcao);
    switch ($opcao) {
        case 'banco_conta':
            $filtrar = $_POST['filtrar'];
            $contas = $objDAO->FiltrarConta($filtrar);
            break;
        case 'agencia_conta':
            $filtrar = $_POST['filtrar'];
            $contas = $objDAO->FiltrarAgencia($filtrar);
            break;
        case 'numero_conta':
            $filtrar = $_POST['filtrar'];
            $contas = $objDAO->FiltrarNumero($filtrar);
            break;
        case 'saldo_conta':
            $filtrar = $_POST['filtrar'];
            $contas = $objDAO->FiltrarSaldo($filtrar);
            break;
    }
} else {
    $contas = $objDAO->ConsultarConta();
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php' ?>
                        <h2>Consultar Contas</h2>
                        <h5>Consulte todas suas contas aqui</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="consultar_conta.php" method="post">
                    <div class="form-group" id="divConta">
                        <center>
                        <label>Procurar por:</label>
                        <select class="btn btn-default dropdown-toggle" name="filtro">
                        <option value="">Selecione a opção</option>
                        <option value="banco_conta" <?= $opcao == 'banco_conta' ? 'selected' : '' ?>>Banco</option>
                        <option value="agencia_conta" <?= $opcao == 'agencia_conta' ? 'selected' : '' ?>>Agência</option>
                        <option value="numero_conta" <?= $opcao == 'numero_conta' ? 'selected' : '' ?>>Número da conta</option>
                        <option value="saldo_conta" <?= $opcao == 'saldo_conta' ? 'selected' : '' ?>>Saldo</option>
                    </select>
                        </center>
                        <br>
                        <input class="form-control" name="filtrar" id="filtrar" placeholder="Digite aqui..." value="<?= isset($filtrar) ? $filtrar : '' ?>" />
                    </div>
                    <center>
                        <button type="submit" onclick="return ValidarConta()" name="btnPesquisar" class="btn btn-info">Pesquisar</button>
                    </center>
                </form>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Contas cadastradas. Caso deseje alterar, clique no botão
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Banco</th>
                                                <th>Agência</th>
                                                <th>Número da conta</th>
                                                <th>Saldo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($contas as $item) { ?>
                                            <tr class="odd gradeX">
                                                <td><?= $item['banco_conta'] ?></td>
                                                <td><?= $item['agencia_conta'] ?></td>
                                                <td><?= $item['numero_conta'] ?></td>
                                                <td>R$ <?= $item['saldo_conta'] ?></td>
                                                <td>
                                                    <a href="alterar_conta.php?cod=<?= $item['id_conta'] ?>" class="btn btn-warning btn-sm">Alterar</a>
                                                </td>

                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>