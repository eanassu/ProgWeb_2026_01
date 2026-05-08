<?php
include_once 'conexao.php';
include_once 'funcionario.php';

class FuncionarioDao {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insert(Funcionario $funcionario) {
        $stmt = $this->conn->prepare(
            "INSERT INTO funcionarios (re, nome, dataAdmissao, salario) VALUES (?, ?, ?, ?)");
        $re = $funcionario->getRe();
        $nome = $funcionario->getNome();
        $dataAdmissao = $funcionario->getDataAdmissao();
        $salario = $funcionario->getSalario();
        $stmt->bind_param("issd", $re, $nome, $dataAdmissao, $salario);
        return $stmt->execute();
    }

    public function buscarPeloRe($re) {
        $stmt = $this->conn->prepare("SELECT * FROM funcionarios WHERE re = ?");
        $stmt->bind_param("i", $re);
        $stmt->execute();
        $stmt->bind_result($re, $nome, $dataAdmissao, $salario);
        if ($stmt->fetch()) {   
            return new Funcionario($re, $nome, $dataAdmissao, $salario);    
        }
    }

    public function update(Funcionario $funcionario) {
        $stmt = $this->conn->prepare("UPDATE funcionarios SET nome = ?, dataAdmissao = ?, salario = ? WHERE re = ?");
        $re = $funcionario->getRe();
        $nome = $funcionario->getNome();
        $dataAdmissao = $funcionario->getDataAdmissao();
        $salario = $funcionario->getSalario();
        $stmt->bind_param("ssdi", $nome, $dataAdmissao, $salario, $re);
        return $stmt->execute();
    }

    public function delete(Funcionario $funcionario) {
        $stmt = $this->conn->prepare("DELETE FROM funcionarios WHERE re = ?");
        $re = $funcionario->getRe();
        $stmt->bind_param("i", $re);
        return $stmt->execute();
    }

    public function listarTodos() {
        $result = $this->conn->query("SELECT * FROM funcionarios");
        $funcionarios = [];
        while ($row = $result->fetch_assoc()) {
            $funcionarios[] = new Funcionario($row['re'], $row['nome'], $row['dataAdmissao'], $row['salario']);
        }
        return $funcionarios;
    }
}

?>