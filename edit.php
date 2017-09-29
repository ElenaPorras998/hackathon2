<?php
require_once 'functions.php';
require_once 'os.php';
require_once 'colors.php';
require_once 'brands.php';
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Edit form</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adminform.php">Add a mobile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="echo.php">Mobile list</a>
      </li>
    </ul>
  </div>
</nav>
    <section class="mt-5">

        <h1>Fabulous Mobiles Edit</h1>


        <div class="form">
        <form action="" method="post">
        <label for="brand">Brand:</label> 
            <select name="brand">
                <?php foreach ($brands as $i=>$brandi): ?>
                    <option value="<?php echo $i?>"><?php echo $brandi?></option> 
                <?php endforeach; ?>
            </select>
            <br>
            <br>
            Model:
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
