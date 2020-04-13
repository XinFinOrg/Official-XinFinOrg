<?php 
$title = "Masternode setup guide";
$desc = "How to setup XDC Masternode";

include('inc/header.php') ?>

    <section id="contactbanner">
        <!--  <div id="particle-canvas" ></div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 bannertext">
                    <h1>Guide To Set Up XinFin Master Node</h1>
                    <p class="mb-2">XinFin offers the first and only genuinely one-click Masternode deployment. Our Masternode One-Click Installer has been heralded by many as the easiest solution for setting up a Masternode and earning XDC.</p>
                    <p>You can download the latest 64-bit stable release of XinFin - One Click Installer for our primary platforms below. Packages for all supported platforms, as well as develop builds, can be found further down the page.
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                    </p>
                </div>
            </div>
        </div>
        </div>

        <section id="protocol" class="setup-masternode">
            
			<div class="container-fluid">
			<div class="row">
			<div class="setup-masternode-row">
				<!--<div class="container">-->
					<ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#one-click-installer">One click installer</a></li>
						<li><a data-toggle="tab" href="#docker">Docker</a></li>
						<li><a data-toggle="tab" href="#faqs">FAQ's</a></li>
						<li><a data-toggle="tab" href="#about-xinfin-masternode">About XinFin Masternode</a></li>
					</ul>
				<!--<div class="container">-->
			</div>
			</div>
			</div>
			
			<div class="container">
                <div class="tab-content">
                    
					<div id="about-xinfin-masternode" class="tab-pane fade">
					<div id="network">
                        <div class="row" style="margin-top:0%;padding-bottom:0px;">						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<p class="header mt-0 mb-3">About XinFin Masternode</p>
                                <p>XinFin's token XDC supplants proof-of-work consensus algorithm (popularly linked with mining) with proof-of-stake consensus algorithm, fundamentally using the concept of "validators".</p>
                                <p>Validators are special nodes used in the XDPoS consensus algorithm which validate each transaction occurring on the blockchain network. The result of this validation is to finally append the transaction on the blockchain. A transaction may be accepted by the validator or rejected. (<strong>Important:</strong> There can be multiple validator nodes in each network.) </p>
                                <p>Decisions made by these validator nodes are broadcasted through the network as messages which are signed (attested) using validated cryptographic public key. Every validator node running XDC protocol in the RCL network is responsible for deciding its Unique Node List (UNL). This list holds information about which regular nodes does the validator care about.</p>
                                <p><strong>To set up a Masternode, make sure your XDC protocol running node is publicly identified and has gone through the compliance process. Every Node Holder need to upload KYC document and this detail will be visible to the public network.</strong></p>

                                <p class="sub-header mb-3">Why set up a Masternode at all?</p>
                                <p>It is necessary to set up a Masternode to operate on XDC protocol because Masternodes make the decentralised blockchain network self-sustainable. Deploying Masternode is conducive to trusted, scalable decentralised network infrastructure. Such an environment facilitates greater stability and reliability on the network.</p>

                                <p class="sub-header mb-3">Functions of Masternode</p>
                                <p>In XDPoS blockchain environment, Masternode concept is cardinal to the functioning. A Masternode validates each (or segment of transaction depending upon UNL) transaction and is also responsible for writing the transaction onto the truth ledger: the blockchain. As a consequence, this makes decentralised governance of the network possible.</p>

                                <p class="sub-header mb-3">Restrictions on nodes which aspire to become Masternodes</p>
                                <p class="mb-1">Nodes which possess any of the below mentioned characteristics may not qualify to become Masternodes:</p>
                                <ul>
                                    <li>Anonymous entity on the network.</li>
                                    <li>Intentions to fork XDC Software.</li>
                                    <li>Entity or Individual with Criminal record in past.</li>
                                    <li>Entity or Individual which does not comply with local law of land.</li>
                                </ul>

                                <p class="sub-header mb-3">Incentives to set up your own Masternode</p>
                                <p class="mb-1">Several reasons why setting up a Masternode is useful are:</p>
                                <ul class="mb-2">
                                    <li>Reputation building within the network community.</li>
                                    <li>Trust Factor enhances for your node particularly since network relies on your node.</li>
                                    <li>More Incentive gain as your node pushes more transactions on network.</li>
                                    <li>Private blockchain is capable of running its own use case.</li>
                                </ul>
                                <p class="mb-1"><strong>Important:</strong> Max number of Master node allowed in the network is 5000.</p>
                                <p class="mb-1"><strong>Special incentives for 18th validator node:</strong> Information required Depends on No's of Block created by validator node (incentive In terms of XDC)</p>
                                <p class="mb-1"><strong>Reward Cycle:</strong> Every Epoch.</p>
						</div>
						</div>
						
						<div class="row mt-5" style="margin-top:0%;padding-bottom:0px;">
                            <div class="col-md-12 col-xs-12">
                                <p class="sub-header mt-0 mb-3">Before You Begin</p>
                                <p>This guide will demonstrate how to set up a single Masternode for the very first time. You will need the following before starting:</p>
                                <div class="orderList">
                                    <ol>
                                        <li> At least 10,000,000 XDC with Masternode holder to perform proof-of-stake consensus seamlessly.</li>
                                        <li> Wallet to store XDC tokens, preferably hardware.</li>
                                        <li> Dedicated and stable hardware environment.</li>
                                        <li> Dedicated Static Public IP address.</li>
                                        <li> 100% network uptime by IDC network.</li>
                                        <li> Minimum tier 3+ IDC environment.</li>
                                        <li> (Optional, but highly recommended) Virtual Private Server (VPS).</li>
                                        <li> For cloud based services, Amazon EC2's m3.large VM size would be appropriate. Similar configuration is applicable for Microsoft Azure Cloud network.</li>
                                    </ol>
                            	</div>
                            </div>							
							
							<div class="col-md-12 col-xs-12 mt-4">
							<p class="mb-1"><strong>Troubleshooting</strong></p>
                                <p>If you are having problems with Setup, the first step is to collect more information to accurately characterize the problem. From there, it can be easier to figure out a root cause and a fix.</p>
                                <p class="link-break-out">Please drop message with all possible detail and screen shot at Community Support forum: <a href="http://xinfin.Net" target="_blank">http://xinfin.Net</a></p>
                                <p class="link-break-out">Telegram Community: <a href="https://t.me/XinFinDevelopers" target="_blank">https://t.me/XinFinDevelopers</a></p>
                                <p class="link-break-out">Slack Community: <a href="https://xinfin-public.slack.com/messages/CELR2M831/" target="_blank">https://xinfin-public.slack.com/messages/CELR2M831/</a></p>

                                <p class="sub-header mb-3">METHOD 2: Delegate Masternode set up to third party service provider</p>
                                <p>Set up your Masternode using one of these 3rd party Masternode service providers.</p>
                                <p class="underline">DISCLAIMER: This list is provided for informational purposes only. Services listed here have not been evaluated or endorsed by XinFin and no guarantees are made as to the accuracy of this information. Please exercise discretion when using third-party services.</p>

                                <p class="header mb-3">List of service provider to Setup Masternode</p>
                                <div class="orderList mb-3">
                                    <ol>
                                        <li>IndSoft.net</li>
                                        <ul>
                                            <li>IPv6 and tor Supported</li>
                                            <li>Global geographical locations</li>
                                            <li>Fully Managed Network</li>
                                            <li>Network attack prevention (DDoS)</li>
                                            <li>One time Setup Cost: Free</li>
                                            <li>Monthly: 55 USD (pay in Paypal, debit, or credit card)</li>
                                        </ul>
                                    </ol>
                                </div>

                                <p class="mb-1"><strong>Are you a Provider?</strong></p>
                                <p>If yes, then <a href="contactus">Contact us</a> to List your service.</p>

                                <p class="mb-1"><strong>Masternode Tools</strong></p>
                                <p class="link-break-out">Community Forum update link: <a href="http://xinfin.net/" target="_blank">http://xinfin.net</a></p>
                                <p class="link-break-out">Telegram Development Community: <a href="https://t.me/joinchat/GeOl40UaNJPlFLNwSvu9cQ" target="_blank">https://t.me/XinFinDevelopers</a></p>
                                <p class="link-break-out">Slack Public Channel: <a href="https://xinfin-public.slack.com/messages/CELR2M831/" target="_blank">https://xinfin-public.slack.com/messages/CELR2M831/</a></p>

                                <p class="header mb-3">Where to operate? MainNet vs TestNet:</p>
                                <p>In XinFin, there are two networks where you can run XDC protocol: the MainNet and the TestNet.</p>
                                <p>The MainNet is used to transact real XDC. The XDC's value is tied to real fiat currency via cryptocurrency exchanges.</p>
                                <p>As developers, you do not want to run application tests with real money. That is what the TestNet is for. We call the TestNet <a href="http://xinfin.network/" target="_blank">XinFinTestNet</a>.</p>
						  </div>
                       </div>                                
                    </div>
					</div>					
					
					<div id="one-click-installer" class="tab-pane fade in active">
					<div id="network">
                        <div class="row" style="margin-top:0%;padding-bottom:0px;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p class="header small mb-3">Download XinFin One Click Installer (to setup Masternode) for Windows and Linux</p>
                                <div class="flex-row">
                                    <div class="col-md-4 col-sm-4 col-xs-12 mb-2">
                                        <div class="configurationsBox text-center">
                                            <img src="assets/images/masternode/windows-icon.png" class="img-responsive icon-single" />
                                            <h1>Windows (64-bit)</h1>
                                            <a href="http://download.xinfin.network/XinFin-Network-installer-0-12-0.exe"><button class="btn-outline mb-1">Download</button></a>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 mb-2">
                                        <div class="configurationsBox text-center">
                                            <img src="assets/images/masternode/linux-icon.png" class="img-responsive icon-single" />
                                            <h1>Linux</h1>
                                            <a href="http://download.xinfin.network/XinFin-Network-linux64-0-12-0.deb"><button class="btn-outline mb-1">Download</button></a>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 mb-2">
                                        <div class="configurationsBox text-center">
                                            <img src="assets/images/masternode/mac-icon.png" class="img-responsive icon-single" />
                                            <h1>MacOS</h1>
                                            <a href="https://download.xinfin.network/XinFin-Network-macosx-0-12-0.dmg"><button class="btn-outline mb-1">Download</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							
							<!--<div class="col-md-12 mt-5 mb-2">
							<p class="header small text-center mb-3">Video to Setup Masternode with just one Click</p>-->
							<div class="col-md-12 mt-1 mb-0">
							<p class="header text-center mb-1">Video to Setup Masternode with just one Click</p>
							<div class="row" style="margin-top:0%;padding-bottom:0px;">								
								<div class="col-md-8 col-md-offset-2">
									<!--<div class="embed-responsive embed-responsive-16by9 embed-div mt-2">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PCpwoK9A6_A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</div>-->
									
									<div class="laptop-wrapper">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/PCpwoK9A6_A" frameborder="0" allowfullscreen=""></iframe>
								  	</div>
		  
								</div>
							</div>
							</div>
							
							<div class="col-md-12 mb-0">
							<p class="header text-center border-bottom-none mb-2">XDC Comparison Chart</p>
								
								<div class="table-responsive xdc-comparison-table">
								<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Comparison Chart</th>
      <th class="functionHighlight-xdc" scope="col">XDC</th>
      <th scope="col">Bitcoin</th>
      <th scope="col">Ethereum</th>
	  <th scope="col">Dash</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="functionHighlight" scope="row">Maximum Supply</th>
      <td class="functionHighlight-xdc">37.5 billion</td>
      <td>21 million</td>
	  <td>100 million</td>
	  <td>18.9 million</td>
    </tr>
    <tr>
      <td class="functionHighlight" scope="row">Algorithm</th>
      <td class="functionHighlight-xdc">xDPoS</td>
      <td>SHA256 PoW</td>
	  <td>EVM</td>
	  <td>X11 PoW</td>
    </tr>
    <tr>
      <td class="functionHighlight" scope="row">Block Interval</th>
      <td class="functionHighlight-xdc">2 sec</td>
      <td>10 minutes</td>
	  <td>15 sec</td>
	  <td>2.5 minutes</td>
    </tr>
	<tr>
      <td class="functionHighlight" scope="row">KYC Compliance</th>
      <td class="functionHighlight-xdc">Yes</td>
      <td>No</td>
	  <td>No</td>
	  <td>No</td>
    </tr>
	<tr>
      <td class="functionHighlight" scope="row">TPS</th>
      <td class="functionHighlight-xdc">2000+</td>
      <td>9</td>
	  <td>15</td>
	  <td>56</td>
    </tr>
	<tr>
      <td class="functionHighlight" scope="row">Privacy</th>
      <td class="functionHighlight-xdc">Yes</td>
      <td>No</td>
	  <td>No</td>
	  <td>PrivateSend - Has privacy issues</td>
    </tr>
	<tr>
      <td class="functionHighlight" scope="row">Instant TX</th>
      <td class="functionHighlight-xdc">Yes</td>
      <td>No</td>
	  <td>Yes</td>
	  <td>Yes</td>
    </tr>
	<tr>
      <td class="functionHighlight" scope="row">Masternode Yield</th>
      <td class="functionHighlight-xdc">10 - 12 %</td>
      <td>No</td>
	  <td>-</td>
	  <td>~6.3%</td>
    </tr>
	<tr>
      <td class="functionHighlight" scope="row">Staking Yield</th>
      <td class="functionHighlight-xdc">10 - 12 %</td>
      <td>No</td>
	  <td>-</td>
	  <td>No</td>
    </tr>
	<tr>
      <td class="functionHighlight" scope="row">Premine</th>
      <td class="functionHighlight-xdc">37.5B XDC</td>
      <td>No</td>
	  <td>No</td>
	  <td>Yes, 2 million Dash</td>
    </tr>
  </tbody>
