<?php
    $title = "Privacy Network | XDC Network";
    $desc = "Privacy-focused enterprise networks powered by XDC Subnet: an XDC Mainnet-like network owned by you, further protected by the Mainnet with total privacy.";

    include('inc/header.php') ?>

    <style>
        <?php include 'assets/css/interledger-privacynetwork.css'; ?>
    </style>

<!-- Icon sprite (product pages) -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <symbol id="xp-arrow" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-ext" viewBox="0 0 24 24"><path d="M7 17 17 7M9 7h8v8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-doc" viewBox="0 0 24 24"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8zM14 3v5h5M9 13h6M9 17h4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-coin" viewBox="0 0 24 24"><circle cx="12" cy="12" r="8.5" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="M14.5 9.2c-.5-.8-1.4-1.2-2.5-1.2-1.5 0-2.6.8-2.6 2s1 1.6 2.6 2 2.6.9 2.6 2.1-1.1 1.9-2.6 1.9c-1.2 0-2.1-.5-2.6-1.3M12 6.5V8m0 8v1.5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></symbol>
    <symbol id="xp-building" viewBox="0 0 24 24"><path d="M4 21V8l8-5 8 5v13M4 21h16M9 21v-6h6v6M8 11h.01M12 11h.01M16 11h.01" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-nodes" viewBox="0 0 24 24"><circle cx="6" cy="6" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/><circle cx="18" cy="6" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="18" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="M8.5 6h7M7.3 8.2l3.4 7.5M16.7 8.2l-3.4 7.5" fill="none" stroke="currentColor" stroke-width="1.8"/></symbol>
    <symbol id="xp-chart" viewBox="0 0 24 24"><path d="M4 20V4M4 20h16M8 16l4-5 3 3 5-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-shield" viewBox="0 0 24 24"><path d="M12 3 5 6v5.5c0 4.3 3 8.2 7 9.5 4-1.3 7-5.2 7-9.5V6zM9 12l2 2 4-4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-swap" viewBox="0 0 24 24"><path d="M4 8h13l-3.5-3.5M20 16H7l3.5 3.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-lock" viewBox="0 0 24 24"><rect x="4.5" y="10.5" width="15" height="10" rx="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="M8 10.5V8a4 4 0 0 1 8 0v2.5M12 14.5v2.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></symbol>
    <symbol id="xp-eye" viewBox="0 0 24 24"><path d="M2.5 12S6 5.5 12 5.5 21.5 12 21.5 12 18 18.5 12 18.5 2.5 12 2.5 12z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" fill="none" stroke="currentColor" stroke-width="1.8"/></symbol>
    <symbol id="xp-route" viewBox="0 0 24 24"><circle cx="6" cy="18" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/><circle cx="18" cy="6" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="M8.5 18H15a3 3 0 0 0 0-6H9a3 3 0 0 1 0-6h6.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></symbol>
    <symbol id="xp-layers" viewBox="0 0 24 24"><path d="m12 3 9 5-9 5-9-5zM3 13l9 5 9-5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></symbol>
    <symbol id="xp-pause" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="M10 9v6M14 9v6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></symbol>
    <symbol id="xp-repeat" viewBox="0 0 24 24"><path d="M4 12a8 8 0 0 1 14-5.3M20 12a8 8 0 0 1-14 5.3M18 3v4h-4M6 21v-4h4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="6.5" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="m16 16 4.5 4.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></symbol>
    <symbol id="xp-box" viewBox="0 0 24 24"><path d="m12 3 8 4.5v9L12 21l-8-4.5v-9zM4 7.5l8 4.5 8-4.5M12 12v9" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></symbol>
    <symbol id="xp-code" viewBox="0 0 24 24"><path d="m8 7-5 5 5 5M16 7l5 5-5 5M14 4l-4 16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="xp-chat" viewBox="0 0 24 24"><path d="M4 5h16v11H9l-5 4z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></symbol>
