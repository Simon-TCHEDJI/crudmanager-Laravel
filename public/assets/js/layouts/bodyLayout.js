let BtnOpenMenu = document.getElementById("menuBtnOpen");
let BtnCloseMenu = document.getElementById("menuBtnClose");
let menu = document.querySelector(".menu");


BtnOpenMenu.addEventListener("click", (e) => {
    e.preventDefault();
    menu.classList.toggle("active");
    setTimeout(() => {
        BtnOpenMenu.classList.toggle("active");
        BtnCloseMenu.classList.toggle("active");
    }, 500);
});

BtnCloseMenu.addEventListener("click", (e) => {
    e.preventDefault();
    menu.classList.toggle("active");
    setTimeout(() => {
        BtnOpenMenu.classList.toggle("active");
        BtnCloseMenu.classList.toggle("active");
    }, 500);
});
