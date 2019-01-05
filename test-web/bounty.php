<?php 
$desc = "XinFin Bounty Program, Airdrop for community contributor";
include('inc/header.php') ?>

<section id="contactbanner"> 
	<!--  <div id="particle-canvas" ></div> -->
	<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 bannertext">
                <h1>Bounty Program for Developer</h1>
                <p>XinFin launching a Bounty Program for Community! We Invite our Community and all bug bounty hunter to build <strong>DPoS Consensus</strong> !<br/><br/><br/><br/></p> 
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
                        <h1>Bounty: 10Million XDC.</h1>
                        <p><strong>Self KYC compliant Delegated Proof of Stake (DPOS) Consensus on XDC Blockchain</strong></p>
                        <p>Delegated Proof of Stake (DPOS) is the fastest, most efficient, most decentralized, and most flexible consensus model available. DPOS leverages the power of stakeholder approval voting to resolve consensus issues in a fair and democratic way. Self KYC feature added more enterpise usecase and regulator friendliness to the Public network.</p>
                        <p><strong>This document describes the specification for a XinFin DPoS (Delegated Proof of Stake) network.</strong></p>
                        <p><strong>XinFin Spec</strong></p>                        
                        <ul>
                        <li>Voting</li>
                            <div class="orderList">
                                <ol>
                                    <li> Staking</li>
                                    <li> Delegating</li>
                                    <li> Withdrawal</li>
                                </ol>
                            </div>
                        <li>Validators Registration with KYC document</li>
                        <li>Choosing Validators</li>
                            <div class="orderList">
                            <ol>
                                <li> Balanced staked</li>
                            </ol>
                            </div>
                        <li>Rewards</li>
                        <li>Fork Peversion, Malicious or Double Spends</li>
                        <li>Slashing</li>
                       		<div class="orderList">
                                <ol>
                                    <li> Off-chain</li>
                                    <li> On-chain</li>
                                    <li> Wrong KYC Detail Enter by Validator Node</li>
                                </ol>
                            </div>
                        <li>Parameters</li>
                        <li>Upgradability</li>
                        </ul>                        
                        
                        <p class="sub-header">Voting</p>
                        <p>Any network participant will be able to vote for eligible Validators.</p>
                        <div class="orderList">
                        <ol>
                        	<li><strong> Staking</strong></li>                        
                        	<p>Users can stake their coins by sending them to the deposit function on the staking contract.</p>
                            <ul>
                            	<li>The staked amount must be larger than an amount MIN_STAKE</li>
                            	<li>The user will have to wait for 2 epochs (epoch N+2N+2) before being able to vote for a delegate.</li>
                            </ul>
                            <li> <strong>Delegating</strong></li>
                            <ul>
                        		<li>After 2 epochs, a Nominator can vote for a Validator with the staked coins.</li>
                        		<li>The vote will be effective in the epoch N+2N+2, NN being the current epoch.</li>
                                <li>A new vote can be cast every 2 epochs.</li>
                        		<li>In this version, the entire stake must be voted to a single Validator. If a user wants to delegate to multiple Validators they can split their stake amongst several accounts which can then individually register as Nominators.</li>
                        	</ul>
                            <li> <strong>Withdrawal</strong></li>
                            <p>Nominators should be able to withdraw their stake.</p>
                            <ul>
                        		<li>First they must call dedelegate to remove their vote.</li>
                        		<li>After a specified number of epochs WITHDRAWAL_PERIOD the funds are unlocked and wihdraw function on the smart contract can be called with a withdrawal address.</li>
                        	</ul>
                        </ol>
                        
                        <p class="sub-header">Validators Registration</p>
                        <p>Any network participant will be able to register as a Validator.</p>
                        <ul class="mb-2">
                        	<li>A specified value REGISTRATION_VALUE (in the native token) will be sent to a register function on the contract. It will be staked in order to limit the number of participants.</li>
                            <li>Validator require to add KYC document at the time of staking XDC token.</li>
                            <li>A hard limit to the total number of registered Validators MAX_REGISTERED_VALIDATORS should be specified.</li>
                            <li>Any Validator registering will have to wait for the beginning of epoch N+2N+2 (current epoch being NN) to be eligible.</li>
                            <li>A Validator's total stake must be greater than the MIN_TOTAL_STAKE in order for it to be eligible.</li>
                            <li>The top LL by total stake in a given epoch are chosen as the active Validator Set: those Validators that produce blocks in the next epoch.</li>
                        </ul>
                        
                        <p><strong>KYC:</strong></p>
                        <p>We would like add Know your customer (KYC) identification as its falls under the responsibility of financial institution and/or regulated company. Validator need to upload self KYC document and this document will be visible on open public network.</p>
                        
                        <p class="sub-header">Choosing Validators</p>
                        <p>The problem is : how to choose LL Validators for a certain epoch NN?</p>
                        <ol>
                            <li> <strong>Balanced staked</strong></li>
                            <p>This version of the DPoS contract should balance all the stakes by finding the minimum staked for all eligible Validators (eg. take the top 5000 Validators) and balance all the Validators stakes by refunding the users the contributions that overflowed the stake.</p>
                            <p>For example, if the minimum stake is SS, we want to balance all stakes to SS. If a Validator has S+100S+100 stakes because of 3 contributions: S−10S−10, 55 and 100100, then the last nominator will be refunded 9595.</p>
                            <p>In this model, an epoch would be of the maximum number of Validators allowed, eg. 1,001 (+/- an hour on a 4-seconds block time chain).</p>
                        </ol>
                        
                        <p class="sub-header">Rewards</p>
                        <p>Rewards are assigned via the Rewards Contract.</p>
                        <ul>
                        	<li>Rewards for active Validators are calculated as a percentage of total stake, VALIDATOR_REWARD.</li>
                            <li>Nominators would also need to be rewarded to incentivize them to stake. There are a couple of options here:</li>
                            <ul>
                            	<li>The reward contract pays directly out to nominators, minus a fee payed the Validator, which could be specified when registering.</li>
                                <li>The Validator is responsible for calculating/paying out the rewards. This could be done by allowing the Validators to register their own Reward Contract when registering.</li>
                            </ul>
                        </ul>
                        
                        <p class="sub-header">Fork Perversion, Malicious or Double Spends:</p>
                        <p>To Prevent fork, We like to add feature to re-validate transaction. Every transaction will have 2 signature. one signature will be by block creator and second signature will be block verifier (both separate validator). So block verifier will check for malicious or double spends etc.</p>
                        
                        <p class="sub-header">Slashing</p>
                        <p>In order for the network to be secure, misbehaviours must be detected and punished.</p>
                        <div class="orderList">
                        <ol>
                        	<li> <strong>Off-chain</strong></li>                        
                        	<p>Off-chain detection of misbehaviour is easier to implement and can be used for tricky misbehaviour detections.</p>
                            <p>In the contract, there will be a reportBenign method (part of the Validator Set Contract) that only Validators can call, passing a message and a block-number, and a slashing will execute if more than 2/3 of the Validators agree on the misbehaviour.</p>
                            <p>These might include but are not limited to:</p>
                            <ol>
                            	<li>Validators consistently propagating blocks late</li>
                            	<li>Validators being offline for more than 24 hours.</li>
                            </ol>
                            <p>It could slash a portion of the stakes, eg. only 4%</p>
                            <li> <strong>On-chain</strong></li>
                            <p>A slashing condition that can be verified on-chain is that a Validator signed-off 2 blocks with the same step (equivocation). Anyone could call this reportMalicious method with the right data, being the two signatures of the Validator, and the message signed, which would contain the step of the blocks.</p>
                            <p>This method would thus include an RLP decoder.</p>
                            <p>We could also detect if a Validator hasn't signed any block for the past 256 blocks on-chain, by challenging the Validator to submit the block he signed along with the signature. However, only the last 256 block hashes are available in the EVM, so it might be limited in this context of around 1,000-blocks epochs.</p>
                            <li> <strong>Wrong KYC Detail Enter by Validator Node</strong></li>
                            <p>In the contract, there will be a reportMalicious method that only Validators can call, passing a message and a block-number, and a slashing will execute if more than 2/3 of the Validators agree on the reportMalicious. It could slash a portion of the Entire 100% stakes of Validator Node.</p>
                            <p>There may be other on-chain slashable conditions.</p>
                        </ol>
                        
                        <p class="sub-header">Parameters</p>
                        <p class="mb-1">Suggested parameter values from requirements:</p>
                        <p class="mb-1"><strong>MIN_STAKE:</strong> 1,000,000 XDC</p>
                        <p class="mb-1"><strong>VALIDATOD_REWARD:</strong> 0.01370%</p>
                        <p class="mb-1"><strong>REWARDS_TRANSFER:</strong> Every next block of epoch</p>
                        <p class="mb-1"><strong>VALIDATOR_SET_SIZE:</strong> 18-21</p>
                        <p class="mb-1"><strong>WITHDRAWAL_PERIOD:</strong> Set of Epoch (1 Epoch == 500 Blocks)</p>
                        <p><strong>MAX_REGISTERED_VALIDATORS:</strong> 5000</p>
                        
                        <p class="sub-header">Upgradability</p>
                        <p>Contracts should be upgradeable, could be implemented with Proxy contracts.</p>
                        <p>Governance mechanism : In the contract, there will be a Vote method (part of the Validator Set Contract) that only Validators can call, passing a message and a Change function will be execute if more than 2/3 of the Validators agree on the Upgrade.</p>
                        <p>Contract state would need to be transferred to the new version of the contract, either through a migration process or a persistent storage pattern.</p>
                        <p>Programming Language: C++, Golang, Python, Rust</p>
                        
                        <div class="references-box">
                        <p class="sub-header">Consensus Related References</p>
                        <ul>
                        	<li><a href="https://github.com/tomochain/tomochain/blob/master/consensus/posv/posv.go" target="_blank">TomoChain</a> (DPoS Code base in Golang)</li>
                            <li><a href="https://github.com/EOSIO" target="_blank">EOS</a></li>
							<li><a href="https://github.com/tronprotocol/java-tron" target="_blank">TRON</a></li>
							<li><a href="https://github.com/ethereum/go-ethereum/tree/master/consensus/ethash" target="_blank">Ethereum's Proof of Work ( ethash )</a></li>
                            <li><a href="https://github.com/ethereum/go-ethereum/tree/master/consensus/clique" target="_blank">Ethereum's Proof of Authority ( clique )</a></li>
                            <li><a href="https://github.com/ethereum/casper" target="_blank">Ethereum's Proof of Stake ( casper )</a></li>
                            <li><a href="https://github.com/tomochain/tomochain" target="_blank">Proof of Stake-Velocity ( POSV )</a></li>
                            <li><a href="https://github.com/poanetwork/pos-contracts" target="_blank">Smart contracts for PoS </a></li>
                        </ul>
                        </div>
                        
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
