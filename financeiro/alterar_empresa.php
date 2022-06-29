<?php

require_once '../DAO/EmpresaDAO.php';

if (isset($_POST['btnSalvar'])) {
    $empresa = $_POST['empresa'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $objDAO = new EmpresaDAO();

    $ret = $objDAO->AlterarEmpresa($empresa, $telefone, $endereco);
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
                    <div class="form-group" id="divEmpresa">
                        <label>Nome da Empresa*</label>
                        <input class="form-control" placeholder="Digite o nome da empresa.. " id="nome" name="empresa" />
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" placeholder="Digite o telefone da empresa (opcional) " name="telefone" />
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" placeholder="Digite o endereço da empresa (opcional)" name="endereco" />
                    </div>
                    <button type="submit" onclick="return ValidarEmpresa()" name="btnSalvar" class="btn btn-success">Salvar</button>
                    <button type="submit" name="btnExcluir" class="btn btn-danger">Excluir</button>
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>