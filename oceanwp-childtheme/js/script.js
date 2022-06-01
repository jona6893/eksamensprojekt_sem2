
/* Ændre baggrunds farve på header når er scrolles ned på siden. */

/* venter til at dom'en(hjemmesiden/html&css) er loaded. */
document.addEventListener("DOMContentLoaded", () => {

    console.log("dom loaded")
    /* vi tager fat i vores header og laver en variable der hedder "myNav". */
    let myNav = document.querySelector("header");
    /* "window.onscroll" tjekker når i scroller på siden og start en funktion. */
    window.onscroll = function () {
      "use strict";
      /* en if/else statement der tjekker langt ned man har scrolled . */
      if (
        /* hvis den er scrolled mere ind 280px sætter den klassen "scroll" på vores header. */
        document.body.scrollTop >= 80 ||
        document.documentElement.scrollTop >= 80
      ) {
        myNav.classList.add("scroll");
      } else {
          /* hvis det første if/else statement ikke er sandt, fjerner den klassen "scroll" fra vores header. */
        myNav.classList.remove("scroll");
      }
    };

});

