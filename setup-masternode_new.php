<?php
$title =
    "XDC Network Masternodes - The Backbone of a Fast, Secure, and Decentralized Network";
$desc =
    'XDC Network Masternodes are the pillars of blockchain performance, ensuring high-speed transaction validation, network security, and decentralized governance.';

include 'inc/header.php';
?>

<!-- Hero Home Starts -->
<section class="px-200 px-t250-b100 hero-inside">
    <!--<div class="container p-relative">-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 hero-content">
                <h1 class="title-m text-center mb-0">XDC Network Masternodes</h1>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">The Backbone of a Fast, Secure, and Decentralized Network</h2>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">
                    XDC Network Masternodes are the pillars of blockchain performance, ensuring high-speed transaction validation, network security, and decentralized governance. But they’re just one part of the broader node architecture on
                    XDC.
                </h2>
                <div class="btn-block">
                    <a href="https://master.xinfin.network/" target="_blank">
                        <button class="btn-blue">Setup Your Masternode</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Home Ends -->

<!-- Types of Nodes Starts -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">Types of Nodes on the XDC Network</h3>
                <div class="subtitle subtitle-s text-center">Let's explore all the types of Nodes on the XDC Network.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <h4 class="fw-600 mb-2">1. Full Node</h4>
                        <ul class="listStyle fs-6 mt-3">
                            <li>Anyone can set up a Full Node on the XDC Network.</li>
                            <li><span class="fw-600">No staking required — no rewards.</span></li>
                            <li>Used primarily to fetch data from the blockchain.</li>
                            <li>Ideal for developers and explorers who want access to real-time blockchain state without participating in block validation.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <h4 class="fw-600 mb-2">2. Archive Node</h4>
                        <ul class="listStyle fs-6 mt-3">
                            <li>An enhanced version of the Full Node.</li>
                            <li><span class="fw-600">Stores entire historical blockchain data.</span></li>
                            <li>Useful for applications and dApps that need deep historical reference points.</li>
                            <li>Not mandatory for standard users but valuable for analytics, explorers, and data-heavy services.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <h4 class="fw-600 mb-2">3. Masternode</h4>
                        <ul class="listStyle fs-6 mt-3">
                            <li>The most critical type of node on the XDC Network.</li>
                            <li>Requires a minimum contribution of <span class="fw-600">10 million XDC</span> tokens (no upper limit).</li>
                            <li><span class="fw-600">Validates transactions and mines blocks.</span></li>
                            <li>Participates in consensus and governance voting.</li>
                            <li>Ensures network uptime, security, and decentralization.</li>
                            <li>Earns block rewards and incentives for active participation.</li>
                            <li>Must maintain <span class="fw-600">100% uptime</span> on a dedicated or cloud server infrastructure.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <h4 class="fw-600 mb-2">4. Protector Node</h4>
                        <ul class="listStyle fs-6 mt-3">
                            <li>A new addition under XDC 2.0 consensus architecture.</li>
                            <li>Requires a <span class="fw-600">minimum 10 million XDC</span> contribution (no upper limit).</li>
                            <li><span class="fw-600">Acts as backup</span> for Core Validator Masternodes — 2x Protector Nodes for each Core Validator.</li>
                            <li>Enhances network fault tolerance and supports seamless block production during disruptions.</li>
                            <li><span class="fw-600">Earns proportional rewards</span> from the Core Validator’s reward pool (based on the number of associated Protector Nodes).</li>
                            <li><span class="fw-600">Ensures network resilience</span> through redundancy, adding another layer of security.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <h4 class="fw-600 mb-2">5. Observer Node</h4>
                        <ul class="listStyle fs-6 mt-3">
                            <li>Another new addition in XDC 2.0’s layered consensus architecture.</li>
                            <li>Also requires a <span class="fw-600">minimum of 10 million XDC</span> with <span class="fw-600">no technical limit on staking.</span></li>
                            <li><span class="fw-600">Non-block-producing node</span> that participates by observing consensus and broadcasting transactions.</li>
                            <li>Ideal for users and organizations that want to contribute to decentralization and potentially move up to Protector or Validator roles.</li>
                            <li><span class="fw-600">Receives 50% of the Protector Node reward</span>, offering passive earning potential without active consensus participation.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Types of Nodes Ends -->

