<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <? wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KFHHRTR');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="page bg--white">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFHHRTR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Preloader -->
    <!-- <div class="page-preloader">
        <div class="page-preloader__pulse"></div>
    </div> -->
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
                    Материалы форума
                </h3>
                <form action="https://email.dis-group.info/add_subscriber.html" accept-charset="utf-8" method="post" class="modal__form wpcf7-form fckng-btfl-frm">
                    <!-- Fields -->
                    <div class="modal__field">
                        <input type="text" name="name" class="modal__input" placeholder="Ваше имя" required="">
                    </div>
                    <div class="modal__field">
                        <input name="custom_telephone" type="text" class="modal__input" placeholder="Номер телефона" value="" required="">
                    </div>
                    <div class="modal__field">
                        <input type="text" name="email" class="modal__input" placeholder="Email" required="">
                    </div>
                    <div class="modal__field">
                        <input name="custom_company" type="text" value="" class="modal__input" placeholder="Компания" required="">
                    </div>
                    <div class="modal__field">
                        <input name="custom_jobtitle" type="text" value="" class="modal__input" placeholder="Должность" required="">
                    </div>
                    <div class="modal__agree-text">
                        <input id="webform_consent#g_0" type="checkbox" name="webform[consent#g-ver#g]" value="true" checked="" required=""><label for="webform_consent#g_0" style="display: block; margin-top: -20px; margin-left: 20px;"> Даю согласие на обработку персональных данных.</label>
                        <input id="webform_consent#P_0" type="checkbox" name="webform[consent#P-ver#P]" value="true" checked="" required=""><label for="webform_consent#P_0" style="display: block; margin-top: -20px; margin-left: 20px;"> Да, я хотел бы получать сообщения от DIS Group о продуктах, решениях и событиях.</label><br>
                    </div>
                    <!-- List token -->
                    <!-- Get the token at: https://email.dis-group.info/campaign_list.html -->
                    <input type="hidden" name="campaign_token" value="oMCTn">
                    <!-- Thank you page (optional) -->
                    <input type="hidden" name="thankyou_url" value="https://data-forum.kz/thanks/">
                    <!-- Subscriber button -->
                    <div class="modal__actions">
                        <input type="submit" value="Получить" style="font-size: 18px; font-weight: bold;" class="modal__btn button button--primary fckng-btfl-frm">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /. Modal -->

    <!-- Modal -->
    <div class="modal hystmodal" id="registration-online" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window contact" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title modal__field--anim title title--large title--dark title--w-regular center">
                    Материалы форума
                </h3>
                <form action="https://email.dis-group.info/add_subscriber.html" accept-charset="utf-8" method="post" class="modal__form wpcf7-form fckng-btfl-frm">
                    <!-- Fields -->
                    <div class="modal__field">
                        <input type="text" name="name" class="modal__input" placeholder="Ваше имя" required="">
                    </div>
                    <div class="modal__field">
                        <input name="custom_telephone" type="text" class="modal__input" placeholder="Номер телефона" value="" required="">
                    </div>
                    <div class="modal__field">
                        <input type="text" name="email" class="modal__input" placeholder="Email" required="">
                    </div>
                    <div class="modal__field">
                        <input name="custom_company" type="text" value="" class="modal__input" placeholder="Компания" required="">
                    </div>
                    <div class="modal__field">
                        <input name="custom_jobtitle" type="text" value="" class="modal__input" placeholder="Должность" required="">
                    </div>
                    <div class="modal__agree-text">
                        <input id="webform_consent#g_0" type="checkbox" name="webform[consent#g-ver#g]" value="true" checked="" required=""><label for="webform_consent#g_0" style="display: block; margin-top: -20px; margin-left: 20px;"> Даю согласие на обработку персональных данных.</label>
                        <input id="webform_consent#P_0" type="checkbox" name="webform[consent#P-ver#P]" value="true" checked="" required=""><label for="webform_consent#P_0" style="display: block; margin-top: -20px; margin-left: 20px;"> Да, я хотел бы получать сообщения от DIS Group о продуктах, решениях и событиях.</label><br>
                    </div>
                    <!-- List token -->
                    <!-- Get the token at: https://email.dis-group.info/campaign_list.html -->
                    <input type="hidden" name="campaign_token" value="oMCTn">
                    <!-- Thank you page (optional) -->
                    <input type="hidden" name="thankyou_url" value="https://data-forum.kz/thanks/">
                    <!-- Subscriber button -->
                    <div class="modal__actions">
                        <input type="submit" value="Получить" style="font-size: 18px; font-weight: bold;" class="modal__btn button button--primary fckng-btfl-frm">
                    </div>
                </form>
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
                        Запросить материалы форума
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