<?php
$string1 = "hej";
$string2 = "san";

$stringSamman = $string1.$string2;

echo $stringSamman;


echo "<p>".substr($stringSamman, 1,2);

if($string1=="hej"){
    echo "<p>".$string1;
}
else {
    echo"<p>"."hejdå";
}
?>



