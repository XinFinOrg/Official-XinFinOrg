<?php
$title =
    "Setup Masternode - Empowering the XDC Network's Efficiency and Security";
$desc =
    'XDC Network Masternodes are the backbone of the network, ensuring lightning-fast transaction validation and enhanced security.';

include 'inc/header.php';
?>

<!-- Hero Home Starts -->
<section class="px-200 px-t250-b100 hero-inside">
    <!--<div class="container p-relative">-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 hero-content">
                <h1 class="title-m text-center mb-0">Setup Masternode</h1>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">XDC Network Masternodes are the backbone of the network, ensuring lightning-fast transaction validation and enhanced security.</h2>
            </div>
        </div>
    </div>
</section>
<!-- Hero Home Ends -->

<section class="px-40 pt-0 hero-ftr">
    <div class="container">
        <div class="row row-flex">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <img src="assets/images/inside-page/masternode/transaction-validation.svg" class="img-fluid" />
                                <div class="card-infoHead mt-3 mb-3">Transaction Validation</div>
                                <p class="fs-6 mb-0">
                                    Masternodes are essential for transaction validation and processing on the XDC Network. They use their consensus and voting power to approve legitimate transactions, effectively thwarting fraudulent and
                                    malicious activities.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <img src="assets/images/inside-page/masternode/instant-transactions.svg" class="img-fluid" />
                                <div class="card-infoHead mt-3 mb-3">Instant Transactions</div>
                                <p class="fs-6 mb-0">
                                    By facilitating InstantSend technology, Masternodes enable swift and near-instantaneous transaction confirmations. This feature enhances the network's usability, making it ideal for real-time
                                    applications.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <img src="assets/images/inside-page/masternode/decentralized.svg" class="img-fluid" />
                                <div class="card-infoHead mt-3 mb-3">Decentralized Network</div>
                                <p class="fs-6 mb-0">With a distributed network of Masternodes, XDC achieves a higher degree of decentralization, reducing single points of failure and making it more resistant to attacks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <img src="assets/images/inside-page/masternode/security.svg" class="img-fluid" />
                                <div class="card-infoHead mt-3 mb-3">Incentivized Security</div>
                                <p class="fs-6 mb-0">Operators are rewarded for their contribution to network stability and security, encouraging more participation and a robust defense against potential threats.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5">
                <p class="subtitle subtitle-s fw-500 text-center mb-4">
                    In summary, XDC Masternodes form the backbone of the network's security infrastructure, ensuring a safe, efficient, and resilient blockchain ecosystem for users and developers alike.
                </p>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="card bg-transparent overflow-hidden pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                    <div class="card-info text-center w-100">
                        <div class="fw-600 lh-1 fs-1 mb-3 counter-api"><span id="mn-masternodes">108</span></div>
                        <p class="fw-500 fs-6">Masternode</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="card bg-transparent overflow-hidden pt-4 pb-4 px-3 br-20 border-0">
                    <div class="card-info text-center w-100">
                        <div class="fw-600 lh-1 fs-1 mb-3 counter-api"><span id="standby">150</div>
                        <p class="fw-500 fs-6">StandBy Masternode</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="card bg-transparent overflow-hidden pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                    <div class="card-info text-center w-100">
                        <div class="fw-600 lh-1 fs-1 mb-3"><span class="counter-api" id="tvl">2730.82</span> <span id="tvltext"></span></div>
                        <p class="fw-500 fs-6">Total XDC Locked</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Masternode Requirements Starts -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">Masternode Requirements</h3>
                <div class="subtitle subtitle-s text-center">XDC Masternodes help the network remain fast, scalable, secure and decentralized.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mb-2">
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
            </div>
        </div>
    </div>
</section>
<!-- Masternode Requirements Ends -->

<!-- Third-Party Masternode Services Starts -->
<section class="px-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">Third-Party Masternode Services</h3>
                <div class="subtitle subtitle-s text-center">
                    If you do not have the resources to maintain a masternode, there are a number of third-party services and volunteers willing to provide you with top-notch support and services.
                </div>
            </div>
        </div>
        <div class="row row-flex">
            <div class="col-lg-10 offset-lg-1">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                            <div class="card-info text-center">
                                <img src="assets/images/inside-page/masternode/indsoft-light.svg" class="center logoHp img-fluid iconL" alt="indsoft.net" />
                                <img src="assets/images/inside-page/masternode/indsoft.svg" class="center logoHp img-fluid iconD" alt="indsoft.net" />
                                <div class="card-infoHead mt-5 mb-3">Indsoft System</div>
                                <p class="fs-6 mb-0">Indsoft System is a simple, and easy to use masternode hosting platform for all your needs.</p>
                                <a href="https://indsoft.net" target="_blank" class="btn socialHead-button mt-auto">
                                    Visit Now
                                    <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card px-4 p-5 bg-lightgray br-20 border-0">
                            <div class="card-info text-center">
                                <img src="assets/images/inside-page/masternode/nodeforge-light.svg" class="center logoHp img-fluid iconL" alt="nodeforge.io" />
                                <img src="assets/images/inside-page/masternode/nodeforge.svg" class="center logoHp img-fluid iconD" alt="nodeforge.io" />
                                <div class="card-infoHead mt-5 mb-3">Node Forge</div>
                                <p class="fs-6 mb-0">A non-custodial multi-cloud blockchain infrastructure and masternode hosting platform.</p>
                                <a href="https://nodeforge.io/" target="_blank" class="btn socialHead-button mt-auto">
                                    Visit Now
                                    <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-flex">
            <div class="col-lg-10 offset-lg-1 mt-4">
                <p class="subtitle text-center mb-0">
                    <i>
                        <span class="fw-600">DISCLAIMER:</span> Please be advised that the third-party services listed do not constitute an endorsement by XDC and are provided for informational purposes only. Please exercise caution when
                        using any third-party services, as it is outside of our control.
                    </i>
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
                        <button class="btn-blue"><i class="fa fa-paper-plane me-1"></i> Telegram Developers Community</button>
                    </a>
                    <a href="https://howto.xinfin.org/" target="_blank">
                        <button class="btn-blue"><i class="fa fa-book me-1"></i> XDC Documents</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Need More Help Ends -->

<?php include 'inc/footer.php'; ?>
