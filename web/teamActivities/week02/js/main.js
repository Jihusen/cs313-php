function message() {
    alert("Clicked!");
}

function colorChange() {
    //document.getElementById("div1").style.background = //document.getElementById("colorPicker").value;
    var input = $('#colorPicker').val();
    $('.div1').css('background', input);
                   
}

function fade() {
    $('.div3').fadeOut("slow");
}

$(document).ready(function() {
       $('#colorButton').click(function() {
           colorChange();
       });  
});

$(document).ready(function() {
       $('#fade').click(function() {
           fade();
       });  
});
