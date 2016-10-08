<?php

/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 03.10.2016
 * Time: 23:11
 */
class Content
{
    public static $pages = array(
        1=>"start.html",
        2=>"about.html",
        3=>"top_list.html",
    );

    public static function getPage($page_number){
        return file_get_contents(self::$pages[$page_number]);
    }

}