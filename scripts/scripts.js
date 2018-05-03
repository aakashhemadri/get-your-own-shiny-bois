 var images = "images/slide",
 x = 1;

 function displayNextImage() {
     x = (x == 3) ? 0 : x + 1;
     document.getElementById("img").src = images + x + ".jpg";
 }

 function displayPreviousImage() {
     x = (x <= 0) ? 3 : x - 1;
     document.getElementById("img").src = images + x + ".jpg";
 }

 function startTimer() {
     setInterval(displayNextImage, 3000);
 }

