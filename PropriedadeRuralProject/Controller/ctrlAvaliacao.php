<?php

include("../../PropriedadeRuralProject/Model/Repository/rpAvaliacao.php");

class ctrlAvaliacao {

    private static $instancia;

    private function __construct() { }

    public static function getInstancia()
    {
        if (null === static::$instancia) {
            static::$instancia = new static();
        }
        return static::$instancia;
    }

    public function gravaPropriedade ($post){
        $nome = $post['nome'];
        $telefone = $post['telefone'];
        $celular = $post['celular'];
        $email = $post['email'];
        $endereco = $post['endereco'];
        $corresp = $post['enderecoc'];
        $municipio = $post['municipio'];

        $rp = rpAvaliacao::getInstancia();
        $rp->gravaPropriedade($nome, $telefone, $celular, $email, $endereco, $corresp, $municipio);
    }


}