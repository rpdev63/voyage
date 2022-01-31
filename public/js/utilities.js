// Bloquer un bouton
function wait(element) {
    element.setAttribute("disabled", false);
    setTimeout(() => {
        element.removeAttribute("disabled");
    }, 1500);
}