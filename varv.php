<?php
/**
 * Created by PhpStorm.
 * User: stenelisson
 * Date: 12/14/17
 * Time: 1:35 PM
 */
for($rida = 1; $rida <= 5; $rida++){
    $varv ='#';
    for ($kord = 1; $kord <=6; $kord++){
        $juhuarv = rand(0, 15);
        $symbol = dexchex($juhuarv);
        $varv = $varv.$symbol;
    }
    echo '<font color="'.$varv.'">'.
        'Värviline tekst'.
        '</font>'.
        '<br />';
}
?>