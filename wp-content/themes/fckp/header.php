<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FCKP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
    <div class="maincontent">
        <header class="header">
            <div class="header__container container">
                <div class="header__bg"></div>
                <div class="header__logo header__logo--logo logo">
                    <div class="logo__wrap"><a class="logo__fckp" href="/">
                            <div class="logo__fckp-image"><img class="logo__fckp-img" src="/assets/img/icons/logo-fckp.svg" alt="Логотип ФЦКП"/>
                            </div>
                            <div class="logo__fckp-desc">Федеральный центр<br> компетенций промышленности</div></a><a class="logo__stankin" href="/">
                            <div class="logo__stankin-image"><img class="logo__stankin-img" src="/assets/img/icons/logo-stankin.svg" alt="Логотип Станкин"/>
                            </div></a></div>
                </div>
                <div class="header__navigation navigation header__navigation--navigation">
                    <div class="navigation__wrap">
                        <ul class="navigation__list">
                            <li class="navigation__item">
                                <button class="navigation__item-btn js__navBtn" type="button">Направления</button>
                                <div class="navigation__item-sublist js__navList">
                                    <div class="navigation__item-subitem-bg"></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Сертификация материалов</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Метрологическое обеспечение</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Определение свойств материалов</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Механическая обработка деталей</a></div>
                                </div>
                            </li>
                            <li class="navigation__item">
                                <button class="navigation__item-btn js__navBtn" type="button">О ФЦКП</button>
                                <div class="navigation__item-sublist js__navList">
                                    <div class="navigation__item-subitem-bg"></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Что такое ФЦКП</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Виды деятельности</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Преимущества</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Партнёры</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Кейсы</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Связаться с нами</a></div>
                                </div>
                            </li>
                            <li class="navigation__item">
                                <button class="navigation__item-btn js__navBtn" type="button">Пресс-центр</button>
                                <div class="navigation__item-sublist js__navList">
                                    <div class="navigation__item-subitem-bg"></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Новости</a></div>
                                    <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Контакты</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__phone phone header__phone--phone"><a class="phone__link" href="tel:74956063602">
                        <svg class="icon icon-phone phone__icon">
                            <use xlink:href="/assets/img/sprite.svg#phone"></use>
                        </svg>
                        <div class="phone__text">+7 (495) 606-36-02</div></a></div>
                <div class="header__mobile-menu">
                    <div class="header__mobile-menu-nav header__mobile-menu-nav--navigation">
                        <div class="navigation__wrap">
                            <ul class="navigation__list">
                                <li class="navigation__item">
                                    <button class="navigation__item-btn js__navBtn" type="button">Направления</button>
                                    <div class="navigation__item-sublist js__navList">
                                        <div class="navigation__item-subitem-bg"></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Сертификация материалов</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Метрологическое обеспечение</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Определение свойств материалов</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Механическая обработка деталей</a></div>
                                    </div>
                                </li>
                                <li class="navigation__item">
                                    <button class="navigation__item-btn js__navBtn" type="button">О ФЦКП</button>
                                    <div class="navigation__item-sublist js__navList">
                                        <div class="navigation__item-subitem-bg"></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Что такое ФЦКП</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Виды деятельности</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Преимущества</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Партнёры</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Кейсы</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Связаться с нами</a></div>
                                    </div>
                                </li>
                                <li class="navigation__item">
                                    <button class="navigation__item-btn js__navBtn" type="button">Пресс-центр</button>
                                    <div class="navigation__item-sublist js__navList">
                                        <div class="navigation__item-subitem-bg"></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Новости</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Контакты</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__mobile-menu-contacts">
                        <div class="header__mobile-menu-phone header__mobile-menu-phone--phone"><a class="phone__link" href="tel:74956063602">
                                <svg class="icon icon-phone phone__icon">
                                    <use xlink:href="/assets/img/sprite.svg#phone"></use>
                                </svg>
                                <div class="phone__text">+7 (495) 606-36-02</div></a></div><a class="header__mobile-menu-mail" href="mailto:fckp@mail.ru">
                            <div class="header__mobile-menu-mail-icon">
                                <svg class="icon icon-mail header__mobile-menu-mail-pic">
                                    <use xlink:href="/assets/img/sprite.svg#mail"></use>
                                </svg>
                            </div>
                            <div class="header__mobile-menu-mail-text">fckp@mail.ru</div></a>
                    </div>
                </div>
                <div class="header__hamburger header__hamburger--hamburger">
                    <button class="hamburger hamburger--collapse" type="button" aria-label="navigation-menu"><span class="hamburger-box" data-name="menu"><span class="hamburger-inner"></span></span></button>
                </div>
            </div>
        </header>
        <section class="hero">
            <div class="hero__slider">
                <ul class="hero__list">
                    <li class="hero__item active" style="background-image: url('/assets/img/content/hero_01.webp')">
                        <div class="hero__item-wrap">
                            <div class="hero__item-container container">
                                <div class="hero__item-content">
                                    <h1 class="hero__title main-title">Высокоточная механообработка материалов и деталей любой сложности</h1>
                                    <div class="hero__desc main-desc">Центр компетенций НТИ</div>
                                    <div class="hero__btn hero__btn--cta"><a class="cta cta--hero" href="/">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="hero__item" style="background-image: url('/assets/img/content/hero_01.webp')">
                        <div class="hero__item-wrap">
                            <div class="hero__item-container container">
                                <div class="hero__item-content">
                                    <h1 class="hero__title main-title">Проектирование и изготовление опытных образцов изделий</h1>
                                    <div class="hero__desc main-desc"> </div>
                                    <div class="hero__btn hero__btn--cta"><a class="cta cta--hero" href="/">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="hero__item" style="background-image: url('/assets/img/content/hero_01.webp')">
                        <div class="hero__item-wrap">
                            <div class="hero__item-container container">
                                <div class="hero__item-content">
                                    <h1 class="hero__title main-title">Сертификация материалов станкоинструментальной промышленности.</h1>
                                    <div class="hero__desc main-desc"> </div>
                                    <div class="hero__btn hero__btn--cta"><a class="cta cta--hero" href="/">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="hero__item" style="background-image: url('/assets/img/content/hero_01.webp')">
                        <div class="hero__item-wrap">
                            <div class="hero__item-container container">
                                <div class="hero__item-content">
                                    <h1 class="hero__title main-title">Производственный и технологический консалтинг</h1>
                                    <div class="hero__desc main-desc"> </div>
                                    <div class="hero__btn hero__btn--cta"><a class="cta cta--hero" href="/">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="hero__item" style="background-image: url('/assets/img/content/hero_01.webp')">
                        <div class="hero__item-wrap">
                            <div class="hero__item-container container">
                                <div class="hero__item-content">
                                    <h1 class="hero__title main-title">Метрологические измерения</h1>
                                    <div class="hero__desc main-desc"> </div>
                                    <div class="hero__btn hero__btn--cta"><a class="cta cta--hero" href="/">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="hero__slider-pagination">
                    <div class="hero__slider-pagination-container container">
                        <ul class="hero__slider-pagination-list"></ul>
                    </div>
                </div>
                <div class="hero__slider-controls">
                    <div class="hero__slider-controls-container container">
                        <ul class="hero__slider-controls-list">
                            <li class="hero__slider-controls-item hero__slider-controls-item--prev">
                                <svg class="icon icon-arrow-slider-right hero__slider-controls-img">
                                    <use xlink:href="/assets/img/sprite.svg#arrow-slider-right"></use>
                                </svg>
                            </li>
                            <li class="hero__slider-controls-item hero__slider-controls-item--next">
                                <svg class="icon icon-arrow-slider-right hero__slider-controls-img">
                                    <use xlink:href="/assets/img/sprite.svg#arrow-slider-right"></use>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="about__container container">
                <div class="about__slider" data-da="about__content,2,560"><img class="about__slider-img" src="/assets/img/content/hero_03.jpg"></div>
                <div class="about__content">
                    <h2 class="about__title title">Что такое ФЦКП?</h2>
                    <div class="about__text text">Федеральный центр компетенций промышленности (ФЦКП) – это многофункциональный исследовательский центр, специализирующийся на осуществлении разработки и исследовании машиностроительных технологий и процессов.</div>
                    <h3 class="about__subtitle">Задачи, которые решает ФЦКП:</h3>
                    <ul class="about__list point-list">
                        <li class="about__item">уменьшение затрат производства за счет оптимизации технологических и производственных процессов;</li>
                        <li class="about__item">внедрение инновационных систем управления;</li>
                        <li class="about__item">определение факторов масштабирования производства;</li>
                        <li class="about__item">разработка планов модернизации оборудования;</li>
                        <li class="about__item">улучшение качества проектных производственно-технологических решений;</li>
                        <li class="about__item">повышение результативности и надежности технологических процессов предприятия;</li>
                        <li class="about__item">разработка и тестирование опытных образцов и партий готовых изделий различного назначения.</li>
                    </ul>
                    <h3 class="about__subtitle subtitle">Для решения задач, Центр обеспечен:</h3>
                    <div class="about__props about__props--props">
                        <ul class="props">
                            <li class="props__item">
                                <div class="props__item-pic">
                                    <svg class="icon icon-microscope props__icon">
                                        <use xlink:href="/assets/img/sprite.svg#microscope"></use>
                                    </svg>
                                </div>
                                <div class="props__item-content">
                                    <h3 class="props__item-title subtitle">Лабораторией исследования свойств материалов.</h3>
                                    <div class="props__item-desc text">Лаборатория не имеет аналогов на территории Российской Федерации и стран СНГ. </div>
                                </div>
                            </li>
                            <li class="props__item">
                                <div class="props__item-pic">
                                    <svg class="icon icon-ruler props__icon">
                                        <use xlink:href="/assets/img/sprite.svg#ruler"></use>
                                    </svg>
                                </div>
                                <div class="props__item-content">
                                    <h3 class="props__item-title subtitle">Метрологической лабораторией. </h3>
                                    <div class="props__item-desc text">Точность исследований соответствует национальным и отраслевым стандартам ГОСТ, ISO, ASTM.</div>
                                </div>
                            </li>
                            <li class="props__item">
                                <div class="props__item-pic">
                                    <svg class="icon icon-reactor props__icon">
                                        <use xlink:href="/assets/img/sprite.svg#reactor"></use>
                                    </svg>
                                </div>
                                <div class="props__item-content">
                                    <h3 class="props__item-title subtitle">Производственными участками,</h3>
                                    <div class="props__item-desc text">оборудованными высокоавтоматизированным -оборудованием и измерительным инструментом производства мировых лидеров отрасли: «TaylorGobson» (Англия), «KarlZeiss» (Германия), «MahrProductGroup” (Германия), «MitutoyoCorporation» (Япония):</div>
                                    <ul class="about__list point-list">
                                        <li class="about__item">Участком механообработки;</li>
                                        <li class="about__item">Заготовительным участком;</li>
                                        <li class="about__item">Шлифовальным участком;</li>
                                        <li class="about__item">Сварочным участком;</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="about__text text">На данном ресурсе Вы можете более подробно ознакомиться с направлениями нашей деятельности, а также получить консультацию по интересующим вопросам. Для связи с нами заполните форму связи, или просто позвоните нам.</div>
                    <div class="about__btn about__btn--cta"><a class="cta cta--undefined" href="/">Связаться</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="product__container container">
                <h2 class="product__title title">Ключевые виды деятельности ФЦКП</h2>
                <ul class="product__list">
                    <li class="product__item">
                        <div class="product__item-image">
                            <picture class="product__item-img">
                                <source type="image/webp" srcset="/assets/img/content/product_01.webp"/>
                                <source type="image/jpg" srcset="/assets/img/content/product_01.jpg"/><img src="/assets/img/content/product_01.jpg" alt=""/>
                            </picture>
                        </div>
                        <div class="product__item-content">
                            <div class="product__item-content-text">
                                <h3 class="product__item-title subtitle">Высокоточная обработка материалов и изготовление готовых изделий любой сложности</h3>
                                <div class="product__item-desc">Механообработка материалов и деталей, обработка листового материала и труб, сварочные работы,  изготовление изделий из пластмасс.</div>
                            </div>
                            <div class="product__item-cta product__item-cta--ctaLight"></div><a class="ctaLight" href="/">Подробнее</a>
                        </div>
                    </li>
                    <li class="product__item">
                        <div class="product__item-image">
                            <picture class="product__item-img">
                                <source type="image/webp" srcset="/assets/img/content/product_02.webp"/>
                                <source type="image/jpg" srcset="/assets/img/content/product_02.jpg"/><img src="/assets/img/content/product_02.jpg" alt=""/>
                            </picture>
                        </div>
                        <div class="product__item-content">
                            <div class="product__item-content-text">
                                <h3 class="product__item-title subtitle">Проектирование и изготовление опытных образцов изделий и прототипов</h3>
                                <div class="product__item-desc">Разработке опытных образцов и партий готовых изделий различного назначения. <br />Полный цикл работ, начиная от проектирования и подготовки документации по ЕСКД до изготовления готового пробного продукта.</div>
                            </div>
                            <div class="product__item-cta product__item-cta--ctaLight"></div><a class="ctaLight" href="/">Подробнее</a>
                        </div>
                    </li>
                    <li class="product__item">
                        <div class="product__item-image">
                            <picture class="product__item-img">
                                <source type="image/webp" srcset="/assets/img/content/product_03.webp"/>
                                <source type="image/jpg" srcset="/assets/img/content/product_03.jpg"/><img src="/assets/img/content/product_03.jpg" alt=""/>
                            </picture>
                        </div>
                        <div class="product__item-content">
                            <div class="product__item-content-text">
                                <h3 class="product__item-title subtitle">Производственный и технологический консалтинг</h3>
                                <div class="product__item-desc">Разработка методов оптимизации и модернизации технологических и производственных процессов предприятия, внесение качественных изменений в последовательность и содержание работ.</div>
                            </div>
                            <div class="product__item-cta product__item-cta--ctaLight"></div><a class="ctaLight" href="/">Подробнее</a>
                        </div>
                    </li>
                    <li class="product__item product__mobile">
                        <div class="product__item-image">
                            <picture class="product__item-img">
                                <source type="image/webp" srcset="/assets/img/content/product_04.webp"/>
                                <source type="image/jpg" srcset="/assets/img/content/product_04.jpg"/><img src="/assets/img/content/product_04.jpg" alt=""/>
                            </picture>
                        </div>
                        <div class="product__item-content">
                            <div class="product__item-content-text">
                                <h3 class="product__item-title subtitle">Проведение НИОКР по разработке импортозамещающих технологий, оборудования и материалов для станкоинструментальной отрасли</h3>
                                <div class="product__item-desc">Проектирование оборудования, оснастки и инструмента, разработка технологий обработки материалов и создание готовых изделий, разработка новых материалов</div>
                            </div>
                            <div class="product__item-cta product__item-cta--ctaLight"></div><a class="ctaLight" href="/">Подробнее</a>
                        </div>
                    </li>
                    <li class="product__item product__mobile">
                        <div class="product__item-image">
                            <picture class="product__item-img">
                                <source type="image/webp" srcset="/assets/img/content/product_05.webp"/>
                                <source type="image/jpg" srcset="/assets/img/content/product_05.jpg"/><img src="/assets/img/content/product_05.jpg" alt=""/>
                            </picture>
                        </div>
                        <div class="product__item-content">
                            <div class="product__item-content-text">
                                <h3 class="product__item-title subtitle">Исследование состава, структуры и физико-механических свойств различных материалов</h3>
                                <div class="product__item-desc">Определение свойств различных материалов ФЦКП имеет в своем распоряжении уникальный набор современного лабораторного и аналитического оборудования, позволяющего проводить испытания различного уровня сложности.</div>
                            </div>
                            <div class="product__item-cta product__item-cta--ctaLight"></div><a class="ctaLight" href="/">Подробнее</a>
                        </div>
                    </li>
                    <li class="product__item product__mobile">
                        <div class="product__item-image">
                            <picture class="product__item-img">
                                <source type="image/webp" srcset="/assets/img/content/product_01.webp"/>
                                <source type="image/jpg" srcset="/assets/img/content/product_01.jpg"/><img src="/assets/img/content/product_01.jpg" alt=""/>
                            </picture>
                        </div>
                        <div class="product__item-content">
                            <div class="product__item-content-text">
                                <h3 class="product__item-title subtitle">Метрологический контроль</h3>
                                <div class="product__item-desc">Решение измерительных задач, в том числе, для изделий аддитивных технологий.</div>
                            </div>
                            <div class="product__item-cta product__item-cta--ctaLight"></div><a class="ctaLight" href="/">Подробнее</a>
                        </div>
                    </li>
                </ul>
                <div class="product__mobile-cta"><a class="cta cta--product" href="/">Показать ещё</a>
                </div>
            </div>
        </section>
        <section class="benefits">
            <div class="benefits__container container">
                <div class="benefits__wrapper">
                    <h2 class="benefits__title title">ФЦКП в цифрах</h2>
                    <ul class="benefits__list">
                        <li class="benefits__item">
                            <div class="benefits__value">2 057</div>
                            <div class="benefits__desc">Исследований</div>
                        </li>
                        <li class="benefits__item">
                            <div class="benefits__value">1 943</div>
                            <div class="benefits__desc">Успешных проектов</div>
                        </li>
                        <li class="benefits__item">
                            <div class="benefits__value">987</div>
                            <div class="benefits__desc">Исследований</div>
                        </li>
                        <li class="benefits__item">
                            <div class="benefits__value">145</div>
                            <div class="benefits__desc">Цифры</div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="advantages">
            <div class="advantages__container container">
                <h2 class="advantages__title title">Приемущества</h2>
                <ul class="advantages__list">
                    <li class="advantages__item">
                        <div class="advantages__item-pic">
                            <svg class="icon icon-student advantages__item-icon">
                                <use xlink:href="/assets/img/sprite.svg#student"></use>
                            </svg>
                        </div>
                        <h3 class="advantages__item-title">6 кандидатов профильных наук.</h3>
                        <div class="advantages__item-desc">20 высококвалифицированных специалистов</div>
                    </li>
                    <li class="advantages__item">
                        <div class="advantages__item-pic">
                            <svg class="icon icon-books advantages__item-icon">
                                <use xlink:href="/assets/img/sprite.svg#books"></use>
                            </svg>
                        </div>
                        <h3 class="advantages__item-title">Огромная База Знаний МГТУ 'Станкин'</h3>
                        <div class="advantages__item-desc">Так как за спиной стоит Университет Станкин</div>
                    </li>
                    <li class="advantages__item">
                        <div class="advantages__item-pic">
                            <svg class="icon icon-bulldozer advantages__item-icon">
                                <use xlink:href="/assets/img/sprite.svg#bulldozer"></use>
                            </svg>
                        </div>
                        <h3 class="advantages__item-title">Производство опытных образцов</h3>
                        <div class="advantages__item-desc">Собственное оборудование для производства опытных образцов и пробных партий с применением прогрессивных технологий</div>
                    </li>
                    <li class="advantages__item">
                        <div class="advantages__item-pic">
                            <svg class="icon icon-colors advantages__item-icon">
                                <use xlink:href="/assets/img/sprite.svg#colors"></use>
                            </svg>
                        </div>
                        <h3 class="advantages__item-title">Обработка современных материалов нано-размеров, в том числе композитов и керамики</h3>
                        <div class="advantages__item-desc"></div>
                    </li>
                    <li class="advantages__item">
                        <div class="advantages__item-pic">
                            <svg class="icon icon-bulldozer advantages__item-icon">
                                <use xlink:href="/assets/img/sprite.svg#bulldozer"></use>
                            </svg>
                        </div>
                        <h3 class="advantages__item-title">Применение межгосударственных, национальных и отраслевым стандартам ГОСТ, ISO, ASTM.</h3>
                        <div class="advantages__item-desc"></div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="partners">
            <div class="partners__container container">
                <h2 class="partners__title title">Партнёры</h2>
            </div>
            <div class="partners__content">
                <ul class="partners__list">
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                    <li class="partners__item">
                        <div class="partners__item-image">
                            <picture class="partners__item-img">
                                <source type="image/webp" srcset="/assets/img/content/partner_01.webp"/>
                                <source type="image/png" srcset="/assets/img/content/partner_01.png"/><img src="/assets/img/content/partner_01.png" alt="content/partner_01"/>
                            </picture>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="feedback">
            <div class="feedback__container container">
                <div class="feedback__content">
                    <h2 class="feedback__title title">Обратная связь</h2>
                    <div class="feedback__desc desc">Полученная заявка будет обработана в течение 1 рабочего дня</div>
                    <div class="feedback__contacts"><a class="feedback__contacts-item" href="tel:74956063602">
                            <div class="feedback__contacts-item-icon">
                                <svg class="icon icon-phone feedback__contacts-phone-pic">
                                    <use xlink:href="/assets/img/sprite.svg#phone"></use>
                                </svg>
                            </div>
                            <div class="feedback__contacts-phone-text">+7 (495) 606-36-02</div></a><a class="feedback__contacts-item" href="mailto:fckp@mail.ru">
                            <div class="feedback__contacts-item-icon">
                                <svg class="icon icon-mail feedback__contacts-mail-pic">
                                    <use xlink:href="/assets/img/sprite.svg#mail"></use>
                                </svg>
                            </div>
                            <div class="feedback__contacts-mail-text">fckp@mail.ru</div></a></div>
                    <form class="feedback__form" action="" method="POST">
                        <div class="feedback__wrap">
                            <label class="feedback__input-label">
                                <input class="feedback__input" type="text" name="name" placeholder="Имя" required>
                                <div class="feedback__input-req-dot"></div>
                            </label>
                            <label class="feedback__input-label">
                                <input class="feedback__input" type="text" name="phone" placeholder="Телефон" required>
                                <div class="feedback__input-req-dot"></div>
                            </label>
                        </div>
                        <div class="feedback__wrap">
                            <label class="feedback__input-label">
                                <input class="feedback__input" type="text" name="email" placeholder="email">
                            </label>
                            <label class="feedback__input-label">
                                <input class="feedback__input" type="text" name="depart" placeholder="Должность">
                            </label>
                        </div>
                        <label class="feedback__comment">
                            <textarea class="feedback__input" name="message" cols="30" rows="10" placeholder="Комментарий"></textarea>
                        </label>
                        <div class="feedback__action">
                            <div class="feedback__action-disclaimer">Нажимая на кнопку «Отправить», Вы даете <a class="feedback__action-disclaimer-link" href="/privacy.html" target="_blank">соглание на обработку персональных данных</a></div>
                            <label class="feedback__action-button feedback__action-button--cta">
                                <button class="cta" id="sendButton" type="submit">Отправить</button>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer__container container">
                <div class="footer__head">
                    <div class="footer__logo logo logo--footer">
                        <div class="logo__wrap"><a class="logo__fckp" href="/">
                                <div class="logo__fckp-image"><img class="logo__fckp-img" src="/assets/img/icons/logo-fckp-white.svg" alt="Логотип ФЦКП"/>
                                </div>
                                <div class="logo__fckp-desc">Федеральный центр<br> компетенций промышленности</div></a></div>
                    </div>
                    <div class="footer__navigation navigation navigation--footer">
                        <div class="navigation__wrap">
                            <ul class="navigation__list">
                                <li class="navigation__item">
                                    <button class="navigation__item-btn js__navBtn" type="button">Направления</button>
                                    <div class="navigation__item-sublist js__navList">
                                        <div class="navigation__item-subitem-bg"></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Сертификация материалов</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Метрологическое обеспечение</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Определение свойств материалов</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Механическая обработка деталей</a></div>
                                    </div>
                                </li>
                                <li class="navigation__item">
                                    <button class="navigation__item-btn js__navBtn" type="button">О ФЦКП</button>
                                    <div class="navigation__item-sublist js__navList">
                                        <div class="navigation__item-subitem-bg"></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Что такое ФЦКП</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Виды деятельности</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Преимущества</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Партнёры</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Кейсы</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Связаться с нами</a></div>
                                    </div>
                                </li>
                                <li class="navigation__item">
                                    <button class="navigation__item-btn js__navBtn" type="button">Пресс-центр</button>
                                    <div class="navigation__item-sublist js__navList">
                                        <div class="navigation__item-subitem-bg"></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Новости</a></div>
                                        <div class="navigation__item-subitem"><a class="navigation__item-subitem-link" href="/">Контакты</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__phone phone phone--footer"><a class="phone__link" href="tel:74956063602">
                            <svg class="icon icon-phone phone__icon">
                                <use xlink:href="/assets/img/sprite.svg#phone"></use>
                            </svg>
                            <div class="phone__text">+7 (495) 606-36-02</div></a></div>
                </div>
                <div class="footer__links">
                    <div class="footer__mobile"><a class="phone__link" href="tel:74956063602">
                            <svg class="icon icon-phone phone__icon">
                                <use xlink:href="/assets/img/sprite.svg#phone"></use>
                            </svg>
                            <div class="phone__text">+7 (495) 606-36-02</div></a><a class="footer__mobile-menu-mail" href="mailto:fckp@mail.ru">
                            <div class="footer__mobile-menu-mail-icon">
                                <svg class="icon icon-mail footer__mobile-menu-mail-pic">
                                    <use xlink:href="/assets/img/sprite.svg#mail"></use>
                                </svg>
                            </div>
                            <div class="footer__mobile-menu-mail-text">fckp@mail.ru</div></a></div>
                    <ul class="footer__links-column">
                        <li class="footer__links-column-item">
                            <h3 class="footer__links-column-title">Title1</h3>
                            <ul class="footer__links-column-list">
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                            </ul>
                        </li>
                        <li class="footer__links-column-item">
                            <h3 class="footer__links-column-title">Title2</h3>
                            <ul class="footer__links-column-list">
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                            </ul>
                        </li>
                        <li class="footer__links-column-item">
                            <h3 class="footer__links-column-title">Title3</h3>
                            <ul class="footer__links-column-list">
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                            </ul>
                        </li>
                        <li class="footer__links-column-item">
                            <h3 class="footer__links-column-title">Title4</h3>
                            <ul class="footer__links-column-list">
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                                <li class="footer__links-column-list-item"><a class="footer__links-column-link" href="/">Some texts</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footer__copy">
                    <div class="footer__copyright">Copyright © ФЦКП 2020  Все права защищены</div>
                    <div class="footer__policy"><a class="footer__policy-link" href="/policy.html">Политика конфидециальности</a></div>
                </div>
            </div>
        </footer>
    </div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fckp' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fckp_description = get_bloginfo( 'description', 'display' );
			if ( $fckp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fckp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fckp' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
