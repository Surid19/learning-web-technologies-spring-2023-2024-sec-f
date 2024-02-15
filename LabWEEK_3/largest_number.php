<?php

/*$Num1= 3;
$Num2= 4;
$Num3= 5;

if($Num1>$Num2 && $Num1>$Num3){
    echo "Num1 is largest";
}
elseif($Num2>$Num1 && $Num2>$Num3){
    echo "Num2 is largest";
}
else {
    echo "Num3 is largest";
}*/

$Num1= $_REQUEST['Num1'];
$Num2= $_REQUEST['Num2'];
$Num3= $_REQUEST['Num3'];

if($Num1>$Num2 && $Num1>$Num3){
    echo "Num1 is largest";
}
elseif($Num2>$Num1 && $Num2>$Num3){
    echo "Num2 is largest";
}
else {
    echo "Num3 is largest";
}

?>