<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="public/frontend/css/header.css">
    <link rel="stylesheet" href="public/frontend/css/nav.css">
    <link rel="stylesheet" href="public/frontend/css/adddetail.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Detail</title>
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
                    <!-- <a href="index.php?controller=services">Back</a> -->
                    <!-- <a href="index.php?controller=services&action=adddetail">Add Detail</a> -->







                </div>
                <div class="add-room-sql">
                    <div class="er_gues_have_bill_in_date center">
                        <p></p>
                    </div>


                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="ctn_2_col flex">
                            <div class="box_form_left">
                                <div class="form-field">
                                    <label>Service Code: </label>

                                    <input class="nroomn" type="text" name="servicecode" value="<?php echo $_GET['codeservice']?>">
                                </div>



                                <div class="form-field">
                                    <label>Domain name: </label>

                                    <input class="nroomn" type="text" name="domainname" value="">
                                </div>


                                <div class="form-field">
                                    <label>Time: </label>

                                    <input class="nroomn" type="time" name="time" value="">
                                </div>

                                <div class="form-field">
                                    <label>Day start: </label>


                                    <input class="nroomn" type="date" name="daystart" value="">

                                    <!-- <select name="servicetype" id="" class="nroomn">
                                <option value="tour">Tour</option>
                                <option value="foodanddrink">Food and drink</option>
                            </select> -->
                                </div>


                                <div class="form-field">
                                    <label>Vehicle: </label>
                                    <!-- <input type="file" name="picture" value=""> -->
                                    <input class="nroomn" type="text" name="vihicle" value="">

                                </div>
                                <div class="form-field">
                                    <label>Location start: </label>

                                    <input class="nroomn" type="" name="locationstart" value="">

                                </div>

                                <div class="form-field">
                                    <label>Accommodation: </label>

                                    <input class="nroomn" type="text" name="accommodation" value="">

                                </div>

                                <div class="form-field">
                                    <label>Program: </label>

                                    <input class="nroomn" type="text" name="program" value="">

                                </div>
                            </div>

                            <div class="box_form_right">

                                <div class="form-field">
                                    <label>Price for children: </label>

                                    <input class="nroomn" type="text" name="prieforchildren" value="">

                                </div>

                                <div class="form-field">
                                    <label>Price for baby: </label>

                                    <input class="nroomn" type="text" name="priceforbaby" value="">

                                </div>

                                <div class="form-field">
                                    <label>Single room price: </label>

                                    <input class="nroomn" type="text" name="singleroomprice" value="">

                                </div>

                                <div class="form-field">
                                    <label>Double room price: </label>

                                    <input class="nroomn" type="text" name="doubleroomprice" value="">

                                </div>


                                <div class="form-field">
                                    <label>Note: </label>

                                    <input class="nroomn" type="text" name="note" value="">

                                </div>


                                <div class="form-field">
                                    <label>Terms of payment: </label>

                                    <input class="nroomn" type="text" name="termsofpayment" value="">

                                </div>

                                <div class="form-field">
                                    <label>Number of stars: </label>

                                    <input class="nroomn" type="number" name="numberofstart" value="">

                                </div>
                            </div>
                        </div>









                        <input class="nroomn" type="hidden" name="company" value="contymay">

                        <div class="form-submit">
                            <input class="submit-add" name="submit" type="submit" value="Save">
                        </div>

                    </form>

                </div>
            </div>

            <!-- end Add-service -->


        </div>
        <!-- end ctn right -->
    </div>

</body>