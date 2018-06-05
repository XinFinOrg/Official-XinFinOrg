<?php 
$title = "XDC Protocol | Blockchain Technology Company -  XinFin";
$desc = "The XDC network is made up of two kinds of network states: public and private. Learn more about the XDC blockchain and the different components that make up this powerful network.";

include('inc/header.php') ?>
<section id="xdc-banner"> 
 <!--  <div id="particle-canvas" ></div> -->
  <div class="container">
  <div class="bannertext">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12"><br/><br/><br/><h1>XDC Protocol</h1>
        <p>Learn about the XDC blockchain and the different components that make up this powerful network. </p>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <img src="assets/images/XDC-Protocol/xdc-protocol-banner-image.png" alt="" class="img-responsive">
      </div>
  <!--  <div id="scroll"><a href="#protocol" class="smooth-scroll" ><span class="arrow-bounce">↓</span></a></div> -->

</div>
</div></div>

  </section>



<section id="protocol">
	<div class="container">		

		 <ul class="nav nav-tabs ">
    <li class="active"><a data-toggle="tab" href="#network">Network</a></li>
    <li><a data-toggle="tab" href="#consensus">Consensus</a></li>
    <li><a data-toggle="tab" href="#masternodes">Setting Up Masternodes</a></li>
    <li><a data-toggle="tab" href="#xdc">XDC Settlement Layer</a></li>
  </ul>

  <div class="tab-content">
    <div id="network" class="tab-pane fade in active">
      <h3>NETWORK</h3>
      <!-- <div class="row">
      	<div class="col-md-4"><hr style="margin-top:35px"></div>
      	<div class="col-md-4"><img src="assets/images/XDC-Protocol/network-icon.png" class="img-responsive" align="center" style="text-align: center; margin:0 auto;   background-color: #002752; padding: 16.5px;" alt=""></div>
      	<div class="col-md-4"><hr style="margin-top:35px"></div>
      </div> -->
      <div class="row" style="margin-top: 0%;">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <p><br/>The XDC network is made up of two kinds of network states: public and private. The public state refers to the part of the network that is easily accessible to all participants. Retail users can open their wallets/accounts and buy, sell, or trade XDC tokens freely.</p>

          <p>Institutional participants have the ability to run private sub-networks. The transactional and messaging activity on these private networks is not visible to to the public state. Special nodes called 'masternodes' are used to host these private sub-network.</p>

          <p>The purpose of these private sub-networks is to allow for restricted visibility of and secure access to the private blockchain state. A number of enterprise applications can be built upon these private sub-networks.</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="assets/images/NETWORK-ANIMA.gif" alt="" class="img-responsive" style="margin-top: -5%;">
        </div>
      </div>
       <hr style="    border-top: 1px solid #b9b9b9;">
      <div class="row" style="margin-top: 5%;">
        <div class="col-md-7 col-sm-6 col-xs-12">
          <img src="assets/images/network-anima-02.gif" alt="" class="img-responsive">
        </div>
        <div class="col-md-5 col-sm-6 col-xs-12" >
          <p style="margin-top:20%">Private sub-networks can be setup in a few combinations. A single masternode can host a private sub-network and run applications on it. A number of masternodes can be part of a single private sub-network. And a single masternode can be part of a number of different private sub-networks.</p>

          <p>The ability for a masternode to host or join a number of private sub-networks allows for a versatile blockchain ecosystem that can run a variety of powerful DApps.</p>
        </div>
      </div>
    </div>

    <div id="consensus" class="tab-pane fade">
      <h3>CONSENSUS</h3>
      <!-- <div class="row">
      	<div class="col-md-4"><hr style="margin-top:35px"></div>
        <div class="col-md-4"><img src="assets/images/XDC-Protocol/consensus-icon.png" class="img-responsive" align="center" style="text-align: center; margin:0 auto;   background-color: #002752; padding: 10px 10.5px;" alt=""></div>
        <div class="col-md-4"><hr style="margin-top:35px"></div>
      </div> -->
      
      <div class="row" style="margin-top:0%;">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <p style="margin-top: 5%;">Public blockchains achieve consensus through the process of Proof of Work. Groups of people running specialized hardware run the mining protocol in order to write blocks to the blockchain and obtain the payout for successful block creation.</p>

          <p>The number of miners has increased drastically and the difficulty of mining has been increased by the protocol devs appropriately. This has unfortunately resulted in massive processing power increase, resulting in unsustainable energy consumption rates by the network. The energy consumption by the Bitcoin network is now greater than that of entire countries.</p>

          <p>The XDC Hybrid blockchain has been designed free of PoW(or PoS) consensus. The consensus process for different parts of the blockchain are described below.</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="assets/images/con-01.png" alt="" style="margin: 0 auto; margin-top: 10%;" class="img-responsive">
        </div>
      </div>
      <hr style="    border-top: 1px solid #b9b9b9;">
      <div class="row" style="margin-top: 5%;">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="assets/images/con-02.png" alt="" style="margin: 0 auto;margin-top: 23%;" class="img-responsive">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <p>Describing BFT- The Byzantine General's problem refers to a thought experiment that has direct applications in computer networking.</p>

          <p>Problem: Five generals of the Byzantine army are trying to co-ordinate their war strategy. They all have the ability to send messages to all other generals(and to their sub-ordinates). They have two kinds of messages that they send: 'attack' or 'retreat'.</p>

          <p>Assuming they are storming a city or on the battlefield, they must all communicate with each other and coordinate their actions. If all generals are honest, they send the same message as their plan of action and they either attack successfully or retreat successfully. This can only happen if they all execute the same action.</p>

          <p>Now we consider the case where a general is traitorous or the message has been compromised. This would result in the defeat of the army.</p>

          <p>The concerns that arise from this historical construct are very relevant to distributed systems. How do we ensure that the entire network is in 'agreement' about a particular action or that a certain message or transaction is 'correct'.</p>

        </div>
      </div>
       <hr style="    border-top: 1px solid #b9b9b9;">
      <div class="row" style="margin-top: 5%;">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <p style="margin-top: 20%;">We use a PBFT derived consensus mechanism to guarantee 'agreement' and 'correctness' of the network. This ensures that the transactions.</p>

          <p>In order to host masternodes that take part in the consensus mechanism, institutions must obtain and hold stake in special smart contracts. These smart contracts and the masternode 'internal states' are monitored by services. These programs can very quickly suspend the activity of truant masternodes and seize associated stake holdings.</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="assets/images/XDC-Protocol/consensus-03.png" alt="" style="margin: 0 auto;" class="img-responsive">
        </div>
      </div>
    </div>


    <div id="masternodes" class="tab-pane fade">
      <h3>SETTING UP MASTERNODES</h3>
     <!--  <div class="row">
      	<div class="col-md-4"><hr style="margin-top:35px"></div>
      	<div class="col-md-4"><img src="assets/images/XDC-Protocol/masternode-icon.png" class="img-responsive" align="center" style="text-align: center; margin:0 auto;   background-color: #002752; padding: 9px 16px;" alt=""></div>
      	<div class="col-md-4"><hr style="margin-top:35px"></div>
      </div> -->
      <div class="row" style="margin-top: 0%;">
                 <div class="col-md-6 col-sm-6 col-xs-12" style="margin:0 auto; text-align: left;">
          <ol>
          <li>To start the process of hosting a masternode please send an email to us at this address.</li><li>Buy stake in the XDC blockchain(by buying XDC tokens) and obtain Tier 2 or Tier 3 membership.</li> <li>Use our incredibly easy to deploy masternode scripts and be up and running in minutes.</li> <li> Host a private sub-network and start developing your DApp quickly from our well documented dev resources. </li> <li>Join existing private sub-networks or create networks with other masternodes.</li>
          </ol>

        </div> <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="assets/images/XDC-Protocol/masternode-01.png" alt="" class="img-responsive" style="margin:0 auto; text-align: center;">
        </div>

      

      </div>
    </div>

    <div id="xdc" class="tab-pane fade">
           <h3 style="font-size:36px !important ">XDC SETTLEMENT LAYER</h3>
      <!-- <div class="row">
        <div class="col-md-4"><hr style="margin-top:35px"></div>
        <div class="col-md-4"><img src="assets/images/XDC-Protocol/settlement-icon.png" class="img-responsive" align="center" style="text-align: center; margin:0 auto;   background-color: #002752; padding: 13px 13.5px;" alt=""></div>
        <div class="col-md-4"><hr style="margin-top:35px"></div>
      </div> -->
      <h3>Public Cryptocurrency and Fiat integration with the XinFin Hybrid Blockchain</h3>
  <div class="row">
    <div class="col-md-5"><img src="assets/images/xdc-settlement-Layer-dia.png" class="img-responsive" align="center" style="padding-bottom: 20px"></div>
