<?php
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
include("../code/config.php");
$sql = "SELECT * FROM users WHERE name LIKE '%$varsesion'";
$resultado = mysqli_query($link, $sql);
$filas = mysqli_fetch_array($resultado);
if ($varsesion == null || $varsesion = '') {
  header("location:../../index.php");
  die();
}

if ($filas['user_rol'] == 2) {

  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Crop Image Before Upload using CropperJS with PHP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link
      href="https://unpkg.com/cropperjs/dist/cropper.css"
      rel="stylesheet"
    />

    <script src="https://unpkg.com/cropperjs"></script>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

  </head>

  <body>

    <div class="container" align="center" >

      <br />
      <h3 align="center">Crop Image Before Upload using CropperJS with PHP</h3>
      <br />
      
      <div class="row" id="saver" >
        <div class="col-md-12 "  style="background-image: url('bg.jpg')">
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image1">
                  <img
                    src="user.png"
                    id="uploaded_image1"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image1"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image2">
                  <img
                    src="user.png"
                    id="uploaded_image2"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image2"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image3">
                  <img
                    src="user.png"
                    id="uploaded_image3"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image3"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image4">
                  <img
                    src="user.png"
                    id="uploaded_image4"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image4"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image5">
                  <img
                    src="user.png"
                    id="uploaded_image5"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image5"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image6">
                  <img
                    src="user.png"
                    id="uploaded_image6"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image6"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <br />
      <div class="row">
        <div class="screenShotButton" >
          <button type="button" class="btn btn-primary" id="saveScreenshot">
            Save
            </button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
          <div
            class="modal fade"
            id="modal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel">Crop Image</h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true"><i class="bi bi-x-circle-fill"></i></span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="img-container">
                    <div class="row">
                      <div class="col-md-8">
                        <img src="" id="sample_image" />
                      </div>
                      <div class="col-md-4">
                        <div class="preview"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="rotateLeft">
                    <i class="bi bi-arrow-counterclockwise"></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-primary"
                    id="rotateRight"
                  >
                    <i class="bi bi-arrow-clockwise"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="mirrorX">
                    <i class="bi bi-arrow-left-right"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="mirrorY">
                    <i class="bi bi-arrow-down-up"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="crop">
                    Crop
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    
    
  </body>
</html>
<?php

}else {
  $sql2 = "SELECT * FROM students WHERE code_student = '$varsesion'";
  $resultado2 = mysqli_query($link, $sql2);
  $filas2 = mysqli_fetch_array($resultado2);
  if ($filas2['student_rol'] == '3') {
     ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Crop Image Before Upload using CropperJS with PHP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link
      href="https://unpkg.com/cropperjs/dist/cropper.css"
      rel="stylesheet"
    />

    <script src="https://unpkg.com/cropperjs"></script>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

  </head>

  <body>

    <div class="container" align="center" >

      <br />
      <h3 align="center">Crop Image Before Upload using CropperJS with PHP</h3>
      <br />
      
      <div class="row" id="saver" >
        <div class="col-md-12 "  style="background-image: url('bg.jpg')">
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image1">
                  <img
                    src="user.png"
                    id="uploaded_image1"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image1"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image2">
                  <img
                    src="user.png"
                    id="uploaded_image2"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image2"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image3">
                  <img
                    src="user.png"
                    id="uploaded_image3"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image3"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image4">
                  <img
                    src="user.png"
                    id="uploaded_image4"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image4"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image5">
                  <img
                    src="user.png"
                    id="uploaded_image5"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image5"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="image_area">
              <form method="post">
                <label for="upload_image6">
                  <img
                    src="user.png"
                    id="uploaded_image6"
                    class="img-responsive "
                  />
                  <div class="overlay">
                    <div class="text">Click to Change Profile Image</div>
                  </div>
                  <input
                    type="file"
                    name="image"
                    class="image"
                    id="upload_image6"
                    style="display: none"
                  />
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <br />
      <div class="row">
        <div class="screenShotButton" >
          <button type="button" class="btn btn-primary" id="saveScreenshot">
            Save
            </button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
          <div
            class="modal fade"
            id="modal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel">Crop Image</h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true"><i class="bi bi-x-circle-fill"></i></span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="img-container">
                    <div class="row">
                      <div class="col-md-8">
                        <img src="" id="sample_image" />
                      </div>
                      <div class="col-md-4">
                        <div class="preview"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="rotateLeft">
                    <i class="bi bi-arrow-counterclockwise"></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-primary"
                    id="rotateRight"
                  >
                    <i class="bi bi-arrow-clockwise"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="mirrorX">
                    <i class="bi bi-arrow-left-right"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="mirrorY">
                    <i class="bi bi-arrow-down-up"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="crop">
                    Crop
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    
    
  </body>
</html>
<?php
  }else {
    session_start();
    session_destroy();
    header("location:.../index.php");
  }
}
?>

