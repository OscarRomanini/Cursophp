<?php

// $GLOBALS

$x = 10;
$y = 15;

function soma(){

    echo $GLOBALS['x'] + $GLOBALS['y'];

}

soma();

//SERVER

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
