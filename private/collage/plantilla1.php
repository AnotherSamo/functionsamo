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
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/img/icons/Logo.png" />
    <link rel="stylesheet" href="../private/styles/style.css">
    <link rel="stylesheet" href="style.css">
    <title>GaDo Studio | Editor</title>
    <!-- Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
    <script src="https://unpkg.com/cropperjs"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

  </head>

  <body>
  <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-light p-4">
          <h4 class="text-dark">Menu</h4>
          <a href="" class="mon-reg">Información</a><br>
          <a href="../views/faqadmin.php" class="mon-reg">Ayuda</a><br>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light shadow p-3 mb-5 bg-white scale-in-ver-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="../../public/img/icons/Logo.png" width="30" height="30" class="align-top justify-content-center" alt="">
          
        </a>
        <a href="../views/editpageAdmin.php" class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg> Back</a>
      </nav>
    </div>
    
    <style>
      .bx-wrapper{max-width: 1024px!important}
       
      .formm :hover {
        cursor: grab ;
        }

      .image_area {
        height: 800px;
        width: 1000px;
        padding: 100px;
        padding-right:80px;
        padding-top: 200px;
        z-index: 0;
        position: absolute;
        responsive: true,
        property: align-content,
        values: (
        start: flex-start,
        end: flex-end,
        center: center,
        between: space-between,
        around: space-around,
        stretch: stretch,)
      }
      @media (max-width: 500px) {
        .image_area {
          height: 80px;
          width: 80px;
        }
      }

      img {
        max-width: 100%;
      }
    </style>
    
    <div align="center" class="container">
   
      <h3 align="center">Editor Foto Libro</h3>
      <br />

      <div class="container bx-wrapper row d-flex justify-content-center">
          <img  id="saver" class="border border-dark" style="align-item:center; position:relative; z-index: -1;" src="plantillas/Pagina_1.png" alt="plantilla">
            <div id="formulario" class="image_area align-self-center">
              <form class="formm" method="post">
                <label for="upload_image1">
                  <img
                    src="user.png"
                    id="uploaded_plantilla1"
                    class="img-responsive "
                  />
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
      
      <br />
      <div class="row container">
        <div class="screenShotButton" >
          <button type="button" class="btn btn-primary" id="saveScreenshot" >
            Guardar Página
            </button>
            <div id="alert-container"></div>
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
                  <h5 class="modal-title" id="modalLabel">Recortar Imagen</h5>
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

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      
      © <script src="../../private/code/copyrightyear.js"></script>
      <a class="text-reset fw-bold" href="" target="_blank">CloverNet.com.mx</a>
    </div>
    <!-- Copyright -->
  </footer>
</html>
<?php
} else {
  session_start();
  session_destroy();
  header("location:.../index.php");
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
    var imageId = "plantilla1";
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
    aspectRatio: 2/3,
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
        width: 1000,
        height: 800,
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
