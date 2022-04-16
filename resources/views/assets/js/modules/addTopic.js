export default function addTopicPrevent() {
  const removeTopic = document.querySelector(".icon-buttons-rigth");

  function removeCardTopic(e) {
    e.preventDefault();
    const discussionsRemove = document.querySelector(
      ".discussions-container-form"
    );
    const showSuccess = document.querySelector(
      ".discussions-container-add-topic"
    );
    const cardAddSucess = document.querySelector(
      ".discussions-cards-container .card-sucess"
    );

    discussionsRemove.classList.remove("active");
    showSuccess.classList.add("active");
    cardAddSucess.classList.add("active");
  }

  removeTopic.addEventListener("click", removeCardTopic);
}
