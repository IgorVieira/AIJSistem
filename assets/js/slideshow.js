var images = [
        "<?= $home ?>/assets/dist/images/slide1.png",
        "<?= $home ?>/assets/dist/images/slide2.png",
        "<?= $home ?>/assets/dist/images/slide3.png"
    ]
var caption = ["caption for slide1", "caption for slide2", "caption for slide3"]


var imagesNumber  = 0
var imagesLength = images.length - 1

function changeImage(x){
    imagesNumber+=x
    if(imagesNumber > imagesLength){
        imagesNumber = 0
    }
    if(imagesNumber < 0){
        imagesNumber = imagesLength
    }

    document.getElementById("slideshow").src = images[imagesNumber]
    document.getElementById("caption").src = caption[imagesNumber]

}