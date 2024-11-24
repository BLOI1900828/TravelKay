// Check show password
const showPass = document.querySelector(".icon-child-input");
const checkType = document.getElementById("password");
showPass.onclick = function(){
    if(checkType.type == "password"){
        checkType.type = "text";
        showPass.classList.remove("fa-eye");
        showPass.classList.add("fa-eye-slash");
    }
    else{
        checkType.type = "password";
        showPass.classList.add("fa-eye");
        showPass.classList.remove("fa-eye-slash");
    }
}

// Check show password
const showPassC = document.querySelector(".c-pass");
const checkTypeC = document.getElementById("cpassword");
showPassC.onclick = function(){
    if(checkTypeC.type == "password"){
        checkTypeC.type = "text";
        showPassC.classList.remove("fa-eye");
        showPassC.classList.add("fa-eye-slash");
    }
    else{
        checkTypeC.type = "password";
        showPassC.classList.add("fa-eye");
        showPassC.classList.remove("fa-eye-slash");
    }
}


// Check value in form


const password = document.forms["account-form"]["password"];
const cpassword = document.forms["account-form"]["cpassword"];
const notify = document.querySelector(".notify");



const notifyLablePass = document.querySelector(".pass");
const notifyLableCP = document.querySelector(".cpass");



// new password
checkClassLablePassWO = notifyLableCP.classList.contains("notify");
cpassword.addEventListener("click", ()=>{
    if(checkClassLablePassWO == false){
        notifyLableCP.classList.remove("notify");
    }
})

checkClassPassWO = cpassword.classList.contains("wrong-input");
cpassword.addEventListener("click", ()=>{
    if(checkClassPassWO == false){
        cpassword.classList.remove("wrong-input");
        notify.innerHTML=" ";
    }
})


// -----------------------------------------------------------------------
var na=/^[a-zA-Z]+$/;
var us = /^[0-9a-zA-Z][a-zA-Z0-9]+$/;
var ph=/^[0-9]+$/;
var ma=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var pas = /^[0-9a-zA-Z][a-zA-Z0-9]+$/;


function validateForm(){
    


    // new password
    if (cpassword.value == null || cpassword.value == "") {
        notify.innerHTML="Please enter your password";
        cpassword.classList.add("wrong-input");
        return false;
    }
    else if (!pas.test(cpassword.value)){
        notify.innerHTML="Do not contain special characters or spaces";
        notifyLableCP.classList.add("notify");
        cpassword.classList.add("wrong-input");
        return false;
    }
    else if (cpassword.value.length < 8){
        notify.innerHTML="Password is at least 8 characters long.";
        cpassword.classList.add("wrong-input");
        notifyLableCP.classList.add("notify");
        return false;
    }

    
    
}
