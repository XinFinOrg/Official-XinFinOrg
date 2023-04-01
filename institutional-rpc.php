<?php 
$title = "Exchange Listing Resource | Blockchain Technology - XinFin";
$desc = "Companies and individuals who are looking for real-time cross border financial transactions can use XinFin's Blockchain platform backed integrated wallet solutions.";

include('inc/header.php') ?>
<link rel='stylesheet' href='assets/css/app-new.css' type='text/css' media='all' />

<section id="contactbanner" style="background: url('assets/images/xdc-protocol-banner-image2.png') #112b3c; background-repeat: no-repeat; background-position: bottom right;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bannertext">
                    <h1>Institutional RPC</h1>
                    <p>Setting Up a Full Node and Dedicated RPC Server for Your DApp on XDC Network: A Comprehensive Guide</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="xdce" class="exchange-listing">
    <div class="container">
        <div class="tab-content pt-0">
            <div id="xinfin-xdc" class="tab-pane fade in active">
                <div id="network">
                    <div class="row pb-1">
                        <div class="col-md-12">
                            <p>A dedicated RPC server on the XDC network is a server exclusively used by a specific DApp or application rather than being shared by multiple clients. This allows for faster response times and more reliable performance, which is important for high-traffic or mission-critical applications.</p>
                            <p>To set up a dedicated RPC server for your DApp on the XDC Network, you need to set up a full node, enable RPC communication, and open the ports for external access. Our guide provides a step-by-step process for setting up a full node and a dedicated RPC server to interact with the XDC network.</p>
                            <p>If you're building a DApp on the XDC Network, a dedicated RPC server can be a valuable tool to ensure the performance and reliability of your application.</p>
                            
                          <p class="sub-header mt-5">Prerequisites</p>
                          <p>Before we get started, make sure you have the following prerequisites:</p>
						  	<ul style="margin-left:40px;">
                                <li>A server or cloud instance with at least 16 GB of RAM and 500 GB of storage.</li>
                                <li>Ubuntu 20.04 LTS operating system.</li>
                            	<li>Basic knowledge of the Linux command line.</li>
                          	</ul>
                            
                          <p class="fs-18 mt-3 mb-1"><strong>Step-1 : Setting up the full node with the Bootstrap command</strong></p>
                            <pre><code>sudo su -c "bash <(wget -qO- https://raw.githubusercontent.com/XinFinOrg/XinFin-Node/master/setup/bootstrap.sh)" root</code></pre>
                            
                            <p>Example:-</p>
                            <pre><code>
$ sudo su -c "bash <(wget -qO- https://raw.githubusercontent.com/XinFinOrg/XinFin-Node/master/setup/bootstrap.sh)" root
[sudo] password for user: 
Please enter your XinFin Network (mainnet/testnet/devnet) :- mainnet
Your running network is mainnet
Please enter your XinFin MasterNode Name :- Demo_Server 
Your Masternode Name is Demo_Server
                            </code></pre>
                            
                            
                            <p class="fs-18 mt-3 mb-1"><strong>Step-2 : Setting up the full node with docker</strong></p>
                            <p>Clone repository</p>
                            <pre><code>git clone https://github.com/XinFinOrg/XinFin-Node.git</code></pre>
                            
                            <p>Enter XinFin-Node directory</p>
                            <pre><code>cd XinFin-Node</code></pre>
                            
                            <p>Install docker & docker-compose</p>
                            <pre><code>sudo ./setup/install_docker.sh</code></pre>
                            
                            <p>Update the .env file with details Create a .env file by using the sample - .env.example</p>
                            <p>Enter either your company or product name in the INSTANCE_NAME field.</p>
                            <p>Enter your email address in the CONTACT_DETAILS field.</p>
                            <pre><code>cd mainnet # testnet
cp env.example .env
nano .env</code></pre>

							<p>Start your Node</p>
                            <pre><code>cd mainnet
sudo docker-compose -f docker-compose.yml up -d</code></pre>
							
                            <p>To stop the node, or if you encounter, any issues use</p>
                            <pre><code>sudo docker-compose -f docker-compose.yml down</code></pre>
                            
                            <p>Attach XDC Console:</p>
                            <pre><code>cd mainnet
sudo bash xdc-attach.sh</code></pre>

							<p class="mt-3">You can check the status of your full node on the stats page at <a href="https://stats1.xinfin.network" target="_blank">https://stats1.xinfin.network</a>, and if you want your full node to get sync faster, you can download the latest snapshot from <a href="https://download.xinfin.network/xdcchain.tar" target="_blank">https://download.xinfin.network/xdcchain.tar</a></p>
                            
                            <p>Follow the snapshot steps to get your full node to sync faster</p>
                            <ul style="margin-left:40px;">
                                <li>sudo docker-compose -f docker-compose.yml down</li>
                                <li>wget <a href="https://download.xinfin.network/xdcchain.tar" target="_blank">https://download.xinfin.network/xdcchain.tar</a></li>
                            	<li>tar -xvzf xdcchain.tar</li>
                                <li>rm -rf xdcchain/XDC</li>
                                <li>mv XDC xdcchain/XDC</li>
                                <li>sudo docker-compose -f docker-compose.yml up -d</li>
                          	</ul>
                            
                            
                            <p class="mt-3">After downloading the snapshot, monitor your node on the stats page. Once your node is fully synced, you can start using the dedicated RPC for your Dapp. Please note that the RPC port used is 8989, and for WebSocket, the port used is 8888.</p>
                            <p>Once you have set up the full node, you can access the dedicated RPC server at http://(your server IP):8989, and the WebSocket at ws://(your server IP):8888. These URLs allow you to communicate with the XDC network and interact with your DApp or application.</p>
                            <p>To enable the 0x prefix RPC Endpoint, you can add the flag "--enable-0x-prefix" to your "startnode.sh" script. This will allow the RPC Endpoint to recognize and process 0x-prefixed addresses.</p>
                            <p>If you have any questions, please feel free to post them on <a href="https://xdc.dev" target="_blank">https://xdc.dev</a></p>
                            </div>
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
<script>
    var activeUrl = localStorage.getItem("currentUrl");
    $('.nav.navbar-nav li:nth-child(5)').addClass('active');
</script>
<?php include('inc/footer.php') ?>