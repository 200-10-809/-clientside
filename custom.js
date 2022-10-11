function send_message(){

	var name=jQuery("#name").val();
	var email=jQuery("#email").val();
	var mobile=jQuery("#mobile").val();
	var message=jQuery("#message").val();
	
	if(name==""){
		alert('Please enter name');
	}else if(email==""){
		alert('Please enter email');
	}else if(mobile==""){
		alert('Please enter mobile');
	}else if(message==""){
		alert('Please enter message');
	}else{
		jQuery.ajax({
			url:'send_message.php',
			type:'post',
			data:'name='+name+'&email='+email+'&mobile='+mobile+'&message='+message,
			success:function(result){
				alert(result);
			}	
		});
	}
}

function user_register(){

	jQuery('.field_error').html('');
	var name=jQuery("#name").val();
	var email=jQuery("#email").val();
	var mobile=jQuery("#mobile").val();
	var password=jQuery("#password").val();
	var is_error='';
	if(name==""){
		jQuery('#name_error').html('Please enter name');
		is_error='yes';
	}
	if(email==""){
		jQuery('#email_error').html('Please enter email');
		is_error='yes';
	}
	if(mobile==""){
		jQuery('#mobile_error').html('Please enter mobile');
		is_error='yes';
	}
	if(password==""){
		jQuery('#password_error').html('Please enter password');
		is_error='yes';
	}

		if(is_error==''){
		jQuery.ajax({
			url:'register_submit.php',
			type:'post',
			data:'name='+name+'&email='+email+'&mobile='+mobile+'&password='+password,
			success:function(result){
				alert(result);
				if(result=='email_present'){
					jQuery('#email_error').html('Email id already present!');
				}
				if(result=='mobile_present'){
					jQuery('#mobile_error').html('Mobile number already present!');
				}
				if(result=='completed'){
					jQuery('.register_msg p').html('Thank you for Registeration');
				}
			}	
		
		});
	
	}
}




function login_user(){

	jQuery('.field_error').html('');
	var email=jQuery("#lemail").val();
	var password=jQuery("#lpassword").val();
	var is_error='';
	if(email==""){
		jQuery('#lemail_error').html('Please enter email');
		is_error='yes';
	}
	if(password==""){
		jQuery('#lpassword_error').html('Please enter password');
		is_error='yes';
	}

		if(is_error==''){
		jQuery.ajax({
			url:'login_submit.php',
			type:'post',
			data:'email='+email+'&password='+password,
			success:function(result){
				alert(result);
				if(result=='wrong'){
					jQuery('.login_msg p').html('Please Enter Valid Login details! ');
				}
				if(result=='valid'){
					window.location.href="index.php";
				}
			}	
		
		});
	
	}
}
