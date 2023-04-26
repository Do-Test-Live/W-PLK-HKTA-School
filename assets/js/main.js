const buttons = document.querySelectorAll(".hkta-primary-btn");

buttons.forEach(button => {
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
}

async function sound(sound_name) {
    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {sound_name: sound_name},
        success: async function (msg) {
            console.log('Play Sound ' + sound_name);
        },
        error: function () {
            alert("failure");
        }
    });
}

async function resetSound() {
    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {reset: 1},
        success: async function (msg) {
            console.log('Reset Sound');
        },
        error: function () {
            alert("failure");
        }
    });
}

setInterval(playSound, 5000);

async function playSound() {
    console.log('Play Sound Execute');

    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {play_sound: 1},
        success: async function (msg) {

            if (msg != 'reset') {
                console.log('Play Sound '+msg);
                let audio = new Audio('../assets/audio/' + msg + '.wav');
                audio.play();

                document.getElementById(msg).disabled = false;
            } else {
                console.log('Reset Sound '+msg);
            }

        },
        error: function () {
            alert("failure");
        }
    });
}
