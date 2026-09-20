const projets_body = document.querySelector("section#projets_body");
const projetImgs = document.querySelectorAll("div.project_container img.projet");
let overlay;

let projShowEventListener = function (event) {
    let element = `<div class="overlay">
                                   <img src="${event.target.src}" alt="projet"/>
                               </div>`;
    projets_body.insertAdjacentHTML("beforeend", element);
    overlay = projets_body.lastElementChild;
    overlay.addEventListener("click", projHidEventListener);
    document.addEventListener("keydown", escapeEventListener);
}

let escapeEventListener = function(event) {
    if (event.key === "Escape") {
        overlay = document.querySelector("div.overlay");
        overlay.remove();
    }
}

let projHidEventListener = function (event) {
    if (event.target.localName !== "img") {
        event.currentTarget.remove();
    }
}

for (let img of projetImgs) {
    img.addEventListener("click", projShowEventListener);
}
