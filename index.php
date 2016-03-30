<?php
include_once("/components/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href="/img/random/favicon.png">
    <title>
        Мунайгаз инжиниринг
    </title>
    <script src="/js/jquery-2.2.1.js"></script>
    <script src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <style>
        .navbar .navbar-nav {
            display: inline-block;
            float: none;
            vertical-align: top;
        }

        .navbar .navbar-collapse {
            text-align: center;
        }

        header {
            z-index: 10000;;
        }

        .brands {

            height: 50px;
        }

        @font-face {
            font-family: "HelveticaNeueCyr-Light";
            src: url(/fonts/HelveticaNeueCyr-Light.otf) format("truetype");
        }

        article {
            color: #444;
            /*font-family: HelveticaNeueCyr-Light;*/
        }

        #head_logo_text {
            font-size: 25px;
        }

        body, .well {
            background: #D9ECF4 none repeat scroll 0% 0%
        }
    </style>
</head>
<body>
<header style="position: fixed; width: 99.965%">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand navbar-left" href="/">
                    <img style="display: inline-block; height: 42px; margin-top: -10px; "
                         src="/img/random/favicon.png"/>
                </a>
                <a class="navbar-brand navbar-left my-class-brand" id="head_logo_text" href="/">
                    ТОО НПФ Мунайгаз инжиниринг ЛТД
                </a>

            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <!--
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>

                    <li>
                        <a href="/">
                            Главная
                        </a>
                    </li>
                    -->
                    <li class="dropdown">
                        <a href="?r=home" class="dropdown-toggle"
                           data-toggle="dropdown"
                           role="button" aria-expanded="false">
                            Фирма
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="?r=company_history">История фирмы</a></li>
                            <li><a href="?r=activities">Виды деятельности</a></li>
                            <li><a href="?r=license">Лицензии</a></li>
                            <li><a href="?r=certifications">Сертификаты</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle"
                           data-toggle="dropdown"
                           role="button" aria-expanded="false">
                            Структура
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="?r=CEO">Генеральный директор</a></li>
                            <li><a href="?r=project_department">Проектный отдел</a></li>
                            <li><a href="?r=technical_oversight_group">Группа технического надзора</a></li>
                            <li><a href="?r=production_quality_control_laboratory">
                                    Производственная лаборатория контроля качества</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="?r=photo_gallery">
                            Фотогалерея
                        </a>
                    </li>
                    <li>
                        <a href="?r=jobs">
                            Вакансии
                        </a>
                    </li>
                    <li>
                        <a href="?r=contacts">
                            Контакты
                        </a>
                    </li>
                    <li>
                        <a href="?r=feedback">
                            Обратная связь
                        </a>
                    </li>
                </ul>

                <!--
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                </ul>
                -->

            </div>

        </div>
    </nav>
</header>
<div style="padding-top: 45px;"></div>
<table class="equalDevide" cellpadding="0" cellspacing="0" width="100%" border="0" align="center">
    <tr>
        <td width="10%"
            style="text-align: center; vertical-align: top; padding-top: 100px">
            <div style="text-align: left; display: inline-block; width: 100%">
                <!--Нефтедоллар-->
                <div align="center">
                    <link rel="stylesheet" href="http://prodengi.kz/informer/prodengi_130_100.css" type="text/css"
                          media="all">
                    <div class="inform_130_100_130374632"
                         style="border:0px solid #0072bc; color:#003370;">
                        <div class="style1"
                             ;="" style="color:#009; font-size:12px;">Курсы валют <span
                                id="prodengi_head_130374632">17.03.16</span></div>
                        <ul>
                            <li class="usa_130374632">Доллар<span id="prodengi_usd_130374632">346.05</span><img
                                    src="http://prodengi.kz/informer/down.gif" id="usa_img_130374632"></li>
                            <li class="eur_130374632">Евро<span id="prodengi_eur_130374632">391.45</span><img
                                    src="http://prodengi.kz/informer/down.gif" id="eur_img_130374632"></li>
                            <li class="rub_130374632">Рубль<span id="prodengi_rub_130374632">5.05</span><img
                                    src="http://prodengi.kz/informer/down.gif" id="rub_img_130374632"></li>
                        </ul>
                        <a href="http://prodengi.kz" id="prodengi_link_130374632" target="_blank"
                           title="Курсы валют: курс доллара, курс евро" style="color:#003370;"></a><span
                            id="prodengi_echo_130374632"></span></div>
                    <script type="text/javascript" src="http://prodengi.kz/informer/prodengi_130_100.js"></script>
                </div>


            </div>
        </td>
        <td width="80%">
            <article style="min-height: 800px; display: inline-block; width: 99.965%">
                <?php
                $load_main = true;
                if (check($_GET['r'])) {
                    $r = format_str($_GET['r']);
                    $r .= '.php';
                    $pages = scandir('./pages/');
                    unset($pages[0]);
                    unset($pages[1]);
                    if (in_array($r, $pages)) {
                        $load_main = false;
                        include_once("/pages/{$r}");
                    }
                }
                if ($load_main) {

                    include_once("/pages/home.php");
                }
                ?>
            </article>

        </td>
        <td width="10%" style="vertical-align: top; padding-top: 100px">
            <a href="https://mgeltd.kz/roundcube/?_task=logout">
                <img style="width: 100%; border-radius: 10px" src="/img/random/mail.jpg">
            </a>
        </td>
    </tr>
</table>


<footer style="text-align: center; margin-top: 40px">
    <img class="brands" src="/img/brands/1.jpg"/>
    <img class="brands" src="/img/brands/2.jpg"/>
    <img class="brands" src="/img/brands/3.jpg"/>
    <img class="brands" src="/img/brands/4.jpg"/>
    <img class="brands" src="/img/brands/5.jpg"/>
    <img class="brands" src="/img/brands/6.jpg"/>
    <img class="brands" src="/img/brands/7.jpg"/>
    <img class="brands" src="/img/brands/8.jpg"/>
    <img class="brands" src="/img/brands/9.jpg"/>
    <img class="brands" src="/img/brands/10.jpg"/>
    <img class="brands" src="/img/brands/11.jpg"/>
</footer>
</body>
</html>