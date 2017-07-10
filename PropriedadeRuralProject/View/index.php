<<<<<<< HEAD
<!DOCTYPE html>
<html>

<head>
    <title>Avaliação de Propriedade Rural</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../w3.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>

    <style>
        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 20%;
            border-radius: 20%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<h2 class="w3-content w3-center w3-wide w3-panel">ÍNDICE DE COMPETITIVIDADE<br>“DENTRO DA PORTEIRA”</h2>
<div class="w3-content w3-panel" style="max-width: 40%">
    <form form method="post" action="../Controller/open.php" id="formlogin" name="formlogin"">
    <div class="imgcontainer">
        <img src="../imagens/avatar.jpg" alt="Avatar" class="w3-card-4 avatar">
    </div>

    <div class="container">
        <label><b>LOGIN</b></label>
        <input type="text" placeholder="Enter com o login" name="login" required>

        <label><b>SENHA</b></label>
        <input type="password" placeholder="Entre com a senha" name="senha" required>

        <button type="submit">Entrar</button>
    </div>
    </form>
</div>
</body>
</html>


=======
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
        <h2 class="w3-wide w3-row w3-center">Anexo 1 <br> CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO <br><br><br></h2>

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
>>>>>>> parent of b2eba0f... Atualizando todo o projeto
