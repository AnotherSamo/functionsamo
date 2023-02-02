<?php
if (isset($_POST["screenshot"])) {

    session_start();

    $varsesion = $_SESSION['usuario'];
    include("../code/config.php");
    $sql = "SELECT * FROM users WHERE name LIKE '%$varsesion'";
    $resultado = mysqli_query($link, $sql);
    $filas = mysqli_fetch_array($resultado);
    if ($filas['user_rol'] == '2') {
        $folder = 'images/' . $filas['id_user'] . '/pages'.'/';
    } else {
        $sql2 = "SELECT * FROM students WHERE code_student = '$varsesion'";
        $resultado2 = mysqli_query($link, $sql2);
        $filas2 = mysqli_fetch_array($resultado2);
        if ($filas['user_rol'] == '3') {
            $folder = 'images/' . $filas2['id_user_student'] . '/pages'.'/';
        }
    }
    $data = $_POST["screenshot"];

    list($type, $data) = explode(';', $data);
    list(, $data) = explode(',', $data);
    $data = base64_decode($data);



    $imageName = $folder . time() . '.png';

    file_put_contents($imageName, $data);

    echo $imageName;
}
?>