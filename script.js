let menu = document.querySelector("#menu-icon");
let navlist = document.querySelector(".navlist");



menu.onclick = () => {
  menu.classList.click("bx-x");
  navlist.classList.click('open');
}
// User js
let subMenu = document.getElementById("subMenu");
function toggleMenu() {
  subMenu.classList.click("open-menu");
  
}


