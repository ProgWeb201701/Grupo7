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
        padding: 10px 16px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    body {
        font-family: "Times New Roman";
    }

</style>

<body class="w3-responsive">

<!--ESPECIFICANDO TAMANHO MÁXIMO QUE O CONTEÚDO VAI SER DISPOSTO AO USUÁRIO (1200px máximo) -->
<div class="w3-content w3-w3-vivid-green" style="max-width:1200px;margin-top:46px">

    <!--COMEÇO DO CONTEÚDO DO ANEXO 1 -->
    <div class="w3-padding-16" id="ANEXO_1_DADOS_PROPRIEDADE">
        <h2 class="w3-wide w3-row w3-center"><b>Anexo II</b> <br> <b>ÍNDICE DE COMPETITIVIDADE “DENTRO DA PORTEIRA” </b><br><br><b>QUESTIONÁRIO PARA A MENSURAÇÃO DA COMPETITIVIDADE NA BOVINOCULTURA DE CRIA</b><br><br><br><b>Atenção:</b> Este questionário é composto por perguntas dicotômicas e as mesmas têm unicamente duas respostas possíveis: <b>"Sim"</b> ou <b>"Não"</b> permitindo
identificar claramente a opinião do entrevistado sobre a temática proposta.<br><br></h2>

        <!--COMEÇO TABELA 2 -->
        <div class="w3-display-container" id="tabela_1">

            <h3 class="w3-rigth">  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp -Responder SIM ou NÃO </h3>
                

        <!--COMEÇO TABELA 2 -->
        <div class="w3-display-container w3-container w3-card-4 w3-margin" id="tabela_2">

            
            <table class="w3-table-all">

                <tr>
                    <th><center>1.</center></th>
                    <th><center>Direcionador: TECNOLOGIA</center></th>
                    <th colspan="2"><center>RESPOSTA</center></th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <th><center>1.1.</center></th>
                    <th>ADEQUAÇÃO DO SISTEMA DE PRODUÇÃO DE CRIA</th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>-</center></th>
                </tr>

                <tr>
                    <td>1.1.1.</td>
                    <td>Existe um sistema de produção de cria claramente definido?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                </tr>

                <tr>
                    <td>1.1.2.</td>
                    <td>Existe algum grau de diferenciação/especialização no sistema em questão?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td><form action="">
                    <input type="checkbox" name="option" value="Rastreabilidade">Rastreabilidade
                    <input type="checkbox" name="option" value=" Produção de touros"> Produção de touros <br>
                    <input type="checkbox" name="option" value="Padrão racial">Padrão racial <br>
                    
                    <script type="text/javascript">
function id( el ){
        return document.getElementById( el );
}
function mostra( el ){
        id( el ).style.display = 'block';
}
function esconde_todos( el, tagName ){
        var tags = el.getElementsByTagName( tagName );
        for( var i=0; i<tags.length; i++ )
        {
                tags[i].style.display = 'none';
        }
}
window.onload = function()
{
        id('outro').style.display = 'none';

        id('rd-time').onchange = function()
        {
                esconde_todos( id('palco'), 'div' );
                mostra( this.value );
        }
        var radios = document.getElementsByTagName('input');
        for( var i=0; i<radios.length; i++ ){
                if( radios[i].type=='radio' )
                {
                        radios[i].onclick = function(){
                                esconde_todos( id('palco'), 'div' );
                                mostra( this.value );
                        }
                }
        }
}
</script>

