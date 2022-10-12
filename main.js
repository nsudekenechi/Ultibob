let nav = document.querySelector("header nav ");
window.onscroll = function(e){
 if(window.scrollY>0){
    nav.classList.add("sticky")
 }else{
    nav.classList.remove("sticky")
 }
 
}
const boxes = document.querySelector("#boxes");
const testimonialName = document.querySelector("#boxes .name");
const testimonialOccupation = document.querySelector("#boxes .occupation");
const testimonialContent = document.querySelector("#boxes #comment");

const testimonalContents = {
   name:["Maikudi Shoaga","Okezie Franklin", "Udeobi Jane","Ebere Nsude"],
   occupation:["MD | C.E.O - Peoples Day Services","MD | C.E.O - Ultibob","MD | C.E.O - Norbeth Hotels","MD | C.E.O - Frantine"],
   comments:[
      `Ultiblob transformed the way our employees work today. They have been our trusted advisors torecommend and purchase all of ourhardware and software, manage all of our infrastructure and till date there has been no need for an internal IT staff`,

   `Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis maxime iure animi aliquam accusamus dicta minima nisi libero eligendi, nihil similique unde nemo hic, incidunt rerum? Blanditiis beatae repudiandae maxime.`,

   `Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis maxime iure animi aliquam accusamus dicta minima nisi libero eligendi, nihil similique unde nemo hic, incidunt rerum? Blanditiis beatae repudiandae maxime.`,

   `Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis maxime iure animi aliquam accusamus dicta minima nisi libero eligendi, nihil similique unde nemo hic, incidunt rerum? Blanditiis beatae repudiandae maxime.`
]
}
let id = 0;
let testimonialCon = document.querySelector("#testimonialCon");
setInterval(()=>{
   id++;
   if(id >= testimonalContents.comments.length){
      id = 0;
   }
   testimonialCon.classList.add("slidetext");
   testimonialName.innerHTML=testimonalContents.name[id];
   testimonialOccupation.innerHTML=testimonalContents.occupation[id];
   testimonialContent.innerHTML=testimonalContents.comments[id];
   
   
},5000)

setInterval(()=>{
   testimonialCon.classList.remove("slidetext");
   

},6000)
