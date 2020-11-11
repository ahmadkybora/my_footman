const register = () => {
    // const c = document.cookie = "key1 = value1;key2 = value2;expires = date";
    // alert(c);
    // require('./main/default.js');
    // const register = new Register(
    //     {
    //     first_name: document.getElementById('first-name'),
    //     last_name: document.getElementById('last-name'),
    //     username: document.getElementById('username'),
    //     email: document.getElementById('email'),
    //     mobile: document.getElementById('mobile'),
    //     zip_code: document.getElementById('zip-code'),
    //     sex: document.getElementById('sex'),
    //     birth: document.getElementById('birth'),
    //     about_me: document.getElementById('about-me'),
    //     address_home: document.getElementById('address-home'),
    //     file: document.getElementById('file'),
    //     password: document.getElementById('password'),
    //     password_confirmation: document.getElementById('password-confirmation'),
    // });

    const first_name = document.getElementById('first-name');
    const last_name = document.getElementById('last-name');
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const mobile = document.getElementById('mobile');
    const zip_code = document.getElementById('zip-code');
    const sex = document.getElementById('sex');
    const birth = document.getElementById('birth');
    const about_me = document.getElementById('about-me');
    const address_home = document.getElementById('address-home');
    const file = document.getElementById('file');
    const password = document.getElementById('password');
    const password_confirmation = document.getElementById('password-confirmation');

    // const url = document.getElementById('formData').attr('action');
    // const url = $('form[name="formData"]').attr('action');


    // alert(url);

    // first_name.value = "";
    // last_name.value = "";
    // username.value = "";
    // email.value = "";
    // mobile.value = "";
    // zip_code.value = "";
    // country.value = "";
    // city.value = "";
    // sex.value = "";
    // birth.value = "";
    // about_me.value = "";
    // file.value = "";
    // password.value = "";
    // password_confirmation.value = "";

    // var message = "";
    // const m = "نرم افزار msp";

//--validation first_name
//     if (first_name.value === "") {
//         message = "نام را وارد کنید";
//         first_name.style.border = "2px solid red";
//     }
//     if (first_name.value.length <= 2) {
//         message = "نام نباید کوچکتر یا مساوی 2 کلمه باشد" + message;
//         first_name.style.border = "2px solid red";
//     }
//     if (first_name.value.length >= 15) {
//         message = "نام نباید بزرگتر از 15 کلمه باشد" + message;
//         first_name.style.border = "2px solid red";
//     }
//--validation last_name
//     if (last_name.value === "") {
//         message = "نام خانوادگی را وارد کنید" + message;
//         last_name.style.border = "2px solid red";
//     }
//     if (last_name.value.length <= 2) {
//         message = "نام خانوادگی نباید کوچکتر یا مساوی 2 کلمه باشد" + message;
//         last_name.style.border = "2px solid red";
//     }
//     if (last_name.value.length >= 15) {
//         message = "نام خانوادگی نباید بزرگتر از 15 کلمه باشد" + message;
//         last_name.style.border = "2px solid red";
//     }
//--validation username
//     if (username.value === "") {
//         message = "نام کاربری را وارد کنید" + message;
//         username.style.border = "2px solid red";
//     }
//     if (username.value.length <= 2) {
//         message = "نام کاربری نباید کوچکتر یا مساوی 2 کلمه باشد" + message;
//         username.style.border = "2px solid red";
//     }
//     if (username.value.length >= 15) {
//         message = "نام کاربری نباید بزرگتر از 15 کلمه باشد" + message;
//         username.style.border = "2px solid red";
//     }

// باید شامل یک علامت "@" باشد.
//     باید حداقل یک نقطه (.) داشته باشد باشد.
//     علامت "@" نباید اولین کاراکتر باشد.
//     آخرین نقطه، باید بعد از علامت "@" ظاهر شود.
//     بعد از آخرین نقطه باید حداقل 2 کاراکتر بیاید

    //--validation email
    // var atsin = email.indexOf("@");
    // var noghte = email.lastIndexOf(".");
    // if (email.value.length === "") {
    //     message = "ایمیل را وارد کنید" + message;
    //     email.style.border = "2px solid red";
    // }
    // if (atsin < 1 || noghte < atsin + 2 || noghte + 2 <= x.length) {
    //     message = "فرمت ایمیل اشتباه است" + message;
    //     first_name.style.border = "2px solid red";
    // }
    //--validation mobile
    // if (mobile.value === "") {
    //     message = "موبایل را وارد کنید" + message;
    //     mobile.style.border = "2px solid red";
    // }
    // if (mobile.value.length > 11) {
    //     message = "تعداد اعدا موبایل بیش از حد مجاز است." + message;
    //     mobile.style.border = "2px solid red";
    // }
    // if (mobile.value.length < 11) {
    //     message = "تعداد اعدا موبایل کمتر از حد مجاز است." + message;
    //     mobile.style.border = "2px solid red";
    // }
    // if (mobile.value.match(/^\+?([0-9]|[-|' '])+$/i)) {
    //     return true;
    // } else {
    //     message = "شماره موبایل اشتباه است" + message;
    //     alert(message);
    // }
    //--validation zip_code
    // if (zip_code.value === "") {
    //     message = "کد پستی را وارد کنید" + message;
    //     zip_code.style.border = "2px solid red";
    // }
    //--validation sex
    // if (sex.value === "") {
    //     message = "جنسیت را وارد کنید" + message;
    //     sex.style.border = "2px solid red";
    // }
    //--validation birth
    // if (birth.value === "") {
    //     message = "تاریخ تولد را وارد کنید" + message;
    //     birth.style.border = "2px solid red";
    // }
    //--validation about_me
    // if (about_me.value === "") {
    //     message = "درباره من را وارد کنید" + message;
    //     about_me.style.border = "2px solid red";
    // }
    // if (about_me.value.length <= 2) {
    //     message = "تعداد کلمات کمتر از حد مجاز است" + message;
    //     about_me.style.border = "2px solid red";
    // }
    // // //--validation about_me
    // if (file.value === "") {
    //     message = "تصویر را وارد کنید" + message;
    //     file.style.border = "2px solid red";
    // }

    // function validateImage() {
    //     var formData = new FormData();
    //
    //     var file = document.getElementById("file").files[0];
    //
    //     formData.append("Filedata", file);
    //     var t = file.type.split('/').pop().toLowerCase();
    //     if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
    //         alert('Please select a valid image file');
    //         document.getElementById("file").value = '';
    //         return false;
    //     }
    //     if (file.size > 1024000) {
    //         alert('Max Upload size is 1MB only');
    //         document.getElementById("img").value = '';
    //         return false;
    //     }
    //     return true;
    // }

    // function fileValidation() {
    //     var fileInput =
    //         document.getElementById('file');
    //
    //     var filePath = fileInput.value;
    //
    //     // Allowing file type
    //     var allowedExtensions =
    //         /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    //
    //     if (!allowedExtensions.exec(filePath)) {
    //         alert('Invalid file type');
    //         fileInput.value = '';
    //         return false;
    //     } else {
    //
    //         // Image preview
    //         if (fileInput.files && fileInput.files[0]) {
    //             var reader = new FileReader();
    //             reader.onload = function (e) {
    //                 document.getElementById(
    //                     'imagePreview').innerHTML =
    //                     '<img src="' + e.target.result
    //                     + '"/>';
    //             };
    //
    //             reader.readAsDataURL(fileInput.files[0]);
    //         }
    //     }
    // }

    //--validation password
    // if (password.value === "") {
    //     message = "پسورد را وارد کنید" + message;
    //     password.style.border = "2px solid red";
    // }
    // if (password.value.length < 8) {
    //     message = "پسورد کمتر از هشت رقم است" + message;
    //     password.style.border = "2px solid red";
    // }
    // if (password.value.length > 15) {
    //     message = "پسورد بیشتر از 15 رقم است" + message;
    //     password.style.border = "2px solid red";
    // }
    //--validation password_confirmation
    // if (password_confirmation.value === "") {
    //     message = "تایید پسورد را وارد کنید" + message;
    //     password_confirmation.style.border = "2px solid red";
    // }
    // if (password_confirmation.value !== password.value) {
    //     message = "پسورد و تایید پسورد یکی نیست" + message;
    //     password_confirmation.style.border = "2px solid red";
    // }
    // alert(message);

    //--ajax
    // function loadDoc() {
    //     var xhttp = new XMLHttpRequest();
    //     xhttp.onreadystatechange = function () {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.getElementById("demo").innerHTML = this.responseText;
    //         }
    //     };
    //     xhttp.open("GET", "ajax_info.txt", true);
    //     xhttp.send();
    // }

    // const formData = new FormData($("#formData")[0]);
    // formData.append('first-name', first_name.value);
    // formData.append('last-name', last_name.value);
    // formData.append('username', username.value);
    // formData.append('email', email.value);
    // formData.append('mobile', mobile.value);
    // formData.append('sex', sex.value);
    // formData.append('birth', birth.value);
    // formData.append('about-me', about_me.value);
    // formData.append('file', file.value);
    // formData.append('password', password.value);
    // formData.append('password-confirmation', password_confirmation.value);

    const BaseUrl = 'http://localhost:8000/';
    const url = BaseUrl + 'register';
    // alert(url);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            cache: true,
            async: false,
            dataType: "json",
            accept: "application/json",
        },
        type: "POST",
        method: "POST",
        url: url,
        data: /*new FormData($("#formData")[0]),*/ /*$("#formData").serialize(),*/ {
            first_name: $('#first-name').val(),
            last_name: $('#last-name').val(),
            username: $('#username').val(),
            email: $('#email').val(),
            mobile: $('#mobile').val(),
            sex: $('#sex').val(),
            birth: $('#birth').val(),
            about_me: $('#about-me').val(),
            file: $('#file').val(),
            password: $('#password').val(),
            password_confirmation: $('#password-confirmation').val(),
        },
        statusCode: {
            201: function (response, textStatus, jqXHR) {
                alert(response.status);
            },
            403: function (response, textStatus, errorThrown) {
                alert(response.status);
            },
            // .done(function(data)
            // {
            //     alert(data);
            // })
            // .fail(function (jqXHR, textStatus)
            // {
            //     alert('Something went wrong: ' + textStatus);
            // })
            // .always(function (jqXHR, textStatus)
            // {
            //     alert('Ajax request was finished')
            // }),
            404: function (response, textStatus, errorThrown) {
                alert(response.status);
            },
            //         .done(function(data){
            //             alert(data);
            //         })
            //         .fail(function(jqXHR, textStatus)
            //         {
            //             alert('Something went wrong: ' + textStatus);
            //         })
            //         .always(function(jqXHR, textStatus)
            //         {
            //             alert('Ajax request was finished')
            //         }),
        },
        success: function (data, textStatus, jqXHR) {
            window.location("");
        },
        // success: function (response)
        // {
        // const res =[
        //     response['status'],
        //     response['data'],
        //     response['message'],
        // ];
        // alert(res);
        // const res = {
        //     'status' : response['status'],
        //     'data' : response['data'],
        //     'message' : response['message'],
        // };
        // alert(res);
        // const status = response['status'];
        // const data = response['data'];
        // const message = response['message'];
        // alert(status);alert(data);alert(message);
        // alert(response.data);
        // },
        // error: function (jqXHR, textStatus, errorThrown)
        // {
        //     console.log(JSON.stringify(jqXHR));
        //     console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        // location.reload();
        // },
        // complete :function (jqXHR, textStatus) {
        //
        // }
    });
}
