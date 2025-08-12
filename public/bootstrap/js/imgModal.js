function setupImgModal(closeIndex) {
    var $img = $('.myImg').eq(closeIndex);
    var $modal = $('.modalImg').eq(closeIndex);
    var $modalImg = $('.modal-content').eq(closeIndex);
    var $captionText = $('.caption').eq(closeIndex);
    var $closeBtn = $('.close').eq(closeIndex);

    if ($img.length && $modal.length && $modalImg.length && $captionText.length && $closeBtn.length) {
        $img.on('click', function () {
            $modal.show();
            $modalImg.attr('src', this.src);
            $captionText.html(this.alt);
        });
        $closeBtn.on('click', function () {
            $modal.hide();
        });
    }
}

// Setup all modals
setupImgModal(0);
setupImgModal(1);
setupImgModal(2);
setupImgModal(3);

if (window.location.pathname == '/dashboard') {
    setupImgModal(0);
} 