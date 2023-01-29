<?php
include('../code/config.php');


$id=$_POST['id_e'];


$borrar="DELETE FROM `users` WHERE `id_user`='$id'";
$resultado=mysqli_query($link, $borrar);

mysqli_close($link);

?>