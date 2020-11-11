function login() {
    const username = document.getElementById('username');
    const password = document.getElementById('password');

    const BaseUrl = "http://localhost:8000/";
    const url = BaseUrl + "login";
    $.ajax({
        headers:{},
        type:"POST",
        url:url,
        data:{
            username:$('#username').val(),
            password:$('#password').val(),
        }
    });
}