<section class="px-80 hero-ftr">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">Why Masternodes and Validator Infrastructure Matter</h3>
                <div class="subtitle subtitle-s text-center">Let's explore all the components.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/inside-page/masternode/transaction-validation.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Transaction Validation</div>
                        <p class="fs-6 mb-0">Only Masternodes (Core Validators) are responsible for validating and approving transactions under the <span class="fw-600">XDC 2.0 Proof-of-Stake consensus.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/inside-page/masternode/instant-transactions.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Instant Transactions</div>
                        <p class="fs-6 mb-0">
                            Masternodes enable near-instant confirmation, which powers seamless experiences for real-world payments and dApps.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/inside-page/masternode/governance-participation.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Governance Participation</div>
                        <p class="fs-6 mb-0">Validator and Protector Nodes actively vote on proposals, contribute to upgrade decisions, and shape the direction of the network.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/inside-page/masternode/security.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Security & Stability</div>
                        <p class="fs-6 mb-0">A layered node architecture — Core Validators, Protector Nodes, and Observer Nodes — creates fault-tolerant, distributed infrastructure resistant to downtime or attack.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/inside-page/masternode/incentivised-participation.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Incentivized Participation</div>
                        <p class="fs-6 mb-0">Validators, Protectors, and Observers are rewarded for their contribution with XDC tokens, making participation financially beneficial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">XDC Validator Network Stats (Illustrative)</h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="card h-100 overflow-hidden pt-4 pb-4 px-3 bg-light75 br-20 border-0">
                    <div class="card-info text-center w-100">
                        <p class="fw-500 fs-6">Masternodes (Core Validators)</p>
                        <div class="fw-600 lh-1 fs-1 mb-3 counter-api"><span id="mn-masternodes">108</span></div>
                        <p class="fw-500 fs-7 mb-0"><span class="stats-highlight-text fw-600">ROLE:</span> Block validation, consensus</p>
                        <p class="fw-500 fs-7"><span class="stats-highlight-text fw-600">REWARDS:</span> 6000 XDC per epoch</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="card h-100 overflow-hidden pt-4 pb-4 px-3 bg-light75 br-20 border-0">
                    <div class="card-info text-center w-100">
                        <p class="fw-500 fs-6">Protector Nodes</p>
                        <div class="fw-600 lh-1 fs-1 mb-3 counter-api"><span id="mn-protectornodes">216</span> <span class="fs-6">(2x Core Validators)</span></div>
                        <p class="fw-500 fs-7 mb-0"><span class="stats-highlight-text fw-600">ROLE:</span> Redundancy, fault tolerance</p>
                        <p class="fw-500 fs-7"><span class="stats-highlight-text fw-600">REWARDS:</span> Rv ÷ number of Protectors</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="card h-100 overflow-hidden pt-4 pb-4 px-3 bg-light75 br-20 border-0">
                    <div class="card-info text-center w-100">
                        <p class="fw-500 fs-6">Observer Nodes</p>
                        <div class="fw-600 lh-1 fs-1 mb-3 counter-api"><span id="mn-observernodes">Unlimited</span></div>
                        <p class="fw-500 fs-7 mb-0"><span class="stats-highlight-text fw-600">ROLE:</span> Network observation</p>
                        <p class="fw-500 fs-7"><span class="stats-highlight-text fw-600">REWARDS:</span> ½ × Protector Node reward</p>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="card bg-transparent overflow-hidden pt-4 pb-4 px-3 br-20 border-0">
                    <div class="card-info text-center w-100">
                        <div class="fw-600 lh-1 fs-1 mb-3 counter-api"><span id="standby">256</span></div>
                        <p class="fw-500 fs-6">StandBy Masternode</p>
                    </div>
                </div>
            </div>-->
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="card h-100 overflow-hidden pt-4 pb-4 px-3 bg-light75 br-20 border-0">
                    <div class="card-info text-center w-100">
                        <p class="fw-500 fs-6">Total XDC Locked</p>
                        <div class="fw-600 lh-1 fs-1 mb-3"><span class="counter-api" id="tvl">2730.82</span> <span id="tvltext"></span></div>
                        <p class="fw-500 fs-7 mb-0">XDC</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-flex">
            <div class="col-lg-10 offset-lg-1 mt-4">
                <p class="subtitle text-center mb-0">
                    <i>
                        <span class="fw-600">DISCLAIMER:</span> All numbers provided are indicative and based on past performance; there is no guarantee of similar rewards in the future. Participation in setting up a masternode or standby
                        node is part of an ongoing innovation project and should be viewed as a contribution to the advancement of blockchain technology, with no assurance of future returns.
                    </i>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Masternode Requirements Starts -->
