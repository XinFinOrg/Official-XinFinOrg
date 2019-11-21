<?php 
$title = "Master node setup guide";
$desc = "How to setup XDC masternode";

include('inc/header.php') ?>

    <section id="contactbanner">
        <!--  <div id="particle-canvas" ></div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 bannertext">
                    <h1>Guide To Set Up XinFin Master Node</h1>
                    <p class="mb-2">XinFin offers the first and only genuinely one-click masternode deployment. Our Masternode One-Click Installer has been heralded by many as the easiest solution for setting up a masternode and earning XDC.</p>
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
            
			<div class="row setup-masternode-row">
				<div class="container">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#about-xinfin-masternode">About XinFin Masternode</a></li>
					    <li><a data-toggle="tab" href="#one-click-installer">One click installer</a></li>
						<li><a data-toggle="tab" href="#docker">Docker</a></li>
						<li><a data-toggle="tab" href="#faqs">FAQ's</a></li>
					</ul>
				</div>
			</div>
			
			<div class="container">
                <div class="tab-content">
                    
					<div id="about-xinfin-masternode" class="tab-pane fade in active">
					<div id="network">
                        <div class="row" style="margin-top:0%;padding-bottom:0px;">						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<p class="header mt-0 mb-3">About XinFin Masternode</p>
                                <p>XinFin's token XDC supplants proof-of-work consensus algorithm (popularly linked with mining) with proof-of-stake consensus algorithm, fundamentally using the concept of "validators".</p>
                                <p>Validators are special nodes used in the XDPoS consensus algorithm which validate each transaction occurring on the blockchain network. The result of this validation is to finally append the transaction on the blockchain. A transaction may be accepted by the validator or rejected. (<strong>Important:</strong> There can be multiple validator nodes in each network.) </p>
                                <p>Decisions made by these validator nodes are broadcasted through the network as messages which are signed (attested) using validated cryptographic public key. Every validator node running XDC protocol in the RCL network is responsible for deciding its Unique Node List (UNL). This list holds information about which regular nodes does the validator care about.</p>
                                <p><strong>To set up a masternode, make sure your XDC protocol running node is publicly identified and has gone through the compliance process. Every Node Holder need to upload KYC document and this detail will be visible to the public network.</strong></p>

                                <p class="sub-header mb-3">Why set up a masternode at all?</p>
                                <p>It is necessary to set up a masternode to operate on XDC protocol because masternodes make the decentralised blockchain network self-sustainable. Deploying masternode is conducive to trusted, scalable decentralised network infrastructure. Such an environment facilitates greater stability and reliability on the network.</p>

                                <p class="sub-header mb-3">Functions of masternode</p>
                                <p>In XDPoS blockchain environment, masternode concept is cardinal to the functioning. A masternode validates each (or segment of transaction depending upon UNL) transaction and is also responsible for writing the transaction onto the truth ledger: the blockchain. As a consequence, this makes decentralised governance of the network possible.</p>

                                <p class="sub-header mb-3">Restrictions on nodes which aspire to become masternodes</p>
                                <p class="mb-1">Nodes which possess any of the below mentioned characteristics may not qualify to become masternodes:</p>
                                <ul>
                                    <li>Anonymous entity on the network.</li>
                                    <li>Intentions to fork XDC Software.</li>
                                    <li>Entity or Individual with Criminal record in past.</li>
                                    <li>Entity or Individual which does not comply with local law of land.</li>
                                </ul>

                                <p class="sub-header mb-3">Incentives to set up your own masternode</p>
                                <p class="mb-1">Several reasons why setting up a masternode is useful are:</p>
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
                            <div class="col-md-6 col-xs-12">
                                <p class="sub-header mt-0 mb-3">Before You Begin</p>
                                <p>This guide will demonstrate how to set up a single masternode for the very first time. You will need the following before starting:</p>
                                <div class="orderList">
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
                            	</div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                           		<div class="embed-responsive embed-responsive-16by9 embed-div mt-5">
                					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PCpwoK9A6_A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            					</div>
                            </div>
							
							
							<div class="col-md-12 col-xs-12 mt-4">
							<p class="mb-1"><strong>Troubleshooting</strong></p>
                                <p>If you are having problems with Setup, the first step is to collect more information to accurately characterize the problem. From there, it can be easier to figure out a root cause and a fix.</p>
                                <p class="link-break-out">Please drop message with all possible detail and screen shot at Community Support forum: <a href="http://xinfin.Net" target="_blank">http://xinfin.Net</a></p>
                                <p class="link-break-out">Telegram Community: <a href="https://t.me/XinFinDevelopers" target="_blank">https://t.me/XinFinDevelopers</a></p>
                                <p class="link-break-out">Slack Community: <a href="https://xinfin-public.slack.com/messages/CELR2M831/" target="_blank">https://xinfin-public.slack.com/messages/CELR2M831/</a></p>

                                <p class="sub-header mb-3">METHOD 2: Delegate masternode set up to third party service provider</p>
                                <p>Set up your Masternode using one of these 3rd party Masternode service providers.</p>
                                <p class="underline">DISCLAIMER: This list is provided for informational purposes only. Services listed here have not been evaluated or endorsed by XinFin and no guarantees are made as to the accuracy of this information. Please exercise discretion when using third-party services.</p>

                                <p class="header mb-3">List of service provider to Setup masternode</p>
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

                                <p class="mb-1"><strong>Are you a Provider?</strong></p>
                                <p>If yes, then <a href="contactus.php">Contact us</a> to List your service.</p>

                                <p class="mb-1"><strong>Masternode Tools</strong></p>
                                <p class="link-break-out">Community Forum update link: <a href="http://xinfin.net/" target="_blank">http://xinfin.net</a></p>
                                <p class="link-break-out">Telegram Development Community: <a href="https://t.me/joinchat/GeOl40UaNJPlFLNwSvu9cQ" target="_blank">https://t.me/XinFinDevelopers</a></p>
                                <p class="link-break-out">Slack Public Channel: <a href="https://xinfin-public.slack.com/messages/CELR2M831/" target="_blank">https://xinfin-public.slack.com/messages/CELR2M831/</a></p>

                                <p class="header mb-3">Where to operate? Mainnet vs Testnet:</p>
                                <p>In XinFin, there are two networks where you can run XDC protocol: the mainnet and the testnet.</p>
                                <p>The mainnet is used to transact real XDC. The XDC's value is tied to real fiat currency via cryptocurrency exchanges.</p>
                                <p>As developers, you do not want to run application tests with real money. That is what the testnet is for. We call the testnet <a href="http://xinfin.network/" target="_blank">XinFinTestNet</a>.</p>
						  </div>
                       </div>                                
                    </div>
					</div>					
					
					<div id="one-click-installer" class="tab-pane fade">
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
                                            <p>Coming Soon!</p>
                                            <!--<a href="http://download.xinfin.network/XinFin-Network-installer-0-12-0.rar"><button class="btn-outline mb-1">Download</button></a>-->
                                        </div>
                                    </div>
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
                                <p class="mb-1">There are two methods to choose from to set up the masternode:</p>
                                <div class="orderList">
                                    <ol>
                                        <li>DIY masternode environment set up</li>
                                        <li>Delegate masternode set up to third party service provider</li>
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

                                <p class="sub-header mb-3">METHOD 2: Delegate masternode set up to third party service provider</p>
                                <p>Set up your Masternode using one of these 3rd party Masternode service providers.</p>
                                <p class="underline">DISCLAIMER: This list is provided for informational purposes only. Services listed here have not been evaluated or endorsed by XinFin and no guarantees are made as to the accuracy of this information. Please exercise discretion when using third-party services.</p>

                                <p class="header mb-3">List of service provider to Setup masternode</p>
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
                                <p class="question sub-header-faqs">1) How can i set-up master node on XinFin Network?</p>
                                <p class="answer">You can set up master on windows server with one click installer or using docker compose file for more details please visit <a href="https://Xinfin.org/setup-masternode.php">XinFin Masternode setup page</a>.</p>

                                <p class="question sub-header-faqs">2) Is it necessary to run master node on server ?</p>
                                <p class="answer">No it's not necessary to run a masternode on server but we recommended to <strong>host the masternode</strong> on server. Setting Up masternode by staking coin gives opportunity to mint additional coin as validators rewards.</p>
								
								<p class="question sub-header-faqs">3) Can I run my masternode on my local machine ?</p>
                                <p class="answer">Yes you can run the <a href="https://xinfin.org/setup-masternode.php">masternode</a> on you Local machine but your node must have 100% up time and must have facing direct internet connection.</p>
								
								<p class="question sub-header-faqs">4) How much Masternode can i run at one time ?</p>
                                <p class="answer">You can run as many masternode you want to run at one time. But there are various conditions to run masternode like for more details visit <a href="https://xinfin.org/setup-masternode.php">XinFin Maternode Setup</a> page to learn about their requirements.</p>
								
								<p class="question sub-header-faqs">5) Where can i find the XDPos code ?</p>
                                <p class="answer">You can find the <strong>XDPos</strong> code on <a href="https://github.com/XinFinOrg/XDPoS-TestNet-Apothem">XinFin github</a>.</p>
								
								<p class="question sub-header-faqs">6) What is the difference between coinbase Address and Masternode owner address ?</p>
                                <p class="answer"><strong>Coinbase address</strong> is the <strong>masternode address</strong> and masternode owner address is the address of wallet which you have proposed 10 million xdc.</p>
								
								<p class="question sub-header-faqs">7) On XinFin Network, which address i will receive my rewards ?</p>
                                <p class="answer">The rewards will be received on wallet which is masternode owner address.</p>
								
								<p class="question sub-header-faqs">8) When are the rewards paid out for hosting XinFin Masternode ?</p>
                                <p class="answer">Rewards are distributed to masternode owner after ever epoch.</p>
								
								<p class="question sub-header-faqs">9) How many blocks are mine in epoch of XinFin Network ?</p>
                                <p class="answer">900 blocks are mine in one epoch.</p>
								
								<p class="question sub-header-faqs">10) how much time it takes to mine for an epoch ?</p>
                                <p class="answer">It takes around 50 minutes to complete 1 epoch.</p>
								
								<p class="question sub-header-faqs">11) How much rewards are paid to masternode on XinFin Network ?</p>
                                <p class="answer">Rewards for the masternde come approx 10 %pa rewards for running masternode. If the number of masternode increases, the rewards will be reduced.</p>
								
								<p class="question sub-header-faqs">12) How are the 108 masternode selected ?</p>
                                <p class="answer">108 masternode are selected randomly with round robin algorithm.</p>
								
								<p class="question sub-header-faqs">13) what is the TPS of XinFin network ?</p>
                                <p class="answer">Currently Xinfin network supports 2000+ tps.</p>
								
								<p class="question sub-header-faqs">14) Is there any test net for XinFin Network ?</p>
                                <p class="answer">Yes You can find the the testnet at <a href="http://apothem.network">http://apothem.network</a></p>
								
								<p class="question sub-header-faqs">15) How much time it takes to mine block on XinFin Network ?</p>
                                <p class="answer">It takes 2 seconds to mine a block on XinFin Network.</p>
								
								<p class="question sub-header-faqs">16) Where can i buy xdc or xdce ?</p>
                                <p class="answer">You can <strong>buy XDC</strong> on <a href="https://www.alphaex.net/">AlphaEx Crypto Exchange</a> for now or you can buy xdce from the exchange listed at <a href="https://xinfin.io/">XinFin.io</a></p>
								
								<p class="question sub-header-faqs">17) Where can i store xdc ?</p>
                                <p class="answer">XDC wallet can be stored on <a href="https://wallet.xinfin.network/#/">XinFin web Wallet</a>, XinFin E wallet (<a href="https://chrome.google.com/webstore/detail/xinpay/bocpokimicclpaiekenaeelehdjllofo?hl=en">XinPay</a>) or <a href="https://play.google.com/store/apps/details?src=AppAgg.com&amp;id=com.xdcwallet&amp;referrer=utm_source%3DAppAgg.com%26utm_medium%3DAppAgg%26utm_campaign%3DAppAgg">XDC Andriod Wallet</a>.</p>
								
								<p class="question sub-header-faqs">18) Is there hardware support for XinFin web wallet ?</p>
                                <p class="answer">For now XinFin doesn't support hardware wallet but it will support soon.</p>
								
								<p class="question sub-header-faqs">19) Can I store XDCE on XinFin Wallet ?</p>
                                <p class="answer">For now <strong>XinFin web wallet</strong> doesn't supports XDCE but you can store it on <a href="https://play.google.com/store/apps/details?src=AppAgg.com&amp;id=com.xdcwallet&amp;referrer=utm_source%3DAppAgg.com%26utm_medium%3DAppAgg%26utm_campaign%3DAppAgg">XDC Android Wallet</a></p>
								
								<p class="question sub-header-faqs">20) Can I store my token on masternode address on XinFin Network ?</p>
                                <p class="answer">No you can not store your token on masternode address on XinFin Network.</p>
								
								<p class="question sub-header-faqs">21) Is it necessary to take the backup of your coinbase address ?</p>
                                <p class="answer">Yes it is necessary to take the backup of your coinbase address.</p>
								
								<p class="question sub-header-faqs">22) What will happen if I lost my coinbase address ?</p>
                                <p class="answer">If you lost your coinbase address your node will be down and you need to resign from the masternode.</p>
								
								<p class="question sub-header-faqs">23) What will happen if i lost my keystore of wallet ?</p>
                                <p class="answer">All your funds will get lock and you will not be able to receive rewards and your 10 million xdc will also get lost. So its always advisable to backup your keystore.</p>
								
								<p class="question sub-header-faqs">24) Can team  recover my token ?</p>
                                <p class="answer">XinFin network is decentralized and no center place to store date so there is no chance to recover your token.</p>
								
								<p class="question sub-header-faqs">25) Can I deploy smart contract on XinFin network ?</p>
                                <p class="answer">Yes you can deploy  your smart contract on xinfin network with <a href="https://medium.com/xinfin/deploy-smart-contract-on-xinfin-testnet-through-xinfin-remix-and-xinpay-dfbbf9dcc3f7">remix or web wallet</a>.</p>
							
								<p class="question sub-header-faqs">26) Can I deploy ethereum smart contract on XinFin network ?</p>
                                <p class="answer">Yes <strong>XinFin network is Ethereum compatible</strong>, so you can deploy any smart contract on xinfin.network.</p>
								
								<p class="question sub-header-faqs">27) Can we create a ERC-20 token on XinFin network ?</p>
                                <p class="answer">Yes you can create your own token on XinFin network with Mycontract.<br />Read : <a href="https://medium.com/xinfin/a-step-by-step-guide-to-issue-your-own-token-on-xinfin-network-in-a-few-minutes-b03aeae3be69">How to Deploy own token on XinFin Network</a></p>
								
								
								<p class="header mt-4 mb-2">XinFin Web Wallet</p>
								<p class="question sub-header-faqs">1) What is the recommended way to access your wallet ?</p>
                                <p class="answer">The recommended way to access wallet is with keystore.</p>
								
								<p class="question sub-header-faqs">2) Where can i find my Private key ?</p>
                                <p class="answer">Below your address just click on the print button you will find you private key.</p>
								
								<p class="question sub-header-faqs">3) Does XinFin web wallet supports Hardware wallet ?</p>
                                <p class="answer">For now XinFin doesn't support hardware wallet support but it's under development and it will support soon.</p>
								
								<p class="question sub-header-faqs">4) Can I store XDCe token on XinFin web wallet?</p>
                                <p class="answer">No not for now XinFin web wallet doesn't supports you to store xdce but Mobile app support both XDC as well as ERC20 version token XDCe.</p>
								
								<p class="question sub-header-faqs">5) Unable to find my private key when signed up with Mnemonic phase ?</p>
                                <p class="answer">As Mnemonic phase doesn't support private key so you will not get private key.</p>
								
								<p class="question sub-header-faqs">6) What if I lost my private key and keystore ?</p>
                                <p class="answer">The recommended way to access wallet is with keystore.</p>
								
								<p class="question sub-header-faqs">7) Can we deploy contract on Xinfin Network with web wallet ?</p>
                                <p class="answer">Yes you can deploy your token on xinfin network with web wallet.</p>
								
								<p class="question sub-header-faqs">8) Does web wallet supports offline functions ?</p>
                                <p class="answer">Yes XinFin web wallet supports offline access.</p>
								
								<p class="question sub-header-faqs">9) What is the gas price for transaction ?</p>
                                <p class="answer">The default gas price for transaction is 0.00021 XDC.</p>
								
								<p class="question sub-header-faqs">10) what is the gas price for deploying smart contract on xinfin network ?</p>
                                <p class="answer">The default gas price used for deploying Smart Contract on XinFin network is 0.00021 XDC.</p>
								
								
								<p class="header mt-4 mb-2">XinFin Masternode App</p>
								<p class="question sub-header-faqs">1) Which account should i used to login masternode app ?</p>
                                <p class="answer">You need to login masternode app with your web wallet private key.</p>
								
								<p class="question sub-header-faqs">2) Is it compulsory to upload kyc ?</p>
                                <p class="answer">Yes it is compulsory to upload a kyc.</p>
								
								<p class="question sub-header-faqs">3) In which format do i need to upload kyc ?</p>
                                <p class="answer">It is compulsory to upload kyc in pdf format.</p>
								
								<p class="question sub-header-faqs">4) What is the format for uploading kyc ?</p>
                                <p class="answer">The format for uploading kyc can be found on masternode app just click on become candidate you will find the format.</p>
								
								<p class="question sub-header-faqs">5) What is coinbase address ?</p>
                                <p class="answer">Coinbase address is your masternode address.</p>
								
								<p class="question sub-header-faqs">6) What if user upload a wrong kyc detail ?</p>
                                <p class="answer">If user uploads the wrong kyc 10 million xdc token will get locked and hs account will be resigned.</p>
								
								<p class="question sub-header-faqs">7) After uploading kyc and lock the 10 million xdc how much time it takes to become masternode ?</p>
                                <p class="answer">Ater 1 epoch you can see your node as a masternode.</p>
								
								<p class="question sub-header-faqs">8) How many days it will take if i resign my node ?</p>
                                <p class="answer">If user resign from masternode it takes 30 days to get your 10 million XDC.</p>
								
								<p class="question sub-header-faqs">9) Why i see my node as slashed ?</p>
                                <p class="answer">Please check your node is down so you can see your node is slashed.</p>
								
								<p class="question sub-header-faqs">10) My node is now up But it shows me slashed ?</p>
                                <p class="answer">It will check for 3 epoch and after that you will become a masternode.</p>
								
								<p class="question sub-header-faqs">11) Where can i see the rewards ?</p>
                                <p class="answer">You can see your rewards on you masternode owner address or on xinfin explorer.</p>
								
								<p class="question sub-header-faqs">13) What if i forgot my private key ?</p>
                                <p class="answer">All your tokens will be lock. So we alwas say to back up your private key.</p>
								
								<p class="question sub-header-faqs">1) What is the recommended way to access your wallet ?</p>
                                <p class="answer">The recommended way to access wallet is with keystore.</p>
								
								
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
