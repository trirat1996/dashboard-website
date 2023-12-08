<?php




$servername1 = "fdb1032.awardspace.net";
$username1 = "4406545_itccm";
$password1 = "trirat1996";
$dbname1 = "4406545_itccm";


   $pdo = new PDO("mysql:host=$servername1;dbname=$dbname1", $username1, $password1);
  // set the PDO error mode to exception
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction
   $pdo->beginTransaction();





?>