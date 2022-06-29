<?php

require_once '../DAO/CategoriaDAO.php';

if (isset($_POST['btnSalvar'])) {
    $nome_categoria = $_POST['nome_categoria'];

    $objDAO = new CategoriaDAO();

    $ret = $objDAO->AlterarCategoria($nome_categoria);
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
                        <h2>Alterar Categoria</h2>
                        <h5>Aqui você altera ou excluir suas categorias</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_categoria.php" method="post">
                    <div class="form-group" id="divCategoria">
                        <label>Nome da Categoria</label>
                        <input class="form-control" name="nome_categoria" id="nome_categoria" placeholder="Digite o nome da categoria.. Ex: conta de luz" />
                    </div>
                    <button type="submit" class="btn btn-success" onclick="return ValidarCategoria()" name="btnSalvar">Salvar</button>
                    <button type="submit" class="btn btn-danger" name="btnExcluir">Excluir</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</body>

</html>