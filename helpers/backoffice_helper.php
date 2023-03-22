<?php


date_default_timezone_set("Europe/Lisbon");

function fazerLogin($login,$senha){
    $resultado = selectSQLUnico("SELECT * FROM users WHERE user='$login' AND password='$senha'");

    if(!empty($resultado)){
        session_start();
        $_SESSION["user"] = $resultado;

        $id= $resultado["id"];

        $date = date ("H:i:s - d/m/Y");
       

        iduSQL("UPDATE users SET last_login='$date' WHERE id=$id");

        return true;
    }
    else{
        return false;
    }
}

function verificarLogado(){
    return isset ($_SESSION["user"]);
}

$status = session_status();

if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}else
if($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
}

?>