<?php
include 'conexao.php';
$pesq = $_POST["pesquisa"];
$pesq = $cmd -> query("select * from tbProduto where peca like '%$pesq%' ") ;
$total_registros = $pesq->rowCount();
if ($total_registros > 0)
{
echo "<table>";
echo "<tr> <th colspan=6 class='maior'> Roupas Cadastrados </th> </tr>";
echo "<tr> 
        <th> Código </th>
        <th> Peça </th>
        <th> Cor </th>
        <th> Estampa </th>
        <th> Cor </th>
        <th> Preço </th>
     </tr>";
        
while($linha=$pesq->fetch(PDO::FETCH_ASSOC))
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
echo "<a href='pesquisar.html'  class='botaopesq'> voltar </a>";
}
else
{
    echo "<a href='pesquisar.html' class='botaopesq'> voltar </a>";
}
echo "<link rel='stylesheet' type='text/css' href='pesq.css'/>";
?>