<div class="col-md-7">
<p>The XinFin Hybrid blockchain’s underlying token is called the XDC or XinFin Digital Contract. The XDC token can be traded freely on the public state of the XinFin blockchain. Retail users or institutions can operate accounts that can buy, sell, or trade XDCs through the wallet application.<br/><br/>

      The XinFin blockchain also has advanced smart contracting capabilities and highly customizable private sub-networks that act as permissioned blockchains. While the XDC token can be integrated with private or public DApps(to act as a settlement layer), the team here at XinFin believes that interoperability with other blockchains is a very real need in an ecosystem rife with monolithic cryptocurrencies and tokens.<br/><br/>

      Our version of interoperability includes the ability for institutions or individuals to create DApps, smart contracts, or custom tokens, while accepting or paying in the cryptocurrency of their choice. What this means is that a DApp or smart contract created on the XinFin Hybrid blockchain can make use of highly liquid existing cryptocurrencies like Bitcoin(and Bitcoin forks), Ethereum, Ripple, etc.</p>
<div>
 
 <span id="text">
<p>
     There are significant advantages to this relationship between the XDC blockchain and public cryptocurrencies. For Bitcoin, Bitcoin Cash, or Ripple, the absence of a smart contracting layer makes possible usecases very limited. By plugging into the XDC blockchain, holders of these cryptocurrencies can leverage fast, secure, and scalable smart contracts(and DApps) for their more involved usecases.<br/><br/>

   Even for cryptocurrencies like Ethereum that have built in smart contracting capabilities, running the DApps on the XDC blockchain is a wiser choice. This is because the Ethereum blockchain, like most other popular cryptocurrencies, have become victims of their rampant success. Their networks are getting bogged down by more transactions than they can handle and rising costs make high frequency transactions impossible. For example, IoT based applications are impossible to run on the Ethereum public blockchain due to the high cost per transaction and the low throughput(~15 tps) of the network.<br/><br/>

      By using the highly secure(hybrid-permissioned), scalable(~300 tps), fast(&#60;1 sec block creation time) XinFin blockchain, these cryptocurrencies can be used to provide the liquidity for various use cases while the XDC network acts as a smart contracting and settlement layer.<br/><br/>

      The cryptocurrencies we will be supporting will be revealed shortly. We plan to integrate all major public cryptocurrencies with the XDC blockchain to allow for a kind of interoperability that is sorely needed to realize the decentralized utopia that blockchain technology offers.</p>
  </span>
</div>
<div class="btn-container">
<a id="toggle">Read More</a>
</div>
   
     
  
   

      

      </div>

    </div>
    </div>
    
  </div>
		

	


		<div class="clear"></div>

		</div>
</section>




<script>
    var activeUrl = localStorage.getItem("currentUrl");
    $('.nav.navbar-nav li:nth-child(3)').addClass('active');
</script>




<?php include('inc/footer.php') ?>