<input type = "radio" name = "time" id = "rd-time" value = "outro" style="margin-top:15px;" /> Outros. Quais?
      </span>
      <div id = "palco">
      <div id = "outro"><input type = "text" name = "time" id = "outro"/></div>
      </div>
                    </form></td>
                </tr>

                <tr>
                    <td>1.1.3.</td>
                    <td>Há uma escala adequada (número de animais em relação ao tamanho da propriedade)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?<br> *A equipe calcula.</td>
                </tr>

                <tr>
                    <th><center>1.2.</center></th>
                    <th><center>QUALIDADE, MANEJO E ESPÉCIES DE PASTAGENS UTILIZADAS</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.2.1.</td>
                    <td>Adota alguma prática para o melhoramento do campo nativo?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual? <input type="text" name="Nome" size="10" /></td></td>
                </tr>

                <tr>
                    <td>1.2.2.</td>
                    <td>São cultivadas pastagens?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Inverno">Inverno &nbsp&nbsp&nbsp
                    <input type="radio" name="option" value="Verão">Verão
                </tr>

                <tr>
                    <td>1.2.3.</td>
                    <td>Conhece a porcentagem de campo nativo e a percentagem de pastagens cultivadas da propriedade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual? <input type="text" name="Nome" size="10" /></td></td>
                </tr>

                <tr>
                    <td>1.2.4.</td>
                    <td>Existe associação entre gramíneas e/ou leguminosas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.2.5.</td>
                    <td>São utilizadas técnicas de manejo de pastagens?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.2.6.</td>
                    <td>Existe algum grau de degradação nas pastagens (invasoras, clarões no pasto, erosão, não desejáveis, outras)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>*A equipe deve observar o grau de degradação.</td>
                </tr>

                <tr>
                    <td>1.2.7.</td>
                    <td>No caso da existência de invasoras, há um manejo adequado para o controle das mesmas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual? <br>
                    <input type="radio" name="option" value="Químico"> Químico &nbsp&nbsp&nbsp
                    <input type="radio" name="option" value="Físico"> Físico
                </tr>

                <tr>
                    <td>1.2.8.</td>
                    <td>São feitas análises periodicas do solo?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.2.9.</td>
                    <td>Utiliza adubação de base (calagem e NPK)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual? <input type="text" name="Nome" size="10" /></td></td></td>
                </tr>

                <tr>
                    <td>1.2.10.</td>
                    <td>Utiliza adubação de cobertura (uréia/ NPK/ MAP, DAP)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.2.11.</td>
                    <td>Existe algum sistema de irrigação para as pastagens?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Pivot"> Pivot  &nbsp&nbsp&nbsp
                    <input type="radio" name="option" value="Malha"> Malha
                    </td>
                </tr>

                <tr>
                    <th><center>1.3.</center></th>
                    <th><center>SUPLEMENTAÇÃO ANIMAL</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.3.1.</td>
                    <td>Utiliza suplementação com sal branco?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.3.2.</td>
                    <td>Utiliza suplementação com mistura mineral completa?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1.3.3.</td>
                    <td>Utiliza suplementação com alimento volumoso?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Feno"> Feno  &nbsp&nbsp
                    <input type="radio" name="option" value="Palha"> Palha &nbsp&nbsp
                    <input type="radio" name="option" value="Silagem"> Silagem  <br>
                    <input type="radio" name="option" value="Pré-secado"> Pré-secado <br>
                    <input type="radio" name="option" value="Outro"> Outro. Qual? <input type="text" name="Nome" size="10" /></td></td>
                    </td>
                </tr>

                <tr>
                    <td>1.3.4.</td>
                    <td>Utiliza suplementação para categorias específicas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Creep-feeding"> Creep-feeding  &nbsp&nbsp
                    <input type="radio" name="option" value="Touros"> Touros <br>
                    <input type="radio" name="option" value="Terneiros"> Terneiros  <br>
                    <input type="radio" name="option" value="Vacas de cria"> Vacas de cria <br>
                    <input type="radio" name="option" value="Teor de P (fósforo)"> Teor de P (fósforo)
                    </td>
                </tr>

                <tr>
                    <td>1.3.5.</td>
                    <td>Ocorre suplementação mineral ao longo de todo o ano?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.3.6.</td>
                    <td>Utiliza suplementação proteica em épocas estratégicas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.3.7.</td>
                    <td>Utiliza suplementação energética em épocas estratégicas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.3.8.</td>
                    <td>Todos os cochos são cobertos?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Maioria"> Maioria &nbsp&nbsp&nbsp
                    <input type="radio" name="option" value="Nenhum"> Nenhum
                    </td>
                </tr>

                <tr>
                    <th><center>1.4.</center></th>
                    <th><center>INTEGRAÇÃO LAVOURA- PECUÁRIA</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.4.1.</td>
                    <td>A propriedade trabalha com integração lavoura- pecuária?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual? <input type="text" name="Nome" size="10" /></td></td></td>
                </tr>

                <tr>
                    <td>1.4.2.</td>
                    <td>A exploração agrícola é feita pelo produtor/ pecuarista?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.4.3.</td>
                    <td>Os recursos e maquinários utilizados na agricultura são utilizados na pecuária?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.4.4.</td>
                    <td>Os funcionários da lavoura atuam na pecuária?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <th><center>1.5.</center></th>
                    <th><center>MANEJO DOS POTREIROS</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.5.1.</td>
                    <td>É utilizada subdivisão nos potreiros/ invernada?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.5.2.</td>
                    <td>É utilizada cerca elétrica para subdividir os potreiros/ invernada?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.5.3.</td>
                    <td>Utiliza outra técnica para subdividir os potreiros/ invernada?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual? <input type="text" name="Nome" size="10" /> </td>
                </tr>

                <tr>
                    <td>1.5.4.</td>
                    <td>Possui um mapa ilustrando o número de potreiros/ invernada da propriedade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <th><center>1.6.</center></th>
                    <th><center>MANEJO REPRODUTIVO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.6.1.</td>
                    <td>Há uma estação de monta, parição e desmame previamente definida?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual a duração/ período? <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.6.2.</td>
                    <td>A estação de acasalamento das novilhas é mais curta que a das vacas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.6.3.</td>
                    <td>É utilizada alguma técnica de desmame antecipado?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Precoce"> Precoce  &nbsp&nbsp
                    <input type="radio" name="option" value="Interrompido/ Temporário"> Interrompido/ Temporário <br>
                    <input type="radio" name="option" value="Outro"> Outro. Qual? <input type="text" name="Nome" size="10" />
                    </td>
                </tr>

                <tr>
                    <td>1.6.4.</td>
                    <td>Utiliza inseminação artificial (IA)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Quais categorias? <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.6.5.</td>
                    <td>Utiliza inseminação artificial com sincronização de cios?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Quais categorias? <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.6.6.</td>
                    <td>Utiliza inseminação artificial em tempo fixo (IATF)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Quais categorias? <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.6.7.</td>
                    <td>Utiliza outra biotécnica reprodutiva?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Transferência de embriões"> Transferência de embriões  &nbsp&nbsp
                    <input type="radio" name="option" value="FIV"> FIV <br>
                    <input type="radio" name="option" value="outra"> Outra. Qual? <input type="text" name="Nome" size="10" />
                    </td>
                </tr>

                <tr>
                    <td>1.6.8.</td>
                    <td>A relação touro/ vaca é adequada?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    Qual? <input type="text" name="Nome" size="10" /> <br> *A equipe calcula.
                    </td>
                </tr>

                <tr>
                    <td>1.6.9.</td>
                    <td>A categoria de vaca primíparas, vazias no toque, são <u>sempre</u> descartadas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.6.10.</td>
                    <td>A categoria de vaca multíparas, vazias no toque, são <u>sempre</u> descartadas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.6.11.</td>
                    <td>É feito rodízio de touros dentro da estação de monta?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>*Plantel</td>
                </tr>

                <tr>
                    <td>1.6.12.</td>
                    <td>Os touros são separados por lotes?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Idade"> Idade &nbsp
                    <input type="radio" name="option" value="Hierarquia"> Hierarquia &nbsp
                    <input type="radio" name="option" value="Raça"> Raça
                    <input type="radio" name="option" value="Chifres"> Chifres
                    </td>
                </tr>

                <tr>
                    <td>1.6.13.</td>
                    <td>É feito o exame andrológico nos touros anualmente?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Quando? <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.6.14.</td>
                    <td>Existe um peso mínimo alvo para o primeiro acasalamento das novilhas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual? <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>1.6.15.</td>
                    <td>Utiliza o ECC como uma ferramenta de manejo em épocas estratégicas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Quando? <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <th><center>1.7.</center></th>
                    <th><center>GENÉTICA DO REBANHO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.7.1.</td>
                    <td>O rebanho apresenta um padrão racial adequado ao ambiente?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>*A equipe deve observar. </td>
                </tr>

                <tr>
                    <td>1.7.2.</td>
                    <td>Utiliza ferramentas de melhoramento genético animal para a seleção dos seus animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?<br>
                    <input type="radio" name="option" value="Cruzamento"> Cruzamento &nbsp
                    <input type="radio" name="option" value="Seleção"> Seleção &nbsp
                    <input type="radio" name="option" value="DEP’s"> DEP’s <br>
                    <input type="radio" name="option" value="MMolecular"> MMolecular &nbsp
                    <input type="radio" name="option" value="Sumário de touros"> Sumário de touros
                    </td>
                </tr>

                <tr>
                    <td>1.7.3.</td>
                    <td>Os touros são provenientes/ adquiridos de outras propriedades que utilizam programas de melhoramento genético?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <th><center>1.8.</center></th>
                    <th><center>SANIDADE DO REBANHO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.8.1.</td>
                    <td>Existe um calendário sanitário pré definido de acordo com o ambiente da propriedade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>*Verificar o plano.</td>
                </tr>

                <tr>
                    <td>1.8.2.</td>
                    <td>O calendário sanitário é acessível a todos os colaboradores?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.8.3.</td>
                    <td>São aplicadas as vacinas contra as principais doenças endêmicas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Clostridiose"> Clostridiose &nbsp
                    <input type="radio" name="option" value="Raiva"> Raiva <br>
                    <input type="radio" name="option" value="Aftosa"> Aftosa &nbsp
                    <input type="radio" name="option" value="Brucelose"> Brucelose <br>
                    <input type="radio" name="option" value="Outros"> Outras. Qual? <input type="text" name="Nome" size="10" />
                    </td>
                </tr>

                <tr>
                    <td>1.8.4.</td>
                    <td>Os ventres são vacinados contra as principais doenças reprodutivas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="IBR"> IBR &nbsp
                    <input type="radio" name="option" value="BVD"> BVD &nbsp
                    <input type="radio" name="option" value="Leptospirose"> Leptospirose <br>
                    <input type="radio" name="option" value="Campilobacteriose"> Campilobacteriose <br>
                    <input type="radio" name="option" value="Outros"> Outra. Qual? <input type="text" name="Nome" size="10" />
                    </td>
                </tr>

                <tr>
                    <td>1.8.5.</td>
                    <td>Os animais recebem periodicamente tratamento contra a prevenção de endo e ectoparasitas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>*Verificar o calendário.</td>
                </tr>

                <tr>
                    <td>1.8.6.</td>
                    <td>O tratamento é diferenciado conforme a idade dos animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                        <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.8.7.</td>
                    <td>Os terneiros recebem alguma medicação ao nascer?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Injetável"> Injetável &nbsp
                    <input type="radio" name="option" value="Tópica "> Tópica  <br>
                    <input type="radio" name="option" value="Outros"> Outra. Qual? <input type="text" name="Nome" size="10" />
                    </td>
                </tr>

                <tr>
                    <td>1.8.8.</td>
                    <td>É feito o diagnóstico de perdas sanitárias?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Sorologia"> Sorologia &nbsp
                    <input type="radio" name="option" value="Necrópsia"> Necrópsia <br>
                    <input type="radio" name="option" value="Outros"> Outra. Qual? <input type="text" name="Nome" size="10" />
                    </td>
                    </td>
                </tr>

                <tr>
                    <th><center>1.9.</center></th>
                    <th><center>ASSESSORIA TÉCNICA</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.9.1.</td>
                    <td>A propriedade possui um profissional efetivo no seu quadro funcional?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Veterinário"> Veterinário &nbsp
                    <input type="radio" name="option" value="Zootecnista"> Zootecnista <br>
                    <input type="radio" name="option" value="Agrônomo"> Agrônomo <br>
                    <input type="radio" name="option" value="Outros"> Outro. Qual? <input type="text" name="Nome" size="10" />
                    </td>
                    </td>
                </tr>

                <tr>
                    <td>1.9.2.</td>
                    <td>Utiliza assessoria técnica periodicamente na propriedade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="EMATER"> EMATER &nbsp
                    <input type="radio" name="option" value="Universidade "> Universidade  <br>
                    <input type="radio" name="option" value="Consultoria "> Consultoria  <br>
                    <input type="radio" name="option" value="Outros"> Outra. Qual? <input type="text" name="Nome" size="10" />
                    </td>
                    </td>
                </tr>

                <tr>
                    <td>1.9.3.</td>
                    <td>Existe prestação de serviço pré-definido/ pontuais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Toque"> Toque &nbsp
                    <input type="radio" name="option" value="Andrológico"> Andrológico &nbsp
                    <input type="radio" name="option" value="Pastagens"> Pastagens <br>
                    <input type="radio" name="option" value="IATF"> IATF &nbsp
                    <input type="radio" name="option" value="Clínica"> Clínica &nbsp
                    <input type="radio" name="option" value="Cirúrgica"> Cirúrgica &nbsp
                    <input type="radio" name="option" value="O2utros"> Outro.
                    </td>
                </tr>

                <tr>
                    <th><center>1.10.</center></th>
                    <th><center>BEM ESTAR ANIMAL E MANEJO COM OS ANIMAIS</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>1.10.1.</td>
                    <td>Os animais são manejados com intervalo regular nas mangueiras?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual intervalo? <input type="text" name="Nome" size="10" />   
                    </td>
                </tr>

                <tr>
                    <td>1.10.2.</td>
                    <td>Os animais são agrupados a campo regularmente (parar rodeio)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.10.3.</td>
                    <td>Os animais são manejados nas mangueiras por categoria?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.10.4.</td>
                    <td>Utiliza tronco de contenção inovador, adequado as boas práticas de manejo?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.10.5.</td>
                    <td>Utiliza cães no manejo com bovinos?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.10.6.</td>
                    <td>Utiliza objetos perfuro cortantes/ ponte agudos para tocar os animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1.10.7.</td>
                    <td>Utiliza bandeirolas ou outros métodos para movimentar os animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>          
                    </td>
                </tr>

                <tr>
                    <td>1.10.8.</td>
                    <td>As instalações são adequadas para manejar os animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>*A equipe deve observar</td>
                </tr>

                <tr>
                    <td>1.10.9.</td>
                    <td>Seus funcionários trabalham a pé na mangueira?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.</center></th>
                    <th><center>Direcionador: GESTÃO</center></th>
                    <th colspan="2"><center>RESPOSTA</center></th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <th><center>2.1.</center></th>
                    <th><center>RECURSOS HUMANOS</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th></th>
                </tr>

                <tr>
                    <td>2.1.1.</td>
                    <td>Os colaboradores possuem vínculo empregatício?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.1.2.</td>
                    <td>Existe uma hierarquia funcional definida (cargos de acordo com o perfil de cada um)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Perfil"> Perfil &nbsp
                    <input type="radio" name="option" value="Tempo de empresa"> Tempo de empresa  <br>
                    <input type="radio" name="option" value="Indicação"> Indicação <br>
                    <input type="radio" name="option" value="Outros"> Outra. Qual? <input type="text" name="Nome" size="10" />  
                    </td>
                </tr>

                <tr>
                    <td>2.1.3.</td>
                    <td>Existe um plano de valorização da carreira?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="PL"> PL &nbsp
                    <input type="radio" name="option" value="Gratificações"> Gratificações  <br>
                    <input type="radio" name="option" value="Doação de animais"> Doação de animais <br>
                    <input type="radio" name="option" value="Outros"> Outro. Qual? <input type="text" name="Nome" size="10" />  
                    </td>
                </tr>

                <tr>
                    <td>2.1.4.</td>
                    <td>A maioria de seus colaboradores permanece mais de 2 anos na propriedade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.1.5.</td>
                    <td>100% dos seus colaboradores são alfabetizados?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.1.6.</td>
                    <td>Existe um projeto/ ação concreta de bem estar social dos colaboradores?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Escola"> Escola &nbsp
                    <input type="radio" name="option" value="Televisão"> Televisão &nbsp
                    <input type="radio" name="option" value="Quadra de esportes"> Quadra de esportes <br>
                    <input type="radio" name="option" value="Internet"> Internet &nbsp
                    <input type="radio" name="option" value="Plano de saúde"> Plano de saúde <br>
                    <input type="radio" name="option" value="Festa de confraternização"> Festa de confraternização <br>
                    <input type="radio" name="option" value="Outros"> Outros. Qual? <input type="text" name="Nome" size="10" /> 

                    </td>
                </tr>

                <tr>
                    <td>2.1.7.</td>
                    <td>Os colaboradores fazem cursos periodicamente?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.1.8.</td>
                    <td>Os colaboradores são treinados para utilizar o manejo racional com os animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.1.9.</td>
                    <td>A relação número de funcionários/ número de animais do sistema é adequada?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>*A equipe calcula</td>
                </tr>

                <tr>
                    <th><center>2.2.</center></th>
                    <th><center>PATRIMÔNIO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.2.1.</td>
                    <td>Há um controle de estoque dos animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Mensal"> Mensal &nbsp
                    <input type="radio" name="option" value="Semestral "> Semestral &nbsp
                    <input type="radio" name="option" value="Doação de animais"> Anual <br>
                    <input type="radio" name="option" value="Outros"> Outro. Qual? <input type="text" name="Nome" size="10" />  
                    </td>
                </tr>

                <tr>
                    <td>2.2.2.</td>
                    <td>Os colaboradores são treinados para utilizar o manejo racional com os animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.2.3.</td>
                    <td>Os colaboradores são treinados para utilizar o manejo racional com os animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.2.4.</td>
                    <td>Os colaboradores são treinados para utilizar o manejo racional com os animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.3.</center></th>
                    <th><center>ORÇAMENTO E FLUXO DE CAIXA</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.3.1.</td>
                    <td>São mensuradas as receitas da propriedade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.3.2.</td>
                    <td>São mensuradas as despesas da propriedade (valor desembolsado)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.3.3.</td>
                    <td>Utiliza orçamentações para investimentos futuros?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.3.4.</td>
                    <td>Existe um fluxo de caixa em uso na propriedade (orçado e realizado)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.4.</center></th>
                    <th><center>PLANEJAMENTO ESTRATÉGICO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.4.1</td>
                    <td>A empresa possui um planejamento estratégico ou plano de negócios?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.4.2</td>
                    <td>O planejamento estratégico é utilizado como uma ferramenta na tomada de decisão?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.5.</center></th>
                    <th><center>CONTROLE DE CUSTOS DE PRODUÇÃO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.5.1</td>
                    <td>A propriedade mensura seus custos totais (fixos+ variáveis)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.5.2</td>
                    <td>Existe um plano de contas previamente definido?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.5.3</td>
                    <td>Existe um controle por centro de custos?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.5.4</td>
                    <td>Conhece o custo unitário do produto final (bezerro)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.5.5</td>
                    <td>A depreciação dos bens é calculada?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.5.6</td>
                    <td>O custo de oportunidade da terra é calculado?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.5.7</td>
                    <td>O custo de oportunidade do capital é calculado?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.6.</center></th>
                    <th><center>CÁLCULO DE INDICADORES FINANCEIROS</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.6.1</td>
                    <td>Calcula a margem bruta da sua atividade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.6.2</td>
                    <td>Outros indicadores financeiros são calculados?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.6.3</td>
                    <td>Mensura indicadores financeiros de projetos e investimentos futuros?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.7.</center></th>
                    <th><center>IDENTIFICAÇÃO E GESTÃO DO REBANHO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.7.1.</td>
                    <td>Os animais possuem identificação individual?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Botton"> Botton &nbsp
                    <input type="radio" name="option" value="Brinco "> Brinco &nbsp
                    <input type="radio" name="option" value="Tatuagem"> Tatuagem <br>
                    <input type="radio" name="option" value="Marca de fogo com número"> Marca de fogo com número <br>
                    <input type="radio" name="option" value="Outros"> Outra. Qual? <input type="text" name="Nome" size="10" />  
                    </td>
                </tr>

                <tr>
                    <td>2.7.2.</td>
                    <td>Na propriedade, existe um sistema armazenamento de dados?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <input type="radio" name="option" value="Manual"> Manual &nbsp
                    <input type="radio" name="option" value=" Informatizado ">  Informatizado
                    </td>
                </tr>

                <tr>
                    <td>2.7.3</td>
                    <td>A identificação dos animais é utilizada como uma ferramenta de manejo para a tomada de decisão?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.7.4</td>
                    <td>Os animais são rastreados?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.8.</center></th>
                    <th><center>COMERCIALIZAÇÃO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.8.1</td>
                    <td>As vacas de descarte são terminadas na propriedade (vendidas para frigoríficos)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.8.2</td>
                    <td>Recebe um valor adicional pelo seu produto de melhor qualidade (valor agregado)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.8.3</td>
                    <td>Utiliza alguma ferramenta de gerenciamento de risco?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.8.4</td>
                    <td>Oferta animais em feiras de terneiros ou mercado direcionado?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.9.</center></th>
                    <th><center>INFORMATIZAÇÃO DA PROPRIEDADE</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.9.1</td>
                    <td>A propriedade possui computador?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.9.2</td>
                    <td>Utiliza algum software de gestão rural aplicado a pecuária?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.9.3</td>
                    <td>São utilizadas planilhas de Excel ou similar para auxiliar no controle/processamento das informações?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>2.10.</center></th>
                    <th><center>CONTROLE ZOOTÉCNICO</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>2.10.1</td>
                    <td>Mensura a taxa de prenhez?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>2.10.2</td>
                    <td>Mensura a taxa de natalidade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>2.10.3</td>
                    <td>Mensura a taxa de desmame?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>2.10.4</td>
                    <td>Mensura as perdas entre o toque/ nascimento/ desmame?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>2.10.5</td>
                    <td>Mensura a taxa de desfrute?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>2.10.6</td>
                    <td>Mensura a taxa de mortalidade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Qual?  <input type="text" name="Nome" size="10" /></td>
                </tr>

                <tr>
                    <td>2.10.7</td>
                    <td>Há um controle de produtividade (Kg/ha)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.10.8</td>
                    <td>Há um controle de produtividade de kg de terneiro/vaca/ano?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.10.9</td>
                    <td>Possui balança?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>2.10.10</td>
                    <td>A balança é utilizada com frequência como uma ferramenta de controle do desenvolvimento dos animais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>3.</center></th>
                    <th><center>RELAÇÕES DE MERCADO E AMBIENTE EXTERNO</center></th>
                    <th colspan="2"><center>RESPOSTA</center></th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <th><center>3.1.</center></th>
                    <th><center>RELAÇÃO FORNECEDOR/ PECUARISTA/ COMPRADOR</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th></th>
                </tr>

                <tr>
                    <td>3.1.1</td>
                    <td>Existe um grau de fidelidade/ confiança com seus clientes?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>3.1.2</td>
                    <td>Existe um grau de fidelidade/ confiança com empresas de insumos (lojas agropecuárias)?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>3.1.3</td>
                    <td>Existe um suporte técnico na compra de seus insumos?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Pós venda!</td>
                </tr>

                <tr>
                    <td>3.1.4</td>
                    <td>Existe um suporte técnico e satisfação na venda de seus produtos?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>Pós venda!</td>
                </tr>

                <tr>
                    <th><center>3.2.</center></th>
                    <th><center>ACESSO A INOVAÇÕES TECNOLÓGICAS</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>3.2.1</td>
                    <td>Existe Universidade ou Centros de pesquisa na região da propriedade?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>3.2.2</td>
                    <td>São geradas ações concretas de extensão rural que beneficiem o produtor?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>3.2.3</td>
                    <td>As tecnologias difundidas/ disseminadas são utilizadas no seu sistema de produção?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th><center>3.3.</center></th>
                    <th><center>ORGANIZAÇÃO DOS PRODUTORES</center></th>
                    <th>SIM</th>
                    <th>NÃO</th>
                    <th><center>OBSERVAÇÕES</center></th>
                </tr>

                <tr>
                    <td>3.3.1</td>
                    <td>Participa de alguma cooperativa/ associação/ aliança estratégica de produtores rurais?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>3.3.2</td>
                    <td>Existe uma organização no sentido de barganhar melhores preços na compra e venda de seus produtos e insumos?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>

                <tr>
                    <td>3.3.3</td>
                    <td>Existe troca de informação e experiência entre os pecuaristas?</td>
                    <td><input type="radio" name="option" value="SIM"></td>
                    <td><input type="radio" name="option" value="NÃO"></td>
                    <td>
                    <div class="w3-input w3-border">
                            <input class="w3-input w3-border" type="text" name='' id="totalGrande"  value="">
                        </div>   
                    </td>
                </tr>
    
            </table> <br><br>

        </div>

    </div>

    <div>

    </div>

</div>

</body>
</html>