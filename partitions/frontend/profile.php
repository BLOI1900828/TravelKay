<?php
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
}

?>


<?php if(!empty($inf)){
foreach ($inf as $infOne): 
$_SESSION['tenkh'] = $infOne['tenkh'];
$_SESSION['hokh'] = $infOne['hokh'];
$_SESSION['thanhpho'] = $infOne['thanhpho'];
$_SESSION['quan'] = $infOne['quan'];
$_SESSION['duong'] = $infOne['duong'];
$_SESSION['sonha'] = $infOne['sonha'];
$_SESSION['cccd'] = $infOne['cccd'];
$_SESSION['sdt'] = $infOne['sdt'];
?>
<div id="md-prf" class="modal_profile">
    <form class="ctn_profile" id="form-prf">
        <div class="label_pro">
            <p class="text_B cap text_big">profile</p>
        </div>
        <div class="label_pro">
            <p class="t-text">update your profile information</p>
        </div>

        <div class="label_pro">
            <p class="text_B cap ">personal information</p>
        </div>

        <div class="label_pro row space_b">
            <div class="label_pro">
                <p class=" cap ">username:</p>
                <input type="hidden" name="username" placeholder="Username" value="<?php if (isset($_SESSION['username'])) {
                                                                                        echo $username;
                                                                                    } ?>">
                <p class="no-action"><?php if (isset($_SESSION['username'])) {
                                            echo $username;
                                        } ?></p>
            </div>

            <div class="label_pro">
                <p class=" cap ">Email:</p>
                <input type="hidden" name="email" placeholder="Email" value="<?php if (isset($_SESSION['email'])) {
                                                                                    echo $email;
                                                                                } ?>">
                <p class="no-action"><?php if (isset($_SESSION['email'])) {
                                            echo $email;
                                        } ?></p>
            </div>

        </div>

        <div class="label_pro row space_b">
            <div class="label_pro">
                <p class="cap ">first name:</p>

                <p class='no-action'><?php echo $infOne['tenkh']?></p>



            </div>

            <div class="label_pro">
                <p class=" cap ">last name:</p>
                <p class='no-action'><?php echo $infOne['hokh']?></p>
            </div>

        </div>

        <div class="label_pro row space_b">
            <div class="label_pro">
                <p class=" cap ">city:</p>
                <!-- <input type="text" name="city" placeholder="City"> -->

                <p class='no-action'><?php echo $infOne['thanhpho']?></p>
            </div>

            <div class="label_pro">
                <p class=" cap ">state:</p>
                <!-- <input type="text" name="state" placeholder="State"> -->

                <p class='no-action'><?php echo $infOne['quan']?></p>
            </div>

        </div>

        <div class="label_pro row space_b">
            <div class="item_pro">
                <p class=" cap ">Street:</p>
                <!-- <input type="text" name="street" placeholder="Street"> -->
                <p class='no-action'><?php echo $infOne['duong']?></p>
            </div>

            <div class="item_pro">
                <p class=" cap ">Number:</p>
                <!-- <input type="text" name="number" placeholder="Number"> -->

                <p class='no-action'><?php echo $infOne['sonha']?></p>
            </div>

        </div>
        <div class="label_pro row space_b">
            <div class="item_pro">
                <p class=" cap ">Identity:</p>
                <!-- <input type="text" name="iden" placeholder="Identity"> -->
                <p class='no-action'><?php echo $infOne['cccd']?></p>
            </div>
            <div class="label_pro">
                <p class=" cap">Phone:</p>
                <!-- <input type="text" name="phone" placeholder="Phone"> -->
                <p class='no-action'><?php echo $infOne['sdt']?></p>
            </div>

        </div>

        <div class="box_btn scp">
            <p id="back_home" class="btn_profile w190 center br-5 secon-color" type="submit" name="submit">Back Home</p>
            <a class='l_edit_prf w190' href='index.php?controller=authenticator&action=change_inf'>Edit</a>


        </div>

    </form>
    <div id="msg_stt" class='toast-item success'></div>
