<?php
    include("conexao.php");
    //decodicar em json esta vindo em forma de http

    $json = file_get_contents('php://input');

    //transforma em array associativo
    $array = json_decode($json,true);

    //como o php demonstra o json vai ficar 
     $array = array('login' => 'adm@admin.com','senha' => '123');
    //sql ()query
    //-> print_r($array)

    //sql () query
    $sql = "SELECT * FROM TB_USUARIO WHERE email_us ='".$array['login']."' AND senha_us ='".$array['senha']."'";
    //echo sql

    //executar
    $con -> query($sql);
    if($con -> affected_rows == 1){}
        //fazer a respota para voltar ao c# em forma json
        $rep = array('resp'=>'yes');
        // codificar
        echo json_encode($rep);

?>