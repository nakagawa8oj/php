```jsx
<?php

function tri($side, $hight)
{$triarea=$side*$hight/2;}
echo tri(30,15); "三角形の面積は" . $triarea . "㎡";
echo "<br/>";
function sqr($side, $hight)
{$sqrarea=$side*$hight;}
echo sqr(15,15); "四角形の面積は" . $sqrarea . "㎡";
echo "<br/>";
function trp($trpside, $hight)
{trpside=$side1+$side2;
$trparea=($trpside*$hight/2);}
echo trpside(20,10); trp($tripside, 15); "台形の面積は" . $trparea . "㎡";