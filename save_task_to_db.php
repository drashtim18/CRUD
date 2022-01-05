<?php

include_once('db.php');

// input tag emathi apde j enter kriye e $task_name ma store kryu..
$task_name = $_POST['task_name'];

echo "$task_name";

// apde j $task_name ma store kryu ene apde db ma add krvanu che to bas khali task_name ni j colm hoi ema apde e variable ni value pass krvni

$insertQuery = "INSERT INTO `todo`( `task_name`) VALUES ('$task_name')";

mysqli_query($mysqli,$insertQuery);

echo "Entered succesfully!!"
?>