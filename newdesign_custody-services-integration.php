<?php 
    $title = "Custody Services Integration";
    $desc = "Details require to list XDC Network (MainNet Chain) with exchange.";
    
    include('inc/header.php') ?>

    <style>
        <?php include 'assets/css/new-styles.css'; ?>
    </style>


<main>

<!-- ======================= HERO ======================= -->
<!--<section class="hero">-->
<section class="px-200 px-t250-b100 hero-inside">
  <!--<div class="hero-grid-bg" aria-hidden="true"></div>-->
  <div class="wrap hero-inner">
    <div class="hero-copy">
      <p class="eyebrow">Custody &amp; Exchange Integration</p>
      <h1>Bring XDC Network into custody.</h1>
      <p class="hero-lede">One reference page with everything a custodian, exchange, or institutional wallet needs to connect a node, verify finality, and list <span class="mono-inline">XDC</span> safely — MainNet and Apothem TestNet included.</p>
      <div class="hero-cta-row">
        <a class="btn btn-solid btn-lg" href="#checklist">View integration checklist</a>
        <a class="btn btn-outline btn-lg" href="#rpc">Jump to RPC endpoints</a>
      </div>
      <dl class="hero-stats">
        <div><dt>Consensus</dt><dd>XDPoS 2.0</dd></div>
        <div><dt>Block finality</dt><dd>32 blocks</dd></div>
        <div><dt>Network ID</dt><dd>50 · 51</dd></div>
      </dl>
    </div>

    <div class="hero-panel" role="img" aria-label="Network connection status panel showing XDC MainNet and Apothem TestNet as online">
      <div class="panel-head">
        <span class="panel-dot-row"><span class="status-dot status-dot--live"></span>Connection Monitor</span>
        <span class="panel-id">node://xdc-network</span>
      </div>
      <ul class="panel-rows">
        <li>
          <span class="row-label"><span class="status-dot status-dot--live"></span>XDC MainNet</span>
          <span class="row-value mono">chain id 50</span>
        </li>
        <li>
          <span class="row-label"><span class="status-dot status-dot--live"></span>Apothem TestNet</span>
          <span class="row-value mono">chain id 51</span>
        </li>
        <li>
          <span class="row-label"><span class="status-dot status-dot--amber"></span>Block finality</span>
          <span class="row-value mono">32 / 32 confirmed</span>
        </li>
        <li>
          <span class="row-label"><span class="status-dot status-dot--live"></span>RPC reachability</span>
          <span class="row-value mono">7 endpoints up</span>
        </li>
      </ul>
      <svg class="panel-trace" viewBox="0 0 320 70" preserveAspectRatio="none" aria-hidden="true">
        <polyline points="0,45 30,45 45,18 65,55 90,30 115,30 130,12 160,12 175,48 200,48 215,24 245,24 260,40 290,40 320,20" fill="none" stroke="currentColor" stroke-width="1.4"/>
      </svg>
    </div>
  </div>
</section>

<!-- ======================= PROJECT SPEC SHEET ======================= -->
<section class="section spec" id="spec">
  <div class="wrap">
    <p class="section-eyebrow">Listing Reference</p>
    <h2>Project specification</h2>
    <p class="section-lede">The fields most listing and custody review forms ask for, pre-filled and ready to copy into yours.</p>

    <div class="spec-grid">
      <div class="spec-card">
        <span class="spec-label">Project name</span>
        <span class="spec-value">XDC Network</span>
      </div>
      <div class="spec-card">
        <span class="spec-label">Project website</span>
        <a class="spec-value spec-link" href="https://xinfin.org">xinfin.org ↗</a>
      </div>
      <div class="spec-card">
        <span class="spec-label">Token name</span>
        <span class="spec-value">XDC MainNet</span>
      </div>
      <div class="spec-card">
        <span class="spec-label">Token symbol</span>
        <span class="spec-value mono">XDC</span>
      </div>
      <div class="spec-card">
        <span class="spec-label">Block finality</span>
        <span class="spec-value">32 blocks</span>
      </div>
      <div class="spec-card spec-card--wide">
        <span class="spec-label">Suggested trading pairs</span>
        <div class="pair-tags">
          <span class="pair-tag">XDC / USDC</span>
          <span class="pair-tag">XDC / ETH</span>
          <span class="pair-tag">XDC / BTC</span>
          <span class="pair-tag">XDC / USD</span>
        </div>
      </div>
      <div class="spec-card">
        <span class="spec-label">Bounty preference</span>
        <span class="spec-value">No bounty required</span>
      </div>
      <div class="spec-card spec-card--wide spec-card--wide--full spec-card--logo">
        <span class="spec-label">Logo asset</span>
        <div class="logo-swatches">
          <span class="swatch swatch--dark"><img src="assets/images/xdc-inverted-primary-icon.png" style="width: 25px !important;" class="iconL m-auto"></span>
          <span class="swatch swatch--light"><img src="assets/images/xdc-primary-icon.png" style="width: 25px !important;" class="iconL m-auto"></span>
          <a class="text-link" href="#">Download brand assets ↗</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======================= INTEGRATION CHECKLIST ======================= -->
