function init() {

    // Прелоадер
    let imgs = document.images,
        imagesTotalCount = imgs.length,
        imagesLoadedCount = 0,
        preloader = document.querySelector('.page-preloader');

    for (let i = 0; i < imagesTotalCount; i++) {
        let imageClone = new Image();
        imageClone.onload = imageLoaded;
        imageClone.onerror = imageLoaded;
        imageClone.src = imgs[i].src;
    }

    function imageLoaded() {
        imagesLoadedCount++;

        if (imagesLoadedCount >= imagesTotalCount) {
            setTimeout(function(){
                if(!preloader.classList.contains('is-hide'))
                preloader.classList.add('is-hide');
            }, 1000)
        }
    }
        
}
  
export default { init }