const buttons = document.querySelectorAll(".hkta-primary-btn");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        let audio = new Audio('../assets/audio/'+button.id+'.wav');
        audio.play();

        if(button.id!='reset'){
            button.disabled=true;
        }
    });
});

function reset(){
    buttons.forEach(button => {
        button.disabled=false;
    });
}
