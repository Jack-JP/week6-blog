"use strict";

function updateShownCategory(p_categoryID){
    var elements = document.getElementsByClassName("article");

    for (var i = 0; i < elements.length; i++){

        if (elements[i].classList.contains("category_" + p_categoryID)) {
            elements[i].removeAttribute("style");
        }
        else {
            elements[i].style.display = "none";
        }
    }
}
