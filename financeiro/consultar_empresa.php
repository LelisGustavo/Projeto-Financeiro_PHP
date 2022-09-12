<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/EmpresaDAO.php';

$opcao = '';

$objDAO = new EmpresaDAO();

if (isset($_POST['btnPesquisar'])) {

    $opcao = $_POST['filtro'];
    $empresas = $objDAO->FiltrarEmpresa($opcao);
    switch ($opcao) {
        case 'nome_empresa':
            $filtrar = $_POST['filtrar'];
            $empresas = $objDAO->FiltrarEmpresa($filtrar);
            break;
        case 'telefone_empresa':
            $filtrar = $_POST['filtrar'];
            $empresas = $objDAO->FiltrarTelefone($filtrar);
            break;
        case 'endereco_empresa':
            $filtrar = $_POST['filtrar'];
            $empresas = $objDAO->FiltrarEndereco($filtrar);
            break;
    }
} else {
    $empresas = $objDAO->ConsultarEmpresa();
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
                        <h2>Consultar Empresa</h2>
                        <h5>Consulte todas suas empresas aqui</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <form action="consultar_empresa.php" method="post">
                    <div class="form-group" id="divEmpresa">
                        <center>
                            <label>Procurar por:</label>
                            <select class="btn btn-default dropdown-toggle" name="filtro">
                                <option value="">Selecione a opção</option>
                                <option value="nome_empresa" <?= $opcao == 'nome_empresa' ? 'selected' : '' ?>>Nome</option>
                                <option value="telefone_empresa" <?= $opcao == 'telefone_empresa' ? 'selected' : '' ?>>Telefone</option>
                                <option value="endereco_empresa" <?= $opcao == 'endereco_empresa' ? 'selected' : '' ?>>Endereço</option>
                            </select>
                        </center>
                        <br>
                        <input class="form-control" name="filtrar" id="filtrar" placeholder="Digite aqui..." value="<?= isset($filtrar) ? $filtrar : '' ?>" />
                    </div>
                    <center>
                        <button type="submit" onclick="return ValidarEmpresa()" name="btnPesquisar" class="btn btn-info">Pesquisar</button>
                    </center>
                </form>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Empresas cadastradas. Caso deseje alterar, clique no botão
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nome da empresa</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($empresas as $item) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $item['nome_empresa'] ?></td>
                                                    <td><?= $item['telefone_empresa'] ?></td>
                                                    <td><?= $item['endereco_empresa'] ?></td>
                                                    <td>
                                                        <a href="alterar_empresa.php?cod=<?= $item['id_empresa'] ?>" class="btn btn-warning btn-sm">Alterar</a>
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