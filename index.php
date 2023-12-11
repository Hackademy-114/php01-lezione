<?php

// PHP - personal home page, HYPERTEXT PREPROCESSOR
//interagire coi database
//può creare le sessioni 
// cookies - 
// supporta diversi protocolli di comunicazione tra client e server - HTTPS 
// cryptare i dati - funzione di hashing 
// può gestire i form e le validazioni 


//! - tag di apertura e chiusura <?php 

//! VARIABILI - uno spazio in memoria in cui salvo dei dati - SCOPE LOCALE, visibili e utilizzabili solo dove sono state inizializzate 

// nome e il valore - dichiarati
// let x = 'valore';
//! DICHIARAZIONE
//! REGOLE PER I NOMI - iniziare $, solo caratteri alfanumerici o _, può iniziare o con lettere o con _, no spazi vuoti, CASE SENSITIVE
$nomevariabile = 'Annalisa'; //nomevariabile è una stringa

//! COSTANTI - differenza SCOPE, range di utilizzo - SCOPE GLOBALE, superglobals
const NAME = 'Nicola';

//! A TIPIZZAZIONE DEBOLE - 
//int myNum =4;

// una variabile ha il tipo di dato del suo valore
$nomevariabile = 5; //nomevariabile è un intero

$nomevariabile = false; //nomevariabile è un booleano

//! DATA TYPES 
// predefiniti, primiti o scalari
$intero = 1; //integer
$booleano = true; //bool
$float = 5.1; // numeri con la virgola
$string = "ciao"; //stringa
$string1 = 'Ciao'; //stringa

// concatenazione di stringhe col . (come il + in js)
//echo  $string . ' a tutti! ' . "\n";

// \n = new line
//echo "$string1 a tutti! \n"; //variable interpolation

$ciao = 'Hello';
//console.log(typeof string);
// var_dump($ciao);
// var_dump($intero);

//! TYPE COERCION - trasformazione del tipo di dato

$x = 10;
//$y = '5ciao'; //riconosce il valore numerico "stringa numerica"
// $x + $y; // 105 15 

//! COMPOSTI o USER DEFINED - DECIDO LA STRUTTURA DEL DATO
// OGGETTI 
//ARRAY - zero based
// $arr = array(1,2,3); NON FATELO E' VECCHIO

$array = [1, '2', 3, ['ciao', true, 45]];
// var_dump($array);

// print_r($array[1]);
// echo $array[2];

//entrare in un array dentro un array
// echo $array[3][0];

//! ARRAY ASSOCIATIVO o CHIAVE-VALORE - key - value
$annalisa = [
    'name' => 'Annalisa',
    'surname' => 'Caldarulo',
    'age' => 26,
    'city' => 'Bari'
];
// LA CHIAVI DEVONO ESSERE UNIVOCHE
$gian = [
    'name' => 'Gianpaolo',
    'surname' => 'Tocchi',
    3,
    'age' => 31,
    'city' => 'Roma',
    // 'ciao' => ['ciao', 1,2,3],
    6

];

// echo $gian['name'];
// var_dump($gian[0]);


//! OPERATORI 
//! matematici - restituiscono un valore numerico
// + - * ** / %

$num = 10;
$num1 = '';
//echo $num ** $num1 . "\n";
//echo $num % $num1;

//! DI CONFRONTO - restituiscono un booleano

// ==, ===, !=, !==, <,>, <=, >=

$num == $num1; //uguaglianza 
$num === $num1; //identicità - guarda il valore e anche il tipo di dato

1 < 2; //true
2 < 1; //false

//!LOGICI -restituiscono un booleano

//&& - restiuisce true se tutti gli operandi sono truthy (diverso da null e quantificabile)

((bool)$num);
((bool)$num1);

$num && $num1; //false
true && true; // true
true && null; //false 
true && false; // false

//|| - restiuisce true se almeno uno degli operandi è truthy, se sono tutti falsy il risultato é false

true || false;

false || $num1; //false

// ! restituisce l'inverso 
!true;


//! ALGORITMI - insieme di comandi in un ordine per risolvere un problema
// sequenza, selezione e iterazione


//! sequenza 

$n = 1;
$m = 2;
$n + $m;

//! SELEZIONE - SCELTA
// comandi di selezione
// if, if else, if elseif else, switch


$vote = 30;

if ($vote == 30) {
    echo "promosso con lode \n";
} elseif ($vote >= 18) {
    echo "promosso \n";
} else {
    echo "bocciato \n";
}

//switch

$v = 100;
switch ($v) {
    case $v == 100:
        echo "lode \n";
        break;
    case $v > 60 && $v < 100:
        echo "promosso \n";
        break;
    case $v == 60:
        echo "promosso ma potevi andare meglio \n";
        break;
    case $v > 0 && $v < 60:
        echo "bocciato \n";
        break;
    default:
        echo "valore non valido \n";
        break;
}

// ! ITERAZIONE, ripetizione CICLO - BLOCCO DI CODICE RIPETUTO 
//for

for ($i = 0; $i < 10; $i++) {
    echo "$i \n";
}


//FOREACH - a ripetere la stessa operazione su TUTTI gli elementi di un array

// arr.forEach(el => shjshjshsshj)

$students = ['Duilio', 'Filippo', 'Giuseppe', 'Salvatore'];

foreach ($students as $student) {
    echo $student . "\n";
}

//si può accedere alla chiave
foreach ($students as $key => $student) {
    echo "in chiave $key c'è " . $student . "\n";
}


//! WHILE
// $i = 0;
// while ($i <= 5) {
//     echo "$i \n";
//     $i++;
// }

//! DO WHILE - fa l'operazione almeno una volta
$i = 0;
do {
    echo $i;
    $i++;
} while ($i <= 5);
