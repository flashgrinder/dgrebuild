import gsap from 'gsap';
import modalsForm from '../libs/modules/modals-form.js';
import partnersSlider from '../libs/modules/partners-slider.js';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    modalsForm.init();
    partnersSlider.init();
    
});