</table>
</div>




							

							</div>
							
                        </div>
                    </div>
					</div>
					
					
					<div id="docker" class="tab-pane fade">
					<div id="network">
						<div class="row" style="margin-top:0%;padding-bottom:0px;">
                            	<div class="col-md-12 col-sm-12 col-xs-12">

                                <p class="header mt-0 mb-3">This guide will cater to the following system configurations:</p>
                                <div class="flex-row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                        <div class="configurationsBox">
                                            <img src="assets/images/masternode/os-icon.png" class="img-responsive" />
                                            <h1>Operating System</h1>
                                            <p>CentOS or RedHat Enterprise Linux (latest release) or Ubuntu (15.04+) supported</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                        <div class="configurationsBox">
                                            <img src="assets/images/masternode/development-icon.png" class="img-responsive" />
                                            <h1>Development</h1>
                                            <p>Windows (64-bit) or most Linux distributions</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 mb-2">
                                        <div class="configurationsBox">
                                            <img src="assets/images/masternode/cpu-icon.png" class="img-responsive icon-single" />
                                            <h1>CPU</h1>
                                            <p>64-bit x86_64, 2+ cores</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 mb-2">
                                        <div class="configurationsBox">
                                            <img src="assets/images/masternode/ssd-icon.png" class="img-responsive icon-single" />
                                            <h1>Disk</h1>
                                            <p>Minimum 300GB SSD recommended (500+ IOPS, more is better) for the database partition</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 mb-2">
                                        <div class="configurationsBox">
                                            <img src="assets/images/masternode/ram-icon.png" class="img-responsive icon-single" />
                                            <h1>RAM</h1>
                                            <p>32 GB</p>
                                        </div>
                                    </div>
                                </div>

                                <p class="header mb-3">Hands on guide: How to Setup Masternode</p>
                                <p class="mb-1">There are two methods to choose from to set up the Masternode:</p>
                                <div class="orderList">
                                    <ol>
                                        <li>DIY Masternode environment set up</li>
                                        <li>Delegate Masternode set up to third party service provider</li>
                                    </ol>
                                </div>

                                <p class="sub-header mb-3">METHOD 1: DIY Masternode environment set up</p>
                                
                                <h3 class="mt-2 mb-2">CentOS or RedHat Enterprise Linux (latest release) or Ubuntu (15.04+) supported</h3>                                
                                <p class="mb-1"><strong>Clone repository</strong></p>
                                <pre><code>git clone https://github.com/XinFinOrg/XinFin-Node.git</code></pre>
                                <p>Enter <code>XinFin-Node</code> directory</p>
                                <pre><code>cd XinFin-Node</code></pre>

                                <p class="mt-3 mb-1"><strong>Step 1: Install docker & docker-compose</strong></p>
                                <pre><code>sudo ./install_docker.sh</code></pre>

                                <p class="mt-3 mb-1"><strong>Step 2: Update .env file with details</strong></p>
                                <p class="text-left link-break-out">Create <code>.env</code> file by using the sample - <code>.env.example</code></p>
                                <p class="link-break-out">Enter your node name in the INSTANCE_NAME field.</p>
                                <p class="link-break-out">Enter your email address in CONTACT_DETAILS field.</p>
                                <pre>cp env.example .env<br />nano .env</pre>

                                <p class="mt-3 mb-1"><strong>Step 3: Start your Node</strong></p>
                                <p>Run:</p>
                                <pre>sudo docker-compose -f docker-services.yml up -d</pre>
                                <p class="link-break-out">You should be able to see your node listed on this page: <a href="http://xinfin.network" target="_blank">http://xinfin.network</a> Select Menu "Switch to TestNet" for TestNetwork and Select "Switch to LiveNet" to check LiveNetwork Stats.</p>
                                <p>Your coinbase address can be found in xdcchain/coinbase.txt file.</p>

                                <p>To stop the node or if you encounter any issues use:</p>
                                <pre>sudo docker-compose -f docker-services.yml down</pre>

                                <p class="mb-1"><strong>Upgrade</strong></p>
                                <p>To upgrade please use the following commands</p>
                                <pre><code>sudo docker-compose -f docker-services.yml down
