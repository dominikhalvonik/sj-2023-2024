<?php
$premenna = 22;
$premenna1 = "22";
$premenna2 = 'c';
$premenna3 = 0.55;
if(is_integer($premenna)) {
    for($i = 0; $i < 10; $i++) {
        echo $premenna . "<br>";
    }
    while ($premenna > 0) {
        print $premenna . "<br>";
        $premenna -= 1;
    }
    do {
        print $premenna . "<br>";
        $premenna += 1;
    } while($premenna < 10);
} else {
    echo "Nie je to cislo";
}

$pole = [1,2,3,4];
$pole1 = [
    "jedna" => 1,
    "dva" => 2,
    "tri" => 3,
    "st" => 4,
];
$pole2 = [
    "jedna" => [
        1,2,3
    ],
    "dva" => [
        4,5,6
    ],
    "tri" =>[
        6,7,8,9
    ],
    "st" => [
        10,11,12
    ],
];

foreach ($pole2 as $key => $value) {
    echo $key . "<br>";
    foreach ($value as $number) {
        echo $number . " ";
    }
    echo "<br>";
}

$objekt = new stdClass();
$objekt->atribut = 1;
$objekt->atribut2 = 2;

echo $objekt->atribut . "<br>";

?>