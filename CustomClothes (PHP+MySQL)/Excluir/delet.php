<?php
include '../conexao.php';
$vcod=$_POST['txtdeletar'];
//verificando se o código escolhido EXISTE na tabela                
$pesq=$cmd-> query("select * from tbProduto where Id='$vcod'");
$total_registros =$pesq->rowCount();
if ($total_registros > 0)
    {
        //vamos apagar o registro escolhido
        $excl=$cmd-> query("delete from tbProduto where Id='$vcod'");
        echo "<script language=javascript>
                window.alert('Registro excluído com sucesso!!! ');
                location.href='deletar.php';
              </script>";
    }                        
else
    {
        //o usuário escolheu um código que não foi apresentado na listagem
        echo "<script language=javascript>
                window.alert('Registro inexistente!!! ');
                location.href='deletar.php';
            </script>";
    }              
?>