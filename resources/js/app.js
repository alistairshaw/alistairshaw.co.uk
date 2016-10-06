import addParallaxEffect from "./components/parallax";
import homePhoto from "./components/home-photo";

export default function app() {
    return {
        init: function() {
            addParallaxEffect(document.getElementById('homeHero'));
            homePhoto();
            return this;
        }
    }.init();
}