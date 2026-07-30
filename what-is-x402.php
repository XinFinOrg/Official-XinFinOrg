<?php
    $title = "What is x402? | Payment Protocol for AI Agents on XDC";

    $desc = "Learn how x402 lets AI agents pay using the HTTP 402 status code — and why XDC Network's gasless USDC settlement and instant finality power the agent economy.";

    include 'inc/header.php'; ?>

<!-- Hero Home Starts -->
<section class="px-200 px-t250-b100 hero-inside">
    <!--<div class="container p-relative">-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 hero-content">
                <h1 class="title-m text-center mb-0">What is x402? | Payment Protocol for AI Agents on XDC</h1>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">Learn how x402 enables AI agents to make internet-native payments using the HTTP 402 status code — and why XDC Network's gasless USDC settlement and near-instant finality make it a natural home for the agent economy.</h2>
                <div class="btn-block text-center d-block mt-4">
                    <a href="#why-xdc""><button class="btn-blue mt-2">Why XDC Network for x402?</button></a>
                    <a href="#how-to-use"><button class="btn-transp-bordered mt-2">How to Use x402 on XDC</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Home Ends -->

<!-- What is x402 -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h3 class="title-xs fs-5 text-left">An Intro to x402</h3>
                <p class="subtitle subtitle-s fs-6 mb-4">x402 is an open, internet-native payment protocol built around HTTP status code 402 — "Payment Required" — a code reserved in the web's original design but never activated. Incubated by the Coinbase Development Platform team and now maintained as an open standard, x402 lets any API or web service require payment before serving a response. No accounts, no API keys, no subscriptions, no invoices. A client requests a resource, the server replies with a price, the client attaches a signed stablecoin payment to the retried request, and the content is delivered — all within the normal HTTP flow.</p>
                <p class="subtitle subtitle-s fs-6 mb-5">For the first time, payments become a native primitive of the web itself. Learn more about the standard at x402.org.</p>

                <h3 id="why-xdc" class="title-xs fs-5 text-left">Why XDC Network for x402?</h3>
                <p class="subtitle subtitle-s fs-6 mb-3">When agents transact thousands of times per hour, the settlement rails decide whether the economics work. XDC Network is built for exactly this profile:</p>
                <ul class="listStyle fs-6 mb-5">
                    <li><span class="fw-600">Gasless settlement for payers.</span> With x402 on XDC, agents pay in USDC without holding XDC for gas. Meta-transaction settlement removes the biggest onboarding friction in machine-to-machine payments — no faucets, no gas top-ups, no stranded agents.</li>
                    <li><span class="fw-600">Near-instant deterministic finality.</span> XDC 2.0's Proof of Stake consensus delivers transaction finality in seconds — final means final, with no reorg risk. An agent knows its payment settled before the next API call fires.</li>
                    <li><span class="fw-600">Fees measured in fractions of a cent.</span> Micropayments only work when the fee doesn't eat the payment. XDC's ultra-low transaction costs make true pay-per-request pricing viable, even for calls priced at a fraction of a cent.</li>
                    <li><span class="fw-600">EVM-compatible, enterprise-grade.</span> x402 servers and clients built for EVM chains work on XDC with minimal changes, and the network's decade-long track record in trade finance and real-world assets gives enterprises a compliant, production-proven settlement layer.</li>
                </ul>

                <h3 class="title-xs fs-5 text-left">Powering the Agent Economy</h3>
                <p class="subtitle subtitle-s fs-6 mb-4">AI agents are no longer just generating text. With modern tool use and context protocols, agents research, execute, and transact with minimal human supervision. They will pay for data feeds, fund their own compute, subscribe to services, and settle with other agents — continuously and autonomously.</p>
                <p class="subtitle subtitle-s fs-6 mb-4">This is the rise of agentic payments: a layer of the internet economy where machine-to-machine transactions represent a growing share of demand for digital services. Traditional payment rails — card networks, invoicing, subscription billing — were built for humans at human speed. They cannot underwrite an agent making a $0.001 payment every 400 milliseconds.</p>
                <p class="subtitle subtitle-s fs-6 mb-5">x402 on XDC gives that economy working rails: gasless USDC settlement, deterministic finality, and predictable sub-cent costs, on infrastructure already trusted for institutional finance.</p>
                
                <h3 class="title-xs fs-5 text-left">A Growing Ecosystem</h3>
                <p class="subtitle subtitle-s fs-6 mb-5">The x402 standard is blockchain-agnostic and backed by a growing community of SDK builders, payment facilitators, and platform integrations. On XDC, builders are shipping x402-enabled API servers, AI payment agents, and developer tooling that make monetizing any endpoint as simple as adding a middleware. Because x402 rides on plain HTTP, it composes cleanly with MCP servers, agent frameworks, and existing web infrastructure — no protocol lock-in, no proprietary rails.</p>
                
                <h3 class="title-xs fs-5 text-left">Built Into the Internet</h3>
                <p class="subtitle subtitle-s fs-6 mb-4">x402 on XDC is built into existing HTTP requests, with no additional communication required. There's no new protocol to adopt, no separate payment channel to open, no webhook to configure — the 402 status code and the payment header ride inside the same request/response cycle every API already speaks.</p>
                <p class="subtitle subtitle-s fs-6 mb-5">That means any HTTP client, server, or agent framework can add x402 support without re-architecting how it talks to the network. A request goes out, a 402 comes back if payment is due, a signed USDC payment gets attached on retry, and XDC settles it — all inside the HTTP calls that were already happening.</p>

                <h3 class="title-xs fs-5 text-left">Accept Payments With a Single Line of Code</h3>
                <p class="subtitle subtitle-s fs-6 mb-4">Getting paid for an API on XDC takes one line of middleware:</p>
                <div class="xdc-code bg-light75 br-20">
                    <span class="xdc-code-label">JavaScript</span>
                    <ol class="xdc-code-list mb-0">
                        <li><span class="xdc-code-content">app.use(paymentMiddleware({</span></li>
                        <li class="i1"><span class="xdc-code-content"><span class="str">"GET /weather"</span>: {</span></li>
                        <li class="i2"><span class="xdc-code-content"><span class="xdc-code-stmt">accepts: [<span class="str">"USDC"</span>],</span><span class="cm">// Stablecoin on XDC Network</span></span></li>
                        <li class="i2"><span class="xdc-code-content"><span class="xdc-code-stmt">price: <span class="str">"$0.001"</span>,</span><span class="cm">// Price per request</span></span></li>
                        <li class="i2"><span class="xdc-code-content"><span class="xdc-code-stmt">network: <span class="str">"xdc"</span>,</span><span class="cm">// Gasless settlement</span></span></li>
                        <li class="i1"><span class="xdc-code-content">},</span></li>
                        <li><span class="xdc-code-content">}));</span></li>
                    </ol>
                </div>
                <p class="subtitle subtitle-s fs-6 mb-4">That's it. Add one line of code to require payment for each incoming request. If a request arrives without payment, the server responds with HTTP 402, prompting the client to pay and retry — settled on XDC in seconds, for a fraction of a cent.</p>
                
                <p class="subtitle subtitle-s fs-6 mb-4">Paying is just as simple on the client side:</p>
                <div class="xdc-code bg-light75 br-20">
                    <span class="xdc-code-label">JavaScript</span>
                    <ol start="8" class="xdc-code-list start8 mb-0">
                        <li><span class="xdc-code-content"><span class="kw">const</span> client = withPaymentInterceptor(axios.create(), account);</span></li>
                        <li><span class="xdc-code-content">&nbsp;</span></li>
                        <li><span class="xdc-code-content"><span class="kw">const</span> response = <span class="kw">await</span> client.get(<span class="str">"https://api.example.com/weather"</span>);</span></li>
                        <li><span class="xdc-code-content"><span class="cm">// Payment is detected, signed, and retried automatically</span></span></li>
                    </ol>
                </div>
                <p class="subtitle subtitle-s fs-6 mb-0">How do I integrate x402?</p>
                <a href="https://docs.x402.org/getting-started/quickstart-for-sellers" target="_blank" class="btn socialHead-button mt-auto pt-2">
                    Read the Quickstart for Sellers
                    <svg class="w-6 h-6 icon ml-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>

                <h3 id="how-to-use" class="title-xs fs-5 text-left mt-5">How to Use x402 on XDC</h3>
                <p class="subtitle subtitle-s fs-6 mb-2">x402 works the same way whether you're serving an API or building the agent that calls it.</p>
                <p class="subtitle subtitle-s fs-6 mb-3">Here's how different builders get started:</p>

            </div>

            <div class="col-lg-5 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info xdc-panel">
                        <span class="panel-tag bg-lightgray">If you run an API or service</span>
                        <div class="card-infoHead mb-3">You want to get paid</div>
                        <ol class="ps-0 mb-1">
                            <li>Add an x402 payment middleware in front of your endpoint (available for common frameworks — Express, Next.js, FastAPI, and more).</li>
                            <li>Set your price per request in USDC — no billing account, no Stripe integration, no invoicing required.</li>
                            <li>When a client calls your endpoint without payment, your server automatically responds with HTTP 402 and the price.</li>
                            <li>The client retries with a signed USDC payment attached; your server verifies and settles it on XDC, then returns the response — typically in one round trip.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info xdc-panel">
                        <span class="panel-tag bg-lightgray">If you're building an AI agent</span>
                        <div class="card-infoHead mb-3">You want to pay for things</div>
                        <ol class="ps-0 mb-1">
                            <li>Give your agent a non-custodial wallet funded with USDC — no XDC needed for gas, since settlement is gasless.</li>
                            <li>Point your agent at any x402-enabled endpoint (an XDC RPC service, a data feed, another agent's API).</li>
                            <li>Your agent's client library detects the 402 response, signs the payment automatically, and retries — no manual approval step required for pay-per-call pricing under your configured limits.</li>
                            <li>Set on-chain spending limits so the agent can only spend what you authorize, with every payment recorded on-chain for auditability.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-lg-10">
                <h3 class="title-xs fs-6 text-left mt-3">If you just want to try it out:</h3>
                <ul class="listStyle fs-6 ps-3 mt-2">
                    <li>Explore live x402 services and agents already running on XDC through the XDC AI marketplace (see below).</li>
                    <li>Use the developer quickstart docs to spin up a minimal paid endpoint or a minimal paying client in a few lines of code.</li>
                </ul>

                <h3 class="title-xs fs-5 text-left mt-5">Built on XDC: XDCAI.tech</h3>
                <p class="subtitle subtitle-s fs-6 mb-4">XDCAI.tech is the reference implementation of agentic commerce on XDC Network — a payment, control, and settlement framework built around the open x402 standard. It gives autonomous agents a non-custodial smart wallet and a compliant, regulated framework for paying for APIs and digital services in USDC, without subscriptions, invoices, or credit cards.</p>
                <p class="subtitle subtitle-s fs-6 mb-4">Under the hood, XDCAI combines gasless USDC payments (via EIP-3009) with user-controlled on-chain spending limits, pay-per-call API transactions, and machine-readable transaction records for every request. It supports agent-to-agent and agent-to-business payments out of the box, and integrates directly with platforms like ChatGPT, Claude, Codex, and Cursor — so an agent running in any of those environments can discover a paid service and settle payment without leaving its workflow.</p>
                <p class="subtitle subtitle-s fs-6 mb-1">XDCAI.tech is built on the same rails as native USDC and Circle's CCTP V2 on XDC Network, both already live and supporting fast, ISO 20022-compliant messaging and low-cost cross-chain transfers. It's a practical example of what "x402 on XDC" looks like in production — not a demo, but working infrastructure for a future where millions of autonomous agents transact with one another.</p>
                
                <div class="xdcFuture-links text-md-start text-lg-start">
                    <a href="https://xdcai.tech/marketplace" target="_blank" class="btn socialHead-button me-4">
                        Explore the XDCAI Marketplace
                        <svg class="w-6 h-6 icon ml-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                    <a href="https://docs.xdcai.tech/" target="_blank" class="btn socialHead-button pe-4">
                        Build a Quick Agent with the XDCAI Framework
                        <svg class="w-6 h-6 icon ml-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <h3 class="title-xs fs-5 text-left mt-5">Real-World Use Cases</h3>
                 <ul class="checkmark subtitle fs-6 ps-3">
                    <li>AI agents autonomously paying for API access, data feeds, RPC calls, and compute</li>
                    <li>Developers monetizing APIs per-request in USDC — no billing system, no subscriptions</li>
                    <li>Content and data providers charging micropayments for articles, datasets, or model inference</li>
                    <li>Agent-to-agent marketplaces where autonomous buyers and sellers settle 24/7</li>
                    <li>Trade finance and RWA platforms exposing paid data endpoints to institutional agents</li>
                </ul>   
            </div>

            <div class="col-lg-10  mt-5 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info xdc-panel">
                        <div class="card-infoHead fs-5 mb-2">Ready to build with x402 on XDC?</div>
                        <div class="xdcFuture-links text-md-start text-lg-start">
                            <a href="https://xdcai.tech/" target="_blank" class="btn socialHead-button me-4">
                                Explore XDC AI
                                <svg class="w-6 h-6 icon ml-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                            <a href="https://xdcai.tech/integrate" target="_blank" class="btn socialHead-button pe-4">
                                Start Building
                                <svg class="w-6 h-6 icon ml-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div>
</section>
<!-- What is x402 -->

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

<?php include 'inc/footer.php'; ?>
