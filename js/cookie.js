document.addEventListener('DOMContentLoaded', function() {
    var cookieBanner = document.getElementById('cookie-banner');
    var acceptAllButton = document.getElementById('accept-all');
    var acceptNecessaryButton = document.getElementById('accept-necessary');

    // Función para establecer una cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Función para obtener una cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Verificar si la cookie de aceptación ya está establecida
    if (getCookie('cookiesAccepted') === 'true') {
        cookieBanner.style.display = 'none';
    } else {
        cookieBanner.style.display = 'block';
    }

    // Manejar la aceptación de todas las cookies
    acceptAllButton.addEventListener('click', function() {
        setCookie('cookiesAccepted', 'true', 365);
        cookieBanner.style.display = 'none';
    });

    // Manejar la aceptación de solo las cookies necesarias
    acceptNecessaryButton.addEventListener('click', function() {
        setCookie('cookiesAccepted', 'true', 365);
        cookieBanner.style.display = 'none';
    });
});



