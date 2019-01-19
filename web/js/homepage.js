$(document).ready(function() {
       $('#dog').click(function() {
           bark();
       });  
});

function bark() {
    var audio = new Audio('../sounds/puppy-barking_ds.mp3'); 
    audio.play();
}