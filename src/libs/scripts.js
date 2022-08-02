import gsap from 'gsap';
import modalsForm from '../libs/modules/modals-form.js';
import burgerMenu from '../libs/modules/burger-menu.js';
import partnersSlider from '../libs/modules/partners-slider.js';
import gsReveal from '../libs/modules/gsReveal.js';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    modalsForm.init();
    burgerMenu.init();
    partnersSlider.init();
    gsReveal.init();
    
});