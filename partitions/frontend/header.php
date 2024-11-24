<div class="ctn_header_part flex">
    <div class="box_head_content centerX column">
        <p class="cap text_B font_26">Welcome Back, Sakura</p>
        <p class="col_999">Manage your marketing's perfomance with our optimization solutions,</p>
    </div>

    <div class="box_head_right flex">

        <!-- search -->
        <form class="header-search" method="post" action="../page_guest/seach_home.php">
            <input type="text" class="header-input-search" placeholder="Search here" name="search_ne" id="">
            <input class="sub_none" type="submit" name="search_here">
            <i class="fa-solid fa-magnifying-glass"></i>
        </form>
        <!--end  search -->

        <div class="box_bell center">
            <div class="box_cover center">
                <i class="fa-solid fa-bell"></i>
            </div>

        </div>
        <div class="box_mail center">
            <div class="box_cover center">

                <i class="fa-regular fa-envelope"></i>
            </div>
        </div>

        <?php if (isset($_SESSION['username'])) {
        ?>
            
            <div class=" row  box_mail center">
                <div class=" border_avt center border_12 bg_999">
                    <i class="fa-solid fa-user-astronaut"></i>
                </div>
                <span class="text_B cap font_18"><?php echo $_SESSION['username']; ?></span>
            </div>


        <?php } else { ?>
            <div class="box_mail center">
                <a class="btn_login center" href="index.php?controller=authenticator&&action=sign_in_account">
                    <span>Login</span>
                </a>
            </div>
        <?php } ?>


    </div>

</div>