<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "私の名前は、" . $company;
echo "<br/>";
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
print "ご希望の商品は、" . $option;
echo "<br/>";
$quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES);
print "注文数は、" . $quantity;