<?php
$server = "http://bet-dice.github.io/simple-ref";
?>
<head>
<title>Earn Clicks</title>
</head>
<body>
<center><h2>Earn Clicks</h2>
</br>
and buy with it some Stuff!
</br>
<h3><a href="getref.php">Activate your Ref Link by Clicking HERE</a></h3>
<input style="width:545px;height:50px;" value="<?php echo $server; ?>/click.php?oid=<?php echo $_COOKIE["RefID"]; ?>" name="RefLink" disabled></input>
</br>
</center>
</body>
