<?php 
session_start();
function estaLogeado(){
if(isset($_SESSION['id_usuario'])){
    return true;
    }else return false;
}
function esAdmin(){
    if (!estaLogeado()) return false;
    if (isset($_SESSION['administrador']) and $_SESSION['administrador']==1) return true;
    return false;
    }
?>