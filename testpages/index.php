<!DOCTYPE html>
<html>
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <link rel="stylesheet" href="resources/css/loginLayout.css">
 <link rel="stylesheet" href="resources/css/popup.css">
 <title>Home</title>
 <script type="text/javascript">
			var link;
			var element;
			function openPopUpRegistration(url)
			{
				link = url;
				element = document.getElementById("dimlayer");
				element.style.display = "block";
				element = document.getElementById("popupRegistration");
				element.style.display = "block";
			  
			}

			function closePopUpRegistration()
			{
				element = document.getElementById("popupRegistration");
				element.style.display = "none";
				element = document.getElementById("dimlayer");
				element.style.display = "none";
			}

		</script>
<script type="text/javascript">
			var link;
			var element;
			function openPopUpPass(url)
			{
				link = url;
				element = document.getElementById("dimlayer2");
				element.style.display = "block";
				element = document.getElementById("popupPassword");
				element.style.display = "block";
			  
			}

			function closePopUpPassword()
			{
				element = document.getElementById("popupPassword");
				element.style.display = "none";
				element = document.getElementById("dimlayer2");
				element.style.display = "none";
			}

		</script>
		<script>
		var usernames = ["Vasil4","Vasil5","Vasil6"];
		var passwords = ["Asdfg4", "Asdfg5", "Asdfg6"];
		
		function myFunctions(){
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		var a = usernames.indexOf(username);
		if (a>=0){
		if(passwords[a]==password){
		return true;
		}else{
		alert("wrong username or password");
		return false;}
		}else{
			alert("wrong username or password");
		return false;
		}
		}
		</script>
		
 <script>
userCheck;
passCheck;
confPass;
function justalert(x){

var b = document.getElementById("registerButton"); 
b.setAttribute("disabled", "disabled");
var eu = document.getElementById("errorUsername");
var ep = document.getElementById("errorPassword");
var ecp = document.getElementById("errorConfirmPassword");

if(x.id=="regUsername" && /(?=.*?[A-Z])[a-zA-Z]*\d[a-zA-Z\d]*$/.test(x.value) && x.value.length>=6){
eu.style.display = 'none';
userCheck = true;
x.style.color='rgba(166, 166, 166, 0.9)';
x.style.border='1px solid rgb(255, 255, 255)';
}else if(x.id=="regUsername"){
x.style.color='rgba(255, 0, 0, 1)'; 
x.style.border='1px solid red'; 
userCheck = false;
eu.style.display = 'block';
setTimeout(function() {
    $('#errorUsername').fadeOut('slow');
}, 1500);
}
if(x.id=="regPassword" && /(?=.*?[A-Z])[a-zA-Z]*\d[a-zA-Z\d]*$/.test(x.value) && x.value.length>=6 ){
ep.style.display='none';
passCheck=true;
x.style.color='rgba(166, 166, 166, 0.9)';
x.style.border='1px solid rgb(255, 255, 255)';
}else if(x.id=="regPassword"){
passCheck=false;
ep.style.display='block';
x.style.color='rgba(255, 0, 0, 1)'; 
x.style.border='1px solid red'; 
setTimeout(function() {
    $('#errorPassword').fadeOut('slow');
}, 1500);
}
if(x.id=="confirmPassword" && x.value == document.getElementById("regPassword").value){
x.style.color='rgba(166, 166, 166, 0.9)';
x.style.border='1px solid rgb(255, 255, 255)';
ecp.style.display='none';
confPass=true;}
else if(x.id=="confirmPassword"){confPass=false;
x.style.color='rgba(255, 0, 0, 1)'; 
x.style.border='1px solid red';
ecp.style.display='block';
setTimeout(function() {
    $('#errorConfirmPassword').fadeOut('slow');
}, 1000);}
if(userCheck==true && passCheck==true && confPass==true){
b.removeAttribute("disabled");
}else{
b.setAttribute("disabled","disabled");
}


}
</script>
 <script>

</script>
 </head>
<body>
<!-- Popup window for register -->
	<div id="dimlayer" class="dimLayer">
	<div id="popupRegistration" class="popUpDisplayReg">
		    	<span onClick="closePopUpRegistration()" class="closePop"><img alt="Close Popup" src="close.png" class="close"/></span>
		    <div class="data">
			<form onsubmit="alert('haha')">
			<div class="user-field">
			<div class="arrow_box" id="errorUsername" hidden>Your username must be at least 6 characters long, at least one uppercase character and one number, and no special symbols</div>
				<span class="user-field-text">Username:</span>
				<input type="text" id="regUsername" onkeyup="justalert(this)" required/>
			</div>
			<div class="user-field">
			<div class="arrow_box" id="errorPassword" hidden>Your password must be at least 6 characters long, at least one uppercase character and one number, and no special symbols</div>
				<span class="user-field-text">Password:</span>
				<input type="password" class="input-box" id="regPassword" onkeyup="justalert(this)"  required  />
			</div>
			<div class="user-field">
			<div class="arrow_box" id="errorConfirmPassword" hidden>Your password does not match</div>
				<span class="user-field-text">Confirm Password:</span>
				<input type="password" class="input-box" id="confirmPassword" onkeyup="justalert(this)" required  />
			</div>
			<input type="submit" value="Register" id="registerButton" disabled />
			</form>
		    </div>
		</div>
		</div>
		<div>
		</div>
<!-- END OF POPUP WINDOW -->

<!-- Popup window for forgotten password -->
	<div id="dimlayer2" class="dimLayer">
	<div id="popupPassword" class="popUpDisplay">
		    	<span onClick="closePopUpPassword()" class="closePop"><img alt="Close Popup" src="close.png" class="close"/></span>
		    <div class="data">
			<div class="user-field">
			<form>
				<span class="user-field-text">Email:</span>
				<input type="email" class="input-box" id="email" placeholder="youremail@csc.com" onmouseout="normalImg(this)"/>
			</div>
			<input type="submit" value="Retrieve" />
			</form>
		    </div>
			
		</div>
		</div>
<!-- END OF POPUP WINDOW -->




<!--MAIN CONTENT FOR LOGIN -->
	<div class="content">
		<form action="welcome.php" method="POST" onsubmit="return myFunctions()" id="loginForm">
			<div class="user-field">
				<span class="user-field-text">Username:</span>
				<input type="text" name="username" id="username" onkeyup="justalert(this)" required/>
			</div>
			<div class="user-field">
				<span class="user-field-text">Password:</span>
				<input type="password" class="input-box" id="password" required  />
			</div>
			<div id="linkRegistration">
		    <a href="javascript:openPopUpRegistration()">Sign in</a>
	    </div>
			<div id="linkPassword">
		    <a href="javascript:openPopUpPass()">Forgot your password?</a>
	    </div>
			<input type="submit" value="Log in" id="loginButton" />
		</form>
		
	</div>
</body>

</html>