<?php
class HomeController extends BaseController
{
    private $homeModel;

    public function __construct()
    {
        $this->loadModel('HomeModel');
        $this->homeModel = new HomeModel;
    }

    public function index()
    {
        return $this->view("frontend.home.index");
    }

 

}