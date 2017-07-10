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


