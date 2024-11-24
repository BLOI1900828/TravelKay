const user = document.getElementById('profile');
const box_profile = document.getElementById('option');
const back = document.getElementById('back_home');
const modal = document.getElementById('md-prf');
const body_m = document.getElementById('body-main'); 
user.addEventListener('click', ()=>{
    if(box_profile.style.display === 'none'){
        box_profile.style.display = 'flex';
    }
    else{
        box_profile.style.display = 'none';
    }
    
    
})

const pro = document.getElementById('profiles');
const modal_pro = document.getElementById('md-prf');

pro.addEventListener('click', ()=>{
    modal_pro.classList.add('flexs');
    box_profile.style.display = 'none';
    body_m.classList.add('ovf-y');
})
back.addEventListener("click", () => {
    modal.classList.remove('flexs');
    body_m.classList.remove('ovf-y');
})

const c_language = document.getElementById("c-lg");
const language = document.getElementById("lg");
const back_op = document.querySelector(".back-op");

language.addEventListener("click", ()=>{
    box_profile.style.display = 'none';
    c_language.classList.add('flexs');
})

back_op.addEventListener("click", ()=>{
    box_profile.style.display = 'flex';
    c_language.classList.remove('flexs');
})