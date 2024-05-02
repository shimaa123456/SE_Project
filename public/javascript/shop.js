var i = 0, imgarray = ["../public/images/product-img-4.jpg", "../public/images/product-img-5.jpg",
 "../public/images/product-img-6.jpg", "../public/images/1.jpg",
 "../public/images/fruits.jpg", "../public/images/lemon.jpg"];


startfunction();
var myimg = document.getElementById("sliderImg");
function nextfunction() {
    i++;
    if (i >= imgarray.length) i = 0;
    myimg.src = imgarray[i];
}
function startfunction() {
    currentinterval = setInterval(nextfunction, 1000);
}
function stopfunction() {
    clearInterval(currentinterval);
}
function prevfunction() {
    i--;
    if (i < 0) i = imgarray.length - 1;
    myimg.src = imgarray[i];
}

// end of slider js code 

