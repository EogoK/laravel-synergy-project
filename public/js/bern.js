
const img = document.querySelector("img");
const bern = document.querySelector("#bern");

bern.onmouseenter = function (event) {
    img.style.display = 'block';
}

bern.onmouseleave = function (event) {
    img.style.display= 'none';
}