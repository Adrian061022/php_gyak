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
$dsn = 'mysql:host=localhost;dbname=businesscards;charset=utf8mb';
$user = 'root';
$pass = '';
try {
$pdo = new PDO($dsn, $user, $pass);   
}catch(PDOException $e) {
    echo "Kapcsolódási hiba: " . $e->getMessage();
   

}
?>