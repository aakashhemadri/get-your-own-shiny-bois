 var images = "images/slide",
 currentIndex = 1;
 numberOfImages = 3;
 startIndecurrentIndex = 1;
 function displayNecurrentIndextImage() {
     currentIndex = (currentIndex == numberOfImages) ? startIndecurrentIndex : currentIndex + 1;
     document.getElementById("img").src = images + currentIndex + ".jpg";
 }

 function displayPreviousImage() {
     currentIndex = (currentIndex <= startIndecurrentIndex) ? 3 : currentIndex - 1;
     document.getElementById("img").src = images + currentIndex + ".jpg";
 }

 function startTimer() {
     setInterval(displayNecurrentIndextImage, 3000);
 }

