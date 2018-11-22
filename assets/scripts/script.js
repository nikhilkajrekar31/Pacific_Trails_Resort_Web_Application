function validateForm() {

    var firstname = document.forms["reservations"]["firstname"].value;
    if (firstname == "" || (! /^[a-zA-Z][a-zA-Z\s]*$/.test(firstname))) {
        alert("JavaScript Error: Enter a valid First Name");
        return false;
    }
    var lastname = document.forms["reservations"]["lastname"].value;
    if (lastname == "" || (! /^[a-zA-Z][a-zA-Z\s]*$/.test(lastname))) {
        alert("JavaScript Error: Enter a valid Last Name");
        return false;
    }
    if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(reservations.email.value)) 
    {
        alert("JavaScript Error: Enter a valid Email");
        return false;
    }
    if (! /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(reservations.tel.value)) 
    {
        alert("JavaScript Error: Enter a valid Phone Number");
        return false;
    }
    var dateString = document.forms["reservations"]["arrivaldate"].value;
        var myDate = new Date(dateString);
        if(dateString==""){
        	alert("JavaScript Error: Enter a valid arrival date ");
            return false;
        }
        var today = new Date();
        if ( myDate < today ) { 
            alert("JavaScript Error: Enter a valid arrival date ");
            return false;
        }
    var night = document.forms["reservations"]["nights"].value;
    if (isNaN(night) || night<1) {
        alert("JavaScript Error: Number of nights cannot be 0");
        return false;
    }
    var comments = document.forms["reservations"]["comments"].value;
    if (comments == "") {
        alert("JavaScript Error: Comments must be filled out");
        return false;
    }
    var dateString = document.forms["reservations"]["when"].value;
        var myDate = new Date(dateString);
        if(dateString==""){
        	alert("JavaScript Error: Enter a valid when date ");
            return false;
        }
        var today = new Date();
        if ( myDate < today ) { 
            alert("JavaScript Error: Enter a valid when date ");
            return false;
        }
}

function validateMail(){
    if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(reservations.email.value)) 
    {
        alert("JavaScript Error: Enter a valid Email");
        return false;
    }
}