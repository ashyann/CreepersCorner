/*
 * Copyright (C) Steven Moughan 2012
 * 
 * Simple Javascript slideshow with image linking.
 * 
 * Note:
 *  There will be a small delay on page load, before the image loads. This
 *  can be rectified by having a "loading" image, or a default image.
 */

var slideshowTimer = 3000;
var sliderImages = new Array();
var sliderHREFs = new Array();

sliderHREFs[0] = '#'; // Default link, in case none is specified.

function addImage(imageURL, linkURL) {
    if(typeof addImage.imageCounter === 'undefined') {
        addImage.imageCounter = 0;
    }
    sliderImages[addImage.imageCounter] = new Image();
    sliderImages[addImage.imageCounter].src = imageURL;
    if(linkURL != '') {
        sliderHREFs[addImage.imageCounter] = linkURL;
    } else {
        sliderHREFs[addImage.imageCounter] = '#';
    }
    addImage.imageCounter++;
}

function goToLink() {
    if(typeof doSlideShow.currentIndex === 'undefined' || doSlideShow.currentIndex == -1 
        || doSlideShow.currentIndex  >= sliderImages.length) { // Make sure there is always a link for the href, and that it is within bounds.
        window.location.href = '#';
    } else {
        window.open(sliderHREFs[doSlideShow.currentIndex]);
    }
}

function doSlideShow() {
    if(!document.images) {
        alert("Oops, something has gone horribly wrong with the slideshow :(");
        return;
    } else {
        if(typeof doSlideShow.currentIndex === 'undefined') {
            doSlideShow.currentIndex = -1;  // Start the index at -1 (out of bounds) because the index is incrimented _BEFORE_ a picture is displayed.
        }
        if(doSlideShow.currentIndex == sliderImages.length - 1) {
            doSlideShow.currentIndex = 0;
        } else {
            doSlideShow.currentIndex++;
        }
        document.images.slideshow.src = sliderImages[doSlideShow.currentIndex].src;
    }
}

function startSlideShow() {
    setInterval("doSlideShow()", slideshowTimer);
}