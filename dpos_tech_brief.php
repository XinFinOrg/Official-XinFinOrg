<?php 
$title = "XinFin XDPoS Technical Brief";
$desc = "XinFin XDPoS Consensus Technical Detail";
include('inc/header.php') ?>

<section id="contactbanner"> 
	<!--  <div id="particle-canvas" ></div> -->
	<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 bannertext">
                <h1>XinFin DPoS Consensus: XDPoS</h1>
                <p>XinFin DPoS-Consensus! We Invite Technical Community to Contribute towards the Enhancement of <strong>XDPoS Consensus</strong><br/><br/><br/><br/></p> 
            </div>    
        </div>
    </div>
</div>


<section id="protocol" class="bounty">
	<div class="container">
        <div class="tab-content">
            <div id="network" class="tab-pane fade in active">
                <div class="row" style="margin-top:0%;padding-bottom:0px;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1>XinFin Delegated Proof of Stake (XDPOS) Consensus</h1>
                        <p><strong>Self KYC compliant XinFin Delegated Proof of Stake (XDPoS) Consensus on XDC Blockchain</strong></p>
                        <p>XinFin Delegated Proof of Stake (XDPoS) is the fastest, efficient, decentralized, and flexible consensus model available. XDPoS leverages the power of stakeholder consensus issues in a fair and democratic way. <strong>Self KYC</strong> feature adds more enterpise usecases and regulator friendliness to the Public network.</p>
                        <p><strong>This document describes the specification for a XinFin DPoS (Delegated Proof of Stake) network.</strong></p>
                        <p><strong>XinFin Spec</strong></p>                        
                        <ul>
                            <div class="orderList">
                                <ol>
                                    <li> Staking</li>
                                    <li> Delegating</li>
                                    <li> Withdrawal</li>
                                </ol>
                            </div>
                        <li> Validators Registration with KYC document</li>
                        <li> Choosing Validators</li>
                            <div class="orderList">
                            <ol>
                                <li> Balanced staked</li>
                            </ol>
                            </div>
                        <li> Rewards</li>
                        <li> Fork Peversion, Malicious or Double Spends</li>
                        <li> Slashing</li>
                       		<div class="orderList">
                                <ol>
                                    <li> Off-chain</li>
                                    <li> On-chain</li>
                                </ol>
                            </div>
                        <li> Parameters</li>
                        <li> Upgradability</li>
                        </ul>                        
                        

                        <ol>
                        	<li> <strong>Staking</strong></li>                        
                        	<p>Users can stake their coins by sending them to the <code>deposit</code> function on the staking contract.</p>
                            <ul>
                            	<li> The staked amount must be larger than an amount <code>MIN_STAKE</code></li>
                            	<li> The user will have to wait for 2 epochs (epoch N+2) before being able to vote for a delegate.</li>
                            </ul>
                            <li> <strong>Delegating</strong></li>
                            <ul>
                        		<li> After 2 epochs, a Nominator can vote for a Validator with the staked coins.</li>
                        		<li> The vote will be effective in the epoch N+2, N being the current epoch.</li>
                                <li> A new vote can be casted every 2 epochs.</li>
                        		<li> In this version, the entire stake must be voted to a single Validator. If a user wants to delegate to multiple Validators they can split their stake amongst several accounts which can then individually register as Nominators.</li>
                        	</ul>
                            <li> <strong>Withdrawal</strong></li>
                            <p>Nominators should be able to withdraw their stake.</p>
                            <ul>
                        		<li> First they must call <code>delegate</code> to remove their vote.</li>
                        		<li> After a specified number of epochs <code>WITHDRAWAL_PERIOD</code> the funds are unlocked and <code>withdraw</code> function on the smart contract can be called with a withdrawal address.</li>
                        	</ul>
                        </ol>
                        
                        <p class="sub-header">Validators Registration</p>
                        <p>Any network participant will be able to register as a Validator.</p>
                        <ul class="mb-2">
                        	<li> A specified value <code>REGISTRATION_VALUE</code> (in the native token) will be sent to a <span class="text-bg-grey">register</span> function on the contract. It will be staked in order to limit the number of participants.</li>
                            <li> Validator is required to add KYC document at the time of staking XDC token.</li>
                            <li> A hard limit to the total number of registered Validators <code>MAX_REGISTERED_VALIDATORS</code> should be specified.</li>
                            <li> Any Validator registering will have to wait for the beginning of epoch N+2 (current epoch being N) to be eligible.</li>
                            <li> A Validator's total stake must be greater than the <code>MIN_TOTAL_STAKE</code> in order for it to be eligible.</li>
                            <li> The top validators (by a total stake) in a given epoch are chosen as the active Validator Set: those Validators that produce blocks in the next epoch.</li>
                        </ul>
                        
                        <p><strong>KYC:</strong></p>
                        <p>Masternode Holder need to Add Know your customer (KYC) identification as its falls under the responsibility of financial institution and/or regulated company. Validator needs to upload self KYC document and this document will be visible on open public network.</p>
                        
                        <p class="sub-header">Choosing Validators</p>
                        <p>The problem is : how to choose L Validators for a certain epoch N?</p>
                        <ol>
                            <li> <strong>Balanced staked</strong></li>
                            <p>This version of the DPoS contract should balance all the stakes by finding the minimum staked for all eligible Validators (eg. take the top 1000 Validators) and balance all the Validators stakes by refunding the users the contributions that overflowed the stake.</p>
                            <p>For example, if the minimum stake is S, we want to balance all stakes to S. If a Validator has S+100 stakes because of 3 contributions: S−10, 5 and 100, then the last nominator will be refunded 95.</p>
                            <p>In this model, an epoch would be of the maximum number of Validators allowed, eg. 1,001 (+/- an hour on a 4-seconds block time chain).</p>
                        </ol>
                        
                        <p class="sub-header">Rewards</p>
                        <p>Rewards are assigned via the Rewards Contract.</p>
                        <ul>
                        	<li> Rewards for active Validators are calculated as a percentage of total stake, <code>VALIDATOR_REWARD</code>.</li>
                            <li> Nominators would also need to be rewarded to incentivize them to stake. There are a couple of options here:</li>
                            <ul>
                            	<li> The reward contract pays directly out to nominators, minus a fee payed the Validator, which could be specified when registering.</li>
                                <li> The Validator is responsible for calculating/paying out the rewards. This could be done by allowing the Validators to register their own Reward Contract when registering.</li>
                            </ul>
                        </ul>
                        
                        <p class="sub-header">Fork Perversion, Malicious or Double Spends:</p>
                        <p>To Prevent fork, we like to add feature to re-validate transaction. Every transaction will have 2 signatures. one signature will be by block creator and second signature will be by block verifier (both separate validator). So, block verifier will check for malicious or double spends etc.</p>
                        
                        <p class="sub-header">Slashing</p>
                        <p>In order for the network to be secure, misbehaviours must be detected and punished.</p>
                        <div class="orderList">
                        <ol>
                        	<li> <strong>Off-chain</strong></li>                        
                        	<p>Off-chain detection of misbehaviour is easier to implement and can be used for tricky misbehaviour detections.
