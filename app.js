/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


// FAQ
const accordionBtns = document.querySelectorAll(".item-header");

accordionBtns.forEach((accordion) => {
    accordion.onclick = function() {
        this.classList.toggle("active");

        let content = this.nextElementSibling;
        console.log(content);

        if (content.style.maxHeight) {
            //this is if the accordion is open
            content.style.maxHeight = null;
        } else {
            //if the accordion is currently closed
            content.style.maxHeight = content.scrollHeight + "px";
            console.log(content.style.maxHeight);
        }
    };
});


// popup form
const toggleModel = () => {
    document.querySelector('.box-content')
        .classList.toggle('box-content--hidden')
};

document.querySelector('#show-modal').addEventListener("click", toggleModel);
document.querySelector('#button').addEventListener("submit", (event) => {
    event.preventDefault();
    toggleModel();
});
document.querySelector('.box-content--hidden span').addEventListener('click', toggleModel);