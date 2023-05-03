let nav = document.querySelector("header nav ");
let menuIcon = document.querySelector("#menu-icon");
let menuCancel = document.querySelector("#cancelMenu");
let menus = document.querySelector("#menus");
window.onscroll = function (e) {
   if (window.scrollY > 0) {
      nav.classList.add("sticky")

   } else {
      nav.classList.remove("sticky")
   }

}

menuIcon.onclick = function () {
   menus.classList.replace("menusLeft", "menusRight")
}
menuCancel.onclick = function () {
   menus.classList.replace("menusRight", "menusLeft")
}