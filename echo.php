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

<div class="container">

 <h1>Fabulous Mobiles</h1>
 
 <div class="row">
<?php foreach ($mobiles as $mobile) :  ?>
    <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="img/iPhone.jpg" alt="Card image cap">
            <div class="card-body">
            <h4 class="card-title"> 
            <div> <?php 
        echo 'Brand: ' . htmlspecialchars($mobile['brand']);
        echo '<br>';
        echo '<br>';  
        ?> </div>    
        
      </h4>

            <p class="card-text"> <div> <?php echo 'Model: ' . htmlspecialchars($mobile['model']); ?> </div> </p>
            <p class="card-text"> <div> <?php echo 'Price: ' . htmlspecialchars($mobile['price']); ?> </div> </p>
            <p class="card-text"> <div> <?php echo 'Color: ' . htmlspecialchars($colors[$mobile['color']]); ?> </div> </p>
            <a href="edit.php?id=<?php echo htmlspecialchars($mobile['id']) ?>" class="btn btn-primary"> edit </a>
            </div>
            </div>

            

<?php endforeach; ?> 

</div>
 

</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/custom.js"></script>


</body>
</html>
