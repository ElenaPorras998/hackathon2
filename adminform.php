<?php
require_once 'functions.php';

$db = db_connect();

$valid=true;

if ($_POST)
{
    $brand=htmlspecialchars($_POST['brand']);
    $model=htmlspecialchars($_POST['model']);
    $mainchar=htmlspecialchars($_POST['mainchar']);
    $genre=htmlspecialchars($_POST['genre']);    
    
    
    if (empty($_POST['name']))
    {
        $errors=['You need to fill in the name'];
        $valid=false;
    }
    
    if (empty($_POST['plot']))
    {
        $errors=['You need to fill in the plot'];
        $valid=false;
    }
    
    if ($valid)
    {
        $stmt=$db->prepare('INSERT INTO movies (name, description, main_character, genre) VALUES (?, ?, ?, ?)'); //the values (placeholders) could be written like :name.
        $stmt->execute([$_POST['name'], $_POST['plot'],$_POST['mainchar'],$_POST['genre']]);
        header('Location: workout1.php?status=ok');
        exit();
    }
    else
    {
        foreach($errors as $error)
        {
            echo $error;
        }
    }

}
else
{
    $name=null;
    $plot=null;
    $mainchar=null;
    $genre=null;
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