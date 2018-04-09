 function displayNextImage() {
     x = (x === images.length - 1) ? 0 : x + 1;
     document.getElementById("img").src = images[x];
 }

 function displayPreviousImage() {
     x = (x <= 0) ? images.length - 1 : x - 1;
     document.getElementById("img").src = images[x];
 }

 function startTimer() {
     setInterval(displayNextImage, 3000);
 }

 var images = [],
     x = -1;
 images[0] = "images/Pixel.jpg";
 images[1] = "images/s9+.jpg";
 images[2] = "images/sony.jpg";
 images[3] = "images/iphonex1.jpg";