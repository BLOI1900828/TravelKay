<?php
class AuthenticatorController extends BaseController
{
    private $authenticatorModel;

    public function __construct()
    {
        $this->loadModel('AuthenticatorModel');
        $this->authenticatorModel = new AuthenticatorModel;
    }

    public function index()
    {
        $action = $_GET['action'];
        return $this->view("frontend.authenticator.$action.index");
    }
    // ================================================
    public function sign_in_account()
    {
        if (isset($_POST['submit'])) {
            $username = ($_POST['username']);
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $data = [
                'username' => $username,
                'email' => $email,
                'passdt' => $password
            ];

            $this->authenticatorModel->sign_inData($data);
            echo "<script>window.location.href='?controller=home'</script>";
            

        } else {
            return $this->index();
        }
    }


    public function sign_up_account()
    {
        if (isset($_POST['submit'])) {
            $username = ($_POST['username']);
            $email = $_POST['email'];
            $password = md5($_POST['password']);


            $data = [
                'username' => $username,
                'email' => $email,
                'passdt' => $password,

            ];

            $this->authenticatorModel->sign_upData($username, $data);
            $_SESSION['username'] = $username;
            echo "<script>window.location.href='?controller=authenticator&action=sign_up_contact&user=$username'</script>";
        } else {
            return $this->index();
        }
    }

    public function sign_up_contact()
    {
        if (isset($_POST['submit'])) {
            $username = $_GET['user'];
            $company = $_POST['company'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $state = $_POST['state'];

            $data = [
                'username' => $username,
                'tencongty' => $company,
                'diachi' => $address,
                'sdt' => $phone,
                'thanhpho' => $city,
                'quan' => $state
            ];

            $this->authenticatorModel->sign_upDataContact($username, $data);
            $_SESSION['company'] = $company;
            echo "<script>window.location.href='?controller=authenticator&action=sign_up_payment&user=$username'</script>";
        } else {
            return $this->index();
        }
    }

    public function sign_up_payment()
    {
        if (isset($_POST['submit'])) {
            $username = $_GET['user'];
            $card = $_POST['card'];
            $code = $_POST['code'];
            $card_name = $_POST['card-name'];
            $ex_date = $_POST['ex-date'];

            $data = [
                'thethanhtoan' => $card,
                'mabaove' => $code,
                'tenchuthe' => $card_name,
                'ngayhethan' => $ex_date,
            ];
            $this->authenticatorModel->updateData($username, $data);
            echo "<script>window.location.href='?controller=authenticator&action=sign_up_complete&user=$username'</script>";
        } else {
            return $this->index();
        }
    }

    public function sign_up_complete()
    {
        if (isset($_POST['username'])) {
            $username = ($_POST['username']);
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $data = [
                'username' => $username,
                'email' => $email,
                'pass' => $password
            ];
            $this->authenticatorModel->sign_upData($username, $data);
        } else {
            return $this->index();
        }
    }
    // // =================================================
    // public function sign_in()
    // {
    //     if (isset($_POST['submit'])) {
    //         $username = ($_POST['username']);
    //         $email = $_POST['email'];
    //         $password = md5($_POST['password']);

    //         $data = [
    //             'username' => $username,
    //             'email' => $email,
    //             'pass' => $password
    //         ];

    //         $this->authenticatorModel->sign_inData($data);
    //     } else {
    //         return $this->index();
    //     }
    // }

    public function change_pass()
    {
        $username = $_GET['user'];
        if (isset($_POST['submit'])) {
            $password = md5($_POST['new-password']);
            $data = [
                'pass' => $password
            ];

            $this->authenticatorModel->changeData($username, $data);
        } else {
            return $this->index();
        }
    }
    public function logout()
    {
        $this->authenticatorModel->logoutData();
    }

    public function update_inf()
    {
        if (isset($_POST['username'])) {
            $username = ($_POST['username']);
            $email = $_POST['email'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $street = $_POST['street'];
            $number = $_POST['number'];
            $identity = $_POST['iden'];
            $phone = $_POST['phone'];

            $data = [
                'tenkh' => $lname,
                'hokh' => $fname,
                'sdt' => $phone,
                'cccd' => $identity,
                'username' => $username,
                'email' => $email,
                'duong' => $street,
                'thanhpho' => $city,
                'quan' => $state,
                'sonha' => $number

            ];
            $this->authenticatorModel->updateData($username, $data);
        } else {
            return $this->index();
        }
    }

    public function change_inf()
    {
        if (isset($_POST['username'])) {
            $username = ($_POST['username']);
            $email = $_POST['email'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $street = $_POST['street'];
            $number = $_POST['number'];
            $identity = $_POST['iden'];
            $phone = $_POST['phone'];

            $data = [
                'tenkh' => $lname,
                'hokh' => $fname,
                'sdt' => $phone,
                'cccd' => $identity,
                'duong' => $street,
                'thanhpho' => $city,
                'quan' => $state,
                'sonha' => $number

            ];
            $this->authenticatorModel->changeInf($username, $email, $data);
        } else {
            return $this->index();
        }
    }
}
