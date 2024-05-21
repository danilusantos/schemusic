$(document).ready(function () {
    $("#form-group").validate({
        errorClass: "small text-danger",
        rules: {
            name: {
                required: true,
                maxlength: 100,
            },
            description: {
                required: true,
                maxlength: 100,
            },
            key: {
                required: true,
                maxlength: 50,
            },
        },
    });
});
