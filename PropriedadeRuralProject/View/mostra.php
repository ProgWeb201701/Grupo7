<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../w3.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<?php
require_once("../Model/Tecnologia.php");
require_once("../Model/Gestao.php");
require_once("../Model/REMAE.php");
include("../phpChart_Lite/phpChart_Lite/conf.php");

$i = 0;
$sim = 0;
$nao = 0;

//AQUI TO SÓ TESTANDO A CAPTURA DOS CAMPOS, AGORA VOU TRABALHAS NA CONTROLER/MODELO/PERSISTENCIA
$object_post = (object) $_POST;

?>

<body class="w3-responsive">

<?php

function nivelCompet($nota){
    if ($nota > 8.1) {
        echo '<b class="w3-green w3-small">MUITO COMPETITIVA</b>';
    } elseif ($nota > 6.1){
        echo '<b class="w3-light-green w3-small">COMPETITIVA</b>';
    }elseif ($nota > 4.1) {
        echo '<b class="w3-yellow w3-small">PARCIALMENTE COMPETITIVA (NEUTRA)</b>';
    }elseif ($nota > 2.1){
        echo '<b class="w3-orange w3-small">POUCO COMPETITIVA</b>';
    } elseif ($nota > 0){
        echo '<div class="w3-red w3-small">NÃO COMPETITIVA</div>';
    }
}

$remae = new REMAE();
$tecnologia = new Tecnologia();
$gestao = new Gestao();


/*------------------------------ TECNOLOGIA ------------------------------*/
$simTec11 = $simTec12 = $simTec13 = $simTec14 = $simTec15 = $simTec16 = $simTec17 = $simTec18 =
$simTec19 = $simTec110 = $simTecTotal = $naoTecTotal = $totalTec = 0;
$nota11 = $nota12 = $nota13 = $nota14 = $nota15 = $nota16 = $nota17 = $nota18 = $nota19 = $nota110 = 0;

if ($object_post->r111 === "SIM" ? $simTec11++ : 0);
$tecnologia->setR111($object_post->r111);
if ($object_post->r112 === "SIM" ? $simTec11++ : 0);
$tecnologia->setR112($object_post->r112);
if ($object_post->r113 === "SIM" ? $simTec11++ : 0);
$tecnologia->setR113($object_post->r113);
$nota11 = $simTec11 * 0.15;

