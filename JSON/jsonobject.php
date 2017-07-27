<?php
//author Copypasteearth
$myObj = new \stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";
$myArray = array();
for($i = 0;$i < 10;$i++){
    $myArray[$i] = "hello world" . $i;
}
$myObj->hello = $myArray;

$myJSON = json_encode($myObj);

echo $myJSON;
?>