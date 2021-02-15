<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fond</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="./public/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet"  href="/css/main.css" />
    <!-- Font Icon -->

</head>
<body>
    <section class="header">
            <div class="container">
                <nav class="nav">
                        <div class="nav-logo">
                            <a href="#">
                                <img src="{{ asset('/img/xursandwhite.png') }}" alt="Logo fond">
                            </a>
                        </div>
                        <ul class="nav-menu">
                            <li class="nav-menu__item">
                                <a href="#" class="nav-menu__link">О нас</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="#" class="nav-menu__link">Отчеты</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="#" class="nav-menu__link">Блог</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </section>

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="footer-title">
                    <div class="footer-desc">
                        <p>Исключительные права на фото- и иные материалы принадлежат авторам. Любое размещение материалов на сторонних ресурсах необходимо согласовывать с правообладателями.</p>
                        <p>По всем вопросам обращайтесь на <a href="#">mne@nuzhnapomosh.ru</a></p>
                    </div>
                    <div class="footer-link">
                        <div class="footer-link__fund">
                            <div class="footer-link__title">
                                <h3 class="footer-link__text">ФОНД</h3>
                                <hr>
                            </div>
                            <ul class="footer-link__list">
                                <li class="footer-link__item">
                                    <a href="#">О фонде</a>
                                </li>
                                <li class="footer-link__item">
                                    <a href="#">Контакты</a>
                                </li>
                                <li class="footer-link__item">
                                    <a href="#">Отчеты</a>
                                </li>
                                <li class="footer-link__item">
                                    <a href="#">Для НКО</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link__social">
                            <div class="footer-link__title">
                                <h3 class="footer-link__text">МЫ В СОЦСЕТЯХ</h3>
                                <hr>
                            </div>
                            <ul class="footer-link__list">
                                <li class="footer-link__item">
                                    <a href="#">
                                        <em class="fab fa-telegram-plane"></em>
                                        Telegram
                                    </a>
                                </li>
                                <li class="footer-link__item">
                                    <a href="#">
                                        <em class="fab fa-facebook-f"></em>
                                        Facebook
                                    </a>
                                </li>
                                <li class="footer-link__item">
                                    <a href="#">
                                        <em class="fab fa-instagram"></em>
                                        Instagram
                                    </a>
                                </li>
                                <li class="footer-link__item">
                                    <a href="#">
                                        <em class="fab fa-youtube"></em>
                                        Youtube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-corp">
                    <hr>
                    <div class="footer-corp__desc">
                        <div class="plus">
                            18+
                        </div>
                        <p>&#169 2021. Проект Благотворительного фонда <a href="#">«Нужна Помощь».</a></p>
                    </div>
                </div>
            </div>
        </footer>

</body>
</html>
