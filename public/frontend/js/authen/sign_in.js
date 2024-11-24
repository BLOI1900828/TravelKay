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


// Check value in form

const username = document.forms["account-form"]["username"];
const email = document.forms["account-form"]["email"];
const password = document.forms["account-form"]["password"];

const notify = document.querySelector(".notify");


const notifyLableU = document.querySelector(".Uname");
const notifyLableE = document.querySelector(".E-mail");
const notifyLablePass = document.querySelector(".pass");



// username
checkClassLableU = notifyLableU.classList.contains("notify");
username.addEventListener("click", ()=>{
    if(checkClassLableU == false){
        notifyLableU.classList.remove("notify");
    }
})

checkClassUsername = username.classList.contains("wrong-input");
username.addEventListener("click", ()=>{
    if(checkClassUsername == false){
        username.classList.remove("wrong-input");
        notify.innerHTML=" ";
    }
})

// email
checkClassLableE = notifyLableE.classList.contains("notify");
email.addEventListener("click", ()=>{
    if(checkClassLableE == false){
        notifyLableE.classList.remove("notify");
    }
})

checkClassEmail = email.classList.contains("wrong-input");
email.addEventListener("click", ()=>{
    if(checkClassEmail == false){
        email.classList.remove("wrong-input");
        notify.innerHTML=" ";
    }
})

// password
checkClassLablePassW = notifyLablePass.classList.contains("notify");
password.addEventListener("click", ()=>{
    if(checkClassLablePassW == false){
        notifyLablePass.classList.remove("notify");
    }
})

checkClassPassW = password.classList.contains("wrong-input");
password.addEventListener("click", ()=>{
    if(checkClassPassW == false){
        password.classList.remove("wrong-input");
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
    
    // username
    if (username.value == null || username.value == "") {
        notify.innerHTML="Please enter your username";
        username.classList.add("wrong-input");
      
        return false;
    }else if (!us.test(username.value)){
        notify.innerHTML="Do not contain special characters or spaces";
        notifyLableU.classList.add("notify");
        username.classList.add("wrong-input");
        return false;
    }
    else if (username.value.length > 11){
        notify.innerHTML="Username is less than 11 characters";
        username.classList.add("wrong-input");
        notifyLableU.classList.add("notify");
        return false;
    }

    // email
    else if (email.value == null || email.value == "") {
        notify.innerHTML="Please enter your email";
        email.classList.add("wrong-input");
        return false;
    }
    else if (!ma.test(email.value)){
        notify.innerHTML="Do not contain special characters or spaces";
        notifyLableE.classList.add("notify");
        email.classList.add("wrong-input");
        return false;
    }

    // password
    else if (password.value == null || password.value == "") {
        notify.innerHTML="Please enter your password";
        password.classList.add("wrong-input");
        return false;
    }
    else if (!pas.test(password.value)){
        notify.innerHTML="Do not contain special characters or spaces";
        notifyLablePass.classList.add("notify");
        password.classList.add("wrong-input");
        return false;
    }
    else if (password.value.length < 8){
        notify.innerHTML="Password is at least 8 characters long.";
        password.classList.add("wrong-input");
        notifyLablePass.classList.add("notify");
        return false;
    }

    
    
}
