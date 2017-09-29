<?php 
require 'os.php';
require 'colors.php';
require_once 'functions.php';
$db = db_connect();

$stmt = $db->prepare('SELECT * FROM mobiles1');
$stmt ->execute();
$mobiles = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="adminform.php">Add a mobile </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="echo.php">Mobile list</a><span class="sr-only">(current)</span>
        </li>
        </ul>
    </div>
    </nav>

<?php
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
    echo 'Color: ' . htmlspecialchars($colors[$mobile['color']]);
    echo '<br>';
    echo  '<a href="edit.php?id=' . htmlspecialchars($mobile['id']) . '">edit</a>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
}

?>
</body>
</html>

