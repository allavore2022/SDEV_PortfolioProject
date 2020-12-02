<?php

//echo "<p>Guestbook Functions</p>";

function validName($name)
{
    return !empty($name); //&& ctype_alpha($name);
}

//Starts With function
function startsWith($string, $startString) {
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

function validLinkedIn($linkedIn){
    if(!empty($linkedIn)){
        if((startsWith($linkedIn, "http")) and (strpos($linkedIn, ".com"))){
            return true;
        }
    }elseif (empty($linkedIn)){
        return true;
    }
}

function validEmail($email){
    if(!empty($email)){
        if(strpos($email, ".com")){
            return true;
        }
    }elseif(empty($email)){
        return true;
    }
}

function validMet($selectedMet){
//    //$validMetOptions = array("Meetup", "Job Fair" , "We haven't met yet", "Other");
//    $validMetOptions = array("1", "2", "3", "4");
//
//    //Check each topping and return false if its not valid
//    foreach($validMetOptions as $validMetOption){
//        if(!in_array($validMetOption, $selectedMet)){
//            return false;
//        }
//    }
//
//    //Option is valid
//    return true;
    if($selectedMet != "choose"){
        return true;
    }
}