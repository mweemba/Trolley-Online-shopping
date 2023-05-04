$('document').ready(function(){
$('#registrationForm').submit(function(){
var data =$("#registrationForm").serialize();
$.ajax({
       type: "POST",
       url: 'do_signup.php',
       data: data,
       success: function(response)
       {
          if (response.trim() === 'success') {
           
			document.getElementById("formResponse").innerHTML="<font color='red'>your user has been created</p>please check your email for the validation code </font>"
			
          }
          else {
			document.getElementById("formResponse").innerHTML="<font color='red'>"+response+"</font>";
          }
       }
   })
   return false;
   })
   })