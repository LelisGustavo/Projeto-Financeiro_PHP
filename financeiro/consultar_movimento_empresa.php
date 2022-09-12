<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/MovimentoDAO.php';
require_once '../DAO/EmpresaDAO.php';

$empresa = '';

if (isset($_POST['btnPesquisar'])) {
    $empresa = $_POST['empresa'];
    $data_inicial = $_POST['data_inicial'];
    $data_final = $_POST['data_final'];

    $objDAO = new MovimentoDAO();
    $movimentos = $objDAO->ConsultarMovimentoEmpresa($empresa, $data_inicial, $data_final);

    if(!is_array($movimentos)) {
        $ret = $movimentos;
    } elseif (count($movimentos) == 0) {
        $ret = -5;
    }
}

$objEmpDAO = new EmpresaDAO();
$empresas = $objEmpDAO->ConsultarEmpresa();
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
                        <?php include_once '_msg.php'; ?>
                        <h2>Consultar Movimento por Empresas</h2>
                        <h5>Consulte todos os movimentos por empresas em um determidado período</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="consultar_movimento_empresa.php" method="POST">
                    <div class="col-md-12">
                        <div class="form-group" id="divEmpresa">
                            <label>Empresa*</label>
                            <select class="form-control" id="empresa" name="empresa">
                                <option value="">Selecione</option>
                                <?php foreach ($empresas as $item) { ?>
                                    <option value="<?= $item['id_empresa'] ?>">
                                        <?= $item['nome_empresa'] ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" id="divMovimento_2">
                            <label>Data inicial*</label>
                            <input type="date" class="form-control" placeholder="Coloque a data do movimento" id="data_inicial" name="data_inicial" value="<?= isset($data_inicial) ? $data_inicial : '' ?>" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" id="divMovimento_3">
                            <label>Data final*</label>
                            <input type="date" class="form-control" placeholder="Coloque a data do movimento" id="data_final" name="data_final" value="<?= isset($data_final) ? $data_final : '' ?>" />
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-info" onclick="return ValidarConsultaPeriodoEmpresa()" name="btnPesquisar">Pesquisar</button>
                    </center>
                </form>
                <hr>
                <?php if (isset($movimentos) && is_array($movimentos) && count($movimentos) > 0) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Resultado encontrado
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Data</th>
                                                    <th>Valor</th>
                                                    <th>Tipo</th>
                                                    <th>Observação</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $total = 0;
                                                for ($i = 0; $i < count($movimentos); $i++) {
                                                    if ($movimentos[$i]['tipo_movimento'] == 1) {
                                                        $total = $total + $movimentos[$i]['valor_movimento'];
                                                    } else {
                                                        $total = $total - $movimentos[$i]['valor_movimento'];
                                                    }
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $movimentos[$i]['data_movimento'] ?></td>
                                                        <td>R$ <?= number_format($movimentos[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                        <td><?= $movimentos[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?></td>
                                                        <td><?= $movimentos[$i]['obs_movimento'] ?></td>
                                                        <td>
                                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_excluir<?= $i ?>">Excluir</a>

                                                            <form action="consultar_movimento.php" method="POST">
                                                                <input type="hidden" name="id_movimento" value="<?= $movimentos[$i]['id_movimento'] ?>">

                                                                <input type="hidden" name="id_conta" value="<?= $movimentos[$i]['id_conta'] ?>">

                                                                <input type="hidden" name="tipo_movimento" value="<?= $movimentos[$i]['tipo_movimento'] ?>">

                                                                <input type="hidden" name="valor_movimento" value="<?= $movimentos[$i]['valor_movimento'] ?>">

                                                                <div class="modal fade" id="modal_excluir<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                <h4 class="modal-title" id="myModalLabel">Confiirmação de exclusão</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <center><b>Deseja excluir o movimento:</b></center> <br><br>

                                                                                <b>Data do movimento: </b><?= $movimentos[$i]['data_movimento'] ?> <br>

                                                                                <b>Tipo do movimento: </b><?= $movimentos[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?> <br>

                                                                                <b>Categoria: </b><?= $movimentos[$i]['nome_categoria'] ?> <br>

                                                                                <b>Empresa: </b><?= $movimentos[$i]['nome_empresa'] ?> <br>

                                                                                <b>Conta: </b><?= $movimentos[$i]['banco_conta'] ?> / Agência <?= $movimentos[$i]['agencia_conta'] ?> - Número <?= $movimentos[$i]['numero_conta'] ?> <br>

                                                                                <b>Valor: </b> R$ <?= number_format($movimentos[$i]['valor_movimento'], 2, ',', '.') ?> <br>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" name="btnExcluir" class="btn btn-primary">Confirmar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    <?php } ?>
                                                    </tr>

                                            </tbody>
                                        </table>
                                        <center>
                                            <label style="color: <?= $total < 0  ? 'red' : 'green' ?> ;">TOTAL: R$ <?= number_format($total, 2, ',', '.'); ?></label>
                                        </center>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>