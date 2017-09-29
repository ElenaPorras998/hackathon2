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
    <title>Mobiles</title>
</head>
<body>
   

<div class="container">

 <h1>Fabulous Mobiles</h1>
 
 
<?php foreach ($mobiles as $mobile) { ?>
    <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
            <h4 class="card-title"> 
            <div> <?php 
        echo 'Brand: ' . htmlspecialchars($mobile['brand']);
        echo '<br>';
        echo '<br>';  }
        ?> </div> </div></div></div></div>
        {
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
        echo 'Model: ' . htmlspecialchars($mobile['model']);
    }
    ?>
        
      </h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>




 

</div>


 Optional JavaScript 
 jQuery first, then Popper.js, then Bootstrap JS and your own script at the end 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/custom.js"></script>


</body>
</html>