<?php
class Menu
{
    public static $items = array(
        1=>"PLAY",
        2=>"ABOUT",
        3=>"TOP LIST",
    );

    public static $links = array(
        1=>"start.html",
        2=>"about.html",
        3=>"top_list.html",
    );


    // объявление метода
    public static function genMenu($pressed_button) {
        echo "<div  class=\"header__menu\">";
        for ($i=1; $i<=3; $i++) {
            if ($pressed_button !=$i) {
                echo "<a href=\"assest/";
                echo self::$links[$i];
                echo "\"><button class='header__button'>" . self::$items[$i] . "</button></a>";
            }
            else {
                echo "<div class='header__button_pressed'>" . self::$items[$i] . "</div>";
            }
        }
        echo "</div>";
    }
}
?>