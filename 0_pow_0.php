<?php
// 0 ^ 0 = 1

// 0 ^ n = 0
// n ^ 0 = 1

// 0 ^ 0 = ?
// n ^ n => n ~ 0  1 => 0.9 => 0.8 => 0.7 => 0.6 ....... 0.1 => 0.0

for($i=1;$i>0;$i=$i-0.001){
  echo pow($i,$i);
  echo "<br />";
}
