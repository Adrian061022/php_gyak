<?php
/*
CRUD: C Read U D
thf: vagy egy cards a táblán, amiben van name, email, id mező. 
1.MySql
-SELECT name, email, FROM cards WHERE id=10;
-CREATE: INSERT INTO cards (name, email) VALUES ('Tibi','tibi@mzsrk.hu');
UPDATE cards SET email= 'tibi2024@mzsrk.hu' WHERE id=10;
-DELETE: DELETE FROM cards WHERE id=10;
*/


/*CREATE DATABASE businesscards;
use businesscards;

CREATE table cards (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `companyName` VARCHAR(100) DEFAULT NULL,
    `phone` VARCHAR(20) DEFAULT NULL,
    `email` VARCHAR(100) DEFAULT NULL,
    `photo` VARCHAR(255) DEFAULT NULL,
    `status` VARCHAR(10) DEFAULT NULL,
    `note` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

*/
//Data Source Name
$dsn = 'mysql:host=localhost;dbname=businesscards;charset=utf8mb4';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass);  
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo"Sikeres csatlakozás az adatbázishoz!<br>";

    $name = "Tóth Tibi";
    $companyName = "MZSRK Kft.";
    $phone = "+36301234567";
    $email = "asd@gmail.com";
    $photo = null;
    // $status = "active";
    $note = "Ez egy megjegyzés";

    // $sql = "INSERT INTO cards (`name`, `companyName`, `phone`, `email`, `photo`, `note`) VALUES
    // ('$name', '$companyName', '$phone', '$email', '$photo','$note')";

    //$pdo->exec($sql);

    $sql = "INSERT INTO cards (`name`, `companyName`, `phone`, `email`, `photo`, `note`) VALUES
    (?, ?, ?, ?, ?, ?)";

    $stat = $pdo->prepare($sql);
    $stat->execute([$name, $companyName, $phone, $email, $photo,$note]);    



    // $sql = "SELECT * FROM cards where id=11";
    // $result = $pdo->query($sql);

    // $card = $result->fetch(PDO::FETCH_ASSOC);
    // echo "<br>";
    // print_r($card);

   

}catch(PDOException $e) {
    echo "Kapcsolódási hiba: " . $e->getMessage();
   exit();

}


?>
