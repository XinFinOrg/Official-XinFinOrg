<?php
    $title = "XDC Network | Interledger (XIM)";
    $desc = "XIM, the XDC Interledger Messaging Protocol, is a verification-agnostic messaging and settlement fabric for heterogeneous ledgers, institutional networks, and financial rails.";

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
                    <p class="xp-eyebrow"><span class="xp-pulse"></span>XIM Protocol · Research preview</p>
                    <h1 class="xp-h1">The XDC Interledger Messaging Protocol</h1>
                    <p class="xp-lead">A verification-agnostic messaging and settlement fabric for heterogeneous ledgers, institutional networks, and financial rails.</p>
                    <div class="xp-ctas">
                        <a href="https://arxiv.org/abs/2609.39310" target="_blank"><button class="btn-blue">Read the XIM Paper <svg class="xp-ico" aria-hidden="true"><use href="#xp-ext"/></svg></button></a>
                        <a href="#protocol"><button class="xp-btn-outline">Explore the Protocol</button></a>
                    </div>
                    <p class="xp-meta xp-mono">XDC Network Research &amp; Engineering · September 2026</p>
                </div>
                <div class="xp-visual">
                <svg class="xim-diagram" viewBox="0 0 440 340" role="img" aria-label="Ledgers and institutional networks exchange messages through XIM to settlement rails and other ledgers">
                    <defs><linearGradient id="xim-hub" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#0088cc"/><stop offset="1" stop-color="#00b2d6"/></linearGradient></defs>
                    <g class="xim-lines">
                        <path d="M118 70 C 170 70, 170 170, 220 170"/><path d="M118 170 L 220 170"/><path d="M118 270 C 170 270, 170 170, 220 170"/>
                        <path d="M220 170 C 270 170, 270 95, 322 95"/><path d="M220 170 C 270 170, 270 245, 322 245"/>
                    </g>
                    <g class="xim-flow">
                        <path d="M118 70 C 170 70, 170 170, 220 170"/><path d="M118 170 L 220 170"/><path d="M118 270 C 170 270, 170 170, 220 170"/>
                        <path class="out" d="M220 170 C 270 170, 270 95, 322 95"/><path class="out" d="M220 170 C 270 170, 270 245, 322 245"/>
                    </g>
                    <g class="xim-node"><rect x="18" y="46" width="100" height="48" rx="12"/><text x="68" y="67">Public chain</text><text class="sub" x="68" y="82">e.g. Ethereum</text></g>
                    <g class="xim-node"><rect x="18" y="146" width="100" height="48" rx="12"/><text x="68" y="167">Permissioned</text><text class="sub" x="68" y="182">ledger</text></g>
                    <g class="xim-node"><rect x="18" y="246" width="100" height="48" rx="12"/><text x="68" y="267">Institutional</text><text class="sub" x="68" y="282">network</text></g>
                    <circle class="xim-halo" cx="220" cy="170" r="52"/>
                    <circle cx="220" cy="170" r="38" fill="url(#xim-hub)"/>
                    <text class="xim-hub-label" x="220" y="168">XIM</text>
                    <text class="xim-hub-sub" x="220" y="184">MESSAGING</text>
                    <g class="xim-node xim-node-out"><rect x="322" y="71" width="100" height="48" rx="12"/><text x="372" y="92">XDC Network</text><text class="sub" x="372" y="107">Settlement</text></g>
                    <g class="xim-node xim-node-out"><rect x="322" y="221" width="100" height="48" rx="12"/><text x="372" y="242">Financial rails</text><text class="sub" x="372" y="257">ISO 20022</text></g>
                </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Ends -->

    <!-- Protocol Thesis Starts -->
    <section class="px-80">
        <div class="container">
            <div class="xp-thesis">
                <p class="xp-eyebrow">Protocol thesis</p>
                <h2 class="xp-quote">“Interoperability as authenticated message exchange.”</h2>
                <div class="xp-thesis-body">
                    <p>XIM does not force every connected network into a single consensus system. Instead, it defines canonical messages, deterministic identifiers, cryptographic commitments, replay protection, verification policies, execution semantics, and acknowledgements between independently governed trust domains.</p>
                    <p>Each source–destination lane selects an explicit verification policy appropriate to the value, finality, privacy, and trust characteristics of that lane.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Protocol Thesis Ends -->

    <!-- Core Concepts Starts -->
    <section class="px-80 bg-lightgray" id="protocol">
        <div class="container">
            <div class="xp-head xp-head-split">
                <div>
                    <p class="xp-eyebrow">Core concepts</p>
                    <h2 class="xp-h2">Six building blocks of the protocol</h2>
                </div>
                <p class="xp-lead">Together they let independent ledgers and institutional networks exchange value and instructions without sharing a single consensus system.</p>
            </div>
            <ul class="xp-cards">
                <li class="xp-card"><span class="xp-card-num xp-mono">01</span><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-doc"/></svg></span><h3>Canonical Messages</h3><p>A deterministic interledger envelope independent of source-chain transaction formats, with domain-separated message IDs for replay resistance.</p></li>
                <li class="xp-card"><span class="xp-card-num xp-mono">02</span><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-shield"/></svg></span><h3>Lane-Scoped Verification</h3><p>Supports native proofs, light clients, zero-knowledge proofs, threshold attestations, TEE attestations, and hybrid verification.</p></li>
                <li class="xp-card"><span class="xp-card-num xp-mono">03</span><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-layers"/></svg></span><h3>Commitment-Oriented State</h3><p>Message hashes, sparse Merkle roots, and append-only transition logs provide auditability without global replication of foreign-chain state.</p></li>
                <li class="xp-card"><span class="xp-card-num xp-mono">04</span><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-coin"/></svg></span><h3>Universal Asset Identity (UAID)</h3><p>UAID separates economic asset identity from chain-specific contract addresses and representation risk.</p></li>
                <li class="xp-card"><span class="xp-card-num xp-mono">05</span><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-route"/></svg></span><h3>Policy-Aware Routing</h3><p>Routes are constrained by jurisdiction, asset support, privacy, verification strength, value limits, liquidity, deadline, and finality.</p></li>
                <li class="xp-card"><span class="xp-card-num xp-mono">06</span><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-pause"/></svg></span><h3>Independent Risk Controls</h3><p>Lane-scoped monitors can rate-limit, pause, or downgrade compromised lanes without globally halting unrelated routes.</p></li>
            </ul>
        </div>
    </section>
    <!-- Core Concepts Ends -->

    <!-- Reference Architecture Starts -->
    <section class="px-80">
        <div class="container">
            <div class="xp-head">
                <p class="xp-eyebrow">Reference architecture</p>
                <h2 class="xp-h2">Separation of routing, verification, execution, settlement, and risk</h2>
            </div>
            <div class="xp-arch" role="img" aria-label="XIM reference architecture: Observers and Gateways feed Verifiers, then Routers, then Executors, with Risk Monitors across every stage">
                <div class="xp-arch-flow">
                    <div class="xp-arch-stage xp-arch-ingress"><span class="xp-arch-step xp-mono">Ingress</span><div class="xp-arch-node"><h3>Observers</h3><p>Detect finalized source events and construct candidate XIM messages.</p></div><div class="xp-arch-node"><h3>Gateways</h3><p>Map authenticated financial instructions and APIs into XIM semantics.</p></div></div>
                    <span class="xp-arch-arrow" aria-hidden="true"><svg class="xp-ico" aria-hidden="true"><use href="#xp-arrow"/></svg></span>
                    <div class="xp-arch-stage"><span class="xp-arch-step xp-mono">Verify</span><div class="xp-arch-node"><h3>Verifiers</h3><p>Evaluate source evidence against the lane verification policy.</p></div></div>
                    <span class="xp-arch-arrow" aria-hidden="true"><svg class="xp-ico" aria-hidden="true"><use href="#xp-arrow"/></svg></span>
                    <div class="xp-arch-stage"><span class="xp-arch-step xp-mono">Route</span><div class="xp-arch-node"><h3>Routers</h3><p>Select eligible direct or multi-hop settlement paths.</p></div></div>
                    <span class="xp-arch-arrow" aria-hidden="true"><svg class="xp-ico" aria-hidden="true"><use href="#xp-arrow"/></svg></span>
                    <div class="xp-arch-stage"><span class="xp-arch-step xp-mono">Execute</span><div class="xp-arch-node"><h3>Executors</h3><p>Submit verified destination actions and record receipts.</p></div></div>
                </div>
                <div class="xp-arch-risk"><span class="xp-arch-risk-ico"><svg class="" aria-hidden="true"><use href="#xp-shield"/></svg></span><div><h3>Risk Monitors</h3><p>Detect anomalies and apply lane-scoped circuit breakers.</p></div></div>
            </div>
        </div>
    </section>
    <!-- Reference Architecture Ends -->

    <!-- Illustrative Workflows Starts -->
    <section class="px-80 bg-lightgray">
        <div class="container">
            <div class="xp-head xp-head-split">
                <div>
                    <p class="xp-eyebrow">Illustrative workflows</p>
                    <h2 class="xp-h2">Built for cross-domain financial movement</h2>
                </div>
                <p class="xp-lead">From public chains to private institutional ledgers and ISO 20022 payment instructions, each workflow keeps verification explicit end to end.</p>
            </div>
            <div class="xp-library">
                <ul class="nav xp-tabs" role="tablist">
                    <li class="nav-item" role="presentation"><button class="nav-link active" id="wf-tab-1" data-bs-toggle="tab" data-bs-target="#wf-1" type="button" role="tab" aria-controls="wf-1" aria-selected="true"><span class="xp-mono">01</span>Ethereum to XDC transfer</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="wf-tab-2" data-bs-toggle="tab" data-bs-target="#wf-2" type="button" role="tab" aria-controls="wf-2" aria-selected="false"><span class="xp-mono">02</span>Canton-connected institutions</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="wf-tab-3" data-bs-toggle="tab" data-bs-target="#wf-3" type="button" role="tab" aria-controls="wf-3" aria-selected="false"><span class="xp-mono">03</span>ISO 20022 to XDC settlement</button></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="wf-1" role="tabpanel" aria-labelledby="wf-tab-1">
                        <p class="xp-wf-desc">An adapter observes source finality, builds proof evidence, commits the message, verifies on XDC, executes settlement, and emits an acknowledgement.</p>
                        <ol class="xp-steps" style="--n:6"><li><span class="xp-mono">01</span>Observe source finality</li><li><span class="xp-mono">02</span>Build proof evidence</li><li><span class="xp-mono">03</span>Commit the message</li><li><span class="xp-mono">04</span>Verify on XDC</li><li><span class="xp-mono">05</span>Execute settlement</li><li><span class="xp-mono">06</span>Emit acknowledgement</li></ol>
                    </div>
                    <div class="tab-pane fade" id="wf-2" role="tabpanel" aria-labelledby="wf-tab-2">
                        <p class="xp-wf-desc">Authorized gateways commit to private institutional events while preserving selective disclosure and avoiding public replication of confidential transaction data.</p>
                        <ol class="xp-steps" style="--n:4"><li><span class="xp-mono">01</span>Authorized gateway</li><li><span class="xp-mono">02</span>Commit to private event</li><li><span class="xp-mono">03</span>Selective disclosure</li><li><span class="xp-mono">04</span>No public replication of confidential data</li></ol>
                    </div>
                    <div class="tab-pane fade" id="wf-3" role="tabpanel" aria-labelledby="wf-tab-3">
                        <p class="xp-wf-desc">A gateway authenticates financial instructions, creates a settlement intent, verifies HSM-backed evidence, executes destination settlement, and returns reconciliation output.</p>
                        <ol class="xp-steps" style="--n:5"><li><span class="xp-mono">01</span>Authenticate instruction</li><li><span class="xp-mono">02</span>Create settlement intent</li><li><span class="xp-mono">03</span>Verify HSM-backed evidence</li><li><span class="xp-mono">04</span>Execute settlement</li><li><span class="xp-mono">05</span>Return reconciliation</li></ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Illustrative Workflows Ends -->

    <!-- Security Posture Starts -->
    <section class="px-80 bg-lightgray">
        <div class="container">
            <div class="xp-band-grid">
                <div>
                    <p class="xp-eyebrow">Security posture</p>
                    <h2 class="xp-h2">XIM does not eliminate trust. It makes trust explicit, modular, measurable, and isolatable.</h2>
                    <p class="xp-lead">Every lane declares how its messages are verified, so risk can be assessed and contained lane by lane.</p>
                </div>
                <ul class="xp-band-cards">
                    <li class="xp-band-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-shield"/></svg></span><h3>Authenticity</h3><p>Destination acceptance requires source evidence satisfying the selected lane policy.</p></li>
                    <li class="xp-band-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-repeat"/></svg></span><h3>Replay Resistance</h3><p>Consumed message IDs cannot execute twice on the same destination security domain.</p></li>
                    <li class="xp-band-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-pause"/></svg></span><h3>Lane Isolation</h3><p>A compromised or anomalous lane can be paused without globally halting unrelated lanes.</p></li>
                    <li class="xp-band-card"><span class="xp-card-ico"><svg class="" aria-hidden="true"><use href="#xp-search"/></svg></span><h3>Auditability</h3><p>State transitions are reconstructible from authenticated commitments and event records.</p></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Security Posture Ends -->

    <!-- Use Cases Starts -->
    <section class="px-80">
        <div class="container">
            <div class="xp-usecases">
                <div>
                    <p class="xp-eyebrow">Where it applies</p>
                    <h2 class="xp-h2">One fabric for many kinds of networks and assets</h2>
                </div>
                <ul class="xp-chips">
                    <li>Public blockchains</li>
                    <li>Permissioned ledgers</li>
                    <li>Institutional networks</li>
                    <li>Stablecoins</li>
                    <li>Tokenized assets</li>
                    <li>Trade finance</li>
                    <li>ISO 20022-compatible payment workflows</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Use Cases Ends -->

    <!-- Implementation Roadmap Starts -->
    <section class="px-80 bg-lightgray">
        <div class="container">
            <div class="xp-head xp-head-split">
                <div>
                    <p class="xp-eyebrow">Implementation roadmap</p>
                    <h2 class="xp-h2">Twelve-week staged minimum viable implementation</h2>
                </div>
                <p class="xp-lead">XIM is a research preview. The next stage is implementation, public test vectors, reproducible benchmarks, adversarial testing, audits, and formal analysis before production use.</p>
            </div>
            <div class="xp-roadmap">
                <div class="xp-rm-head" aria-hidden="true"><span class="xp-mono">Workstream</span><div class="xp-rm-weeks xp-mono"><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>12</span></div></div>
                <ol class="xp-rm-list">
                    <li class="xp-rm-row" style="--s:1;--e:2">
                        <div class="xp-rm-label"><span class="xp-mono">Weeks 1–2</span><h3>Protocol Freeze</h3><p>XIM v0.1 schema, NetworkID/UAID format, state machine, lane policy model, and test vectors.</p></div>
                        <div class="xp-rm-track" aria-hidden="true"><span class="xp-rm-bar"></span></div>
                    </li>
                    <li class="xp-rm-row" style="--s:2;--e:5">
                        <div class="xp-rm-label"><span class="xp-mono">Weeks 2–5</span><h3>XDC Contracts</h3><p>MessageRegistry, VerifierRegistry, RiskManager, replay protection, and event model.</p></div>
                        <div class="xp-rm-track" aria-hidden="true"><span class="xp-rm-bar"></span></div>
                    </li>
                    <li class="xp-rm-row" style="--s:3;--e:7">
                        <div class="xp-rm-label"><span class="xp-mono">Weeks 3–7</span><h3>First Adapters</h3><p>XDC and Ethereum observers/executors, deterministic encoding, and threshold-attestation bootstrap.</p></div>
                        <div class="xp-rm-track" aria-hidden="true"><span class="xp-rm-bar"></span></div>
                    </li>
                    <li class="xp-rm-row" style="--s:5;--e:8">
                        <div class="xp-rm-label"><span class="xp-mono">Weeks 5–8</span><h3>Commitments &amp; SDK</h3><p>SMT library, batch roots, TypeScript/Go SDKs, and REST/gRPC API.</p></div>
                        <div class="xp-rm-track" aria-hidden="true"><span class="xp-rm-bar"></span></div>
                    </li>
                    <li class="xp-rm-row" style="--s:7;--e:10">
                        <div class="xp-rm-label"><span class="xp-mono">Weeks 7–10</span><h3>Security &amp; Operations</h3><p>Rate limits, lane pause, key rotation, monitoring, chaos/failure tests.</p></div>
                        <div class="xp-rm-track" aria-hidden="true"><span class="xp-rm-bar"></span></div>
                    </li>
                    <li class="xp-rm-row" style="--s:10;--e:12">
                        <div class="xp-rm-label"><span class="xp-mono">Weeks 10–12</span><h3>Pilot</h3><p>Ethereum–XDC testnet message transfer, asset-transfer demonstration, and benchmark report.</p></div>
                        <div class="xp-rm-track" aria-hidden="true"><span class="xp-rm-bar"></span></div>
                    </li>
                </ol>
            </div>
            <p class="xp-rm-foot mt-4"><a class="xp-link" href="https://arxiv.org/abs/2609.39310" target="_blank">View the full roadmap in the paper <svg class="xp-ico" aria-hidden="true"><use href="#xp-ext"/></svg></a></p>
        </div>
    </section>
    <!-- Implementation Roadmap Ends -->

    <!-- FAQs Starts -->
    <section class="px-80" id="faq">
        <div class="container">
            <div class="xp-faq-grid">
                <div>
                    <p class="xp-eyebrow">FAQ</p>
                    <h2 class="xp-h2">Questions about XIM</h2>
                </div>
                <div class="accordion accordion-flush fs-6" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What is XIM?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">XIM, the XDC Interledger Messaging Protocol, is a verification-agnostic messaging and settlement fabric for heterogeneous ledgers, institutional networks, and financial rails.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Does every network have to share one consensus system?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">No. XIM does not force every connected network into a single consensus system. It defines how independently governed trust domains exchange authenticated messages.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                How are cross-ledger messages verified?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">Each source–destination lane selects an explicit verification policy. XIM supports native proofs, light clients, zero-knowledge proofs, threshold attestations, TEE attestations, and hybrid verification.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                What happens if a lane is compromised?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">Lane-scoped risk monitors can rate-limit, pause, or downgrade a compromised or anomalous lane without globally halting unrelated routes.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                How does XIM relate to XDC Subnet and XDC Zero?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">XDC Zero supports communication between a subnet and XDC Mainnet. XIM extends this approach to heterogeneous blockchains, institutional ledgers, and authenticated financial gateways. Learn more about <a href="privacy-network">privacy-focused enterprise networks</a>.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="fw-500 accordion-button no-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                Is XIM ready for production use?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body no-bg">Not yet. XIM is a research preview. Implementation, public test vectors, reproducible benchmarks, adversarial testing, audits, and formal analysis come before production use.</div>
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
                    <h2 class="xp-h2">Read the XIM research paper</h2>
                    <p>By Atul Khekade, Ritesh Kakkad, Wanwiset Peerapatanapokin and Behnam Mohammadkhani, XDC Network Research &amp; Engineering.</p>
                </div>
                <div class="xp-ctas">
                    <a href="https://arxiv.org/abs/2609.39310" target="_blank"><button class="xp-btn-light">Open the Paper <svg class="xp-ico" aria-hidden="true"><use href="#xp-ext"/></svg></button></a>
                    <a href="https://www.xdc.dev/" target="_blank"><button class="xp-btn-outline">XDC Forum</button></a>
                </div>
            </div>
            <p class="xp-note">Content adapted from the <a href="https://xim-landing-page.vercel.app/" target="_blank" rel="noopener">XIM protocol site</a>.</p>
        </div>
    </section>
    <!-- CTA Ends -->

    <!-- Need More Help Starts -->
