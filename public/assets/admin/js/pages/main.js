setTimeout(function () {
    $(".content-wrapper").fadeIn();
}, 500);

function logout(token) {
    $.post("/logout", { _token: token }, function () {
        window.location.href = "/";
    });
}

// Desaparecer após 3 segundos
setTimeout(function () {
    $(".alert").slideUp();
}, 2000);

// Remover elemento após a animação de desaparecimento
$(".alert").on("transitionend", function () {
    $(this).remove();
});
