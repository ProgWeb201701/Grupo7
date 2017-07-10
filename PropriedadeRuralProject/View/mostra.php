<?php
/**
 * Created by PhpStorm.
 * User: Jonnathan
 * Date: 08/07/2017
 * Time: 22:02
 */
$i = 0;
$sim = 0;
$nao = 0;

//AQUI TO SÓ TESTANDO A CAPTURA DOS CAMPOS, AGORA VOU TRABALHAS NA CONTROLER/MODELO/PERSISTENCIA

foreach($_POST as $nome_campo => $valor){
    if  (!is_array($valor)){
        $comando =  $nome_campo . "='" . $valor . "'; ";
        echo"$comando";
    } else {
        var_dump($valor);
    }
    if($valor === "SIM"){
        $sim++;
    } else if ($valor === "NAO"){
        $nao++;
    }

    $i++;
}
echo'<br/><br/>';
echo $i;
echo'<br/><br/>';
echo "SIM = ". $sim;
echo'<br/><br/>';
echo "NAO = ". $nao;

//var_dump($_POST);