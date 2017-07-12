<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.php');
    }

    $logado = $_SESSION['login'];
    ?>
    <title>Avaliação de Propriedade Rural - ANEXO II</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../w3.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
    <style>
        table, th, td {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
        }
        td {
            padding: 10px;
            text-align: left;
        }
        input[type=text], select {

        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body class="w3-responsive">

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card-2">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="minhaFuncao()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large"><b>INÍCIO</b></a>
        <a href="#s1" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Direcionador: TECNOLOGIA</a>
        <a href="#s2" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Direcionador: GESTÃO</a>
        <a href="#s3" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RELAÇÕES DE MERCADO E AMBIENTE EXTERNO</a>
        <a href="../Controller/logout.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Sair</i></a>
    </div>


    <!-- DEFINIÇÃO DO NAVBAR PARA TELAS PEQUENAS -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
        <a href="#" class="w3-bar-item w3-button">INÍCIO</a>
        <a href="#s1" class="w3-bar-item w3-button">Direcionador: TECNOLOGIA</a>
        <a href="#s2" class="w3-bar-item w3-button">Direcionador: GESTÃO</a>
        <a href="#s3" class="w3-bar-item w3-button">RELAÇÕES DE MERCADO E AMBIENTE EXTERNO</a>
        <a href="../Controller/logout.php" class="w3-bar-item w3-button">Sair</i></a>
    </div>

</div>
<br><br><br>

<div class="w3-opacity w3-right w3-right-align">
    <p class="w3-small w3-black w3-opacity-min w3-center"><b>Logado como<br><?php echo($_SESSION["login"]); ?></b></p>
</div>

<!--ESPECIFICANDO TAMANHO MÁXIMO QUE O CONTEÚDO VAI SER DISPOSTO AO USUÁRIO (1200px máximo) -->
<div class="w3-content" style="max-width:1200px;margin-top:46px">

<!--------------------------------------- INICIO QUESTIONÁRIO ---------------------------------------->

<div class="w3-padding-64" id="ANEXO_2">
<div>
    <h2 class="w3-wide w3-row w3-center"><b>ANEXO 2</b><br><br>ÍNDICE DE COMPETITIVIDADE “DENTRO DA PORTEIRA”<br><br>QUESTIONÁRIO PARA A MENSURAÇÃO DA COMPETITIVIDADE NA BOVINOCULTURA DE CRIA<br><br><br></h2>
</div>
<div>
<p class="w3-card-4 w3-red w3-center">Atenção: Este questionário é composto por perguntas dicotômicas e as mesmas têm unicamente duas respostas possíveis: "Sim" ou "Não" permitindo
identificar claramente a opinião do entrevistado sobre a temática proposta.</p>
</div>

<!--------------------------------------- INICIO FORMULÁRIO ---------------------------------------->
<form action="mostra.php" method="post">
<table  class="w3-table-all w3-border"><br><br>
<h4 class="w3-center">Responder <b>SIM</b> ou <b>NÃO</b>.</h4>
<!--------------------------------------- 1 Direcionador: TECNOLOGIA ---------------------------------------->
<tr id="s1">
    <th>1.</th>
    <th >Direcionador: TECNOLOGIA</th>
    <th colspan="2">RESPOSTA</th>
    <th rowspan="2"><center>OBSERVAÇÕES</center></th>
</tr>
<!--------------------------------------- 1.1 ADEQUAÇÃO DO SISTEMA DE PRODUÇÃO DE CRIA ---------------------------------------->
<tr>
    <td>1.1</td>
    <td><b>ADEQUAÇÃO DO SISTEMA DE PRODUÇÃO DE CRIA</b></td>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>1.1.1. </td>
    <td> Existe um sistema de produção de cria claramente definido?</td>
    <td>
        <input type="radio" name="r111" value="SIM" required >
    </td>
    <td>
        <input type="radio" name="r111" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs111' value="">
    </td>
</tr>
<tr>
    <td>1.1.2. </td>
    <td>Existe algum grau de diferenciação/especialização no sistema em questão?</td>
    <td>
        <input type="radio" name="r112" value="SIM" required></td>
    <td>
        <input type="radio" name="r112" value="NAO" required></td>
    <td>
        <input type="radio" name="obs112" value="Rastreabilidade"> Rastreabilidade &nbsp
        <input type="radio" name="obs112" value="Produção de touros"> Produção de touros &nbsp
        <input type="radio" name="obs112" value="Padrão racial"> Padrão racial <br>
        <input type="radio" name="obs112" value="Outros"> Outros.
            Qual?<input class="w3-input w3-border" type="text" name='obs112_txt' value="">
        </div>
    </td>
</tr>

<tr>
    <td>1.1.3. </td>
    <td>
        Há uma escala adequada (número de animais em relação ao tamanho da propriedade)?
    </td>
    <td>
        <input type="radio" name="r113" value="SIM" required></td>
    <td>
        <input type="radio" name="r113" value="NAO" required></td>
    <td>
        <div> Qual?<input class="w3-input w3-border" type="text" name='obs113_txt' value="">
            *A equipe calcula.
        </div>
    </td>
</tr>
<!--------------------------------------- 1.2 QUALIDADE, MANEJO E ESPÉCIES DE PASTAGENS UTILIZADAS ---------------------------------------->
<tr><th class="w3-green" class="w3-green" colspan="5"></th></tr>
<tr id="s1.2">
    <td rowspan="2">1.2</td>
    <th rowspan="2">QUALIDADE, MANEJO E ESPÉCIES DE PASTAGENS UTILIZADAS</th>
    <th colspan="2">RESPOSTA</th>
    <th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>1.2.1.</td>
    <td>Adota alguma prática para o melhoramento do campo nativo?</td>
    <td>
        <input type="radio" name="r121" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r121" value="NAO" required>
    </td>
    <td>
        <div> Qual?<input class="w3-input w3-border" type="text" name='obs12_txt' id="obs3" value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.2.2.  </td>
    <td>São cultivadas pastagens?</td>
    <td>
        <input type="radio" name="r122" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r122" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs122" value="Inverno"> Inverno &nbsp&nbsp
        <input type="radio" name="obs122" value="Verão"> Verão
    </td>
</tr>

<tr>
    <td>1.2.3. </td>
    <td>Conhece a porcentagem de campo nativo e a percentagem de pastagens cultivadas da propriedade?</td>
    <td>
        <input type="radio" name="r123" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r123" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs123_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.2.4.</td>
    <td>Existe associação entre gramíneas e/ou leguminosas?</td>
    <td>
        <input type="radio" name="r124" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r124" value="NAO" required>
    </td>
    <td>
        <div>
            <input class="w3-input w3-border" type="text" name='obs124_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.2.5.</td>
    <td>São utilizadas técnicas de manejo de pastagens?</td>
    <td>
        <input type="radio" name="r125" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r125" value="NAO" required>
    </td>
    <td>
        <div>
            <input class="w3-input w3-border" type="text" name='obs125_txt' value="">
        </div>
    </td>
</tr>

<tr>
    <td>1.2.6.</td>
    <td>Existe algum grau de degradação nas pastagens (invasoras, clarões no pasto, erosão, não desejáveis, outras)?</td>
    <td>
        <input type="radio" name="r126" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r126" value="NAO" required>
    </td>
    <td>*A equipe deve observar o grau de degradação.
        <div>
            <input class="w3-input w3-border" type="text" name='obs126_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.2.7.</td>
    <td>No caso da existência de invasoras, há um manejo adequado para o controle das mesmas?</td>
    <td>
        <input type="radio" name="r127" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r127" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs127" value="Químico"> Químico
        <input type="radio" name="obs127" value="Físico"> Físico
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs127_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.2.8.</td>
    <td>São feitas análises periodicas do solo?</td>
    <td>
        <input type="radio" name="r128" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r128" value="NAO" required>
    </td>
    <td>
        <div>
            <input class="w3-input w3-border" type="text" name='obs128_txt' value="">
        </div>
    </td>
</tr>

<tr>
    <td>1.2.9.</td>
    <td> Utiliza adubação de base (calagem e NPK)?</td>
    <td>
        <input type="radio" name="r129" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r129" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs129_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.2.10.</td>
    <td> Utiliza adubação de cobertura (uréia/ NPK/ MAP, DAP)?</td>
    <td>
        <input type="radio" name="r1210" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1210" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1210_txt' value="">
    </td>
</tr>
<tr>
    <td>1.2.11</td>
    <td>Existe algum sistema de irrigação para as pastagens?</td>
    <td>
        <input type="radio" name="r1211" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1211" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs1211" value="Pivot"> Pivot &nbsp&nbsp
        <input type="radio" name="obs1211" value="Malha"> Malha
    </td>
</tr>
<!--------------------------------------- 1.3 SUPLEMENTAÇÃO ANIMAL ---------------------------------------->
<tr>
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<tr id="s1.3">
    <td rowspan="2">1.3</td>
    <th rowspan="2">SUPLEMENTAÇÃO ANIMAL</th>
    <th colspan="2">RESPOSTA</th>
    <th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b></td>
    <td><b>NÃO</b></td>
</tr>
<tr>
    <td>1.3.1.</td>
    <td> Utiliza suplementação com sal branco?</td>
    <td>
        <input type="radio" name="r131" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r131" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs131_txt' value="">
    </td>
</tr>
<tr>
    <td>1.3.2.  </td>
    <td>Utiliza suplementação com mistura mineral completa?</td>
    <td>
        <input type="radio" name="r132" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r132" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs132_txt' value="">
    </td>
</tr>

<tr>
    <td>1.3.3. </td>
    <td>  Utiliza suplementação com alimento volumoso?</td>
    <td>
        <input type="radio" name="r133" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r133" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs133" value="Feno"> Feno &nbsp
        <input type="radio" name="obs133" value="Palha"> Palha &nbsp
        <input type="radio" name="obs133" value="Silagem"> Silagem <br>
        <input type="radio" name="obs133" value="Pré Secado"> Pré Secado <br>
        <input type="radio" name="obs133" value="Outro"> Outro
            Qual?<input class="w3-input w3-border" type="text" name='obs133_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.3.4.</td>
    <td> Utiliza suplementação para categorias específicas?</td>
    <td>
        <input type="radio" name="r134" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r134" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs134" value="Creep-feeding"> Creep-feeding &nbsp
        <input type="radio" name="obs134" value="Touros"> Touros <br>
        <input type="radio" name="obs134" value="Terneiros"> Terneiros <br>
        <input type="radio" name="obs134" value="Vacas de cria"> Vacas de cria <br>
        <input type="radio" name="obs134" value="Teor de P (fósforo)"> Teor de P (fósforo)
    </td>
</tr>
<tr>
    <td>1.3.5.  </td>
    <td>Utiliza suplementação proteica em épocas estratégicas?</td>
    <td>
        <input type="radio" name="r135" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r135" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs135_txt' value="">
        </div>
    </td>
</tr>

<tr>
    <td>1.3.6. </td>
    <td>Utiliza suplementação proteica em épocas estratégicas?</td>
    <td>
        <input type="radio" name="r136" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r136" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs136_txt'  value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.3.7.</td>
    <td>Utiliza suplementação energética em épocas estratégicas?</td>
    <td>
        <input type="radio" name="r137" value="SIM" required></td>
    <td>
        <input type="radio" name="r137" value="NAO" required></td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs137_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.3.8.  </td>
    <td>Todos os cochos são cobertos?</td>
    <td>
        <input type="radio" name="r138" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r138" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs138" value="Maioria"> Maioria &nbsp
        <input type="radio" name="obs138" value="Nenhum"> Nenhum
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs138_txt' value="">
        </div>
    </td>
</tr>
<!--------------------------------------- 1.4 INTEGRAÇÃO LAVOURA- PECUÁRIA ---------------------------------------->
<tr id="s1.4">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">1.4</td>
<th rowspan="2">INTEGRAÇÃO LAVOURA- PECUÁRIA</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>1.4.1.</td>
    <td> A propriedade trabalha com integração lavoura- pecuária?</td>
    <td>
        <input type="radio" name="r141" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r141" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs141_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.4.2.  </td>
    <td>A exploração agrícola é feita pelo produtor/ pecuarista?</td>
    <td>
        <input type="radio" name="r142" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r142" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs142_txt' value="">
    </td>
</tr>

<tr>
    <td>1.4.3. </td>
    <td>  Os recursos e maquinários utilizados na agricultura são utilizados na pecuária?</td>
    <td>
        <input type="radio" name="r143" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r143" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs143_txt' value="">
    </td>
</tr>
<tr>
    <td>1.4.4.</td>
    <td> Os funcionários da lavoura atuam na pecuária?</td>
    <td>
        <input type="radio" name="r144" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r144" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs144_txt' value="">
    </td>
</tr>
<!--------------------------------------- 1.5 MANEJO DOS POTREIROS ---------------------------------------->
<tr id="s1.5">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">1.5</td>
<th rowspan="2">MANEJO DOS POTREIROS</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>1.5.1.</td>
    <td> É utilizada subdivisão nos potreiros/ invernada?</td>
    <td>
        <input type="radio" name="r151" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r151" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs151_txt' value="">
    </td>
</tr>
<tr>
    <td>1.5.2.  </td>
    <td>É utilizada cerca elétrica para subdividir os potreiros/ invernada?</td>
    <td>
        <input type="radio" name="r152" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r152" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs152_txt' value="">
    </td>
</tr>

<tr>
    <td>1.5.3. </td>
    <td>Utiliza outra técnica para subdividir os potreiros/ invernada?</td>
    <td>
        <input type="radio" name="r153" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r153" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs153_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.5.4.</td>
    <td>Possui um mapa ilustrando o número de potreiros/ invernada da propriedade?</td>
    <td>
        <input type="radio" name="r154" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r154" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs154_txt' value="">
    </td>
</tr>
<!--------------------------------------- 1.6 MANEJO REPRODUTIVO ---------------------------------------->
<tr id="s1.6">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">1.6</td>
<th rowspan="2">MANEJO REPRODUTIVO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>1.6.1.</td>
    <td>Há uma estação de monta, parição e desmame previamente definida?</td>
    <td>
        <input type="radio" name="r161" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r161" value="NAO" required>
    </td>
    <td>
        <div>
            Qual a duração/ período?<input class="w3-input w3-border" type="text" name='obs161_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.6.2.</td>
    <td>A estação de acasalamento das novilhas é mais curta que a das vacas?</td>
    <td>
        <input type="radio" name="r162" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r162" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs162_txt' value="">
    </td>
</tr>

<tr>
    <td>1.6.3. </td>
    <td>É utilizada alguma técnica de desmame antecipado?</td>
    <td>
        <input type="radio" name="r163" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r163" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs163" value="Precoce"> Precoce &nbsp
        <input type="radio" name="obs163" value="Interrompido/ Temporário"> Interrompido/ Temporário <br>
        <input type="radio" name="obs163" value="Outro"> Outro
            Qual?<input class="w3-input w3-border" type="text" name='obs163_txt' value="">
    </td>
</tr>
<tr>
    <td>1.6.4.</td>
    <td>Utiliza inseminação artificial (IA)?</td>
    <td>
        <input type="radio" name="r164" value="SIM" required></td>
    <td>
        <input type="radio" name="r164" value="NAO" required></td>
    <td>
        <div>
            Quais categorias?<input class="w3-input w3-border" type="text" name='obs164_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.6.5.</td>
    <td>Utiliza inseminação artificial com sincronização de cios?</td>
    <td>
        <input type="radio" name="r165" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r165" value="NAO" required>
    </td>
    <td>
        <div>
            Quais categorias?<input class="w3-input w3-border" type="text" name='obs165_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.6.6.</td>
    <td>Utiliza inseminação artificial em tempo fixo (IATF)?</td>
    <td>
        <input type="radio" name="r166" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r166" value="NAO" required>
    </td>
    <td>
        <div>
            Quais categorias?<input class="w3-input w3-border" type="text" name='obs166_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.6.7.</td>
    <td>Utiliza outra biotécnica reprodutiva?</td>
    <td>
        <input type="radio" name="r167" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r167" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs167" value="Transferência de embriões"> Transferência de embriões &nbsp
        <input type="radio" name="obs167" value="FIV"> FIV <br>
        <input type="radio" name="obs167" value="Outra"> Outra
            Qual?<input class="w3-input w3-border" type="text" name='obs167_txt' value="">
        
    </td>
</tr>
<tr>
    <td>1.6.8.</td>
    <td>A relação touro/ vaca é adequada?</td>
    <td>
        <input type="radio" name="r168" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r168" value="NAO" required>
    </td>
    <td>
        <div> Quais categorias?<input class="w3-input w3-border" type="text" name='obs168_txt' value="">
            *A equipe calcula.
        </div>
    </td>
</tr>
<tr>
    <td>1.6.9.</td>
    <td>A categoria de vaca primíparas, vazias no toque, são sempre descartadas?</td>
    <td>
        <input type="radio" name="r169" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r169" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs169_txt' value="">
    </td>
</tr>
<tr>
    <td>1.6.10.</td>
    <td>A categoria de vaca multíparas, vazias no toque, são sempre descartadas?</td>
    <td>
        <input type="radio" name="r1610" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1610" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1610_txt' value="">
    </td>
</tr>
<tr>
    <td>1.6.11.</td>
    <td>É feito rodízio de touros dentro da estação de monta?</td>
    <td>
        <input type="radio" name="r1611" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1611" value="NAO" required>
    </td>
    <td>*Plantel
        <input class="w3-input w3-border" type="text" name='obs1611_txt' value="">
    </td>
</tr>
<tr>
    <td>1.6.12. </td>
    <td>Os touros são separados por lotes?</td>
    <td>
        <input type="radio" name="r1612" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1612" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs1612" value="Idade"> Idade &nbsp
        <input type="radio" name="obs1612" value="Hierarquia"> Hierarquia &nbsp
        <input type="radio" name="obs1612" value="Raça"> Raça <br>
        <input type="radio" name="obs1612" value="Chifres"> Chifres &nbsp
        <input class="w3-input w3-border" type="text" name='obs1612_txt' value="">
    </td>
</tr>
<tr>
    <td>1.6.13.</td>
    <td>É feito o exame andrológico nos touros anualmente?</td>
    <td>
        <input type="radio" name="r1613" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1613" value="NAO" required>
    </td>
    <td>
        <div>
            Quando?<input class="w3-input w3-border" type="text" name='obs1613_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.6.14.</td>
    <td>Existe um peso mínimo alvo para o primeiro acasalamento das novilhas?</td>
    <td>
        <input type="radio" name="r1614" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1614" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs1614_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.6.15.</td>
    <td>Utiliza o ECC como uma ferramenta de manejo em épocas estratégicas?</td>
    <td>
        <input type="radio" name="r1615" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1615" value="NAO" required>
    </td>
    <td>
        <div>
            Quando?<input class="w3-input w3-border" type="text" name='obs1615_txt' value="">
        </div>
    </td>
</tr>
<!--------------------------------------- 1.7 GENÉTICA DO REBANHO ---------------------------------------->
<tr id="s1.7">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">1.7</td>
<th rowspan="2">GENÉTICA DO REBANHO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>1.7.1.</td>
    <td>O rebanho apresenta um padrão racial adequado ao ambiente?</td>
    <td>
        <input type="radio" name="r171" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r171" value="NAO" required>
    </td>
    <td>*A equipe deve observar.
        <input class="w3-input w3-border" type="text" name='obs171_txt' value="">
    </td>
</tr>
<tr>
    <td>1.7.2.</td>
    <td>Utiliza ferramentas de melhoramento genético animal para a seleção dos seus animais?</td>
    <td>
        <input type="radio" name="r172" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r172" value="NAO" required>
    </td>
    <td>
        Qual?<br/>
        <input type="radio" name="obs172" value="Cruzamento"> Cruzamento &nbsp
        <input type="radio" name="obs172" value="Seleção"> Seleção &nbsp
        <input type="radio" name="obs172" value="DEP’s"> DEP’s <br>
        <input type="radio" name="obs172" value="Molecular"> Molecular &nbsp
        <input type="radio" name="obs172" value="Sumário de touros"> Sumário de touros
    </td>
</tr>

<tr>
    <td>1.7.3.</td>
    <td>Os touros são provenientes/ adquiridos de outras propriedades que utilizam programas de melhoramento genético?</td>
    <td>
        <input type="radio" name="r173" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r173" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs173_txt' value="">
    </td>
</tr>
<!--------------------------------------- 1.8 SANIDADE DO REBANHO ---------------------------------------->
<tr id="s1.8">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
</tr>
<td rowspan="2">1.8</td>
<th rowspan="2">SANIDADE DO REBANHO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>1.8.1.</td>
    <td>Existe um calendário sanitário pré definido de acordo com o ambiente da propriedade?</td>
    <td>
        <input type="radio" name="r181" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r181" value="NAO" required>
    </td>
    <td>*Verificar o plano.
        <input class="w3-input w3-border" type="text" name='obs181_txt' value="">
    </td>
</tr>
<tr>
    <td>1.8.2.</td>
    <td>O calendário sanitário é acessível a todos os colaboradores?</td>
    <td>
        <input type="radio" name="r182" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r182" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs182_txt' value="">
    </td>
</tr>

<tr>
    <td>1.8.3</td>
    <td>São aplicadas as vacinas contra as principais doenças endêmicas?</td>
    <td>
        <input type="radio" name="r183" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r183" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs183" value="Clostridiose"> Clostridiose &nbsp&nbsp
        <input type="radio" name="obs183" value="Raiva"> Raiva &nbsp&nbsp
        <input type="radio" name="obs183" value="Aftosa"> Aftosa <br>
        <input type="radio" name="obs183" value="Aftosa"> Brucelose &nbsp&nbsp
        <input type="radio" name="obs183" value="Outro"> Outras. Qual?<input class="w3-input w3-border" type="text" name='obs183_txt' value="">
  
    </td>
</tr>
<tr>
    <td>1.8.4.</td>
    <td>Utiliza inseminação artificial (IA)?</td>
    <td>
        <input type="radio" name="r184" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r184" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs184" value="IBR"> IBR &nbsp&nbsp
        <input type="radio" name="obs184" value="BVD"> BVD &nbsp&nbsp
        <input type="radio" name="obs184" value="Leptospirose"> Leptospirose <br>
        <input type="radio" name="obs184" value="Campilobacteriose"> Campilobacteriose
        <input type="radio" name="obs184" value="Outro"> Outra. Qual?<input class="w3-input w3-border" type="text" name='obs184_txt' value="">
    </td>
</tr>
<tr>
    <td>1.8.5.</td>
    <td>Utiliza inseminação artificial com sincronização de cios?</td>
    <td>
        <input type="radio" name="r185" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r185" value="NAO" required>
    </td>
    <td>*Verificar o calendário.
        <input class="w3-input w3-border" type="text" name='obs185_txt' value="">
    </td>
</tr>
<tr>
    <td>1.8.6.</td>
    <td>Utiliza inseminação artificial em tempo fixo (IATF)?</td>
    <td>
        <input type="radio" name="r186" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r186" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs186_txt' value="">
    </td>
</tr>
<tr>
    <td>1.8.7. </td>
    <td>Utiliza outra biotécnica reprodutiva?</td>
    <td>
        <input type="radio" name="r187" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r187" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs187" value="Injetável"> Injetável &nbsp&nbsp&nbsp
        <input type="radio" name="obs187" value="Tópica"> Tópica <br>
        <input type="radio" name="obs187" value="Outra"> Outra. Qual?<input class="w3-input w3-border" type="text" name='obs187_txt' value="">
      
    </td>
</tr>
<tr>
    <td>1.8.8.</td>
    <td>A relação touro/ vaca é adequada?</td>
    <td>
        <input type="radio" name="r188" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r188" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs188" value="Sorologia"> Sorologia &nbsp
        <input type="radio" name="obs188" value="Necrópsia"> Necrópsia &nbsp
        <input type="radio" name="obs188" value="Outra"> Outra
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs188_txt' value="">
        </div></td>
</tr>
<!--------------------------------------- 1.9 ASSESSORIA TÉCNICA ---------------------------------------->
<tr id="s1.9">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">1.9</td>
<th rowspan="2">ASSESSORIA TÉCNICA</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b></td>
</tr>
<tr>
    <td>1.9.1.</td>
    <td>A propriedade possui um profissional efetivo no seu quadro funcional?</td>
    <td>
        <input type="radio" name="r191" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r191" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs191" value="Veterinário"> Veterinário &nbsp&nbsp
        <input type="radio" name="obs191" value="Zootecnista"> Zootecnista &nbsp&nbsp
        <input type="radio" name="obs191" value="Agrônomo"> Agrônomo <br>
        <input type="radio" name="obs191" value="Outro"> Outro. Qual?<input class="w3-input w3-border" type="text" name='obs191_txt' value="">
    </td>
</tr>
<tr>
    <td>1.9.2.  </td>
    <td>Utiliza assessoria técnica periodicamente na propriedade?</td>
    <td>
        <input type="radio" name="r192" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r192" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs192" value="EMATER"> EMATER &nbsp
        <input type="radio" name="obs192" value="Universidade"> Universidade <br>
        <input type="radio" name="obs192" value="Consultoria"> Consultoria <br>
        <input type="radio" name="obs192" value="Outro"> Outra. Qual?<input class="w3-input w3-border" type="text" name='obs192_txt' value="">
    </td>
</tr>

<tr>
    <td>1.9.3. </td>
    <td>Existe prestação de serviço pré-definido/ pontuais?</td>
    <td>
        <input type="radio" name="r193" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r193" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs193" value="Toque"> Toque &nbsp
        <input type="radio" name="obs193" value="Andrológico"> Andrológico <br>
        <input type="radio" name="obs193" value="Pastagens"> Pastagens <br>
        <input type="radio" name="obs193" value="IATF"> IATF &nbsp
        <input type="radio" name="obs193" value="Clínica"> Clínica &nbsp
        <input type="radio" name="obs193" value="Cirúrgica"> Cirúrgica <br>
        <input type="radio" name="obs193" value="Outro"> Outro. Qual?<input class="w3-input w3-border" type="text" name='obs193_txt' value="">
    </td>
</tr>
<!--------------------------------------- 1.10 BEM ESTAR ANIMAL E MANEJO COM OS ANIMAIS ---------------------------------------->
<tr id="s1.10">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">1.10</td>
<th rowspan="2">BEM ESTAR ANIMAL E MANEJO COM OS ANIMAIS</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>1.10.1.</td>
    <td>Os animais são manejados com intervalo regular nas mangueiras?</td>
    <td>
        <input type="radio" name="r1101" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1101" value="NAO" required>
    </td>
    <td>
        <div>
            Qual intervalo?<input class="w3-input w3-border" type="text" name='obs1101_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>1.10.2.</td>
    <td>Os animais são agrupados a campo regularmente (parar rodeio)?</td>
    <td>
        <input type="radio" name="r1102" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1102" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1102_txt' value="">
    </td>
</tr>

<tr>
    <td>1.10.3.</td>
    <td>Os animais são manejados nas mangueiras por categoria?</td>
    <td>
        <input type="radio" name="r1103" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1103" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1103_txt' value="">
    </td>
</tr>
<tr>
    <td>1.10.4.</td>
    <td>Utiliza tronco de contenção inovador, adequado as boas práticas de manejo?</td>
    <td>
        <input type="radio" name="r1104" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1104" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1104_txt' value="">
    </td>
</tr>
<tr>
    <td>1.10.5.</td>
    <td>Utiliza cães no manejo com bovinos?</td>
    <td>
        <input type="radio" name="r1105" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1105" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1105_txt' value="">
    </td>
</tr>
<tr>
    <td>1.10.6.</td>
    <td>Utiliza objetos perfuro cortantes/ ponte agudos para tocar os animais?</td>
    <td>
        <input type="radio" name="r1106" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1106" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1106_txt' value="">
    </td>
</tr>
<tr>
    <td>1.10.7. </td>
    <td>Utiliza bandeirolas ou outros métodos para movimentar os animais?</td>
    <td>
        <input type="radio" name="r1107" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1107" value=NAO>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1107_txt' value="">
    </td>
</tr>
<tr>
    <td>1.10.8.</td>
    <td>As instalações são adequadas para manejar os animais?</td>
    <td>
        <input type="radio" name="r1108" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1108" value="NAO" required>
    </td>
    <td>*A equipe deve observar.
        <input class="w3-input w3-border" type="text" name='obs1108_txt' value="">
    </td>
</tr>
<tr>
    <td>1.10.9.</td>
    <td>Seus funcionários trabalham a pé na mangueira?</td>
    <td>
        <input type="radio" name="r1109" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r1109" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs1109_txt' value="">
    </td>
</tr>

<!--------------------------------------- 2 Direcionador: GESTÃO ---------------------------------------->
<tr id="s2">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<tr>
    <th>2.</th>
    <th>Direcionador: GESTÃO</th>
    <th colspan="2">RESPOSTA</th>
    <th rowspan="2">OBSERVAÇÕES</th>
</tr>
<!--------------------------------------- 2.1 RECURSOS HUMANOS ---------------------------------------->
<tr>
    <td>2.1</td>
    <td><b>RECURSOS HUMANOS</b></td>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>

<tr>
    <td>2.1.1</td>
    <td>Os colaboradores possuem vínculo empregatício?</td>
    <td>
        <input type="radio" name="r211" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r211" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs211_txt' value="">
    </td>
</tr>
<tr>
    <td>2.1.2.</td>
    <td>Existe uma hierarquia funcional definida (cargos de acordo com o perfil de cada um)?</td>
    <td>
        <input type="radio" name="r212" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r212" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs212" value="Perfil"> Perfil &nbsp
        <input type="radio" name="obs212" value="Tempo de empresa"> Tempo de empresa <br>
        <input type="radio" name="obs212" value="Indicação"> Indicação <br>
        <input type="radio" name="obs212" value="IATF"> IATF
        <input type="radio" name="obs212" value="Outro"> Outro
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='r212_txt' value="">
        </div>
    </td>
</tr>

<tr>
    <td>2.1.3.</td>
    <td>Existe um plano de valorização da carreira?</td>
    <td>
        <input type="radio" name="r213" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r213" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs213" value="PL"> PL &nbsp&nbsp
        <input type="radio" name="obs213" value="Gratificações"> Gratificações <br>
        <input type="radio" name="obs213" value="Doação de animais"> Doação de animais <br>
        <input type="radio" name="obs213" value="Outro, qual?"> Outro
        <div>Qual?<input class="w3-input w3-border" type="text" name='obs213_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.1.4.</td>
    <td>A maioria de seus colaboradores permanece mais de 2 anos na propriedade?</td>
    <td>
        <input type="radio" name="r214" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r214" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs214_txt' value="">
    </td>
</tr>
<tr>
    <td>2.1.5.</td>
    <td>100% dos seus colaboradores são alfabetizados?</td>
    <td>
        <input type="radio" name="r215" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r215" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs215_txt' value="">
    </td>
</tr>
<tr>
    <td>2.1.6.</td>
    <td>Existe um projeto/ ação concreta de bem estar social dos colaboradores?</td>
    <td>
        <input type="radio" name="r216" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r216" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs216" value="Escola"> Escola &nbsp&nbsp
        <input type="radio" name="obs216" value="Televisão"> Televisão <br>
        <input type="radio" name="obs216" value="Quadra de esportes"> Quadra de esportes <br>
        <input type="radio" name="obs216" value="Internet"> Internet &nbsp&nbsp
        <input type="radio" name="obs216" value="Plano de saúde"> Plano de saúde <br>
        <input type="radio" name="obs216" value="Festa de confraternização"> Festa de confraternização <br>
        <input type="radio" name="obs216" value="Outros"> Outros
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs216_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.1.7. </td>
    <td>Os colaboradores fazem cursos periodicamente?</td>
    <td>
        <input type="radio" name="r217" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r217" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs217_txt' value="">
    </td>
</tr>
<tr>
    <td>2.1.8.</td>
    <td>Os colaboradores são treinados para utilizar o manejo racional com os animais?</td>
    <td>
        <input type="radio" name="r218" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r218" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs218_txt' value="">
    </td>
</tr>
<tr>
    <td>2.1.9.</td>
    <td>A relação número de funcionários/ número de animais do sistema é adequada?</td>
    <td>
        <input type="radio" name="r219" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r219" value="NAO" required>
    </td>
    <td>*A equipe calcula.
        <input class="w3-input w3-border" type="text" name='obs219_txt' value="">
    </td>
</tr>
<!--------------------------------------- 2.2 PATRIMÔNIO ---------------------------------------->
<tr id="s2.2">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.2</td>
<th rowspan="2">PATRIMÔNIO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>2.2.1.</td>
    <td>Há um controle de estoque dos animais?</td>
    <td>
        <input type="radio" name="r221" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r221" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs221" value="Mensal"> Mensal &nbsp&nbsp
        <input type="radio" name="obs221" value="Semestral"> Semestral &nbsp&nbsp
        <input type="radio" name="obs221" value="Anual"> Anual <br>
        <input type="radio" name="obs221" value="IATF"> IATF <br>
        <input type="radio" name="obs221" value="Outro"> Outro
        <div>
            Qual?<input type="text" name='obs221_txt' id="obs33" value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.2.2.</td>
    <td>Há um controle patrimonial de máquinas e implementos?</td>
    <td>
        <input type="radio" name="r222" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r222" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs222_txt' value="">
    </td>
</tr>

<tr>
    <td>2.2.3. </td>
    <td>Há um controle de estocagem de insumos e implementos?</td>
    <td>
        <input type="radio" name="r223" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r223" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs223_txt' value="">
    </td>
</tr>
<tr>
    <td>2.2.4.</td>
    <td>A empresa realiza o balanço patrimonial anual?</td>
    <td>
        <input type="radio" name="r224" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r224" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs224_txt' value="">
    </td>
</tr>
<!--------------------------------------- 2.3 ORÇAMENTO E FLUXO DE CAIXA ---------------------------------------->
<tr id="s2.3">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.3</td>
<th rowspan="2">ORÇAMENTO E FLUXO DE CAIXA</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>

<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b></td>
</tr>
<tr>
    <td>2.3.1.</td>
    <td>São mensuradas as receitas da propriedade?</td>
    <td>
        <input type="radio" name="r231" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r231" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs231_txt' value="">
    </td>
</tr>
<tr>
    <td>2.3.2.  </td>
    <td>São mensuradas as despesas da propriedade (valor desembolsado)?</td>
    <td>
        <input type="radio" name="r232" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r232" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs232_txt' value="">
    </td>
</tr>

<tr>
    <td>2.3.3. </td>
    <td>Utiliza orçamentações para investimentos futuros?</td>
    <td>
        <input type="radio" name="r233" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r233" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs233_txt' value="">
    </td>
</tr>
<tr>
    <td>2.3.4.</td>
    <td>Existe um fluxo de caixa em uso na propriedade (orçado e realizado)?</td>
    <td>
        <input type="radio" name="r234" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r234" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs234_txt' value="">
    </td>
</tr>
<!--------------------------------------- 2.4 PLANEJAMENTO ESTRATÉGICO ---------------------------------------->
<tr id="s2.4">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.4</td>
<th rowspan="2">PLANEJAMENTO ESTRATÉGICO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>

<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>2.4.1.</td>
    <td>A empresa possui um planejamento estratégico ou plano de negócios?</td>
    <td>
        <input type="radio" name="r241" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r241" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs241_txt' value="">
    </td>
</tr>
<tr>
    <td>2.4.2.  </td>
    <td>O planejamento estratégico é utilizado como uma ferramenta na tomada de decisão?</td>
    <td>
        <input type="radio" name="r242" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r242" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs242_txt' value="">
    </td>
</tr>
<!--------------------------------------- 2.5 CONTROLE DE CUSTOS DE PRODUÇÃO ---------------------------------------->
<tr id="s2.5">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.5</td>
<th rowspan="2">CONTROLE DE CUSTOS DE PRODUÇÃO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>2.5.1.</td>
    <td>A propriedade mensura seus custos totais (fixos + variáveis)?</td>
    <td>
        <input type="radio" name="r251" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r251" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs251_txt' value="">
    </td>
</tr>
<tr>
    <td>2.5.2.  </td>
    <td>Existe um plano de contas previamente definido?</td>
    <td>
        <input type="radio" name="r252" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r252" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs252_txt' value="">
    </td>
</tr>

<tr>
    <td>2.5.3. </td>
    <td>Existe um controle por centro de custos?</td>
    <td>
        <input type="radio" name="r253" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r253" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs253_txt' value="">
    </td>
</tr>
<tr>
    <td>2.5.4.</td>
    <td>Conhece o custo unitário do produto final (bezerro)?</td>
    <td>
        <input type="radio" name="r254" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r254" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs254_txt' value="">
    </td>
</tr>
<tr>
    <td>2.5.5.  </td>
    <td>A depreciação dos bens é calculada?</td>
    <td>
        <input type="radio" name="r255" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r255" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs255_txt' value="">
    </td>
</tr>

<tr>
    <td>2.5.6. </td>
    <td>O custo de oportunidade da terra é calculado?</td>
    <td>
        <input type="radio" name="r256" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r256" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs256_txt' value="">
    </td>
</tr>
<tr>
    <td>2.5.7.</td>
    <td>O custo de oportunidade do capital é calculado?</td>
    <td>
        <input type="radio" name="r257" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r257" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs257_txt' value="">
    </td>
</tr>
<!--------------------------------------- 2.6 CÁLCULO DE INDICADORES FINANCEIROS ---------------------------------------->
<tr id="s2.6">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.6</td>
<th rowspan="2">CÁLCULO DE INDICADORES FINANCEIROS</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>2.6.1.</td>
    <td>Calcula a margem bruta da sua atividade?</td>
    <td>
        <input type="radio" name="r261" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r261" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs261_txt' value="">
    </td>
</tr>
<tr>
    <td>2.6.2.</td>
    <td>Outros indicadores financeiros são calculados?</td>
    <td>
        <input type="radio" name="r262" value="SIM" required>
        </td>
    <td>
        <input type="radio" name="r262" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs262" value="Margem operacional"> Margem operacional <br>
        <input type="radio" name="obs262" value="Margem líquida"> Margem líquida <br>
        <input type="radio" name="obs262" value="Rentabilidade"> Rentabilidade &nbsp&nbsp
        <input type="radio" name="obs262" value="Lucratividade"> Lucratividade <br>
        <input type="radio" name="obs262" value="Outro"> Outro
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs262_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.6.3.</td>
    <td>Mensura indicadores financeiros de projetos e investimentos futuros?</td>
    <td>
        <input type="radio" name="r263" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r263" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs263" value="VPL"> VPL &nbsp&nbsp
        <input type="radio" name="obs263" value="payback"> payback <br>
        <input type="radio" name="obs263" value="TIR"> TIR &nbsp&nbsp
        <input type="radio" name="obs263" value="Custo/Benefício"> Custo/Benefício &nbsp&nbsp
        <div>
            <input class="w3-input w3-border" type="text" name='obs263_txt' value="">
        </div>
    </td>
</tr>

<!--------------------------------------- 2.7 IDENTIFICAÇÃO E GESTÃO DO REBANHO ---------------------------------------->
<tr id="s2.7">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.7</td>
<th rowspan="2">IDENTIFICAÇÃO E GESTÃO DO REBANHO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>
</tr>
<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>2.7.1.</td>
    <td>Os animais possuem identificação individual?</td>
    <td>
        <input type="radio" name="r271" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r271" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs271" value="Botton"> Botton &nbsp&nbsp
        <input type="radio" name="obs271" value="Brinco"> Brinco &nbsp&nbsp
        <input type="radio" name="obs271" value="Tatuagem">Tatuagem <br>
        <input type="radio" name="obs271" value="Marca de fogo com número"> Marca de fogo com número <br>
        <input type="radio" name="obs271" value="Outro"> Outro
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs271_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.7.2.</td>
    <td>Na propriedade, existe um sistema armazenamento de dados?</td>
    <td>
        <input type="radio" name="r272" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r272" value="NAO" required>
    </td>
    <td>
        <input type="radio" name="obs272" value="Manual"> Manual &nbsp&nbsp
        <input type="radio" name="obs272" value="Informatizado"> Informatizado &nbsp&nbsp
        <div>
            <input class="w3-input w3-border" type="text" name='obs272_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.7.3.</td>
    <td>A identificação dos animais é utilizada como uma ferramenta de manejo para a tomada de decisão?</td>
    <td>
        <input type="radio" name="r273" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r273" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs273_txt' value="">
    </td>
</tr>
<tr>
    <td>2.7.4.</td>
    <td>Os animais são rastreados?</td>
    <td>
        <input type="radio" name="r274" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r274" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs274_txt' value="">
    </td>
</tr>

<!--------------------------------------- 2.8 COMERCIALIZAÇÃO ---------------------------------------->
<tr id="s2.8">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.8</td>
<th rowspan="2">COMERCIALIZAÇÃO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>

<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>2.8.1.</td>
    <td>As vacas de descarte são terminadas na propriedade (vendidas para frigoríficos)?</td>
    <td>
        <input type="radio" name="r281" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r281" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs281_txt' value="">
    </td>
</tr>
<tr>
    <td>2.8.2.  </td>
    <td>Recebe um valor adicional pelo seu produto de melhor qualidade ( valor agregado)?</td>
    <td>
        <input type="radio" name="r282" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r282" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs282_txt' value="">
    </td>
</tr>

<tr>
    <td>2.8.3. </td>
    <td>Utiliza alguma ferramenta de gerenciamento de risco?</td>
    <td>
        <input type="radio" name="r283" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r283" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs283_txt' value="">
    </td>
</tr>
<tr>
    <td>2.8.4.</td>
    <td>Oferta animais em feiras de terneiros ou mercado direcionado?</td>
    <td>
        <input type="radio" name="r284" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r284" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs284_txt' value="">
    </td>
</tr>

<!--------------------------------------- 2.9 INFORMATIZAÇÃO DA PROPRIEDADE ---------------------------------------->
<tr id="s2.9">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.9</td>
<th rowspan="2">INFORMATIZAÇÃO DA PROPRIEDADE</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>

<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>2.9.1.</td>
    <td>A propriedade possui computador?</td>
    <td>
        <input type="radio" name="r291" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r291" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs291_txt' value="">
    </td>
</tr>
<tr>
    <td>2.9.2.  </td>
    <td>Utiliza algum software de gestão rural aplicado a pecuária?</td>
    <td>
        <input type="radio" name="r292" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r292" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs292_txt' value="">
    </td>
</tr>

<tr>
    <td>2.9.3. </td>
    <td>São utilizadas planilhas de Excel ou similar para auxiliar no controle/processamento das informações?</td>
    <td>
        <input type="radio" name="r293" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r293" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs293_txt' value="">
    </td>
</tr>
<!--------------------------------------- 2.10 CONTROLE ZOOTÉCNICO ---------------------------------------->
<tr id="s2.10">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<td rowspan="2">2.10</td>
<th rowspan="2">CONTROLE ZOOTÉCNICO</th>
<th colspan="2">RESPOSTA</th>
<th rowspan="2">OBSERVAÇÕES</th>

<tr>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>2.10.1.</td>
    <td>Mensura a taxa de prenhez?</td>
    <td>
        <input type="radio" name="r2101" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r2101" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs2101_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.10.2.  </td>
    <td>Mensura a taxa de natalidade?</td>
    <td>
        <input type="radio" name="r2102" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r2102" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs2102_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.10.3. </td>
    <td>Mensura a taxa de desmame?</td>
    <td>
        <input type="radio" name="r2103" value="SIM" required></td>
    <td>
        <input type="radio" name="r2103" value="NAO" required></td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs2103_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.10.4.</td>
    <td>Mensura as perdas entre o toque/ nascimento/ desmame?</td>
    <td>
        <input type="radio" name="r2104" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r2104" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs2104_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.10.5.  </td>
    <td>Mensura a taxa de desfrute?</td>
    <td>
        <input type="radio" name="r2105" value="SIM" required></td>
    <td>
        <input type="radio" name="r2105" value="NAO" required></td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs2105_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.10.6. </td>
    <td>Mensura a taxa de mortalidade?</td>
    <td>
        <input type="radio" name="r2106" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r2106" value="NAO" required>
    </td>
    <td>
        <div>
            Qual?<input class="w3-input w3-border" type="text" name='obs2106_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>2.10.7.</td>
    <td>Há um controle de produtividade (Kg/ha)?</td>
    <td>
        <input type="radio" name="r2107" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r2107" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs2107_txt' value="">
    </td>
</tr>
<tr>
    <td>2.10.8.</td>
    <td>Há um controle de produtividade de kg de terneiro/vaca/ano?</td>
    <td>
        <input type="radio" name="r2108" value="SIM" required></td>
    <td>
        <input type="radio" name="r2108" value="NAO" required></td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs2108_txt' value="">
    </td>
</tr>
<tr>
    <td>2.10.9.</td>
    <td>Possui balança? </td>
    <td>
        <input type="radio" name="r2109" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r2109" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs2109_txt' value="">
    </td>
</tr>
<tr>
    <td>2.10.10. </td>
    <td>A balança é utilizada com frequência como uma ferramenta de controle do desenvolvimento dos animais?</td>
    <td>
        <input type="radio" name="r21010" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r21010" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs21010_txt' value="">
    </td>
</tr>
<!--------------------------------------- 3 RELAÇÕES DE MERCADO E AMBIENTE EXTERNO ---------------------------------------->
<tr id="s3">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<tr>
    <th>3.</th>
    <th>RELAÇÕES DE MERCADO E AMBIENTE EXTERNO</th>
    <th colspan="2">RESPOSTA</th>
    <th rowspan="2">OBSERVAÇÕES</th>
</tr>
<!--------------------------------------- 3.1 RELAÇÃO FORNECEDOR/ PECUARISTA/ COMPRADOR ---------------------------------------->
<tr>
    <td>3.1</td>
    <td>RELAÇÃO FORNECEDOR/ PECUARISTA/ COMPRADOR</td>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>3.1.1.</td>
    <td>Existe um grau de fidelidade/ confiança com seus clientes?</td>
    <td>
        <input type="radio" name="r311" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r311" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs311_txt' value="">
    </td>
</tr>
<tr>
    <td>3.1.2.</td>
    <td>Existe um grau de fidelidade/confiança com empresas de insumos (lojas agropecuárias)?</td>
    <td>
        <input type="radio" name="r312" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r312" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs312_txt' value="">
    </td>
</tr>
<tr>
    <td>3.1.3. </td>
    <td>Existe um suporte técnico na compra de seus insumos?</td>
    <td>
        <input type="radio" name="r313" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r313" value="NAO" required>
    </td>
    <td>
        <div>Pós venda!<input class="w3-input w3-border" type="text" name='obs313_txt' value="">
        </div>
    </td>
</tr>
<tr>
    <td>3.1.4.</td>
    <td>Existe um suporte técnico e satisfação na venda de seus produtos?</td>
    <td>
        <input type="radio" name="r314" value="SIM" required></td>
    <td>
        <input type="radio" name="r314" value="NAO" required></td>
    <td>
        <div>
            Pós venda!<input class="w3-input w3-border" type="text" name='obs314_txt' value="">
        </div>
    </td>
</tr>
<!--------------------------------------- 3.2 ACESSO A INOVAÇÕES TECNOLÓGICAS ---------------------------------------->
<tr id="s3.2">
    <th class="w3-green" class="w3-green" colspan="5"></th>
</tr>
<tr>
    <td>3.2</td>
    <td><b>ACESSO A INOVAÇÕES TECNOLÓGICAS</b></td>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>3.2.1.</td>
    <td>Existe Universidade ou Centros de pesquisa na região da propriedade?</td>
    <td>
        <input type="radio" name="r321" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r321" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs321_txt' value="">
    </td>
</tr>
<tr>
    <td>3.2.2.</td>
    <td>São geradas ações concretas de extensão rural que beneficiem o produtor?</td>
    <td>
        <input type="radio" name="r322" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r322" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs322_txt' value="">
    </td>
</tr>
<tr>
    <td>3.2.3. </td>
    <td>As tecnologias difundidas/ disseminadas são utilizadas no seu sistema de produção?</td>
    <td>
        <input type="radio" name="r323" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r323" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs323_txt' value="">
    </td>
</tr>
<tr><th class="w3-green" colspan="5"></th></tr>
<tr>
    <td>3.3</td>
    <td><b>ORGANIZAÇÃO DOS PRODUTORES</b></td>
    <td><b>SIM</b> </td>
    <td><b>NÃO</b> </td>
</tr>
<tr>
    <td>3.3.1.</td>
    <td>Participa de alguma cooperativa/ associação/ aliança estratégica de produtores rurais?</td>
    <td>
        <input type="radio" name="r331" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r331" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs331_txt' value="">
    </td>
</tr>
<tr>
    <td>3.3.2.  </td>
    <td>Existe uma organização no sentido de barganhar melhores preços na compra e venda de seus produtos e insumos?</td>
    <td>
        <input type="radio" name="r332" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r332" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs332_txt' value="">
    </td>
</tr>
<tr>
    <td>3.3.3. </td>
    <td>Existe troca de informação e experiência entre os pecuaristas?</td>
    <td>
        <input type="radio" name="r333" value="SIM" required>
    </td>
    <td>
        <input type="radio" name="r333" value="NAO" required>
    </td>
    <td>
        <input class="w3-input w3-border" type="text" name='obs333_txt' value="">
    </td>
</tr>
</table>

<br><br>

<div>
    <input class="w3-xlarge w3-center" type=submit value="Salvar dados">
</div>
</form>
<!--------------------------------------- FIM FORMULÁRIO ---------------------------------------->
</div>
<!--------------------------------------- FIM QUESTIONÁRIO ---------------------------------------->
<br><br><br><br>

</div>
</body>

</html>