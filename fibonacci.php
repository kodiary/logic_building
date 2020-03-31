<?php
//Print out all number of fibonacci series from 1 to 100 - 1 1 2 3 5 8 13 21 34........
$i = 1;
echo $i;
echo "<br />";
$j = 1;
echo $j;
echo "<br />";
$s = $i+$j;
while($s<=100){
  echo $s;
  echo "<br />";
  $i = $j;
  $j = $s;
  $s = $i+$j;
}
