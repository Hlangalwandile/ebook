var menu_btn = document.querySelector("#menu-btn")
var sidebar = document.querySelector("#ebook-sidebar")
var module = document.querySelector(".module")

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

// Book image pop up
 var unit_image = document.querySelector(".unit-img-col");
 document.querySelectorAll(".unit-img-col").forEach(unit_image => unit_image.addEventListener("click",()=>{
    if(unit_image.classList.contains("img-pop")){
        unit_image.classList.remove("img-pop");
    } 
        else 
    {
        unit_image.classList.add("img-pop");
    }
}));
