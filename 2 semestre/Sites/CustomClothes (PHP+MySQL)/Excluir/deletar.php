<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <title>Daletar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f9;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 2em auto;
            padding: 2em;
            max-width: 500px;
            width: 90%;
            border: 2px solid #220F3A;
            border-radius: 0.5em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        form h1 {
            color: #220F3A;
            margin-bottom: 1em;
        }

        form label {
            margin-bottom: 0.5em;
            font-size: 1.1em;
        }

        form input[type="text"] {
            padding: 0.5em;
            margin-bottom: 1em;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 0.3em;
            font-size: 1em;
        }

        .botao {
            padding: 0.7em 1.5em;
            margin: 0.5em;
            border: none;
            border-radius: 0.3em;
            background-color: #220F3A;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .botao:hover {
            background-color: #43347A;
            transform: scale(1.05);
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

        @media (max-width: 600px) {
            form {
                width: 95%;
            }

            table {
                width: 95%;
            }

            table th, table td {
                padding: 0.5em;
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
    <form id="formDelt" name="formDelt" method="post" action="delet.php">
        <h1>Deletar</h1>
        <label for="txt">Digite o código para deletar</label>
        <input id="caixa" type="text" placeholder="Código" name="txtdeletar" required>
        <div class="botoes">
            <input class="botao" type="reset" value="Limpar" />
            <input class="botao" type="submit" value="Deletar">
            <input class="botao" type="button" value="Menu" onclick="location.href='../menu.html'">
        </div>
    </form>
</body>
</html>
