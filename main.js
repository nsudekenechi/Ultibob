let nav = document.querySelector("header nav ");
window.onscroll = function(e){
 if(window.scrollY>0){
    nav.classList.add("sticky")
 }else{
    nav.classList.remove("sticky")
 }
 
}

