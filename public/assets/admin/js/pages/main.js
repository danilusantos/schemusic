function logout(token) {
    $.post('/logout', {_token: token }, function () {
        window.location.href = '/'
    })
}
