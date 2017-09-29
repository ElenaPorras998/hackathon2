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
        #links{
            display: flex;
            justify-content: center;
        }
        .bx{
            margin: 2em;
        }
    
    </style>

</head>
<body>
    <div class=thanks>
        <h1>Welcome to Fabulous Mobiles!</h1>
    </div>
    <div>
        <h3>What do you want to do? </h3>
    </div>
    <div id="links">
        <a class="bx btn btn-light" href="adminform.php">Add a mobile</a>
        <a class="bx btn btn-light" href="echo.php">Mobile list</a>        
    </div>
</body>
</html>
