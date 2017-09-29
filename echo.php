<?php 
require 'genres.php';
require_once 'db.php';
$db = db_connect();

$stmt = $db->prepare('SELECT * FROM movies');
$stmt ->execute();
$mobiles = $stmt->fetchAll();

foreach ($mobiles as $mobile) {
    echo 'Movie: ' . htmlspecialchars($mobile['brand']);
    echo '<br>';
    echo '<br>';
    echo 'Description: ' . htmlspecialchars($mobile['model']);
    echo '<br>';
    echo '<br>';
    echo 'Director: ' . htmlspecialchars($mobile['price']);
    echo '<br>';
    echo '<br>';
    echo 'genre: ' . htmlspecialchars($os[$mobile['os']]);
    echo '<br>';
    echo 'genre: ' . htmlspecialchars($os[$mobile['color']]);
    echo '<br>';
    echo  '<a href="edit.php?id=' . htmlspecialchars($mobile['id']) . '">edit</a>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
}

?>
