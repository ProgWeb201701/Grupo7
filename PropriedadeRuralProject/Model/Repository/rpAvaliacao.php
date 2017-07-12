<?php

include '/xampp/htdocs/Grupo7ProgWeb2017/PropriedadeRuralProject/BDConfig/conexao_mysqli.php';

class rpAvaliacao {

    private static $instancia;

    private function __construct() { }

    public static function getInstancia()
    {
        if (null === static::$instancia) {
            static::$instancia = new static();
        }
        return static::$instancia;
    }

    public function gravaPropriedade ($nome, $telefone, $celular, $email, $endereco, $corresp, $municipio){
        $bd = conexao_mysqli::getInstancia();
        $bd->conectar();
        $bd->executeQuery("INSERT INTO propriedaderural (`nomepr`, `telefonepr`, `celularpr`, `emailpr`, `enderecopr`, `enderecocpr`, `municipiopr`)
                VALUES ('".$nome."','".$telefone."','".$celular."','".$email."','".$endereco."','".$corresp."','".$municipio."')");
    }

    function retornaUltimoID(){
        $aux[] = array();
        $bd = conexao_mysqli::getInstancia();
        $bd->conectar();
        $ultID = $bd->retornaUltimoID();
        while ($aux = mysqli_fetch_row($ultID) ){
           $id = $aux[0];
        }
        return $id;
    }

    function retornaPropriedade(){
        $aux = $this->retornaUltimoID();
        $bd = conexao_mysqli::getInstancia();
        $bd->conectar();
        $result = $bd->executeQuery("SELECT * FROM propriedaderural WHERE _ID = ".$aux);
        return $result;
    }

    function gravaQuestionario($tecnologia, $gestao, $remae){

        $sql = "'INSERT INTO `questionario`(`r111`, `r112`, `r113`, `r121`, `r122`, `r123`, `r124`, `r125`, `r126`, `r127`, `r128`, `r129`, `r1210`, `r1211`, `r131`, `r132`, `r133`, `r134`, `r135`, `r136`, `r137`, `r138`, `r141`, `r142`, `r143`, `r144`, `r151`, `r152`, `r153`, `r154`, `r161`, `r162`, `r163`, `r164`, `r165`, `r166`, `r167`, `r168`, `r169`, `r1610`, `r1611`, `r1612`, `r1613`, `r1614`, `r1615`, `r171`, `r172`, `r173`, `r181`, `r182`, `r183`, `r184`, `r185`, `r186`, `r187`, `r188`, `r191`, `r192`, `r193`, `r1101`, `r1102`, `r1103`, `r1104`, `r1105`, `r1106`, `r1107`, `r1108`, `r1109`, `r211`, `r212`, `r213`, `r214`, `r215`, `r216`, `r217`, `r218`, `r219`, `r221`, `r222`, `r223`, `r224`, `r231`, `r232`, `r233`, `r234`, `r241`, `r242`, `r251`, `r252`, `r253`, `r254`, `r255`, `r256`, `r257`, `r261`, `r262`, `r263`, `r271`, `r272`, `r273`, `r281`, `r282`, `r283`, `r291`, `r292`, `r293`, `r2101`, `r2102`, `r2103`, `r2104`, `r2105`, `r2106`, `r2107`, `r2108`, `r2109`, `r21010`, `r311`, `r312`, `r313`, `r314`, `r321`, `r322`, `r323`, `r331`, `r332`, `r333`, `idPropriedade`) VALUES ('".$tecnologia->getR111()."', '".$tecnologia->getR112()."','".$tecnologia->getR113()."','".$tecnologia->getR121()."','".$tecnologia->getR122()."','".$tecnologia->getR123()."','".$tecnologia->getR124()."','".$tecnologia->getR125()."','".$tecnologia->getR126()."','".$tecnologia->getR127()."','".$tecnologia->getR128()."','".$tecnologia->getR129()."','".$tecnologia->getR1210()."','".$tecnologia->getR1211()."','".$tecnologia->getR131()."','".$tecnologia->getR132()."','".$tecnologia->getR133()."','".$tecnologia->getR134()."'".$tecnologia->getR135()."','".$tecnologia->getR136()."','".$tecnologia->getR137()."','".$tecnologia->getR138()."','".$tecnologia->getR151()."','".$tecnologia->getR152()."','".$tecnologia->getR153()."','".$tecnologia->getR154()."','".$tecnologia->getR161()."','".$tecnologia->getR162()."','".$tecnologia->getR163()."','".$tecnologia->getR164()."','".$tecnologia->getR165()."','".$tecnologia->getR166()."','".$tecnologia->getR167()."','".$tecnologia->getR168()."','".$tecnologia->getR169()."','".$tecnologia->getR1610()."','".$tecnologia->getR1611()."','".$tecnologia->getR1612()."','".$tecnologia->getR1613()."','".$tecnologia->getR1614()."','".$tecnologia->getR1615()."','".$tecnologia->getR171()."','".$tecnologia->getR172()."','".$tecnologia->getR173()."','".$tecnologia->getR181()."','".$tecnologia->getR182()."','".$tecnologia->getR183()."','".$tecnologia->getR184()."','".$tecnologia->getR185()."','".$tecnologia->getR185()."','".$tecnologia->getR186()."','".$tecnologia->getR187()."','".$tecnologia->getR188()."','".$tecnologia->getR191()."','".$tecnologia->getR192()."','".$tecnologia->getR193()."','".$tecnologia->getR1101()."','".$tecnologia->getR1102()."','".$tecnologia->getR1103()."','".$tecnologia->getR1104()."','".$tecnologia->getR1105()."','".$tecnologia->getR1106()."','".$tecnologia->getR1107()."','".$tecnologia->getR1108()."','".$tecnologia->getR1109()."','".$gestao->getR211()."','".$gestao->getR212()."','".$gestao->getR213()."','".$gestao->getR214()."','".$gestao->getR215()."','".$gestao->getR216()."','".$gestao->getR217()."','".$gestao->getR218()."','".$gestao->getR219()."','".$gestao->getR221()."','".$gestao->getR222()."','".$gestao->getR223()."','".$gestao->getR224()."','".$gestao->getR231()."','".$gestao->getR232()."','".$gestao->getR233()."','".$gestao->getR234()."','".$gestao->getR241()."','".$gestao->getR242()."','".$gestao->getR251()."','".$gestao->getR252()."','".$gestao->getR253()."','".$gestao->getR254()."','".$gestao->getR255()."','".$gestao->getR256()."','".$gestao->getR257()."','".$gestao->getR261()."','".$gestao->getR262()."','".$gestao->getR263()."','".$gestao->getR271()."','".$gestao->getR272()."','".$gestao->getR273()."','".$gestao->getR281()."','".$gestao->getR282()."','".$gestao->getR283()."','".$gestao->getR291()."','".$gestao->getR292()."','".$gestao->getR293()."','".$gestao->getR2101()."','".$gestao->getR2102()."','".$gestao->getR2103()."','".$gestao->getR2104()."','".$gestao->getR2105()."','".$gestao->getR2106()."','".$gestao->getR2107()."','".$gestao->getR2108()."','".$gestao->getR2109()."','".$gestao->getR21010()."','".$remae->getR311()."','".$remae->getR312()."','".$remae->getR313()."','".$remae->getR314()."','".$remae->getR321()."','".$remae->getR322()."','".$remae->getR323()."','".$remae->getR331()."','".$remae->getR332()."','".$remae->getR333()."');";

    echo $sql;
        $bd = conexao_mysqli::getInstancia();
        $bd->conectar();
        $bd->executeQuery($sql);
        $bd->desconectar();

    }


}