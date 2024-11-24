<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/frontend/css/header.css">
    <link rel="stylesheet" href="public/frontend/css/nav.css">
    <link rel="stylesheet" href="public/frontend/css/order.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Order</title>
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
                    <form action="" method="post">
                        <fieldset>
                            <legend>Search</legend>
                            <input autocomplete="off" class="input-search" type="text" name="search_order">
                            <input class="submit-search" type="submit" value="Search">
                        </fieldset>
                    </form>

                    <!-- <a href="addorder.html">Add Order</a> -->
                </div>


                <div class="inf-room inf-order">
                    <ul class="table-content">
                        <li class="head_table">
                            <div class="id-room">
                                <p>Id Book</p>
                            </div>

                            <div class="locate-room">
                                <p>Username</p>
                            </div>
                            <div class="type-room">
                                <p>Total</p>
                            </div>


                            <div class="price-room">
                                <p>Status</p>
                            </div>
                            <div class="price-room">
                                <p>Booking Date</p>
                            </div>
                            <!-- <div class="condi-room"><p>Condition</p></div> -->
                            <!-- <div class="detail-room">
                        <p>Book</p>
                    </div> -->
                            <div class="detail-room">
                                <p>View</p>
                            </div>
                            <div class="edit-room">
                                <p>Approve</p>
                            </div>
                            <div class="delete-room">
                                <p>Refuse</p>
                            </div>
                            <!-- <div class="delete-room"><p>Delete</p></div> -->
                        </li>

                        <?php
                        while ($row = mysqli_fetch_assoc($order)) {

                        ?>
                            <li>
                                <div class="num-room">
                                    <p>
                                        <?= $row['iddat'] ?>
                                    </p>
                                </div>

                                <div class="locate-room">
                                    <p> <?= $row['username'] ?></p>

                                </div>
                                <div class="type-room">
                                    <p> <?= $row['tonggia'] ?></p>

                                </div>
                                <div class="price-room">
                                    <p> <?= $row['trangthai'] ?></p>

                                </div>

                                <div class="price-room">
                                    <p> <?= $row['ngaydat'] ?></p>

                                </div>






                                <!-- <div class="book-room"><a href="index_admin.php?admin=book-inhotel&idguest=<?php echo $row_guest['IDKHACHHANG']; ?>"><i class="fa-solid fa-bell-concierge"></i></a></div> -->
                                <div class="view-room"><a href="index.php?controller=order&action=vieworder&username=<?php echo $row['username']; ?>"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div>
                                  
                                        <a class="text_B btn_approve " href="?controller=order&action=status_a&idbook=<?= $row['iddat'] ?>">Approve</a>


                                </div>

                                <div>

                                <a class="text_B btn_refuse " href="?controller=order&action=status_r&idbook=<?= $row['iddat'] ?>">Refuse</a>

                                </div>

                            </li>
                        <?php
                        }

                        ?>

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