<?php

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=pw2', 'root', 'root');
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

var_dump($pdo);