<section class="px-80 pt-4 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">Node Requirements</h3>
                <div class="subtitle subtitle-s text-center">XDC Masternodes help the network remain fast, scalable, secure and decentralized.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">NODE TYPE</th>
                            <th scope="col">MINIMUM XDC</th>
                            <th scope="col">UPTIME</th>
                            <th scope="col">NOTES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row" data-label="NODE TYPE" class="data-label">Full Node</td>
                            <td data-label="MINIMUM XDC">None</td>
                            <td data-label="UPTIME">Optional</td>
                            <td data-label="NOTES">No rewards</td>
                        </tr>
                        <tr>
                            <td scope="row" data-label="NODE TYPE" class="data-label">Archive Node</td>
                            <td data-label="MINIMUM XDC">None</td>
                            <td data-label="UPTIME">Optional</td>
                            <td data-label="NOTES">No rewards, full chain data</td>
                        </tr>
                        <tr>
                            <td scope="row" data-label="NODE TYPE" class="data-label">Observer Node</td>
                            <td data-label="MINIMUM XDC">10M</td>
                            <td data-label="UPTIME">Not mandatory</td>
                            <td data-label="NOTES">½ × Protector reward</td>
                        </tr>
                        <tr>
                            <td scope="row" data-label="NODE TYPE" class="data-label">Protector Node</td>
                            <td data-label="MINIMUM XDC">10M</td>
                            <td data-label="UPTIME">Recommended 100%</td>
                            <td data-label="NOTES">Redundancy support</td>
                        </tr>
                        <tr>
                            <td scope="row" data-label="NODE TYPE" class="data-label">Core Validator Node</td>
                            <td data-label="MINIMUM XDC">10M</td>
                            <td data-label="UPTIME">100% uptime required</td>
                            <td data-label="NOTES">Block rewards and governance</td>
                        </tr>
                    </tbody>
                </table>

                <!--<div class="col-lg-4 col-md-4 col-sm-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/masternode/collateral.svg" class="center img-fluid" />
                        <p class="fs-6 mt-3 mb-3">Collateral</p>
                        <div class="fw-600 lh-1 fs-5">10 Million XDC</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/masternode/uptime.svg" class="center img-fluid" />
                        <p class="fs-6 mt-3 mb-3">Uptime</p>
                        <div class="fw-600 lh-1 fs-5">100% Uptime</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/masternode/hardware.svg" class="center img-fluid" />
                        <p class="fs-6 mt-3 mb-3">Hardware</p>
                        <div class="fw-600 lh-1 fs-5">Dedicated VPS Server</div>
                    </div>
                </div>
            </div>-->
            </div>
        </div>
    </div>
</section>
<!-- Masternode Requirements Ends -->

