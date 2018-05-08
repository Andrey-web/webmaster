<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Создание сайтов от частного веб-мастера';
?>

    <!-- Load page -->
    <div class="animationload">
        <div class="loader"></div>
    </div>
    <!-- End load page -->

    <!-- Start Menu-navigation section -->
    <div class="navbar-wrapper" role="navigation">
        <div class="container navigation-top">
            <div class="navwrapper">
                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="menuItem active"><a href="#navhome">Начало</a></li>
                            <li class="menuItem"><a href="#navprofile">Обо мне</a></li>
                            <li class="menuItem"><a href="#navresume">Резюме</a></li>
                            <li class="menuItem"><a href="#navportfolio">Протфолио</a></li>
                            <li class="menuItem"><a href="#navblog">Блог</a></li>
                            <li class="menuItem"><a href="#navcontact">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Menu-navigation section -->

    <div id='contents' class="contents">
        <div id="wraper" class="wraper-card">

            <!-- Start Home section -->
            <section id="navhome">
                <!-- Start Home-header section -->
                <nav class="home-header border-bottom padding-block">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-lg-5 text-right">
                                <!-- Your foto -->
                                <div class="foto">
                                    <!-- for man -->
                                    <img src="/web/webmaster/assets/img/photo.png" alt="Ukieweb">
                                    <!-- for women -->
                                    <!-- <img src="/web/webmaster/assets/img/photo_female.png" alt="Ukieweb"> -->
                                </div>
                                <!-- end your foto -->
                            </div>
                            <div class="col-xs-12 col-sm-7 col-lg-7">
                                <!-- Your Name -->
                                <h1 class="title">Создание и продвижение сайтов</h1>
                                <!-- Your Profession -->
                                <h3 class="sub-title">От Частного Web-мастера</h3>
                                <!-- social icon -->
                                <div class="social">
                                    <ul class="animated" data-animation="fadeIn" data-animation-delay="600">
                                        <!-- social icons -->
                                        <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-youtube"></i></a></li>
                                        <!--
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-behance"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-digg"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-deviantart"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-envelope-square"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-delicious"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-dropbox"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-skype"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-tumblr"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-flickr"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-github-alt"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-renren"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-vk"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-xing"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-weibo"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-rss"></i></a></li>
                                        -->
                                    </ul>
                                </div>
                                <!-- end social icon -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </nav>
                <!-- End Home-header section -->

                <!-- Start Menu section -->
                <nav class="menu"  id="menu">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">

                                <!-- start menu block (profile) -->
                                <a href="#navprofile" class="menu-li">
                                    <!-- img menu block -->
                            <span class="foto">
                                <!-- for man -->
                                <img src="/web/webmaster/assets/img/menu/profile.png" class="menu-img" data-img-name="profile" alt="Ukieweb" />
                                <!-- for women -->
                                <!--  <img src="/web/webmaster/assets/img/menu/profile_female.png" class="menu-img" data-img-name="profile_female" alt="Ukieweb" /> -->
                            </span>
                                    <!-- name menu block -->
                                    <span class="name">Обо мне</span>
                                </a>
                                <!-- end menu block (profile) -->

                                <!-- start menu block (resume) -->
                                <a href="#navresume" class="menu-li">
                                    <!-- img menu block -->
                            <span class="foto">
                                <img src="/web/webmaster/assets/img/menu/resume.png" class="menu-img" data-img-name="resume" alt="Ukieweb">
                            </span>
                                    <!-- name menu block -->
                                    <span class="name">Резюме</span>
                                </a>
                                <!-- end menu block (resume) -->

                                <!-- start menu block (portfolio) -->
                                <a href="#navportfolio" class="menu-li">
                                    <!-- img menu block -->
                            <span class="foto">
                                <img src="/web/webmaster/assets/img/menu/portfolio.png" class="menu-img" data-img-name="portfolio" alt="Ukieweb">
                            </span>
                                    <!-- name menu block -->
                                    <span class="name">Портолио</span>
                                </a>
                                <!-- end menu block (portfolio) -->

                                <!-- start menu block (blog) -->
                                <a href="#navblog" class="menu-li">
                                    <!-- img menu block -->
                            <span class="foto">
                                <img src="/web/webmaster/assets/img/menu/blog.png" class="menu-img" data-img-name="blog" alt="Ukieweb">
                            </span>
                                    <!-- name menu block -->
                                    <span class="name">Блог</span>
                                </a>
                                <!-- end menu block (portfolio) -->

                                <!-- start menu block (contact) -->
                                <a href="#navcontact" class="menu-li">
                                    <!-- img menu block -->
                            <span class="foto">
                                <img src="/web/webmaster/assets/img/menu/contact.png" class="menu-img" data-img-name="contact" alt="Ukieweb">
                            </span>
                                    <!-- name menu block -->
                                    <span class="name">Контакты</span>
                                </a>
                                <!-- end menu block (contact) -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </nav>
                <!-- End Menu section -->
            </section>
            <!-- End Home section -->

            <!-- Start Profile section -->
            <section class="profile" id="navprofile">
                <!-- Start Head section -->
                <header class="head">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-lg-5 text-right">
                                <img class="logo-page" src="/web/webmaster/assets/img/profile_l.png" alt="Ukieweb">
                            </div>
                            <div class="col-xs-12 col-sm-7 col-lg-7">
                                <!-- Title Page -->
                                <h2 class="title">Профиль</h2>
                                <!-- Description Page -->
                                <h4 class="sub-title">Немного обо мне</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </header>
                <!-- End Head section -->

                <!-- Start Content section -->
                <section class="content border-bottom padding-block">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-7 padding-bottom">
                                <h3 class="title">Приветствую Вас на моём персональном сайте</h3>
                                <p>Меня зовут Андрей и я частный веб-мастер. Я занимаюсь созданием сайтов под ключ, а также их продвижением и поддержкой. Я всегда настроено на долгосрочное взаимовыгодное сотрудничество, но и по небольшим работам с удовольствием Вам помогу)</p>
                                <p>На первом месте для меня всегда заказчик. Я стараюсь построить работу исходя из Ваши личных потребностей. Всегда помогу советом и проконсультирую совершенно бесплатно.</p>
                                <p>
                                    <a href="#" class="btn hover-animate">Hire me Now</a><a href="#" class="btn btn-color hover-animate">Download CV</a>
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-5">
                                <div class="block-grey">
                                    <table>
                                        <tr>
                                            <td class="font-weight-m">Имя</td>
                                            <td class="text-right">Андрей</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">Возраст</td>
                                            <td class="text-right">29 лет</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">E-mail</td>
                                            <td class="text-right"><a href="mailto:info@yourdomain.com">hello@az-site.ru</a></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">Местоположение</td>
                                            <td class="text-right">Россия, Санкт-Петербург</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">Телефон</td>
                                            <td class="text-right"><a href="tel:+78124082346">+7 (812) 408-23-46</a></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">Сайт</td>
                                            <td class="text-right"><a href="www.themeforest.net">az-site.ru</a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="font-weight-m"><i class="fa fa-circle green-marker" aria-hidden="true"></i>Сейчас онлайн</td>
                                        </tr>
                                        <!--
                                         <tr>
                                             <td colspan="2" class="font-weight-m"><i class="fa fa-circle red-marker" aria-hidden="true"></i>Not available for freelance</td>
                                         </tr>
                                         <tr>
                                             <td colspan="2" class="font-weight-m"><i class="fa fa-circle orange-marker" aria-hidden="true"></i>In vacation till septembre 29</td>
                                         </tr>
                                         -->
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Content section -->

                <!-- Start Info section -->
                <section class="info border-bottom padding-block text-center">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">Какие задачи я выполняю</h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div class="circle-block ">
                                    <span class="icon hover-animate"><i class="fa fa-android"></i></span>
                                    <span class="name hover-animate">Сайты</span>
                                </div>
                                <div class="circle-block">
                                    <span class="icon hover-animate"><i class="fa fa-desktop"></i></span>
                                    <span class="name hover-animate">Дизайн</span>
                                </div>
                                <div class="circle-block">
                                    <span class="icon hover-animate"><i class="fa fa-photo"></i></span>
                                    <span class="name hover-animate">Маркетинг</span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Info section -->

                <!-- Start Pricing section -->
                <section class="pricing padding-block border-bottom text-center">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">Примерные цены на услуги</h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="table-pricing">
                                    <div class="header-pricing">Сайты</div>
                                    <div class="price-pricing">
                                        от 5 000
                                        <small>руб.</small>
                                    </div>
                                    <div class="properties-pricing">
                                        <ul>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                PHP Coding
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                JavaScript Coding<span class="new">new</span>
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                Yii2
                                            </li>
                                            <li class="del">
                                                <span class="arrow-check"><i class="fa fa-times-circle"></i></span>
                                                <del>WordPress</del>
                                            </li>
                                            <li class="del">
                                                <span class="arrow-check"><i class="fa fa-times-circle"></i></span>
                                                <del>Другое</del>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footer-pricing">
                                        <a href="#" class="btn hover-animate">Заказать</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="table-pricing best-pricing">
                                    <div class="header-pricing">Дизайн</div>
                                    <div class="price-pricing">
                                        от 2 500
                                        <small>руб.</small>
                                    </div>
                                    <div class="properties-pricing">
                                        <ul>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                PSD макеты
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                Дизайн сайта
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                Логотипы<span class="new">new</span>
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                Верстка для CMS
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                Другое
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footer-pricing">
                                        <a href="#" class="btn btn-color hover-animate">Заказать</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="table-pricing">
                                    <div class="header-pricing">Маркетинг</div>
                                    <div class="price-pricing">
                                        от 500 руб
                                        <small>/час</small>
                                    </div>
                                    <div class="properties-pricing">
                                        <ul>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                Яндекс Директ
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                Google Adwords<span class="new">new</span>
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                SEO
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                SMM
                                            </li>
                                            <li class="del">
                                                <span class="arrow-check"><i class="fa fa-times-circle"></i></span>
                                                <del>И другое</del>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footer-pricing">
                                        <a href="#" class="btn hover-animate">Заказать</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="table-pricing">
                                    <div class="header-pricing">Консультации</div>
                                    <div class="price-pricing">
                                        бесплатно :)
                                    </div>
                                    <div class="properties-pricing">
                                        <ul>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                О сайтах
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                По дизайну
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                О продвижении
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                О рекламе<span class="new">new</span>
                                            </li>
                                            <li>
                                                <span class="arrow-check"><i class="fa fa-check-circle"></i></span>
                                                Любые другие :)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footer-pricing">
                                        <a href="#" class="btn hover-animate">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Pricing section -->

                <!-- Start Instagram Feed section -->
                <section class="instagram-feed padding-block border-bottom text-center">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">Instagram Feed</h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-lg-2"  >
                                <img class="instagram-foto" src="/web/webmaster/assets/img/img-195x195.jpg" alt="Instagram Feed">
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <img class="instagram-foto" src="/web/webmaster/assets/img/img-195x195.jpg" alt="Instagram Feed">
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <img class="instagram-foto" src="/web/webmaster/assets/img/img-195x195.jpg" alt="Instagram Feed">
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <img class="instagram-foto" src="/web/webmaster/assets/img/img-195x195.jpg" alt="Instagram Feed">
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <img class="instagram-foto" src="/web/webmaster/assets/img/img-195x195.jpg" alt="Instagram Feed">
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <img class="instagram-foto" src="/web/webmaster/assets/img/img-195x195.jpg" alt="Instagram Feed">
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Instagram Feed section -->

                <!-- Start Calendar section -->
                <section class="calendar padding-block border-bottom text-center" >
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">Календарь</h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row calendar-content">
                            <div class="col-xs-12 col-sm-4 col-lg-4">
                                <div class="today border-right">
                                    <div class="valign-outer">
                                        <div class="valign-middle">
                                            <div class="valign-inner">
                                                <div class="date">
                                                    <span class="day" id="day">08</span>
                                                    <span class="month" id="month">Апр</span>
                                                </div>
                                                <div class="week-day" id="week-day">Вторник</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-lg-8">
                                <div class="custom-calendar-wrap">
                                    <div id="custom-inner" class="custom-inner">
                                        <div class="custom-header clearfix">
                                            <nav>
                                                <span id="custom-prev" class="custom-prev"></span>
                                                <span id="custom-next" class="custom-next"></span>
                                            </nav>
                                            <ul>
                                                <li><h2 id="custom-month" class="custom-month"></h2></li>
                                                <li><h2 id="custom-year" class="custom-year"></h2></li>
                                            </ul>
                                        </div>
                                        <div id="calendar" class="fc-calendar-container">
                                        </div>

                                    </div>
                                </div>

                                <ul class="notes">
                                    <li><div class="calendar-note">Извините. Я не работаю сегодня</div></li>
                                    <li><div class="calendar-note today-note">Сегодня</div></li>
                                </ul>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Calendar section -->


                <!-- Start My thoughts section -->
                <section class="my-thoughts padding-block text-center">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">My thoughts</h3>
                                <div class="animated">
                                    <i class="fa fa-quote-left ukie-icons hover-animate"></i>
                                </div>
                                <p class="thoughts">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                <h4 class="sub-title">Jonh Doe</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End My thoughts section -->
            </section>
            <!-- End Profile section -->

            <!-- Start Resume section -->
            <section class="resume" id="navresume">
                <!-- Start Head section -->
                <header class="head">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-lg-5 text-right">
                                <img class="logo-page" src="/web/webmaster/assets/img/resume_l.png" alt="Ukieweb">
                            </div>
                            <div class="col-xs-12 col-sm-7 col-lg-7">
                                <!-- Title Page -->
                                <h2 class="title">Resume</h2>
                                <!-- Description Page -->
                                <h4 class="sub-title">My Academic Qualifications</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </header>
                <!-- End Head section -->

                <!-- Start Content section -->
                <section class="content padding-block border-bottom">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-6 padding-bottom">
                                <h3 class="title title-resume">Education</h3>
                                <div class="block-grey">
                                    <div id="education-slider" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-m width-td">Name</td>
                                                    <td>School of Art</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Address</td>
                                                    <td>Melbourne VIC</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Period</td>
                                                    <td>1996-2000</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Level</td>
                                                    <td>A level</td>
                                                </tr>
                                            </table>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi.
                                            </p>
                                        </div>
                                        <div class="item">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-m width-td">Name</td>
                                                    <td>School of Art</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Address</td>
                                                    <td>Melbourne VIC</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Period</td>
                                                    <td>1996-2000</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Level</td>
                                                    <td>A level</td>
                                                </tr>
                                            </table>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi.
                                            </p>
                                        </div>
                                        <div class="item">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-m width-td">Name</td>
                                                    <td>School of Art</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Address</td>
                                                    <td>Melbourne VIC</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Period</td>
                                                    <td>1996-2000</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Level</td>
                                                    <td>A level</td>
                                                </tr>
                                            </table>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-6">
                                <h3 class="title title-resume">Work</h3>
                                <div class="block-grey">
                                    <div id="work-slider" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-m width-td1">Company Name</td>
                                                    <td>Themeforest</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Address</td>
                                                    <td>Melbourne VIC</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Period</td>
                                                    <td>2007-2012</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Post</td>
                                                    <td>Web designer</td>
                                                </tr>
                                            </table>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi.
                                            </p>
                                        </div>
                                        <div class="item">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-m width-td1">Company Name</td>
                                                    <td>Themeforest</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Address</td>
                                                    <td>Melbourne VIC</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Period</td>
                                                    <td>2012-2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-m">Post</td>
                                                    <td>Web designer</td>
                                                </tr>
                                            </table>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Content section -->


                <!-- Start Skills section -->
                <section class="skills border-bottom padding-block">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-6 padding-bottom">
                                <h3 class="title title-skills">Professional skills</h3>

                                <label class="progress-bar-label">JavaScript</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                        <span>78%</span>
                                    </div>
                                </div>

                                <label class="progress-bar-label">Photoshop</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">
                                        <span>96%</span>
                                    </div>
                                </div>

                                <label class="progress-bar-label">Illustrator</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span>85%</span>
                                    </div>
                                </div>

                                <label class="progress-bar-label">HTML &amp; CSS</label>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <span>60%</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-6">
                                <h3 class="title title-skills">Additional skills</h3>

                                <div class="circle-progress-block">
                                    <div class="circle-progress">
                                        <input type="text" class="dial" value="43" data-color="#00b6f9" data-from="0" data-to="99" />
                                    </div>
                                    <label class="circle-progress-label">Communication</label>
                                </div>

                                <div class="circle-progress-block">
                                    <div class="circle-progress">
                                        <input type="text" class="dial" value="62" data-color="#00b6f9" data-from="0" data-to="99" />
                                    </div>
                                    <label class="circle-progress-label">English</label>
                                </div>

                                <div class="circle-progress-block">
                                    <div class="circle-progress">
                                        <input type="text" class="dial" value="78" data-color="#00b6f9" data-from="0" data-to="99" />
                                    </div>
                                    <label class="circle-progress-label">Humor</label>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-6 language-skills">
                                <h3 class="title title-skills">Language skills</h3>
                                <div class="progress">
                                    <label class="progress-bar-label">English (Native)</label>
                                    <span class="ratyli" data-rate="5" data-ratemax="5"></span>
                                </div>
                                <div class="progress">
                                    <label class="progress-bar-label">French</label>
                                    <span class="ratyli" data-rate="3" data-ratemax="5"></span>
                                </div>

                                <div class="progress">
                                    <label class="progress-bar-label">Spanish</label>
                                    <span class="ratyli" data-rate="2" data-ratemax="5"></span>
                                </div>
                                <div class="progress">
                                    <label class="progress-bar-label">German</label>
                                    <span class="ratyli" data-rate="4" data-ratemax="5"></span>
                                </div>



                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-6 knowledge">
                                <h3 class="title title-skills">Knowledge</h3>
                                <div class="col-xs-12 col-sm-6 col-lg-6">
                                    <ul>
                                        <li>Custom Website Design</li>
                                        <li>Logo and Brochure Design</li>
                                        <li>Design for Print</li>
                                        <li>Animations and Graphics</li>
                                        <li>Mobile websites</li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6">
                                    <ul>
                                        <li>Template/CMS based websites</li>
                                        <li>iOS and Android App</li>
                                        <li>Website Hosting</li>
                                        <li>Search Engine Marketing (SEM)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Skills section -->


                <!-- Start Info section -->
                <section class="info border-bottom padding-block text-center">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">Hobbies &amp; Interest</h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div class="circle-block ">
                                    <span class="icon hover-animate"><i class="fa fa-futbol-o"></i></span>
                                    <span class="name hover-animate">Football</span>
                                </div>
                                <div class="circle-block">
                                    <span class="icon hover-animate"><i class="fa fa-headphones"></i></span>
                                    <span class="name hover-animate">Music</span>
                                </div>
                                <div class="circle-block">
                                    <span class="icon hover-animate"><i class="fa fa-rocket"></i></span>
                                    <span class="name hover-animate">Travelling</span>
                                </div>
                                <div class="circle-block">
                                    <span class="icon hover-animate"><i class="fa fa-car"></i></span>
                                    <span class="name hover-animate">Cars</span>
                                </div>
                                <div class="circle-block">
                                    <span class="icon hover-animate"><i class="fa fa-gamepad"></i></span>
                                    <span class="name hover-animate">Video games</span>
                                </div>
                                <div class="circle-block">
                                    <span class="icon hover-animate"><i class="fa fa-paint-brush"></i></span>
                                    <span class="name hover-animate">Painting</span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Info section -->

                <!-- Start Info section -->
                <section class="info padding-block border-bottom text-center">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">Experience</h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row count">
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="total-numbers" data-perc="900">
                                    <div class="iconspace"><i class="fa fa-smile-o"></i></div>
                                    <div class="info-text">
                                        <span class="sum">450</span>
                                        happy clients
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="total-numbers" data-perc="900">
                                    <div class="iconspace"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="info-text">
                                        <span class="sum">205</span>
                                        projects done
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="total-numbers" data-perc="900">
                                    <div class="iconspace"><i class="fa fa-birthday-cake"></i></div>
                                    <div class="info-text">
                                        <span class="sum">3</span>
                                        years experience
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="total-numbers" data-perc="900">
                                    <div class="iconspace"><i class="fa fa-trophy"></i></div>
                                    <div class="info-text">
                                        <span class="sum">12</span>
                                        contests won
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Info section -->

                <!-- Start Testimonials section -->
                <section class="padding-block text-center testimonials border-bottom">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">Testimonials</h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div class="block-grey">
                                    <div class="slider_container">
                                        <div class="flexslider">
                                            <ul class="slides">
                                                <li>
                                                    <div class="col-xs-12 col-sm-5 col-lg-5">
                                                        <img class="foto" src="/web/webmaster/assets/img/img-100x100.jpg" alt="Ukieweb">
                                                        <!-- Title Page -->
                                                        <h4 class="sub-title">Damon Guzman</h4>
                                                        <!-- Description Page -->
                                                        <p>New Agency, LLC</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-7 col-lg-7 border-left border-left">
                                                        <table>
                                                            <tr>
                                                                <td class="font-weight-m width-td1">I like UkieCard</td>
                                                                <td>August 21, 2016</td>
                                                            </tr>
                                                        </table>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis nostrud exercitation ullamco laboris nisi.
                                                        </p>
                                                        <ul class="flex-direction-nav"><li><a class="prev" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li><li><a class="next" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li></ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-xs-12 col-sm-5 col-lg-5">
                                                        <img class="foto" src="/web/webmaster/assets/img/img-100x100.jpg" alt="Ukieweb">
                                                        <!-- Title Page -->
                                                        <h4 class="sub-title">Kirk Collins</h4>
                                                        <!-- Description Page -->
                                                        <p>New Agency, LLC</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-7 col-lg-7 border-left border-left">
                                                        <table>
                                                            <tr>
                                                                <td class="font-weight-m width-td1">New styles of home page are available</td>
                                                                <td>August 11, 1996</td>
                                                            </tr>
                                                        </table>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis nostrud exercitation ullamco laboris nisi.
                                                        </p>
                                                        <ul class="flex-direction-nav"><li><a class="prev" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li><li><a class="next" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li></ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-xs-12 col-sm-5 col-lg-5">
                                                        <img class="foto" src="/web/webmaster/assets/img/img-100x100.jpg" alt="Ukieweb">
                                                        <!-- Title Page -->
                                                        <h4 class="sub-title">Melissa Hill</h4>
                                                        <!-- Description Page -->
                                                        <p>New Agency, LLC</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-7 col-lg-7 border-left border-left">
                                                        <table>
                                                            <tr>
                                                                <td class="font-weight-m width-td1">How to use ukiecard?</td>
                                                                <td>August 18, 2000</td>
                                                            </tr>
                                                        </table>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis nostrud exercitation ullamco laboris nisi.
                                                        </p>
                                                        <ul class="flex-direction-nav"><li><a class="prev" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li><li><a class="next" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li></ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Testimonials section -->


                <!-- Start Clients section -->
                <section class="padding-block text-center clients">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <h3 class="title">Clients</h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div id="owl-clients" class="owl-carousel owl-theme">
                                    <div class="item"><img src="/web/webmaster/assets/img/client-logo.png" alt="Clients"></div>
                                    <div class="item"><img src="/web/webmaster/assets/img/client-logo.png" alt="Clients"></div>
                                    <div class="item"><img src="/web/webmaster/assets/img/client-logo.png" alt="Clients"></div>
                                    <div class="item"><img src="/web/webmaster/assets/img/client-logo.png" alt="Clients"></div>
                                    <div class="item"><img src="/web/webmaster/assets/img/client-logo.png" alt="Clients"></div>
                                    <div class="item"><img src="/web/webmaster/assets/img/client-logo.png" alt="Clients"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Clients section -->
            </section>
            <!-- End Resume section -->

            <!-- Start Portfolio section -->
            <section class="portfolio-header" id="navportfolio">
                <!-- Start Head section -->
                <header class="head">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-lg-5 text-right">
                                <img class="logo-page" src="/web/webmaster/assets/img/portfolio_l.png" alt="Ukieweb">
                            </div>
                            <div class="col-xs-12 col-sm-7 col-lg-7">
                                <!-- Title Page -->
                                <h2 class="title">Portfolio</h2>
                                <!-- Description Page -->
                                <h4 class="sub-title">Some of My Works</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </header>
                <!-- End Head section -->

                <!-- Start Portfolio section -->
                <div class="portfolio-section padding-block">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row padding-bottom">
                            <!-- Portfolio -->
                            <div class="portfolio">

                                <div class="filter_div controls">
                                    <div class="col-xs-12 col-sm-12 col-lg-11">
                                        <ul>
                                            <li class="hover-animate filter" data-filter="all">All</li>
                                            <li class="hover-animate filter" data-filter=".category-1">Web design</li>
                                            <li class="hover-animate filter" data-filter=".category-2">Illustrations</li>
                                            <li class="hover-animate filter" data-filter=".category-3">Applications</li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="portfolio-grid">

                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-2" data-value="1">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate" href="#work-0" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-0">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-2" data-value="2">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate" href="#work-1" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-1">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-1" data-value="3">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate" href="#work-2" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-2">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-1" data-value="4">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate"  href="#work-3" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-3">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-2" data-value="5">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate" href="#work-4" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-4">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-3" data-value="6">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate" href="#work-5" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-5">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-3" data-value="7">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate" href="#work-6" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-6">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-2" data-value="8">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate" href="#work-7" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-7">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-2" data-value="9">
                                        <div class="within">

                                            <img src="/web/webmaster/assets/img/portfolio/p-1.png" alt="Alt">
                                            <div class="port-item-cont">
                                                <h3 class="title">Project Title</h3>
                                                <p class="desc">Your Project description</p>
                                                <a class="fancybox popup-content view-work hover-animate" href="#work-8" rel="mygallery">View details</a>
                                            </div>

                                            <div class="hidden">
                                                <div class="podrt-desc" id="work-8">
                                                    <div class="modal-box-content">
                                                        <img src="/web/webmaster/assets/img/portfolio/p_b-1.png" alt="Alt">
                                                        <div class="text">
                                                            <h3 class="title">Project Title</h3>
                                                            <table>
                                                                <tr>
                                                                    <td class="font-weight-m width-td">Completed</td>
                                                                    <td>November 2014</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-weight-m">Client</td>
                                                                    <td>Envato</td>
                                                                </tr>
                                                            </table>
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                                                sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                                laudantium, totam rem aperiamae vitae dicta sunt explicabo.</p>
                                                            <a href="" class="btn btn-color">See Live</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                            <!-- end Portfolio -->
                        </div>
                        <!-- end row -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12 text-center btn-center">
                                <a href="blog.html" class="btn hover-animate btn-color-hover">See all</a>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- End Portfolio section -->
            </section>
            <!-- End Portfolio section -->

            <!-- Start Blog section -->
            <section class="blog" id="navblog">
                <!-- Start Head section -->
                <header class="head">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-lg-5 text-right">
                                <img class="logo-page" src="/web/webmaster/assets/img/blog_l.png" alt="Ukieweb">
                            </div>
                            <div class="col-xs-12 col-sm-7 col-lg-7">
                                <!-- Title Page -->
                                <h2 class="title">Blog</h2>
                                <!-- Description Page -->
                                <h4 class="sub-title">I write here my thoughts</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </header>
                <!-- End Head section -->

                <div class="padding-block">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-6">
                                <!-- start post -->
                                <div class="post">
                                    <!-- start photo -->
                                    <div class="photo">
                                        <img src="/web/webmaster/assets/img/blog/post-1.png" alt="UkieWeb">
                                    </div>
                                    <!-- end photo -->
                                    <!-- start title post -->
                                    <h3 class="title title-blog">Standard Post with Image</h3>
                                    <!-- end title post -->
                                    <div class="entry-byline">
                                        <i class="fa fa-user"></i>
                            <span class="entry-author right-border">
                                <a href="#" title="Posts by Theme Admin" rel="author" >
                                    <span>Jonh Doe</span>
                                </a>
                            </span>
                                        <i class="fa fa-clock-o"></i>
                                        <time class="entry-published right-border">30/04/2015</time>
                                        <i class="fa fa-comment"></i>
                                        <span class="comments-link">30 Comments</span>
                                    </div>
                                    <!-- start desc post -->
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum dolor.</p>
                                    <!-- end desc post -->
                                    <a href="post-img.html" class="btn hover-animate btn-color-hover">Read More</a>
                                </div>
                                <!-- end post -->


                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-6">
                                <!-- start post -->
                                <div class="post last">
                                    <!-- start photo -->
                                    <div class="photo">
                                        <img src="/web/webmaster/assets/img/blog/post-1.png" alt="UkieWeb">
                                    </div>
                                    <!-- end photo -->
                                    <!-- start title post -->
                                    <h3 class="title title-blog">Standard Post with Image</h3>
                                    <!-- end title post -->
                                    <div class="entry-byline">
                                        <i class="fa fa-user"></i>
                            <span class="entry-author right-border">
                                <a href="#" title="Posts by Theme Admin" rel="author" >
                                    <span>Jonh Doe</span>
                                </a>
                            </span>
                                        <i class="fa fa-clock-o"></i>
                                        <time class="entry-published right-border">30/05/2015</time>
                                        <i class="fa fa-comment"></i>
                                        <span class="comments-link">65 Comments</span>
                                    </div>
                                    <!-- start desc post -->
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum dolor.</p>
                                    <!-- end desc post -->
                                    <a href="post-img.html" class="btn hover-animate btn-color-hover">Read More</a>
                                </div>
                                <!-- end post -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12 text-center btn-center">
                                <a href="blog.html" class="btn hover-animate btn-color-hover">Blog page</a>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </section>
            <!-- End Blog section -->


                <!-- Start Contact section -->
            <section class="contact" id="navcontact">
                <!-- Start Head section -->
                <header class="head">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-lg-5 text-right">
                                <img class="logo-page" src="/web/webmaster/assets/img/contact_l.png" alt="Ukieweb">
                            </div>
                            <div class="col-xs-12 col-sm-7 col-lg-7">
                                <!-- Title Page -->
                                <h2 class="title">Contact</h2>
                                <!-- Description Page -->
                                <h4 class="sub-title">Get in touch with me</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </header>
                <!-- End Head section -->

                <!-- Start Content section -->
                <section class="content padding-block border-bottom">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-6 padding-bottom">
                                <h3 class="title title-contact">Contact info</h3>
                                <div class="block-grey">
                                    <table>
                                        <tr>
                                            <td class="font-weight-m width-td">Address</td>
                                            <td>44 King St, Melbourne VIC</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">Phone</td>
                                            <td><a href="tel:3801234567890">+38 012-3456-7890</a></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">E-mail</td>
                                            <td><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">Skype</td>
                                            <td>jonh_doe</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-m">Website</td>
                                            <td><a href="www.themeforest.com">www.themeforest.com</a></td>
                                        </tr>
                                    </table>
                                    <!-- social icon -->
                                    <div class="social">
                                        <ul class="animated" data-animation="fadeIn" data-animation-delay="600">
                                            <!-- social icons -->
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-youtube"></i></a></li>
                                            <!--
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-behance"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-digg"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-deviantart"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-envelope-square"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-delicious"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-dropbox"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-skype"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-tumblr"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-flickr"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-github-alt"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-renren"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-vk"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-xing"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-weibo"></i></a></li>
                                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-rss"></i></a></li>
                                            -->
                                        </ul>
                                    </div>
                                    <!-- end social icon -->
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-6">
                                <h3 class="title title-contact">Contact form</h3>
                                <!-- Start Contact Form -->
                                <div class="contact-form">
                                    <form action="/web/webmaster/assets/php/contact.php" id="contact-form" method="post">
                                        <input type="text" id="user-name" name="user-name" value="" placeholder="Name" />
                                        <input type="email" id="user-email" name="user-email" value="" placeholder="Email" />
                                        <input type="hidden" id="user-status" name="user-status" value="1"  />
                                        <textarea id="user-message" name="user-message" placeholder="Message"></textarea>
                                        <div class="footer-form">
                                            <input type="submit" id="submit-btn" class="btn btn-color hover-animate"  value="Send Message" />
                                            <div class="info-message-form">
                                                <p>Please fill out all the fields!</p>
                                                <span class="close-msg"><i class="fa fa-close"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Contact Form -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- End Content section -->

                <!-- Start Map section -->
                <div class="contact-map padding-block text-center">
                    <!-- start container -->
                    <div class="container">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div id="map" class="map"></div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- End Map section -->
            </section>
            <!-- End Contact section -->

            <!-- Start Footer section -->
            <footer class="footer">
                <!-- start container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start phone number -->
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" class="hover-animate">
                                <span class="ukie-icons hover-animate"><i class="fa fa-phone"></i></span> +38 012-3456-7890
                            </a>
                        </div>
                        <!-- end phone number -->
                        <!-- start email -->
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" class="hover-animate">
                                <span class="ukie-icons hover-animate"><i class="fa fa-paper-plane"></i></span> info@yourdomain.com
                            </a>
                        </div>
                        <!-- end email -->
                        <!-- start address -->
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" class="hover-animate">
                                <span class="ukie-icons hover-animate"><i class="fa fa-map-marker"></i></span> 44 King St, Melbourne VIC
                            </a>
                        </div>
                        <!-- end address -->
                        <!-- start Copyright -->
                        <div class="col-xs-12 col-sm-6 col-lg-3 text-right">
                            <span class="copyright">Copyright © 2016 All right reserved</span>
                        </div>
                        <!-- end Copyright -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </footer>
            <!-- End Footer section -->

        </div>
    </div>

    <!-- Scroll to Top -->
    <a href="#" class="btn hover-animate scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!-- End Scroll to Top -->

    <!-- Style Switcher -->
    <!-- delete this from site once you have decided on a colour scheme - follow documentation for insructions -->
    <div class="style-switcher style-off">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12 text-center">

                    <div class="switch-colours clearfix">
                        <div class="set clearfix">

                            <h3 class="lighter">Select A Color</h3>

                            <a href="color-blue" class="new-colour color-blue" id="color-blue" data-color="#00b6f9"></a>
                            <a href="color-orange" class="new-colour color-orange" id="color-orange" data-color="#ffc400"></a>
                            <a href="color-purple" class="new-colour color-purple" id="color-purple" data-color="#7c4dff"></a>
                            <a href="color-green" class="new-colour color-green" id="color-green" data-color="#9ccc65"></a>
                            <a href="color-red" class="new-colour color-red" id="color-red" data-color="#ff7043"></a>
                            <a href="color-brown" class="new-colour color-brown" id="color-brown" data-color="#ae8c64"></a>

                            <h3 class="lighter">Select A Background</h3>
                            <a href="bg-white" class="new-bg bg-white" data-bg="#ffffff"></a>
                            <a href="bg-grey" class="new-bg bg-grey" data-bg="#f5f5f5"></a>
                            <a href="bg-light-blue" class="new-bg bg-light-blue" data-bg="#cfd8dc"></a>
                            <a href="bg-dark-blue" class="new-bg bg-dark-blue" data-bg="#263238"></a>
                            <a href="bg-dark-purple" class="new-bg bg-dark-purple" data-bg="#1e1f38"></a>
                            <a href="bg-brown" class="new-bg bg-brown" data-bg="#383231"></a>

                            <h3 class="lighter">Select A Shadow</h3>

                                <div class="switch">
                                    <input type="checkbox" name="box_shadow" id="box_shadow">
                                    <label><i></i></label>
                                </div>



                        </div>
                        <!-- end set -->
                    </div>

