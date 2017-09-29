<?php
require_once 'functions.php';
require_once 'colors.php';
require_once 'os.php';

$db = db_connect();

$valid=true;
$error1=[];

if ($_POST)
{
    $brand=htmlspecialchars($_POST['brand']);
    $model=htmlspecialchars($_POST['model']);
    $price=htmlspecialchars($_POST['price']);
    $os1=htmlspecialchars($_POST['os']);
    $color=htmlspecialchars($_POST['color']);    
    
}
    


else
{
    $brand= null;
    $model= null;
    $price= null;
    $os1= null;
    $color= null;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Admin form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
     

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="adminform.php">Add a mobile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="echo.php">Mobile list</a>
      </li>
    </ul>
  </div>
</nav>
    <section>

        <h1>Fabulous Mobiles</h1>

        <?php $valid = true; ?>
        <div class="form">
        <form action="" method="post">
            <label for="brand">Brand:</label> 
            <input type="text" name="brand">
            <br>
            <?php 
                if ($_POST)  {
                    $brand = htmlspecialchars($_POST['brand']); 
                    if (empty($_POST['brand'])) { 
                        echo 'You need to fill in the brand.';
                        $valid = false;  
                    } 
                }
            ?>
            <br>
            <br>
            <label for="model">Model:</label> 
            <input type="text" name="model">
            <br>
            <?php if ($_POST) {$model=htmlspecialchars($_POST['model']); { if (empty($_POST['model'])) { echo 'You need to fill in the model.'; $valid = false; } } }?>
            <br>
            <br>
            <label for="price">Price:</label>             
            <input type="number" name="price">
            <br>
            <?php if ($_POST) { $price=htmlspecialchars($_POST['price']); { if (empty($_POST['price'])) { echo 'You need to fill in the price.'; $valid = false; } } }?>
            <br>
            <br>
            <label for="os">Operating System:</label> 
            <select name="os">
                <?php foreach ($os as $i=>$osi): ?>
                    <option value="<?php echo $i?>"><?php echo $osi?></option> 
                <?php endforeach; ?>
            </select>
            <br>
            <br>
            <label for="color "> Color:</label>
            <select name="color">
                <?php foreach ($colors as $i=>$color): ?>
                    <option value="<?php echo $i?>"><?php echo $color?></option> 
                <?php endforeach; ?>
            </select>
            <br>
            <br>
            <input class=btn btn-success; class="button" type="submit" name="submit" value="Submit">
        </form>  
        </div>
    </section>
    <?php
    $db = db_connect();
    if ($_POST) {
        if ($valid)
        {
            $stmt=$db->prepare('INSERT INTO mobiles1 (brand, model, price, os, color) VALUES (?, ?, ?, ?, ?)');
            $stmt->execute($_POST['brand'], $_POST['model'], $_POST['price'], $_POST['$os1'], $_POST['color']);
            header('Location: success.php');
            exit();
        }
    }
    ?>
</body>
</html>