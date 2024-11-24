<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="public/frontend/css/header.css">
    <link rel="stylesheet" href="public/frontend/css/nav.css">
    <link rel="stylesheet" href="public/frontend/css/viewservice.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>View Service</title>
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





            <?php
            $row = mysqli_fetch_assoc($serviceview)

            ?>

            <!-- view -->



            <div class="container_manageroom none-grid">
                <div class="title-box height-auto">
                    <!-- <h2>View Service</h2> -->
                    <a href="index.php?controller=services">Back</a>
                    <a href="index.php?controller=services&action=viewdetail&codeservice=<?= $row['madv'] ?>">View Detail</a>
                </div>

                <div class="div100 ctn_detail_guest">

                    <!-- <a class="view_booked_room_btn" href="index_admin.php?admin=checkOut-user&idguest=<?php #$users
                                                                                                            ?>">View Booked</a> -->

                    <h3 class="content_information_guest">information</h3>



                    <div class="box_view_detail_guest">
                        <div class="box-mini-item centers">
                            <p class="inf_detail_design_p">Service Code: <span><?= $row['madv'] ?></span> </p>
                        </div>


                        <div class="box-mini-item centers">
                            <p class="inf_detail_design_p">Service Name: <span><?= $row['tendv'] ?></span></p>

                        </div>
                        <div class="box-mini-item centers">
                            <p class="inf_detail_design_p">Price: <span> <?= $row['giadv'] ?></span> </p>

                        </div>
                        <div class="box-mini-item centers">
                            <p class="inf_detail_design_p">Service Type: <span><?= $row['loaidv'] ?></span></p>

                        </div>


                        <div class="box-mini-item centers">
                            <p class="inf_detail_design_p centerY">
                                <label>Picture:</label>

                                <img class="wh45" src="./public/uploads/<?= $row['anhdv'] ?>" alt="">

                            </p>

                        </div>


                        <div class="box-mini-item centers">
                            <p class="inf_detail_design_p centerY">
                                <label>Describe: </label>

                                <span><?= $row['motadv'] ?></span>

                            </p>

                        </div>


                        <div class="box-mini-item centers">
                            <p class="inf_detail_design_p centerY">
                                <label>Location: </label>

                                <span><?= $row['vitri'] ?></span>

                            </p>

                        </div>

                    </div>



                </div>

            </div>

            <!-- end view -->


        </div>
        <!-- end ctn right -->
    </div>

</body>