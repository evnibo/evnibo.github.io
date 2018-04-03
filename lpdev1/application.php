<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-RU" lang="ru-RU"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-RU" lang="ru_RU">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title> * TITLE * </title>


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">

    <!-- Fancybox Style -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/css/jquery.fancybox.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheet/colors/color3.css" id="colors">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="stylesheet/responsive.css">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/animate.css">

    <link rel="stylesheet" type="text/css" href="stylesheet/et-line.css">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>

<body>

    <div class="boxed">
        <!-- Preloader -->
        <div id="loading-overlay">
            <div class="loader"></div>
        </div>

        <div class="topLine" style="background: #f87b27; height: 4px;">

        </div>

        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div id="logo" class="logo">
                            <a href="index.html" title="">
                                <img src="images/logo.png" alt="logo" />
                            </a>
                        </div>
                        <!-- /#logo -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>+38 (000) 000-00-00</h4>
                                <p>info@mydomain.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>Работаем ежедневно</h4>
                                <p>Без перерывов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.top -->

        <header id="header" class="header style1 v1 bg-color">
            <div class="container">
                <div class="row">
                    <div class="header-wrap">
                        <div class="col-md-12">
                            <div class="flat-header-wrap">
                                <div class="nav-wrap">
                                    <div class="btn-menu">
                                        <span></span>
                                    </div>
                                    <!-- //mobile menu button -->
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu">
                                            <li>
                                                <a href="index.html#block2" title="">Что мы предлагаем?</a>
                                            </li>
                                            <li>
                                                <a href="index.html#block3" title="">Наши преимущества</a>
                                            </li>
                                            <li>
                                                <a href="index.html#block5" title="">Примеры работ</a>
                                            </li>
                                            <li>
                                                <a href="index.html#block4" title="">Узнать стоимость работ</a>
                                            </li>
                                            <li>
                                                <a href="index.html#block6" title="">Дополнительная информация</a>
                                            </li>

                                        </ul>
                                        <!-- /.menu -->
                                    </nav>
                                    <!-- /#mainnav -->
                                </div>
                                <!-- /.nav-wrap -->
                            </div>
                        </div>
                        <!-- /.col-md-9 -->
                    </div>
                    <!-- /.header-wrap -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </header>
        <!-- /header -->

<?php 

$sendto   = "smart-landing@yandex.ru"; // почта, на которую будет приходить письмо
$usermail = "test@test.ru";
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['phone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usercomment = $_POST['comment']; // сохраняем в переменную данные полученные из поля c адресом электронной почты


// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$usercomment."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	?>
        <section class="infoText">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-title style1 center">
                            <h2>Спасибо!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="infoTextDesc" style="text-align: center;">
                            <p>Ваша заявка получена!</p>
                            <p>В ближайшее время наш менеджер свяжется с Вами!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    <?
} else {
		?>
        <section class="infoText">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-title style1 center">
                            <h2>Спасибо!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="infoTextDesc" style="text-align: center;">
                            <p>Ваша заявка получена!</p>
                            <p>В ближайшее время наш менеджер свяжется с Вами!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    <?
}

?>

       <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-about">
                            <div id="logo-ft">
                                <a href="#" title="">
                                    <img src="images/logo-ft.png" alt="">
                                </a>
                            </div>
                            <p>Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст.
                            </p>
                        </div>
                        <!-- /.widget-text -->
                    </div>
                    <!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-services">
                            <h3 class="title">Наши контакты</h3>
                            <ul class=" first">
                                <li><a href="#" title=""><i class="fas fa-mobile-alt"></i> <span>+38 (000) 000-00-00</span></a></li>
                                <li><a href="#" title=""><i class="fas fa-mobile-alt"></i> <span>+38 (000) 000-00-00</span></a></li>
                                <li><a href="#" title=""><i class="far fa-envelope"></i> <span>info@mydomain.com</span></a></li>

                            </ul>
                            <!-- /.one-half -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.widget-services -->
                    </div>
                    <!-- /.col-md-3 col-sm-6 -->

                    <div class="col-lg-5 col-md-12">
                        <div class="widget-ft widget-subscribe">
                            <h3 class="title">Бесплатно консультируем и даем советы</h3>
                            <form id="footer-form" method="post" action="application.php" accept-charset="utf-8">
                                <div id="footer-content">
                                    <div class="field-row">
                                        <div class="one-half">
                                            <p class="input-info"><input type="text" name="your-name" id="name" value="" placeholder="Ваше имя *" required></p>
                                        </div>
                                        <div class="one-half">
                                            <p class="input-info"><input type="text" name="your-phone" id="phone" value="" placeholder="Ваш телефон *" required></p>
                                        </div>
                                    </div>
                                    <button type="submit" class="button-footer">Перезвоните мне</button>
                                </div>
                                
                            </form>
                        </div>
                        <!-- /.widget-subscribe -->
                    </div>
                    <!-- /.col-md-3 col-sm-6 -->
                </div>
                <!-- /.row .widget-box -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© Copyright <a href="#" title="">MySite 2018</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.footer-bottom -->

        <div class="button-go-top">
            <a href="#" title="" class="go-top">
                 <i class="fa fa-chevron-up"></i>
            </a>
        </div>

    </div>
    <!-- /.boxed -->

    <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/tether.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/waypoints.min.js"></script>

    <script type="text/javascript" src="javascript/kinetic.js"></script>
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="javascript/jquery.owl-filter.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/jquery-validate.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".workImg").fancybox();
        });
    </script>


</body>

</html>