<?php

class EmpresaDAO
{
    public function CadastrarEmpresa($nome_empresa, $telefone, $endereco)
    {
        if (trim($nome_empresa) == '' ) {
            return 0;
        }
    }

    public function AlterarEmpresa($nome_empresa, $telefone, $endereco)
    {
        if (trim($nome_empresa) == '' ) {
            return 0;
        }
    }
}
