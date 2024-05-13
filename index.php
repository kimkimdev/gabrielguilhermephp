<?php

include "cabecalho.php";
if(isset($_GET['erro'])){
    if($_GET['erro']==1){
        echo "Usuario ou senha invalida";
    }
}

include "formLogin.php";
include "rodape.php";
