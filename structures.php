<?php
/*
1. if, else, elseif
2. switch
3. ciklusok: for, while, foreach
4. Ternary operator
5.Tömbök(inexelt, asszociativ, tömbök tömbje)
*/ 
// egy számról dönts el h az páros e
$number = 6;
echo "A {$number} egy ";
if ($number % 2 == 0) {
    echo "Páros ";
}
else
{
    echo"Páratlan ";
}
echo "szám.<br>";

$result = ($number % 2 ==0) ? "Páros" : "Páratlan";
echo "A $number egy $result szám";

//ciklussal íras ki 1-10 ig a szamokat
for ($i=0; $i < 10; $i++) { 
    $out = $i + 1;
    echo "{$out}<br>";
}

//hozz létre egy indexelt tömböt 5 gyümölccsel és írasd ki
$fruits = ["apple", "apricot", "banana", "orange","plum"];

//$thing = array("this", "that");

for ($i=0; $i < count($fruits); $i++) {
    echo "$fruits[$i],";
}

foreach ($fruits as $fruit) {
    echo "$fruit, ";
}

//hozd létre a user tömböt, ami tartalmazza a user nevét és életkorát
$users = [
    "Kiss Pista" => 20,
    "Nagy Tibi" => 21,
    "Koós Géza" => 30
];

foreach ($users as $name => $age) {
    echo"$name: $age éves. <br>";
}

// vegyunk fel egy student tombot ami tombok tömbje

$students = [
    ["name" =>"Kovács Péter", "age" => 20],
    ["name" =>"Tóth Géza", "age" => 21],
    ["name" =>"Kiss Ica", "age" => 23]
];

foreach ($students as $student) {
    echo "{$student['name']} kora: {$student['age']} év.";
}

//HF: users tömb, ami majd lehetővé teszi az autehtikációt(bejelentkezést) lehetővé teszi(foreach kiíratás)
?>