export default function responsiveXl() {
  const menuList = document.querySelectorAll("#menu-list-xl .link-menu");
  menuList[0].classList.add("active");

  function removeLink(e) {
    e.preventDefault()
    menuList.forEach((item) => {
      item.classList.remove("active");
    });

    e.currentTarget.classList.add("active");
  }

  menuList.forEach((item) => {
    item.addEventListener("click", removeLink);
  });

}
