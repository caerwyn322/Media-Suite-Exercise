<?php

$text = "===
Title: Media Suite Tech Stack
Author: Ewen Cumming
Slug: mediasuite-tech-stack
===
# Technologies we use
Here at Media Suite we use a range of technologies for our web applications.  Many of our large bespoke projects typically use either Loopback or Django on the server, and [Ember](https://www.emberjs.com/), React or Angular on the client. However, we also have a large number of exciting projects that make use of SilverStripe, a PHP framework designed and built right here in New Zealand.";

//TAGS


$words = str_word_count($text, 1); 

$frequency = array_count_values($words);

arsort($frequency);

$five = array_slice($frequency, 0,5,true);

echo '<pre>';
print_r($five);
foreach ($five as $value){
	echo "$value, ";
}
echo '</pre>';

//CONTENT

$delimeter = '#';
$strings = explode($delimeter, $text);
echo $strings[0];
echo "<br>";
echo "<br>";
echo "<br>";
echo $strings[1];

echo "<br>";
echo "<br>";


//TITlE

$deli2 = "\n";
$target = explode($deli2, $text);
foreach ($target as $value){
	if (str_contains($value, "Title")){
		$temp = $value;
	}
}
$deli3 = ":";
$target = explode($deli3, $temp);
echo $target[1];

//"Cleaner" Format

print "<h1>" . $target[1] . "</h1>";
print "<p>" . $strings[1] . "<p>";
print "<h2> Tags </h2> <br>";
print_r($five);
?>