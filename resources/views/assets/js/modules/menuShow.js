export default function showMenu() {
  const menu = document.querySelector(".side-menu-xl .name-event");

  const showMenu = () => {
    menu.classList.toggle("active");
    const sideBar = document.querySelector(".side-bar-xl");
    sideBar.classList.toggle("active");
  };
  menu.addEventListener("click", showMenu);
}
