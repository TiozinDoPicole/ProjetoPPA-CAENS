<?php

include_once 'banco.php';

class Item {
    public $nome;
    public $quantidade;
    public $tipo;
    public $id_item;

    function __construct($nome, $quantidade, $tipo, $id_item = null) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->tipo = $tipo;
        $this->id_item = $id_item;
    }

    function inserir() {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            $stmt = $conexao->prepare("INSERT INTO item (nome, quantidade, tipo) VALUES (:nome, :quantidade, :tipo)");
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':quantidade', $this->quantidade);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao inserir item: " . $ex->getMessage();
        }
    }

    function excluir() {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            $stmt = $conexao->prepare("DELETE FROM item WHERE id_item = :id_item");
            $stmt->bindParam(':id_item', $this->id_item);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao excluir item: " . $ex->getMessage();
        }
    }

    function editar() {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            $stmt = $conexao->prepare("UPDATE item SET nome = :nome, quantidade = :quantidade, tipo = :tipo WHERE id_item = :id_item");
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':quantidade', $this->quantidade);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->bindParam(':id_item', $this->id_item);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao alterar item: " . $ex->getMessage();
        }
    }

    static function carregar($id_item) {
        try {
            $banco = new Banco();
            $conexao = $banco->conectar();
            $stmt = $conexao->prepare("SELECT * FROM item WHERE id_item = :id_item");
            $stmt->bindParam(':id_item', $id_item);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $item = null;
            foreach($stmt->fetchAll() as $valor) {
                $item = new Item(
                    $valor['nome'],
                    $valor['quantidade'],
                    $valor['tipo'],
                    $valor['id_item']
                );
            }

            return $item;

        } catch (PDOException $ex) {
            echo 'Erro ao carregar o item: ' . $ex->getMessage();
        }
    }
}
