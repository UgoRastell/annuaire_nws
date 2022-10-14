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

$pdo = getPDO();

function sql($requete)
{
  global $pdo;

  $sql = $requete;

  $query = $pdo->prepare($sql);

  $query->execute();

  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  return $result;
}

