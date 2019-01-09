<?php
$title = "List your Application | XinFin Blockchain Technology Company";
$desc = "Do you have an application built around XDC Network that you want to get listed? Just fill the form with required details and see your app listed as soon as possible.";

include('inc/header.php') 
?>
<style>
.inputTxtError1 {
    border: 1px solid #f00!important;
}
</style>
<section id="contactbanner"> 
<!--   <div id="particle-canvas" ></div> -->
	<div class="container">
		<div class="row">
			<div class="bannertext">
				<h1> List your Application</h1>
				<p>Do you have an application built around XDC Network that you want to get listed? Just fill the form with required details and see your app listed as soon as possible.</p>
			</div>
		</div>
	</div>
</section>

<section id="contact" style="background: #f3f3f3">
    <div class="container">
        <div class="tab-content" style="background: #fff; margin-bottom:10%">
            <div id="network">
				<!--<div class="row">
                    <div class="col-md-12">
                        <h3>GET IN TOUCH IN XINFIN</h3>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h4>Fill the form with required details, We will list your Application Promptly!</h4>
                        <br/><br/>
                        <form action="#" method="" id="contactForm">
                            <div class="row pb-0">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Application Logo Url* <span>(Should be 500x300px)</span></label>
                                <input type="text" class="form-control" id="applicationLogoUrl" name="applicationLogoUrl" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Application Name*</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Application Website Url*</label>
                                <input type="text" class="form-control" id="applicationUrl" name="applicationUrl" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">GitHub Url</label>
                                <input type="text" class="form-control" id="githubUrl" name="githubUrl" required>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Description</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">API Url</label>
                                <input type="text" class="form-control" id="apiUrl" name="apiUrl" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">YouTube Video Url</label>
                                <input type="text" class="form-control" id="youtubeUrl" name="youtubeUrl" required>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Brief with industry benefits</label>
                                <textarea class="form-control" id="briefIndustryBenefits" name="briefIndustryBenefits"></textarea>
                            </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <div class="form-group">
                                    <label for="email">Email*</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>                            
                            <div class="col-md-12">
                            	<button type="button" id="contactBtn" class="btn btn-default submitbtn">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>

    </div>
</section>

<?php include('inc/footer.php') ?>

<script>
$(document).ready(function(){
	// START OF FORM VALIDATION SCRIPT
	var data = {};
	var name_pattern=/^[A-Za-z .'-]+$/;
	var email_pattern=/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
	//var phone_pattern = /^[0-9]+$/;
	//var url_pattern =/^((http[s]?|ftp):\/)?\/?([^:\/\s]+)((\/\w+)*\/)([\w\-\.]+[^#?\s]+)(.*)?(#[\w\-]+)?$/;
	var url_pattern =/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
  
	$(document).on('focus', 'input,select', function() {
		$(this).removeClass('inputTxtError1');
	});
	$(document).on('focus', 'textarea', function() {
		$(this).removeClass('inputTxtError');
	});
  
	$("#contactBtn").click(function()
	{
		var validation = true;
		user_name_val = $("#name").val().trim();
		$("#name").val(user_name_val);
		email_val = $("#email").val();
		applicationLogoUrl_val = $("#applicationLogoUrl").val();
		applicationUrl_val = $("#applicationUrl").val();
		//phone_val = $("#contact_number").val();
		//var phone_val_len = phone_val.length;
		//console.log("phone_val_len : "+phone_val_len);
		
		user_name_match  = user_name_val.match(name_pattern);
		email_match  = email_val.match(email_pattern);
		applicationLogoUrl_match  = applicationLogoUrl_val.match(url_pattern);
		applicationUrl_match  = applicationUrl_val.match(url_pattern);
		//phone_match  = phone_val.match(phone_pattern);
	
		
		if(applicationLogoUrl_val!= '')
		{
			if(applicationLogoUrl_match === null){
				validation = false;
				$('#applicationLogoUrl').val('');
				$('#applicationLogoUrl').attr("placeholder","Invalid format");
				$('#applicationLogoUrl').addClass('inputTxtError1');
			}else{
				$('#applicationLogoUrl').parent().find('.error').text("span").remove();
				$('#applicationLogoUrl').removeClass('inputTxtError1');
			}
		}else{
			$('#applicationLogoUrl').attr("placeholder","Enter your Application Logo url");
			$('#applicationLogoUrl').addClass('inputTxtError1');
			validation = false;
		}
		
		if(user_name_val!= '')
		{
			if(user_name_match === null){
				validation = false;
				$('#name').val('');
				$('#name').attr("placeholder","Invalid format");
				$('#name').addClass('inputTxtError1');
			}else{
				$('#name').parent().find('.error').text("span").remove();
				$('#name').removeClass('inputTxtError1');
			}
		}else{
			$('#name').attr("placeholder","Enter your Application name");
			$('#name').addClass('inputTxtError1');
			validation = false;
		}		
		
		if(applicationUrl_val!= '')
		{
			if(applicationUrl_match === null){
				validation = false;
				$('#applicationUrl').val('');
				$('#applicationUrl').attr("placeholder","Invalid format");
				$('#applicationUrl').addClass('inputTxtError1');
			}else{
				$('#applicationUrl').parent().find('.error').text("span").remove();
				$('#applicationUrl').removeClass('inputTxtError1');
			}
		}else{
			$('#applicationUrl').attr("placeholder","Enter your Application website url");
			$('#applicationUrl').addClass('inputTxtError1');
			validation = false;
		}
		
		if(email_val!= '')
		{
			if(email_match === null){
				validation = false;
				$('#email').val('');
				$('#email').attr("placeholder","Invalid format");
				$('#email').addClass('inputTxtError1');
			}else{
				$('#email').parent().find('.error').text("span").remove();
				$('#email').removeClass('inputTxtError1');
			}
		}else{
			$('#email').attr("placeholder","Enter your Email");
			$('#email').addClass('inputTxtError1');
			validation = false;
		}
			
		if(validation)
		{
			//console.log('If Block');
			$('#contactBtn').text("Submitting...");
			$.ajax({
				type: "POST",
				url: "applicationpost.php",
				data: $("#contactForm").serialize(), // serializes the form's elements.
				beforeSend: function() {
					//console.log('before', data);
					//alert(data);
					//alert("before send");
				},
				success: function(data)
				{  
					console.log('after:',data);
					$('#contactBtn').text("SUBMIT");
					$('#contactForm')[0].reset();
					$('#applicationLogoUrl').attr('placeholder', 'Application Logo url');
					$('#name').attr('placeholder', 'User Name');
					$('#applicationUrl').attr('placeholder', 'Application Website url');
					$('#email').attr('placeholder', 'Email Id');
					//$('#contact_number').attr('placeholder', 'Mobile Number');                                
					if(data == "mailsentmailsent"){
					  window.location = "thankyou.php";
					}					
					else{
						alert("Mail Not Sent!!");
					}
				}
			});
		}
	}); 
});
 function isNumber(evt) {
	   evt = (evt) ? evt : window.event;
	   var charCode = (evt.which) ? evt.which : evt.keyCode;
	   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		   return false;
	   }
	   return true;
   }
    </script>