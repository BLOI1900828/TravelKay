<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/frontend/css/signin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sign in</title>
</head>

<body>

    <div class="container_login">

    
  
        <div class="box_left  column">
            <div class="box_step center column">
                <p class="text_big uper text_white content_login">Login</p>
            </div>

            <form class="box_form" action="" method="post">
                <div class="header_form">
                    <p class="text_big ">Account:</p>
                    <p class="cap">Fill in your account details</p>
                </div>
                <div class="lb">
                    <p class="uper text_verry_small text_B">username *</p>
                    <input class="inp_form" name="username" type="text" placeholder="Username">

                </div>

                <div class="lb">
                    <p class="uper text_verry_small text_B">Email *</p>
                    <input class="inp_form" name="email" type="text" placeholder="Email">
                </div>
                
                <div class="lb">
                    <p class="uper text_verry_small text_B">password *</p>
                    <input class="inp_form" name="password" type="password" placeholder="Password">

                </div>
                <!-- <div class="lb">
                    <p class="uper text_verry_small text_B">conform password *</p>
                    <input class="inp_form" type="password" placeholder="Conform Password">

                </div> -->
                <div class="lb">
                    <!-- <p class="uper text_verry_small text_B">Select serviec type</p> -->

                    <!-- <select class="select_type" name="choice">

                        <option value="Restaurant">Restaurant</option>
                        <option value="Tour">Tour</option>

                    </select> -->
                </div>
                <input class="btn_pro_next text_white" name="submit" type="submit" value="PROCCED NEXT">


            </form>
        </div>
        <div class="box_right centerY">
            <div class="box_item_r">
                <item>
                    <p class="text_white  text_B font_18">Hi bro</p>
                </item>
                <item>
                    <p class="text_white text_big text_B">You are an important </p>  
                </item>
                <item>
                    <p class="text_white text_big text_B">strategic partner <span class="text_white text_nomal "></span></p> 
                </item>
                <item>
                    <p class="text_white text_big text_nomal">We will grow together </p>
                </item>
                <item>
                    <p class="text_white text_big text_nomal">and prosper together</p>
                </item>

                <item>
                    <p class="text_white">Wish you a good working day</p>
                </item>
          
                <a class="btn_login center " href="index.php?controller=home"> 
                       <span> <i class="fa-solid fa-arrow-left"></i> Back</span> 
                </a>
            </div>
        </div>
    </div>

</body>


</html>