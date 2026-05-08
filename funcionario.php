<?php
class Funcionario {
    private $re;
    private $nome;
    private $dataAdmissao;
    private $salario;

    public function __construct($re, $nome, $dataAdmissao, $salario) {
        $this->re = $re;
        $this->nome = $nome;
        $this->dataAdmissao = $dataAdmissao;
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRe() {
        return $this->re;
    }

    public function setRe($re) {
        $this->re = $re;
    }

    public function getDataAdmissao() {
        return $this->dataAdmissao;
    }

    public function setDataAdmissao($dataAdmissao) {
        $this->dataAdmissao = $dataAdmissao;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}

?>