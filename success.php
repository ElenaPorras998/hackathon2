<?php
include_once 'customer.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Order overwiev</title>
    <style>
        .thanks {
            width: auto;

        }

        body {
            background-color: #81b0ea;
        }

        h1 {
            font-family: courier;
            text-align: center;
            font-size: 50px;
            margin: 100px;    
        }
        h3 {
            text-align: center;
        }
    
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="adminform.php">Add a mobile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="echo.php">Mobile list</a>
      </li>
    </ul>
  </div>
</nav>
    <div class=thanks>
        <h1>Success!</h1>
        
    </div>
    <div>
        <h3>Your data has been saved correctly.</h3>
    </div>

</body>
</html>
