$(document).ready(function () {
    //to disable the entire page
    $("body").on("contextmenu", function (e) {
        return false;
    });

    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });

    document.addEventListener('contextmenu', event => event.preventDefault());

    document.onkeydown = function (e) {

        // disable F12 key
        if (e.keyCode == 123) {
            return false;
        }

        // disable I key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
            return false;
        }

        // disable J key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }

        // disable U key
        if (e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
});

const buttons = document.querySelectorAll(".hkta-primary-btn");

const eca = document.querySelectorAll(".hkta-dark-btn");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        let audio = new Audio('../assets/audio/' + button.id + '.wav');
        audio.play();

        if (button.id != 'reset') {
            button.disabled = true;
        }

        $('#staticBackdrop').modal('show');
        document.getElementById('classTitle').innerHTML=button.id;

        setInterval(function () {
            $('#staticBackdrop').modal('hide');
        }, 2000);

        sound(button.id);
    });
});

eca.forEach(button => {
    button.addEventListener("click", () => {
        let audio = new Audio('../assets/audio/' + button.id + '.wav');
        audio.play();

        if (button.id != 'reset') {
            button.disabled = true;
        }

        sound(button.id);
    });
});

function reset() {
    buttons.forEach(button => {
        button.disabled = false;
        resetSound();
    });

    eca.forEach(button => {
        button.disabled = false;
    });
}

async function sound(sound_name) {
    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {sound_name: sound_name},
        success: async function (msg) {

        },
        error: function () {

        }
    });
}

async function resetSound() {
    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {reset: 1},
        success: async function (msg) {

        },
        error: function () {

        }
    });
}

setInterval(playSound, 1000);

let soundCall = [];

async function playSound() {

    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {play_sound: 1},
        success: async function (msg) {

            if (msg != 'reset') {

                console.log(msg);

                let audioSplit = msg.match(/.{1,4}/g);

                for (let i = 0; i < audioSplit.length; i++) {

                    soundCall.push(audioSplit[i]);

                    let l=0;

                    soundCall.forEach((element) => {
                        if(element==audioSplit[i]){
                            l=1;
                            console.log(audioSplit[i]);
                        }
                        console.log(element);
                    });

                    let audio = new Audio('../assets/audio/' + audioSplit[i] + '.wav');
                    audio.play();

                    $('#staticBackdrop').modal('show');
                    document.getElementById('classTitle').innerHTML=audioSplit[i];

                    setInterval(function () {
                        $('#staticBackdrop').modal('hide');
                    }, 2000);

                    document.getElementById(audioSplit[i]).disabled = true;
                }
            } else {

            }

        },
        error: function () {

        }
    });
}
