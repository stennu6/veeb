<?php
/**
 * Created by PhpStorm.
 * User: stenelisson
 * Date: 12/14/17
 * Time: 12:26 PM
 */
for ($arv = 1; $arv <= 10; $arv++) {
    if ($arv % 2 == 0){
        $varv = 'blue'
    } else {
        $varv = 'red'
    }
    echo '<font color="'.$varv.' " > '.$arv.'</font><br />';
}
?>