<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/frontend/css/header.css">
    <link rel="stylesheet" href="public/frontend/css/nav.css">
    <link rel="stylesheet" href="public/frontend/css/revenue.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Revenue</title>
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
            $rowretoday = mysqli_fetch_assoc($revenuetoday);
            $rowreyear = mysqli_fetch_assoc($revenueyear);
            $rowremonth =  mysqli_fetch_assoc($revenuemonth);
            $rowordertoday =  mysqli_fetch_assoc($ordertoday);
            $rowordermonth =  mysqli_fetch_assoc($ordermonth);
            $roworderyear =  mysqli_fetch_assoc($orderyear);
            ?>

            <!-- inf service -->
            <div class="container_manageroom container_infor_guests ">
                <div class="title-box">
                    <!-- <h2>Service</h2> -->
                </div>


                <div class="box_manageroom">
                    <!-- <form action="" method="post">
                        <fieldset>
                            <legend>Search</legend>
                            <input autocomplete="off" class="input-search" type="text" name="search_service">
                            <input class="submit-search" type="submit" value="Search">
                        </fieldset>
                    </form> -->

                    <!-- <a href="addservice.html">Add Service</a> -->
                </div>

                <!-- inf-revenue -->

                <div class="container_manageroom container_infor_guests hidden inf-revenue">

                    <div class="ctn_home_ad">
                        <div class="home_ad_item home_ad_item1 center">

                            <div class="bxx">
                                <div class="box-text-ad">
                                    <div class="box-num-ad center">
                                        <p><i class="fa-solid fa-coins icon_ad_home"></i></p>
                                    </div>
                                    <p class="z-idx">revenue / <span> Today</span></p>
                                </div>
                                <div class="box-num-ad center">
                                    <p>
                                        <?php if ($rowretoday['revenuetoday'] == '') {
                                            $a = 0;
                                        } else {
                                            $a = '';
                                        }
                                        ?>

                                        <?= $rowretoday['revenuetoday'] . $a . '$' ?>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="home_ad_item home_ad_item2 center">
                            <div class="bxx">
                                <div class="box-text-ad">
                                    <div class="box-num-ad center">
                                        <p><i class="fa-solid fa-coins icon_ad_home"></i></p>
                                    </div>
                                    <p class="z-idx">revenue / <span> <?=$rowreyear['yearnum']?></span></p>
                                </div>
                                <div class="box-num-ad center">
                                    <p>

                                        <?php if ($rowreyear['revenueyear'] == '') {
                                            $b = 0;
                                        } else {
                                            $b = '';
                                        }
                                        ?>

                                        <?= $rowreyear['revenueyear'] . $b . '$' ?>




                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="home_ad_item home_ad_item3 center">
                            <div class="bxx">
                                <div class="box-text-ad">
                                    <div class="box-num-ad center">
                                        <p><i class="fa-solid fa-coins icon_ad_home"></i></p>
                                    </div>
                                    <p class="z-idx">revenue / <span> <?=$rowremonth['monthname']?> </span></p>
                                </div>
                                <div class="box-num-ad center">
                                    <p>
                                        <?php if ($rowremonth['revenuemonth'] == '') {
                                            $c = 0;
                                        } else {
                                            $c = '';
                                        }
                                        ?>

                                        <?= $rowremonth['revenuemonth'] . $c . '$' ?>




                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="home_ad_item home_ad_item4 center">
                            <div class="bxx">
                                <div class="box-text-ad">
                                    <div class="box-num-ad center">
                                        <p><i class="fa-solid fa-bell"></i></p>
                                    </div>
                                    <p class="z-idx">Number Of Orders / Today</p>
                                </div>
                                <div class="box-num-ad center">
                                    <p>
                                    <?php if ($rowordertoday['booknumtoday'] == '') {
                                            $d = 0;
                                        } else {
                                            $d = '';
                                        }
                                        ?>

                                        <?= $rowordertoday['booknumtoday'] . $d ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="home_ad_item home_ad_item5 center">
                            <div class="bxx">
                                <div class="box-text-ad">
                                    <div class="box-num-ad center">
                                        <p><i class="fa-solid fa-bell"></i></p>
                                    </div>
                                    <p class="z-idx">Number Of Orders / <span><?=$rowordermonth['monthname']?></span></p>
                                </div>
                                <div class="box-num-ad center">
                                    <p>
                                    <?php if ($rowordermonth['booknummonth'] == '') {
                                            $e = 0;
                                        } else {
                                            $e = '';
                                        }
                                        ?>

                                        <?= $rowordermonth['booknummonth'] . $e ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="home_ad_item home_ad_item6 center dont_hover">
                            <div class="bxx">
                                <div class="box-text-ad">
                                    <div class="box-num-ad center">
                                        <p><i class="fa-solid fa-bell"></i></p>
                                    </div>
                                    <p class="z-idx">Number Of Orders / <span><?=$roworderyear['yearnum']?></span></p>
                                </div>
                                <div class="box-num-ad center">
                                    <p>
                                    <?php if ($roworderyear['booknumyear'] == '') {
                                            $f = 0;
                                        } else {
                                            $f = '';
                                        }
                                        ?>

                                        <?= $roworderyear['booknumyear'] . $f ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <!--end inf-revenue -->



            </div>
            <!-- -->


        </div>
        <!-- end ctn right -->
    </div>

</body>