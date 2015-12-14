<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\MenuItem;

class MenuWithAuthentication {


    protected static $instance = null;

    function __construct()
    {
    }

    public static function menu($id)
    {
        return new MenuItem($id);
    }

    public static function instance(){
        if(is_null(static::$instance)){
            return static::$instance = new static;
        }
        return static::$instance;
    }
}