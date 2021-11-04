require('./bootstrap');

var video = document.getElementById('video');
var video_src = document.getElementById('video-src');
console.log(video)
if (document.documentElement.clientWidth < 851) {
    $(video).attr('poster', 'assets/poster_mob.png')
    video_src.src = 'assets/back_mob.mp4'
    video.load();
    video.play();
} else {
    $(video).attr('poster', 'assets/poster.png')
    video_src.src = 'assets/back.mp4'
    video.load();
    video.play();
}

$(".password-button").click(function () {
    var passwordvisible = this.closest('.input-valid').querySelector(".password");
    if ($(passwordvisible).attr('type') == 'password'){
        $($(this.closest('.input-valid')).children(".password-button")).removeClass('view');
        $(this.closest('.input-valid').querySelector(".password-hide")).addClass('view');
        $(passwordvisible).attr('type', 'text');
    } else {
        $($(this.closest('.input-valid')).children(".password-button")).removeClass('view');
        $(this.closest('.input-valid').querySelector(".password-visible")).addClass('view');
        $(passwordvisible).attr('type', 'password');
    }
});



$("#register .hero-button").click(function () {
    var form = this.closest('form');
    var boxstepcontrol = this.closest('.box-step')
    var stepcontrol = this.closest('.box-step').querySelector(".entryfield");
    if (stepcontrol.classList.contains('name')) {
        var controlinput = boxstepcontrol.querySelector('.name');
        if (controlinput.value.match(/^[a-z0-9A-Z]{3,30}$/)) {
            $(controlinput).addClass("valid");
            $(controlinput).removeClass("invalid");
            $(boxstepcontrol).removeClass("step-active");
            setTimeout(function () {
                $(boxstepcontrol.nextElementSibling).addClass("step-active");
            }, 500)
        } else {
            $(controlinput).addClass("invalid");
            $(controlinput).removeClass("valid");
        }
    }
    if (stepcontrol.classList.contains('password')) {
        var controlinput = boxstepcontrol.querySelector('.password');
        if (controlinput.value.match(/^[^\s<>'"]{6,40}$/)) {
            $(controlinput).addClass("valid");
            $(controlinput).removeClass("invalid");
            $(boxstepcontrol).removeClass("step-active");
            setTimeout(function () {
                $(boxstepcontrol.nextElementSibling).addClass("step-active");
            }, 500)
        } else {
            $(controlinput).addClass("invalid");
            $(controlinput).removeClass("valid");
        }
    }
    if (stepcontrol.classList.contains('mail')) {
        var controlinput = boxstepcontrol.querySelector('.mail');
        if (controlinput.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
            $(controlinput).addClass("valid");
            $(controlinput).removeClass("invalid");
            let formData = new FormData(form);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/register',
                data: formData,
                type: 'POST',
                contentType: false,
                processData: false,
                success: function (data) {

                },
                error: function (data) {

                }
            });
            return false;
        } else {
            $(controlinput).addClass("invalid");
            $(controlinput).removeClass("valid");

        }
    }

});

$("#login .hero-button").click(function () {
    var form = this.closest('form')
    var mail = form.querySelector('.mail')
    var password = form.querySelector('.password')
    if (mail.value === "") {
        $(mail).addClass("invalid");
        $(mail).removeClass("valid");
    } else {
        // if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
        $(mail).addClass("valid");
        $(mail).removeClass("invalid");
        if (password.value === "") {
            $(password).addClass("invalid");
            $(password).removeClass("valid");
        } else {
            //     if (password.value.match(/^[^\s<>'"]{6,40}$/)) {
            $(password).addClass("valid");
            $(password).removeClass("invalid");
            let formData = new FormData(form);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/login',
                data: formData,
                type: 'POST',
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == '{"errorCode":3001,"message":"User not found"}') {
                        $(mail).addClass("invalid-response");
                        $(mail).removeClass("valid");
                    } else {

                    }
                    if (data == '{"errorCode":3002,"message":"Incorrect password"}') {
                        $(password).addClass("invalid-response");
                        $(password).removeClass("valid");
                    } else {

                    }
                },
                error: function (data) {
                }
            });
            return false;
            // } else {
            //     $(password).addClass("invalid");
            //     $(password).removeClass("valid");
            // }
            // }
            // } else {
            //     $(mail).addClass("invalid");
            //     $(mail).removeClass("valid");
        }
    }

});

$("#reset .hero-button").click(function () {
    var form = this.closest('form')
    var mail = form.querySelector('.mail')
    if (mail.value === "") {
        $(mail).addClass("invalid");
        $(mail).removeClass("valid");
    } else {
        let formData = new FormData(form);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '',
            data: formData,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {

            },
            error: function (data) {

            }
        });
        return false;
    }
});

$("#updatepassword .green-button").click(function () {
    var form = this.closest('form')
    var passwordnew = form.querySelector('.password-new')
    var passwordconfirm = form.querySelector('.password-confirm')
    if (passwordnew.value === "") {
        $(passwordnew).addClass("invalid");
        $(passwordnew).removeClass("valid");
    } else {
        if (passwordnew.value.match(/^[^\s<>'"]{6,40}$/)) {
            $(passwordnew).addClass("valid");
            $(passwordnew).removeClass("invalid invalid-no-caption");
            if (passwordconfirm.value === passwordnew.value) {
                $(passwordconfirm).addClass("valid");
                let formData = new FormData(form);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/password/email',
                    data: formData,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {

                    },
                    error: function (data) {

                    }
                });
                return false;
            } else {
                $(passwordnew).addClass("invalid-no-caption");
                $(passwordnew).removeClass("valid");
                $(passwordconfirm).addClass("invalid");
                $(passwordconfirm).removeClass("valid");
            }
        } else {
            $(passwordnew).addClass("invalid");
            $(passwordnew).removeClass("valid");
        }
    }
});


$('.open-login').click(function () {
    $('#register').css('display', 'none');
    $('#login').css('display', 'block');
});
$('.open-register').click(function () {
    $('#register').css('display', 'block');
    $('#login').css('display', 'none');
    $('#reset').css('display', 'none');
});
$('.forgot-password').click(function () {
    $('#register').css('display', 'none');
    $('#login').css('display', 'none');
    $('#reset').css('display', 'block');
});

$(document).ready(function() {
    if (window.location.href.indexOf("/reset") > -1) {
        $('#register').css('display', 'none');
        $('#login').css('display', 'none');
        $('#reset').css('display', 'none');
        $('#updatepassword').css('display', 'block');
    }
});



var consent = document.getElementsByClassName('consent');
$(consent).click(function () {
    for (var i = 0; i < consent.length; i++) {
        var form = consent[i].closest("form");
        if (consent[i].checked) {
            form.querySelector("button").disabled = '';
        } else {
            form.querySelector("button").disabled = 'disabled';
        }
    }
});


var audio = document.getElementById('audio');
var button_audio = document.getElementById('button-music');
button_audio.addEventListener('click', (AudioPlayPause));
function AudioPlayPause () {
    if ($(button_audio).hasClass('mute')) {
        $(button_audio).removeClass('mute').addClass('music');
        audio.play();
    } else {
        $(button_audio).removeClass('music').addClass('mute');
        audio.pause();
    }
}

