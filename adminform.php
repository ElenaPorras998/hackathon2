<?php
require_once 'functions.php';

$db = db_connect();

if ($_POST)
{
    $brand=htmlspecialchars($_POST['brand']);
    $model=htmlspecialchars($_POST['model']);
    $price=htmlspecialchars($_POST['price']);
    $os=htmlspecialchars($_POST['os']);
    $color=htmlspecialchars($_POST['color']);    
    
    $stmt=$db->prepare('INSERT INTO mobiles (brand, model, price, os, color) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$_POST['name'], $_POST['plot'],$_POST['mainchar'],$_POST['genre']]);
    header('Location: adminform.php?status=ok');
    exit();
}
else
{
    $brand= null;
    $model= null;
    $price= null;
    $os= null;
    $color= null;
}
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'How about you add more?';
}
echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        section{
            position: absolute;
            left: 30%;
        }
        div.form{
            margin: auto;
            background-color: cyan;
            padding: 5em;
            display: block;
            margin: auto;
        }
        form{
            position: relative;
            align-self: center;
        }
    </style>
</head>
<body>
    <section>
        <h1>Movie DB</h1>

        <div class="form">
        <form action="" method="post">
            Brand:
            <input type="text" name="brand">
            <br>
            <br>
            Model:
            <br>
            <input type="text" name="model">
            <br>
            <br>
            Price:            
            <input type="number" name="price">
            <br>
            <br>
            Operating System:
            <select name="os">
                <option>os </option> 
                <option>os </option>
                <option>os </option>
            </select>
            <br>
            <br>
            Color:
            <select name="color">
                <option>color </option> 
                <option>color </option>
                <option>color </option>
            </select>
            <br>
            <br>
            <input class="button" type="submit" name="submit" value="Submit">
        </form>';  
        </div>
    </section>
</body>
</html>