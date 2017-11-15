<?php

class TesteController extends Controller {

    public function index(){
        echo "Teste sucessido!";
    }

    public function foi($nome, $sobreNome){
        echo "Meu nome é: ".$nome;
        echo "<br>Meu sobrenome é:".$sobreNome;
    }


}