<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER szuperglobális</title>
</head>
<body>
    <h2>SERVER tömb információi</h2>
    <ul>
        <li><strong>Kérés módja: </strong>
        <?php echo "{$_SERVER['REQUEST_METHOD']}";?></li>

        <li><strong>Kért URI: </strong>
        <?php echo "{$_SERVER['REQUEST_URI']}";?></li>

        <li><strong>PHP SELF : </strong>
        <?php echo "{$_SERVER['PHP_SELF']}";?></li>

        <li><strong>Kért : </strong>
        
        
        <?PHP
    if(empty($_SERVER['QUERY_STRING'])) {    
                echo "Nincs";
    } else {   
              
        echo "<strong>QUERY_STRING: </strong>{$_SERVER['QUERY_STRING']}";

        $datas = explode('&', $_SERVER['QUERY_STRING']);
        echo "<br>";
        echo "$datas[0] <br>";
        echo "$datas[1] <br>";
       
        
    }    
        ?>             
    </ul>

    <h3>Szerver adatai</h3>
    //szerver neve SERVER_NAME
    // szerver IP címe SERVER_ADDR

    <ul>
        <li><strong>Szerver neve: </strong>
        <?php echo "{$_SERVER['SERVER_NAME']}";?></li>

        <li><strong>Szerver IP címe: </strong>
        <?php echo "{$_SERVER['SERVER_ADDR']}";?></li>
        
        <h3>felhasználó adatai</h3>
        //böngésző adatai USER_AGENT
        // felhasználó IP címe REMOTE_ADDR

        <li><strong>Kérés módja: </strong>
        <?php echo $_SERVER['USER_AGENT']; ?></li>

        <li><strong>Kérés módja: </strong>
        <?php echo "{$_SERVER['REMOTE_ADDR']}";?></li>

        <P>
           <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=mozso&age=22">Kattints ide egy paraméterezett GET kéréshez</a>
        </P>

        <h3>eddig megnyitások száma</h3>
        <?php
        
      
        if (isset($_COOKIE['counter'])) { 
            $counter = $_COOKIE['counter'] + 1;
        } else {
            $counter = 1;
        }
        setcookie('counter', $counter, time() + 86400);
        echo "<p>Az oldal megnyitásainak száma: <strong>$counter</strong></p>";
        ?>

       <?php
        
        session_start();

        $pageload = 0;

        if (isset($_SEESION['pageload'])) { 
            $counter = $_COOKIE['counter'] + 1;
        } else {
            $counter = 1;
        }
        setcookie('counter', $counter, time() + 86400);
        echo "<p>Az oldal megnyitásainak száma: <strong>$counter</strong></p>";
        ?>

    
</body>
</html>
