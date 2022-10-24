var menu_btn = document.querySelector("#menu-btn")
var sidebar = document.querySelector("#ebook-sidebar")
var module = document.querySelector(".module")

menu_btn.addEventListener("click",()=>{
    sidebar.classList.toggle("active-nav")
    module.classList.toggle("active-cont")
    menu_btn.classList.toggle("active-flip")
})