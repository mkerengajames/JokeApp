<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 6:37 AM
 */
$database = "jokes";
$servername = "localhost";
$username = "root";
$password = "";

$server = new mysqli($servername, $username , $password);

if($server){
    echo("server connect success");
}else{
    echo("server connect fail");
}