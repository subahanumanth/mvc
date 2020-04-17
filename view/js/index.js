function functionConfirm(msg, myYes) {
    var confirmBox = $("#confirm");
    confirmBox.find(".message").text(msg);
    confirmBox.find(".result,.no").unbind().click(function() {
       confirmBox.hide();
    });
    confirmBox.find(".result").click(myYes);
    confirmBox.show();
}

function error () {
    var h4 = document.createElement("h4");
    var text = document.createTextNode("Incorrect username or password.");
    h4.appendChild(text);
    h4.classList.add("h");
    var div = document.querySelector("#error");
    div.appendChild(h4);
    div.classList.add("error");
}
