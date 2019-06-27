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
            <div class="container">
                <div class="tab-content">
                    <div id="network" class="tab-pane fade in active">
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
                        
                        
                        <div class="row mt-5" style="margin-top:0%;padding-bottom:0px;">
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

                                <p class="header mb-3">This guide will cater to the following system configurations:</p>
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

                                <p class="header mb-3">About XinFin Masternode</p>
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

                                <p class="sub-header mb-3">FAQ</p>
                                <p class="mb-1"><strong>What is Masternode Node?</strong></p>
                                <p>Masternode is simply a cryptocurrency full node or computer wallet that keeps the full copy of the blockchain record in real-time.</p>
                                <p class="mb-1"><strong>What is Validator node?</strong></p>
                                <p>In XinFin, "Validator Node" are full nodes that incentivize node operators to perform the core consensus functions of running a XDPoS based blockchain. Only Validator Node gets incentive to validate the transaction.</p>
                                <p class="mb-1"><strong>How to become a Validator Node?</strong></p>
                                <p>To become a Validator Node, refer this article : <a href="https://medium.com/xinfin/steps-to-setup-masternode-on-xinfin-mainnet-bf66dda3ea1c" target="_blank">https://medium.com/xinfin/steps-to-setup-masternode-on-xinfin-mainnet-bf66dda3ea1c </a></p>
                                <p class="mb-1"><strong>Near zero transaction fees on network, how validator gets incentive?</strong></p>
                                <p>Network generate additional coin to provide incentive to validator node. Nos depends on network load and numbers of transaction process within the network.</p>
                                <p class="mb-1"><strong>How to get XDC ?</strong></p>
                                <p>XDC is listed with more then 20 Liquidity Exchanges. The full list of exchanges is available at <a href="https://xinfin.io" target="_blank">xinfin.io</a> so that you can purchase XDC from open market to stake under masternode.</p>

                                <p class="header mb-3">Hands on guide: How to Setup Masternode</p>
                                <p class="mb-1">There are two methods to choose from to set up the masternode:</p>
                                <div class="orderList">
                                    <ol>
                                        <li>DIY masternode environment set up</li>
                                        <li>Delegate masternode set up to third party service provider</li>
                                    </ol>
                                </div>

                                <p class="sub-header mb-3">METHOD 1: DIY Masternode environment set up</p>
                                
                                <h2 class="mt-2 mb-2">CentOS or RedHat Enterprise Linux (latest release) or Ubuntu (15.04+) supported</h2>                                
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

                                <p class="mb-1"><strong>Are you a Provider?</strong></p>
                                <p>If yes, then <a href="contactus.php">Contact us</a> to List your service.</p>

                                <p class="mb-1"><strong>Masternode Tools</strong></p>
                                <p class="link-break-out">Community Forum update link: <a href="http://xinfin.net/" target="_blank">http://xinfin.net</a></p>
                                <p class="link-break-out">Telegram Development Community: <a href="https://t.me/XinFinDevelopers" target="_blank">https://t.me/XinFinDevelopers</a></p>
                                <p class="link-break-out">Slack Public Channel: <a href="https://xinfin-public.slack.com/messages/CELR2M831/" target="_blank">https://xinfin-public.slack.com/messages/CELR2M831/</a></p>

                                <p class="header mb-3">Where to operate? Mainnet vs Testnet:</p>
                                <p>In XinFin, there are two networks where you can run XDC protocol: the mainnet and the testnet.</p>
                                <p>The mainnet is used to transact real XDC. The XDC's value is tied to real fiat currency via cryptocurrency exchanges.</p>
                                <p>As developers, you do not want to run application tests with real money. That is what the testnet is for. We call the testnet <a href="http://xinfin.network/" target="_blank">XinFinTestNet</a>.</p>

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
