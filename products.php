<?php
    require "scripts/footer.php";
    require "scripts/script.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homework 16</title>
    <meta charset="utf-8">
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

    <main class="products-m-page">
        <div class="container clearfix">

            <span class="products-title">Каталог</span>
            <ul class="products-nav">
                <li><a href="#">Я рекомендую</a></li>
                <li><a href="#">Акции</a></li>
                <li><a href="#">Новинки</a></li>
            </ul>
            <div  class="menu-column">
                <span class="">Соли и грязи</span>

                     <?php
                        echo "<ul class=\"products-menu\">";
                        foreach($menuItems as $item) {
                            echo "<li><a href=".$item['url'].">".$item['title']."</a></li>";
                        };
                        echo "</ul>";
                     ?>

            </div>

            <div  class="main-column">

                <?php
                    foreach($productItems as $item) {
                        echo "
                            <div class=\"sp-products-list\">
                            <img src=".$item['imageSource']."alt=".$item['alt'].">
                            <a href=".$item['url'].">".$item['about']."</a>
                            <span class=\"sp-products-price\">".$item['price']."</span>
                            <div class=\"sp-products-buy\">
                            <span><a href=".$item['url2'].">Купить</a></span>
                            </div></div>
                        ";
                    };
                ?>

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