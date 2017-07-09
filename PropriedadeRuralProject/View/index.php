<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avaliação de Propriedade Rural</title>
    <link href="../w3.css" rel="stylesheet">
</head>

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

<body class="w3-responsive">

<!--ESPECIFICANDO TAMANHO MÁXIMO QUE O CONTEÚDO VAI SER DISPOSTO AO USUÁRIO (1200px máximo) -->
<div class="w3-content w3-w3-vivid-green" style="max-width:1200px;margin-top:46px">

    <!--COMEÇO DO CONTEÚDO DO ANEXO 1 -->
    <div class="w3-padding-16" id="ANEXO_1_DADOS_PROPRIEDADE">
        <h2 class="w3-wide w3-row w3-center">Anexo I <br> CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO <br><br><br></h2>

        <!--COMEÇO TABELA 1 -->
        <div class="w3-display-container" id="tabela_1">

            <h3 class="w3-center">Tabela 1: Identificação da propriedade rural</h3>

            <div class="w3-container w3-card-4 w3-margin">

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:250px"><label class="w3-left">Nome da Propriedade Rural:</label></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name='nome' id="nome" placeholder="Nome da propriedade" value="">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:250px"><label class="w3-left">Telefone:</label></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name='telefone' id="telefone" placeholder="Telefone" value="">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:250px"><label class="w3-left">Celular:</label></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name='celular' id="celular" placeholder="Celular" value="">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:250px"><label class="w3-left">E-mail:</label></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name='email' id="email" placeholder="E-mail" value="">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:250px"><label class="w3-left">Endereço da Propriedade:</label></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name='endereco' id="endereco" placeholder="Endereço" value="">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:250px"><label class="w3-left">Endereço de Correspondência:</label></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name='enderecoc' id="enderecoCorres" placeholder="Endereço Correspondência" value="">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:250px"><label class="w3-left">Município:</label></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name='municipio' id="municipio" placeholder="Municipio" value="">
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
                    <th>Tipo</th>
                    <th>Módulo Fiscal</th>
                    <th>Área (hectares)</th>
                    <th>Observação</th>
                    <th>Área Total Exata (ha)</th>
                </tr>

                <tr>
                    <td><input type="radio" name="tipo" value="mini" unchecked> Minifúndio <br></td>
                    <td>-1 MF</td>
                    <td>- de 28</td>
                    <td>Agricultura Familiar</td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='total' id="totalMini" placeholder="total" value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><input type="radio" name="tipo" value="pequena" unchecked> Pequena <br></td>
                    <td>1 a 4 MF</td>
                    <td>29 – 112</td>
                    <td>Agricultura Familiar</td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='total' id="totalPequena" placeholder="total" value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><input type="radio" name="tipo" value="media" unchecked> Média <br></td>
                    <td>-1 MF</td>
                    <td>- de 28</td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='obs' id="obsMedia" placeholder="obs" value="">
                        </div>
                    </td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='total' id="totalMedia" placeholder="total" value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td> <input type="radio" name="tipo" value="grande" unchecked> Grande <br></td>
                    <td>+ de 15 MF</td>
                    <td>+ 420</td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='obs' id="obsGrande" placeholder="obs" value="">
                        </div>
                    </td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='total' id="totalGrande" placeholder="total" value="">
                        </div>
                    </td>
                </tr>

            </table> <br><br>

        </div>
        <!--FIM TABELA 2 -->

    </div>
    <!--FIM DO CONTEÚDO DO ANEXO 1 -->



    <div>

        <!--AQUI FICA AS COISAS DO ANEXO 2-->

    </div>

</div>
<!--ESPECIFICANDO TAMANHO MÁXIMO QUE O CONTEÚDO VAI SER DISPOSTO AO USUÁRIO (1200px máximo) -->


</body>
</html>