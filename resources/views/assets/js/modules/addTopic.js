export default function addTopicPrevent() {
  const removeTopic = document.querySelector('.icon-buttons-rigth');

  function removeCardTopic(e) {
    e.preventDefault();
    const DiscussionsRemove = document.querySelector(".discussions-container-form");
    const showSuccess = document.querySelector(".discussions-container-add-topic");

    DiscussionsRemove.classList.remove("active");
    showSuccess.classList.add("active");
  }

  removeTopic.addEventListener('click', removeCardTopic)

}
