<?php

require_once '../DAO/UtilDAO.php';

?>

<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="inicial.php">Financeiro</a>
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 13px;">Olá, <strong style="font-size: 16px; color: #E0F6FF"><?= UtilDAO::NomeLogado(); ?></strong> <br> Dúvidas ligue para: (19) 99357-6996 </div>
</nav>

