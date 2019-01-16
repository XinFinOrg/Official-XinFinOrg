
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12" style="text-align: left">
                <!-- <a href="index.php"><img src="assets/images/logo.png" width="65"></a><br/><br/> -->
                <h1>About XinFin</h1>
                <!--<p><span>About XinFin</span><br/>-->
                <p>
                <a href="about.php">About Community</a><br/>
                <a href="xinfin-consensus.php">Public DPOS Consensus</a><br/>
		<a href="resources.php">Resource Guide</a><br/>
                <a href="https://status.xinfin.org/">XinFin Network Status</a><br/>
                <a href="developers.php">Developers Portal</a><br/>
                <a href="https://github.com/XinFinOrg/Open-Hackathon" target="_blank">Online Hackathon</a></p>
			</div>
			
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h1>More..</h1>
                <!--<p><span>More..</span><br/>-->
                <p>
		<a href="setup-masternode.php">Setup MasterNode</a><br/>
                <a href="faq.php">Read our FAQ</a><br/>
                <a href="xdc-utility.php">XDC/XDCe Utility</a><br/>
                <a href="bounty.php">Community Bounty Program</a><br/>    
		<a href="https://github.com/XinFinorg">Source Code on GitHub</a><br/>
              
            				</div>		
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <h1>Other Links</h1>
                <!--<p><span>Other Links</span><br/>-->
                <p>

                <a href="download.php">Download our Logo</a><br/>
                <a href="https://xinfin.io">XDC/XDCE Exchange List</a><br/>
                <a href="compliance.php">Compliance</a><br/>
                <a href="privacy.php">Privacy Policy</a><br/>
		<a href="disclaimer.php">Disclaimer</a></p>
		<a href="contactus.php">Press Inquiry</a><br/>	
		<a href="contactus.php">Contact XinFin</a></p>
			</div>
			
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <h1>Follow us</h1>
                <p><!--<span>Follow us</span><br/>-->
                    <span class="socialicons">
                        <a href="https://twitter.com/XinFin_Official" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/XinFinHybridBlockchain/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://github.com/XinFinorg" target="_blank"><i class="fa fa-github"></i></a>
                        <a href="https://bitcointalk.org/index.php?topic=1989818.0" target="_blank"><i class="fa fa-btc"></i></a>
                        <a href="https://www.linkedin.com/company/xinfin/" target="_blank"><i class="fa fa-linkedin"></i></a><br/>
                        <a href="https://www.youtube.com/channel/UCQaL6FixEQ80RJC0B2egX6g" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="https://t.me/xinfintalk" target="_blank"><i class="fa fa-paper-plane"></i></a>
                        <a href="https://www.reddit.com/r/xinfin/" target="_blank"><i class="fa fa-reddit"></i></a>
						<a href="https://www.meetup.com/members/270624533/" target="_blank"><i class="fa fa-meetup"></i></a>
						<a href="https://medium.com/xinfin" target="_blank"><i class="fa fa-medium"></i></a>
                    </span>
                </p>
            </div>
		</div>
	</div>

	<!-- <div class="container">
        <div class="row">
            <div class="col-md-12" ><p style="padding-top: 20px">2018@xinfin.org | All rights Reserved</p></div>			
        </div>
	</div> -->
</footer>


<script src="assets/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>

<script>
 
 $(document).ready(function() {
  $("#toggle").click(function() {
    var elem = $("#toggle").text();
    if (elem == "Read More") {
      //Stuff to do when btn is in the read more state
      $("#toggle").text("Read Less");
      $("#text").slideDown();
    } else {
      //Stuff to do when btn is in the read less state
      $("#toggle").text("Read More");
      $("#text").slideUp();
    }
  });
});
</script>
 	
</div>
 	
</body>

</html>
