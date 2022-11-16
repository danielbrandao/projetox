<?php

 $login = $_POST['usuario'];
 $senha = $_POST['senha'];

 if($login != "admin" && $senha != "senha"){
    echo "<script language='javascript' type='text/javascript'>
    alert('Usuário ou Senha inválidos. Tente novamente.'); 
    window.location.href='login.php';</script>";
 }else{
     setcookie("login",$login);
     setcookie("senha", $senha);
     header("Location: index.php");
 }

?>