if ($object_post->r121 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR121($object_post->r121);
if ($object_post->r122 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR122($object_post->r122);
if ($object_post->r123 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR123($object_post->r123);
if ($object_post->r124 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR124($object_post->r124);
if ($object_post->r125 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR125($object_post->r125);
if ($object_post->r126 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR126($object_post->r126);
if ($object_post->r127 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR127($object_post->r127);
if ($object_post->r128 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR128($object_post->r128);
if ($object_post->r129 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR129($object_post->r129);
if ($object_post->r1210 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR1210($object_post->r1210);
if ($object_post->r1211 === "SIM" ? $simTec12++ : 0);
$tecnologia->setR1211($object_post->r1211);
$nota12 = $simTec12 * 0.05;

if ($object_post->r131 === "SIM" ? $simTec13++ : 0);
$tecnologia->setR131($object_post->r131);
if ($object_post->r132 === "SIM" ? $simTec13++ : 0);
$tecnologia->setR132($object_post->r132);
if ($object_post->r133 === "SIM" ? $simTec13++ : 0);
$tecnologia->setR133($object_post->r133);
if ($object_post->r134 === "SIM" ? $simTec13++ : 0);
$tecnologia->setR134($object_post->r134);
if ($object_post->r135 === "SIM" ? $simTec13++ : 0);
$tecnologia->setR135($object_post->r135);
if ($object_post->r136 === "SIM" ? $simTec13++ : 0);
$tecnologia->setR136($object_post->r136);
if ($object_post->r137 === "SIM" ? $simTec13++ : 0);
$tecnologia->setR137($object_post->r137);
if ($object_post->r138 === "SIM" ? $simTec13++ : 0);
$tecnologia->setR138($object_post->r138);
$nota13 = $simTec13 * 0.06;

if ($object_post->r141 === "SIM" ? $simTec14++ : 0);
$tecnologia->setR141($object_post->r141);
if ($object_post->r142 === "SIM" ? $simTec14++ : 0);
$tecnologia->setR142($object_post->r142);
if ($object_post->r143 === "SIM" ? $simTec14++ : 0);
$tecnologia->setR143($object_post->r143);
if ($object_post->r144 === "SIM" ? $simTec14++ : 0);
$tecnologia->setR144($object_post->r144);
$nota14 = $simTec14 * 0.11;

if ($object_post->r151 === "SIM" ? $simTec15++ : 0);
$tecnologia->setR151($object_post->r151);
if ($object_post->r152 === "SIM" ? $simTec15++ : 0);
$tecnologia->setR152($object_post->r152);
if ($object_post->r153 === "SIM" ? $simTec15++ : 0);
$tecnologia->setR153($object_post->r153);
if ($object_post->r154 === "SIM" ? $simTec15++ : 0);
$tecnologia->setR154($object_post->r154);
$nota15 = $simTec15 * 0.11;

if ($object_post->r161 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR161($object_post->r161);
if ($object_post->r162 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR162($object_post->r162);
if ($object_post->r163 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR163($object_post->r163);
if ($object_post->r164 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR164($object_post->r164);
if ($object_post->r165 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR165($object_post->r165);
if ($object_post->r166 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR166($object_post->r166);
if ($object_post->r167 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR167($object_post->r167);
if ($object_post->r168 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR168($object_post->r168);
if ($object_post->r169 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR169($object_post->r169);
if ($object_post->r1610 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR1610($object_post->r1610);
if ($object_post->r1611 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR1611($object_post->r1611);
if ($object_post->r1612 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR1612($object_post->r1612);
if ($object_post->r1613 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR1613($object_post->r1613);
if ($object_post->r1614 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR1614($object_post->r1614);
if ($object_post->r1615 === "SIM" ? $simTec16++ : 0);
$tecnologia->setR1615($object_post->r1615);
$nota16 = $simTec16 * 0.03;

if ($object_post->r171 === "SIM" ? $simTec17++ : 0);
$tecnologia->setR171($object_post->r171);
if ($object_post->r172 === "SIM" ? $simTec17++ : 0);
$tecnologia->setR172($object_post->r172);
if ($object_post->r173 === "SIM" ? $simTec17++ : 0);
$tecnologia->setR173($object_post->r173);
$nota17 = $simTec17 * 0.15;

if ($object_post->r181 === "SIM" ? $simTec18++ : 0);
$tecnologia->setR181($object_post->r181);
if ($object_post->r182 === "SIM" ? $simTec18++ : 0);
$tecnologia->setR182($object_post->r182);
if ($object_post->r183 === "SIM" ? $simTec18++ : 0);
$tecnologia->setR183($object_post->r183);
if ($object_post->r184 === "SIM" ? $simTec18++ : 0);
$tecnologia->setR184($object_post->r184);
if ($object_post->r185 === "SIM" ? $simTec18++ : 0);
$tecnologia->setR185($object_post->r185);
if ($object_post->r186 === "SIM" ? $simTec18++ : 0);
$tecnologia->setR186($object_post->r186);
if ($object_post->r187 === "SIM" ? $simTec18++ : 0);
$tecnologia->setR187($object_post->r187);
if ($object_post->r188 === "SIM" ? $simTec18++ : 0);
$tecnologia->setR188($object_post->r188);
$nota18 = $simTec18 * 0.06;

if ($object_post->r191 === "SIM" ? $simTec19++ : 0);
$tecnologia->setR191($object_post->r191);
if ($object_post->r192 === "SIM" ? $simTec19++ : 0);
$tecnologia->setR192($object_post->r192);
if ($object_post->r193 === "SIM" ? $simTec19++ : 0);
$tecnologia->setR193($object_post->r193);
$nota19 = $simTec19 * 0.15;

if ($object_post->r1101 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1101($object_post->r1101);
if ($object_post->r1102 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1102($object_post->r1102);
if ($object_post->r1103 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1103($object_post->r1103);
if ($object_post->r1104 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1104($object_post->r1104);
if ($object_post->r1105 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1105($object_post->r1105);
if ($object_post->r1106 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1106($object_post->r1106);
if ($object_post->r1107 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1107($object_post->r1107);
if ($object_post->r1108 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1108($object_post->r1108);
if ($object_post->r1109 === "SIM" ? $simTec110++ : 0);
$tecnologia->setR1109($object_post->r1109);
$nota110 = $simTec110* 0.05;

$simTecTotal = $simTec11+$simTec12+$simTec13+$simTec14+$simTec15+$simTec16+$simTec17+$simTec18+
    $simTec19+$simTec110;
$naoTecTotal = 67 - $simTecTotal;
$totalTec = $nota11+$nota12+$nota13+$nota14+$nota15+$nota16+$nota17+$nota18+$nota19+$nota110;


/*------------------------------ GESTAO ------------------------------*/
$simGestao21 = $simGestao22 = $simGestao23 = $simGestao24 = $simGestao25 = $simGestao26 = $simGestao27 = $simGestao28 =
$simGestao29 = $simGestao210 = $simGestaoTotal = $naoGestaoTotal = $totalGestao = 0;
$nota21 = $nota22 = $nota23 = $nota24 = $nota25 = $nota26 = $nota27 = $nota28 = $nota29 = $nota210 = 0;

if ($object_post->r211 === "SIM" ? $simGestao21++ : 0);
$gestao->setR211($object_post->r211);
if ($object_post->r212 === "SIM" ? $simGestao21++ : 0);
$gestao->setR212($object_post->r212);
if ($object_post->r213 === "SIM" ? $simGestao21++ : 0);
$gestao->setR213($object_post->r213);
if ($object_post->r214 === "SIM" ? $simGestao21++ : 0);
$gestao->setR214($object_post->r214);
if ($object_post->r215 === "SIM" ? $simGestao21++ : 0);
$gestao->setR215($object_post->r215);
if ($object_post->r216 === "SIM" ? $simGestao21++ : 0);
$gestao->setR216($object_post->r216);
if ($object_post->r217 === "SIM" ? $simGestao21++ : 0);
$gestao->setR217($object_post->r217);
if ($object_post->r218 === "SIM" ? $simGestao21++ : 0);
$gestao->setR218($object_post->r218);
if ($object_post->r219 === "SIM" ? $simGestao21++ : 0);
$gestao->setR219($object_post->r219);
$nota21 = $simGestao21 * 0.06;

if ($object_post->r221 === "SIM" ? $simGestao21++ : 0);
$gestao->setR221($object_post->r221);
if ($object_post->r222 === "SIM" ? $simGestao22++ : 0);
$gestao->setR222($object_post->r222);
if ($object_post->r223 === "SIM" ? $simGestao23++ : 0);
$gestao->setR223($object_post->r223);
if ($object_post->r224 === "SIM" ? $simGestao24++ : 0);
$gestao->setR224($object_post->r224);
$nota22 = $simGestao22 * 0.13;

if ($object_post->r231 === "SIM" ? $simGestao23++ : 0);
$gestao->setR231($object_post->r231);
if ($object_post->r232 === "SIM" ? $simGestao23++ : 0);
$gestao->setR232($object_post->r232);
if ($object_post->r232 === "SIM" ? $simGestao23++ : 0);
$gestao->setR233($object_post->r233);
if ($object_post->r232 === "SIM" ? $simGestao23++ : 0);
$gestao->setR234($object_post->r234);
$nota23 = $simGestao23 * 0.13;

if ($object_post->r241 === "SIM" ? $simGestao24++ : 0);
$gestao->setR241($object_post->r241);
if ($object_post->r242 === "SIM" ? $simGestao24++ : 0);
$gestao->setR242($object_post->r242);
$nota24 = $simGestao24 * 0.13;

if ($object_post->r251 === "SIM" ? $simGestao25++ : 0);
$gestao->setR251($object_post->r251);
if ($object_post->r252 === "SIM" ? $simGestao25++ : 0);
$gestao->setR252($object_post->r252);
if ($object_post->r253 === "SIM" ? $simGestao25++ : 0);
$gestao->setR253($object_post->r253);
if ($object_post->r254 === "SIM" ? $simGestao25++ : 0);
$gestao->setR254($object_post->r254);
if ($object_post->r255 === "SIM" ? $simGestao25++ : 0);
$gestao->setR255($object_post->r255);
if ($object_post->r256 === "SIM" ? $simGestao25++ : 0);
$gestao->setR256($object_post->r256);
if ($object_post->r257 === "SIM" ? $simGestao25++ : 0);
$gestao->setR257($object_post->r257);
$nota25 = $simGestao25 * 0.07;

if ($object_post->r261 === "SIM" ? $simGestao26++ : 0);
$gestao->setR261($object_post->r261);
if ($object_post->r261 === "SIM" ? $simGestao26++ : 0);
$gestao->setR262($object_post->r262);
if ($object_post->r261 === "SIM" ? $simGestao26++ : 0);
$gestao->setR263($object_post->r263);
$nota26 = $simGestao26 * 0.17;

if ($object_post->r271 === "SIM" ? $simGestao27++ : 0);
$gestao->setR271($object_post->r271);
if ($object_post->r272 === "SIM" ? $simGestao27++ : 0);
$gestao->setR272($object_post->r272);
if ($object_post->r273 === "SIM" ? $simGestao27++ : 0);
$gestao->setR272($object_post->r273);
$nota27 = $simGestao27 * 0.13;

if ($object_post->r281 === "SIM" ? $simGestao28++ : 0);
$gestao->setR281($object_post->r281);
if ($object_post->r282 === "SIM" ? $simGestao28++ : 0);
$gestao->setR282($object_post->r282);
if ($object_post->r283 === "SIM" ? $simGestao28++ : 0);
$gestao->setR283($object_post->r283);
$nota28 = $simGestao28 * 0.13;

if ($object_post->r291 === "SIM" ? $simGestao29++ : 0);
$gestao->setR291($object_post->r291);
if ($object_post->r292 === "SIM" ? $simGestao29++ : 0);
$gestao->setR292($object_post->r292);
if ($object_post->r293 === "SIM" ? $simGestao29++ : 0);
$gestao->setR293($object_post->r293);
$nota29 = $simGestao29 * 0.17;

if ($object_post->r2101 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2101($object_post->r2101);
if ($object_post->r2102 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2102($object_post->r2102);
if ($object_post->r2103 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2103($object_post->r2103);
if ($object_post->r2104 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2104($object_post->r2104);
if ($object_post->r2105 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2105($object_post->r2105);
if ($object_post->r2106 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2106($object_post->r2106);
if ($object_post->r2107 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2107($object_post->r2107);
if ($object_post->r2108 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2108($object_post->r2108);
if ($object_post->r2109 === "SIM" ? $simGestao210++ : 0);
$gestao->setR2109($object_post->r2109);
if ($object_post->r21010 === "SIM" ? $simGestao210++ : 0);
$gestao->setR21010($object_post->r21010);
$nota210 = $simGestao210 * 0.05;
$totalGestao = $nota21+$nota22+$nota23+$nota24+$nota25+$nota26+$nota27+$nota28+$nota29+$nota210;

$simGestaoTotal = $simGestao21+$simGestao22+$simGestao23+$simGestao24+$simGestao25+$simGestao26+$simGestao27+$simGestao28+$simGestao29+$simGestao210;
$naoGestaoTotal = 50 - $simGestaoTotal;

/*------------------------------ REMAE ------------------------------*/
$simREMAE31 = $simREMAE32 = $simREMAE33 = $simREMAETotal = $naoREMAETotal = 0;
$nota31 = $nota32 = $nota33 = 0;
$totalREMAE=0;

$remae->setR311($object_post->r311);
if ($object_post->r311 === "SIM" ? $simREMAE31++ : 0);
$remae->setR312($object_post->r312);
if ($object_post->r312 === "SIM" ? $simREMAE31++ : 0);
$remae->setR313($object_post->r313);
if ($object_post->r313 === "SIM" ? $simREMAE31++ : 0);
$remae->setR314($object_post->r314);
if ($object_post->r314 === "SIM" ? $simREMAE31++ : 0);
$nota31 = $simREMAE31 * 0.08;

if ($object_post->r321 === "SIM" ? $simREMAE32++ : 0);
$remae->setR321($object_post->r321);
if ($object_post->r322 === "SIM" ? $simREMAE32++ : 0);
$remae->setR322($object_post->r322);
if ($object_post->r323 === "SIM" ? $simREMAE32++ : 0);
$remae->setR323($object_post->r323);
$nota32 = $simREMAE32 * 0.11;

if ($object_post->r331 === "SIM" ? $simREMAE33++ : 0);
$remae->setR331($object_post->r331);
if ($object_post->r332 === "SIM" ? $simREMAE33++ : 0);
$remae->setR332($object_post->r332);
if ($object_post->r333 === "SIM" ? $simREMAE33++ : 0);
$remae->setR333($object_post->r333);
$nota33 = $simREMAE33 * 0.11;
$simREMAETotal = $simREMAE31 + $simREMAE32 + $simREMAE33;
$naoREMAETotal = 10 - $simREMAETotal;
$totalREMAE = $nota31+$nota32+$nota33;

//var_dump($gestao);
//var_dump($remae);
//var_dump($tecnologia);

?>
<div>
    <h1 class="w3-card-2 w3-center w3-green">RESULTADOS DA ANÁLISE DE COMPETITIVIDADE</h1>
</div>

<br><br><br>

<div>
<div class="w3-content">
    <div class="w3-center">
        <div>
            <h1 class="w3-card-2 w3-green">RESULTADOS TECNOLOGIA</h1>
        </div>
        <table class="w3-table-all">
            <tr>
                <th>Fatores</th>
                <th>Sub-Fatores</th>
                <th>Peso</th>
                <th>Subtotal</th>
                <th>Nota</th>
            </tr>
            <tr>
                <td>1.1</td>
                <td>3</td>
                <td>0,15</td>
                <td><?php echo $simTec11 ?></td>
                <td><?php echo $nota11 ?></td>
            </tr>
            <tr>
                <td>1.2</td>
                <td>10</td>
                <td>0,05</td>
                <td><?php echo $simTec12 ?></td>
                <td><?php echo $nota12 ?></td>
            </tr>
            <tr>
                <td>1.3</td>
                <td>8</td>
                <td>0,06</td>
                <td><?php echo $simTec13 ?></td>
                <td><?php echo $nota13 ?></td>
            </tr>
            <tr>
                <td>1.4</td>
                <td>4</td>
                <td>0,11</td>
                <td><?php echo $simTec14 ?></td>
                <td><?php echo $nota14 ?></td>
            </tr>
            <tr>
                <td>1.5</td>
                <td>4</td>
                <td>0,11</td>
                <td><?php echo $simTec15 ?></td>
                <td><?php echo $nota15 ?></td>
            </tr>
            <tr>
                <td>1.6</td>
                <td>15</td>
                <td>0,03</td>
                <td><?php echo $simTec16 ?></td>
                <td><?php echo $nota16 ?></td>
            </tr>
            <tr>
                <td>1.7</td>
                <td>3</td>
                <td>0,15</td>
                <td><?php echo $simTec17 ?></td>
                <td><?php echo $nota17 ?></td>
            </tr>
            <tr>
                <td>1.8</td>
                <td>8</td>
                <td>0,06</td>
                <td><?php echo $simTec18 ?></td>
                <td><?php echo $nota18 ?></td>
            </tr>
            <tr>
                <td>1.9</td>
                <td>3</td>
                <td>0,15</td>
                <td><?php echo $simTec19 ?></td>
                <td><?php echo $nota19 ?></td>
            </tr>
            <tr>
                <td>1.10</td>
                <td>9</td>
                <td>0,05</td>
                <td><?php echo $simTec110 ?></td>
                <td><?php echo $nota110 ?></td>
            </tr>
            <tr>
                <td><b>TOTAL</b></td>
                <td>67</td>
                <td>-</td>
                <td><?php echo $simTecTotal ?></td>
                <td><?php echo $totalTec ?></td>
            </tr>
        </table>
    </div>
</div>

</br></br>

<div  class="w3-content">
    <div class="w3-center">
        <div>
            <h1 class="w3-card-2 w3-green">RESULTADOS GESTÃO</h1>
        </div>
        <table class="w3-table-all">
            <tr>
                <th>FATORES</th>
                <th>Sub-fatores</th>
                <th>Peso</th>
                <th>Subtotal</th>
                <th>Nota</th>
            </tr>
            <tr>
                <td>2.1</td>
                <td>9</td>
                <td>0,06</td>
                <td><?php echo $simGestao21; ?></td>
                <td><?php echo $nota21; ?></td>
            </tr>
            <tr>
                <td>2.2</td>
                <td>4</td>
                <td>0,13</td>
                <td><?php echo $simGestao22; ?></td>
                <td><?php echo $nota22; ?></td>
            </tr>
            <tr>
                <td>2.3</td>
                <td>4</td>
                <td>0,13</td>
                <td><?php echo $simGestao23; ?></td>
                <td><?php echo $nota23; ?></td>
            </tr>
            <tr>
                <td>2.4</td>
                <td>2</td>
                <td>0,25</td>
                <td><?php echo $simGestao24; ?></td>
                <td><?php echo $nota24; ?></td>
            </tr>
            <tr>
                <td>2.5</td>
                <td>7</td>
                <td>0,07</td>
                <td><?php echo $simGestao25; ?></td>
                <td><?php echo $nota25; ?></td>
            </tr>
            <tr>
                <td>2.6</td>
                <td>3</td>
                <td>0,17</td>
                <td><?php echo $simGestao26; ?></td>
                <td><?php echo $nota26; ?></td>
            </tr>
            <tr>
                <td>2.7</td>
                <td>4</td>
                <td>0,13</td>
                <td><?php echo $simGestao27; ?></td>
                <td><?php echo $nota27; ?></td>
            </tr>
            <tr>
                <td>2.8</td>
                <td>4</td>
                <td>0,13</td>
                <td><?php echo $simGestao28; ?></td>
                <td><?php echo $nota24; ?></td>
            </tr>
            <tr>
                <td>2.9</td>
                <td>3</td>
                <td>0,17</td>
                <td><?php echo $simGestao29; ?></td>
                <td><?php echo $nota29; ?></td>
            </tr>
            <tr>
                <td>2.10</td>
                <td>10</td>
                <td>0,05</td>
                <td><?php echo $simGestao210; ?></td>
                <td><?php echo $nota210; ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>50</td>
                <td>-</td>
                <td><?php echo $simGestaoTotal; ?></td>
                <td><?php echo $totalGestao ?></td>
            </tr>
        </table>
    </div>
</div>

</br></br>

<div class="w3-content">
    <div class="w3-center">
        <div>
            <h1 class="w3-card-2 w3-green">RESULTADOS RELAÇÕES DE MERCADO E AMBIENTE EXTERNO</h1>
        </div>
        <table class="w3-table-all">
            <tr>
                <th>FATORES</th>
                <th>Sub-fatores</th>
                <th>Peso</th>
                <th>Subtotal</th>
                <th>Nota</th>
            </tr>
            <tr>
                <td>3.1</td>
                <td>4</td>
                <td>0,08</td>
                <td><?php echo $simREMAE31; ?></td>
                <td><?php echo $nota31; ?></td>
            </tr>
            <tr>
                <td>3.2</td>
                <td>3</td>
                <td>0,11</td>
                <td><?php echo $simREMAE32; ?></td>
                <td><?php echo $nota32; ?></td>
            </tr>
            <tr>
                <td>3.3</td>
                <td>3</td>
                <td>0,11</td>
                <td><?php echo $simREMAE33; ?></td>
                <td><?php echo $nota33; ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>10</td>
                <td>-</td>
                <td><?php echo $simREMAETotal; ?></td>
                <td><?php echo $totalREMAE; ?></td>
            </tr>
        </table>
    </div>
</div>
</br></br></br>
</div>

<div>

    <?php
    $dadosEntrevista = array($totalTec, $totalGestao, $totalREMAE);
    $grafico = new C_PhpChartX(array($dadosEntrevista));
    echo '<div class="w3-content">';
    echo '<h1 class="w3-center">GRÁFICO DE RESULTADOS</h1>';
    $grafico->draw(1000,400);
    echo '<h3 class="w3-center">[1]Tecnologia [2]Gestão [3]Relações de Mercado e Ambiente Externo</h1></br></br></br>';
    echo '</div>';
    ?>

    <div class="w3-content">
        <table class="w3-table-all">
            <tr>
                <th>STATUS DE CADA DIRECIONADOR</th>
                <th>NOTA</th>
                <th>NÍVEL</th>
            </tr>
            <tr>
                <td>TECNOLOGIA</td>
                <td><?php echo $totalTec ?></td>
                <td><?php nivelCompet($totalTec) ?></td>
            </tr>
            <tr>
                <td>GESTÃO</td>
                <td><?php echo $totalGestao ?></td>
                <td><?php nivelCompet($totalGestao)?></td>
            </tr>
            <tr>
                <td>RELAÇÕES DE MERCADO E AMBIENTE EXTERNO</td>
                <td><?php echo $totalREMAE ?></td>
                <td><?php nivelCompet($totalREMAE) ?></td>
            </tr>
            <tr>
                <td>SOMA</td>
                <td><?php echo $totalTec+$totalGestao+$totalREMAE ?></td>
                <td><?php nivelCompet($totalTec+$totalGestao+$totalREMAE) ?></td>
            </tr>
        </table>
    </div>
    </br></br></br>
    <div class="w3-padding-32">

        <div class="w3-content">

            <div class="w3-half">
                <table class="w3-table-all w3-content w3-card" style="max-width: 50%">
                    <tr>
                        <th>Direcionador</th>
                        <th colspan="2">Peso</th>
                    </tr>
                    <tr>
                        <td>TECNOLOGIA</td>
                        <td>4,5</td>
                    </tr>
                    <tr>
                        <td>GESTÃO</td>
                        <td>4,5</td>
                    </tr>
                    <tr>
                        <td>RM & AE</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><b>TOTAL</b></td>
                        <td>10</td>
                    </tr>
                </table>
            </div>

            <div class="w3-half">
                <table class="w3-table-all w3-content w3-card">
                    <tr class="w3-gray">
                        <th>NÍVEL DE COMPETITIVIDADE</th>
                        <th>NOTA</th>
                    </tr>
                    <tr class="w3-green">
                        <td>MUITO COMPETITIVA</td>
                        <td>>8,1 = 10</td>
                    </tr>
                    <tr class="w3-light-green">
                        <td>COMPETITIVA</td>
                        <td>>6,1 = 8,0</td>
                    </tr>
                    <tr class="w3-yellow">
                        <td>PARCIALMENTE COMPETITIVA (NEUTRA)</td>
                        <td>>4,1 = 6,0</td>
                    </tr>
                    <tr class="w3-orange">
                        <td>POUCO COMPETITIVA</td>
                        <td>>2,1 = 4,0</td>
                    </tr>
                    <tr class="w3-red">
                        <td>NÃO COMPETITIVA</td>
                        <td>0 < 2</td>
                    </tr>
                </table>
                </br></br></br></br></br></br>
            </div>
        </div>
    </div>
</div>
</body>

</html>