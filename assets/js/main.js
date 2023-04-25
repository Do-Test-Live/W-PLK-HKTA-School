const buttons = document.querySelectorAll(".hkta-primary-btn");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        let audio = new Audio('../assets/audio/'+button.id+'.wav');
        audio.play();

        if(button.id!='reset'){
            button.disabled=true;
        }

        sound(button.id);
    });
});

function reset(){
    buttons.forEach(button => {
        button.disabled=false;
        resetSound();
    });
}


async function sound(sound_name) {
    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {sound_name: sound_name},
        success:async function(msg){
            console.log('Play Sound '+sound_name);
        },
        error: function(){
            alert("failure");
        }
    });
}

async function resetSound() {
    $.ajax({
        type: "POST",
        url: "insertSound.php",
        data: {reset: 1},
        success:async function(msg){
            console.log('Reset Sound');
        },
        error: function(){
            alert("failure");
        }
    });
}

setTimeout(playSound, 5000);

async function playSound() {

}