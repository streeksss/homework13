<?php require "script.php";?>
            <form>
                <input class="search" type="search" placeholder="Поиск"/>
            </form>
            <a href="#"><img class="search-icon" src="img/search.png" alt="Search"></a>
            <nav class="menu">
                     <?php
                        echo "<ul>";
                        foreach($navItems as $item) {
                            echo "<li><a href=".$item['url'].">".$item['title']."</a></li>";
                        };
                        echo "</ul>";
                     ?>
            </nav>
            <a href="#"><img class="bag-icon" src="img/bag.png" alt="Bag"></a>
