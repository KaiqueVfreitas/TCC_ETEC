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
        <h1>PESQUISAR</h1>
    </div>
</body>
</html>

<?php
    echo "<link rel='stylesheet' type='text/css' href='list.css'/>";
	include 'conexao.php';
	$lista=$cmd->query("select * from tbProduto");
	$total_registros =$lista->rowCount();
    if ($total_registros > 0)
        {
        echo "<table>";
        echo "<tr> <th colspan=6 class='maior'> Roupas Cadastradas </th> </tr>";
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
        echo "<br/><br/>";
        echo "<button onClick='window.history.back();'>MENU</button>";
       }
    else
        {
        echo "<script language=javascript> window.alert('Não existem registros para exibir!!!'); window.history.back(); </script>";
        }
?>