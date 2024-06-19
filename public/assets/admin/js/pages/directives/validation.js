$(document).ready(function () {
    $("#form-directive").validate({
        errorClass: "small text-danger",
        rules: {
            name: {
                required: true,
                minlength: 10,
                maxlength: 100,
            },
            description: {
                required: true,
                minlength: 10,
                maxlength: 50
            }
        },
    });
});
