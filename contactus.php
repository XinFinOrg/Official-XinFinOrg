<?php
$title = "Contact Us | XinFin Hybrid Blockchain";
$desc = "Let your business cross the horizon by using XinFin’s fast and secure XDC tokens. Contact us Now.";

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
				<h1> CONTACT US</h1>
				<p>Use the XDC token on the public state that is identical in functionality to public blockchains.<br/> Or set up private networks to run enterprise use cases.</p>
			</div>
		</div>
	</div>
</section>

<section id="contact" style="background: #f3f3f3">
    <div class="container">
        <div class="tab-content" style="background: #fff; margin-bottom:10%">
            <div id="network">
				<div class="row">
                    <div class="col-md-12">
                        <h3>GET IN TOUCH IN XINFIN</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                        <h4>Send Us Your Query, We Will Reply You Promptly!</h4>
                        <br/><br/>
                        <form action="#" method="" id="contactForm">
                            <div class="form-group">
                                <label for="email">Name (required)</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email (required)</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Contact Number (required)</label>
                                <input type="text" class="form-control" id="contact_number" name="contact" maxlength="10" minlength="10" onkeypress="return isNumber(event)">
                            </div>
                            <div class="form-group">
                                <label for="email">Comments</label>
                                <textarea class="form-control" id="comments" name="comments"></textarea>
                            </div>
                            <br/>
                            <!-- <div class="checkbox">
								<label><input type="checkbox" name="remember"> Remember me</label>
							</div> -->
                            <button type="button" id="contactBtn" class="btn btn-default submitbtn">Submit</button>
                        </form>
                    </div>
                </div>

                <br/><br/>

                <div class="row">
                    <div class="col-md-5">
                        <p class="contactpara">CONTACT INFO</p>
                        <hr style="margin-top: 0px; ">
                        <p style="margin: 0 auto; text-align: center;"><a href="mailto:info@xinfin.org" style="font-size: 18px; color: #002752">info@xinfin.org</a></p>
                    </div>

                    <div class="col-md-2 line1" style="">
                        <p class="line1p"></p>
                    </div>

                    <div class="col-md-5">
                        <p class="contactpara">CONNECT WITH US</p>
                        <hr style="margin-top: 0px; ">
                        <p class="socialicons1">
                            <a href="https://t.me/xinfintalk" target="_blank"><i class="fa fa-paper-plane"></i></a>
                            <a href="https://www.linkedin.com/company/xinfin/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/channel/UCQaL6FixEQ80RJC0B2egX6g" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://twitter.com/xinfinf" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/XinFinHybridBlockchain/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://github.com/XinFinorg" target="_blank"><i class="fa fa-github"></i></a>
                            <a href="https://www.reddit.com/r/xinfin/" target="_blank"><i class="fa fa-reddit"></i></a>
                            <a href="https://xinfin-public.slack.com/" target="_blank"><i class="fa fa-slack"></i></a>
                        </p>
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
	var phone_pattern = /^[0-9]+$/;
  
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
		phone_val = $("#contact_number").val();
		var phone_val_len = phone_val.length;
		console.log("phone_val_len : "+phone_val_len);
		
		user_name_match  = user_name_val .match(name_pattern);
		email_match  = email_val.match(email_pattern);
		phone_match  = phone_val.match(phone_pattern);
	
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
			$('#name').attr("placeholder","Enter Your Name");
			$('#name').addClass('inputTxtError1');
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
			$('#email').attr("placeholder","Enter Your Email");
			$('#email').addClass('inputTxtError1');
			validation = false;
		}
		
		if(phone_val!= '')
		{
			console.log("if phone_val : "+phone_val);
			if(phone_match === null)
			{
				console.log("if phone_match : "+phone_val);
				validation = false;
				$('#contact_number').val('');
				$('#contact_number').attr("placeholder","Invalid format");
				$('#contact_number').addClass('inputTxtError1');
			}else{
				console.log("else phone_match : "+phone_val);
				$('#contact_number').parent().find('.error').text("span").remove();
				$('#contact_number').removeClass('inputTxtError1');
			}
		}
		else{
			console.log("else phone_val : "+phone_val);
			$('#contact_number').attr("placeholder","Enter Your Phone Number");
			$('#contact_number').addClass('inputTxtError1');
			validation = false;
		}
		if(phone_val_len == 0){
			console.log("phone_val_len : "+phone_val_len);
			$('#contact_number').attr("placeholder","Please enter 10 digit number");
			$('#contact_number').addClass('inputTxtError1');
			validation = false;
		} 
	
	
		if(validation)
		{
			//console.log('If Block');
			$('#contactBtn').text("Submitting...");
			$.ajax({
				type: "POST",
				url: "contactpost.php",
				data: $("#contactForm").serialize(), // serializes the form's elements.
				beforeSend: function() {
					// alert(data);
					//alert("before send");
				},
				success: function(data)
				{  
					console.log(data);
					$('#contactBtn').text("SUBMIT");
					$('#contactForm')[0].reset();
					$('#name').attr('placeholder', 'User Name');
					$('#email').attr('placeholder', 'Email Id');
					$('#contact_number').attr('placeholder', 'Mobile Number');                                
					if(data == "mailsentmailsent"){
					  window.location = "thankyou.php";
					}					
					else{
						alert("Mail  Not Sent!!");
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
