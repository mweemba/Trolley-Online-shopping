 
$(document).ready(function() {
  $('#loginform').submit(function(e) {
  var username=document.getElementById("inputEmail1").value;
 var password=document.getElementById("inputPassword1").value;
    e.preventDefault();
	// ;
    $.ajax({
       type: "POST",
       url: 'do_login.php',
       data: "username="+username+"&password="+password,
       success: function(data)
       {
          if (data.trim() === 'success') {
           console.log(data);
		   window.location = 'index.php';
			
          }
          else {
		  console.log(data);
			document.getElementById("loginResponse").innerHTML="<font color='Red'>"+data+"</font>";
			
          }
       }
   });
 });
});
