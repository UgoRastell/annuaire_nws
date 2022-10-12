<?php

function getPDO()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=annuaire_nws','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
        echo 'Erreur: '.$e->getMessage();
        die();
    }
    return $db;
}

