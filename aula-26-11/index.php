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
    echo "Variável"."\$var"."é nula/varia!"."<br>";
}
$var = "Bill Gates";
if(is_string($var)){
    echo "Variável"."\$var"."é uma string!"."<br>";
}
$var = 12;
if(is_integer($var)){
    echo "Variável"."\$var"."é um inteiro!"."<br>";
}
$var = false;
if(is_bool($var)){
    echo "Variável"."\$var"."é booleana!"."<br>";
}
 
?>

