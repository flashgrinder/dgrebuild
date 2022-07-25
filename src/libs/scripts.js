import gsap from 'gsap';
import partnersSlider from '../libs/modules/partners-slider.js';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    partnersSlider.init();
    
});