<!-- Third-Party Masternode Services Starts -->
<section class="px-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mb-5">
                <h3 class="title-m text-center">Third-Party Masternode Services</h3>
                <div class="subtitle subtitle-s text-center">
                    If you do not have the resources to maintain a masternode, there are a number of third-party services and volunteers willing to provide you with top-notch support and services.
                </div>
            </div>
        </div>
        <div class="row row-flex">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://indsoft.net" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/indsoft-light.svg" class="center logoFs img-fluid iconL" alt="indsoft.net" />
                                    <img src="assets/images/inside-page/masternode/indsoft.svg" class="center logoFs img-fluid iconD" alt="indsoft.net" />
                                    <!--<div class="card-infoHead mt-5 mb-3">Indsoft System</div>
                                    <p class="fs-6 mb-0">Indsoft System is a simple, and easy to use masternode hosting platform for all your needs.</p>
                                    <a href="https://indsoft.net" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://nodeforge.io/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/nodeforge-light.svg" class="center logoFs img-fluid iconL" alt="nodeforge.io" />
                                    <img src="assets/images/inside-page/masternode/nodeforge.svg" class="center logoFs img-fluid iconD" alt="nodeforge.io" />
                                    <!--<div class="card-infoHead mt-5 mb-3">Node Forge</div>
                                    <p class="fs-6 mb-0">A non-custodial multi-cloud blockchain infrastructure and masternode hosting platform.</p>
                                    <a href="https://nodeforge.io/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://www.zeeve.io/blockchain-protocols/deploy-xdc-node/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/zeeve-light.svg" class="center logoFs img-fluid iconL" alt="zeeve.io" />
                                    <img src="assets/images/inside-page/masternode/zeeve.svg" class="center logoFs img-fluid iconD" alt="zeeve.io" />
                                    <!--<div class="card-infoHead mt-5 mb-3">Zeeve</div>
                                    <p class="fs-6 mb-0">Zeeve streamlines the deployment of full node and validator nodes with a simple, no-code interface.</p>
                                    <a href="https://www.zeeve.io/blockchain-protocols/deploy-xdc-node/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://www.blockdaemon.com/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/blockdaemon-light.svg" class="center logoFs img-fluid iconL" alt="zeeve.io" />
                                    <img src="assets/images/inside-page/masternode/blockdaemon.svg" class="center logoFs img-fluid iconD" alt="zeeve.io" />
                                    <!--<div class="card-infoHead mt-5 mb-3">Blockdaemon</div>
                                    <p class="fs-6 mb-0">Blockdaemon powers integrated business solutions such as dedicated nodes setup, APIs & more.</p>
                                    <a href="https://www.blockdaemon.com/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://tatum.io/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/tatum-light.svg" class="center logoFs img-fluid iconL" alt="tatum.io" />
                                    <img src="assets/images/inside-page/masternode/tatum.svg" class="center logoFs img-fluid iconD" alt="tatum.io" />
                                    <!--<div class="card-infoHead mt-5 mb-3">Tatum</div>
                                    <p class="fs-6 mb-0"></p>
                                    <a href="https://tatum.io/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://nownodes.io/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/nownodes-light.svg" class="center logoFs img-fluid iconL" alt="nownodes.io" />
                                    <img src="assets/images/inside-page/masternode/nownodes.svg" class="center logoFs img-fluid iconD" alt="nownodes.io" />
                                    <!--<div class="card-infoHead mt-5 mb-3">NOWNodes</div>
                                    <p class="fs-6 mb-0"></p>
                                    <a href="https://nownodes.io/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://www.asternodes.io/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/asternodes-light.svg" class="center logoFs img-fluid iconL" alt="asternodes.io" />
                                    <img src="assets/images/inside-page/masternode/asternodes.svg" class="center logoFs img-fluid iconD" alt="asternodes.io" />
                                    <!--<div class="card-infoHead mt-5 mb-3">Asternodes</div>
                                    <p class="fs-6 mb-0"></p>
                                    <a href="https://www.asternodes.io/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://www.ankr.com/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/ankr-light.svg" class="center logoFs img-fluid iconL" alt="ankr.com" />
                                    <img src="assets/images/inside-page/masternode/ankr.svg" class="center logoFs img-fluid iconD" alt="ankr.com" />
                                    <!--<div class="card-infoHead mt-5 mb-3">Ankr</div>
                                    <p class="fs-6 mb-0"></p>
                                    <a href="https://www.ankr.com/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://thirdweb.com/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/thirdweb-light.svg" class="center logoFs img-fluid iconL" alt="thirdweb.com" />
                                    <img src="assets/images/inside-page/masternode/thirdweb.svg" class="center logoFs img-fluid iconD" alt="thirdweb.com" />
                                    <!--<div class="card-infoHead mt-5 mb-3">thirdweb</div>
                                    <p class="fs-6 mb-0"></p>
                                    <a href="https://thirdweb.com/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                        <a href="https://goldsky.com/" target="_blank">
                            <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                                <div class="card-info text-center">
                                    <img src="assets/images/inside-page/masternode/goldsky-light.svg" class="center logoFs img-fluid iconL" alt="goldsky.com" />
                                    <img src="assets/images/inside-page/masternode/goldsky.svg" class="center logoFs img-fluid iconD" alt="goldsky.com" />
                                    <!--<div class="card-infoHead mt-5 mb-3">Goldsky</div>
                                    <p class="fs-6 mb-0"></p>
                                    <a href="https://goldsky.com/" target="_blank" class="btn socialHead-button mt-auto">
                                        Visit Now
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>-->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-flex">
            <div class="col-lg-10 offset-lg-1 mt-4">
                <p class="subtitle text-center mb-0">
                    <i> <span class="fw-600">DISCLAIMER:</span> XDC Network does not officially endorse third-party services. Please perform due diligence before proceeding. </i>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Third-Party Masternode Services Ends -->

