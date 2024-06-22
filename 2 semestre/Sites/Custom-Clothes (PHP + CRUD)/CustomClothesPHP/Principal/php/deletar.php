<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="deletar.css"/>
    <title>Daletar</title>
</head>
<body>
    <header>
        <img src="img/LogoCC.png" alt="Exemplo de imagem" width="300" height="200">
    </header>
    <!-- linha rocha -->
    <div class="linha">
        <h1>DELETAR</h1>
    </div>
    <form id="formDelt" name="formDelt" method="post" action="delet.php">
        <h1>Deletar</h1>
        <label for="txt">Digite o código para deletar</label>
        <input id="caixa" type="text" placeholder="Código" name="txtdeletar" required>
        <input class="botao" type="reset" value="Limpar" />
        <input class="botao" type="submit" value="Deletar">
        <input class="botao" type="button" value="Menu" onclick="location.href='menu.html'">
    </form>
    
</body>
</html>

<?php
include 'conexao.php';
$lista=$cmd->query("select * from tbProduto");
$total_registros =$lista->rowCount();
if ($total_registros > 0)
{
    echo "<table>";
    echo "<tr> <th colspan=6 class='maior'> Roupass Cadastradas </th> </tr>";
    echo "<tr> 
            <th> Código </th>
            <th> Peça </th>
            <th> Cor </th>
            <th> Estampa </th>
            <th> Cor </th>
            <th> Preço </th>
         </tr>";
               
    while($linha=$lista->fetch(PDO::FETCH_ASSOC))
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
    echo "<script language=javascript>
            window.alert('Não existem registros para excluir!!!');
            location.href='menu.html';
        </script>";
}

?>