<section class="section checklist-section" id="checklist">
  <div class="wrap">
    <p class="section-eyebrow">Step by step</p>
    <h2>The integration sequence</h2>
    <p class="section-lede">Follow this order — each step depends on the one before it, from first connection to going live on MainNet.</p>

    <ol class="checklist">
      <li class="checklist-item">
        <span class="checklist-index">01</span>
        <div class="checklist-body">
          <h3>Connect to a TestNet node</h3>
          <p>Point your infrastructure at an Apothem RPC endpoint and confirm you can read blocks before touching real funds.</p>
        </div>
      </li>
      <li class="checklist-item">
        <span class="checklist-index">02</span>
        <div class="checklist-body">
          <h3>Fund a test wallet</h3>
          <p>Use the Apothem faucet to pull test XDC and exercise deposit, withdrawal, and confirmation logic end to end.</p>
        </div>
      </li>
      <li class="checklist-item">
        <span class="checklist-index">03</span>
        <div class="checklist-body">
          <h3>Set finality and confirmation thresholds</h3>
          <p>XDC reaches finality at 32 blocks under XDPoS 2.0 — configure your custody engine to treat that as settled.</p>
        </div>
      </li>
      <li class="checklist-item">
        <span class="checklist-index">04</span>
        <div class="checklist-body">
          <h3>Review audits and legal opinions</h3>
          <p>Pull the SlowMist and Certik audits and the jurisdictional legal opinions into your compliance file.</p>
        </div>
      </li>
      <li class="checklist-item">
        <span class="checklist-index">05</span>
        <div class="checklist-body">
          <h3>Switch to MainNet and list pairs</h3>
          <p>Repoint endpoints to MainNet, enable the trading or custody pairs you've chosen, and monitor the connection panel.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- ======================= RPC ENDPOINTS ======================= -->
