const yaButton = document.getElementById("yaButton");
const cairButton = document.getElementById("cairButton");
const tidakButton = document.getElementById("tidakButton");
const OkButton = document.getElementById("OkButton");
const NoButton = document.getElementById("NoButton");
const buttonContainer = document.querySelector(".button-container");


yaButton.addEventListener("click", function() {
    buttonContainer.removeChild(yaButton);
    buttonContainer.removeChild(tidakButton);
    const combinedButton = document.createElement("button");
    combinedButton.textContent = "Berkas Diterima";
    combinedButton.classList.add("btn", "btn-success");
    buttonContainer.appendChild(combinedButton);
});

tidakButton.addEventListener("click", function() {
    buttonContainer.removeChild(yaButton);
    buttonContainer.removeChild(tidakButton);
    const combinedButton = document.createElement("button");
    combinedButton.textContent = "Berkas Diperbaiki";
    combinedButton.classList.add("btn", "btn-danger");
    buttonContainer.appendChild(combinedButton);
});

