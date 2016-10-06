export default function addParallaxEffect(element) {
    window.onscroll = function (e) {
        let lowerBound = 300;
        let bottom = window.innerHeight;

        // get current scroll position
        let doc = document.documentElement;
        let current = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

        // calculate ratio and new image top
        let ratio = bottom / lowerBound;
        let newImageTop = current / ratio;
        if (newImageTop > lowerBound) newImageTop = lowerBound;

        element.style.backgroundPositionY = '-' + newImageTop + 'px';
    };
}