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
    <title>Avaliação de Propriedade Rural - ANEXO I</title>
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
        <a href="#tabela_1" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Identificação</a>
        <a href="#tabela_2" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Tipo</a>
        <a href="#tabela_3" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Atividades</a>
        <a href="#tabela_4" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Perfil</a>
        <a href="#tabela_5" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Padrão Racial</a>
        <a href="#tabela_6" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Estrutura</a>
        <a href="#tabela_7" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Colaboradores</a>
        <a href="../Controller/logout.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Sair</i></a>
    </div>

    <!-- DEFINIÇÃO DO NAVBAR PARA TELAS PEQUENAS -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
        <a href="#tabela_1" class="w3-bar-item w3-button">Identificação</a>
        <a href="#tabela_2" class="w3-bar-item w3-button">Tipo</a>
        <a href="#tabela_3" class="w3-bar-item w3-button">Atividades</a>
        <a href="#tabela_4" class="w3-bar-item w3-button">Perfil</a>
        <a href="#tabela_5" class="w3-bar-item w3-button">Padrão Racial</a>
        <a href="#tabela_6" class="w3-bar-item w3-button">Estrutura</a>
        <a href="#tabela_7" class="w3-bar-item w3-button">Colaboradores</a>
        <a href="../Controller/logout.php" class="w3-bar-item w3-button">Sair</i></a>
    </div>

</div>
<br><br><br>

<div class="w3-opacity w3-right w3-right-align">
    <p class="w3-small w3-black w3-opacity-min w3-center"><b>Logado como<br><?php echo($_SESSION["login"]); ?></b></p>
</div>

<!--ESPECIFICANDO TAMANHO MÁXIMO QUE O CONTEÚDO VAI SER DISPOSTO AO USUÁRIO (1200px máximo) -->
<div class="w3-content w3-w3-vivid-green" style="max-width:1200px;margin-top:46px">

<!--COMEÇO DO CONTEÚDO DO ANEXO 1 -->
<div class="w3-padding-64" id="ANEXO_1">
<h2 class="w3-wide w3-row w3-center"><b>ANEXO 1</b><br><br>ÍNDICE DE COMPETITIVIDADE “DENTRO DA PORTEIRA”<br><br> <u>CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO</u><br><br><br></h2>

<!--------------------------------------- INICIO FORMULÁRIO --------------------------------------->
<form action="anexo2.php" method="post">

<!--COMEÇO TABELA 1 -->
<div class="w3-container w3-content w3-center w3-padding-64" >
    <div class="w3-container w3-card-4 w3-margin" id="tabela_1">
        <h3 class="w3-center">Tabela 1: Identificação da propriedade rural.</h3>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:250px">
                <label class="w3-left">Nome da Propriedade Rural:</label>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="text" name='nome' placeholder="Nome da propriedade" value="" required>
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:250px">
                <label class="w3-left">Telefone:</label>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="text" name='telefone' placeholder="Telefone" value="" required>
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:250px">
                <label class="w3-left">Celular:</label>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="text" name='celular' placeholder="Celular" value="" required>
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:250px">
                <label class="w3-left">E-mail:</label> 
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="text" name='email' placeholder="E-mail" value="">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:250px">
                <label class="w3-left">Endereço da Propriedade:</label>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="text" name='endereco' placeholder="Endereço" value="" required>
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:250px">
                <label class="w3-left">Endereço de Correspondência:</label>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="text" name='enderecoc' placeholder="Endereço Correspondência" value="">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:250px">
                <label class="w3-left">Município:</label>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border" type="text" name='municipio' placeholder="Municipio" value="" required>
            </div>
        </div>
    </div>
    <br><br>
</div>
<!--FIM TABELA 1 -->

<!--COMEÇO TABELA 2 -->
<div class="w3-display-container w3-container w3-card-4 w3-margin" id="tabela_2">
    <h3 class="w3-center">Tabela 2: Tipo de propriedade.</h3>
    <table class="w3-table-all">
        <tr>
            <th><center>Tipo</center></th>
            <th><center>Módulo Fiscal</center></th>
            <th><center>Área (hectares)</center></th>
            <th><center>Observação</center></th>
            <th><center>Área Total Exata (ha)</center></th>
        </tr>
        <tr>
            <td><input type="radio" name="tipo" value="mini"> Minifúndio <br></td>
            <td>-1 MF</td>
            <td>- de 28</td>
            <td>Agricultura Familiar</td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='totalAreaMini' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td><input type="radio" name="tipo" value="pequena"> Pequena <br></td>
            <td>1 a 4 MF</td>
            <td>29 – 112</td>
            <td>Agricultura Familiar</td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='totalAreaPequena' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td><input type="radio" name="tipo" value="media"> Média <br></td>
            <td>-1 MF</td>
            <td>- de 28</td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsMedia' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='totalAreaMedia' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> <input type="radio" name="tipo" value="grande"> Grande <br></td>
            <td>+ de 15 MF</td>
            <td>+ 420</td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsGrande' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='totalAreaGrande' value="">
                </div>
            </td>
        </tr>
    </table>
    <br><br>