<section class="section rpc-section" id="rpc">
  <div class="wrap">
    <p class="section-eyebrow">Network Access</p>
    <h2>RPC endpoints &amp; explorers</h2>
    <p class="section-lede">Copy what you need directly into your node configuration.</p>

    <div class="tabs" role="tablist" aria-label="Network selection">
      <button class="tab is-active" role="tab" aria-selected="true" data-target="mainnet">MainNet</button>
      <button class="tab" role="tab" aria-selected="false" data-target="testnet">TestNet (Apothem)</button>
    </div>

    <div class="terminal" id="mainnet" role="tabpanel">
      <div class="terminal-bar">
        <span class="terminal-dot"></span><span class="terminal-dot"></span><span class="terminal-dot"></span>
        <span class="terminal-title">mainnet · network id 50</span>
      </div>
      <div class="term-row">
        <span class="term-key">RPC</span>
        <code class="term-code">https://rpc.xinfin.network</code>
        <button class="copy-btn" data-copy="https://rpc.xinfin.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">RPC</span>
        <code class="term-code">https://erpc.xinfin.network</code>
        <button class="copy-btn" data-copy="https://erpc.xinfin.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">RPC</span>
        <code class="term-code">https://arpc.xinfin.network</code>
        <button class="copy-btn" data-copy="https://arpc.xinfin.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">RPC</span>
        <code class="term-code">https://earpc.xinfin.network</code>
        <button class="copy-btn" data-copy="https://earpc.xinfin.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">RPC</span>
        <code class="term-code">https://xdc.public-rpc.com</code>
        <button class="copy-btn" data-copy="https://xdc.public-rpc.com">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">eRPC</span>
        <code class="term-code">https://erpc.xdcrpc.com</code>
        <button class="copy-btn" data-copy="https://erpc.xdcrpc.com">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">WS</span>
        <code class="term-code">wss://ws.xinfin.network</code>
        <button class="copy-btn" data-copy="wss://ws.xinfin.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">WS</span>
        <code class="term-code">wss://ews.xinfin.network</code>
        <button class="copy-btn" data-copy="wss://ews.xinfin.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">Explorer</span>
        <code class="term-code">https://xdcscan.com</code>
        <button class="copy-btn" data-copy="https://xdcscan.com">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">Explorer</span>
        <code class="term-code">https://xdc.blocksscan.io</code>
        <button class="copy-btn" data-copy="https://xdc.blocksscan.io">Copy</button>
      </div>
    </div>

    <div class="terminal" id="testnet" role="tabpanel" hidden>
      <div class="terminal-bar">
        <span class="terminal-dot"></span><span class="terminal-dot"></span><span class="terminal-dot"></span>
        <span class="terminal-title">apothem testnet · network id 51</span>
      </div>
      <div class="term-row">
        <span class="term-key">RPC</span>
        <code class="term-code">https://rpc.apothem.network</code>
        <button class="copy-btn" data-copy="https://rpc.apothem.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">RPC</span>
        <code class="term-code">https://apothem.xdcrpc.com</code>
        <button class="copy-btn" data-copy="https://apothem.xdcrpc.com">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">eRPC</span>
        <code class="term-code">https://erpc.apothem.network</code>
        <button class="copy-btn" data-copy="https://erpc.apothem.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">WS</span>
        <code class="term-code">wss://ws.apothem.network/ws</code>
        <button class="copy-btn" data-copy="wss://ws.apothem.network/ws">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">Faucet</span>
        <code class="term-code">https://faucet.apothem.network</code>
        <button class="copy-btn" data-copy="https://faucet.apothem.network">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">Explorer</span>
        <code class="term-code">https://apothem.xdcscan.io</code>
        <button class="copy-btn" data-copy="https://apothem.xdcscan.io">Copy</button>
      </div>
      <div class="term-row">
        <span class="term-key">Explorer</span>
        <code class="term-code">https://apothem.blocksscan.io</code>
        <button class="copy-btn" data-copy="https://apothem.blocksscan.io">Copy</button>
      </div>
    </div>

    <div class="rpc-links">
      <a href="https://chainlist.org/chain/50" class="text-link">Find more endpoints on Chainlist (id 50) ↗</a>
      <a href="https://apidocs.xinfin.network" class="text-link">XDC API documentation ↗</a>
      <a href="https://github.com/XinFinOrg/XinFin-Node" class="text-link">Full node setup instructions ↗</a>
    </div>
  </div>
</section>

<!-- ======================= FAUCET ======================= -->
<section class="section faucet-section">
  <div class="wrap faucet-inner">
    <div class="faucet-copy">
      <p class="section-eyebrow">TestNet Funding</p>
      <h2>Test against real conditions, with no real risk.</h2>
      <p>The Apothem faucet hands out test XDC on request, so your team can exercise deposits, withdrawals, and confirmation handling exactly as they'll behave on MainNet — before a single live token moves.</p>
      <div class="hero-cta-row">
        <a class="btn btn-solid" href="https://www.apothem.network/#getTestXDC">Get test XDC</a>
        <a class="btn btn-outline" href="https://www.apothem.network/">Apothem Network ↗</a>
      </div>
    </div>
    <div class="faucet-visual" aria-hidden="true">
      <div class="faucet-card">
        <span class="status-dot status-dot--live"></span>
        <span class="mono">request → 51</span>
        <div class="faucet-bars">
          <span></span><span></span><span></span><span></span><span></span>
        </div>
        <span class="mono faucet-balance">+10.00 XDC</span>
      </div>
    </div>
  </div>
</section>

