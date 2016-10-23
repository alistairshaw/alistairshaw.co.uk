import addParallaxEffect from "./components/parallax";
import { homePhoto, homePhotoSetup } from "./components/home-photo";
import scrollToTop from "./components/scroll-to-top";

export default function app() {
    return {

        init: function () {
            this.scrollEvents();
            return this;
        },

        scrollEvents: function () {
            let photoElement = homePhotoSetup();

            window.onscroll = function () {
                // don't let it scroll too fast
                let didScroll = true;
                setInterval(function () {
                    if (didScroll) didScroll = false;
                }, 100);

                if (didScroll) {
                    // get current scroll position
                    let doc = document.documentElement;
                    let current = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);

                    addParallaxEffect(document.getElementById('homeHero'), current);
                    homePhoto(photoElement, current);
                    scrollToTop(current);
                }
            };
        }
    }.init();
}