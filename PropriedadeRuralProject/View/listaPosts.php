<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Avaliação de Propriedade Rural - Listagem de Cadastros</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../w3.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
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
</head>

<body>
<div class="w3-content w3-center w3-card-4 w3-black">
    <p>SISTEMA PROGWEB TESTE</p>
    <br/>
    <a href="../Controller/logout.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Sair</i></a>
    <p class="w3-red">
        <?php
        echo" Bem vindo $logado";
        ?>
    </p>
</div>
<div class="w3-center">
    <br/><br/><br/>
    <a class="w3-btn" href="anexo1.php"><button>ANEXO 1</button></a>
    <br/><br/><br/>
    <a class="w3-btn" href="anexo2.php"><button>ANEXO 2</button></a>
    <br/><br/><br/>
</div>


</body>
</html>