<script>
  $(document).ready(function(){

//Mirror functions variables
var counterY=1;
var counterX=1;

var $modal = $('#modal');
var cropper;

// handle change event for first image input
$('#upload_image1').change(function(event){
    var files = event.target.files;
    var imageId = "plantilla6a-image1";
    var done = function (url) {
        var image = document.getElementById('sample_image');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal.modal('show');
    };

    if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
            done(reader.result);
        };
        reader.readAsDataURL(files[0]);
    }
});

// handle change event for second image input
$('#upload_image2').change(function(event){
    var files = event.target.files;
    var imageId = "plantilla6a-image2";
    var done = function (url) {
        var image = document.getElementById('sample_image');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal.modal('show');
    };

    if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
            done(reader.result);
        };
        reader.readAsDataURL(files[0]);
    }
});

// handle change event for THIRD image input
$('#upload_image3').change(function(event){
    var files = event.target.files;
    var imageId = "plantilla6a-image3";
    var done = function (url) {
        var image = document.getElementById('sample_image');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal.modal('show');
    };

    if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
            done(reader.result);
        };
        reader.readAsDataURL(files[0]);
    }
});

// handle change event for FOURTH image input
$('#upload_image4').change(function(event){
    var files = event.target.files;
    var imageId = "plantilla6a-image4";
    var done = function (url) {
        var image = document.getElementById('sample_image');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal.modal('show');
    };

    if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
            done(reader.result);
        };
        reader.readAsDataURL(files[0]);
    }
});

// handle change event for FIFTH image input
$('#upload_image5').change(function(event){
    var files = event.target.files;
    var imageId = "plantilla6a-image5";
    var done = function (url) {
        var image = document.getElementById('sample_image');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal.modal('show');
    };

    if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
            done(reader.result);
        };
        reader.readAsDataURL(files[0]);
    }
});
// handle change event for sixth image input
$('#upload_image6').change(function(event){
    var files = event.target.files;
    var imageId = "plantilla6a-image6";
    var done = function (url) {
        var image = document.getElementById('sample_image');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal.modal('show');
    };

    if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
            done(reader.result);
        };
        reader.readAsDataURL(files[0]);
    }
});



$modal.on('shown.bs.modal', function() {
    var image = document.getElementById('sample_image');
    cropper = new Cropper(image, {
    aspectRatio: 1,
    viewMode: 3,
    preview: '.preview',
rotatable: true,
    zoomOnWheel : true,
zoomOnTouch : true
    });
    }).on('hidden.bs.modal', function() {
    cropper.destroy();
    cropper = null;
});

//Modal's buttons
$("#rotateLeft").click(function(){
cropper.rotate(-90);
});
$("#rotateRight").click(function(){
cropper.rotate(90);
});
$("#mirrorX").click(function(){
if (counterX %2 == 0) {
  cropper.scaleX(1);
} else {
  cropper.scaleX(-1);
}
counterX++;
});
$("#mirrorY").click(function(){
if (counterY %2 == 0) {
  cropper.scaleY(1);
} else {
  cropper.scaleY(-1);
}
counterY++;	
});	
    
   
$("#crop").click(function(){
    var image = document.getElementById('sample_image');
    var imageId = image.getAttribute("data-imageId");
    var canvas = cropper.getCroppedCanvas({
        width: 400,
        height: 400,
    });

    canvas.toBlob(function(blob) {
        var reader = new FileReader();
        reader.readAsDataURL(blob); 
        reader.onloadend = function() {
            var base64data = reader.result;  
            $.ajax({
                url: "upload.php",
                method: "POST",                	
                data: {image: base64data, imageId: imageId},
                success: function(data){
                    console.log(data);
                    $modal.modal('hide');
                    $('#uploaded_'+imageId).attr('src', data);
                }
            });
        }
    });
});

$("#saveScreenshot").click(function(){
    html2canvas(document.querySelector("#saver")).then(canvas => {
        var screenshot = canvas.toDataURL();
        $.ajax({
            url: "saveScreenshot.php",
            method: "POST",
            data: {screenshot: screenshot},
            success: function(data){
                console.log(data);
                
            }
        });
    });
    var custom_alert = document.createElement("div");
  custom_alert.innerHTML = '<div class="alert alert-info" role="alert">Página Guardada con Éxito</div>';
  custom_alert.classList.add("alert-container");
  document.getElementById("alert-container").appendChild(custom_alert);
  setTimeout(function() {
    custom_alert.remove();
  }, 3000);
});

});        
    
    
</script>