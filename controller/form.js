<script>
function validateForm() {
    alert("js file");
    var firstName = document.forms["add_name"]["firstName"].value;
    var lastName = document.forms["add_name"]["lastName"].value;
    var email =  document.getElementById("add_name").email.value;
    var mobileNo = document.getElementById("add_name").mobileNo.value;
    var areaOfIntrest = document.forms["add_name"]["areaOfIntrest"].value;
    var date = document.forms["add_name"]["date"].value;
    var detailsOfGraduation = document.forms["add_name"]["detailsOfGraduation"].value;
    var bloodGroup = document.forms["add_name"]["bloodGroup"].value;
    var gender = document.forms["add_name"]["gender"].value;

    if (firstName == "" || lastName == "" || email == "" || mobileNo == "" ||  areaOfIntrest == "" || date == "" || detailsOfGraduation == "" || bloodGroup == "" || gender == "" ||) {
        alert("Enter All Details");
    } else {
        alert("inserted successfully");
    }
}
 </script>
