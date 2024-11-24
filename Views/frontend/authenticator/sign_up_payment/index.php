<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/frontend/css/Step3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Payment</title>
</head>

<body>

    <div class="container_login">

        <div class="box_left  column">
            <div class="box_step center column">
                <div class="r1 uper row bottom ">
                    <p class="text_big text_white">Step by step</p> <span class="bottom">
                        <p class="text_small cap text_white"> please fill in your detail</p>
                    </span>
                </div>
                <div class="r2 center">
                    <div class="horizontal_bar centerY">

                        <div class="bar_color">

                        </div>

                        <div class="circle center circle1">
                            <p class="number_step">1</p>
                        </div>

                        <div class="circle center circle2">
                            <p class="number_step">2</p>
                        </div>
                        

                        <div class="circle center circle3">
                            <p class="number_step">3</p>
                        </div>

                    </div>
                </div>

                <div class="r3 row space_a">
                    <p class="uper text_step">account</p>
                    <p class="uper text_step">contact info</p>
                    <p class="uper text_step">payment</p>

                    <p class="uper text_step">complete</p>

                </div>

            </div>

            <form class="box_form" action="" method="post">
                <div class="header_form">
                    <p class="text_big cap">payment:</p>
                    <p class="cap">Fill in your account details</p>
                </div>
                <div class="lb ">
                    <p class="uper text_verry_small text_B">credit card no *</p>
                 <div class="box_cart row centerY">
                    <span class="icon_cart">
                        <i class="fa-brands fa-cc-visa"></i>
                        <i class="fa-brands fa-cc-paypal"></i>
                    </span>
                    <input class="inp_form credit_box" name="card" type="text" placeholder="**** **** **** ****">
                </div>   
                </div>
                <div class="lb">
                    <p class="uper text_verry_small text_B">security code *</p>
                    <input class="inp_form security_box" name="code" type="text" placeholder="**** **** **** ****">

                </div>
                <div class="lb">
                    <p class="uper text_verry_small text_B">card holder name *</p>
                    <input class="inp_form" type="text" name="card-name" placeholder="Card Holder Name">

                </div>
                <div class="lb">
                    <p class="uper text_verry_small text_B">expires date *</p>
                    <input class="inp_form uper opa" name="ex-date" type="date" >

                </div>
                

                <div class="lb space_b centerY w_90">

                    <a href="#" class="cap text_back text_B"><i class="fa-solid fa-arrow-left"></i> click to back</a>
                    <input class="btn_pro_next text_white" name="submit" type="submit" value=" PROCCED NEXT">

                </input>
                </div>
                

            </form>
        </div>
        <div class="box_right centerY">
            <div class="box_item_r">
                <item>
                    <p class="text_white uper text_B font_18">You're</p>
                </item>
                <item>
                    <p class="text_white text_big text_B">One step</p>  
                </item>
                <item>
                    <p class="text_white text_big text_B">away Form <span class="text_white text_nomal ">a</span></p> 
                </item>
                <item>
                    <p class="text_white text_big text_nomal">Better business</p>
                </item>
                <item>
                    <p class="text_white">Hilebrand typed out random sentences and counted</p>
                </item>
                <item>
                    <p class="text_white">every letter, number, punctuation, and space.</p>
                </item>

            </div>
        </div>
    </div>

</body>

</html>