function nameValidator(name) {
    var a = name.trim();
    if (a.length <= 4) {
        console.log("name nay!");
        document.getElementById("error_name").className =
            'alert alert-info alert-dismissible';
        document.getElementById("name_div").className =
            "input-group has-error";
    } else {
        console.log("name yay!");
        document.getElementById("error_name").className =
            'hidden';
        document.getElementById("name_div").className =
            "input-group has-success";
    }
}

function emailValidator(email) {
    var a = email.trim();
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!a.match(regex)) {
        console.log("email nay!");
        document.getElementById("error_email").className =
            'alert alert-info alert-dismissible';
        document.getElementById("email_div").className =
            "input-group has-error spacer";
    } else {
        console.log("email yay!");
        document.getElementById("error_email").className =
            'hidden ';
        document.getElementById("email_div").className =
            "input-group has-success spacer";
    }
}

function phoneValidator(phone) {
    var a = phone.trim();
    var regex = /^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/;
    if (!a.match(regex)) {
        console.log("phone nay!");
        document.getElementById("error_phone").className =
            'alert alert-info alert-dismissible';
        document.getElementById("phone_div").className =
            "input-group has-error spacer";
    } else {
        console.log("phone yay!");
        document.getElementById("error_phone").className =
            'hidden';
        document.getElementById("phone_div").className =
            "input-group has-success spacer";
    }
}



