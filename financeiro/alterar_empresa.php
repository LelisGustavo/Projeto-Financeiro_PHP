<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/EmpresaDAO.php';

$objDAO = new EmpresaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $id_empresa = $_GET['cod'];

    $dados = $objDAO->DetalharEmpresa($id_empresa);

    if (count($dados) == 0) {
        header('location: consultar_empresa.php');
        exit;
    }
} elseif (isset($_POST['btnSalvar'])) {

    $id_empresa = $_POST['cod'];
    $nome_empresa = $_POST['nome_empresa'];
    $telefone_empresa = $_POST['telefone_empresa'];
    $endereco_empresa = $_POST['endereco_empresa'];

    $ret = $objDAO->AlterarEmpresa($id_empresa, $nome_empresa, $telefone_empresa, $endereco_empresa);

    header('location: consultar_empresa.php?ret=' . $ret);
    exit;
} elseif (isset($_POST['btnExcluir'])) {

    $id_empresa = $_POST['cod'];

    $ret = $objDAO->ExcluirEmpresa($id_empresa);

    header('location: consultar_empresa.php?ret=' . $ret);
    exit;
} else {
    header('location: consultar_empresa.php');
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
                        <h2>Alterar Empresa</h2>
                        <h5>Aqui você poderá alterar todas as suas empresas </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_empresa.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_empresa'] ?>">
                    <div class="form-group" id="divEmpresa">
                        <label>Nome da Empresa*</label>
                        <input class="form-control" placeholder="Digite o nome da empresa.. " id="nome_empresa" name="nome_empresa" maxlength="50" value="<?= $dados[0]['nome_empresa'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" placeholder="Digite o telefone da empresa (opcional) " id="telefone_empresa" name="telefone_empresa" maxlength="11" value="<?= $dados[0]['telefone_empresa'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" placeholder="Digite o endereço da empresa (opcional)" id="endereco_empresa" name="endereco_empresa" maxlength="100" value="<?= $dados[0]['endereco_empresa'] ?>" />
                    </div>
                    <button type="submit" onclick="return ValidarEmpresa()" name="btnSalvar" class="btn btn-success">Salvar</button>
                    <button type="button" data-toggle="modal" data-target="#modal_excluir" class="btn btn-danger">Excluir</button>

                    <div class="modal fade" id="modal_excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confiirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir a empresa: <b><?= $dados[0]['nome_empresa'] ?> ?</b>
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