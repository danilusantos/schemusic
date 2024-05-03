function logout(token) {
    console.log(token);
    $.post('/logout', {_token: token }, function () {
        window.location.href = '/'
    })
}
