export default function addDiscussions() {
  const buttonAddTopic = document.querySelector(".button-add");

  function addTopicCard() {
    
  }

  function showDiscussions(e) {
    e.preventDefault();
    const showDiscussionsAdd = document.querySelector(".discussions-container-form");
    const closeDiscussionsAdd = document.querySelector(".discussions-container");

    showDiscussionsAdd.classList.add("active");
    closeDiscussionsAdd.classList.add("remove");

    const addTopic = document.querySelector('.icon-buttons-rigth');

    addTopic.addEventListener('click', addTopicCard)
  }

  buttonAddTopic.addEventListener("click", showDiscussions);
}
