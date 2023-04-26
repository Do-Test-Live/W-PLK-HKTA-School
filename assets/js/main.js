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
            console.log(error);
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
            console.log(error);
        }
    });
}

setInterval(playSound, 1000);

async function playSound() {
    console.log('Play Sound Execute');

    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {play_sound: 1},
        success: async function (msg) {

            if (msg != 'reset') {

                let audioSplit=msg.match(/.{1,4}/g);

                for(let i=0;audioSplit.length;i++){
                    let audio = new Audio('../assets/audio/' + audioSplit[i] + '.wav');
                    audio.play();

                    console.log('Play Sound '+audioSplit[i]);

                    document.getElementById(audioSplit[i]).disabled = true;
                }
            } else {
                console.log('Reset Sound '+msg);
            }

        },
        error: function () {
            console.log(error);
        }
    });
}
