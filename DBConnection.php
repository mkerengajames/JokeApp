<?php
/**
 * Created by PhpStorm.
 * User: mkere
 * Date: 1/26/2019
 * Time: 6:37 AM
 */
$database = "jokes";
$username = "root";
$password = "";

$connection = db2_connect($database, $username , $password);

if($connection){
    echo("db connect success");
}else{
    echo("db connect fail");
}