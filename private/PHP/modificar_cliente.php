<?php 
include('../code/config.php');

$id_user=$_POST['id_'];
$name=$_POST['name_'];
$pack=$_POST['pack_'];
$dire=$_POST['dire_'];

$mod1="UPDATE `users` SET `name`='$name',`package`='$pack',`address`='$dire' WHERE `id_user`='$id_user'";

$resultado= mysqli_query($link, $mod1);

mysqli_close($link);

?>