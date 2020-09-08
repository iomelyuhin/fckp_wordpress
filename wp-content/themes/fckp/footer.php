<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FCKP
 */

?>

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
<script src="/assets/js/main.min.js"></script>
<script src="/assets/js/index.min.js"></script>
<script src="/assets/js/dynad.min.js"></script>
</body>
</html>
