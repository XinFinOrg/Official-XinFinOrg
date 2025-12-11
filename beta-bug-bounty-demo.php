<?php
$title = "XDC Bug Bounty Program";
$desc = "XDC Bug Bounty Program: Enhancing XDC Network Together";

include('inc/header.php') ?>

<!-- Hero Home Starts -->
<section class="px-200 px-t250-b100 hero-inside">
    <!--<div class="container p-relative">-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 hero-content">
                <h1 class="title-m text-center mb-0">Beta Bug Bounty Program</h1>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">Earn up to 000,000 USD and a place on the leaderboard by finding protocol, client and language compiler bugs affecting the XDC Network.</h2>
                <div class="btn-block mt-4">
                    <a href="#" target="_blank" class="btn extLink-button pe-4">
                        Submit a Bug
                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                    <a href="#" target="_blank">
                        <button class="btn-transp-bordered">Read Rules</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Home Ends -->

<!-- Masternode Requirements Starts -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 mb-5">
                <h3 class="title-m text-center mb-3">In Scope</h3>
                <div class="subtitle subtitle-s text-center">
                    Our bug bounty program spans end-to-end: from soundness of protocols (such as the blockchain consensus model, the wire and p2p protocols, proof of stake, etc.) and protocol/implementation compliance to network security
                    and consensus integrity. Classical client security as well as security of cryptographic primitives are also part of the program. When in doubt, send an email to
                    <a href="mailto:bounty@xinfin.org">bounty@xinfin.org</a> and ask us. You may also submit a disclosure/vulnerability directly to <a href="mailto:bounty@xinfin.org">bounty@xinfin.org</a>, in which case we ask that you
                    encrypt the message using our <a href="#">PGP Key</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 mt-3 mb-3">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/icons/specification-bug.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Specification Bugs</div>
                        <p class="fs-6 mb-0">The XDC Specifications detail the design rationale for the Execution Layer and Consensus Layer.</p>
                        <a href="#" class="btn socialHead-button externalLink pt-0 mt-4">
                            Consensus Layer Specifications
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#" class="btn socialHead-button externalLink pt-0 mt-3">
                            Execution Layer Specifications
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>

                        <p class="fs-5 fw-500 mt-5 mb-3">Types of Bugs</p>
                        <ul class="listStyle fs-6">
                            <li>Safety/finality-breaking bugs</li>
                            <li>Denial of service (DOS) vectors</li>
                            <li>Inconsistencies in assumptions, like situations where honest validators can be slashed</li>
                            <li>Calculation or parameter inconsistencies</li>
                        </ul>

                        <p class="fs-5 fw-500 mt-5 mb-3">Specification Documents</p>
                        <a href="#" target="_blank" class="btn extStripLink-button pe-4 d-flex justify-content-between align-items-center mb-1">
                            <div>XDC Chain</div>
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="btn extStripLink-button pe-4 d-flex justify-content-between align-items-center mb-1">
                            <div>Fork Choice</div>
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="btn extStripLink-button pe-4 d-flex justify-content-between align-items-center mb-1">
                            <div>Solidity Despost Contract</div>
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="btn extStripLink-button pe-4 d-flex justify-content-between align-items-center">
                            <div>Peer-to-peer Networking</div>
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-3 mb-3">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/icons/client-bug.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Client Bugs</div>
                        <p class="fs-6">
                            Clients run the XDC Network, and they need to follow the logic set out in the specification and be secure against potential attacks. The bugs we want to find are related to the implementation of the protocol.
                        </p>
                        <p class="fs-6 mb-0">
                            Currently execution layer clients (ClientName, ClientName, ClientName, ClientName and ClientName) and consensus layer clients (ClientName, ClientName, ClientName, ClientName and ClientName) are included in the
                            Bug Bounty Program. More clients may be added as they complete audits and become production ready.
                        </p>

                        <p class="fs-5 fw-500 mt-5 mb-3">Types of Bugs</p>
                        <ul class="listStyle fs-6">
                            <li>Spec non-compliance issues</li>
                            <li>Unexpected crashes, RCE or denial of service (DOS) vulnerabilities</li>
                            <li>Any issues causing irreparable consensus splits from the rest of the network</li>
                        </ul>

                        <p class="fs-5 fw-500 mt-5 mb-3">Helpful Links</p>
                        <a href="#" target="_blank" class="btn extStripLink-button pe-4 d-flex justify-content-between align-items-center mb-1">
                            <div class="d-flex align-items-center"><img src="assets/images/icons/xdc-white.svg" class="img-fluid iconD w-20px me-2" /><img src="assets/images/icons/xdc.svg" class="img-fluid iconL w-20px me-2" /> XDC Network</div>
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-3 mb-3">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/icons/language-compiler-bug.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Language Compiler Bugs</div>
                        <p class="fs-6">
                            The Solidity and Vyper compilers are in scope of the bug bounty program. Please include all details necessary to reproduce the vulnerability such as: Input program that triggers the bug, Compiler version
                            affected, Target EVM version, Framework/IDE if applicable, EVM execution environment/client if applicable and Operating system, Please include steps to reproduce the bug you have found in as much detail as
                            possible.
                        </p>
                        <p class="fs-6 mb-0">Solidity and Vyper does not hold security guarantees regarding compilation of untrusted input – and we do not issue rewards for crashes of the compiler on maliciously generated data.</p>

                        <p class="fs-5 fw-500 mt-5 mb-3">Helpful Links</p>
                        <a href="#" target="_blank" class="btn extStripLink-button pe-4 d-flex justify-content-between align-items-center mb-1">
                            <div>Solidity</div>
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="btn extStripLink-button pe-4 d-flex justify-content-between align-items-center mb-1">
                            <div>Vyper</div>
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-3 mb-3">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/icons/deposit-contract-bug.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Deposit Contract Bugs</div>
                        <p class="fs-6 mb-0">The specifications and source code of the XDC Chain Deposit Contract is part of the bug bounty program.</p>

                        <p class="fs-5 fw-500 mt-5 mb-1">Helpful Links</p>
                        <a href="#" class="btn socialHead-button externalLink pt-0 mt-4">
                            Deposit Contract Specifications
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#" class="btn socialHead-button externalLink pt-0 mt-4">
                            Deposit Contract Source Code
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-3 mb-3">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <img src="assets/images/icons/dependency-bug.svg" class="img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Dependency Bugs</div>
                        <p class="fs-6 mb-0">
                            Certain dependencies are crucial for the XDC Network to function, and some of these have been added to the bug bounty program. Currently, the list of dependencies included in the bug bounty program are A-XYZ-0000
                            and AB-CDEG-0000.
                        </p>

                        <p class="fs-5 fw-500 mt-5 mb-1">Helpful Links</p>
                        <p class="mb-0">
                            <a href="#" class="btn socialHead-button externalLink pt-0 mt-4">
                                A-XYZ-0000
                                <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn socialHead-button externalLink pt-0 mt-4">
                                AB-CDEG-0000
                                <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <h3 class="title-m text-left mb-3">Out of Scope</h3>
                <div class="subtitle subtitle-s text-left">
                    Only the targets listed under in-scope are part of the Bug Bounty Program. This means that for example our infrastructure; such as webpages, dns, email etc, are not part of the bounty-scope. XRC20 contract bugs are
                    typically not included in the bounty scope. However, we can help reach out to affected parties, such as authors or exchanges in such cases. XDC is maintained by the XinFin foundation, and is not part of the bounty scope.
                    Vulnerabilities requiring the user to have publicly exposed an API, such as JSON-RPC or the XYZ API, is out of scope of the bug bounty program.
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Masternode Requirements Ends -->

