<?php
$title = "XinFin Public XDPOS Consensus: XDPoS";
$desc = "XinFin's Delegated Proof of Stake is a decentralised way of validating transactions occurring on the XinFin Hybrid Blockchain and appending those to the truth ledger.";

include('inc/header.php') ?>

<section id="contactbanner">
	<!-- <div id="particle-canvas" ></div> -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 bannertext">
				<h1>XinFin Public XDPOS Consensus</h1>
                <p><strong>Delegated Proof of Stake</strong> (also known as <strong>XDPoS</strong>) is a consensus algorithm used to sustain digital democracy throughout the XinFin Hybrid Blockchain network.</p>
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
                            <p>XinFin's XDPoS mechanism is a decentralized way of validating transactions that occur on XinFin's Hybrid Blockchain and appending those to the truth ledger. Unlike alternative consensus algorithms, XinFin's Delegated Proof of Stake uses of real-time voting to elect a pool of validators (or delegates).</p>
                            <p>The network validators are responsible for preserving the sanctity of XinFin's Hybrid Blockchain network. The robust nexus ensures the security of the Blockchain.</p>
                            <ul class="mb-3">
                                <li>Validators are responsible to validate and convert the transactions created by the producers into legitimate blocks.</li>
                                <li>Validators are responsible for broadcasting these blocks throughout the Hybrid Blockchain network.</li>
                                <li>Validators must keep their node in sync with the Hybrid Blockchain network at all times.</li>
                                <li>Validators are responsible for solving any unforeseen network issues in a manner that is free, fair and democratic.</li>
                                <li>Validators are responsible for keeping the network secure by operating in accordance to the above-mentioned expectations.</li>
                            </ul>
                            <p><strong>Let's explore why XDPoS proved to be the most sagacious choice for XinFin.</strong></p>
                            <ul class="mb-2">
                                <li>XinFin's XDPoS proved to be the most truly democratic process due to the fact that even a machine with regular configurations was able to carry itself as a validator node. The prospect of catering to horizontal scaling by the addition of new nodes was well accommodated by the algorithmic design of XinFin's XDPoS.</li>
                                <li>XinFin's XDPoS algorithm passed the 'environmentally-friendly' test exceptionally. There is absolutely no requirement for high energy for XDC token staking. This is buttressed by the fact that a typical computer can be used to stake XDC tokens.</li>
                                <li>XinFin's Public XDPoS Consensus algorithm comes equipped with KYC enforcement on the nodes themselves, thus solving substantial problems with traditional Enterprise KYC providers. This will help streamline enterprise adoption. The consensus's Self-KYC feature enables corporate clientele to create and manage their own identity by uploading all necessary details and documentation and allowing participants access to the KYC data. This adds a KYC standard that is friendly to both enterprise participants and regulators.</li>
                                <li>XinFin's Blockchain is agile and alacritous. XinFin's Hybrid Blockchain has recorded transaction speeds up to 2000 TPS on the public chain with unlimited horizontal scaling due to multiple private chains running at the same time. Such numbers create an enhanced user experience, which is currently lacking in the ecosystem.</li>
                                <li>Upcoming sharding will bring about several changes in the blockchain ecosystem. For instance, the management of chain-data will become much simpler than ever before. The complete overhead of keeping in sync with the entire blockchain history would be divided and as a result, would reduce manifold.</li>
                                <li>If a peer node does not wish to participate in the consensus yet remain in the network, they can operate as "light-nodes" or "regulatory nodes". These nodes do not hold the entire data strand of the blockchain. XinFin's Hybrid Blockchain architecture allows the provision for light nodes/regulatory nodes to operate seamlessly.</li>
                            </ul>
                            <p><strong>Specifications:</strong> 10 Million XDC staked - Max 5000 validators registration at any time. Stake XDC and setup Masternode.</p>
                            <p><strong>Future Proofing:</strong> Pooling can be enabled with a minimum 1 Million pooled from each Masternodes Host. At a certain time in the future community consensus can be achieved with 2/3rd vote to have pooled participants host an independent validator. The goal is to ensure the network is feasible and operate in a manner that is equally incentivised for both customers and validators.</p>
                            <a href="dpos_tech_brief">
                                <button class="btn-hover color-1 mb-1">Technical Brief on XDPoS Consensus</button>
                            </a>
                            <a href="setup-masternode">
                                <button class="btn-hover color-3 mb-1">Stake XDC & Setup MasterNode</button>
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
