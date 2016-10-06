export default function addParallaxEffect(element) {
    window.onscroll = function (e) {
        var lowerBound = 300;
        var bottom = window.innerHeight;

        // get current scroll position
        var doc = document.documentElement;
        var current = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

        // calculate ratio and new image top
        var ratio = bottom / lowerBound;
        var newImageTop = current / ratio;
        if (newImageTop > lowerBound) newImageTop = lowerBound;

        element.style.backgroundPositionY = '-' + newImageTop + 'px';
    };
}