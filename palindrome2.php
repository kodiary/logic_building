<?php
//101101 //Huh!
//To check if the string is palindrome
$a = 101101;
$b = 1100;
//Reverse of the $a is to be stored here
checkPalindrome($a);
// echo substr($a,0,2);
// echo "<br />";
// echo $a[0].$a[1].$a[2];
function checkPalindrome($n){

  $actual = $n;
  // 4 = 4x1
  // 23 = 2x10 + 3x1
  // 123 = 1x100 + 2x10 + 3x1
  $length = strlen($n);



  //1 = 10^(length-1)
  // 10 = 10^(2-1)
  // 100 = 10^(3-1)

  // 101101 / 100000 = 1    1101
  // 1101 / 10000 = 0    1101
  // 1101 / 1000 = 1    101
  // 101 / 100 = 1  1
  // 1 / 10 = 0   1
  // 1 / 1 = 1
  $num = array();
  for($i=($length-1);$i>=0;$i--){
    $digit = pow(10,$i);
    $quo = (int)($n/$digit);
    $num[] = $quo;
    $rem = $n%$digit;
    $n = $rem;
  }

  $new_num = array_reverse($num);
  $reversed = implode('',$new_num);
  $reversed = (int)$reversed;

  if($actual == $reversed){
    echo "The number ".$actual." is palindrome";
  }
  else{
    echo "The number ".$actual." is not a palindrome";
  }

}
