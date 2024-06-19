$(document).ready(function () {
    $("#form-plan").validate({
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
                maxlength: 200
            },
            value: {
                required: true,
                maxlength: 10,
                max: 99999999.99
            },
            period_month: {
                required: true,
                max: 24,
                maxlength: 2
            },
            status: {
                required: true
            }
        },
    });
});