<!--                     <div class="style-open">
                        <i class="fa fa-tint"></i>
                    </div> -->
                    <!-- end style-open -->

                </div>
            </div>
            <!-- end row -->


    </div>
    <!-- end Style Switcher -->

    <!-- Style Contact Form -->
    <!-- delete this from site once you have decided on a colour scheme - follow documentation for insructions -->
    <!-- Button Style open -->
    <div class="style-open-form animated hi-icon-effect-8">
        <i class="hi-icon fa fa-envelope-o ukie-icons hover-animate hi-icon-mobile"></i>
    </div>
    <!-- End Button Style open -->
    <div class="style-contact-form style-off-form">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 ">
                <!-- Start Contact Form -->
                <div class="contact-form">
                    <div class="btn-close-form">
                    </div>
                    <h3 class="title title-contact">Contact Me</h3>
                    <p>Use this form to tell me about your project goals and needs. I will be in touch within 24 hours.</p>
                    <form action="/web/webmaster/assets/php/contact.php" id="contact-form-panel" method="post">
                        <input type="text" id="user-name-panel" name="user-name" value="" placeholder="Name" />
                        <input type="email" id="user-email-panel" name="user-email" value="" placeholder="Email" />
                        <input type="hidden" id="user-status-panel" name="user-status" value="1"  />
                        <textarea id="user-message-panel" name="user-message" placeholder="Message"></textarea>
                        <div class="footer-form">
                            <input type="submit" id="submit-btn-panel" class="btn btn-color hover-animate"  value="Send Message" />
                            <div class="info-message-form">
                                <p>Please fill out all the fields!</p>
                                <span class="close-msg"><i class="fa fa-close"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Contact Form -->
                <!-- End style-open -->
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Style Contact Form -->

    <!-- Scripts -->
<script src="/web/webmaster/assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.appear.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.inview.min.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.knob.min.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.countTo.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript" ></script>
<script src="/web/webmaster/assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5" type="text/javascript" ></script>
<script src="/web/webmaster/assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/portfolio_scripts.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.ratyli.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/stickUp.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/modernizr.custom.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/prefixfree.min.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/modernizr.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/jquery.calendario.js" type="text/javascript"></script>
<script src="/web/webmaster/assets/js/contact_scripts.js" type="text/javascript"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1J4h7Xqzd51GMRYG0OS8gPJpJMXC1MCE&callback=initMap"></script>
<script src="/web/webmaster/assets/js/scripts.js" type="text/javascript"></script>