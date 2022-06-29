<?php

class ContaDAO
{
    public function CadastrarConta($nome_banco, $agencia, $numero_conta, $saldo)
    {
        if (trim($nome_banco) == '' || trim($agencia) == '' || trim($numero_conta) == '' || trim($saldo) == '') {
            return 0;
        } elseif (!is_numeric($agencia) || !is_numeric($numero_conta) || !is_numeric($saldo)) {
            return -1;
        }
    }

    public function AlterarConta($nome_banco, $agencia, $numero_conta, $saldo)
    {
        if (trim($nome_banco) == '' || trim($agencia) == '' || trim($numero_conta) == '' || trim($saldo) == '') {
            return 0;
        } elseif (!is_numeric($agencia) || !is_numeric($numero_conta) || !is_numeric($saldo)) {
            return -1;
        }
    }
}