</div>
<?php 
endforeach; 
}
else{

?>

<div id="md-prf" class="modal_profile">
    <form class="ctn_profile" id="form-prf">
        <div class="label_pro">
            <p class="text_B cap text_big">profile</p>
        </div>
        <div class="label_pro">
            <p class="t-text">update your profile information</p>
        </div>

        <div class="label_pro">
            <p class="text_B cap ">personal information</p>
        </div>

        <div class="label_pro row space_b">
            <div class="label_pro">
                <p class=" cap ">username:</p>
                
                <p class="no-action"><?php if (isset($_SESSION['username'])) {
                                            echo $username;
                                        } ?></p>
            </div>

            <div class="label_pro">
                <p class=" cap ">Email:</p>
                
                <p class="no-action"><?php if (isset($_SESSION['email'])) {
                                            echo $email;
                                        } ?></p>
            </div>

        </div>

        <div class="label_pro row space_b">
            <div class="label_pro">
                <p class="cap ">first name:</p>

                <p class='no-action'>First Name</p>



            </div>

            <div class="label_pro">
                <p class=" cap ">last name:</p>
                <p class='no-action'>Last Name</p>
            </div>

        </div>

        <div class="label_pro row space_b">
            <div class="label_pro">
                <p class=" cap ">city:</p>
                <!-- <input type="text" name="city" placeholder="City"> -->

                <p class='no-action'>City</p>
            </div>

            <div class="label_pro">
                <p class=" cap ">state:</p>
                <!-- <input type="text" name="state" placeholder="State"> -->

                <p class='no-action'>State</p>
            </div>

        </div>

        <div class="label_pro row space_b">
            <div class="item_pro">
                <p class=" cap ">Street:</p>
                <!-- <input type="text" name="street" placeholder="Street"> -->
                <p class='no-action'>Street</p>
            </div>

            <div class="item_pro">
                <p class=" cap ">Number:</p>
                <!-- <input type="text" name="number" placeholder="Number"> -->

                <p class='no-action'>Number</p>
            </div>

        </div>
        <div class="label_pro row space_b">
            <div class="item_pro">
                <p class=" cap ">Identity:</p>
                <!-- <input type="text" name="iden" placeholder="Identity"> -->
                <p class='no-action'>Indentity</p>
            </div>
            <div class="label_pro">
                <p class=" cap">Phone:</p>
                <!-- <input type="text" name="phone" placeholder="Phone"> -->
                <p class='no-action'>Phone</p>
            </div>

        </div>

        <div class="box_btn scp">
            <p id="back_home" class="sc btn_profile w190 center br-5 secon-color">Back Home</p>
            <a class='sc l_edit_prf w190' href='index.php?controller=authenticator&action=update_inf'>Edit</a>


        </div>

    </form>
    <div id="msg_stt" class='toast-item success'></div>
</div>

<?php
}
?>

<!-- <script>
    // document.getElementById("form-prf").addEventListener("submit", (e) => {
    //     e.preventDefault();
    // })

    // document.getElementById("submit").addEventListener("click", () => {
    //     const xhr = new XMLHttpRequest();
    //     xhr.onload = processJsonDataFunc();


    //     xhr.open("POST", "index.php?controller=authenticator&action=update_inf", true);


    //     // xhr.onreadystatechange =function(){
    //     //     if(this.readyState == 4 && this.status == 200){
    //     //         console.log('READYSTAGE: ', xhr.readyState);
    //     //         document.getElementById('msg_stt').innerHTML="<div class='toast success'><label class='close'></label><h3 id='scss'>Success!</h3><p class='noti-success'>You have successfully registered an account.</p></div>"
    //     //     }
    //     // }

    //     const formData = new FormData(document.getElementById("form-prf"));
    //     xhr.send(formData);
    // });

    // function processJsonDataFunc() {
    //     document.getElementById('msg_stt').innerHTML = "<div class='toast success'><label id='close' class='close'></label><h3 id='scss'>Success!</h3><p class='noti-success'>You have successfully updated an account.</p></div>"
    //     // setTimeout(newPage, 3000);

    // }

    // function newPage() {
    //     document.location = 'index.php?controller=authenticator&action=sign_in';
    // }

    // //  document.getElementById("close").addEventListener("click",()=>{
    // //     document.getElementById("msg_stt").style.display('none');
    // //  })
</script> -->