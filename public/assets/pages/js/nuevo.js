'use strict';
window.addEventListener('load', function () {
    //obtner el formulario por su clase
    var forms = document.getElementsByClassName('needs-validation');
    // crear una funcion con callback que devuelve a clase was-validated si el input esta en falso

    var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
    
}, false);
