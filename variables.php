<?php

$name = "Adrian";
$age = 18;
$city = "Karcag";
var_dump($name);

echo"\n<br>Név: {$name} Életkor: {$age} Lakóhely: {$city}";
//konstans

define("PI", 3.14);
echo "<br>", PI;

//adattipusok: string, int, float, bool

    $message = "1";
    echo "Kiir", $message, "értéket.","<br>\n";
    echo "Kiir $message értéket.<br>\n";
    echo "Kiir {$message}darab értéket.<br>\n";
    echo 'Kiir {$message}darab értéket.<br>\n';

    print "Kiir". $message. "értéket."."<br>\n";
    print "Kiir {$message}darab értéket.<br>\n";
    print 'Kiir {$message}darab értéket.<br>\n';

    /*
    git parancsok
        git init: helyi repo inicializálás
        git add . :modosított fájlok hozzáadása a staging area-hoz.
        git commit -m "message": változtatott fájlok commitálása
        git remote add origin https://github.com/felhasznaloneve.git: hozzárendeljük a helyi repot a távoli repohoz
        git config --global user.name ill email:
        git branch -M main : branch főágnév elnevezése
        git push .u origin main: a helyi repo változásait feltölti a távol repoban

    
        hf: töltsd le otthon a repot a saját htdocs mappádba
    */
?>