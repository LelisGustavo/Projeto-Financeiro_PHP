<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class ContaDAO extends Conexao
{
    public function CadastrarConta($nome_banco, $agencia, $numero_conta, $saldo)
    {
        if (trim($nome_banco) == '' || trim($agencia) == '' || trim($numero_conta) == '' || trim($saldo) == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'INSERT INTO tb_conta
                        (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
                        VALUES
                        (?, ?, ?, ?, ?)';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_banco);
        $sql->bindValue(2, $agencia);
        $sql->bindValue(3, $numero_conta);
        $sql->bindValue(4, $saldo);
        $sql->bindValue(5, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -1;
        }
    }

    public function AlterarConta($id_conta, $nome_banco, $agencia, $numero_conta, $saldo)
    {
        if (trim($id_conta) == '' || trim($nome_banco) == '' || trim($agencia) == '' || trim($numero_conta) == '' || trim($saldo) == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'UPDATE tb_conta
                        SET banco_conta = ?, agencia_conta = ?, numero_conta = ?, saldo_conta = ?
                        WHERE id_conta = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement;

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_banco);
        $sql->bindValue(2, $agencia);
        $sql->bindValue(3, $numero_conta);
        $sql->bindValue(4, $saldo);
        $sql->bindValue(5, $id_conta);
        $sql->bindValue(6, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;

        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -1;

        }
    }

    public function ConsultarConta()
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_conta, banco_conta, agencia_conta, numero_conta, saldo_conta
                        FROM tb_conta
                        WHERE id_usuario = ? ORDER BY banco_conta ASC';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function FiltrarConta($filtrar_nome_conta)
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT banco_conta, agencia_conta, numero_conta, saldo_conta,
                               id_conta
                            FROM tb_conta
                            WHERE id_usuario = ?
                            AND banco_conta LIKE ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, '%' . $filtrar_nome_conta . '%');

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function FiltrarAgencia($filtrar_agencia_conta)
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT banco_conta, agencia_conta, numero_conta, saldo_conta,
                               id_conta
                            FROM tb_conta
                            WHERE id_usuario = ?
                            AND agencia_conta LIKE ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, '%' . $filtrar_agencia_conta . '%');

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function FiltrarNumero($filtrar_numero_conta)
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT banco_conta, agencia_conta, numero_conta, saldo_conta,
                               id_conta
                            FROM tb_conta
                            WHERE id_usuario = ?
                            AND numero_conta LIKE ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, '%' . $filtrar_numero_conta . '%');

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function FiltrarSaldo($filtrar_saldo_conta)
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT banco_conta, agencia_conta, numero_conta, saldo_conta,
                               id_conta
                            FROM tb_conta
                            WHERE id_usuario = ?
                            AND saldo_conta LIKE ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, '%' . $filtrar_saldo_conta . '%');

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function DetalharConta($id_conta)
    {
        if ($id_conta == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_conta, banco_conta, agencia_conta, numero_conta, saldo_conta
                            FROM tb_conta
                            WHERE id_conta = ?
                            AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_conta);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();

    }

    public function ExcluirConta($id_conta)
    {
        if (trim($id_conta) == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'DELETE 
                        FROM tb_conta
                        WHERE id_conta = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement;

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_conta);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            return -4;
        }
    }
}
