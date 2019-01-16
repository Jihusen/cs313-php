function message() {
    alert("Clicked!");
}

function colorChange() {
    //document.getElementById("div1").style.background = //document.getElementById("colorPicker").value;
    $('.div1').css('background', document.getElementById("colorPicker").value);
}

function fade() {
    $('.div3').fadeOut("slow");
}