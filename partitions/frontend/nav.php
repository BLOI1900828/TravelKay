 
 <link rel="stylesheet" href="public/frontend/css/nav.css">
 <!-- nav -->
 <div class="ctn_nav center">

<div class="ctn_content_nav">
    <div class="row_nav flex centerY m_b15">
        <div class="border_avt center boder50 bg_power">
            <i class="fa-solid fa-bolt col_white"></i>
        </div>
        <span class="text_B cap font_22"><?php echo $_SESSION['company'];?></span>
    </div>

   


    <div class="ctn_menu m_b15">
        <div class="row_menu">
            <p class="upper text_B col_999">Menu</p>
        </div>
        <div <?php if($_GET['controller'] === 'home'){echo "class='active_nav icon_menu center border_8'";}else{echo "class='icon_menu center border_8'";} ?>>
            <a  href="index.php?controller=home" class="wh_a_nav nav_hover"> <i class="fa-solid fa-border-all "></i>
                <span>Dashboard</span></a>
        </div>
        <div <?php if($_GET['controller'] === 'services'){echo "class='active_nav icon_menu center border_8'";}else{echo "class='icon_menu center border_8'";} ?>>
            <a href="index.php?controller=services" class="wh_a_nav nav_hover"><i class="fa-solid fa-bell"></i>
                <span>Service</span></a>

        </div>
        <div <?php if($_GET['controller'] === 'order'){echo "class='active_nav icon_menu center border_8'";}else{echo "class='icon_menu center border_8'";} ?>>
            <a href="index.php?controller=order" class="wh_a_nav nav_hover"><i class="fa-solid fa-image-portrait "></i>
                <span>The Orders</span></a>

        </div>
        <div <?php if($_GET['controller'] === 'revenue'){echo "class='active_nav icon_menu center border_8'";}else{echo "class='icon_menu center border_8'";} ?>>
            <a href="index.php?controller=revenue" class="wh_a_nav nav_hover"><i class="fa-solid fa-dollar-sign"></i>
                <span>Revenue</span></a>

        </div>

    </div>


    <div class="ctn_help m_b15">
        <div class="row_help">
            <p class="upper text_B col_999 ">Help</p>
        </div>
        <div class="icon_help center border_8">
            <a href="#" class="wh_a_nav nav_hover"><i class="fa-regular fa-circle-down "></i> <span>Internal
                    Pages</span></a>
        </div>
        <div class="icon_help center border_8">
            <a href="#" class="wh_a_nav nav_hover"><i class="fa-solid fa-file-invoice "></i>
                <span>Documentations</span></a>

        </div>
        <div class="icon_help center border_8">
            <a href="#" class="wh_a_nav nav_hover"><i class="fa-solid fa-gear "></i>
                <span>Settings</span></a>

        </div>


    </div>



    <div class="box_log_out center">
        <a href="#" class="wh_a_nav "><i class="fa-solid fa-power-off"></i> <span class="text_B">Log
                out</span></a>
    </div>
</div>

</div>
<!-- end nav -->