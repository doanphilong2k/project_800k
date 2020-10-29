$(document).ready(function(){
    $("#test-room-btn").click(function(){
        if($("#test-room").val() == "" || $("#test-room").val() == null)
        {
            alert("Yêu cầu nhập mã phòng thi!");
        }
    });
});

var buttonClick = 1;
leftContainer(buttonClick);

function currentButton(n) {
    leftContainer(buttonClick = n);
}

function leftContainer(n) {
    var content = document.getElementsByClassName("content");
    var contentTitle = document.getElementsByClassName("content-title");

    for(var i = 0; i < content.length; i++)
    {
        content[i].style.display = "none";
    }
    for(var i = 0; i < contentTitle.length; i++)
    {
        contentTitle[i].className = contentTitle[i].className.replace(" content-active", "");
    }

    content[buttonClick - 1].style.display = "block";
    contentTitle[buttonClick - 1].className += " content-active";
}