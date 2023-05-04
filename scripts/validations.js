function FormValidate(){
if(useridvalidation())
    {
        if(validatePassword(passid,7,12))
        {
            if(passidvalidation())
            {
                if(checkBothpasswords())
                {
                    if(useridvalidation())
                    {
                        if(ValidateEmail())
                        {
                            if(checkBothEmail())
                            {
                                if(CellNumberValid())
                                {
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return false;


}

function useridvalidation(){
var uid = document.getElementById("UserName").value;
var uid_len = uid.length; 
if (uid_len == 0 || uid_len >= 20 || uid_len < 3)
{
document.getElementById("UserNameValid").innerHTML="<font color='red'>User name length must be between 3 to 20</font>";
return false; 

}
else{

 $.ajax({
       type: "POST",
       url: 'checkUser.php',
       data: "user="+uid,
       success: function(data)
       {
          if (data.trim() === 'exists') {
           
			document.getElementById("UserNameValid").innerHTML="<font color='red'>User already exists</font>"
			return false;
          }
          else {
			document.getElementById("UserNameValid").innerHTML="<img src='images/tick.jpg' width='20'>";
          }
       }
   });
document.getElementById("UserNameValid").innerHTML="";
return true;

}
}
function passidvalidation()
{
checkBothpasswords();
var password= document.getElementById("inputPassword1").value;
var password_strength=document.getElementById("passwordValidate");
 //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return true;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }
 
        //Display status.
        var color = "";
        var strength = "";
		var returnvalue=""
        switch (passed) {
            case 0:
			trength = "Weak password";
                color = "red";
		
                break;
            case 1:
                strength = "Weak password";
                color = "red";
				return false;
                break;
            case 2:
                strength = "Fairly strong password";
                color = "darkorange";
				return true;
                break;
            case 3:
            case 4:
                strength = "Strong password";
                color = "green";
				return true;
                break;
            case 5:
                strength = "Very Strong password";
                color = "darkgreen";
				return true;
                break;
			
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
		
}

function checkBothpasswords() {
var pass1= document.getElementById("inputPassword1").value;
var pass2= document.getElementById("inputPassword2").value;
if(pass1.trim() === pass2.trim())
{
document.getElementById("checkbothpass").innerHTML ="<img src='images/tick.jpg' width='20'>";
return true;
}
else {

document.getElementById("checkbothpass").innerHTML="<font color='red'>The two passwords are not the same</font>"
return false;
}

}
function ValidateEmail() 

{
var email= document.getElementById("input_email").value;

 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
  $.ajax({
       type: "POST",
       url: 'checkEmail.php',
       data: "email="+email,
       success: function(data)
       {
          if (data.trim() === 'exists') {
     
			document.getElementById("emailValid").innerHTML="<font color='red'>Email already exists</font>"
			return false;
          }
          else {
			document.getElementById("emailValid").innerHTML="<img src='images/tick.jpg' width='20'>";
          }
       }
   });
  }
  else if(!email)
  {
    document.getElementById("emailValid").innerHTML=""
    return false;
	}
	else{
	document.getElementById("emailValid").innerHTML="<font color='red'>Email not valid</font>"
    return true;
	}
checkBothEmail();
}

function checkBothEmail() {
var email= document.getElementById("input_email").value;
var email2= document.getElementById("re_enter_email").value;
if(email.trim() === email2.trim())
{
document.getElementById("veryfyBoth").innerHTML ="<img src='images/tick.jpg' width='20'>";
return true;
}

else {

document.getElementById("veryfyBoth").innerHTML="<font color='red'>The two emails are not the same</font>"
return false;
}

}
function CellNumberValid(){
var mobile= document.getElementById("mobile").value.trim();
var uid_len = mobile.length;
if (uid_len == 0 || uid_len >= 14 || uid_len < 12)
{
document.getElementById("mobileValidate").innerHTML="<font color='red'>mobile length must be between 12  to 13</font>";
return "mobile length must be between 12  to 13"; 
}
else{

 $.ajax({
       type: "POST",
       url: 'checkMobile.php',
       data: "mobile="+mobile,
       success: function(data)
       {
          if (data.trim() === 'exists') {
			document.getElementById("mobileValidate").innerHTML="<font color='red'>Mobile already exists</font>"
			return false;
          }
          else {
		  
			document.getElementById("mobileValidate").innerHTML="<img src='images/tick.jpg' width='20'>";
			return true;
          }
       }
   });
document.getElementById("UserNameValid").innerHTML="";


}
}