<!-- ======================= WALLETS ======================= -->
<section class="section wallets-section">
  <div class="wrap">
    <p class="section-eyebrow">Custody Interfaces</p>
    <h2>Wallet extensions</h2>
    <p class="section-lede">Reference implementations your team can install and inspect directly.</p>

    <div class="wallet-grid">
      <div class="wallet-card">
        <div class="wallet-icon">XP</div>
        <h3>XDCPay</h3>
        <p>Browser extension wallet for signing and submitting transactions on XDC Network.</p>
        <a class="text-link" href="#">Add to Chrome ↗</a>
      </div>
      <div class="wallet-card">
        <div class="wallet-icon">XW</div>
        <h3>XDC Web Wallet</h3>
        <p>Open-source, browser-based wallet — no install required for quick verification work.</p>
        <a class="text-link" href="https://wallet.xinfin.network/">Open web wallet ↗</a>
      </div>
      <div class="wallet-card">
        <div class="wallet-icon">BP</div>
        <h3>BlocksPay</h3>
        <p>Multi-chain wallet extension with native XDC Network support alongside other chains.</p>
        <a class="text-link" href="#">Add to Chrome ↗</a>
      </div>
    </div>
  </div>
</section>

<!-- ======================= AUDIT & LEGAL ======================= -->
<section class="section audit-section">
  <div class="wrap">
    <p class="section-eyebrow">Diligence</p>
    <h2>Network assessment &amp; chain analysis</h2>
    <p class="section-lede">Independent audits and legal opinions, ready to drop into your compliance review.</p>

    <div class="audit-grid">
      <a class="audit-card" href="#">
        <span class="audit-tag">Security Audit</span>
        <h3>SlowMist</h3>
        <span class="text-link">View report ↗</span>
      </a>
      <a class="audit-card" href="#">
        <span class="audit-tag">Security Audit</span>
        <h3>Certik</h3>
        <span class="text-link">View report ↗</span>
      </a>
      <a class="audit-card" href="#">
        <span class="audit-tag">Chain Analysis</span>
        <h3>Blockchain Intelligence Group</h3>
        <span class="text-link">View report ↗</span>
      </a>
      <a class="audit-card" href="#">
        <span class="audit-tag">Chain Analysis</span>
        <h3>Elliptic</h3>
        <span class="text-link">Visit ↗</span>
      </a>
      <a class="audit-card" href="#">
        <span class="audit-tag">Legal Opinion · Liechtenstein</span>
        <h3>BCAS</h3>
        <span class="text-link">View opinion ↗</span>
      </a>
      <a class="audit-card" href="#">
        <span class="audit-tag">Legal Opinion · Canada</span>
        <h3>Miller Thomson</h3>
        <span class="text-link">View opinion ↗</span>
      </a>
      <a class="audit-card" href="#">
        <span class="audit-tag">Legal Opinion · USA</span>
        <h3>McDermott Will &amp; Emery</h3>
        <span class="text-link">View memo ↗</span>
      </a>
      <a class="audit-card" href="#">
        <span class="audit-tag">Legal Opinion · Europe</span>
        <h3>Bergt &amp; Partners</h3>
        <span class="text-link">View opinion ↗</span>
      </a>
    </div>
  </div>
</section>

</main>




<!-- Need More Help Starts -->
<section class="px-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h3 class="title-m text-center">Need More Help?</h3>
                <div class="subtitle subtitle-s text-center">For technical inquiries or integration assistance, join the XDC Network Developer Forum, access XDC documents, or join Telegram's Developers community.</div>
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


<script type="text/javascript">
  // Tab switching: MainNet / TestNet
  document.querySelectorAll('.tab').forEach(function (tab) {
    tab.addEventListener('click', function () {
      document.querySelectorAll('.tab').forEach(function (t) {
        t.classList.remove('is-active');
        t.setAttribute('aria-selected', 'false');
      });
      tab.classList.add('is-active');
      tab.setAttribute('aria-selected', 'true');

      var target = tab.getAttribute('data-target');
      document.querySelectorAll('.terminal').forEach(function (panel) {
        panel.hidden = panel.id !== target;
      });
    });
  });

  // Copy to clipboard
  document.querySelectorAll('.copy-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var value = btn.getAttribute('data-copy');
      navigator.clipboard && navigator.clipboard.writeText(value).then(function () {
        var original = btn.textContent;
        btn.textContent = 'Copied';
        btn.classList.add('is-copied');
        setTimeout(function () {
          btn.textContent = original;
          btn.classList.remove('is-copied');
        }, 1400);
      });
    });
  });

  // Mobile nav toggle
  var navToggle = document.getElementById('navToggle');
  navToggle.addEventListener('click', function () {
    var expanded = navToggle.getAttribute('aria-expanded') === 'true';
    navToggle.setAttribute('aria-expanded', String(!expanded));
    document.body.classList.toggle('nav-open');
  });
</script>

<?php include('inc/footer.php') ?>