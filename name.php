<<?php 

echo "What is your first name?\n";
$input1 = rtrim(fgets(STDIN));
echo "What is your last name?\n";
$input2 = rtrim(fgets(STDIN));
echo "Your name is: " . $input1 , " ", $input2;
 ?>