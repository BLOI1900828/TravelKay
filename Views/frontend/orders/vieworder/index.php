<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/frontend/css/header.css">
    <link rel="stylesheet" href="public/frontend/css/nav.css">
    <link rel="stylesheet" href="public/frontend/css/vieworder.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>View Order</title>
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




            <!-- inf order -->
            <div class="container_manageroom container_infor_guests ">
                <div class="title-box">
                    <!-- <h2>Order</h2> -->
                </div>


                <div class="box_manageroom">
                <a href="index.php?controller=order">Back</a>

              
                </div>


                <div class="inf-room inf-order">
                    <ul class="table-content">
                        <li>
                            <div class="id-room">
                                <p>Id Book</p>
                            </div>

                            <div class="locate-room">
                                <p>Service Name</p>
                            </div>
                           


                            <div class="price-room">
                                <p>Booking Date</p>
                            </div>
                            <div class="price-room">
                                <p>Total</p>
                            </div>
                            <div class="type-room">
                                <p>Location Start</p>
                            </div>
                            <!-- <div class="condi-room"><p>Condition</p></div> -->
                            <!-- <div class="detail-room">
                        <p>Book</p>
                    </div> -->
                            <div class="detail-room">
                                <p>Time</p>
                            </div>
                            <div class="edit-room">
                                <p>Day Start</p>
                            </div>
                            <div class="delete-room">
                                <p>Vehicle</p>
                            </div>
                            <!-- <div class="delete-room"><p>Delete</p></div> -->
                        </li>

                        <?php
                        
                    $row = mysqli_fetch_assoc($orderview);

                        ?>
                            <li>
                                <div class="num-room">
                                    <p>
                                        <?=
                                        $row['iddat']
                                          ?>
                                    </p>
                                </div>

                                <div class="locate-room">
                                    <p> <?= $row['tendv'] ?></p>

                                </div>
                               
                                <div class="price-room">
                                    <p> <?= $row['ngaydat'] ?></p>

                                </div>

                                <div class="price-room">
                                    <p> <?= $row['tonggia'] ?></p>

                                </div>
                                <div class="type-room">
                                <?= $row['noikhoihanh'] ?>

                                </div>

                                <div class="price-room">
                                    <p> <?= $row['thoigian'] ?></p>

                                </div>

                                <div class="price-room">
                                    <p> <?= $row['ngaybatdau'] ?></p>

                                </div>

                                <div class="price-room">
                                    <p> <?= $row['phuongtien'] ?></p>

                                </div>







                            </li>
                      

                    </ul>


                </div>

                <div class="num-page">
                    <ul>
                        <li>
                            <a href=""><i class="fa-solid fa-play fa-rotate-180"></i></i></a>
                        </li>

                        <li>
                            <a class="" href=""></a>
                        </li>




                        <li>
                            <a href=""><i class="fa-solid fa-play"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
            <!--end inf order -->


        </div>
        <!-- end ctn right -->
    </div>

</body>