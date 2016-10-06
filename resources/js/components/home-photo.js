export default function homePhoto() {
    let homePhoto = document.getElementById('homePhoto');
    let photoHeight = homePhoto.offsetWidth - (homePhoto.style.borderWidth * 2);
    homePhoto.style.marginTop = (photoHeight / 2) + 'px';
    let ratio = photoHeight / window.innerHeight;
    window.onscroll = function () {
        // get current scroll position
        let doc = document.documentElement;
        let current = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

        let newTopMargin = current / ratio * -1;
        if (newTopMargin < -(photoHeight/2)) newTopMargin = -(photoHeight/2);
        homePhoto.style.marginTop = newTopMargin + 'px';
    };
}