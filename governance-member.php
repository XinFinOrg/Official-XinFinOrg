<?php
$title = "Governance Member for XinFin.Network";
$desc = "Invitation to become a Governance Member for XinFin.Network";

include('inc/header.php') ?>

<section id="contactbanner">
	<!-- <div id="particle-canvas" ></div> -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 bannertext">
				<h1>Governance Member</h1>
                <p>Invitation to become a Governance Member for XinFin.Network</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
			</div>

      		<!-- <div id="scroll"><a href="#xdce" class="smooth-scroll" ><span class="arrow-bounce">↓</span></a></div> -->

    	</div>
	</div>
</section>


<section id="protocol" class="xifin-dpos-consensus">
        <div class="container">
            <div class="tab-content">
                <div id="network" class="tab-pane fade in active">
                    <div class="row" style="margin-top: 0%; padding-bottom: 0px;">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p>XinFin Network is a hybrid trust+trustless network between participants. The network itself operates with randomized consensus between masternodes. With approx 500+ masternodes, the network is fairly decentralized and can work with characteristics of a trustless network.</p>
                            <p>However, XinFin Network is also designed to be a trusted network with its key participants that can participate in Governance as well as compliance of the network.</p>
                            <p><strong>Council Nodes:</strong> (Invitation for limited members.)</p>
                            <p>A Council Node needs to run a masternode - 10M XDC : <a href="setup-masternode">How to Setup Masternode</a>.</p>
                            <p>A Council Node also needs to stake 90M XDC other than the masternode. (Locked for 1 year)</p>
                            
                            <p class="mb-1"><strong>Responsibilities:</strong></p>
                            <ul class="mb-3">
                                <li>Maintain a healthy masternode</li>
                                <li>Participate in regional compliance</li>
                                <li>Participate in whitelisting XDC with regulators</li>
                                <li>Participate in maintaining healthy liquidity of XDC ecosystem</li>
                                <li>Participate in growing developer ecosystem and enterprise ecosystem regionally</li>
                                <li>Participate in Governance vote of XinFin Network</li>
                            </ul>
                            
                            <p class="mb-1"><strong>Rewards and Benefits:</strong></p>
                            <ul class="mb-3">
                                <li>Upto 5M XDC / year will be sent as Council rewards from ecosystem pool (Approval of 5M XDC is voting based from masternodes)</li>
                                <li>The rewards will reduce after every year</li>
                                <li>Participate in future Roadmap</li>
                            </ul>
                            <a href="contactus">
                                <button class="btn-hover color-1">Become a Member</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
    </section>

	<script>
        var activeUrl = localStorage.getItem("currentUrl");
        $('.nav.navbar-nav li:nth-child(5)').addClass('active');
    </script>

	<?php include('inc/footer.php') ?>
