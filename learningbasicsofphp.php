<?php
//declaring variables :
// variables are case sensitive..
$name = "bhavish is great";
$income = 0;

echo "the $name and income is $income";

// for different lines use <br> 
echo "<br> $name is a gangstar...<br>";
echo "bhavish";

//rules for creating variables.
// same as normal rules only...
$bhavish = array("great", "awesome", "bad", "worst");
echo "<br> $bhavish[2]";

//creating functions in php

//catenation joining two strings using . operator
echo "bhavish" . strlen($name);  

echo str_word_count($name);
echo "<br>";

echo strrev($name);//reverse the string 
echo "<br>";
echo strpos($name, "is"); //from were the string "is" starts

echo str_repeat($name, 232); //will repeat that string those many amount of times
echo "<br>";


echo "<br>";
echo "<br>";
// else if
$a = 10;
$b = 15;

if($a > $b)
echo "bhavish the great ";
else{
echo "useless";
}

// scope and local/global variables :
// get and post php :

/* post will send all data which is inside the box to the link provided in the <action></action> */


?>