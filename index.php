<?php
    require "scripts/footer.php";
    require "scripts/script.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homework 16</title>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <div class="wrapper">
        <main class="fp-m-page">
            <div class="fp-buy-now">
                <div class="container clearfix">

                    <!-- Header -->

                    <?php require "scripts/header.php";?>

                    <!-- Buy now -->

                    <div class="fp-buy-now-block">
                        <span class="fp-buy-text">Купить продукцию <br/> сейчас</span>
                        <div class="fp-know-more">
                            <span class="fp-know-more-text"><a href="#">Узнать больше</a></span>
                        </div>
                    </div>
                    <div class="man-pic">
                        <img class="fp-man" src="img/man.png" alt="Sergey">
                    </div>
                </div>
            </div>

                    <!-- News -->

                <div class="fp-news">
                    <div class="container clearfix">
                        <h2 class="fp-title">Новости</h2>

                        <?php
                            foreach($newsItems as $item) {
                                    echo "
                                <section class=\"fp-news-block\">
                                <img src=".$item['imageSource']."alt=".$item['alt'].">
                                <p class=\"fp-news-text\">".$item['text']."</p>
                                <a href=".$item['url'].">Подробнее</a>
                                </section>
                                ";
                            };
                        ?>

                    </div>
                </div>

                 <!-- Recommend -->

            <div class="fp-recommend">
                <div class="container clearfix">
                    <h2 class="fp-title">Я рекомендую</h2>
                    <div class="fp-recommend-top">
                        <img src="img/shampoo-top.jpg" alt="Shampoo">
                        <h3 class="fp-recommend-top-title">Шампунь ежедневного пользования</h3>
                        <p class="fp-recommend-top-text">
                            Доктор Нонна на телеканале домашний в программе
                            спросите повара Доктор Нонна на телеканале
                            домашний в программе спросите повара Доктор
                            Нонна на телеканале домашний в программе Доктор
                            Нонна на телеканале домашний в программе...
                        </p>
                        <span class="fp-recommend-top-price">280 грн.</span>
                        <div class="fp-recommend-top-buy"><a href="#">Купить</a></div>
                    </div>
                    <div class="fp-recommend-small">

                        <?php
                            foreach($recommendItems as $item) {
                                echo "
                                    <section class=\"fp-recommend-shampoo\">
                                    <img src=".$item['imageSource']."alt=".$item['alt'].">
                                    <a href=".$item['url'].">".$item['about']."</a>
                                    <span class=\"fp-recommend-shampoo-price\">".$item['price']."</span>
                                    </section>
                                ";
                            };
                        ?>

                    </div>

                    <div class="fp-recommend-small">

                        <?php
                            foreach($recommendItems as $item) {
                                echo "
                                    <section class=\"fp-recommend-shampoo\">
                                    <img src=".$item['imageSource']."alt=".$item['alt'].">
                                    <a href=".$item['url'].">".$item['about']."</a>
                                    <span class=\"fp-recommend-shampoo-price\">".$item['price']."</span>
                                    </section>
                                ";
                            };
                        ?>

                    </div>
                </div>
            </div>

            <!-- Video -->

            <div class="fp-video">
                <div class="container clearfix">
                    <h2 class="fp-title video"><a href="video.php">Телеканал "Теледом"</a></h2>
                    <div class="fp-video-block">
                        <div class="fp-video-big">
                            <iframe width="470" height="355" src="https://www.youtube.com/embed/ZQaBcNI_AoM" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="fp-video-small">
                            <iframe width="230" height="175" src="https://www.youtube.com/embed/ZQaBcNI_AoM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="fp-video-link">
                        <div class="fp-video-link-block">
                            <h4>Новые видео</h4>
                            <span><a href="#">Шампунь ежедневного пользования (16:54)</a></span><br/>
                            <span><a href="#">Премьера! Ева Бушмина - Религия (05:14)</a></span><br/>
                            <span><a href="#">Анжелика Варум - Я всегда с тобой</a></span>
                        </div>
                        <div class="fp-video-link-block video-second-block">
                            <h4>Популярные</h4>
                            <span><a href="#">Шампунь ежедневного пользования (16:54)</a></span><br/>
                            <span><a href="#">Премьера! Ева Бушмина - Религия (05:14)</a></span><br/>
                            <span><a href="#">Анжелика Варум - Я всегда с тобой</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About us -->

            <div class="fp-about-us">
                <div class="container clearfix">
                    <div class="fp-about-us-block">
                        <h2 class="fp-title about-us">Цель моей жизни - делать людей счастливыми</h2>
                        <p class="fp-about-us-text">
                            В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что даже находясь в декретном
                            отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза больше чем моя зарплата
                            в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для серьезных и амбициозных
                            людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь сотрудничаю ...
                        </p>
                        <a href="#">Узнать подробнее</a>
                        <div class="social">
                            <a href="http://youtube.com"><img class="social-icon" src="img/youtube.png" alt="Youtube"></a>
                            <a href="http://flickr.com"><img class="social-icon" src="img/flickr.png" alt="Flickr"></a>
                            <a href="http://vk.com"><img class="social-icon" src="img/vk.png" alt="ВКонтакте"></a>
                            <a href="http://odnoklassniki.ru"><img class="social-icon" src="img/od.png" alt="Одноклассники"></a>
                            <a href="http://facebook.com"><img class="social-icon" src="img/facebook.png" alt="Facebook"></a>
                            <a href="http://twitter.com"><img class="social-icon" src="img/twitter.png" alt="Twitter"></a>
                        </div>
                    </div>
                    <div class="fp-about-us-man">
                        <img src="img/man-small.png" alt="Sergey">
                    </div>
                </div>
            </div>

            <!-- Partners -->

            <div class="fp-partners">
                <div class="container clearfix">
                    <h2 class="fp-title">Мои партнеры по бизнесу</h2>

                    <?php
                        foreach($partnersItems as $item) {
                            echo "
                                <section class=\"fp-partners-block\">
                                <img src=".$item['Photo']."alt=".$item['alt'].">
                                <span class=\"fp-partners-name\">".$item['name']."</span><br/>
                                <span class=\"fp-partners-post\">".$item['post']."</span><br/>
                                <img src=\"img/gps.png\" alt=\"From\">
                                <span class=\"fp-partners-from\">".$item['from']."</span>
                                </section>
                            ";
                        };
                    ?>

                </div>
            </div>

            <!-- Welcome -->

            <div class="fp-welcome">
                <div class="container clearfix">
                    <h2 class="fp-title welcome">Добро пожаловать в команду</h2>
                    <form>
                        <input class="fp-welcome-data" type="text" placeholder="Ваше имя">
                        <input class="fp-welcome-data" type="text" placeholder="Телефон">
                        <input class="fp-welcome-data" type="email" placeholder="E-mail адрес">
                        <input class="fp-welcome-send" type="submit" value="Присоединяйтесь">
                    </form>
                    <p class="fp-welcome-text">Узнайте подробнее почему выгодня сотрудничать с нами и быть в нашей команде</p>
                </div>
            </div>
        </main>

        <!-- Footer -->

        <footer class="fp-f-page">
            <div class="container clearfix">
                <div class="fp-f-page-info">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
                        possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
                        deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
                        nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                        corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
                        assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
                        commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto corporis eum possimus quibusdam, quod recusandae tempore
                        voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
                        pariatur qui. Animi, commodi inventore.
                    </p>
                </div>
                <div class="fp-f-page-info second">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
                        possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
                        deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
                        nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                        corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
                        assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
                        commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto corporis eum possimus quibusdam, quod recusandae tempore
                        voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
                        pariatur qui. Animi, commodi inventore.
                    </p>
                </div>

                <?php echo $footer;?>

            </div>
        </footer>
    </div>
</body>
</html>