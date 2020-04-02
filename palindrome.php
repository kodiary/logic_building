<?php
//101101 //Huh!
//To check if the string is palindrome
$a = "Apple";
$b = "Huh";
//Reverse of the $a is to be stored here
checkPalindrome($b);
// echo substr($a,0,2);
// echo "<br />";
// echo $a[0].$a[1].$a[2];
function checkPalindrome($str){
  $str = strtolower($str);
  $count = strlen($str);
  $reverse = "";
  // echo $count;
  for($i=$count-1;$i>=0;$i--){
    $reverse = $reverse.$str[$i];
  }
  if($str == $reverse){
    echo "The string '".$str."' is palindrome";
  }
  else{
    echo "The string '".$str."' is not a palindrome";
  }
}
