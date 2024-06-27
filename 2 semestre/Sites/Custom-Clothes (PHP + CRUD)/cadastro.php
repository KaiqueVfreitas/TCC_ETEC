<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            background-color: rgb(255, 255, 255);
            color: #1C003F;
            font-family: Verdana, Tahoma, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
            padding: 0;
            margin: 0;
        }
        .cabeca {
            background-color: rgb(255, 255, 255);
            height: 100px;
            display: flex;
            align-items: center;
        }
        .img {
            width: 190px;
            height: 60px;
            margin-left: 40px;
        }
        h3 {
            text-align: center;
            margin-top: 20px;
        }
        .cent {
            padding: 60px;
            background-color: #D9D9D9;
            width: 600px;
            margin: 80px auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 26px;
            border-radius: 30px;
            color: #1C003F;
            font-size: larger;
            align-items: flex-end;
        }
        label {
            font-size: larger;
            margin-right: 30px;
        }
        .caixa {
            background-color: rgba(60, 49, 74, 0.3);
            height: 33px;
            color: #FFFFFF;
            border: none;
            margin-right: 60px;
            width: 320px;
            border-radius: 5px;
        }
        .caixa::placeholder {
            color: rgba(240, 248, 255, 0.884);
        }
        .radiotmn {
            display: flex;
            flex-direction: column;
            margin-right: 75px;
            gap: 10px;
        }
        .letras {
            font-size: medium;
            padding: 10px;
        }
        .conf {
            display: flex;
            align-items: center;
            padding: 1%;
            margin-right: 9%;
            gap: 20px;
        }
        .botao {
            background-color: #1C003F;
            border: none;
            border-radius: 10px;
            color: #FFFFFF;
            height: 33px;
            width: 150px;
            font-size: large;
        }
        footer, nav {
            background-color: #1C003F;
        }
        footer *:not(.bg-body-tertiary),
        nav * {
            color: #FFFFFF !important;
        }
    </style>
    <script>
        function validarCampos() {
            const peca = document.getElementById('txtpeca').value;
            const cor = document.getElementById('txtcor').value;
            const estampa = document.getElementById('txtetmp').value;
            const preco = document.getElementById('txteprc').value;
            
            if (!peca || !cor || !estampa || !preco) {
                alert('Todos os campos são obrigatórios.');
                return false;
            }
            if (isNaN(preco)) {
                alert('O preço deve ser um número.');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="cabeca">
        <img class="img" src="../img/LogoCC.png" alt="Exemplo de imagem">
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button data-bs-toggle="collapse" class="navbar-toggler" type="button" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="color: #FFFFFF;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../html/menu.html">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/cadastro.html">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/pesquisar.html">Pesquisar</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <a class="text-reset me-3" href="" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                    <i class="bi bi-person-circle" style="color: #FFFFFF;"></i>
                </a>
                <a class="text-reset me-3" href="" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                    <i class="bi bi-heart" style="color: #FFFFFF;"></i>
                </a>
                <a class="text-reset me-3" href="" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                    <i class="bi bi-cart2" style="color: #FFFFFF;"></i>
                </a>
            </div>
        </div>
    </nav>
    <h3>Cadastrar Produto</h3>
    <form class="cent" id="formCad" name="formCad" method="post" action="" onsubmit="return validarCampos()">
        <div>
            <label for="txtpeca">Peça de roupa: </label>
            <input class="caixa" type="text" placeholder="Digite aqui..." name="txtpeca" id="txtpeca" required>
        </div>
        <div>
            <label for="txtcor">Cor: </label>
            <input class="caixa" type="text" placeholder="Cor da Roupa" name="txtcor" id="txtcor" required>
        </div>
        <div>
            <label for="txtetmp">Estampa: </label>
            <input class="caixa" type="text" placeholder="Estampa da Roupa" name="txtetmp" id="txtetmp" required>
        </div>
        <div class="radiotmn">
            <label for="txttmn">Tamanho: </label>
            <div class="letras">
                <input type="radio" name="txttmn" value="PP" checked> <label for="txt">PP</label>
                <input type="radio" name="txttmn" value="P"> <label for="txt">P</label>
                <input type="radio" name="txttmn" value="M"> <label for="txt">M</label>
                <input type="radio" name="txttmn" value="G"> <label for="txt">G</label>
                <input type="radio" name="txttmn" value="GG"> <label for="txt">GG</label>
            </div>
        </div>
        <div>
            <label for="txteprc">Preço: </label>
            <input class="caixa" type="text" placeholder="Digite o preço" name="txteprc" id="txteprc" required>
        </div>
        <div class="conf">
            <input class="botao" type="button" value="Voltar" onclick="location.href='menu.html'">
            <input class="botao" type="submit" value="Registrar">
            <input class="botao" type="reset" value="Limpar" onclick="document.getElementById('txtpeca').focus();">
        </div>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'conexao.php';
            $peca = $_POST['txtpeca'];
            $cor = $_POST['txtcor'];
            $estampa = $_POST['txtetmp'];
            $tamanho = $_POST['txttmn'];
            $preco = $_POST['txteprc'];
            $incluir = $cmd->query("insert into tbProduto(peca, cor, estampa, tamanho, preco) 
            values('$peca', '$cor', '$estampa', '$tamanho', '$preco')");
            echo "<script>alert('Dados cadastrados com sucesso!!'); location.href='cadastro.html';</script>";
        }
    ?>
</body>
</html>