<!-- Submit a Bug Starts -->
<section class="px-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mb-5">
                <h3 class="title-m text-left mb-3">Submit a Bug</h3>
                <div class="subtitle subtitle-s text-left">
                    For each valid bug you find you’ll earn rewards. The quantity of rewards awarded will vary depending on Severity. The severity is calculated according to the OWASP risk rating model based on Impact on the XDC Network and
                    Likelihood.
                    <a href="#" class="btn socialHead-button externalLink pt-0 mt-0">
                        View OWASP method
                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="subtitle subtitle-s text-left mt-4">
                    <p>The EF will also provide rewards based on:</p>
                    <p><span class="fw-600">Quality of description: </span>Higher rewards are paid for clear, well-written submissions.</p>
                    <p>
                        <span class="fw-600">Quality of reproducibility: </span>A Proof of Concept (POC) must be included to be eligible for rewards. Please include test code, scripts and detailed instructions. The easier it is for us to
                        reproduce and verify the vulnerability, the higher the reward.
                    </p>
                    <p><span class="fw-600">Quality of fix, if included: </span>Higher rewards are paid for submissions with clear description of how to fix the issue.</p>
                </div>
            </div>
        </div>

        <div class="row row-flex mt-3">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                <div class="pricing-table purple h-100 d-flex flex-column bg-lightgray br-20">
                    <!-- Table Head -->
                    <div class="pricing-label">Up to 0,000 USD</div>
                    <h2>Low</h2>
                    <h3>Up to 0,000 USD</h3>
                    <h5>UP to 0,000 POINTS</h5>
                    <h5 class="mt-3">SEVERITY</h5>
                    <ul class="listStyle mb-5">
                        <li>Low impact, medium likelihood</li>
                        <li>Medium impact, low likelihood</li>
                    </ul>
                    <div class="mt-auto">
                        <h5>EXAMPLE</h5>
                        <p>Attacker can sometimes put a node in a state that causes it to drop one out of every one hundred attestations made by a validator.</p>
                        <!-- Price 
                        <div class="price-tag">
                        <span class="symbol">$</span>
                        <span class="amount">000</span>
                        <span class="after">/month</span>
                        </div>-->
                        <!-- Button -->
                        <a class="price-button btn-blue" href="#">Submit Low Risk Bug</a>
                    </div>
                </div>
            </div>
            <!-- Turquoise Table -->
            <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                <div class="pricing-table turquoise h-100 d-flex flex-column bg-lightgray br-20">
                    <!-- Table Head -->
                    <div class="pricing-label">Up to 00,000 USD</div>
                    <h2>Medium</h2>
                    <h3>Up to 00,000 USD</h3>
                    <h5>UP to 0,000 POINTS</h5>
                    <h5 class="mt-3">SEVERITY</h5>
                    <ul class="listStyle mb-5">
                        <li>High impact, low likelihood</li>
                        <li>Medium impact, medium likelihood</li>
                        <li>Low impact, high likelihood</li>
                    </ul>
                    <div class="mt-auto">
                        <h5>EXAMPLE</h5>
                        <p>Attacker can successfully conduct eclipse attacks on nodes with peer-ids with 4 leading zero bytes.</p>
                        <a class="price-button btn-blue" href="#">Submit Medium Risk Bug</a>
                    </div>
                </div>
            </div>
            <!-- Red Table -->
            <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                <div class="pricing-table h-100 d-flex flex-column red bg-lightgray br-20">
                    <!-- Table Head -->
                    <div class="pricing-label">Up to 00,000 USD</div>
                    <h2>High</h2>
                    <h3>Up to 00,000 USD</h3>
                    <h5>UP to 00,000 POINTS</h5>
                    <h5 class="mt-3">SEVERITY</h5>
                    <ul class="listStyle mb-5">
                        <li>High impact, medium likelihood</li>
                        <li>Medium impact, high likelihood</li>
                    </ul>
                    <div class="mt-auto">
                        <h5>EXAMPLE</h5>
                        <p>Attacker can successfully partition large parts of the network, and it is trivial for an attacker to trigger the vulnerability.</p>
                        <a class="price-button btn-blue" href="#">Submit High Risk Bug</a>
                    </div>
                </div>
            </div>
            <!-- Brown Table -->
            <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                <div class="pricing-table h-100 d-flex flex-column brown bg-lightgray br-20">
                    <!-- Table Head -->
                    <div class="pricing-label">Up to 000,000 USD</div>
                    <h2>Critical</h2>
                    <h3>Up to 000,000 USD</h3>
                    <h5>UP to 00,000 POINTS</h5>
                    <h5 class="mt-3">SEVERITY</h5>
                    <ul class="listStyle mb-5">
                        <li>High impact, high likelihood</li>
                    </ul>
                    <div class="mt-auto">
                        <h5>EXAMPLE</h5>
                        <p>Attacker can successfully conduct remote code execution in a majority client, and it is trivial for an attacker to trigger the vulnerability.</p>
                        <a class="price-button btn-blue" href="#">Submit Critical Risk Bug</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-flex mt-5">
            <div class="col-lg-10 offset-lg-1 mt-4">
                <h3 class="title-s text-center mb-3">Bug Hunting Rules</h3>
                <p class="subtitle fs-6 text-left mb-3">
                    <i>
                        The bug bounty program is an experimental and discretionary rewards program for our active XDC Community to encourage and reward those who are helping to improve the platform. It is not a competition. You should know
                        that we can cancel the program at any time, and awards are at the sole discretion of XinFin Foundation bug bounty panel. In addition, we are not able to issue awards to individuals who are on sanctions lists or who
                        are in countries on sanctions lists (e.g. CountryName, CountryName, etc). Local laws require us to ask for proof of your identity. You are responsible for all taxes. All awards are subject to applicable law. Finally,
                        your testing must not violate any law or compromise any data that is not yours and must take place on local running testnets.
                    </i>
                </p>
                <ul class="listStyle fs-6">
                    <li>Issues without a POC or that have already been submitted by another user or are already known to spec and client maintainers are not eligible for bounty rewards.</li>
                    <li>Public disclosure of a vulnerability or reporting it to other parties without prior agreement makes it ineligible for a bounty.</li>
                    <li>Employees and contractors of the XinFin Foundation or client teams in scope of the bounty program may participate in the program only in the accrual of points and will not receive monetary rewards.</li>
                    <li>
                        XDC bounty program considers a number of variables in determining rewards. Determinations of eligibility, score and all terms related to an award are at the sole and final discretion of the XinFin Foundation bug
                        bounty panel.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Submit a Bug Ends -->

