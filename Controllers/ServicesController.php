<?php
class ServicesController extends BaseController
{
    private $servicesModel;

    public function __construct()
    {
        $this->loadModel('ServicesModel');
        $this->servicesModel = new ServicesModel;
    }

    public function index()
    {
        if (isset($_SESSION['company'])) {
            $service =  $this->servicesModel->select($_SESSION['company']);
            return $this->view("frontend.services.service.index", [
                'service' => $service
            ]);
        }
        // return $this->view("frontend.services.service.index");
    }





    //view service
    public function viewservice()
    {
        if (isset($_GET['codeservice'])) {
            $serviceview =  $this->servicesModel->selectview($_GET['codeservice']);
            return $this->view("frontend.services.viewservice.index", [
                'serviceview' => $serviceview
            ]);
        }
    }

    //end view service

    //view detail
    public function viewdetail()
    {
        if (isset($_GET['codeservice'])) {
            $detailview =  $this->servicesModel->selectdetail($_GET['codeservice']);
            return $this->view("frontend.services.viewdetail.index", [
                'detailview' => $detailview
            ]);
        }
    }

    //end view detail


    // add service

    public function addservice()
    {
        if (isset($_POST['submit'])) {
            $svcode = ($_POST['servicecode']);
            $svname = $_POST['servicename'];
            $price = $_POST['price'];
            $type = $_POST['servicetype'];
            $pic = $_FILES['picture']['name'];
            $loca = $_POST['location'];
            $des = $_POST['describe'];
            $compa = $_SESSION['company'];
            $quantity = $_POST['quantity'];

            $target_dir = "./public/uploads/";
            $target_file = $target_dir . basename($pic);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES['picture']["tmp_name"]);
            if ($check !== false) {
                // echo "<div class='center-err'>File is an image - " . $check["mime"] . ".</div>" . "</br>";
                $uploadOk = 1;
            } else {

                // echo "<div class='center-err'>File is not an image.</div>" . "</br>";
                $uploadOk = 0;
                return $uploadOk;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "<div class='center-err'>Sorry, file already exists.</div>" . "</br>";
                $uploadOk = 0;
                return $uploadOk;
            }

            // Check file size
            if ($_FILES['picture']["size"] > 50000000) {
                // echo "<div class='center-err'>Sorry, your file is too large.</div>" . "</br>";
                $uploadOk = 0;
                return $uploadOk;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                // echo "<div class='center-err'>Sorry, only JPG, JPEG & PNG files are allowed.</div>" . "</br>";
                $uploadOk = 0;
                return $uploadOk;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                // echo "<div class='center-err'>Sorry, your file was not uploaded.</div>" . "</br>";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES['picture']["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars(basename($imgRoom)). " has been uploaded.";

                } else {
                    // echo "<div class='center-err'>Sorry, there was an error uploading your file.</div>" . "</br>";
                }
            }

