import addParallaxEffect from "./components/parallax";
import homePhoto from "./components/home-photo";

export default function app() {
    return {

        init: function () {
            this.scrollEvents();
            return this;
        },

        scrollEvents: function () {
            let photoElement = document.getElementById('homePhoto');
            let photoHeight = photoElement.offsetWidth - (photoElement.style.borderWidth * 2);
            photoElement.style.marginTop = (photoHeight / 2) + 'px';

            window.onscroll = function (e) {

                let didScroll = true;

                // don't let it scroll too fast
                setInterval(function () {
                    if (didScroll) didScroll = false;
                }, 100);

                if (didScroll) {
                    addParallaxEffect(document.getElementById('homeHero'));
                    homePhoto(photoElement);
                }
            };
        }
    }.init();
}