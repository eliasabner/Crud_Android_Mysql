<?php
  include "conexao.php";
	  
  # string sql
  $sql = "select * from tb_usuario"; 
  
  # executar
  $res = $con->query($sql);

  // mostras os dados
 while($row = $res->fetch_array(MYSQLI_NUM)){
	$dados[] = array( 'id'=> $row[0], 'nome'=> $row[1]);
 }

  // checar 
  // print_r($dados);
  // json_encode(array, opcional(true)) -- criar um resposta em json

echo $json = json_encode($dados, true);

 // json_decode(json) - converte em array

?>