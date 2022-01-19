/* ***************** COUNTDOWN JS ***************** */
if(document.getElementsByClassName("overlay")) {
    let gelecek = Date.parse("January 20, 2022 14:00:00");
    zamaniGuncelle();

    function zamaniGuncelle() {
        suan = new Date();
        fark = gelecek - suan;

        gun = Math.floor(fark / (1000 * 60 * 60 * 24));
        saat = Math.floor(fark / (1000 * 60 * 60));
        dakika = Math.floor(fark / (1000 * 60));
        saniye = Math.floor(fark / 1000);

        d = gun;
        h = saat - gun * 24;
        m = dakika - saat * 60;
        s = saniye - dakika * 60;

        if (d < "10") {
            d = "0" + d;
        }
        if (h < "10") {
            h = "0" + h;
        }
        if (m < "10") {
            m = "0" + m;
        }
        if (s < "10") {
            s = "0" + s;
        }

        $('#days').html(d);
        $('#hours').html(h);
        $('#min').html(m);
        $('#sec').html(s);
    }

    setInterval('zamaniGuncelle()', 1000);
}
/* ***************** COUNTDOWN JS ***************** */

/* ***************** Intro JS ***************** */
if(document.getElementById("skip_btn")){

    var button = document.getElementById("skip_btn");
// localStorage.setItem('introVideo', true);
    if (!localStorage.getItem('introVideo')) {
        document.getElementById("skip_btn").style.display = "none";
    } else {
        document.getElementById("skip_btn").style.display = "block";
    }
//  localStorage.setItem('introVideo', true);

//Video bitimini yakalıyor
    document.getElementById('introVideo').addEventListener('ended', myHandler, false);
    function myHandler(e) {
        localStorage.setItem('introVideo', true);
    }

// Yönlendirme
//     button.addEventListener("click", function (e) {
//         window.location = "http://127.0.0.1:8000/home"
//     })
}
/* ***************** Intro JS ***************** */

/* ***************** Meeting Room JS ***************** */
$(function () {
    setTimeout(function () {
        createResize();
        $('.application-container').css('opacity', 1);
    }, 500);
});

$(window).resize(function () {
    createResize();
});

function createResize() {
    var limit = 1920 / 946;
    var windowRatio = $(window).innerWidth() / $(window).innerHeight();
    if (windowRatio <= limit) {
        $(".iframeContainer").css({
            'height': 'calc(101vh * 9 / 16)',
            'top': 'calc(20vh)',
            'width': '102vh',
            'left': 'calc(50% - 51vh)',
        });
    } else {
        $(".iframeContainer").css({
                'width': '52%',
                'left': 'calc(24%)',
            }
        );
        let iframe_height = $(".iframeContainer").innerWidth() * 9 / 16;
        $(".iframeContainer").css({
                'height': iframe_height + 'px',
                'top': 'calc(49% - ' + (iframe_height / 1.95) + 'px)'
            }
        );
        $(".iframeContainer iframe").css({
                'height': '100%'
            }
        );

    }
}
/* ***************** Meeting Room JS ***************** */






/* ***************** landscapeWarning JS ***************** */
$(function () {
    setTimeout(function () {
        landscapeWarning();
        $('.application-container').css('opacity', 1);
    }, 500);
});

$(window).resize(function () {
    landscapeWarning();
});

function landscapeWarning() {
    var ww = $(window).width();
    var wh = $(window).height();

    if (ww < wh) {
        $('.landscapeWarning').css('display', 'flex');
    } else {
        $('.landscapeWarning').css('display', 'none');
    }
}

$(document).ready(function () {
    landscapeWarning();
    $(window).resize(function () {
        landscapeWarning();
    });
});
/* ***************** landscapeWarning JS ***************** */






/* ***************** Checkbox ***************** */
if(document.getElementById("privacy_policySpan")) {
    let checkPolicy = false;
    $("#privacy_policySpan").click(function () {
        checkPolicy = true;
    })
    $("#policy_box").click(function () {
        if (!checkPolicy) {
            $('#privacyPolicyModal').modal({
                show: true
            });
            $("#policy_box").prop("checked", false);
            checkPolicy = true;
        }
    });
}
/* ***************** Checkbox ***************** */


/* ***************** Foyer Area JS ***************** */
if(document.getElementById("meeting_hall_rectangle")) {

    $(document).ready(function () {
        createResize()
    });


    $(window).resize(function () {
        changeResize();
    });


    function createResize() {

        $("#meeting_hall_rectangle").css({
            'height': 'calc(21vh)',
            'top': 'calc(18vh)',
            'width': '23vh',
            'left': 'calc(50% - 64.5vh)',
        });

        $("#booth_area_rectangle").css({
            'height': 'calc(21vh)',
            'top': 'calc(18vh)',
            'width': '24.5vh',
            'right': 'calc(30% - 27.5vh)',
        });
    }

    function changeResize() {
        var limit = 1920 / 1080;
        var windowRatio = $(window).innerWidth() / $(window).innerHeight();
        if (windowRatio <= limit) {
            $("#meeting_hall_rectangle").css({
                'width': '15vh',
                'left': 'calc(50% - 58.3vh)',
            });

            $("#booth_area_rectangle").css({
                'width': '22vh',
                'right': 'calc(30% - 32.5vh)',
            });
        } else {
            $("#meeting_hall_rectangle").css({
                'height': 'calc(20vh)',
                'bottom': 'calc(18vh)',
                'width': '10%',
                'left': 'calc(18.2%)',
            });

            $("#booth_area_rectangle").css({
                'height': 'calc(20vh)',
                'bottom': 'calc(18vh)',
                'width': '12%',
                'left': 'calc(70.2%)',
            });
        }
    }
}
/* ***************** Foyer Area JS ***************** */