</svg>

<div class="xp">

    <!-- Hero Starts -->
    <section class="xp-hero hero-inside">
        <div class="container">
            <div class="xp-hero-grid">
                <div>
                    <p class="xp-eyebrow"><span class="xp-pulse"></span>Powered by XDC Subnet</p>
                    <h1 class="xp-h1">Privacy-Focused Enterprise Networks</h1>
                    <p class="xp-lead">An XDC Mainnet-like network owned by you, further protected by the Mainnet with total privacy.</p>
                    <div class="xp-ctas">
                        <a href="https://forms.gle/KQxw5DVbrMYrHv5N9" target="_blank"><button class="btn-blue">Contact Us <svg class="xp-ico" aria-hidden="true"><use href="#xp-arrow"/></svg></button></a>
                        <a href="docs/whitepaper-xdc-gasless-subnet.pdf" target="_blank"><button class="xp-btn-outline">XDC Gasless Subnet Whitepaper</button></a>
                    </div>
                </div>
                <div class="xp-visual">
                <svg class="subnet-diagram" viewBox="0 0 440 340" role="img" aria-label="A private subnet, open only to authorised users, checkpoints to the XDC Network">
                    <g class="sn-main">
                        <circle cx="220" cy="170" r="150"/>
                        <circle class="sn-dot" cx="220" cy="20" r="5"/><circle class="sn-dot" cx="350" cy="95" r="5"/><circle class="sn-dot" cx="350" cy="245" r="5"/>
                        <circle class="sn-dot" cx="220" cy="320" r="5"/><circle class="sn-dot" cx="90" cy="245" r="5"/><circle class="sn-dot" cx="90" cy="95" r="5"/>
                    </g>
                    <text class="sn-label" x="220" y="298">XDC MAINNET</text>
                    <path class="sn-checkpoint" d="M220 108 L 220 34"/>
                    <g class="sn-private">
                        <rect class="sn-fence" x="130" y="108" width="180" height="132" rx="22"/>
                        <g class="sn-links"><path d="M170 150 L 270 150 L 220 205 Z M170 150 L 220 205"/></g>
                        <circle class="sn-node" cx="170" cy="150" r="9"/><circle class="sn-node" cx="270" cy="150" r="9"/><circle class="sn-node" cx="220" cy="205" r="9"/>
                        <g class="sn-lock" transform="translate(206 118)"><rect x="3" y="11" width="22" height="16" rx="4"/><path d="M8 11V8a6 6 0 0 1 12 0v3"/></g>
                    </g>
                    <text class="sn-sub" x="220" y="262">PRIVATE SUBNET · AUTHORIZED ONLY</text>
                    <g class="sn-blocked"><circle cx="60" cy="170" r="14"/><path d="M52 162l16 16M68 162l-16 16"/></g>
                    <path class="sn-denied" d="M76 170 L 126 170"/>
                </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Ends -->

    <!-- Overview Starts -->
    <section class="px-80">
        <div class="container">
            <div class="xp-two">
                <div>
                    <p class="xp-eyebrow">What is XDC Subnet?</p>
                    <h2 class="xp-h2">A digital realm tailored to your needs</h2>
                </div>
                <div>
                    <p class="xp-lead">XDC Subnet is a technology that allows you to create a secure, scalable, and decentralized network within the XDC Ecosystem.</p>
                    <p>It enables various use cases, including creating private subnets, deploying decentralized applications (dApps), and more, so you can keep application transactions inside your own permissioned environment.</p>
                    <div class="xp-partners">
                        <span class="xp-mono">Trusted and used by</span>
                        <ul class="xp-partner-grid">
                            <li><a href="https://www.sbivc.co.jp/" target="_blank" title="SBI VC Japan"><img src="assets/images/inside-page/masternode/sbivcjapan-light.svg" class="iconL" alt="SBI VC Japan"><img src="assets/images/inside-page/masternode/sbivcjapan.svg" class="iconD" alt="SBI VC Japan"></a></li>
                            <li><a href="https://www.telekom.com/en" target="_blank" title="Deutsche Telekom"><img src="assets/images/inside-page/masternode/deutsche-telekom.svg" alt="Deutsche Telekom"></a></li>
                            <li><a href="https://www.contour.network/" target="_blank" title="Contour"><img src="assets/images/inside-page/masternode/contour-light.svg" class="iconL" alt="Contour"><img src="assets/images/inside-page/masternode/contour.svg" class="iconD" alt="Contour"></a></li>
                            <li><a href="https://kenyanwallstreet.com/zanzibar-launches-national-blockchain-network-sandbox-for-global-innovators-corporates-and-governments" target="_blank" title="Zanzibar National Blockchain Network"><img src="assets/images/inside-page/masternode/zanzibar-blockchain-network-light.svg" class="iconL" alt="Zanzibar National Blockchain Network"><img src="assets/images/inside-page/masternode/zanzibar-blockchain-network.svg" class="iconD" alt="Zanzibar National Blockchain Network"></a></li>
                        </ul>
                        <small>Subnets inherit trust from a Validator and Partner Network already run by leading Infrastructure Operators and Trusted Institutions.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Overview Ends -->

    <!-- Key Features Starts -->
    <section class="px-80 bg-lightgray">
        <div class="container">
            <div class="xp-head xp-head-split">
                <div>
                    <p class="xp-eyebrow">Key features</p>
                    <h2 class="xp-h2">Privacy, control, security and scale by design</h2>
                </div>
                <p class="xp-lead">Each subnet runs with its own validators, governance, and access controls, configured to your requirements.</p>
            </div>
            <ul class="xp-cards xp-cards-4">
                <li class="xp-card"><span class="xp-card-num xp-mono">01</span><span class="xp-card-ico xp-card-ico-green"><svg class="" aria-hidden="true"><use href="#xp-lock"/></svg></span><h3>Privacy</h3><p>Configure your subnets to be private sanctuaries, granting access only to authorized users. Your data and transactions remain shielded from prying eyes.</p></li>
                <li class="xp-card"><span class="xp-card-num xp-mono">02</span><span class="xp-card-ico xp-card-ico-green"><svg class="" aria-hidden="true"><use href="#xp-building"/></svg></span><h3>Sovereignty</h3><p>XDC Subnet places the power firmly in your hands, ensuring complete control over your data and transactions. Your network, your rules.</p></li>
                <li class="xp-card"><span class="xp-card-num xp-mono">03</span><span class="xp-card-ico xp-card-ico-green"><svg class="" aria-hidden="true"><use href="#xp-shield"/></svg></span><h3>Security</h3><p>Fortified by the robust consensus mechanism of the XDC Network, offering resilience to attacks and ensuring the integrity of your network.</p></li>
                <li class="xp-card"><span class="xp-card-num xp-mono">04</span><span class="xp-card-ico xp-card-ico-green"><svg class="" aria-hidden="true"><use href="#xp-chart"/></svg></span><h3>Scalability</h3><p>Whether you're a small business or a large enterprise, tailor your subnet to grow alongside your ambitions and your application's requirements.</p></li>
            </ul>
        </div>
    </section>
    <!-- Key Features Ends -->

    <!-- Architecture Starts -->
    <section class="px-80">
        <div class="container">
            <div class="xp-two xp-two-center">
                <div>
                    <p class="xp-eyebrow">Architecture</p>
                    <h2 class="xp-h2">Owned by you, anchored to the Mainnet</h2>
                    <p class="xp-lead">The architecture consists of the following key components owned by the customer:</p>
                    <ol class="xp-components"><li><span class="xp-mono">01</span>A subnet driven by the XDC2.0 consensus engine, with system configurations tailored for the customer</li><li><span class="xp-mono">02</span>A relayer program that checkpoints critical consensus data of the subnet to the XDC Mainnet</li><li><span class="xp-mono">03</span>A smart contract in the XDC Mainnet that verifies and records the checkpoints</li><li><span class="xp-mono">04</span>Wallet APIs that enable additional protection of subnet transactions from the XDC Mainnet</li><li><span class="xp-mono">05</span>Native support for XDC utility tools such as blockchain explorer and forensic monitor</li></ol>
                </div>
                <div class="xp-sarch" role="img" aria-label="A private subnet checkpoints consensus data through a relayer to a checkpoint smart contract on the XDC Mainnet">
                    <div class="xp-sarch-tier xp-sarch-main">
                        <span class="xp-mono">XDC Mainnet</span>
                        <div class="xp-sarch-box"><svg class="xp-ico" aria-hidden="true"><use href="#xp-doc"/></svg>Checkpoint smart contract<small>Verifies and records the checkpoints</small></div>
                    </div>
                    <div class="xp-sarch-link"><span class="xp-sarch-line" aria-hidden="true"><i></i></span><div><strong>Relayer</strong><small>Periodically submits subnet consensus data, never the private transactions</small></div></div>
                    <div class="xp-sarch-tier xp-sarch-sub">
                        <span class="xp-mono"><svg class="xp-ico" aria-hidden="true"><use href="#xp-lock"/></svg> Your private subnet · XDC2.0 consensus</span>
                        <div class="xp-sarch-cells"><span>Custom validators</span><span>Governance</span><span>Access controls</span><span>Wallet APIs</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Architecture Ends -->

    <!-- Interoperability Starts -->
    <section class="px-80 bg-lightgray">
        <div class="container">
            <div class="xp-band-grid">
                <div>
                    <p class="xp-eyebrow">Interoperability and Mainnet checkpointing</p>
                    <h2 class="xp-h2">Private transactions, public integrity</h2>
                    <p class="xp-lead">An XDC Subnet can operate with its own validators, governance, and access controls while keeping application transactions within its permissioned environment.</p>
                    <p>The proposed XIM research extends this approach to heterogeneous blockchains, institutional ledgers, and authenticated financial gateways.</p>
                    <a class="xp-link" href="interledger">Explore Interledger (XIM) <svg class="xp-ico" aria-hidden="true"><use href="#xp-arrow"/></svg></a>
                </div>
                <ul class="xp-band-cards">
                    <li class="xp-band-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-layers"/></svg></span><h3>Mainnet checkpoints</h3><p>A relayer periodically submits subnet consensus data to a checkpoint contract on XDC Mainnet.</p></li>
                    <li class="xp-band-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-eye"/></svg></span><h3>Private by default</h3><p>A public record for integrity checks is created without publishing the underlying private transactions.</p></li>
                    <li class="xp-band-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-swap"/></svg></span><h3>XDC Zero messaging</h3><p>XDC Zero supports communication between a subnet and XDC Mainnet.</p></li>
                    <li class="xp-band-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-nodes"/></svg></span><h3>Endpoints, relayers, oracles</h3><p>Endpoint contracts send and receive cross-chain messages, a relayer carries payloads, and an oracle supplies block-header data.</p></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Interoperability Ends -->

    <!-- Use Cases Starts -->
    <section class="px-80">
        <div class="container">
            <div class="xp-head xp-head-split">
                <div>
                    <p class="xp-eyebrow">Versatile use cases</p>
                    <h2 class="xp-h2">Built for data-sensitive organizations</h2>
                </div>
                <ul class="xp-adv"><li><strong>Cost-Effectiveness</strong><span>A more cost-effective alternative to traditional blockchain networks.</span></li><li><strong>Speed and Scalability</strong><span>Handles a large number of transactions without sacrificing performance.</span></li><li><strong>Security Beyond Measure</strong><span>Battle-tested security that safeguards your network from threats.</span></li><li><strong>Guarded Privacy</strong><span>Only those with authorization can access your network's data and transactions.</span></li></ul>
            </div>
            <ul class="xp-cards xp-cards-4">
                <li class="xp-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-lock"/></svg></span><h3>Private Blockchain Networks</h3><p>Create confidential, customized blockchain networks for businesses and organizations that demand data secrecy.</p></li>
                <li class="xp-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-swap"/></svg></span><h3>Cross-Chain Transactions</h3><p>Seamlessly conduct cross-chain transactions between diverse blockchains, fostering interoperability.</p></li>
                <li class="xp-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-box"/></svg></span><h3>Supply Chain Security</h3><p>Safeguard your supply chain by monitoring the movement of goods and materials with the precision of blockchain technology.</p></li>
                <li class="xp-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-nodes"/></svg></span><h3>Decentralized Applications</h3><p>Deploy high-security, scalable DApps that are built to excel in the decentralized landscape.</p></li>
            </ul>
        </div>
    </section>
    <!-- Use Cases Ends -->

    <!-- Get Started Starts -->
    <section class="px-80 bg-lightgray">
        <div class="container">
            <div class="xp-head">
                <p class="xp-eyebrow">Get started</p>
                <h2 class="xp-h2">Guides and documentation</h2>
                <p class="xp-lead">Looking for more details or instructions? No problem. We've got you covered.</p>
            </div>
            <div class="xp-support">
                <a href="xdc-subnet"><span class="xp-support-ico"><svg class="" aria-hidden="true"><use href="#xp-doc"/></svg></span><span><strong>XDC Subnet setup guides</strong><small>Docker setup and video tutorials</small></span><svg class="xp-ico xp-arrow" aria-hidden="true"><use href="#xp-arrow"/></svg></a>
                <a href="docs/whitepaper-xdc-gasless-subnet.pdf" target="_blank"><span class="xp-support-ico"><svg class="" aria-hidden="true"><use href="#xp-layers"/></svg></span><span><strong>Gasless Subnet whitepaper</strong><small>The technical design in depth</small></span><svg class="xp-ico xp-arrow" aria-hidden="true"><use href="#xp-ext"/></svg></a>
                <a href="https://docs.xdc.network/subnet/overview/" target="_blank"><span class="xp-support-ico"><svg class="" aria-hidden="true"><use href="#xp-code"/></svg></span><span><strong>XDC Subnet documentation</strong><small>Architecture and components</small></span><svg class="xp-ico xp-arrow" aria-hidden="true"><use href="#xp-ext"/></svg></a>
                <a href="https://www.xdc.dev/" target="_blank"><span class="xp-support-ico"><svg class="" aria-hidden="true"><use href="#xp-chat"/></svg></span><span><strong>XDC Developers Forum</strong><small>Ask questions and get community support</small></span><svg class="xp-ico xp-arrow" aria-hidden="true"><use href="#xp-ext"/></svg></a>
            </div>
        </div>
    </section>
    <!-- Get Started Ends -->

    <!-- FAQs Starts -->
    <section class="px-80" id="faq">
        <div class="container">
            <div class="xp-faq-grid">
                <div>
                    <p class="xp-eyebrow">FAQ</p>
                    <h2 class="xp-h2">Questions about privacy networks</h2>
                </div>

                <div class="accordion accordion-flush fs-6" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Are transactions on a subnet private?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">Yes. Subnets can be configured as private networks that grant access only to authorized users. Application transactions stay within the permissioned environment.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                What is published to the XDC Mainnet?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">A relayer periodically submits subnet consensus data to a checkpoint contract on XDC Mainnet. This creates a public record for integrity checks without publishing the underlying private transactions.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Who owns and operates the network?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">You do. The subnet, relayer, checkpoint smart contract, and wallet APIs are owned by the customer, with validators, governance, and access controls defined by you.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                How is the network secured?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">The subnet is driven by the XDC2.0 consensus engine, and its checkpoints are verified and recorded by a smart contract on the XDC Mainnet.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Can it connect to the XDC Mainnet and other networks?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">Yes. XDC Zero supports communication between a subnet and XDC Mainnet, and the proposed XIM research extends this to heterogeneous blockchains, institutional ledgers, and financial gateways.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                How do I get started?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">Follow the Docker setup guide and video tutorials on the <a href="xdc-subnet">XDC Subnet</a> page, or <a href="https://forms.gle/KQxw5DVbrMYrHv5N9" target="_blank">Contact Us</a> for assistance with creating your subnet.</div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- FAQs Ends -->

    <!-- CTA Starts -->
    <section class="xp-cta">
        <div class="container">
            <div class="xp-cta-card">
                <div>
                    <h2 class="xp-h2">Create your privacy network</h2>
                    <p>For any assistance or queries related to creating your Subnet using XDC Network, contact us now.</p>
                </div>
                <div class="xp-ctas">
                    <a href="https://forms.gle/KQxw5DVbrMYrHv5N9" target="_blank"><button class="xp-btn-light">Contact Us <svg class="xp-ico" aria-hidden="true"><use href="#xp-arrow"/></svg></button></a>
                    <a href="https://t.me/xinfintech" target="_blank"><button class="xp-btn-outline">Telegram Developers Community</button></a>
                </div>
            </div>
            <p class="xp-note">Also see <a href="interledger">Interledger (XIM)</a>.</p>
        </div>
    </section>
    <!-- CTA Ends -->

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
                                <path fill="#FFFFFF" d="M32,0H7.1C3.2,0,0,3.2,0,7.1V32C0,35.9,3.2,39,7.1,39H32c3.9,0,7.1-3.2,7.1-7.1V7.1C39,3.2,35.9,0,32,0zM7.4,16.3l6.5-7.1h6.9l-6.6,7.1l6.6,7.1h-6.9L7.4,16.3z M26.3,30.2h-6.9l6.6-7.1l-6.6-7.1h6.9l6.5,7.1L26.3,30.2z"/>        
                                </svg>
                            </i> AI based Technical Support
						</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Need More Help Ends -->