<!-- Guides and Documentation Starts -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">Guides and Documentation</h3>
                <div class="subtitle subtitle-s text-center">Looking for more details or instructions? No Problem. We've got you covered.</div>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-lg-5 col-md-5 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mb-2">One Click Installer</div>
                        <p class="fs-6 mt-3 mb-0">Download the appropriate One-Click Installer for your operating system (Windows or Linux).</p>
                        <a href="oneclick-installer" class="btn socialHead-button internalLink mt-auto">
                            Learn More
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mb-2">Docker Setup</div>
                        <p class="fs-6 mt-3 mb-0">Setting up XDC masternode using Docker is a convenient way to deploy and manage node.</p>
                        <a href="docker-setup" class="btn socialHead-button internalLink mt-auto">
                            Learn More
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-lg-10 col-md-10 mt-2 mb-4">
                <h3 class="title-m">FAQs</h3>
                <div class="subtitle subtitle-s">Here are some frequently asked questions.</div>
            </div>
            <div class="col-lg-10 col-md-10 mt-2 mb-2">
                <div class="accordion accordion-flush fs-6" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                How can I set up Msternode on XDC Network?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You can set up the master on the Windows server with a click installer or using docker-compose file for more details, please visit XinFin Masternode setup page.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Are there any risks associated with running a Masternode?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">As with any cryptocurrency venture, there are inherent risks involved. It's essential to do thorough research and understand the potential risks before setting up a Masternode.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Can I withdraw my rewards from the Masternode?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You can withdraw the rewards you earn from running a Masternode on the XDC Network.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                What's the benefit of running a Masternode?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Running a Masternode allows you to participate in the XDC Network actively, contribute to its operation, and earn rewards for your involvement.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                How many Masternodes can I run simultaneously?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You can run as many Masternodes as you wish! However, each Masternode must meet specific requirements outlined on the XDC Network Masternode Setup page.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                What's the distinction between a Coinbase Address and a Masternode Owner Address?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">The Coinbase Address is your Masternode address, whereas the Masternode Owner Address is associated with the wallet where you staked 10 million XDC.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                When are Masternode rewards distributed on the XDC Network?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Masternode rewards are distributed to owners after each epoch, consisting of 900 blocks.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                How long does it take to complete one epoch in the XDC Network?
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">An epoch completes in approximately 50 minutes, during which 900 blocks are mined.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingNine">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                What is the Transaction Per Second (TPS) capacity of the XDC Network?
                            </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Currently, the XDC Network boasts a robust capacity of 2000+ transactions per second (TPS).</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTen">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                Is there a TestNet available for the XDC Network?
                            </button>
                        </h2>
                        <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Certainly! You can explore and experiment with the XDC Network's TestNet at <a href="http://apothem.network" target="_blank">http://apothem.network</a>.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEleven">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                Why is it essential to back up your Coinbase address?
                            </button>
                        </h2>
                        <div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Backing up your Coinbase address is crucial. If lost, your Masternode will be inaccessible, requiring you to resign from the network.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwelve">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                What happens if I lose my Coinbase address?
                            </button>
                        </h2>
                        <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Loss of your Coinbase address results in your Masternode going offline. You will need to resign from the Masternode under such circumstances.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThirteen">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                                What if I misplace my keystore or owner wallet's private key?
                            </button>
                        </h2>
                        <div id="flush-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="flush-headingThirteen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Losing your keystore or private key means your funds are inaccessible, and you won't receive rewards. Always ensure you have secure backups to prevent this loss.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFourteen">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="false" aria-controls="flush-collapseFourteen">
                                How long does it take to complete the resignation process for my node?
                            </button>
                        </h2>
                        <div id="flush-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFourteen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Resigning from a Masternode requires a 30-day period before you can retrieve your 10 million XDC.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFifteen">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                                Why do I see my node marked as "slashed"?
                            </button>
                        </h2>
                        <div id="flush-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFifteen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">If your node is down, it may be marked as "slashed". Ensure your node remains operational to avoid this status.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Guides and Documentation Ends -->

