<?php
// constante
define("servidor","localhost");
define("banco","XAMARIN_ANDROID");
define("porta","3306");
define("usuario","root");
define("senha","");

// conexao com banco
$con = new mysqli(servidor,usuario,senha,banco,porta);
if($con->connect_error){
	echo $con->connect_error;
}else{
	
	//echo "conectado";
}

?>