</div>
<br><br>
<!--FIM TABELA 2 -->

<!--INICIO TABELA 3 -->
<div class="w3-display-container w3-container w3-card-4 w3-margin" id="tabela_3">
    <h3 class="w3-center">Tabela 3: Atividades desenvolvidas.</h3>
    <table class="w3-table-all">
        <tr>
            <th><center>3.1. Tipo</center></th>
            <th><center>3.2. Área útil (hectares)</center></th>
            <th><center>3.3. Obs.</center></th>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="tipo[]" value="Bovinocultura de Corte"> Bovinocultura de Corte
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaCorte' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsCorte' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="tipo[]" value="Bovinocultura de Leite"> Bovinocultura de Leite
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaLeite' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsLeite' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="tipo[]" value="Ovinocultura"> Ovinocultura
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaOvino' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsOvino' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> <input type="checkbox" name="tipo[]" value="Equinos"> Equinos<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaEquinos' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsEquinos' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> <input type="checkbox" name="tipo[]" value="Pesca e Aqüicultura"> Pesca e Aqüicultura<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaPesca' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsPesca' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> <input type="checkbox" name="tipo[]" value="Agricultura"> Agricultura<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaAgricultura' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsAgricultura' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> <input type="checkbox" name="tipo[]" value="Florestamento"> Florestamento<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaFloresta' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsFloresta' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> <input type="checkbox" name="tipo[]" value="Hortifrutigranjeiros"> Hortifrutigranjeiros<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaHortifruti' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsHortifruti' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="tipo[]" value="Outras Criações Zootécnicas"> Outras Criações Zootécnicas
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='areaOutras' class="w3-input w3-border" value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input type="text" name='obsOutras' class="w3-input w3-border" value="">
                </div>
            </td>
        </tr>
    </table>
    <br><br>
</div>
<br><br>
<!--FIM TABELA 3 -->

<!--INICIO TABELA 4-->
<div class="w3-display-container w3-container w3-card-4 w3-margin" id="tabela_4">
    <h3 class="w3-center">Tabela 4: Perfil do empresário rural.</h3>
    <table class="w3-table-all">
        <tr>
            <th><center>4.1. Escolaridade</center></th>
            <th><center>4.2. Atividade Principal</center></th>
        </tr>
        <tr>
            <td>
                <input type="radio" name="escolaridade" value="Não alfabetizado"> Não alfabetizado</td>
            <td>
                <input type="radio" name="atividade" value="Aposentado"> Aposentado</td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="escolaridade" value="Fundamental"> Fundamental</td>
            <td>
                <input type="radio" name="atividade" value="Profissional Liberal"> Profissional Liberal</td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="escolaridade" value="Médio"> Médio</td>
            <td>
                <input type="radio" name="atividade" value="Funcionário Público"> Funcionário Público</td>
        </tr>
        <tr>
            <td> <input type="radio" name="escolaridade" value="Graduação"> Graduação</td>
            <td> <input type="radio" name="atividade" value="Empresário do setor privado"> Empresário do setor privado</td>
        </tr>
        <tr>
            <td> <input type="radio" name="escolaridade" value="Pós-Graduação"> Pós-Graduação</td>
            <td> <input type="radio" name="atividade" value="Produtor Rural"> Produtor Rural</td>
        </tr>
        <tr>
            <td>
                <div class="w3-input w3-border">
                    Obs.: <input type="text" name='obsEscolaridade' class="w3-input w3-border"value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    Obs.: <input type="text" name='obsAtividade' class="w3-input w3-border"value="">
                </div>
            </td>
    </table>
    <br><br>
</div>
<br><br>
<!--FIM TABELA 4-->

<!--INICIO TABELA 5-->
<div class="w3-display-container w3-container w3-card-4 w3-margin" id="tabela_5">
    <h3 class="w3-center">Tabela 5: Padrão racial predominante do rebanho</h3>
    <table class="w3-table-all">
        <tr>
            <th><center>5.1. Grupo racial</center></th>
        </tr>
        <tr>
            <td>
                <input type="radio" name="racial" value="BB (Angus, Devon e Hereford)"> BB (Angus, Devon e Hereford)
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="racial" value="CC (Charolês, Limousin e Simental)"> CC (Charolês, Limousin e Simental)
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="racial" value="ZE (Zebuínas)"> ZE (Zebuínas)
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="racial" value="SI (Brangus, Braford e Canchim)"> SI (Brangus, Braford e Canchim)
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="racial" value="MI (Indefinido)"> MI (Indefinido)
            </td>
        </tr>
        <tr>
    </table>
    <br><br>
