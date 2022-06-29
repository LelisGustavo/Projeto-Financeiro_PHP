<?php

require_once '../DAO/MovimentoDAO.php';

if (isset($_POST['btnGravar'])) {
    $tipo_movimento = $_POST['tipo_movimento'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $categoria = $_POST['categoria'];
    $empresa = $_POST['empresa'];
    $conta = $_POST['conta'];
    $obs = $_POST['obs'];

    $objDAO = new MovimentoDAO();

    $ret = $objDAO->RealizarMovimento($tipo_movimento, $data, $valor, $categoria, $empresa, $conta, $obs);
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
                    <?php include_once '_msg.php'; ?>
                    <div class="col-md-12">
                        <h2>Realizar Movimento</h2>
                        <h5>Aqui você poderá realizar seus movimentos de entrada ou saída</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="realizar_movimento.php" method="post">
                    <div class="col-md-6">
                        <div class="form-group" id="divMovimento_1">
                            <label>Tipo do movimento*</label>
                            <select class="form-control" id="tipo_movimento" name="tipo_movimento">
                                <option value="">Selecione</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saída</option>
                            </select>
                        </div>
                        <div class="form-group" id="divMovimento_2">
                            <label>Data*</label>
                            <input type="date" id="data" name="data" class="form-control" placeholder="Coloque a data do movimento" />
                        </div>
                        <div class="form-group" id="divMovimento_3">
                            <label>Valor*</label>
                            <input class="form-control" id="valor" name="valor" placeholder="Digite o valor do movimento" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" id="divMovimento_4">
                            <label>Categoria*</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                        <div class="form-group" id="divMovimento_5">
                            <label>Empresa*</label>
                            <select class="form-control" id="empresa" name="empresa">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                        <div class="form-group" id="divMovimento_6">
                            <label>Conta*</label>
                            <select class="form-control" id="conta" name="conta">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Observação (opcional)</label>
                            <textarea class="form-control" name="obs" rows="3"></textarea>
                        </div>
                        <button type="submit" onclick="return ValidarMovimento()" class="btn btn-success" name="btnGravar">Finalizar lançamento</button>
                    </div>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>