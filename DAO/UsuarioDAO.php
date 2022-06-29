<?php

class UsuarioDAO
{

    public function CarregarMeusDados()
    {
    }

    public function GravarMeusDados($nome, $email)
    {
        if (trim($nome) == '' || (trim($email) == '')) {
            return 0;
        }
    }

    public function ValidarLogin($email, $senha)
    {
        if (trim($email) == '' || trim($senha) == '') {
            return 0;
        }
    }

    public function CriarCadastro($nome, $email, $senha, $repitir_senha)
    {
        if (trim($nome) == '' || trim($email) == '' || trim($senha) == '' || trim($repitir_senha) == '') {
            return 0;
        } 
        
        if (strlen($senha) < 6) {
            return -2;
        }

        if (trim($senha) != trim($repitir_senha)) {
            return -3;
        }
    }
}
