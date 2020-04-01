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

$prime = [];
$counter = 0;
for($i=2;$i<=100;$i++){
  $flag = 0;
  if(!$prime){
    $prime[] = $i;
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
