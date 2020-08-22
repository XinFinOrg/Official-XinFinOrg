<?php
$title = "Apply for Funding | XinFin Hybrid Blockchain";
$desc = "How to Fund Your Next Blockchain Project?. Apply for Funding Now.";

include('inc/header.php') ?>
<style>
.inputTxtError1 {
    border: 1px solid #f00!important;
}
</style>

<section id="contactbanner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 bannertext">
				<h1>Apply For Funding</h1>
				<p>How to Fund Your Next Blockchain Project?</p>
			</div>
		</div>
	</div>
</section>

<!--<section id="contact" style="background: #f3f3f3">-->
<section id="contact" class="xifin-dpos-consensus">
    <div class="container">
        <!--<div class="tab-content" style="background: #fff; margin-bottom:10%">-->
		<div class="tab-content">
            <div id="network">
				
                <div class="row" style="margin-top: 0%; padding-bottom: 0px;">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p>Here is the XDC Ecosystem Co-Builder Plan. XinFin's XDC Network aims at encouraging and supporting XDC Network-based Startups, DApp developers, freelance developers, and Blockchain VC to build the XDC ecosystem, providing them with a platform for long-term communication and cooperation with XinFin Network-based EcoSystem.</p>
                            <p class="link-break-out"><strong>This Eco System support is only to build and promote using XDC blockchain Networks and tools given at the link: <a href="https://xinfin.org/xdc-chain-network-tools-and-documents">https://xinfin.org/xdc-chain-network-tools-and-documents</a></strong></p>
                            <p class="mb-1"><strong>What We Can Offer</strong></p>
                            <ul class="mb-3">
                                <li>Capital Support</li>
                                <li>Technical Support</li>
                                <li>Community Promotion</li>
                            </ul>
                            
                            <!-- steps 
                            <div class="steps-howTo">
                            	<div class="step">
                                    <div class="step-milestone"></div>
                                    <span class="step-title">Capital Support</span>
                                </div>
                                <div class="step">
                                    <div class="step-milestone"></div>
                                    <span class="step-title">Technical Support</span>
                                </div>
                                <div class="step">
                                    <div class="step-milestone"></div>
                                    <span class="step-title">Community Promotion</span>
                                </div>
							</div><!-- steps -->
							
							
							<div class="row flex-row icons-pop-section">
								<div class="col-md-12"><p class="sub-header mb-3 text-center">To be considered for funding, please send a full business plan to in this given format:</p></div>
								<div class="col-sm-6">
									<div class="flex-layout">
										<div class="pop-ico"><i class="fa fa-check"></i></div>
										<div class="pop-ico-content">
											<div class="pop-ico-title">WHAT MATTERS / Eligibility Criteria</div>
											<div class="pop-ico-dsc">
											<p>What is the problem you are trying to solve using XDC Blockchain Network?</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="flex-layout">
										<div class="pop-ico"><i class="fa fa-check"></i></div>
										<div class="pop-ico-content">
											<div class="pop-ico-title">MVP / DEMO System</div>
											<div class="pop-ico-dsc">
											<p>A minimum viable product should be Ready for Demo.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="flex-layout">
										<div class="pop-ico"><i class="fa fa-check"></i></div>
										<div class="pop-ico-content">
											<div class="pop-ico-title">Team</div>
											<div class="pop-ico-dsc">
											<p>Brief Profile about the founders, core team Members, Legal team, or advisors.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="flex-layout">
										<div class="pop-ico"><i class="fa fa-check"></i></div>
										<div class="pop-ico-content">
											<div class="pop-ico-title">Projection on Milestones/Financials</div>
											<div class="pop-ico-dsc">
											<p>Funding requirements should link with Milestones or Financial goal Achievement.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
                            <p class="sub-header mt-5">Apply for the Funding:</p>
							
                        </div>
                    </div>
                    
                <div class="row">
                    <div class="col-md-7">
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
                            <!--<div class="form-group">
                            	<label for="supporting-document">Upload your Pitch Deck here <span>(.pdf, .xls, .doc, .ppt, images upto 5MBmax)</span></label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                        <span class="btn btn-primary" onClick="$(this).parent().find('input[type=file]').click();">Browse</span>
                                        <input name="uploaded_file" id = "uploaded_file"onChange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" accept=".pdf" style="display: none;" type="file">
                                        </span>
                                        <span class="form-control"></span>
                                    </div>
                                    <label for="supporting-document" style="display:none" class ="error"id="error">Please upload correct file format.</label>
                                    <label for="supporting-document" style="display:none" class="error"id="error1">Images upto 5MB max</label>
                            </div>-->
                            <div class="form-group">
                                <label for="email">Comments <span>(Pitch Deck URL, Project Document URL Etc.)</span></label>
                                <textarea class="form-control" id="comments" name="comments"></textarea>
                            </div>
							<div class="form-group">
								<div class="g-recaptcha" data-sitekey="6Lere-8UAAAAAIhU_6OquF27rHJR7Kqfa1y70oeY"></div>
								<p id="gcaptch"></p>
                            </div>
                            <button type="button" id="contactBtn" class="btn-hover color-1 submitbtn">Submit</button>
                        </form>
                    </div>					
                </div>
                <br/>
                <br/>
            </div>
        </div>
        <div class="clear"></div>

    </div>
</section>


<script>
    var activeUrl = localStorage.getItem("currentUrl");
    $('.nav.navbar-nav li:nth-child(7)').addClass('active');
</script>

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
		var 
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

		if(grecaptcha.getResponse() == "") {
			$('#gcaptch').text("You must verify reCAPTCH");
			$('#gcaptch').addClass("text-danger");
			validation = false;
		}else{
			$('#gcaptch').hide();
		}
	
	
		if(validation)
		{
			//console.log('If Block');
			$('#contactBtn').text("Submitting...");
			// console.log($("#contactForm").serialize());
			// alert('hi');
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