<!-- Guides and Documentation Starts -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 mt-2 mb-4">
                <h3 class="title-m">FAQ's</h3>
                <div class="subtitle subtitle-s">Here are some frequently asked questions regarding bug bounty.</div>
            </div>
            <div class="col-lg-10 col-md-10 mt-2 mb-2">
                <div class="accordion accordion-flush fs-6" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What should a good vulnerability submission look like?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>See a real example of a quality vulnerability submission.</p>
                                <p><span class="fw-600">Description:</span> Remote Denial-of-service using non-validated blocks</p>
                                <p>
                                    <span class="fw-600">Attack scenario:</span> An attacker can send blocks that may require a high amount of computation (the maximum gasLimit) but has no proof-of-work. If the attacker sends blocks
                                    continuously, the attacker may force the victim node to 100% CPU utilization.
                                </p>
                                <p><span class="fw-600">Impact:</span> An attacker can abuse CPU utilization on remote nodes, possibly causing full DoS.</p>
                                <p><span class="fw-600">Components:</span> Go client version v0.6.8</p>
                                <p><span class="fw-600">Reproduction:</span> Send a block to a Go node that contains many txs but no valid PoW.</p>
                                <p>
                                    <span class="fw-600">Details:</span> Blocks are validated in the method Process(Block, dontReact). This method performs expensive CPU-intensive tasks, such as executing transactions (sm.ApplyDiff) and
                                    afterward it verifies the proof-of-work (sm.ValidateBlock()). This allows an attacker to send blocks that may require a high amount of computation (the maximum gasLimit) but has no proof-of-work. If the
                                    attacker sends blocks continuously, the attacker may force the victim node to 100% CPU utilization.
                                </p>
                                <p><span class="fw-600">Fix:</span> Invert the order of the checks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                I reported an issue / vulnerability but have not received a response!
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Please allow a few days for someone to respond to your submission.</p>
                                <p>We aim to respond to submissions as fast as possible. Feel free to email us at <a href="mailto:bounty@xinfin.org">bounty@xinfin.org</a> if you have not received a response within a day or two.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Is the bug bounty program is time limited?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>No.</p>
                                <p>No end date is currently set. See XDC latest news.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                I want to be anonymous / I do not want my name on the leader board.
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>You can do this, but it might make you ineligble for rewards.</p>
                                <p>
                                    Submitting anonymously or with a pseudonym is OK, but will make you ineligible for XDC rewards. To be eligible for XDC rewards, we require your real name and a proof of your identity. Donating your bounty
                                    to a charity doesn’t require your identity. Please let us know if you do not want your name/nick displayed on the leader board.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                How are bounties paid out?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Rewards are paid out in XDC.</p>
                                <p>Rewards are paid out in XDC after the submission has been validated, usually a few days later. Local laws require us to ask for proof of your identity. In addition, we will need your XDC address.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                What are the points in the leaderboard?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Every found vulnerability / issue is assigned a score.</p>
                                <p></p>
                                <p>Every found vulnerability / issue is assigned a score. Bounty hunters are ranked on our leaderboard by total points.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                Can I donate my reward to charity?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Yes!</p>
                                <p>We can donate your reward to an established charitable organization of your choice.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="fw-500 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                Do you have a PGP key?
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Yes.</p>
                                <p>
                                    Please use 0000 0000 0000 0000 0000 0000 0000 0000 0000 0000<br />
                                    <a href="#" class="btn socialHead-button externalLink pt-0 mt-1">
                                        PGP Key
                                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </p>
                            </div>
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