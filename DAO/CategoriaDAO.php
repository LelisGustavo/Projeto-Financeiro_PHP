<?php

class CategoriaDAO
{

    public function CadastrarCategoria($nome_categoria)
    {
        if (trim($nome_categoria) == '') {
            return 0;
        }
    }

    public function AlterarCategoria($nome_categoria)
    {
        if (trim($nome_categoria) == '') {
            return 0;
        }
    }

    public function ExcluirCategoria($cod)
    {
        if (trim($cod) == '') {
            return 0;
        }
    }

    public function ConsultarCategoria($nome)
    {

    }
}