In the contract, there will be a <code>reportBenign</code> method (part of the Validator Set Contract) that only Validators can call, passing a message and a block-number, and a slashing will execute if more than 2/3 of the Validators agree on the misbehaviour.</p>
                            <p>These might include but are not limited to:</p>
                            <ol>
                            	<li> Validators consistently propagating blocks late</li>
                            	<li> Validators being offline for more than 24 hours</li>
                            </ol>
                            <p>It could slash a portion of the stakes, eg. only 4%</p>
                            <li> <strong>On-chain</strong></li>
                            <p>A slashing condition that can be verified on-chain is that a Validator signed-off 2 blocks with the same step (equivocation). Anyone could call this <code>reportMalicious</code> method with the right data, being the two signatures of the Validator, and the message signed, which would contain the step of the blocks.</p>
                            <p>This method would thus include an RLP decoder. We could also detect if a Validator hasn't signed any block for the past 256 blocks on-chain, by challenging the Validator to submit the block he signed along with the signature. However, only the last 256 block hashes are available in the EVM, so it might be limited in this context of around 1,000-blocks epochs.</p>
                            <ol>
                            	<li> <strong>Wrong KYC Detail Enter by Validator Node</strong></li>
                            	<li>In the contract, there will be a <code>reportMalicious</code> method that only Validators can call, passing a message and a block-number, and a slashing will execute if more than 2/3 of the Validators agree on the <code>reportMalicious</code>. It could slash a portion of the Entire 100% stakes of Validator Node.</li>
                            </ol>
                            <p>There may be other on-chain slashable conditions.</p>
                        </ol>
                        
                        <p class="sub-header">Parameters</p>
                        <p class="text-left mb-1">Suggested parameter values from requirements:</p>
                        <p class="text-left mb-1"><code>MIN_STAKE</code> : 10000000 XDC</p>
                        <p class="text-left mb-1"><code>VALIDATOR_REWARD</code> : 10% Yearly</p>
                        <p class="text-left mb-1"><code>REWARDS_TRANSFER</code> : Every next block of epoch</p>
                        <p class="text-left mb-1"><code>VALIDATOR_SET_SIZE</code> : 108</p>
                        <p class="text-left mb-1"><code>WITHDRAWAL_PERIOD</code> : Set of Epoch (1 Epoch == 500 Blocks)</p>
                        <p><code>MAX_REGISTERED_VALIDATORS</code> : 5000</p>
                        
                        <p class="sub-header">Upgradability</p>
                        <p>Contracts should be upgradeable, could be implemented with Proxy contracts.</p>
                        <p>Governance mechanism : In the contract, there will be a Vote method (part of the Validator Set Contract) that only Validators can call, passing a message and a Change function will be execute if more than 2/3 of the Validators agree on the Upgrade.</p>
                        <p>Contract state would need to be transferred to the new version of the contract, either through a migration process or a persistent storage pattern.</p>
                        <p>Programming Language: C++, Golang, Python, Rust</p>
                        

                        
                        <p class="sub-header">Help/Questions?</p>
                        <p class="link-break-out"><strong>Telegram Channel:</strong> <a href="https://t.me/XinFinDevelopers" target="_blank">https://t.me/XinFinDevelopers</a></p>
                        <p class="link-break-out"><strong>Slack Channel:</strong> <a href="https://xinfin-public.slack.com/messages/CELR2M831/" target="_blank">https://xinfin-public.slack.com/messages/CELR2M831/</a></p>
                        <p class="link-break-out"><strong>Forum:</strong> <a href="http://XinFin.net" target="_blank">http://XinFin.net</a></p>
                        
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
