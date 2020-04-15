<?php
// Print out all numbers from 1 - 100 that are prime ... 2,3,5,7,11,13,17,19,23......
// 6 => 2,3
// Checking the number by all other numbers that are smaller than the number
// 6 => 5,4,3,2
// 4 => 3,2
// 7 => 6,5,4,3,2
//16 => 8,4,2
//20 => 10
//21

//6 => 2,3
//5 => 2,3             2,3,5
//7=>                  2,3,5,7
//11                   2,3,5,7,11


// 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 262 27 28 29 30

$prime = [];
$counter = 0;
for($i=2;$i<=100;$i++){
  if(($i+1)%6 != 0 && ($i-1)%6!=0 && $i>3){
    continue;
  }
  $flag = 0;
  if(!$prime){
    $prime[] = $i;
    echo $i;
    echo "<br />";
  }
  else{
    foreach($prime as $p){
      $counter++;
      if($p > ($i/2)){
        break;
      }
      if($i%$p==0){
        $flag = 1;
        break;
      }
    }
    if($flag==0){
      $prime[] = $i;
      echo $i."<br />";
    }
  }
}
echo "No. of Loops: ".$counter;
