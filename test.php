<?php
$no_of_layers = 17;
$no_of_traingles = getSummation($no_of_layers); //if layer is 1, triangle is 1; if layer is 2 triangle is 3, and so on
$sample = 300000;
$poss[0] = array(1,1);
$start = 0;
$l[0] = 0;
for($i=1;$i<=$no_of_layers;$i++){
  $l[$i] = $l[$i-1] + $i;
  for($j=$i;$j>0;$j--){
    $start++;
    if($j==$i){
      $poss[$start][0] = $l[$i]+1;
      $poss[$start][1] = $poss[$start][0] + 1;
    }
    else{
      $poss[$start][0] = $poss[$start-1][1];
      $poss[$start][1] = $poss[$start][0] + 1;
    }
  }
}

// var_dump($poss);

for($i=0;$i<$sample;$i++){
  $str = '1';
  $prev = 1;
  for($j=0;$j<$no_of_layers;$j++){
    $rand = rand(0,1);
    $str = $str.'_'.$poss[$prev][$rand];
    $prev = $poss[$prev][$rand];

  }

  if(isset($t[$prev]))
    $t[$prev] = $t[$prev] + 1;
  else{
    $t[$prev] = 1;
  }

}
// var_dump($t);

function getSummation($n){
  $sum = $n;
  while($n!=0){
    $sum = $sum + ($n-1);
    $n--;
  }
  return $sum;
}
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

// echo random_color();
?>
<div style="width:100%;">
  <?php
  // echo end($prev);
  $biggest = 0;
  for($i=$no_of_traingles+1;$i<($no_of_traingles+1+$no_of_layers+1);$i++){
    if(isset($t[$i]) && $t[$i] > $biggest){
      $biggest = $t[$i];
    }
    if(isset($t[$i]))
    $total[] = $t[$i];
    else{
      $total[] = 0;
    }
  }
  // var_dump($total);
  $height = 300;
  $width = 100;
  ?>
  <?php
  foreach($total as $t){
    ?>
  <div style="width:<?php echo (100/count($total));?>%;position:relative;height:300px;float:left;writing-mode: vertical-rl;text-orientation: mixed;"><div style="width:100%;float:left;background:#<?php echo random_color();?>;height: <?php echo (300/$biggest)*$t;?>px;"></div><div style="width:100%;float:left;text-align:center;position:absolute;top:105%;right:50%;color:#000;font-size:10px;"><?php echo (($t/$sample)*100);?>%</div><div style="clear:both;"></div></div>
  <?php

  }
  ?>
  <div style="clear:both;"></div>
</div>
