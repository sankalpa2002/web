// sticky nav-bar
window.addEventListener("scroll",()=>{
    let nav=document.querySelector("nav");
    nav.classList.toggle("sticky",window.scrollY > 0);
})

// login-toggle
let title=document.getElementById('title');
let nameField=document.getElementById('nameField')
let toggle=document.getElementById('toggle');
let loginTxt=document.getElementById('loginTxt')
toggle.onclick=function(){
    toggle.classList.add('active');
    title.innerHTML="Sign In";
    nameField.style.maxHeight='0';
    toggle.style.background='#fff';
    loginTxt.innerHTML="";
}