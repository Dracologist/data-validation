<?php
/**
 * Created by PhpStorm.
 * User: Elizabeth Kanzler
 * Date: 2/20/2018
 */

function validPart($input){
    $input = trim($input);
    $pieces = explode("-", $input);
    $category = $pieces[0];
    $warehouse = $pieces[1];
    $part = $pieces[2];
    $category = strtoupper($category);
    if($category != "HW" && $category != "SG" && $category != "AP"){
        return false;
    }
    elseif (!is_numeric($warehouse) || strlen($warehouse) != 2){
        return false;
    }
    elseif (!ctype_alnum($part) || strlen($part) != 4){
        return false;
    }
    else{
        return true;
    }
}