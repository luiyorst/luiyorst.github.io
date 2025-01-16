<?php

function conectar ()
{
    $user="root";
    $pass="";
    $server="localhost";
    $db="bd_antabamba";
    $con=new mysqli($server,$user,$pass,$db);
    return $con;
}

?>