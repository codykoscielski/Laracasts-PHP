<?php

require 'functions.php';
require 'router.php';

//Connect to the database
$dns = 'mysql:host=localhost;port=3306;dbname=php-demo;charset=utf8mb4';

$pdo = new PDO($dns, 'root', 'root');

$statement = $pdo->prepare('SELECT * FROM posts');

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['Title']}</li>";
}