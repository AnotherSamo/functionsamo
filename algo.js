$(document).ready(function(){

    //Mirror functions variables
    var counterY=1;
	var counterX=1;

    var $modal = $('#modal');
    var cropper;

    // handle change event for first image input
    $('#upload_image1').change(function(event){
        var files = event.target.files;
        var imageId = "image1";
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
        var imageId = "image2";
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
        var imageId = "image3";
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
    });
    
});        
        
        