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

// // first name
// checkClassLableF = notifyLableF.classList.contains("notify");
// first_name.addEventListener("click", ()=>{
//     if(checkClassLableF == false){
//         notifyLableF.classList.remove("notify");
//     }
// })

// checkClassFname = first_name.classList.contains("wrong-input");
// first_name.addEventListener("click", ()=>{
//     if(checkClassFname == false){
//         first_name.classList.remove("wrong-input");
//         notify.innerHTML=" ";
//     }
// })

// // last name
// checkClassLableL = notifyLableL.classList.contains("notify");
// last_name.addEventListener("click", ()=>{
//     if(checkClassLableL == false){
//         notifyLableL.classList.remove("notify");
//     }
// })

// checkClassLname = last_name.classList.contains("wrong-input");
// last_name.addEventListener("click", ()=>{
//     if(checkClassLname == false){
//         last_name.classList.remove("wrong-input");
//         notify.innerHTML=" ";
//     }
// })

// // phone
// checkClassLableP = notifyLableP.classList.contains("notify");
// phone.addEventListener("click", ()=>{
//     if(checkClassLableP == false){
//         notifyLableP.classList.remove("notify");
//     }
// })

// checkClassPhone = phone.classList.contains("wrong-input");
// phone.addEventListener("click", ()=>{
//     if(checkClassPhone == false){
//         phone.classList.remove("wrong-input");
//         notify.innerHTML=" ";
//     }
// })

// // indentity
// checkClassLableI = notifyLableI.classList.contains("notify");
// identity.addEventListener("click", ()=>{
//     if(checkClassLableI == false){
//         notifyLableI.classList.remove("notify");
//     }
// })

// checkClassIdentity = identity.classList.contains("wrong-input");
// identity.addEventListener("click", ()=>{
//     if(checkClassIdentity == false){
//         identity.classList.remove("wrong-input");
//         notify.innerHTML=" ";
//     }
// })

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
    // // first_name
    // if (first_name.value == null || first_name.value == "") {
    //     notify.innerHTML="Please enter your first name";
    //     first_name.classList.add("wrong-input");
    //     return false;
    // } else if (!na.test(first_name.value)){
    //     notify.innerHTML="Do not contain special characters or spaces or number";
    //     notifyLableF.classList.add("notify");
    //     first_name.classList.add("wrong-input");
    //     return false;
    // }
    // else if (first_name.value.length > 12){
    //     notify.innerHTML="First name is less than 12 characters";
    //     first_name.classList.add("wrong-input");
    //     notifyLableF.classList.add("notify");
    //     return false;
    // }
    
    

    

    // // last_name
    // else if (last_name.value == null || last_name.value == "") {
    //     notify.innerHTML="Please enter your last name";
    //     last_name.classList.add("wrong-input");
    //     return false;
    // } else if (!na.test(last_name.value)){
    //     notify.innerHTML="Do not contain special characters or spaces or number";
    //     notifyLableL.classList.add("notify");
    //     last_name.classList.add("wrong-input");
    //     return false;
    // }
    // else if (last_name.value.length > 30){
    //     notify.innerHTML="Last name is less than 30 characters";
    //     last_name.classList.add("wrong-input");
    //     notifyLableL.classList.add("notify");
    //     return false;
    // }
    
    
    
    
    // // phone
    // else if (phone.value == null || phone.value == "") {
    //     notify.innerHTML="Please enter your phone";
    //     phone.classList.add("wrong-input");
    //     return false;
    // }
    // else if (!ph.test(phone.value)){
    //     notify.innerHTML="Please enter the number";
    //     phone.classList.add("wrong-input");
    //     notifyLableP.classList.add("notify");
    //     return false;
    // }
    

    // else if (phone.value.length > 10 || phone.value.length < 10){
    //     notify.innerHTML="Phone is equals 10 characters";
    //     phone.classList.add("wrong-input");
    //     notifyLableP.classList.add("notify");
    //     return false;
    // }
    
    
    
    // // identity
    // else if (identity.value == null || identity.value == "") {
    //     notify.innerHTML="Please enter your identity";
    //     identity.classList.add("wrong-input");
    //     return false;
    // }
    // else if (!ph.test(identity.value)){
    //     notify.innerHTML="Please enter the number";
    //     identity.classList.add("wrong-input");
    //     notifyLableI.classList.add("notify");
    //     return false;
    // }
    // else if (identity.value.length > 12 || identity.value.length < 12){
    //     notify.innerHTML="Identity is equals 12 characters";
    //     identity.classList.add("wrong-input");
    //     notifyLableI.classList.add("notify");
    //     return false;
    // }

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
        notify.innerHTML="Invalid email";
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


