function setupImgModal(imgId, modalId, modalImgId, captionId, closeIndex) {
    var $img = $('#' + imgId);
    var $modal = $('#' + modalId);
    var $modalImg = $('#' + modalImgId);
    var $captionText = $('#' + captionId);
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
setupImgModal("img1", "myModal", "img01", "caption1", 1);
setupImgModal("img2", "myModal2", "img02", "caption2", 2);
setupImgModal("img3", "myModal3", "img03", "caption3", 3);
setupImgModal("img4", "myModal4", "img04", "caption4", 0);