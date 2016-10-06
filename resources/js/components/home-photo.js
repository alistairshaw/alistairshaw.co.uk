export default function homePhoto(homePhoto) {
    let photoHeight = homePhoto.offsetWidth - (homePhoto.style.borderWidth * 2);
    let ratio = photoHeight / window.innerHeight;

    // get current scroll position
    let doc = document.documentElement;
    let current = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);

    let newTopMargin = current / ratio * -0.25;
    if (newTopMargin < -(photoHeight / 2)) newTopMargin = -(photoHeight / 2);
    homePhoto.style.marginTop = newTopMargin + 'px';
}