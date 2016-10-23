export function homePhoto(homePhoto, current) {
    let photoHeight = homePhoto.offsetWidth - (homePhoto.style.borderWidth * 2);
    let ratio = photoHeight / window.innerHeight;

    let newTopMargin = current / ratio * -0.25;
    if (newTopMargin < -(photoHeight / 2)) newTopMargin = -(photoHeight / 2);
    homePhoto.style.marginTop = newTopMargin + 'px';
}

export function homePhotoSetup() {
    let photoElement = document.getElementById('homePhoto');

    if (photoElement != undefined) {
        let photoHeight = photoElement.offsetWidth - (photoElement.style.borderWidth * 2);
        photoElement.style.marginTop = (photoHeight / 2) + 'px';
        return photoElement;
    }

    return false;
}