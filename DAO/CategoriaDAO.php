<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class CategoriaDAO extends Conexao
{

    public function CadastrarCategoria($nome_categoria)
    {
        if (trim($nome_categoria) == '') {
            return 0;
        }
        // 1º Passo: Criar uma variável que receberá o obj de conexao
        $conexao = parent::retornarConexao();

        // 2º Passo: Criar uma variável que recebrá o texto do comando SQL que deverá ser executado no BD
        $comando_sql = 'INSERT INTO tb_categoria
                        (nome_categoria, id_usuario)
                        VALUES
                        (?, ?)';

        // 3º Passo: Criar um obj que será configurado e levado no BD para ser executado
        $sql = new PDOStatement();

        // 4º Passo: Colocar dentro do obj $sql a conexão preparada para executar o comando_sql
        $sql = $conexao->prepare($comando_sql);

        // 5º Passo: Verificar se no comando_sql eu tenho ? para ser configurado. Se tiver, configurar os bindValues
        $sql->bindValue(1, $nome_categoria);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {

            // 6º Passo: Executrar no BD
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return -1;
        }
    }

    public function AlterarCategoria($nome_categoria, $id_categoria)
    {
        if (trim($nome_categoria) == '' || trim($id_categoria) == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'UPDATE tb_categoria
                        SET nome_categoria = ?
                        WHERE id_categoria = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_categoria);
        $sql->bindValue(2, $id_categoria);
        $sql->bindValue(3, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -1;
        }
    }

    public function ExcluirCategoria($id_categoria)
    {
        if (trim($id_categoria) == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'DELETE 
                        FROM tb_categoria
                        WHERE id_categoria = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement;

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_categoria);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            return -4;
        }
    }

    public function ConsultarCategoria()
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT nome_categoria,
                               id_categoria
                            FROM tb_categoria
                            WHERE id_usuario = ? ORDER BY nome_categoria ASC';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function FiltrarCategoria($filtrar_nome_categoria)
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT nome_categoria,
                               id_categoria
                            FROM tb_categoria
                            WHERE id_usuario = ?
                            AND nome_categoria LIKE ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, '%' . $filtrar_nome_categoria . '%');

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function DetalharCategoria($id_categoria)
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_categoria,
                               nome_categoria
                            FROM tb_categoria
                            WHERE id_categoria = ?
                            AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_categoria);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}