</div>

<script>
    /* FAQ: keep one item open at a time (fallback for browsers without <details name>) */
    document.querySelectorAll('.xp-faq-list').forEach(function (list) {
        list.addEventListener('toggle', function (e) {
            if (!e.target.open) return;
            list.querySelectorAll('.xp-faq-item[open]').forEach(function (item) {
                if (item !== e.target) item.open = false;
            });
        }, true);
    });
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Are transactions on a subnet private?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Subnets can be configured as private networks that grant access only to authorized users. Application transactions stay within the permissioned environment."
            }
        },
        {
            "@type": "Question",
            "name": "What is published to the XDC Mainnet?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A relayer periodically submits subnet consensus data to a checkpoint contract on XDC Mainnet. This creates a public record for integrity checks without publishing the underlying private transactions."
            }
        },
        {
            "@type": "Question",
            "name": "Who owns and operates the network?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You do. The subnet, relayer, checkpoint smart contract, and wallet APIs are owned by the customer, with validators, governance, and access controls defined by you."
            }
        },
        {
            "@type": "Question",
            "name": "How is the network secured?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The subnet is driven by the XDC2.0 consensus engine, and its checkpoints are verified and recorded by a smart contract on the XDC Mainnet."
            }
        },
        {
            "@type": "Question",
            "name": "Can it connect to the XDC Mainnet and other networks?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. XDC Zero supports communication between a subnet and XDC Mainnet, and the proposed XIM research extends this to heterogeneous blockchains, institutional ledgers, and financial gateways."
            }
        },
        {
            "@type": "Question",
            "name": "How do I get started?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Follow the Docker setup guide and video tutorials on the XDC Subnet page, or contact the XDC Network team for assistance with creating your subnet."
            }
        }
    ]
}
</script>
<?php include('inc/footer.php') ?>
