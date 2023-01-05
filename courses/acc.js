// popup form
const toggleModel = () => {
    document.querySelector('.box-content')
        .classList.toggle('box-content--hidden')
};

document.querySelector('#show-model').addEventListener("click", toggleModel);
document.querySelector('#button').addEventListener("submit", (event) => {
    event.preventDefault();
    toggleModel();
});
document.querySelector('.box-content--hidden span').addEventListener('click', toggleModel);