sudo ./upgrade.sh
sudo docker-compose -f docker-services.yml up -d
</code></pre>
                                
                                <p class="mb-1"><strong>Troubleshooting</strong></p>
                                <p>If you are having problems with Setup, the first step is to collect more information to accurately characterize the problem. From there, it can be easier to figure out a root cause and a fix.</p>
                                <p class="link-break-out">Please drop message with all possible detail and screen shot at Community Support forum: <a href="http://xinfin.Net" target="_blank">http://xinfin.Net</a></p>
                                <p class="link-break-out">Telegram Community: <a href="https://t.me/XinFinDevelopers" target="_blank">https://t.me/XinFinDevelopers</a></p>
                                <p class="link-break-out">Slack Community: <a href="https://xinfin-public.slack.com/messages/CELR2M831/" target="_blank">https://xinfin-public.slack.com/messages/CELR2M831/</a></p>

                                <p class="sub-header mb-3">METHOD 2: Delegate Masternode set up to third party service provider</p>
                                <p>Set up your Masternode using one of these 3rd party Masternode service providers.</p>
                                <p class="underline">DISCLAIMER: This list is provided for informational purposes only. Services listed here have not been evaluated or endorsed by XinFin and no guarantees are made as to the accuracy of this information. Please exercise discretion when using third-party services.</p>

                                <p class="header mb-3">List of service provider to Setup Masternode</p>
                                <div class="orderList mb-3">
                                    <ol>
                                        <li>IndSoft.net</li>
                                        <ul>
                                            <li>IPv6 and tor Supported</li>
                                            <li>Global geographical locations</li>
                                            <li>Fully Managed Network</li>
                                            <li>Network attack prevention (DDoS)</li>
                                            <li>One time Setup Cost: Free</li>
                                            <li>Monthly: 250 USD (pay in XDC, Paypal, debit, or credit card)</li>
                                        </ul>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
					</div>
					
					
					<div id="faqs" class="tab-pane fade">
					<div id="network">					
                                <div class="row" style="margin-top:0%;padding-bottom:0px;">
                            	<div class="col-md-12 col-sm-12 col-xs-12">

                                <p class="header mt-0 mb-2">XinfIn (XDPoS)</p>
                                <div class="row">
        <div class="col-md-12">
            <div class="pxlr-club-faq">
                <div class="content">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingOne" role="tab">
                                <h4 class="panel-title">
                                	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">01) How can i set-up master node on XinFin Network?</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body pxlr-faq-body">
                                    <p>You can set up master on windows server with one click installer or using docker compose file for more details please visit <a href="setup-masternode">XinFin Masternode setup page</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingTwo" role="tab">
                                <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">02) Is it necessary to run master node on server ?</a>
								</h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body pxlr-faq-body">
                                    <p>No it's not necessary to run a Masternode on server but we recommended to <strong>host the Masternode</strong> on server. Setting Up Masternode by staking coin gives opportunity to mint additional coin as validators rewards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThree" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">03) Can I run my Masternode on my local machine ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes you can run the <a href="setup-masternode">Masternode</a> on you Local machine but your node must have 100% up time and must have facing direct internet connection.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFour" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">04) How much Masternode can i run at one time ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body pxlr-faq-body">
                                    <p>You can run as many Masternode you want to run at one time. But there are various conditions to run Masternode like for more details visit <a href="setup-masternode">XinFin Maternode Setup</a> page to learn about their requirements.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFive" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">05) Where can i find the XDPos code ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFive" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body pxlr-faq-body">
                                    <p>You can find the <strong>XDPos</strong> code on <a href="https://github.com/XinFinOrg/XDPoS-TestNet-Apothem">XinFin github</a>.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingSix" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">06) What is the difference between coinbase Address and Masternode owner address ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseSix" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body pxlr-faq-body">
                                    <p><strong>Coinbase address</strong> is the <strong>Masternode address</strong> and Masternode owner address is the address of wallet which you have proposed 10 million xdc.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingSeven" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">07) On XinFin Network, which address i will receive my rewards ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseSeven" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body pxlr-faq-body">
                                    <p>The rewards will be received on wallet which is Masternode owner address.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingEight" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">08) When are the rewards paid out for hosting XinFin Masternode ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseEight" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Rewards are distributed to Masternode owner after ever epoch.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingNine" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">09) How many blocks are mine in epoch of XinFin Network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseNine" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body pxlr-faq-body">
                                    <p>900 blocks are mine in one epoch.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTen" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">10) how much time it takes to mine for an epoch ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTen" role="tabpanel" aria-labelledby="headingTen">
                                <div class="panel-body pxlr-faq-body">
                                    <p>It takes around 50 minutes to complete 1 epoch.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingEleven" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">11) How much rewards are paid to Masternode on XinFin Network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseEleven" role="tabpanel" aria-labelledby="headingEleven">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Rewards for the masternde come approx 10 %pa rewards for running Masternode. If the number of Masternode increases, the rewards will be reduced.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwelve" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">12) How are the 108 Masternode selected ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwelve" role="tabpanel" aria-labelledby="headingTwelve">
                                <div class="panel-body pxlr-faq-body">
                                    <p>108 Masternode are selected randomly with round robin algorithm.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingThirteen" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">13) what is the TPS of XinFin network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirteen" role="tabpanel" aria-labelledby="headingThirteen">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Currently Xinfin network supports 2000+ tps.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourteen" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">14) Is there any test net for XinFin Network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourteen" role="tabpanel" aria-labelledby="headingFourteen">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes You can find the the testnet at <a href="http://apothem.network">http://apothem.network</a>.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFifteen" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">15) How much time it takes to mine block on XinFin Network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFifteen" role="tabpanel" aria-labelledby="headingFifteen">
                                <div class="panel-body pxlr-faq-body">
                                    <p>It takes 2 seconds to mine a block on XinFin Network.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingSixteen" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">16) Where can i buy xdc or xdce ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseSixteen" role="tabpanel" aria-labelledby="headingSixteen">
                                <div class="panel-body pxlr-faq-body">
                                    <p>You can <strong>buy XDC</strong> on <a href="https://www.alphaex.net/">AlphaEx Crypto Exchange</a> for now or you can buy xdce from the exchange listed at <a href="https://xinfin.io/">XinFin.io</a></p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingSeventeen" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">17) Where can i store xdc ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseSeventeen" role="tabpanel" aria-labelledby="headingSeventeen">
                                <div class="panel-body pxlr-faq-body">
                                    <p>XDC wallet can be stored on <a href="https://wallet.xinfin.network/#/">XinFin web Wallet</a>, XinFin E wallet (<a href="https://chrome.google.com/webstore/detail/xinpay/bocpokimicclpaiekenaeelehdjllofo?hl=en">XinPay</a>) or <a href="https://play.google.com/store/apps/details?src=AppAgg.com&amp;id=com.xdcwallet&amp;referrer=utm_source%3DAppAgg.com%26utm_medium%3DAppAgg%26utm_campaign%3DAppAgg">XDC Andriod Wallet</a>.<</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingEighteen" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">18) Is there hardware support for XinFin web wallet ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseEighteen" role="tabpanel" aria-labelledby="headingEighteen">
                                <div class="panel-body pxlr-faq-body">
                                    <p>For now XinFin doesn't support hardware wallet but it will support soon.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingNineteen" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">19) Can I store XDCE on XinFin Wallet ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseNineteen" role="tabpanel" aria-labelledby="headingNineteen">
                                <div class="panel-body pxlr-faq-body">
                                    <p>For now <strong>XinFin web wallet</strong> doesn't supports XDCE but you can store it on <a href="https://play.google.com/store/apps/details?src=AppAgg.com&amp;id=com.xdcwallet&amp;referrer=utm_source%3DAppAgg.com%26utm_medium%3DAppAgg%26utm_campaign%3DAppAgg">XDC Android Wallet</a></p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwenty" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">20) Can I store my token on Masternode address on XinFin Network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwenty" role="tabpanel" aria-labelledby="headingTwenty">
                                <div class="panel-body pxlr-faq-body">
                                    <p>No you can not store your token on Masternode address on XinFin Network.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentyone" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyone" aria-expanded="false" aria-controls="collapseTwentyone">21) Is it necessary to take the backup of your coinbase address ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentyone" role="tabpanel" aria-labelledby="headingTwentyone">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes it is necessary to take the backup of your coinbase address.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentytwo" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo">22) What will happen if I lost my coinbase address ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentytwo" role="tabpanel" aria-labelledby="headingTwentytwo">
                                <div class="panel-body pxlr-faq-body">
                                    <p>If you lost your coinbase address your node will be down and you need to resign from the Masternode.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentythree" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentythree" aria-expanded="false" aria-controls="collapseTwentythree">23) What will happen if i lost my keystore of wallet ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentythree" role="tabpanel" aria-labelledby="headingTwentythree">
                                <div class="panel-body pxlr-faq-body">
                                    <p>All your funds will get lock and you will not be able to receive rewards and your 10 million xdc will also get lost. So its always advisable to backup your keystore.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentyfour" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyfour" aria-expanded="false" aria-controls="collapseTwentyfour">24) Can team  recover my token ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentyfour" role="tabpanel" aria-labelledby="headingTwentyfour">
                                <div class="panel-body pxlr-faq-body">
                                    <p>XinFin network is decentralized and no center place to store date so there is no chance to recover your token.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentyfive" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyfive" aria-expanded="false" aria-controls="collapseTwentyfive">25) Can I deploy smart contract on XinFin network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentyfive" role="tabpanel" aria-labelledby="headingTwentyfive">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes you can deploy  your smart contract on xinfin network with <a href="https://medium.com/xinfin/deploy-smart-contract-on-xinfin-testnet-through-xinfin-remix-and-xinpay-dfbbf9dcc3f7">remix or web wallet</a>.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentysix" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentysix" aria-expanded="false" aria-controls="collapseTwentysix">26) Can I deploy ethereum smart contract on XinFin network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentysix" role="tabpanel" aria-labelledby="headingTwentysix">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes <strong>XinFin network is Ethereum compatible</strong>, so you can deploy any smart contract on xinfin.network.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentyseven" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyseven" aria-expanded="false" aria-controls="collapseTwentyseven">27) Can we create a ERC-20 token on XinFin network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentyseven" role="tabpanel" aria-labelledby="headingTwentyseven">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes you can create your own token on XinFin network with Mycontract.<br />Read : <a href="https://medium.com/xinfin/a-step-by-step-guide-to-issue-your-own-token-on-xinfin-network-in-a-few-minutes-b03aeae3be69">How to Deploy own token on XinFin Network</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
								
								
								<p class="header mt-4 mb-2">XinFin Web Wallet</p>
								<div class="row">
        <div class="col-md-12">
            <div class="pxlr-club-faq">
                <div class="content">
                    <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentyeight" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwentyeight" aria-expanded="false" aria-controls="collapseTwentyeight">01) What is the recommended way to access your wallet ?</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentyeight" role="tabpanel" aria-labelledby="headingTwentyeight">
                                <div class="panel-body pxlr-faq-body">
                                    <p>The recommended way to access wallet is with keystore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingTwentynine" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwentynine" aria-expanded="false" aria-controls="collapseTwentynine">02) Where can i find my Private key ?</a>
								</h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwentynine" role="tabpanel" aria-labelledby="headingTwentynine">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Below your address just click on the print button you will find you private key.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThirty" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">03) Does XinFin web wallet supports Hardware wallet ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirty" role="tabpanel" aria-labelledby="headingThirty">
                                <div class="panel-body pxlr-faq-body">
                                    <p>For now XinFin doesn't support hardware wallet support but it's under development and it will support soon.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtyone" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThirtyone" aria-expanded="false" aria-controls="collapseThirtyone">04) Can I store XDCe token on XinFin web wallet?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtyone" role="tabpanel" aria-labelledby="headingThirtyone">
                                <div class="panel-body pxlr-faq-body">
                                    <p>No not for now XinFin web wallet doesn't supports you to store xdce but Mobile app support both XDC as well as ERC20 version token XDCe.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtytwo" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThirtytwo" aria-expanded="false" aria-controls="collapseThirtytwo">05) Unable to find my private key when signed up with Mnemonic phase ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtytwo" role="tabpanel" aria-labelledby="headingThirtytwo">
                                <div class="panel-body pxlr-faq-body">
                                    <p>As Mnemonic phase doesn't support private key so you will not get private key.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtythree" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThirtythree" aria-expanded="false" aria-controls="collapseThirtythree">06) What if I lost my private key and keystore ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtythree" role="tabpanel" aria-labelledby="headingThirtythree">
                                <div class="panel-body pxlr-faq-body">
                                    <p>The recommended way to access wallet is with keystore.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtyfour" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThirtyfour" aria-expanded="false" aria-controls="collapseThirtyfour">07) Can we deploy contract on Xinfin Network with web wallet ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtyfour" role="tabpanel" aria-labelledby="headingThirtyfour">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes you can deploy your token on xinfin network with web wallet.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtyfive" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThirtyfive" aria-expanded="false" aria-controls="collapseThirtyfive">08) Does web wallet supports offline functions ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtyfive" role="tabpanel" aria-labelledby="headingThirtyfive">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes XinFin web wallet supports offline access.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtysix" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThirtysix" aria-expanded="false" aria-controls="collapseThirtysix">09) What is the gas price for transaction ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtysix" role="tabpanel" aria-labelledby="headingThirtysix">
                                <div class="panel-body pxlr-faq-body">
                                    <p>The default gas price for transaction is 0.00021 XDC.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtyseven" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThirtyseven" aria-expanded="false" aria-controls="collapseThirtyseven">10) what is the gas price for deploying smart contract on xinfin network ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtyseven" role="tabpanel" aria-labelledby="headingThirtyseven">
                                <div class="panel-body pxlr-faq-body">
                                    <p>The default gas price used for deploying Smart Contract on XinFin network is 0.00021 XDC.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
								
								
								<p class="header mt-4 mb-2">XinFin Masternode App</p>
								<div class="row">
        <div class="col-md-12">
            <div class="pxlr-club-faq">
                <div class="content">
                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtyeight" role="tab">
                                <h4 class="panel-title">
                                	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThirtyeight" aria-expanded="false" aria-controls="collapseThirtyeight">01) Which account should i used to login Masternode app ?</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtyeight" role="tabpanel" aria-labelledby="headingThirtyeight">
                                <div class="panel-body pxlr-faq-body">
                                    <p>You need to login Masternode app with your web wallet private key.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingThirtynine" role="tab">
                                <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThirtynine" aria-expanded="false" aria-controls="collapseThirtynine">02) Is it compulsory to upload kyc ?</a>
								</h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThirtynine" role="tabpanel" aria-labelledby="headingThirtynine">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Yes it is compulsory to upload a kyc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingFourty" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourty" aria-expanded="false" aria-controls="collapseFourty">03) In which format do i need to upload kyc ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourty" role="tabpanel" aria-labelledby="headingFourty">
                                <div class="panel-body pxlr-faq-body">
                                    <p>It is compulsory to upload kyc in pdf format.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourtyone" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourtyone" aria-expanded="false" aria-controls="collapseFourtyone">04) What is the format for uploading kyc ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourtyone" role="tabpanel" aria-labelledby="headingFourtyone">
                                <div class="panel-body pxlr-faq-body">
                                    <p>The format for uploading kyc can be found on Masternode app just click on become candidate you will find the format.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourtythree" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourtythree" aria-expanded="false" aria-controls="collapseFourtythree">05) What is coinbase address ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourtythree" role="tabpanel" aria-labelledby="headingFourtythree">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Coinbase address is your Masternode address.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourtyfour" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourtyfour" aria-expanded="false" aria-controls="collapseFourtyfour">06) What if user upload a wrong kyc detail ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourtyfour" role="tabpanel" aria-labelledby="headingFourtyfour">
                                <div class="panel-body pxlr-faq-body">
                                    <p>If user uploads the wrong kyc 10 million xdc token will get locked and hs account will be resigned.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourtyfive" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourtyfive" aria-expanded="false" aria-controls="collapseFourtyfive">07) After uploading kyc and lock the 10 million xdc how much time it takes to become Masternode ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourtyfive" role="tabpanel" aria-labelledby="headingFourtyfive">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Ater 1 epoch you can see your node as a Masternode.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourtysix" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourtysix" aria-expanded="false" aria-controls="collapseFourtysix">08) How many days it will take if i resign my node ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourtysix" role="tabpanel" aria-labelledby="headingFourtysix">
                                <div class="panel-body pxlr-faq-body">
                                    <p>If user resign from Masternode it takes 30 days to get your 10 million XDC.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourtyseven" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourtyseven" aria-expanded="false" aria-controls="collapseFourtyseven">09) Why i see my node as slashed ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourtyseven" role="tabpanel" aria-labelledby="headingFourtyseven">
                                <div class="panel-body pxlr-faq-body">
                                    <p>Please check your node is down so you can see your node is slashed.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourtyeight" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourtyeight" aria-expanded="false" aria-controls="collapseFourtyeight">10) My node is now up But it shows me slashed ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourtyeight" role="tabpanel" aria-labelledby="headingFourtyeight">
                                <div class="panel-body pxlr-faq-body">
                                    <p>It will check for 3 epoch and after that you will become a Masternode.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFourtynine" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourtynine" aria-expanded="false" aria-controls="collapseFourtynine">11) Where can i see the rewards ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFourtynine" role="tabpanel" aria-labelledby="headingFourtynine">
                                <div class="panel-body pxlr-faq-body">
                                    <p>You can see your rewards on you Masternode owner address or on xinfin explorer.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFifty" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFifty" aria-expanded="false" aria-controls="collapseFifty">12) What if i forgot my private key ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFifty" role="tabpanel" aria-labelledby="headingFifty">
                                <div class="panel-body pxlr-faq-body">
                                    <p>All your tokens will be lock. So we alwas say to back up your private key.</p>
                                </div>
                            </div>
                        </div>
						<div class="panel panel-default">
                            <div class="panel-heading" id="headingFiftyOne" role="tab">
                                <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFiftyOne" aria-expanded="false" aria-controls="collapseFiftyOne">13) What is the recommended way to access your wallet ?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseFiftyOne" role="tabpanel" aria-labelledby="headingFiftyOne">
                                <div class="panel-body pxlr-faq-body">
                                    <p>The recommended way to access wallet is with keystore.</p>
                                </div>
                            </div>
                        </div>						
                    </div>
                </div>
            </div>
        </div>

        
    </div>
								
								
								<p class="sub-header mb-3">Important Links:</p>
								<p class="link-break-out mb-1"><a href="https://medium.com/xinfin/steps-to-setup-masternode-on-xinfin-mainnet-bf66dda3ea1c">Steps to Setup Masternode on XinFin MainNet</a>.</p>
								<p class="link-break-out mb-1"><a href="https://medium.com/xinfin/xinfin-network-presents-one-click-installer-for-blockchain-node-setup-6ab2dce6ddc0">XinFin Network Presents One-Click Installer For Blockchain Node Setup</a></p>
								<p class="link-break-out mb-1"><a href="https://medium.com/xinfin/how-to-backup-your-masternode-keystore-on-xinfin-network-ae3d8237ad82">How to Backup Your Masternode Keystore on XinFin Network</a></p>
								<p class="link-break-out mb-1"><a href="https://medium.com/xinfin/steps-to-resign-the-masternode-on-xinfin-network-3189333f69d">Steps to Resign the Masternode on XinFin network</a></p>
								<p class="link-break-out mb-1"><a href="https://youtu.be/D8ASYW8wEpA">Setup XinFin Blockchain Node (Masternode) with One-Click installer</a></p>
								<p class="link-break-out mb-1"><a href="https://xinfin.network/#webWallet">XinFin Web wallet</a></p>
								<p class="link-break-out mb-1"><a href="https://medium.com/xinfin/all-new-interface-of-xinfin-web-wallet-is-officially-announced-9621cd875174">XinFin Web Wallet interface</a></p>
								<p class="link-break-out mb-1"><a href="https://xinfin.network/#webWallet">XinFin Main-net</a></p>
								<p class="link-break-out mb-1"><a href="https://play.google.com/store/apps/details?id=com.xdcwallet" target="_blank">XinFin Mobile Wallet</a></p>
								
								<p class="mt-2 mb-1"><strong>Follow XinFin on :</strong></p>
								<p class="link-break-out mb-1">Twitter : <a href="https://twitter.com/XinFin_Official" target="_blank">( @ ) XinFin_Official</a></p>
								<p class="link-break-out mb-1">LinkedIn : <a href="https://www.linkedin.com/company/xinfin/" target="_blank">https://www.linkedin.com/company/xinfin/</a></p>
								<p class="link-break-out mb-1">Telegram : <a href="https://t.me/xinfintalk" target="_blank">https://t.me/xinfintalk</a></p>
								<p class="link-break-out mb-1">Slack : <a href="https://launchpass.com/xinfin-public" target="_blank">https://launchpass.com/xinfin-public</a></p>
							</div>
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
		
		
		
		<script>
		(function() {
  
  $(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      $(this).addClass('active-panel-heading');
    }else{
      $(this).removeClass('active-panel-heading');
    }
  });  

}).call(this);
</script>
