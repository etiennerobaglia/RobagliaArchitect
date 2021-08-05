document.addEventListener("DOMContentLoaded", function() {
    
    // ACTIVATE FUNCTION
    function activate(elementToActivate) {
      console.log(elementToActivate)
      console.log("ACTIVED")
      if (elementToActivate.classList.contains("is-active")) {
        elementToActivate.classList.remove("is-active")
      }
      else {
        elementToActivate.classList.add("is-active")
      }
    }

    // HAMBURGER TRIGGER
    var hamMenu = document.querySelector(".header-hamburger");
    var header = document.querySelector(".header");
    
    hamMenu.addEventListener("click", hamClicked => {activate(header)})
    
    // SINGLE DROPDOWN TRIGGER
    var dropdownButton = document.querySelector(".projet-text .projet-titre-container");
    var dropdownContent = document.querySelector(".projet-text");

    dropdownButton.addEventListener("click", dropdownClicked => {activate(dropdownContent)});
})