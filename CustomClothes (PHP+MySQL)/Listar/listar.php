<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="deletar.css"/>
    <link rel="stylesheet" href="../style.css">
    <title>Daletar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .linha {
            text-align: center;
            padding: 2em 0;
        }

        .linha h1 {
            color: #220F3A;
            margin: 0;
            font-size: 2em;
        }
        .maior{
            text-align: center;
        }
        table {
            width: 90%;
            margin: 2em auto;
            border-collapse: collapse;
            border: 2px solid #220F3A;
            border-radius: 0.5em;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        table th, table td {
            padding: 1em;
            text-align: left;
        }

        table th {
            background-color: #220F3A;
            color: #fff;
        }

        table td {
            border-bottom: 1px solid #ddd;
        }

        button {
            display: block;
            padding: 0.7em 1.5em;
            margin: 2em auto;
            border: none;
            border-radius: 0.3em;
            background-color: #220F3A;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #43347A;
            transform: scale(1.05);
        }

        @media (max-width: 600px) {
            .linha {
                padding: 1em 0;
            }

            .linha h1 {
                font-size: 1.5em;
            }

            table {
                width: 95%;
            }

            table th, table td {
                padding: 0.5em;
            }

            button {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="cabeca">
        <img class="img" src="../img/LogoCC.png" alt="Exemplo de imagem">
    </div>
    <nav>
        <a href="../Cadastro/cadastro.html">CADASTRAR</a>
        <a href="../Listar/listar.php">LISTAR</a>
        <a href="../menu.html">INÍCIO</a>        
        <a href="../Pesquisar/pesquisar.html">PESQUISAR</a>
        <a href="../Excluir/deletar.php">EXCLUIR</a>
        <a href="../Alterar/alterar.php">ALTERAR</a>
    </nav>
    <div class="linha">
        <h1>PESQUISAR</h1>
    </div>
</body>
</html>

<?php
    echo "<link rel='stylesheet' type='text/css' href='list.css'/>";
    include '../conexao.php';
    $lista = $cmd->query("select * from tbProduto");
    $total_registros = $lista->rowCount();
    if ($total_registros > 0) {
        echo "<table>";
        echo "<tr> <th colspan=6 class='maior'> Roupas Cadastradas </th> </tr>";
        echo "<tr>
                <th> Código </th>
                <th> Peça </th>
                <th> Cor </th>
                <th> Estampa </th>
                <th> Tamanho </th>
                <th> Preço </th>
              </tr>";
        while($linha = $lista->fetch(PDO::FETCH_ASSOC)) {
            $codigo = $linha['Id'];
            $peca = $linha['peca'];
            $cor = $linha['cor'];
            $estampa = $linha['estampa'];
            $tamanho = $linha['tamanho'];
            $preco = $linha['preco'];
            echo "<tr>
                    <td>$codigo</td>
                    <td>$peca</td>
                    <td>$cor</td>
                    <td>$estampa</td>
                    <td>$tamanho</td>
                    <td>$preco</td>
                  </tr>";
        }
        echo "</table>";
        echo "<br/><br/>";
        echo "<button onClick='window.history.back();'>MENU</button>";
    } else {
        echo "<script language=javascript> window.alert('Não existem registros para exibir!!!'); window.history.back(); </script>";
    }
?>
