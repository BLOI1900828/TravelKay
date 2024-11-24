<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="public/frontend/css/header.css">
    <link rel="stylesheet" href="public/frontend/css/nav.css">
    <link rel="stylesheet" href="public/frontend/css/addservice.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Service</title>
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
                    <a href="index.php?controller=services&action=adddetail">Add Detail</a>


                    




                </div>
                <div class="add-room-sql">
                    <div class="er_gues_have_bill_in_date center">
                        <p></p>
                    </div>


                   
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-field">
                            <label>Service Code: </label>

                            <input class="nroomn" type="text" name="servicecode" value="">
                        </div>



                        <div class="form-field">
                            <label>Service Name: </label>

                            <input class="nroomn" type="text" name="servicename" value="">
                        </div>


                        <div class="form-field">
                            <label>Price: </label>

                            <input class="nroomn" type="text" name="price" value="">
                        </div>

                        <div class="form-field">
                            <label>Service Type: </label>

                            

                            <select name="servicetype" id="" class="nroomn">
                                <option value="tour">Tour</option>
                                <!-- <option value="foodanddrink">Food and drink</option> -->
                            </select>
                        </div>


                        <div class="form-field">
                            <label>Picture: </label>
                            <input type="file" name="picture" value="">
                        </div>
                        <div class="form-field">
                            <label>Location: </label>

                            <input class="nroomn" type="text" name="location" value="">
                            
                        </div>

                        <div class="form-field">
                            <label>Describe: </label>

                            <input class="nroomn" type="text" name="describe" value="">
                            
                        </div>

                        <div class="form-field">
                            <label>Quantity: </label>

                            <input class="nroomn" type="number" name="quantity" value="">
                            
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