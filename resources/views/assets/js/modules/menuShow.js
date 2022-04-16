export default function showMenu() {
  const menu = document.querySelector(".side-menu-responsive .name-event");

  const showMenu = () => {
    menu.classList.toggle("active");
    const sideBar = document.querySelector(".side-bar-responsive");
    sideBar.classList.toggle("active");
  };
  menu.addEventListener("click", showMenu);
}
