<?php

require_once __DIR__.'/Pessoa.php';
require_once __DIR__.'/Publicacao.php';
require_once __DIR__.'/Livro.php';



$pessoa =new Pessoa('Rama','M','35');
$livro = new Livro('Biografia Rama',$pessoa, 1200);
// ----------------- //
// Chamadas e testes //
// ----------------- //
//printando variavel titulo em livro
echo $livro->getTitulo().PHP_EOL;

//printando variavel da classe autor agregada a classe livro
echo $livro->getAutor()->getNome().PHP_EOL;

//printando variavel idade da classe autor agregada a classe de livro
echo $livro->getAutor()->getIdade().PHP_EOL;

//chama metodo contido na classe Livro e com as chamadas da interface Publicaçao
//necessário haver corpo para classes com chamadas em Publicacao
var_export($livro->detalhes());
$livro->folhear(101);
var_export($livro->detalhes());
$livro->folhear(-10);
var_export($livro->detalhes());


//Agregação, se destruir livro, a ligação é fraca e Pessoa continuará existindo;
unset($livro);
var_dump($livro);

//mas a classe pessoa continuará existindo
var_dump($pessoa);

