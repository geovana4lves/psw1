<?php
$var = "Bill Gates";
$tipo = gettype($tipo);
echo "$var($tipo)<br>";

$var = 12;
$tipo = gettype($tipo);
echo "$var ($tipo)<br>";

$var = 3.1415;
$tipo = gettype($tipo);
echo "$var ($tipo)<br>";

$var = true;
$tipo = gettype($tipo);
echo "$var ($tipo)<br>";

?>

<?php
if(is_null($var)) {
    echo "Variável \$var é nula/varia! <br>";
}
$var = "Bill Gates";
if(is_string($var)){
    echo "Variável \$var é uma string! <br>";
}
$var = 12;
if(is_integer($var)){
    echo "Variável \$var é um inteiro!<br>";
}
$var = false;
if(is_bool($var)){
    echo "Variável \$var é booleana!<br>";
}
 
?>

<?php
$nota[0]=3;
$nota[1]=9;
$nota[2]=4;
$nota[3]=8;
$nota[5]=2;
$nota[6]=1;
$nota[7]=7;

echo $nota[0];
echo $nota[1];
echo $nota[2];
echo $nota[3];
echo $nota[4];
echo $nota[5];
echo $nota[6];
echo $nota[7];

?>
