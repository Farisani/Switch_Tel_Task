<?php

function search($arr, $prefix){

    $number;

    foreach($arr as $key => $data){
     if($prefix == $data){
         $number = $key;
     }
    
    }
    return $number;

}

function searchDest($arr, $dest){

    $number;

    foreach($arr as $key => $data){
     if($dest == $data){
         $number = $data;
     }
    
    }
    return $number;
}


?>