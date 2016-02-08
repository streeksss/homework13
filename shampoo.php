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
        <header class="h-page">
            <div class="container clearfix">

                <?php require "scripts/header.php";?>

            </div>
        </header>

        <main class="m-page shampoo">
            <div class="container clearfix">
                <h1 class="title">Шампунь ежедневного пользования</h1>
                <div>
                    <div class="image"></div>
                    <div class="price">
                        <p>
                            <span>Раздел:</span> Косметология<br/>
                            <span>Объем/Вес:</span> 250мл<br/>
                            <span>Кол-во очков:</span> 14<br/>
                            <span>Отзывов:</span> 15
                        </p>
                        <p>
                            <span class="last-price">280 грн.</span> <span class="first-price">344 грн.</span><br/>
                            Хотите купить дешевле? Позвоните представителю магазина!
                        </p>
                        <div class="buy"><a href="#">Купить</a></div>
                    </div>
                </div>
                <div class="info-block">
                    <section class="info-first">
                        <h3>Основные ингридиенты</h3>
                        <p>
                            Доктор Нонна на телеканале домашний в программе спросите повара
                            на телеканале домашний в программе спросите повара Доктор Нонна на
                            телеканале домашний в программе Доктор Нонна на телеканале домашний
                            в программе. Доктор Нонна на телеканале домашний в программе спросите
                            повара Доктор Нонна на телеканале домашний в программе спросите...
                        </p>
                        <span><a href="#">Развернуть</a></span>
                    </section>
                    <section class="info-second">
                        <h3>Показания</h3>
                        <p>
                            Доктор Нонна на телеканале домашний в программе спросите повара
                            на телеканале домашний в программе спросите повара Доктор Нонна на
                            телеканале домашний в программе Доктор Нонна на телеканале домашний
                            в программе. Доктор Нонна на телеканале домашний в программе спросите
                            повара Доктор Нонна на телеканале домашний в программе спросите...
                        </p>
                        <span><a href="#">Развернуть</a></span>
                    </section>
                </div>
                <div class="info-block">
                    <section class="info-first">
                        <h3>Полное описание продукта</h3>
                        <p>
                            Доктор Нонна на телеканале домашний в программе спросите повара
                            на телеканале домашний в программе спросите повара Доктор Нонна на
                            телеканале домашний в программе Доктор Нонна на телеканале домашний
                            в программе. Доктор Нонна на телеканале домашний в программе спросите
                            повара Доктор Нонна на телеканале домашний в программе спросите...
                        </p>
                        <span><a href="#">Развернуть</a></span>
                    </section>
                    <section class="info-second">
                        <h3>Способы приминения</h3>
                        <p>
                            Доктор Нонна на телеканале домашний в программе спросите повара
                            на телеканале домашний в программе спросите повара Доктор Нонна на
                            телеканале домашний в программе Доктор Нонна на телеканале домашний
                            в программе. Доктор Нонна на телеканале домашний в программе спросите
                            повара Доктор Нонна на телеканале домашний в программе спросите...
                        </p>
                        <span><a href="#">Развернуть</a></span>
                    </section>
                </div>
            </div>

            <div class="products-watch">
                <div class="container clearfix">

                    <?php
                        foreach($watchItems as $item) {
                            echo "
                                <section class=\"sp-products-watch\">
                                <img src=".$item['imageSource']."alt=".$item['alt'].">
                                <a href=".$item['url'].">".$item['about']."</a>
                                <span class=\"sp-products-price\">".$item['price']."</span>
                                </section>
                                ";
                        };
                    ?>

                </div>
            </div>
        </main>
        <footer class="f-page">
            <div class="container clearfix">

                <?php echo $footer;?>

            </div>
        </footer>
    </div>
</body>
</html>