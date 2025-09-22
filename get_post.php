<?php
    
    /*
    if (($_SERVER["REQUEST_METHOD"]== "POST") && isset($_POST["name"]) && ($_POST["name"]!="")) {
        $name = htmlspecialchars($_POST["name"]);
        $pass = htmlspecialchars($_POST["pass"]);
        echo "Hello, $name ($pass)";
        # code...
    }


     if (($_SERVER["REQUEST_METHOD"]== "GET") && isset($_GET["name"]) && ($_GET["name"]!="")) {
        $name = htmlspecialchars($_GET["name"]);
         $pass = $_GET["pass"];
        echo "Hello, $name ($pass)";
        # code...
    }

    */
    //Ha GET ÉS POST is lehet
    if (isset($_REQUEST["name"])) {
        $name = htmlspecialchars($_REQUEST["name"]);
        $pass = $_REQUEST["pass"];
        echo "Hello, $name ($pass)";
        
    }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Űrlapkezelés</h1>

    <p><a href="?name=admin">Kattints ide az üdvözlésért admin</a></p>
    <form action="" method="post">
        <label for="name">Név:</label>
        <input type="text" name="name" id="name">

        <br>
        <label for="pass">Név:</label>
        <input type="password" name="pass" id="pass">

        <button type="submit">Küld</button>

    </form>
</body>
</html>