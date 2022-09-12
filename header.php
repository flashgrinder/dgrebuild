<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <? wp_head(); ?>
</head>

<body class="page bg--white">

    <!-- Preloader -->
    <div class="page-preloader">
        <div class="page-preloader__pulse"></div>
    </div>
    <!-- /. Preloader -->

    <!-- Modal -->
    <div class="modal hystmodal" id="registration" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window contact" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title modal__field--anim title title--large title--dark title--w-regular center">
                    Регистрация
                </h3>
                <script type="text/javascript" async="async" defer="defer" charset="UTF-8" src=https://timepad.ru/js/tpwf/loader/min/loader.js data-timepad-customized="30874" data-twf2s-event--id="2167247" data-timepad-widget-v2="event_register"></script>
            </div>
        </div>
    </div>
    <!-- /. Modal -->

    <!-- Header -->
    <header class="header">
        <div class="header__body container">
            <a href="./" class="header__logo logo">
                <img src="<?php echo STANDART_DIR ?>img/logo-atameken-1.png" alt="" class="header__logo-img logo__img">
                <img src="<?php echo STANDART_DIR ?>img/logo-atameken-2.png" alt="" class="header__logo-img logo__img">
            </a>
            <div class="header__inner js-menu">
                <nav class="header__menu menu">
                    <ul class="header__menu-list menu__list">
                        <li class="header__menu-item menu__item js-anchor-link">
                            <a href="#about" class="menu__link">
                                О нас
                            </a>
                        </li>
                        <li class="header__menu-item menu__item js-anchor-link">
                            <a href="#speakers" class="menu__link">
                                Спикеры
                            </a>
                        </li>
                        <li class="header__menu-item menu__item js-anchor-link">
                            <a href="#programm" class="menu__link">
                                Программа
                            </a>
                        </li>
                        <li class="header__menu-item menu__item js-anchor-link">
                            <a href="#partners" class="menu__link">
                                Партнёры
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header__action hide">
                    <a href="javascript:;" class="header__button button button--primary" data-modal="#modal">
                        Смотреть в записи
                    </a>
                </div>
            </div>
            <div class="header__burger-menu burger-menu js-burger">
                <span class="burger-menu__line"></span>
            </div>
        </div>
    </header>
    <!-- /. Header -->

    <!-- MAIN -->
    <main class="main page__container">