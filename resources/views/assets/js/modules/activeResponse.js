export default function responseCard() {
  const response = document.querySelectorAll(".active-reponse");

  function activeResponse(e) {
    e.preventDefault()
    const responseAutors = document.querySelectorAll(".card-reponse-autor");
    responseAutors.forEach((item) => {
      item.classList.toggle("active");
    })
  }

  response.forEach((item) => {
    item.addEventListener("click", activeResponse);
  });

}
