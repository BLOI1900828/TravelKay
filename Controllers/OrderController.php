<?php
class OrderController extends BaseController
{
    private $orderModel;

    public function __construct()
    {
        $this->loadModel('OrderModel');
        $this->orderModel = new OrderModel;
    }



    public function index()
    {

        if (isset($_SESSION['company'])) {
            $order =  $this->orderModel->select($_SESSION['company'],);
            return $this->view("frontend.orders.order.index", [
                'order' => $order
            ]);
        }
        // return $this->view("frontend.order.service.index");
    }



    //view order
    public function vieworder()
    {
        if (isset($_GET['username'])) {
            $username = $_GET['username'];
            $orderview =  $this->orderModel->orderview($username);
            return $this->view("frontend.orders.vieworder.index", [
                'orderview' => $orderview
            ]);
        }
    }

    //end view order


    // Approve

    public function status_a()
    {
        if (isset($_GET['idbook'])) {
            $approve = 'approve';
            $idbook = $_GET['idbook'];


            $data = [
                'trangthai' => $approve
              


            ];
            $this->orderModel->add_approve($data, $idbook);


             echo "<script>window.location.href='?controller=order'</script>";

        } else {
            return $this->view("frontend.orders.order.index");
        }

        return $this->view("frontend.orders.order.index");
    }
    // end Approve


        // Refuse

        public function status_r()
        {
            if (isset($_GET['idbook'])) {
                $refuse = 'refuse';
                $idbook = $_GET['idbook'];
    
    
                $data = [
                    'trangthai' => $refuse
                  
    
    
                ];
                $this->orderModel->add_refuse($data, $idbook);
    
    
                 echo "<script>window.location.href='?controller=order'</script>";
    
            } else {
                return $this->view("frontend.orders.order.index");
            }
    
            return $this->view("frontend.orders.order.index");
        }
        // end Refuse
    
    
}
