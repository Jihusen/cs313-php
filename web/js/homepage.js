$(document).ready(function() {
       $('#dog').click(function() {
           bark();
       });  
});

function bark() {
    var dogSound = document.GetElementById("barkAudio");
    
    dogSound.play();
}