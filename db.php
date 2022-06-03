<?php

try{
    $con = new PDO('mysql:host=127.0.0.1;dbname=movieslist','root','');
}catch(Exception $e){
    echo $e->getMessage();
}