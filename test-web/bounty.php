<?php 
$title = "XinFin: Community Bounty Program";
$desc = "XinFin Bounty Program, Airdrop for community contributor";

include('inc/header.php') ?>

<section id="banner" style=" background: url('assets/images/xdc-protocol-banner-image2.png') #112b3c; background-repeat: no-repeat; background-position: bottom right;">
    <div class="container">
        <div class="row">
            <div class="bannertext">
          <h1>Bounty Program for Developer</h1>
<p>XinFin launching a Bounty Program for Community! We Invite our Community and all bug bounty hunter to build <strong>DPoS Consensus</strong> !</p>
<p>Participate in the Bounty Program now. Valid only upto <strong>28th Feb, 2019</strong></p>
<p><strong>Bounty: 10Million XDC. </strong></p>
<p><strong>Self KYC compliant Delegated Proof of Stake (DPOS) Consensus on XDC Blockchain</strong></p>
<section>
<div>
<div>
<div>
<div>
<p>Delegated Proof of Stake (DPOS) is the fastest, most efficient, most decentralized, and most flexible consensus model available. DPOS leverages the power of stakeholder approval voting to resolve consensus issues in a fair and democratic way. <strong>Self KYC</strong> feature added more enterpise usecase and regulator friendliness to the Public network.</p>
<p><strong>This document describes the specification for a XinFin DPoS (Delegated Proof of Stake) network.</strong></p>
<ul>
<li>XinFin Spec</li>
<ul>
<li>Voting</li>
<ul>
<li>1. Staking</li>
<li>2. Delegating</li>
<li>3. Withdrawal</li>
</ul>
<li>Validators Registration with KYC document</li>
<li>Choosing Validators</li>
<ul>
<li>Balanced staked</li>
</ul>
<li>Rewards</li>
<li>Fork Peversion, Malicious or Double Spends</li>
<li>Slashing</li>
<ul>
<li>Off-chain</li>
<li>On-chain</li>
</ul>
<li>Parameters</li>
<li>Upgradability:</li>
</ul>
</ul>
<p><strong>Voting</strong></p>
<p>Any network participant will be able to vote for eligible Validators.</p>
<ol>
<li><strong> Staking</strong></li>
</ol>
<p>Users can stake their coins by sending them to the&nbsp;deposit&nbsp;function on the staking contract.</p>
<ul>
<li>The staked amount must be larger than an amount&nbsp;MIN_STAKE</li>
<li>The user will have to wait for 2 epochs (epoch&nbsp;N+2N+2) before being able to vote for a delegate.</li>
</ul>
<ol start="2">
<li><strong> Delegating</strong></li>
</ol>
<ul>
<li>After 2 epochs, a Nominator can vote for a Validator with the staked coins.</li>
<li>The vote will be effective in the epoch&nbsp;N+2N+2,&nbsp;NN&nbsp;being the current epoch.</li>
<li>A new vote can be cast every 2 epochs.</li>
<li>In this version, the entire stake must be voted to a single Validator. If a user wants to delegate to multiple Validators they can split their stake amongst several accounts which can then individually register as Nominators.</li>
</ul>
<ol start="3">
<li><strong> Withdrawal</strong></li>
</ol>
<p>Nominators should be able to withdraw their stake.</p>
<ul>
<li>First they must call&nbsp;dedelegate&nbsp;to remove their vote.</li>
<li>After a specified number of epochs&nbsp;WITHDRAWAL_PERIOD&nbsp;the funds are unlocked and&nbsp;wihdraw&nbsp;function on the smart contract can be called with a withdrawal address.</li>
</ul>
<p><strong>Validators Registration</strong></p>
<p>Any network participant will be able to register as a Validator.</p>
<ul>
<li>A specified value&nbsp;REGISTRATION_VALUE&nbsp;(in the native token) will be sent to a&nbsp;register function on the contract. It will be staked in order to limit the number of participants.</li>
<li>Validator require to add KYC document at the time of staking XDC token.</li>
<li>A hard limit to the total number of registered Validators&nbsp;MAX_REGISTERED_VALIDATORS should be specified.</li>
<li>Any Validator registering will have to wait for the beginning of epoch&nbsp;N+2N+2&nbsp;(current epoch being&nbsp;NN) to be eligible.</li>
<li>A Validator&rsquo;s total stake must be greater than the&nbsp;MIN_TOTAL_STAKE&nbsp;in order for it to be eligible.</li>
<li>The top&nbsp;LL&nbsp;by total stake in a given epoch are chosen as the active Validator Set: those Validators that produce blocks in the next epoch.</li>
</ul>
<p><strong>KYC:</strong></p>
<p>We would like add Know your customer (KYC) identification as its falls under the responsibility of financial institution and/or regulated company. Validator need to upload self KYC document and this document will be visible on open public network. <br /><br /></p>
<p><strong>Choosing Validators</strong></p>
<p>The problem is : how to choose&nbsp;LL&nbsp;Validators for a certain epoch&nbsp;NN?</p>
<ol>
<li><strong> Balanced staked</strong></li>
</ol>
<p>This version of the DPoS contract should balance all the stakes by finding the minimum staked for all eligible Validators (eg. take the top 5000 Validators) and balance all the Validators stakes by refunding the users the contributions that overflowed the stake.</p>
<p>For example, if the minimum stake is&nbsp;SS, we want to balance all stakes to&nbsp;SS. If a Validator has&nbsp;S+100S+100&nbsp;stakes because of 3 contributions:&nbsp;S&minus;10S&minus;10,&nbsp;55&nbsp;and&nbsp;100100, then the last nominator will be refunded&nbsp;9595.</p>
<p>In this model, an epoch would be of the maximum number of Validators allowed, eg. 1,001 (+/- an hour on a 4-seconds block time chain).</p>
<p><strong>Rewards</strong></p>
<p>Rewards are assigned via the&nbsp;Rewards Contract.</p>
<ul>
<li>Rewards for active Validators are calculated as a percentage of total stake,&nbsp;VALIDATOR_REWARD.</li>
<li>Nominators would also need to be rewarded to incentivize them to stake. There are a couple of options here:</li>
<ul>
<li>The reward contract pays directly out to nominators, minus a fee payed the Validator, which could be specified when registering.</li>
<li>The Validator is responsible for calculating/paying out the rewards. This could be done by allowing the Validators to register their own Reward Contract when registering.<br /><br /></li>
</ul>
</ul>
<p><strong>Fork Perversion, Malicious or Double Spends: </strong></p>
<p>To Prevent fork, We like to add feature&nbsp;to re-validate transaction. Every transaction will have 2 signature. one signature will be&nbsp;by block creator&nbsp;and second signature will be&nbsp;block verifier (both separate validator). So block verifier will check for malicious or double spends etc.<br /><br /></p>
<p><strong>Slashing</strong></p>
<p>In order for the network to be secure, misbehaviours must be detected and punished.</p>
<ol>
<li><strong> Off-chain</strong></li>
</ol>
<p>Off-chain detection of misbehaviour is easier to implement and can be used for tricky misbehaviour detections.</p>
<p>In the contract, there will be a&nbsp;reportBenign&nbsp;method (part of the Validator Set Contract) that only Validators can call, passing a message and a block-number, and a slashing will execute if more than 2/3 of the Validators agree on the misbehaviour.</p>
<p>These might include but are not limited to:</p>
<ol>
<li>Validators consistently propagating blocks late</li>
<li>Validators being offline for more than 24 hours.</li>
</ol>
<p>It could slash a portion of the stakes, eg. only 4%<br /><br /></p>
<ol start="2">
<li><strong> On-chain</strong></li>
</ol>
<p>A slashing condition that can be verified on-chain is that a Validator signed-off 2 blocks with the same step (<em>equivocation</em>). Anyone could call this&nbsp;reportMalicious&nbsp;method with the right data, being the two signatures of the Validator, and the message signed, which would contain the step of the blocks.</p>
<p>This method would thus include an RLP decoder.</p>
<p>We could also detect if a Validator hasn&rsquo;t signed any block for the past 256 blocks on-chain, by challenging the Validator to submit the block he signed along with the signature. However, only the last 256 block hashes are available in the EVM, so it might be limited in this context of around 1,000-blocks epochs.</p>
<ol start="3">
<li><strong> Wrong KYC Detail Enter by Validator Node: </strong>.<br />In the contract, there will be a&nbsp;reportMalicious&nbsp;method that only Validators can call, passing a message and a block-number, and a slashing will execute if more than 2/3 of the Validators agree on the reportMalicious. It could slash a portion of the Entire 100% stakes of Validator Node.</li>
</ol>
<p>There may be other on-chain slashable conditions.<br /><br /></p>
<p><strong>Parameters:</strong></p>
<p>Suggested parameter values from requirements:</p>
<p>MIN_STAKE: 1,000,000 XDC<br />VALIDATOD_REWARD: 0.01370%</p>
<p>Rewards_Transfer : Every next block of epoch<br />VALIDATOR_SET_SIZE: 18-21<br />WITHDRAWAL_PERIOD: Set of Epoch (1 Epoch == 500 Blocks)<br />MAX_REGISTERED_VALIDATORS: 5000</p>
<p><strong>Upgradability:</strong></p>
<p>Contracts should be upgradeable, could be implemented with Proxy contracts.</p>
<p>Governance mechanism : In the contract, there will be a&nbsp;Vote&nbsp;method (part of the Validator Set Contract) that only Validators can call, passing a message and a Change function will be execute if more than 2/3 of the Validators agree on the Upgrade.</p>
<p>Contract state would need to be transferred to the new version of the contract, either through a migration process or a persistent storage pattern.</p>
</div>
</div>
<div>&nbsp;</div>
<div>Programming Language: C++, Golang, Python, Rust <br /><br />
<div>&nbsp;</div>
<div><strong>Consensus Related References: </strong></div>
<div>
<ul>
<li><a title="TOMOChain" href="https://github.com/tomochain/tomochain/blob/master/consensus/posv/posv.go" target="_blank">TomoChain</a> (DPoS Code base in Golang)</li>
<li><a href="https://github.com/EOSIO">EOS</a>.</li>
<li><a href="https://github.com/tronprotocol/java-tron">TRON</a>.</li>
</ul>
<p>b. <a href="https://github.com/ethereum/go-ethereum/tree/master/consensus/ethash">Ethereum's Proof of Work ( ethash )</a>.</p>
<p>c. <a href="https://github.com/ethereum/go-ethereum/tree/master/consensus/clique">Ethereum's Proof of Authority ( clique )</a>.</p>
<p>d. <a href="https://github.com/ethereum/casper">Ethereum's Proof of Stake ( casper )</a>.</p>
<p>e. <a href="https://github.com/tomochain/tomochain">Proof of Stake-Velocity ( POSV )</a>.</p>
<p>f. <a href="https://github.com/poanetwork/pos-contracts">Smart contracts for PoS </a>.</p>
</div>
<div>&nbsp;</div>
<div>Help/Questions?</div>
<div>Telegram Channel : <a href="https://t.me/XinFinDevelopers">https://t.me/XinFinDevelopers</a></div>
<div>Slack Channel : <a href="https://xinfin-public.slack.com/messages/CELR2M831/">https://xinfin-public.slack.com/messages/CELR2M831/</a></div>
<div>Forum : <a href="http://XinFin.net">http://XinFin.net</a></div>
<div>&nbsp;</div>
</div>
</div>
</div>
</section>

<?php include('inc/footer.php') ?>
