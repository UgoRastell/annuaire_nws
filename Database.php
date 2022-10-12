<?php

function getpdo(){
    
    try {
        $db = new PDO('mysql:host=localhost;dbname=test2','root','');
    } catch (PDOException $e) {
        echo 'Erreur: '.$e->getMessage();
        die();
    }
}

getpdo();