<!-- Need More Help Starts -->
<section class="px-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h3 class="title-m text-center">Need More Help?</h3>
                <div class="subtitle subtitle-s text-center">Seeking help with setting up an XDC masternode? Access XDC documents, ask in the XDC Forum, or join Telegram's Developers community for assistance.</div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-lg-12 text-center">
                <div class="btn-block multi mt-5">
                    <a href="https://www.xdc.dev/" target="_blank">
                        <button class="btn-blue"><i class="fas fa-comments me-1"></i> XDC Forum</button>
                    </a>
                    <a href="https://t.me/xinfintech" target="_blank">
                        <button class="btn-blue"><i class="fa fa-paper-plane me-1"></i> XDC Dev Community</button>
                    </a>
                    <a href="https://docs.xdc.network" target="_blank">
                        <button class="btn-blue"><i class="fa fa-book me-1"></i> XDC Documents</button>
                    </a>
                    <a href="https://coderun.ai/" target="_blank">
                        <button class="btn-blue">
                            <i class="fa me-1">
                                <svg class="svg-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 39 39">
                                    <path
                                        fill="#FFFFFF"
                                        d="M32,0H7.1C3.2,0,0,3.2,0,7.1V32C0,35.9,3.2,39,7.1,39H32c3.9,0,7.1-3.2,7.1-7.1V7.1C39,3.2,35.9,0,32,0zM7.4,16.3l6.5-7.1h6.9l-6.6,7.1l6.6,7.1h-6.9L7.4,16.3z M26.3,30.2h-6.9l6.6-7.1l-6.6-7.1h6.9l6.5,7.1L26.3,30.2z"
                                    />
                                </svg>
                            </i>
                            AI based Technical Support
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Need More Help Ends -->

<?php include 'inc/footer.php'; ?>
