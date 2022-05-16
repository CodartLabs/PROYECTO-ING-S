<?php 
session_start();
function estaLogeado(){
if(isset($_SESSION['id_usuario'])){
    return true;
    }else return false;
}
?>