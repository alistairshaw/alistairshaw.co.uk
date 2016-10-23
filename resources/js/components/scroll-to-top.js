export default function scrollToTop(currentScroll) {
    var scrollToTop = window.document.getElementById('scrollToTop');
    if (scrollToTop == undefined) return;

    if (currentScroll > 100) {
        scrollToTop.style.display = 'block';
    }
    else {
        scrollToTop.style.display = 'none';
    }
}