<?php
if(isset($_POST["screenshot"]))
{
    $data = $_POST["screenshot"];

    list($type, $data) = explode(';', $data);
    list(, $data)      = explode(',', $data);
    $data = base64_decode($data);

    $schoolName="something/";
    $fullPath="full/";

    $imageName = '_'.$schoolName. $fullPath .'.png';

    file_put_contents($imageName, $data);

    echo $imageName;
}
?>