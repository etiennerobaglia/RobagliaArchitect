document.addEventListener("DOMContentLoaded", function() {
    var hamMenu = document.querySelector(".header-hamburger");
    var header = document.querySelector(".header");
    
    hamMenu.addEventListener("click", hamClicked => {
      if (header.classList.contains("is-active")) {
        header.classList.remove("is-active")
      }
      else {
        header.classList.add("is-active")
      }
    })
})