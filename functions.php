<?php
//functions
$number = 256;

$root = sqrt($number);
echo $root;
echo "<br>";
echo sqrt(10000);
echo "<br>";
echo pow(2.7,5.3);//arguments
echo "<br>";
echo max(34,56,78,56,567,345,789,890,678,456,78,43,6789);
echo "<br>";
echo min(34,56,78,56,567,345,789,890,678,456,78,43,6789);
$x = 45.10576;
echo "<br>";
echo round($x);
echo "<br>";
echo round($x, 3);
echo "<br>";
echo floor($x);
echo "<hr>";
echo ceil($x);
$sentence="The quick brown fox jumped over a lazy dog.";
echo "<hr>";
echo strtoupper($sentence);
echo "<hr>";
echo strtolower($sentence);
echo "<hr>";
echo ucwords($sentence);
echo "<hr>";
echo str_word_count($sentence);
echo "<hr>";
echo strlen($sentence);//number of letters
echo "<hr>";

$password = "p@55word";
echo "<hr>";
echo md5($password);
echo "<hr>";
echo sha1($password);
//
echo "<hr>";
echo crypt($password, "3558288c5e578a05536ec28c4c1613ae865fe75c");
//date
//files
