<?php

//var_dump("cc");die;

$fruits = [
    'fruit1' => 'Banane',
    'fruit2' => 'Orange',
    'fruit3' => 'Fraise',
];

//FOREACH
foreach($fruits as $key => $fruit){
    echo ($key. ' - '. $fruit.'<br>');
}
?>

<hr>

<?php

//FOR
for($i = 1; $i<= count($fruits); $i++){
    echo($fruits['fruit'.$i].'<br>');
}
echo('<br>');

//Affiche Banane 
echo($fruits['fruit1']);

echo('<hr>');

//WHILE
$i=0;
while($i <= 10){
    echo("japprends php <br>");
    $i++;
}

echo '<hr>';

//FUNCTION
function showFruitsArray(array $fruits){
    for($i = 1; $i<= count($fruits); $i++){
        echo($fruits['fruit'.$i].'<br>');
    }
    return null;
}

showFruitsArray($fruits);

//Constante ne change pas de valeur 
const MY_NUMBER = 42 ;

$num1 = 2;
$num2 = 4;

$num1 += 3;

foreach($fruits as $key => $fruit){
    switch($key){
        case 'fruit1' :
            echo 'Je suis une banane <br>';
            break;
        case 'fruit2' :
            echo 'Je suis une orange <br>';
            break;
        default:
            echo 'Je ne suis pas un fruit <br>';
            break;
    }
}


?>