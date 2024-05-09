function formSubmit(form) {
    $(form).validate({
        errorClass: "fas fa-info-circle small text-danger",
        rules: {
            name: {
                required: true,
                minlength: 10,
                maxlength: 100,
            },
            email: {
                required: true,
                email: true,
                maxlength: 100,
            },
            password: {
                required: true,
                passwordCheck: true,
            },
            password_confirmation: {
                required: true,
                equalTo: "#password",
            },
        },
    });

    if ($(form).valid()) {
        $(form).submit();
    }

    jQuery.validator.addMethod(
        "passwordCheck",
        function (value, element) {
            return (
                this.optional(element) ||
                /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).*$/.test(value)
            );
        },
        "A senha deve conter pelo menos um número, uma letra maiúscula, uma letra minúscula e um caractere especial."
    );
}
