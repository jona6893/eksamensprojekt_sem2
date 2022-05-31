
/* Ændre baggrunds farve på header når er scrolles ned på siden. */

/* document.querySelector("body") window.addEventListener("scroll", () => {
    let yPosition = window.scrollTop;
    if (yPosition > 50) {
        console.log(">50")
        document.querySelector("header").style.backgroundColor = "#ffffff00";
    }
    else {
        document.querySelector("header").style.backgroundColor = "#ffffff00";
    }
})*/

document.addEventListener("DOMContentLoaded", () => {
    console.log("dom loaded")
    let myNav = document.querySelector("header");
    window.onscroll = function () {
      "use strict";
      if (
        document.body.scrollTop >= 280 ||
        document.documentElement.scrollTop >= 280
      ) {
        myNav.classList.add("scroll");
      } else {
        myNav.classList.remove("scroll");
      }
    };

});

