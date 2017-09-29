<?php
require_once 'functions.php';
require_once 'colors.php';
require_once 'os.php';

$db = db_connect();

if ($_POST)
{
    $brand=htmlspecialchars($_POST['brand']);
    $model=htmlspecialchars($_POST['model']);
    $price=htmlspecialchars($_POST['price']);
    $os1=htmlspecialchars($_POST['os']);
    $color=htmlspecialchars($_POST['color']);    
    
    $stmt=$db->prepare('INSERT INTO mobiles (brand, model, price, os, color) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$brand, $model, $price, $os1, $color]);
    header('Location: adminform.php?status=ok');
    exit();
}
else
{
    $brand= null;
    $model= null;
    $price= null;
    $os1= null;
    $color= null;
}
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'Data added succesfully!';
}
echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin form</title>
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
                <?php foreach ($os as $i=>$osi): ?>
                    <option value="<?php echo $i?>"><?php echo $osi?></option> 
                <?php endforeach; ?>
            </select>
            <br>
            <br>
            Color:
            <select name="color">
                <?php foreach ($colors as $i=>$color): ?>
                    <option value="<?php echo $i?>"><?php echo $color?></option> 
                <?php endforeach; ?>
            </select>
            <br>
            <br>
            <input class="button" type="submit" name="submit" value="Submit">
        </form>  
        </div>
    </section>
</body>
</html>