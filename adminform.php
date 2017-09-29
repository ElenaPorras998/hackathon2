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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
     

</head>
<body>
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
            <?php if ($_POST) { if (empty($_POST['model'])) { echo 'You need to fill in the model.'; $valid = false; } }?>
            <br>
            <br>
            <label for="price">Price:</label>             
            <input type="number" name="price">
            <br>
            <?php if ($_POST) { if (empty($_POST['price'])) { echo 'You need to fill in the price.'; $valid = false; } }?>
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
        var_dump($_POST);
        var_dump($price);
        $stmt=$db->prepare('INSERT INTO mobile1 (brand, model, price, os, color) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute( $_POST['brand'], $_POST['model'], $_POST['price'], $_POST['os1'], $_POST ['$color']);
        header('Location: adminform.php?status=ok');
        exit();
         }
    }
    ?>
</body>
</html>