function logout(token) {
    $.post("/logout", { _token: token }, function () {
        window.location.href = "/";
    });
}

setTimeout(function () {
    $(".alert").slideUp();
}, 2000);

$(".alert").on("transitionend", function () {
    $(this).remove();
});

$(document).ready(function () {
    $(".content").fadeIn(500);
});
