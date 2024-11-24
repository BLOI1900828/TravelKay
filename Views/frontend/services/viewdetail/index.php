<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="public/frontend/css/header.css">
    <link rel="stylesheet" href="public/frontend/css/nav.css">
    <link rel="stylesheet" href="public/frontend/css/viewdetail.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Detail</title>
</head>




<body>




    <div class="ctn_partner">

        <!-- nav -->
        <?php
        include 'partitions/frontend/nav.php';
        ?>
        <!-- end nav -->




        <!-- ctn right -->
        <div class="ctn_right_part">

            <!-- header -->
            <?php
            include 'partitions/frontend/header.php';
            ?>
            <!-- end header -->






            <!-- Add-service -->





            <div class="container_manageroom none-grid">
                <div class="title-box height-auto">
                    <!-- <h2>Add Service</h2> -->
                    <a href="index.php?controller=services">Back</a>
                    <!-- <a href="index.php?controller=services&action=adddetail">Add Detail</a> -->







                </div>
                <div class="add-room-sql">
                    <div class="er_gues_have_bill_in_date center">
                        <p></p>
                    </div>


                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="ctn_2_col flex">
                            <div class="box_form_left">
                                <?php
                                $rowdetailview = mysqli_fetch_array($detailview);

                                ?>
                                    <div class="form-field">
                                        <label>Service Code: </label>

                                        <div  class="nroomn"><?php echo $_GET['codeservice'] ?></div> 
                                    </div>



                                    <div class="form-field">
                                        <label>Domain name: </label>

                                        <div  class="nroomn"><?php echo $rowdetailview['mien']; ?></div> 
                                    </div>


                                    <div class="form-field">
                                        <label>Time: </label>

                                        <div  class="nroomn"><?php echo $rowdetailview['thoigian']; ?></div> 
                                    </div>

                                    <div class="form-field">
                                        <label>Day start: </label>


                                        <div  class="nroomn"><?php echo $rowdetailview['ngaybatdau']; ?></div> 

                                        <!-- <select name="servicetype  class="nroomn"" id="">
                                <option value="tour">Tour</option>
                                <option value="foodanddrink">Food and drink</option>
                            </select> -->
                                    </div>


                                    <div class="form-field">
                                        <label>Vehicle: </label>
                                        <!-- <></div> type="file" name="picture" value=""> -->
                                        <div  class="nroomn"><?php echo $rowdetailview['phuongtien']; ?></div> 

                                    </div>
                                    <div class="form-field">
                                        <label>Location start: </label>

                                        <div  class="nroomn"><?php echo $rowdetailview['noikhoihanh']; ?></div>

                                    </div>

                                    <div class="form-field">
                                        <label>Accommodation: </label>

                                        <div  class="nroomn"><?php echo $rowdetailview['choo']; ?></div>

                                    </div>

                                    <div class="form-field">
                                        <label>Program: </label>

                                        <div  class="nroomn"><?php echo $rowdetailview['chuongtrinh']; ?></div> 

                                    </div>
                            </div>

                            <div class="box_form_right">

                                <div class="form-field">
                                    <label>Price for children: </label>

                                    <div  class="nroomn"><?php echo $rowdetailview['giatreem']; ?></div>

                                </div>

                                <div class="form-field">
                                    <label>Price for baby: </label>

                                    <div  class="nroomn"><?php echo $rowdetailview['giatresosinh']; ?></div> 

                                </div>

                                <div class="form-field">
                                    <label>Single room price: </label>

                                    <div  class="nroomn"><?php echo $rowdetailview['giaphongdon']; ?></div>

                                </div>

                                <div class="form-field">
                                    <label>Double room price: </label>

                                    <div  class="nroomn"><?php echo $rowdetailview['giaphongdoi']; ?></div> 

                                </div>


                                <div class="form-field">
                                    <label>Note: </label>

                                    <div  class="nroomn"><?php echo $rowdetailview['ghichu']; ?></div> 

                                </div>


                                <div class="form-field">
                                    <label>Terms of payment: </label>

                                    <div  class="nroomn"><?php echo $rowdetailview['dieukhoanthanhtoan']; ?></div> 

                                </div>

                                <div class="form-field">
                                    <label>Number of stars: </label>

                                    <div  class="nroomn"><?php echo $rowdetailview['sosao']; ?></div> 
                                </div>
                    
                            </div>
                        </div>









                        <  class="nroomn"></div> type="hidden" name="company" value="contymay">
<!-- 
                        <div class="form-submit">
                            <div></div> class="submit-add" name="submit" type="submit" value="Save">
                        </div> -->

                    </form>

                </div>
            </div>

            <!-- end Add-service -->


        </div>
        <!-- end ctn right -->
    </div>

</body>