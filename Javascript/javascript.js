function validateForm(){
	var Fname = document.forms["myForm"]["fname"].value;
    if (Fname == null || Fname == "") {
        alert("First Name must be filled out");
        return false;
    }
    

    var Lname = document.forms["myForm"]["lname"].value;
    if (Lname == null || Lname == "") {
        alert("Last Name must be filled out");
        return false;
    }

    var s=document.forms["myForm"]["gender"];
	for(var i=0;i<s.length;i++){
		if(s[i].checked)
			break;
	}
	if(i==s.length){
		alert("Gender not selected.");
		return false;
	}

	var vemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var e=document.forms["myForm"]["gender"].value;
	if(!(vemail.test(e))){
		alert("Email Invalid");
		return false;
	}


    var psword = document.forms["myForm"]["password"].value;
    if (psword == null || psword == "") {
        alert("Enter the password!");
        return false;
    }
	
	/*Log In form starts from here*/
    
    var usrname = document.forms["logForm"]["username"].value;
    if (usrname == null || usrname == "") {
        alert("Username not entered.");
        return false;
    }



    return true;
}

