<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/frontend/css/header.css">
    <link rel="stylesheet" href="public/frontend/css/nav.css">
    <link rel="stylesheet" href="public/frontend/css/service.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Service</title>
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




            <!-- inf service -->
            <div class="container_manageroom container_infor_guests ">
                <div class="title-box">
                    <!-- <h2>Service</h2> -->
                </div>


                <div class="box_manageroom">
                    <form action="" method="post">
                        <fieldset>
                            <legend>Search</legend>
                            <input autocomplete="off" class="input-search" type="text" name="search_service">
                            <input class="submit-search" type="submit" value="Search">
                        </fieldset>
                    </form>

                    <a href="index.php?controller=services&action=addservice">Add Service</a>
                </div>
                <div class="inf-room inf-service">
                    <ul class="table-content">
                        <li class="head_table">
                            <div class="id-room">
                                <p>Service Code</p>
                            </div>

                            <div class="locate-room">
                                <p>Service Name</p>
                            </div>
                            <div class="type-room">
                                <p>Price</p>
                            </div>
                            <div class="price-room">
                                <p>Service Type</p>
                            </div>
                            <div class="price-room">
                                <p>Picture</p>
                            </div>

                            <div class="price-room">
                                <p>Describe</p>
                            </div>
                            <div class="price-room">
                                <p>Location</p>
                            </div>
                            <!-- <div class="condi-room"><p>Condition</p></div> -->
                            <!-- <div class="detail-room">
                        <p>Book</p>
                    </div> -->
                            <div class="detail-room">
                                <p>View</p>
                            </div>
                            <div class="edit-room">
                                <p>Edit</p>
                            </div>
                            <div class="delete-room">
                                <p>Delete</p>
                            </div>
                            <!-- <div class="delete-room"><p>Delete</p></div> -->
                        </li>

                        <?php
                            while($row = mysqli_fetch_assoc($service)){

                        ?>
                        <li>
                            <div class="num-room">
                                <p><?=$row['madv']?></p>
                            </div>

                            <div class="locate-room">
                                <p><?=$row['tendv']?></p>

                            </div>
                            <div class="type-room">
                                <p><?=$row['giadv']?></p>

                            </div>
                            <div class="price-room">
                                <p><?=$row['loaidv']?></p>

                            </div>


                            <div class="price-room">
                                <p><img class="wh100" src="./public/uploads/<?=$row['anhdv']?>" alt=""></p>

                            </div>

                            <div class="price-room">
                                <p>
                                <?=$row['motadv']?>
                                </p>

                            </div>
                            <div class="price-room">
                                <p>
                                <?=$row['vitri']?>
                                </p>

                            </div>


                            <!-- <div class="book-room"><a href="index_admin.php?admin=book-inhotel&idguest=<?php echo $row_guest['IDKHACHHANG']; ?>"><i class="fa-solid fa-bell-concierge"></i></a></div> -->
                            <div class="view-room"><a href="index.php?controller=services&action=viewservice&codeservice=<?=$row['madv']?>"><i class="fa-solid fa-eye"></i></a>
                            </div>
                            <div class="edit-room"><a href="index.php?controller=services&action=editservice&codeservice=<?=$row['madv']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </div>
                            <div class="delete-room"><a href=""><i class="fa-solid fa-trash"></i></a></div>
                        </li>
                                <?php
                            }
                                
                                ?>
                    </ul>
                </div>
                <div class="num-page">
                    <!-- <ul>
                        <li>
                            <a href=""><i class="fa-solid fa-play fa-rotate-180"></i></i></a>
                        </li>

                        <li>
                            <a class="" href=""></a>
                        </li>




                        <li>
                            <a href=""><i class="fa-solid fa-play"></i></a>
                        </li>
                    </ul> -->
                </div>

            </div>
            <!--end inf service -->


        </div>
        <!-- end ctn right -->
    </div>

</body>