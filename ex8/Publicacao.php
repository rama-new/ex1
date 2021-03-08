<?php
interface Publicacao  {

    public function abrir();
    public function fechar();
    public function folhear($pags);
    public function avancarPag();
    public function voltarPag();


}
