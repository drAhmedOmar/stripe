<?php

    $dsn = 'mysql:host=localhost;dbname=Payment';
    $user = 'root';
    $password = '';
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    try{
        $con = new PDO($dsn, $user, $password, $options);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
       echo 'Failed To Connect ' . $e->getMessage();
    }