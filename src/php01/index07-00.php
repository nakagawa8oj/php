<?php
$people=array()
$people = [

  [ "last_name" => "Yamada",
    "first_name" => "Taro",
    "age" => 25,
    "gender" => "men"],
    
  [ "last_name" => "Suzuki",
    "first_name" => "Jiro",
    "age" => 20,
    "gender" => "men"],
    
  ["last_name" => "Sato",
    "first_name" => "hanako",
    "age" => 16,
    "gender" => "women"]
];

foreach ($people as $person ) {
echo $person . "first_name" . "(" . "age" . "歳" . "gender" . ")" . "<br/>";
}