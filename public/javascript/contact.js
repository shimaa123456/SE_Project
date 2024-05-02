// form validation 
document.getElementById("submit").onclick = validate;
var count = 0;

function validate() {
    var username = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    if (username == "" || email == "" || phone == "" || subject == "" || message == "") {
        alert("All fields must be filled out");
        return false;
    }

    if (validateName(username) && validateEmail(email) && validatePhone(phone) && validateMessage(message)) {
        alert("Message sent successfully, ShimaaEssamDesign");
    }
    
    return false;
}

function validateName(username) {
    if (username.length < 3) {
        alert("Please enter a valid user name with more than 2 characters");
        return false;
    } else if (/\d/.test(username)) {
        alert("Username should not contain numbers");
        return false;
    } else {
        count++;
        return true;
    }
}

function validateEmail(email) {
    var email2 = email;
    var atpos = email2.indexOf("@");
    var dotpos = email2.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email2.length) {
        alert("Not a valid format email");
        return false;
    } else {
        count++;
        return true;
    }
}

function validatePhone(phone) {
    var phonePattern = /^(?:01)(?:0|1|2|5)\d{8}$/;
    if (!phonePattern.test(phone)) {
        alert("Invalid Egyptian phone number");
        return false;
    } else {
        count++;
        return true;
    }
}

function validateMessage(message) {
    if (message.length < 10) {
        alert("Please enter a specific message that explains your question");
        return false;
    } else {
        count++;
        return true;
    }
}




