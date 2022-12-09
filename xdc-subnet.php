<?php 
$title = "XDC - Create your Subnet using XDC Network";
$desc = "Visit this page to Create your Subnet using XDC Network. ";

include('inc/header.php') ?>
<link rel='stylesheet' href='assets/css/app-new.css' type='text/css' media='all' />

<section id="xdc-utility-banner" style="background: url('assets/images/xdc-protocol-banner-image2.png') #112b3c; background-repeat: no-repeat; background-position: bottom right;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="bannertext">
                <h1>Create your Subnet using XDC Network</h1>
                <p>An XDC mainnet-like network owned by you, further protected by the mainnet with total privacy.</p>
            </div>
            </div>
        </div>
    </div>
</section>



<section id="xdc-utility">
  <div class="container">
  	<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
            <div class="usecase-box">
                <h3 class="fw-7">Terminology Explained</h3>
                <div class="orderList">
                    <ul>
                        <li><span class="fw-7">XDC mainnet-like network:</span> The subnet replicates the XDC mainnet with customized configurations. It inherits all the highly desired features of the XDC mainnet, including:</li>
                        <ul>
                            <li>State-of-the-art consensus engine with the highest BFT security</li>
                            <li>Native EVM smart contract support so that you have an ocean of DApps to choose from or build your own</li>
                            <li>High transaction capacity of 2000 TPS</li>
                            <li>Direct access to all the great utility tools contributed by the active XDC developer community, such as wallets, explorers, forensics monitors, etc.</li>
                            <li>First-class support from the XDC core technical team</li>
                        </ul>
                        <li><span class="fw-7">Owned by you:</span> The subnet will be a sovereign blockchain independent of the XDC mainnet. It will keep running regardless of the status of the XDC mainnet. Its infrastructure and data are all owned by the customer.</li>
                        <li><span class="fw-7">Further protected by the mainnet:</span> Critical subnet consensus data is checkpointed to the XDC mainnet so that the history of the subnet is recorded in the XDC mainnet. Consequently, to successfully attack the subnet and revise its ledger (a.k.a. forking attack), the attacker will also need to fork the XDC mainnet. This way, the integrity and immutability of the subnet are protected by the XDC mainnet.<br />
                        <p class="pt-1">In other words, the subnet will only be compromised if both itself and the XDC mainnet are attacked. This increases the security level of the subnet to S_subnet + S_xdc, where the security level S is the cost of attacking a network.</p></li>
                        <li><span class="fw-7">Total privacy:</span> The subnet consensus data checkpointed to the XDC mainnet does not include nor imply any subnet transaction information. Thus, XDC mainnet users have no visibility into the subnet transactional data, which preserves the total privacy of the subnet.</li>
                    </ul>
                </div>
                <h3 class="fw-7">Visualization Suggestion</h3>
                <p>The XDC mainnet and its subnets resemble the solar system, where the XDC mainnet is the sun and the subnets are the planets.</p>
            </div>
            
            <div class="usecase-box nobordershadow">
                <h3 class="fw-7">Objectives</h3>
                <p>We design a subnet for XDC enterprise customers to have:</p>
                <div class="orderList">
                    <ol class="ml-4">
                        <li>a sovereign, permissioned, and high-performing blockchain (the subnet) fully owned by the customer</li>
                        <li>a security level of the subnet transactions equivalent to the sum security of the subnet AND the XDC mainnet</li>
                        <li>native EVM smart contract support</li>
                        <li>total privacy (i.e., no visibility) of the subset transactions on the XDC mainnet</li>
                    </ol>
                </div>
            </div>
        </div>
        </div>
    
   <div class="row flex-row align-items-center">
   		<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 mb-3">
        	<h3 class="fw-7">Architecture</h3>
            <p>The architecture consists of the following key components owned by the customer:</p>
            <div class="orderList">
            	<ol class="ml-4">
                	<li>a subnet driven by the XDC2.0 consensus engine, with system configurations tailored for the customer</li>
                    <li>a relayer program that checkpoint critical consensus data of the subnet to the XDC mainnet</li>
                    <li>a smart contract in the XDC mainnet that verifies and records the checkpoints</li>
                    <li>wallet APIs that enable additional protection of subnet transaction from the XDC mainnet</li>
           		</ol>
			</div>
            <p>The subnet will also natively support XDC's abundant utility tools such as blockchain explorer and forensic monitor.</p>
        </div>
        <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 mb-3">
   	    	<img src="assets/images/xdc-subnet-architecture.jpg" class="img-responsive" />
        </div>
   </div>
   
   <div class="row">
   		<div class="col-lg-12 mb-3">
            <h3 class="fw-7 text-center">For any queries, kindly <a href="https://forms.gle/KQxw5DVbrMYrHv5N9" target="_blank">Contact Us</a></h3>
        </div>
   </div>
    
    
    <!--<div class="row">    
    <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
        <div class="usecase-box">
            <h3 class="fw-7">Terminology Explained</h3>
            <div class="orderList">
                <ul>
                    <li><span class="fw-7">XDC mainnet-like network:</span> The subnet replicates the XDC mainnet with customized configurations. It inherits all the highly desired features of the XDC mainnet, including:</li>
                    <ul>
                    	<li>State-of-the-art consensus engine with the highest BFT security</li>
                        <li>Native EVM smart contract support so that you have an ocean of DApps to choose from or build your own</li>
                        <li>High transaction capacity of 2000 TPS</li>
                        <li>Direct access to all the great utility tools contributed by the active XDC developer community, such as wallets, explorers, forensics monitors, etc.</li>
                        <li>First-class support from the XDC core technical team</li>
                    </ul>
                    <li><span class="fw-7">Owned by you:</span> The subnet will be a sovereign blockchain independent of the XDC mainnet. It will keep running regardless of the status of the XDC mainnet. Its infrastructure and data are all owned by the customer.</li>
                    <li><span class="fw-7">Further protected by the mainnet:</span> Critical subnet consensus data is checkpointed to the XDC mainnet so that the history of the subnet is recorded in the XDC mainnet. Consequently, to successfully attack the subnet and revise its ledger (a.k.a. forking attack), the attacker will also need to fork the XDC mainnet. This way, the integrity and immutability of the subnet are protected by the XDC mainnet.<br />
                    <p class="pt-1">In other words, the subnet will only be compromised if both itself and the XDC mainnet are attacked. This increases the security level of the subnet to S_subnet + S_xdc, where the security level S is the cost of attacking a network.</p></li>
                    <li><span class="fw-7">Total privacy:</span> The subnet consensus data checkpointed to the XDC mainnet does not include nor imply any subnet transaction information. Thus, XDC mainnet users have no visibility into the subnet transactional data, which preserves the total privacy of the subnet.</li>
                </ul>
            </div>
            <h3 class="fw-7">Visualization Suggestion</h3>
            <p>The XDC mainnet and its subnets resemble the solar system, where the XDC mainnet is the sun and the subnets are the planets.</p>
        </div>
        
        <div class="usecase-box nobordershadow">
        	<h3 class="fw-7">Objectives</h3>
            We design a subnet for XDC enterprise customers to have:
            <div class="orderList">
                <ol class="ml-4">
                    <li>a sovereign, permissioned, and high-performing blockchain (the subnet) fully owned by the customer</li>
                    <li>a security level of the subnet transactions equivalent to the sum security of the subnet AND the XDC mainnet</li>
                    <li>native EVM smart contract support</li>
                    <li>total privacy (i.e., no visibility) of the subset transactions on the XDC mainnet</li>
                </ol>
            </div>
    	</div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
    </div>
    
    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
        <div class="usecase-box">
            <h3 class="fw-7">Optimum <span>(Recommended)</span></h3>
            <div class="orderList">
                <ul>
                    <li><span class="fw-7">3 Node Subnet  -</span>  USD 10,000 per month</li>
                    <li><span class="fw-7">Block explorer -</span> USD 10,000 per month</li>
                    <li><span class="fw-7">Bridge to XDC Mainnet (public functionality) -</span> Stake 1,000,000 XDC or 25,000 FXD</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
        <div class="usecase-box">
            <h3 class="fw-7">Enterprise <span>(Recommended)</span></h3>
            <div class="orderList">
                <ul>
                    <li><span class="fw-7">5 Node Subnet  -</span>  USD 15,000 per month</li>
                    <li><span class="fw-7">Block explorer -</span> USD 10,000 per month</li>
                    <li><span class="fw-7">Bridge to XDC Mainnet (public functionality) -</span> Stake 2,000,000 XDC or 50,000 FXD</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
        <div class="usecase-box">
            <h3 class="fw-7">Enterprise <span>(Recommended)</span></h3>
            <div class="orderList">
                <ul>
                    <li><span class="fw-7">10 Node Subnet  -</span>  USD 30,000 per month</li>
                    <li><span class="fw-7">Block explorer -</span> USD 20,000 per month</li>
                    <li><span class="fw-7">Bridge to XDC Mainnet (public functionality) -</span> Stake 5,000,000 XDC or 125,000 FXD</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
        <div class="usecase-box">
            <h3 class="fw-7">XDC Supernet <span>(Recommended)</span></h3>
            <div class="orderList">
                <ul>
                    <li><span class="fw-7">30 Node Subnet  -</span>  USD 100,000 per month</li>
                    <li><span class="fw-7">Block explorer -</span> USD 40,000 per month</li>
                    <li><span class="fw-7">Bridge to XDC Mainnet (public functionality) -</span> Stake 10,000,000 XDC or 250,000 FXD</li>
                </ul>
            </div>
        </div>
    </div>
    
    </div>-->
    
  </div>
</section>

<!--<script>
    var activeUrl = localStorage.getItem("currentUrl");
    $('.nav.navbar-nav li:nth-child(3)').addClass('active');
</script>-->


<?php include('inc/footer.php') ?>
