<?php

class Pessoa{
    private $nome;
    private $sexo;
    private $idade;
    //talvez o construtor precise sair
    public function __construct($nome,$sexo,$idade)
    {
        $this->nome=$nome;
        $this->sexo=$sexo;
        $this->idade=$idade;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getIdade(){
        return $this->idade;
    }

    public function fazerAniversario(){
        return mt_rand(0,1);
    }

}