(function () {

  const teamList = document.querySelectorAll('.team__item');
  console.log(teamList);

  teamList.forEach(function(item) {
    item.addEventListener("click", processHorizontalMenu);
  });

  function processHorizontalMenu(event) {
    // Перехватим элемент, на который нажали
    const curTeamItem = event.currentTarget;
    event.preventDefault();

    // Задаем активный элемент
    const isActiveItem = curTeamItem.classList.contains("team__item--active");
    console.log(isActiveItem);

    if(isActiveItem) {
      closePersonInfo(teamList);
    }   
    else {
      closePersonInfo(teamList);
      openPersonInfo(curTeamItem);
    }   
  };

  function closePersonInfo(teamList) {
    teamList.forEach(function(element){
        // Удаляем активный класс
        element.classList.remove("team__item--active");
        // Задаем стили
        // element.querySelector('.person__info').style.color = "#ffffff";
        element.querySelector('.person__descr').style.height = 0;
      })
    }

    function openPersonInfo(curTeamItem){
      const curItemContent = curTeamItem.querySelector('.person__descr');
      const textBlock = curItemContent.lastElementChild;
      const curTextHeight = textBlock.getBoundingClientRect().height;

      console.log(curTeamItem);
      console.log(curItemContent);
      console.log(curTextHeight);

      // Вешаем активный класс
      curTeamItem.classList.add("team__item--active");
      // Задаем стили
      curItemContent.style.height = `${2*curTextHeight}px`;
    }

})();