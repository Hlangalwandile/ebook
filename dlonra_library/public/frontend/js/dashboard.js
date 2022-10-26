var menu_btn = document.querySelector("#menu-btn-dash")
var sidebar = document.querySelector("#admin-sidebar")
var module = document.querySelector(".content")

menu_btn.addEventListener("click",()=>{
    sidebar.classList.toggle("active-nav")
    module.classList.toggle("active-cont")
    menu_btn.classList.toggle("active-flip")
})

window.addEventListener("resize",()=>{
        var w = document.documentElement.clientWidth;
        if(w < 790){
            sidebar.classList.add("active-nav")
            module.classList.add("active-cont")
            menu_btn.classList.add("active-flip")
        } 
        if(w > 789){
            sidebar.classList.remove("active-nav")
            module.classList.remove("active-cont")
            menu_btn.classList.remove("active-flip")
        }
});