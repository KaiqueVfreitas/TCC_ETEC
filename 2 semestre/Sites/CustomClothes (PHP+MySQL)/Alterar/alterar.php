<!doctype HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Alterar Registros</title>
        <!-- estilização universal do nav -->
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <script language="JavaScript">
        function Saindo()
        {
            location.href="index.html";
        }
        </script>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 0;
                color: #333;
            }

            .linha {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 2rem;
                background-color: #f1f1f1;
                color: #220F3A;
            }

            h1 {
                font-size: 1.5rem;
            }

            form {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 2rem;
                background-color: white;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                max-width: 90%;
                margin: 2rem auto;
                border-radius: 0.5rem;
            }

            .form-group {
                display: flex;
                justify-content: space-between;
                width: 100%;
                margin-bottom: 1rem;
            }

            .form-group label {
                flex: 1;
                margin-right: 0.5rem;
                align-self: center;
            }

            .form-group input {
                flex: 2;
                padding: 0.5rem;
                border: 1px solid #ddd;
                border-radius: 0.25rem;
            }

            .radiotmn {
                display: flex;
                justify-content: space-between;
                width: 100%;
                padding: 1rem 0;
                margin: 1rem 0;
            }

            .radiotmn label {
                margin-right: 0.5rem;
                align-self: center;
            }

            input[type="radio"] {
                accent-color: #220F3A;
            }

            .botao, .botaona {
                background-color: #220F3A;
                color: white;
                padding: 0.5rem 1rem;
                margin: 0.5rem;
                border: none;
                border-radius: 0.25rem;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                transition: background-color 0.3s, transform 0.3s;
            }

            .botao:hover, .botaona:hover {
                background-color: #1e0d34;
                transform: scale(1.05);
            }

            .button-group {
                display: flex;
                justify-content: center;
                gap: 1rem;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin: 2rem 0;
            }

            th, td {
                padding: 0.5rem;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #220F3A;
                color: white;
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
            <h1>CADASTRAR</h1>
        </div>
        <form id="form1" method="post" action="alterar.php"> 
            <div class="form-group">
                <label for='txtcodi'>Código a ser alterado&nbsp;</label>            
                <input class="caixa" type='text' name='txtcodi' id='txtcodi' required/>
            </div>       
            <div class="form-group">
                <label for="txtpeca">Peça de roupa: </label>
                <input class="caixa" type="text" placeholder="Digite aqui..." name="txtpeca" id="txtpeca">
            </div>
            <div class="form-group">
                <label for="txtcor">Cor: </label>
                <input class="caixa" type="text" placeholder="Cor da Roupa" name="txtcor" id="txtcor">
            </div>
            <div class="form-group">
                <label for="txtetmp">Estampa: </label>
                <input class="caixa" type="text" placeholder="Estampa da Roupa" name="txtetmp" id="txtetmp">
            </div>
            <div class="form-group">
                <label for="txttmn">Tamanho: </label>
                <div class="radiotmn">
                    <input type="radio" name="txttmn" id="PP" value="PP" checked>
                    <label for="PP">PP</label>
                    <input type="radio" name="txttmn" id="P" value="P">
                    <label for="P">P</label>
                    <input type="radio" name="txttmn" id="M" value="M">
                    <label for="M">M</label>
                    <input type="radio" name="txttmn" id="G" value="G">
                    <label for="G">G</label>
                    <input type="radio" name="txttmn" id="GG" value="GG">
                    <label for="GG">GG</label>
                </div>
            </div>
            <div class="form-group">
                <label for="txteprc">Preço: </label>
                <input class="caixa" type="text" placeholder="Digite o preço" name="txteprc" id="txteprc">
            </div>
            <div class="button-group">
                <input class="botao" type='submit' name='bt' id='bt' value='Escolher'/>
                <a href="../menu.html"><input class="botaona" type="button" value="Menu"></a>
            </div>
        </form>
 
        <?php 
            include '../conexao.php';
            $listar=$cmd->query("select * from tbProduto");
            $total_registros=$listar->rowCount();
            if ($total_registros > 0)
            {
                echo "<table>";
                echo "<tr><th colspan=6>Roupas Cadastradas</th></tr>";
                echo "<tr>
                        <th> Código </th>
                        <th> Peça </th>
                        <th> Cor </th>
                        <th> Estampa </th>
                        <th> Cor </th>
                        <th> Preço </th>
                     </tr>";
                while($linha=$listar->fetch(PDO::FETCH_ASSOC))
                {
                    $codigo=$linha['Id'];
                    $peca=$linha['peca'];
                    $cor=$linha['cor'];
                    $estampa=$linha['estampa'];
                    $tamanho=$linha['tamanho'];
                    $preco=$linha['preco'];
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
            }
            else
            {
                echo "<script language=javascript> window.alert('Não existem registros para alterar!!!'); location.href='../menu.html'</script>";
            }
               
            if (isset($_POST['bt']))
            {
                $codigo=$_POST['txtcodi'];
                $bt=$_POST['bt'];            
               
                if ($bt=='Escolher')
                {
                    $pesq=$cmd-> query("select * from tbProduto where Id='$codigo'");
                    $total_registros=$pesq->rowCount();
                    if ($total_registros > 0)
                    {
                        while($linha=$pesq->fetch(PDO::FETCH_ASSOC))
                        {
                            $codigo=$linha['Id'];
                            $peca=$linha['peca'];
                            $cor=$linha['cor'];
                            $estampa=$linha['estampa'];
                            $tamanho=$linha['tamanho'];
                            $preco=$linha['preco'];
                            echo "<script language=javascript>
                                    document.getElementById('txtcodi').value='$codigo';
                                    document.getElementById('txtpeca').value='$peca';
                                    document.getElementById('txtcor').value='$cor';
                                    document.getElementById('txtetmp').value='$estampa';
                                    if ('$tamanho' == 'PP')
                                        document.getElementById('PP').checked=true;
                                    else if ('$tamanho' == 'P')
                                        document.getElementById('P').checked=true;  
                                    else if ('$tamanho' == 'M')
                                        document.getElementById('M').checked=true;
                                    else if ('$tamanho' == 'G')
                                        document.getElementById('G').checked=true;      
                                    else 
                                        document.getElementById('GG').checked=true;

                                    document.getElementById('txteprc').value='$preco';
                                    document.getElementById('bt').value='Alterar';
                                    document.getElementById('txtcodi').readOnly=true;
                                 </script>";
                        }
                    }
                    else
                    {
                        echo "<script language=javascript> window.alert('Código inexistente!!!'); location.href='alterar.php'; </script>";
                    }
                }
                else if ($bt=='Alterar')
                {
                    $codigo=$_POST['txtcodi'];
                    $peca = $_POST['txtpeca'];
                    $cor = $_POST['txtcor'];
                    $estampa = $_POST['txtetmp'];
                    $tamanho = $_POST['txttmn'];
                    $preco = $_POST['txteprc'];
     
                    $alter=$cmd-> query("update tbProduto set peca='$peca', cor='$cor', estampa='$estampa', tamanho='$tamanho', preco='$preco' where Id='$codigo'");
                    echo "<script language=javascript>
                        window.alert('Registro alterado com sucesso!!!');
                        document.getElementById('bt').value='Escolher';
                        document.getElementById('txtcodi').readOnly=false;
                        </script>";
                    echo "<meta http-equiv='refresh' content='0'/>";
                }
            }                      
        ?>
       
    </body>
</html>
