<?php

//livro precisa implementar publicacao
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual=0;
    private $aberto=0;
    private $leitor;

    public function __construct($titulo,Pessoa $autor,$totPaginas)
    {
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->totPaginas=$totPaginas;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    
    public function setLeitor(Pessoa $leitor)
    {
        $this->leitor=$leitor;    
    }
    
    public function setFechado(){
        $this->aberto=0;
    }
    public function setAberto(){
        $this->aberto=1;
    }
    public function setPagAtual($pag)
    {
        $this->pagAtual=$pag;
    }

    public function detalhes()
    {
        return $this;
    }

    public function abrir(){
        $this->setAberto();
    }

    public function fechar(){
        $this->setFechado();
    }
    public function folhear($pags){

        if($pags>=0){
            //se a quantidade de pags mais a pos. atual for maior do que o total, vai pro final
            if($pags+$this->getPagAtual()>=$this->getTotPaginas())
            {
                $this->setPagAtual($this->getTotPaginas());
            }
            else{
                //avança uma quantidade $pags de paginas.  
                $this->setPagAtual($this->getPagAtual()+$pags);
            }
        }
        else{
            //se a quantidade de paginas a menos for menor do que a pagina inicial, ele fica no começo
            if($pags+$this->getPagAtual()<0){
                $this->setPagAtual(0);
            }
            else{
                $this->setPagAtual($this->getPagAtual()+$pags);
            }
        }
    }
    public function avancarPag(){
        if($this->getPagAtual()+1>=$this->getTotPaginas())
        {
            $this->setPagAtual($this->getTotPaginas());
        }
        else{
            //avança uma pagina.  
            $this->setPagAtual($this->getPagAtual()+1);
        }
    }
    public function voltarPag(){
        //fecha o livro se a pagina atual for a primeira e pedir para voltar
        if($this->getPagAtual()-1<=0)
        {
            $this->fechar();
        }
        else{
            //volta uma pagina.  
            $this->setPagAtual($this->getPagAtual()-1);
        }
    }
}