</div>
<br><br>
<!--FIM TABELA 5-->

<!--INICIO TABELA 6-->
<div class="w3-display-container w3-container w3-small w3-card-4 w3-margin" id="tabela_6">
<h3 class="w3-center">Tabela 6: Estrutura do rebanho</h3>

<table class="w3-table-all">
<tr>
    <th><center>Categoria</center></th>
    <th><center>Nº de animais*</center></th>
    <th><center>%</center></th>
    <th><center>UA</center></th>
    <th><center>%UA</center></th>
    <th><center>Peso Médio</center></th>
</tr>
<tr>
    <td>Terneiros<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisTerneiros' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcTerneiros' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaTerneiros' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaTerneiros' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoTerneiros' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Terneiras<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisTerneiras' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcTerneiras' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaTerneiras' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaTerneiras' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoTerneiras' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Novilhas (1 ano)<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisNovilhas1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcNovilhas1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaNovilhas1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaTerneiras1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoTerneiras1' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Novilhas (2 anos)<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisNovilhas2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcNovilhas2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaNovilhas2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaNovilhas2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoNovilhas2' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Novilhos (1 anos)<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisNovilhos1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcNovilhos1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaNovilhos1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaNovilhos1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoNovilhos1' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Novilhos (2 anos)<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisNovilhos2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcNovilhos2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaNovilhos2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaNovilhos2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoNovilhos2' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Vacas de cria <br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisVacaCria' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcVacaCria' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaVacaCria' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaVacaCria' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoVacaCria' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Vacas de descarte<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisVacaDes' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcVacaDes' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaVacaDes' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaVacaDes' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoVacaDes' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Touros (1 à 2 anos)<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisTouro1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcTouro1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaTouro1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaTouro1' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoTouro1' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Touros (2 à 3 anos)<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisTouro2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcTouro2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaTouro2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaTouro2' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoTouro2' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Touros (+ 3 anos)<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisTouro3'  value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcTouro3' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaTouro3' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaTouro3' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoTouro3' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Equinos<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisEquinos' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcEquinos' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaEquinos' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaEquinos' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoEquinos' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Ovinos<br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisOvinos' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcOvinos' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaOvinos' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaOvinos' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoOvinos' value="">
        </div>
    </td>
</tr>
<tr>
    <td> Outros - Qual? <br></td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='nAnimaisOutros' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcOutros' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='uaOutros' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='porcUaOutros' value="">
        </div>
    </td>
    <td>
        <div class="w3-input w3-border">
            <input type="text" name='pesoOutros' value="">
        </div>
    </td>
</tr>
</table>
<h6><i>* Referente a última declaração do rebanho (mar/abr).</i></h6><br>
</div>
<br><br>
<!--FIM TABELA 6-->


<!-- INICIO TABELA 7-->
<div class="w3-display-container w3-container w3-small w3-card-4 w3-margin" id="tabela_7">
    <h3 class="w3-center">Tabela 7: Número de colaboradores fixos na propriedade</h3>
    <table class="w3-table-all">
        <tr>
            <th><center>Categoria</center></th>
            <th><center>Número</center></th>
            <th><center>Observação</center></th>
        </tr>
        <tr>
            <td>Peão<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nPeao' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsPeao' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> Capataz<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nCapataz' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsCapataz' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> Cozinheira<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nCozinheira'  value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsCozinheira' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> Caseiro<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nCaseiro' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsCaseiro' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> Veterinário<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nVeterinario' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsVeterinario' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> Zootecnista <br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nZootecnista' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsZootecnista' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> Agrônomo<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nAgronomo' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsAgronomo' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td>Temporários<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nTemporarios' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <b>Tipo?</b><input class="w3-input w3-border" type="text" name='obsTemporarios'  value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> Técnicos<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nTecnicos' value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='obsTecnicos' value="">
                </div>
            </td>
        </tr>
        <tr>
            <td> Outros<br></td>
            <td>
                <div class="w3-input w3-border">
                    <input class="w3-input w3-border" type="text" name='nOutros'  value="">
                </div>
            </td>
            <td>
                <div class="w3-input w3-border">
                    <b>Tipo?</b><input class="w3-input w3-border" type="text" name='obsOutros' value="">
                </div>
            </td>
        </tr>
    </table>
    <br><br>
</div>
<br><br>
<!--FIM TABELA 7-->

<div>
    <input class="w3-xlarge w3-center" type=submit value="Salvar dados">
</div>
</form>
<!--------------------------------------- FIM FORMULÁRIO --------------------------------------->

<!--FIM DO CONTEÚDO DO ANEXO 1 -->
</div>

<script>
    //FUNÇÃO JAVASCRIPT QUE CONTROLA O BOTÃO DO MENU QUANDO O NAVBAR ALTERNA PARA A VERSÃO DE TELAS MENORES.
    function minhaFuncao() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
</body>
</html>