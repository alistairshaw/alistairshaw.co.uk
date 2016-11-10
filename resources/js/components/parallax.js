export default function addParallaxEffect(element, current) {

    if (!element) return;

    let lowerBound = 300;
    let bottom = window.innerHeight;

    // calculate ratio and new image top
    let ratio = bottom / lowerBound;
    let newImageTop = current / ratio;
    if (newImageTop > lowerBound) newImageTop = lowerBound;

    element.style.backgroundPositionY = '-' + newImageTop + 'px';
}