<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="deletar.css"/>
    <title>Daletar</title>
</head>
<style>
    body{
    background-color: black;
    color: rgb(255, 255, 255);
    font-family:Verdana, Tahoma, sans-serif;
    display: flex;
    flex-direction: column;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Garante que a div fique centralizada verticalmente */
}

div.quadrado {
    width: 19vw;
    height: 19vh;
    border: 3px solid black;
    background-color: red;
}

footer, nav {
    background-color: #1C003F; /* Cor de fundo especificada */
}

footer *:not(.bg-body-tertiary),
nav * {
    color: #FFFFFF !important; /* Cor branca para todos os elementos, exceto os de cor especificada */
}

form{
    background-color: #f5774dd5;
    text-align: center;
    margin-top: 70px;
    display: flex;
    flex-direction: column;
    font-family:Verdana,  Tahoma, sans-serif ;
    gap: 10px;
    color: rgb(0, 0, 0);
    padding: 70px;
    border-radius: 10px;
}

.botao{
    cursor: pointer;
    background-color: rgb(228, 139, 6);
    border-radius: 10px;
    font-size:medium ;
    border: none;
    padding: 10px;
    width: 150px;
    font-family:Verdana,  Tahoma, sans-serif ;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
    color: black;
    text-decoration: none;
    margin-left: 59px;
}
label{
    font-size: 20px;
}

h1{
    font-size: 36px;
}

#caixa{
    height: 32px;
    border-radius: 5px;
    border: none;
}

/* tabelas */
table{
    width: 80%;
    padding: 3%;
    border: 2px;
    margin-top: 1%;
    text-align: center;
       
}

td ,th{
  border:  2px  solid rgb(228 ,139, 6 );
}
th{
    color: #f6f6f6;
   
}
.maior{
    font-size: 23px;
    color: #f6f6f6;
}
button{
    cursor: pointer;
    background-color: rgb(228, 139, 6);
    border-radius: 10px;
    font-size:medium ;
    border: none;
    padding: 10px;
    width: 500px;
    height: 50px;
    font-family:Verdana,  Tahoma, sans-serif ;
}
</style>
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