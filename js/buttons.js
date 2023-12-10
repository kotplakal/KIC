// Табы
const tabsBtns = document.querySelectorAll(".tabs__nav button");
const tabsItems = document.querySelectorAll(".tabs__item");

//Ф-я скрывает табы и убирвает active у кнопок
function hideTabs() {
    tabsItems.forEach(item => item.classList.add("hide"));
    tabsBtns.forEach(item => item.classList.remove("active"));
}

//Ф-я показывает переданный номер таба и делает соответствующую ему кнопку активной
function showTab(index) {
    tabsItems[index].classList.remove("hide");
    tabsBtns[index].classList.add("active");
}

//Ф-я переключает табы за счёт получение слушания кликов и передачи индекса
tabsBtns.forEach((btn, index) => btn.addEventListener("click", () => {
    hideTabs();
    showTab(index);
}));