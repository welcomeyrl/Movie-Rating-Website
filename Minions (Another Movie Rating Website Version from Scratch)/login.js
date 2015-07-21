$(document).ready(function() {
	


	$(".submit").click(function(){

		if($("#username").val()==""||$("#password").val() =="")
			$(".error").html("Please enter both username and password");
		else{
			
			$.ajax({
				type:"POST",
				url:'login.php',
				data:{
					username: $("#username").val(),
					password: $("#password").val()
				},
				success: function(data){


					if(data == 'Admin'){

						document.location.href = 'administrator.html';
					}

					if(data == 'Successful'){  //equal value and equal type
						document.location.href = 'regular.php';
						

					}  
					
					if(data == 'Failed'){
						$(".error").html("Please enter right username and password");
						
						
					} 
				}


			});

			return false;
		}

	});

	
	

});
	