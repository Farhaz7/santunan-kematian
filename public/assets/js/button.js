document.addEventListener("DOMContentLoaded", function() {
    const okButton = document.getElementById("okButton");
    const noButton = document.getElementById("noButton");
    const buttonContainer = document.querySelector(".button-container");

    okButton.addEventListener("click", function() {
        buttonContainer.removeChild(okButton);
        buttonContainer.removeChild(noButton);
        const combinedButton = document.createElement("button");
        combinedButton.textContent = "Dicairkan";
        combinedButton.classList.add("btn", "btn-success");
        buttonContainer.appendChild(combinedButton);
    });

    noButton.addEventListener("click", function() {
        buttonContainer.removeChild(okButton);
        buttonContainer.removeChild(noButton);
        const combinedButton = document.createElement("button");
        combinedButton.textContent = "Ada Perbaikan";
        combinedButton.classList.add("btn", "btn-danger");
        buttonContainer.appendChild(combinedButton);
    });
});
