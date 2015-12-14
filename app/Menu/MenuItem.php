<?php

namespace MenuWithAuthentication\Menu;
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 14/12/15
 * Time: 17:46
 */


/**
 * Class MenuItem
 * @package MenuWithAuthentication\Menu
 */
class MenuItem {

    /**
     * @var
     */
    protected $title;
    protected $icon = null;
    protected $url = null;
    protected $role;
    protected $permission;
    protected $user;
    private $id;


    /**
     * @param $id
     */
    function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @param null $title
     * @return $this
     */
    public function title($title=null){

        if($title == null){
            return $this->title;
        }

        $this->title = $title;
        return $this;
    }

    /**
     * @param null $icon
     * @return $this
     */
    public function icon($icon=null){

        if($icon == null){
            return $this->icon;
        }

        $this->title = $icon;
        return $this;
    }

    /**
     * @param null $url
     * @return $this
     */
    public function url($url=null){

        if($url == null){
            return $this->url;
        }

        $this->title = $url;
        return $this;
    }

    /**
     * @param null $role
     * @return $this
     */
    public function role($role=null){

        if($role == null){
            return $this->role;
        }

        $this->title = $role;
        return $this;
    }

    /**
     * @param null $permission
     * @return $this
     */
    public function permission($permission=null){

        if($permission == null){
            return $this->permission;
        }

        $this->title = $permission;
        return $this;
    }

    /**
     * @param null $user
     * @return $this
     */
    public function user($user=null){

        if($user == null){
            return $this->user;
        }

        $this->title = $user;
        return $this;
    }



    public function __toString(){
        return $this->render();
    }

    public function render(){
        $data = array();
        $data['title'] = $this->title;
        $data['url'] = $this->url;
        $data['icon'] = $this->icon;
        $data['id'] = $this->id;
//        $data['permission'] = $this->permission;
//        $data['role'] = $this->role;
//        $data['user'] = $this->user;
        return (String) view('menuitem', $data);
    }
}