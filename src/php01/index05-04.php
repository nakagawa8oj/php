<?php
$i = 0;
while ($i < 100) {
  if ($i == 20) {break;}
  if($i%3==0){$i+=1;continue;}
  echo $i++ ."<br/>";}