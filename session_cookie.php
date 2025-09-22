<?php

//session indítás

session_start();
// Session
if (isset($_POST['session_name']) && !empty($_POST['session_name'])) {
    $_SESSION['name'] = $_POST['session_name'];
    echo"sikeresen beálítottad a sessiont: ". $_SESSION['name']. "<br>";
}

//cookie beállítás

$cookie_name = "user_name";
$cookie_value = "Tibi";
$cookie_time = time() + (86400 * 30); // 30 napig
if (isset($_POST['cookie_value']) && !empty($_POST['cookie_value'])) {
    setcookie($cookie_name, $_POST['cookie_value'],$cookie_time );
    echo"sikeresen beálítottad a cookiet: ". $_COOKIE[$cookie_name]. "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session_cookie</title>
</head>
<body>
    <h2>Session</h2>
    <form action="" method="post">
        <label for="session_name">Add meg a neved a session-höz</label>
        <input type="text" name="session_name" id="session_name">
        <button type="submit">asd</button>
    </form>
    <?php
    if (isset($_SESSION['name'])) {
        echo "<p>A session neve: <strong>". $_SESSION['name']. "</strong></p>";
    }
    else
    {
        echo "nincs session beállítva.";
    }
    
    
    
    ?>


    <form action="" method="post">
        <label for="cookie_value">Add meg a neved a cookie-hoz</label>
        <input type="text" name="cookie_value" id="cookie_value">
        <button type="submit">asd</button>
    </form>
    <?php
    if (isset($_COOKIE[$cookie_name])) {
        echo "<p>A cookie neve: <strong>". $_COOKIE[$cookie_name]. "</strong></p>";
    }
    else
    {
        echo "nincs cookie beállítva.";
    }
    
    
    
    ?>

    <a href="?torles">Session törlése</a>

    <?php
    if (isset($_GET['torles'])) {
        session_unset();
        session_destroy();

        echo "Session törlése megtörtént.";

        //cookie törlése
        setcookie($cookie_name, "", time() - 3600);
        echo"session és suti törlése megtörtént";
    }
    
    
    ?>
</body>
</html>