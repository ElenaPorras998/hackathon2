<?php 
require 'os.php';
require 'colors.php';
require_once 'functions.php';
$db = db_connect();

$stmt = $db->prepare('SELECT * FROM mobiles1');
$stmt ->execute();
$mobiles = $stmt->fetchAll();

foreach ($mobiles as $mobile) {
    echo 'Brand: ' . htmlspecialchars($mobile['brand']);
    echo '<br>';
    echo '<br>';
    echo 'Model: ' . htmlspecialchars($mobile['model']);
    echo '<br>';
    echo '<br>';
    echo 'Price: ' . htmlspecialchars($mobile['price']);
    echo '<br>';
    echo '<br>';
    echo 'OS: ' . htmlspecialchars($os[$mobile['os']]);
    echo '<br>';
    echo 'Color: ' . htmlspecialchars($os[$mobile['color']]);
    echo '<br>';
    echo  '<a href="edit.php?id=' . htmlspecialchars($mobile['id']) . '">edit</a>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
}


?>
