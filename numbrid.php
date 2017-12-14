<?php
/**
 * Created by PhpStorm.
 * User: stenelisson
 * Date: 12/14/17
 * Time: 12:26 PM
 */
for ($arv = 1; $arv <= 10; $arv++) {
    if ($arv % 2 == 0){
        $varv = 'blue';
    }
    else{
        $varv = 'red';
    }
    echo '<font color="'.$varv.' " > '.$arv
        .'</font><br />';
}

//
$a = 5; $b = 2;
$c = $a++;
$d = $b--;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
//
$a = 5; $b = 2;
$c = ++$a;
$d = --$b;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
//
$kord = 1;
while($kord <=5){
    echo '<i>'.$kord++.'</i><br />';
    if ($kord == 2){
        break
    }
}
//
$kord = 1;
do
    {
    echo '<b>'.$kord++.'</b><br />';
    if($kord == 3){
        continue;
    }
} while($kord <= 5);

//
$kord = 1;
while($kord <=5){
    echo '<b>'.$kord++.'</b><br />';
}
?>