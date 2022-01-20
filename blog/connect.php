<?php


$con= new mysqli('localhost', 'root', '', 'blogga'); 

if (!$con) {
    die(mysqli_error($con));
}
?>