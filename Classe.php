<?php
require __DIR__ . '/Alunno.php';
class Classe{
    protected $array=[];
    protected $nome;
    public function __construct(){
        $this->nome = "5B";
        $a1 = new Alunno("aaa","bbb",25);
        $a2 = new Alunno("adg","ryuwe5y",343);
        $a3 = new Alunno("sdfhsfh","fjj",275);
        array_push($this->array, $a1);
        array_push($this->array, $a2);
        array_push($this->array, $a3);

    }

    public function getNome(){
        return $this->nome;
    }

    public function getArray(){
        return $this->array;
    }





}

?>