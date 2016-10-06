import addParallaxEffect from "./components/parallax.js";

export default function app() {
    return {
        init: function() {
            addParallaxEffect(document.getElementById('homeHero'));
            return this;
        }
    }.init();
}