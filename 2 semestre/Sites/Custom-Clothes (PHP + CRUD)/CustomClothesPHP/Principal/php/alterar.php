<!doctype HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Alterar Registros</title>
        <link rel="stylesheet" type="text/css" href=""/>
        <script language="JavaScript">
        function Saindo()
        {
            location.href="index.html";
        }
        </script>
     </head>
    <body>
        <header>
        <img src="img/LogoCC.png" alt="Exemplo de imagem" width="300" height="200">
        </header>
        <!-- linha rocha -->
        <div class="linha">
            <h1>CADASTRAR</h1>
        </div>
        <form id="form1" method="post" action="alterar.php"> 
            <div>
            <label for='txtcodi'>Código a ser alterado&nbsp;</label>            
            <input class="caixa" type='text' name='txtcodi' id='txtcodi' required/>
            </div>       
            <div>
            <label for="txt">Peça de roupa: </label>
            <input class="caixa" type="text" placeholder="Digite aqui..."
            name="txtpeca" id="txtpeca">
            </div>
            <div>
            <label for="txt">Cor: </label>
            <input class="caixa" type="text" placeholder="Cor da Roupa"
            name="txtcor" id="txtcor">
            </div>
            <div>
            <label for="txt">Estampa: </label>
            <input class="caixa" type="text" placeholder="Estampa da Roupa"
            name="txtetmp" id="txtetmp">
            </div>
            <div class="radiotmn">
            <label for="txt">Tamanho: </label>
            <input type="radio" name="txttmn" id="PP" value="PP" checked>
            <label for="txt">PP</label>
            <input type="radio" name="txttmn" id="P" value="P">
            <label for="txt">P</label>
            <input type="radio" name="txttmn" id="M" value="M">
            <label for="txt">M</label>
            <input type="radio" name="txttmn" id="G" value="G">
            <label for="txt">G</label>
            <input type="radio" name="txsexo" id="GG" value="GG">
            <label for="txt">GG</label>
            </div>
            <div>
            <label for="txt">Preço: </label>
            <input class="caixa" type="text" placeholder="Didite o preço"
            name="txteprc" id="txteprc">
            </div>
            <input class="botao" type='submit' name='bt' id='bt' value='Escolher'/>
            <a  href="menu.html" ><input class="botaona" type="button" value="Menu"></a>
        </form>
 
            <?php 
            //estabelecendo a conexão com banco de dados
            include 'conexao.php';
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
                echo "<script language=javascript> window.alert('Não existem registros para alterar!!!'); location.href='menu.html'</script>";
            }
               
        //recebendo os valores preenchidos nos campos do formulário nas variáveis do PHP
        if (isset($_POST['bt']))
        {
            $codigo=$_POST['txtcodi'];
            $bt=$_POST['bt'];            
           
            if ($bt=='Escolher')
            {
                //verificando se o código escolhido EXISTE                
                $pesq=$cmd-> query("select * from tbProduto where Id='$codigo'");
                $total_registros=$pesq->rowCount();
                if ($total_registros > 0) //achou o código escolhido, vamos devolver os dados para a tela
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
 
                //atualizando o registro com os novos valores
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




