<?php

class MovimentoDAO
{
    public function RealizarMovimento($tipo_movimento, $data, $valor, $categoria, $empresa, $conta, $obs)
    {

        if (($tipo_movimento) == '' || trim($data) == '' || trim($valor) == '' || ($categoria) == '' || ($empresa) == '' || ($conta) == '') {
            return 0;
        } elseif (!is_numeric($valor) || !is_numeric($conta)) {
            return -1;
        }
    }
}
