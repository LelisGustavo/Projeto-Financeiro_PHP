<?php

require_once '../DAO/UsuarioDAO.php';

if (isset($_POST['btnCadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $repetir_senha = $_POST['repetir_senha'];

    $objDAO = new UsuarioDAO();

    $ret = $objDAO->CriarCadastro($nome,$email,$senha,$repetir_senha);

}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <form action="cadastro.php" method="post">
        <div class="container">
            <div class="row text-center  ">
                <div class="col-md-12">
                    <br /><br />

                    <?php 
                    include_once '_msg.php';
                    ?>

                    <h2> Controle Financeiro : CADASTRO</h2>

                    <h5>( Faça seu cadastro )</h5>
                    <br />
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> Preencher todos os campos </strong>
                        </div>
                        <div class="panel-body">
                            <form action="cadastro.php" method="POST">
                                <br />
                                <div class="form-group input-group" id="divCadastro_1">
                                    <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" maxlength="50" />
                                </div>
                                <div class="form-group input-group" id="divCadastro_2">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Seu e-mail" maxlength="50" />
                                </div>
                                <div class="form-group input-group" id="divCadastro_3">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Crie uma senha (mínimo 6 caracteres)" maxlength="12" />
                                </div>
                                <div class="form-group input-group" id="divCadastro_4">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" id="repetir_senha" name="repetir_senha" placeholder="Repita a senha criada" maxlength="12" />
                                </div>

                                <button class="btn btn-success" onclick="return ValidarCadastro()" name="btnCadastrar">Finalizar cadastro</button>
                                <hr />
                                Já possui cadastro ? <a href="login.php">Clique aqui!</a>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </form>
</body>

</html>