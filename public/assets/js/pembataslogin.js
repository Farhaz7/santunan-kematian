document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector("form");

    
    form.addEventListener("submit", function (event) {
        var nikInput = document.querySelector('input[name="nik"]');
        var passwordInput = document.querySelector('input[name="password"]');

        if (nikInput.value.length !== 16) {
            alert("NIK harus terdiri dari 16 karakter.");
            event.preventDefault();
            return false;
        }

        if (passwordInput.value.length < 6) {
            alert("Password harus terdiri dari minimal 6 karakter.");
            event.preventDefault();
            return false;
        }

        return true;
    });
    
});
