const buttons = document.querySelectorAll("button");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        let audio = new Audio(button.id+'.wav');
        audio.play();
        console.log(button);
        alert('Audio Play'+button.id+'.wav');
    });
});
