<?php
/**
 * Created by PhpStorm.
 * User: ejcka
 * Date: 2/20/2018
 */
include("validation.php");
$parts = array("AP-12-3507", "  ap-99-X109  ", "SG-05-ab20",
    "ab-22-N250", "SG-xx-N250", "SG-22-250", "SG-22-250*");
foreach ($parts as $part) {
    if (validPart($part)) {
        echo "$part is valid.<br>";
    }
    else{
        echo "$part is not valid.<br>";
    }
}
echo "<br>";
foreach ($parts as $part) {
    if (validPartRx($part)) {
        echo "$part is valid.<br>";
    }
    else{
        echo "$part is not valid.<br>";
    }
}