<?php
// aqui esta responsavel pela exclusao dos dados
include '../conexao.php';
$peca = $_POST['txtpeca'];
$cor = $_POST['txtcor'];
$estampa = $_POST['txtetmp'];
$tamanho = $_POST['txttmn'];
$preco = $_POST['txteprc'];
$incluir = $cmd->query("insert into tbProduto(peca, cor, estampa, tamanho , preco) 
values('$peca', '$cor', '$estampa', '$tamanho', '$preco')");

echo "<script language='JavaScript'> 
        alert('Dados cadastrados com sucesso!!');
        location.href='cadastro.html';
    </script>"
?>