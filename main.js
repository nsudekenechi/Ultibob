let nav = document.querySelector("header nav ");
window.onscroll = function(e){
 if(window.scrollY>0){
    nav.classList.add("sticky")
 }else{
    nav.classList.remove("sticky")
 }
 
}
const loader = document.querySelector("#loader ");
let text = "Ultibob.".split("");
window.onload = function(){
   
   setInterval(()=>{
   
      if(text.length>0){
          loader.querySelector("h1").innerHTML+=text.shift();
         
      }else{
       loader.style.display="none"
       document.body.classList.remove("hideScroll")
      }
    },500)
}