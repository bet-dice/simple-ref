<?php
$server = "http://bet-dice.github.io/simple-ref";
$ref = rand(2142, 99999999);
setcookie("RefID","$ref",time()+(3600*24));
?>
<meta http-equiv="refresh" content="6; URL=<?php echo $server; ?>/simpleref.php">
