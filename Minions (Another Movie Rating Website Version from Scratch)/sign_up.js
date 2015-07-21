$(document).ready(function() {
	


	function checkUserName(usr){

		if(!usr.match(/^[A-Za-z0-9]{3,10}$/))
			return false;
		else 
			return true;
		
		
		
	}

	function checkEmail(em){
		if(!em.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
			
		
			return false;
		else
			return true;

			
	}
	function checkPassword(password){
			var strength = 0;


			if(password.length < 4){
				return "too short";
			}

			if(password.length > 5)
				strength += 1;

			if(password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))
				strength += 1;
			if(password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))
				strength += 1;
			if(password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,",%,&,@,#,$,^,*,?,_,~])/))
				strength += 1;

			if(strength < 2){
				return "weak";
			}

			else if(strength == 2)
				return "good";
			else
				return "strong";
	}


	function checkConfirm(confirm){
		if(confirm != $("#passwordsignup").val())
			
			return false;
		else 
			return true;
			
	}


		var uvalid = 'false';
		var evalid = 'false';
		var pvalid = 'false';
		var cvalid = 'false';


	$(".signup_submit").click(function(){


		var userCheck =	checkUserName($("#usernamesignup").val());
		var emailCheck =	checkEmail($("#emailsignup").val());
		var passwordCheck =	checkPassword($("#passwordsignup").val());
		var confirmCheck =	checkConfirm($("#passwordsignup_confirm").val());

	
			if($("#usernamesignup").val() == ""){
				$(".userError").html("Please enter user");
				return false;

			}	
			else{


				if(userCheck == false){
						$(".userError").html("Invalid user name, length is 3 - 10, no special character");
						return false;
				}		

				else{
						uvalid = 'true';
						$(".userError").html("");
					}
			}
			if($("#emailsignup").val() == ""){
				$(".emailError").html("Please enter email");
				return false;
			}

			else{
				if(emailCheck == false){
					$(".emailError").html("Invalid email, should be XXX@XXX.XXX");
					return false;
				}
				else{
					evalid = 'true';
					$(".emailError").html("");
				}


			}
			if($("#passwordsignup").val()== ""){
				$(".passwordError").html("Please enter password");
				return false;
			}
			else{

				if(passwordCheck == "too short"){
					$(".passwordError").html("Password is too short");
					return false;
				}
				if(passwordCheck == "weak"){
					$(".passwordError").html("Password is too weak(you can add 1 special character such as !@# etc.)");
					return false;
				}
				if(passwordCheck == "good"){
					pvalid = 'true';
					$(".passwordError").html("Password is good");
				}
				if(passwordCheck == "strong"){
					pvalid = 'true';
					$(".passwordError").html("Password is strong");
				}
			}
			if($("#passwordsignup_confirm").val()==""){
				$(".confirmError").html("Please confirm password");
				return false;
			}
			else{


				if(confirmCheck == false){
					$(".confirmError").html("Passwords are not match");
					return false;

				}		
				else{
						cvalid = 'true';
						$(".confirmError").html("");
						$.ajax({
				type:"POST",
				url:'sign_up.php',
				data:{
					emailsignup: $("#emailsignup").val(),
					usernamesignup: $("#usernamesignup").val()
				},
				success: function(data){
					console.log("result is "+data);
                  //          alert(data);
					if(data == 'success'){  //equal value and equal type



						$.ajax({
							type:"POST",
							url:'signup.php',
							data:{
								usernamesignup:$("#usernamesignup").val(),
								emailsignup:$("#emailsignup").val(),
								passwordsignup:$("#passwordsignup").val(),
								select_gender:$("#select_gender").val(),
								select_year:$("#select_year").val(),
								select_month:$("#select_month").val(),
								select_day:$("#select_day").val()
							},
							success:function(data){
								console.log("second result is "+data);
								if(data == 'fetch')
									document.location.href = "welcome.php";
							}



						});
						return false;
						

					}  
					
					else{
						$(".signError").html("The username or email has already existed. Please change them");
						
						
					}




			}


			});

			return false;
	
				}

			}
			


		});


	/*	if(uvalid == 'true' && evalid == 'true' && pvalid == 'true' && cvalid == 'true'){

			$.ajax({
				type:"POST",
				url:'sign_up.php',
				data:{
					emailsignup: $("#emailsignup").val(),
					usernamesignup: $("#usernamesignup").val()
				},
				success: function(data){
					console.log("result is "+data);
                  //          alert(data);
					if(data == 'success'){  //equal value and equal type



						$.ajax({
							type:"POST",
							url:'signup.php',
							data:{
								usernamesignup:$("#usernamesignup").val(),
								emailsignup:$("#emailsignup").val(),
								passwordsignup:$("#passwordsignup").val(),
								select_gender:$("#select_gender").val(),
								select_year:$("#select_year").val(),
								select_month:$("#select_month").val(),
								select_day:$("#select_day").val()
							},
							success:function(data){
								console.log("second result is "+data);
								if(data == 'fetch')
									document.location.href = "welcome.php";
							}


						});
						return false;
						

					}  
					
					if(data === 'fail'){
						$(".signError").html("need change");
						
						
					} 
			}


			});

			return false;
	




		}		

*/
	

	
	

});












