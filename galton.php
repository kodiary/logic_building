<?php
$balls = 150000;
$layers = 10;

rand(1,5); // 1 2 3 4 5

for($i=1;$i<=$balls;$i++){//Looping through each ball

  for($j=1;$j<=$layers+1;$j++){//Looping through number of layers to see where the ball reach.. The last layer is the tunnel where the ball falls
    if($j==1){
      $path = 1; // The ball surely falls in 1 number point in the path because that's the only possible
    }
    $path = rand($j+$path,$path+$j+1); // The formula for the next two balls would be current_ball_number+current_layer_number and current_ball_number+current_layer_number+1

  }
  if(!isset($final[$path])){
    $final[$path] = 0;
  }
  $final[$path]++;
}
ksort($final); //while generating the final array the array are made randomly because the ball falls in random tunnel, so ksort will help array to sort by key which means smallest numbered point should be in the first place of array
// var_dump($final);die();
$max = max($final);//Finding out the maximum value shall help later while creating graph to calculate the length of the bar
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

  // var_dump($total);
  $height = 300;
  $width = 100;
  ?>
  <?php
  foreach($final as $t){
    ?>
  <div style="width:<?php echo (100/count($final));?>%;position:relative;height:<?php echo $height?>px;float:left;writing-mode: vertical-rl;text-orientation: mixed;"><div style="width:100%;float:left;background:#<?php echo random_color();?>;height: <?php echo (300/$max)*$t;?>px;"></div><div style="width:100%;float:left;text-align:center;position:absolute;top:105%;right:50%;color:#000;font-size:10px;"><?php echo (($t/$balls)*100);?>%</div><div style="clear:both;"></div></div>
  <?php

  }
  ?>
  <div style="clear:both;"></div>
</div>
