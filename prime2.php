<?php
// Print out all numbers from 1 - 100 that are prime ... 2,3,5,7,11,13,17,19,23......
// 6 => 2,3
// Checking the number by all other numbers that are smaller than the number
// 6 => 5,4,3,2
// 4 => 3,2
// 7 => 6,5,4,3,2
//20 => 10
//21

$counter = 0;
for($i=2;$i<=100;$i++){
  $flag = 0;
  if($i%2!=0){
    $start = ($i+1)/2;
  }
  else{
    $start = $i/2;
  }
  for($j=$start;$j>=2;$j--){
    $counter++;
    if($j==$i){
      continue;
    }
    if($i%$j==0){
      $flag = 1;
    }
  }
  if($flag==0){
    echo $i."<br />";
  }
}
echo "<p>Total loop: ".$counter."</p>";
