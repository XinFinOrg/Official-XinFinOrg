<?php 
$desc = "";
include('inc/header.php') ?>

<section id="contactbanner"> 
	<!--  <div id="particle-canvas" ></div> -->
	<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 bannertext">
                <h1>Guide To Set Up XinFin Master Node</h1>
                <p class="mb-2">This guide assumes foundational knowledge about blockchain technology and linux operating system. Ideally, person with technical background would be most suited. Also, careful thought has to be given to security aspect if hardware wallets are not being put into use.</p>
                <p>Commercial masternode hosting services are also available in the market giving you the benefit of reduced workload of managing the operations.<br/><br/><br/><br/><br/><br/><br/><br/></p>
            </div>    
        </div>
    </div>
</div>



<section id="protocol" class="setup-masternode">
	<div class="container">
        <div class="tab-content">
            <div id="network" class="tab-pane fade in active">
                <div class="row" style="margin-top:0%;padding-bottom:0px;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1>Before You Begin</h1>
                        <p>This guide will demonstrate how to set up a single masternode for the very first time. You will need the following before starting:</p>                        
                        <Div class="orderList">
                        <ol>
                            <li> At least 10,000,000 XDC with masternode holder to perform proof-of-stake consensus seamlessly.</li>
                            <li> Wallet to store XDC tokens, preferably hardware.</li>
                            <li> Dedicated and stable hardware environment.</li>
                            <li> Dedicated Static Public IP address.</li>
                            <li> 100% network uptime by IDC network.</li>
                            <li> Minimum tier 3+ IDC environment.</li>
                            <li> (Optional, but highly recommended) Virtual Private Server (VPS).</li>
                            <li> For cloud based services, Amazon EC2's m3.large VM size would be appropriate. Similar configuration is applicable for Microsoft Azure Cloud network.</li>
                        </ol> 
                        </Div>                       
                        
                        <p class="sub-header mb-5">This guide will cater to the following system configurations:</p>
                        <div class="row">
                        	<div class="col-md-6">
                            	<div class="configurationsBox">
                           	    <img src="assets/images/masternode/os-icon.png" class="img-responsive"/>
                                <h1>Operating System</h1>
                                <p>CentOS or RedHat Enterprise Linux (latest release) or Ubuntu (15.04+) supported</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                            	<div class="configurationsBox">
                           	    <img src="assets/images/masternode/development-icon.png" class="img-responsive"/>
                                <h1>Development</h1>
                                <p>Mac OS X, Windows (64-bit), or most Linux distributions</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <p>Any network participant will be able to vote for eligible Validators.</p>
                       </div>
                        
                    </div>
                </div>
            </div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</section>


<?php include('inc/footer.php') ?>
