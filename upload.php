<?php

if(isset($_POST["image"]))
{
    $data = $_POST["image"];
    $imageId = $_POST["imageId"];

    $image_array_1 = explode(";", $data);
    $image_array_2 = explode(",", $image_array_1[1]);
    $data = base64_decode($image_array_2[1]);


    switch ($imageId) {
        case "image1":
            $folder = "something/upload/";
            break;
        case "image2":
            $folder = "something/upload2/";
            break;
        case "image3":
            $folder = "something/";
            break;
        case "image4":
            $folder = "something/";
            break;
        case "image5":
            $folder = "something/";
            break;
        case "image6":
            $folder = "something/";
            break;
    }


    $imageName = $folder . time() . date('yd') . '_'.$imageId.'.jpg';

    file_put_contents($imageName, $data);

    echo $imageName;

}
?>