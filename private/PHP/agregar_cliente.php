<?php
include('../code/config.php');

$usuario=$_POST['agr_usuario'];
$contra=$_POST['agr_contra'];
$name=$_POST['agr_nombre'];
$paquete=$_POST['agr_pack'];
$dire=$_POST['agr_dire'];
$fechaActual_1 = date('y-m-d h:i:s');



$inset1="INSERT INTO `users`(`user_name`, `password`, `name`, `package`, `address`, `created_at`, `user_rol`) VALUES ('$usuario','$contra','$name','$paquete','$dire','$fechaActual_1','2')";

$resultado=mysqli_query($link, $inset1);

$query = "SELECT * FROM `users` ORDER BY `id_user` DESC LIMIT 1";
$result = mysqli_query($link, $query);
$last_row = mysqli_fetch_assoc($result);
$last_id = $last_row['id_user'];

for ($i = 0; $i < 5; $i++) {
    $code = uniqid();
    $code = str_shuffle($code);
    $code = substr($code, 0, 7);
    $query = "INSERT INTO `students` (`id_user_student`, `code_student`, `student_rol`) VALUES ('$last_id','$code', '3')";
    mysqli_query($link, $query);
}


$folder_name = '../../private/collage/something/'.$last_id ;


if (!file_exists($folder_name)) {
    mkdir($folder_name, 0777, true);
    console.log("Carpeta creada con éxito.");
} else {
    console.log( "La carpeta ya existe.");
}



mysqli_close($link);

?>