            $data = [
                'madv' => $svcode,
                'tendv' => $svname,
                'giadv' => $price,
                'loaidv' => $type,
                'anhdv' => $pic,
                'motadv' => $des,
                'vitri' => $loca,
                'tencongty' => $compa,
                'soluong' => $quantity

            ];
            $this->servicesModel->insert_sv($data);
            echo "<script>window.location.href='?controller=services&action=adddetail&codeservice=$svcode'</script>";
        } else {
            return $this->view("frontend.services.addservice.index");
        }

        return $this->view("frontend.services.addservice.index");
    }

    // end add service

    // add detail
    public function adddetail()
    {
        if (isset($_POST['submit'])) {
            $svcode = ($_POST['servicecode']);
            $domainname = $_POST['domainname'];
            $time = $_POST['time'];
            $daystart = $_POST['daystart'];
            $vihicle = $_POST['vihicle'];
            $locationstart = $_POST['locationstart'];
            $accommodation = $_POST['accommodation'];
            $program = $_POST['program'];

            $prieforchildren = $_POST['prieforchildren'];
            $priceforbaby = $_POST['priceforbaby'];
            $singleroomprice = $_POST['singleroomprice'];
            $doubleroomprice = $_POST['doubleroomprice'];
            $note = $_POST['note'];
            $termsofpayment = $_POST['termsofpayment'];
            $numberofstart = $_POST['numberofstart'];

            $data = [
                'madv' => $svcode,
                'mien' => $domainname,
                'thoigian' => $time,
                'ngaybatdau' => $daystart,
                'phuongtien' => $vihicle,
                'noikhoihanh' => $locationstart,
                'choo' => $accommodation,
                'chuongtrinh' => $program,
                'giatreem' => $prieforchildren,
                'giatresosinh' =>  $priceforbaby,
                'giaphongdon' => $singleroomprice,
                'giaphongdoi' => $doubleroomprice,
                'ghichu' => $note,
                'dieukhoanthanhtoan' => $termsofpayment,
                'sosao' =>  $numberofstart,

            ];
            $this->servicesModel->insert_detail($data);
        } else {
            return $this->view("frontend.services.adddetail.index");
        }

        return $this->view("frontend.services.adddetail.index");
    }
    // end add service

    // ----------------------------------------------------------------------

    // edit service
    public function editservice()
    {


        # đổ thông tin edit

        


          #end đổ thông tin edit

        if (isset($_POST['submits'])) {
            $svcode = ($_POST['servicecode']);
            $svname = $_POST['servicename'];
            $price = $_POST['price'];
            $type = $_POST['servicetype'];
            $pic = $_FILES['picture']['name'];
            $loca = $_POST['location'];
            $des = $_POST['describe'];

            $quantity = $_POST['quantity'];


            $target_dir = "./public/uploads/";
            $target_file = $target_dir . basename($pic);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES['picture']["tmp_name"]);
            if ($check !== false) {
                // echo "<div class='center-err'>File is an image - " . $check["mime"] . ".</div>" . "</br>";
                $uploadOk = 1;
            } else {

                // echo "<div class='center-err'>File is not an image.</div>" . "</br>";
                $uploadOk = 0;
                return $uploadOk;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "<div class='center-err'>Sorry, file already exists.</div>" . "</br>";
                $uploadOk = 0;
                return $uploadOk;
            }

            // Check file size
            if ($_FILES['picture']["size"] > 500000000000) {
                // echo "<div class='center-err'>Sorry, your file is too large.</div>" . "</br>";
                $uploadOk = 0;
                return $uploadOk;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                // echo "<div class='center-err'>Sorry, only JPG, JPEG & PNG files are allowed.</div>" . "</br>";
                $uploadOk = 0;
                return $uploadOk;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                // echo "<div class='center-err'>Sorry, your file was not uploaded.</div>" . "</br>";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES['picture']["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars(basename($imgRoom)). " has been uploaded.";

                } else {
                    // echo "<div class='center-err'>Sorry, there was an error uploading your file.</div>" . "</br>";
                }
            }

            $data = [
        
                'tendv' => $svname,
                'giadv' => $price,
                'loaidv' => $type,
                'anhdv' => $pic,
                'motadv' => $des,
                'vitri' => $loca,
          
                'soluong' => $quantity


            ];
            $this->servicesModel->edit_sv($data, $svcode);
            // $selectedit =  $this->servicesModel->selectedit($svcode);

            echo "<script>window.location.href='?controller=services&action=editdetail&codeservice=$svcode'</script>";  
        } else {
            if (isset($_GET['codeservice'])) {
                $svcode = $_GET['codeservice'];
                $serviceviewedit =  $this->servicesModel->selectviewedit($svcode);
       
                return $this->view("frontend.services.editservice.index", [
                    'serviceviewedit' => $serviceviewedit
               ]);
           }
        }

  
    }

    //end edit service


    // edit detail
    public function editdetail()
    {
        

        if (isset($_POST['submit'])) {
            $svcode = ($_POST['servicecode']);
            $domainname = $_POST['domainname'];
            $time = $_POST['time'];
            $daystart = $_POST['daystart'];
            $vihicle = $_POST['vihicle'];
            $locationstart = $_POST['locationstart'];
            $accommodation = $_POST['accommodation'];
            $program = $_POST['program'];

            $prieforchildren = $_POST['prieforchildren'];
            $priceforbaby = $_POST['priceforbaby'];
            $singleroomprice = $_POST['singleroomprice'];
            $doubleroomprice = $_POST['doubleroomprice'];
            $note = $_POST['note'];
            $termsofpayment = $_POST['termsofpayment'];
            $numberofstart = $_POST['numberofstart'];

            $data = [
             
                'mien' => $domainname,
                'thoigian' => $time,
                'ngaybatdau' => $daystart,
                'phuongtien' => $vihicle,
                'noikhoihanh' => $locationstart,
                'choo' => $accommodation,
                'chuongtrinh' => $program,
                'giatreem' => $prieforchildren,
                'giatresosinh' =>  $priceforbaby,
                'giaphongdon' => $singleroomprice,
                'giaphongdoi' => $doubleroomprice,
                'ghichu' => $note,
                'dieukhoanthanhtoan' => $termsofpayment,
                'sosao' =>  $numberofstart,

            ];
            $this->servicesModel->edit_deta($data, $svcode);
            echo "<script>window.location.href='?controller=services'</script>";  

        } else {
            if (isset($_GET['codeservice'])) {
                $svcode = $_GET['codeservice'];
                $servicedetailedit =  $this->servicesModel->selectdetailedit($svcode);
       
                return $this->view("frontend.services.editdetail.index", [
                    'servicedetailedit' => $servicedetailedit
               ]);
           }
        }


    }
    // end edit detail

}
