<?php
class RevenueController extends BaseController
{
    private $revenueModel;

    public function __construct()
    {
        $this->loadModel('RevenueModel');
        $this->revenueModel = new RevenueModel;
    }

    public function index()
    {

        if (isset($_SESSION['company'])) {
            $revenuetoday =  $this->revenueModel->selectrevenuetoday($_SESSION['company'],);
            $revenueyear =  $this->revenueModel->selectrevenueyear($_SESSION['company'],);
            $revenuemonth =  $this->revenueModel->selectrevenuemonth($_SESSION['company'],);
            $ordertoday =  $this->revenueModel->selectordertoday($_SESSION['company'],);
            $ordermonth =  $this->revenueModel->selectordermonth($_SESSION['company'],);
            $orderyear =  $this->revenueModel->selectorderyear($_SESSION['company'],);

            return $this->view("frontend.revenues.revenue.index", [
                'revenuetoday' => $revenuetoday,
                'revenueyear' => $revenueyear,
                'revenuemonth'=> $revenuemonth,
                'ordertoday'=> $ordertoday,
                'ordermonth'=> $ordermonth,
                'orderyear'=> $orderyear,
            ]);
        }
        // return $this->view("frontend.order.service.index");
    }




}