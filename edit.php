<?php
require_once 'functions.php';
require_once 'os.php';
require_once 'colors.php';
$db= db_connect();


$stmt = $db->prepare('SELECT * FROM mobiles1 WHERE id = ?');
$stmt->execute([$_GET['id']]);
$mobile= $stmt->fetch();

if ($_POST)
{
    $emobile= $db->prepare("UPDATE `mobiles1` SET `brand`= ?, `model`= ?, `price`= ?, `os`= ?, `color`= ? WHERE `id` = ?");
    $emobile->execute([$_POST['brand'], $_POST['model'], $_POST['price'], $_POST['os'], $_POST['color'], $_GET['id']]);

    header('Location: success.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit form</title>
</head>
<body>
    <section>

        <h1>Fabulous Mobiles Edit</h1>


        <div class="form">
        <form action="" method="post">
            Brand:
            <input type="text" name="brand" value="<?php echo htmlspecialchars($mobile['brand'])?>">
            <br>
            <br>
            Model:
            <br>
            <input type="text" name="model" value="<?php echo htmlspecialchars($mobile['model'])?>">
            <br>
            <br>
            Price:            
            <input type="number" name="price" value="<?php echo htmlspecialchars($mobile['price'])?>">
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
