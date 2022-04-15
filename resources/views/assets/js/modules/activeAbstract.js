export default function showTextAbstract() {
  const activeText = document.querySelector(".show-abstract-text");

  function showText() {
    activeText.remove();
    const showTextAbstract = document.querySelector(
      ".abstract-text .show-text"
    );

    showTextAbstract.classList.add("active");
  }

  activeText.addEventListener("click", showText);
}