<section class="px-80 pt-3">
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
            "name": "What is XIM?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "XIM, the XDC Interledger Messaging Protocol, is a verification-agnostic messaging and settlement fabric for heterogeneous ledgers, institutional networks, and financial rails."
            }
        },
        {
            "@type": "Question",
            "name": "Does every network have to share one consensus system?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. XIM does not force every connected network into a single consensus system. It defines how independently governed trust domains exchange authenticated messages."
            }
        },
        {
            "@type": "Question",
            "name": "How are cross-ledger messages verified?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Each source–destination lane selects an explicit verification policy. XIM supports native proofs, light clients, zero-knowledge proofs, threshold attestations, TEE attestations, and hybrid verification."
            }
        },
        {
            "@type": "Question",
            "name": "What happens if a lane is compromised?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Lane-scoped risk monitors can rate-limit, pause, or downgrade a compromised or anomalous lane without globally halting unrelated routes."
            }
        },
        {
            "@type": "Question",
            "name": "How does XIM relate to XDC Subnet and XDC Zero?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "XDC Zero supports communication between a subnet and XDC Mainnet. XIM extends this approach to heterogeneous blockchains, institutional ledgers, and authenticated financial gateways."
            }
        },
        {
            "@type": "Question",
            "name": "Is XIM ready for production use?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not yet. XIM is a research preview. Implementation, public test vectors, reproducible benchmarks, adversarial testing, audits, and formal analysis come before production use."
            }
        }
    ]
}
</script>
<?php include('inc/footer.php') ?>
