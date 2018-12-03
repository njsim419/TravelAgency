function validate(myform) {
    //  har.peters@a-1.com.sait.ca  !#$%&'*+\/=?^_`{-
    var reg = /^[a-zA-Z][a-zA-Z0-9.!#$%&'*+\/=?^_`{-]+@[a-zA-Z][a-zA-Z0-9-]+\.+[a-zA-Z]{2,6}$/;
    if (!reg.test(myform.email.value)) {
        alert("invalid email address");
        return false;
    }

    document.getElementById("message").innerHTML = "";
    var message = "";

    myform.postal.value = myform.postal.value.toUpperCase();
    ///^[A-Z]\d[A-Z] ?\d[A-Z]\d$)|(^\d{5}( ?\d{4})$)/i
    var reg = /^[a-z]\d[a-z] ?\d[a-z]\d$/i;
    if (!reg.test(myform.postal.value)) {
        message += "Invalid Postal Code Format: should be X9X 9X9<br />";
        myform.postal.focus();
        myform.postal.style.backgroundColor = "pink";
    }
        if (message) {
        document.getElementById("message").innerHTML = message;
        return false;
    } else {
        return confirm("Continue Submitting?");
    }
}