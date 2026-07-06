<?php 
    $title = "XDC AI - Payment rails for AI agents";
    $desc = "Give any AI agent a wallet and let it pay for APIs per call in USDC on XDC. Gasless (EIP-3009), no seed phrase, no credit card. Built on the x402 standard.";
    
    include('inc/header.php') ?>

    <style>
        <?php include 'assets/css/xdc-ai.css'; ?>
    </style>


<main>

  <!-- ============================= HERO ============================= -->
  <section class="pb-0 px-t250-b100 hero-inside">
    <div class="wrap hero-grid">
      <div class="hero-copy">
        <span class="eyebrow"><span class="dot"></span> Agentic commerce on XDC · x402</span>
        <h1>Payment rails for <em>AI agents.</em></h1>
        <p>Give any agent a wallet and let it pay for APIs per call in USDC — no gas, no seed phrase, no credit card. Built on the open x402 standard, settled on XDC.</p>
        <div class="hero-cta">
          <a href="https://xdcai.tech/integrate" class="btn btn-primary" target="_blank" rel="noopener">Start Using</a>
          <a href="https://xdcai.tech/marketplace" class="btn btn-outline" target="_blank" rel="noopener">Browse Marketplace</a>
          <a href="https://docs.xdcai.tech/" class="btn btn-outline" target="_blank" rel="noopener">Read the Docs</a>
        </div>
        <div class="hero-runs">
          <span class="runs-cmd">$ npx xdcai login · fund · call</span>
        </div>
        <div class="hero-runs">
          <span class="runs-with">Works with<span>Claude</span> · <span>ChatGPT</span> · <span>Codex</span> · <span>Cursor</span> · <span>Hermes</span> · <span>Clawbot</span></span>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="terminal-card">
          <div class="terminal-chrome">
            <i></i><i></i><i></i>
            <span class="t-label">agent · xdcai</span>
          </div>
          <div class="terminal-body" id="terminalBody" aria-live="polite"></div>
        </div>

        <!-- Requirement: HTTP 402 / gasless · EIP-3009 / settled on XDC now sit
             outside the terminal card, as their own row. -->
        <div class="hero-chips">
          <span class="chip chip-blue"><b>HTTP</b> 402</span>
          <span class="chip chip-teal">gasless · EIP-3009</span>
          <span class="chip">settled on XDC</span>
        </div>
      </div>
    </div>

    <!-- Trust strip, styled after xinfin's partner-logo marquee -->
    <div class="strip">
      <div class="wrap strip-inner">
        <span class="strip-label">Built on open standards & trusted infrastructure</span>
        <div class="strip-logos">
          <img src="https://xdcai.tech/logos/xdc.png" alt="XDC Network" loading="lazy">
          <img src="https://xdcai.tech/logos/circle.png" alt="Circle" loading="lazy">
          <img src="https://xdcai.tech/logos/x402.png" alt="x402" loading="lazy">
          <img src="https://xdcai.tech/logos/privy.png" alt="Privy" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================= HOW IT WORKS ============================= -->
  <section class="section steps-section">
    <div class="wrap container">
      <div class="section-head reveal">
        <div class="section-eyebrow">How it works</div>
        <h2>From email to paid API call in four steps</h2>
        <p>No wallet setup, no gas top-ups, no contracts. The agent drives the whole loop.</p>
      </div>

      <div class="steps-grid">
        <div class="step-card reveal">
          <span class="step-num">01</span>
          <h3>Log in with email</h3>
          <p>A one-time code creates a custodial XDC wallet for the account — no keys to manage.</p>
          <span class="step-connector"></span>
        </div>
        <div class="step-card reveal">
          <span class="step-num">02</span>
          <h3>Fund with USDC</h3>
          <p>Send USDC to the wallet address. That's the only balance an agent ever needs.</p>
          <span class="step-connector"></span>
        </div>
        <div class="step-card reveal">
          <span class="step-num">03</span>
          <h3>Discover services</h3>
          <p>Browse the curated marketplace and filter x402 endpoints by capability and price.</p>
          <span class="step-connector"></span>
        </div>
        <div class="step-card reveal">
          <span class="step-num">04</span>
          <h3>Call & pay</h3>
          <p>The agent signs a USDC authorization and gets the result — the x402 loop runs itself.</p>
          <span class="step-connector"></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================= FUNDING ============================= -->
  <section class="section border-t funding-section">
    <div class="wrap container">
      <div class="section-head reveal">
        <div class="section-eyebrow">Funding</div>
        <h2>Two ways to fund the wallet</h2>
        <p>The agent spends USDC. Top it up directly, or put your XDC to work as collateral and borrow against it — without selling.</p>
      </div>

      <div class="funding-grid">
        <div class="funding-card reveal">
          <div class="funding-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>
          </div>
          <h3>Deposit USDC</h3>
          <p>Send USDC straight to the wallet address shown at login. It's the only balance an agent needs - gas is sponsored, so no native XDC required.</p>
          <ul>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
              Any wallet or exchange that supports USDC on XDC
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
              Spendable immediately, metered per call
            </li>
          </ul>
        </div>
        <div class="funding-card is-tinted reveal">
          <span class="tag-soon">Coming soon</span>
          <div class="funding-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v5c0 5-3.4 8.6-8 10-4.6-1.4-8-5-8-10V6l8-4z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Borrow against XDC</h3>
          <p>Hold XDC and don't want to sell? Lock it as collateral on an XDC lending market and borrow USDC to fund the agent — keeping your XDC exposure while it spends.</p>
          <ul>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
              Collateralize XDC → borrow USDC
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
              Stay long XDC while your agent transacts in stablecoins
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================= USE CASES ============================= -->
  <section class="section usecases-section">
    <div class="wrap container">
      <div class="section-head reveal">
        <div class="section-eyebrow">Use cases</div>
        <h2>Anything an agent can pay for, in stablecoins</h2>
        <p>XDC AI is the rails — builders ship the services. Each one is just an x402 endpoint, paid in USDC, gasless, per call.</p>
        <span class="eyebrow eyebrow-body mt-3 mb-0"><span class="dot"></span> Paid in USDC · gasless · per call</span>
      </div>

      <div class="usecases-grid">
        <div class="usecase-card reveal">
          <div class="usecase-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 8l4 4-4 4M7 8l-4 4 4 4M14 4l-4 16"/></svg>
          </div>
          <h3>Send & receive</h3>
          <p>Move USDC to any address in a single call — agent-to-agent or agent-to-human payouts.</p>
        </div>
        <div class="usecase-card reveal">
          <div class="usecase-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 16V4M7 4L3 8M7 4l4 4M17 8v12m0 0l4-4m-4 4l-4-4"/></svg>
          </div>
          <h3>Swap stablecoins</h3>
          <p>Swap between stablecoins and tokens on XDC, priced and settled per request.</p>
        </div>
        <div class="usecase-card reveal">
          <div class="usecase-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 12a2 2 0 002 2h14a2 2 0 002-2M3 12V8a2 2 0 012-2h4v4M9 20v-4h6v4"/></svg>
          </div>
          <h3>Book a hotel</h3>
          <p>Reserve a room and pay on confirmation — travel checkout an agent can complete end to end.</p>
        </div>
        <div class="usecase-card reveal">
          <div class="usecase-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12l7-2 3-8 3 8 7 2-7 2-3 8-3-8z"/></svg>
          </div>
          <h3>Book flights</h3>
          <p>Search fares and ticket a flight, paying the exact amount in USDC at purchase.</p>
        </div>
        <div class="usecase-card reveal">
          <div class="usecase-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3a9 9 0 000 18M8 9h.01M16 9h.01M8.5 14a4 4 0 007 0"/></svg>
          </div>
          <h3>Order pizza</h3>
          <p>Real-world commerce: place an order and pay at checkout — food to your door, agent-driven.</p>
        </div>
        <div class="usecase-card is-build reveal">
          <div class="usecase-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
          </div>
          <h3>Build your own</h3>
          <p>Wrap any API in x402 and name your price. If an agent can call it, it can pay for it.</p>
        </div>
      </div>
      
      <p class="usecases-note">Have an API or a service? 
        <a href="https://xdcai.tech/providers" target="_blank" class="socialHead-button mt-auto">
          List it in the marketplace
          <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
      </p>
    </div>
  </section>

  <!-- ============================= INTEGRATE ============================= -->
  <section class="section integrate-section">
    <div class="wrap container">
      <div class="section-head reveal">
        <div class="section-eyebrow">Use it in your LLM</div>
        <h2>Add XDC AI to Claude, ChatGPT, or your terminal</h2>
        <p>Two ways in: connect the MCP server in chat apps, or run the CLI in terminal agents. Then just ask, in plain language.</p>
      </div>

      <div class="integrate-grid">
        <div class="integrate-card reveal">
          <div class="integrate-top">
            <div>
              <div class="integrate-logos">
                <div class="d-flex gap-2">
                  <span class="logo-badge" style="color:#D97757" aria-hidden="true">
                    <svg fill="#D97757" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Claude</title><path d="m4.7144 15.9555 4.7174-2.6471.079-.2307-.079-.1275h-.2307l-.7893-.0486-2.6956-.0729-2.3375-.0971-2.2646-.1214-.5707-.1215-.5343-.7042.0546-.3522.4797-.3218.686.0608 1.5179.1032 2.2767.1578 1.6514.0972 2.4468.255h.3886l.0546-.1579-.1336-.0971-.1032-.0972L6.973 9.8356l-2.55-1.6879-1.3356-.9714-.7225-.4918-.3643-.4614-.1578-1.0078.6557-.7225.8803.0607.2246.0607.8925.686 1.9064 1.4754 2.4893 1.8336.3643.3035.1457-.1032.0182-.0728-.164-.2733-1.3539-2.4467-1.445-2.4893-.6435-1.032-.17-.6194c-.0607-.255-.1032-.4674-.1032-.7285L6.287.1335 6.6997 0l.9957.1336.419.3642.6192 1.4147 1.0018 2.2282 1.5543 3.0296.4553.8985.2429.8318.091.255h.1579v-.1457l.1275-1.706.2368-2.0947.2307-2.6957.0789-.7589.3764-.9107.7468-.4918.5828.2793.4797.686-.0668.4433-.2853 1.8517-.5586 2.9021-.3643 1.9429h.2125l.2429-.2429.9835-1.3053 1.6514-2.0643.7286-.8196.85-.9046.5464-.4311h1.0321l.759 1.1293-.34 1.1657-1.0625 1.3478-.8804 1.1414-1.2628 1.7-.7893 1.36.0729.1093.1882-.0183 2.8535-.607 1.5421-.2794 1.8396-.3157.8318.3886.091.3946-.3278.8075-1.967.4857-2.3072.4614-3.4364.8136-.0425.0304.0486.0607 1.5482.1457.6618.0364h1.621l3.0175.2247.7892.522.4736.6376-.079.4857-1.2142.6193-1.6393-.3886-3.825-.9107-1.3113-.3279h-.1822v.1093l1.0929 1.0686 2.0035 1.8092 2.5075 2.3314.1275.5768-.3218.4554-.34-.0486-2.2039-1.6575-.85-.7468-1.9246-1.621h-.1275v.17l.4432.6496 2.3436 3.5214.1214 1.0807-.17.3521-.6071.2125-.6679-.1214-1.3721-1.9246L14.38 17.959l-1.1414-1.9428-.1397.079-.674 7.2552-.3156.3703-.7286.2793-.6071-.4614-.3218-.7468.3218-1.4753.3886-1.9246.3157-1.53.2853-1.9004.17-.6314-.0121-.0425-.1397.0182-1.4328 1.9672-2.1796 2.9446-1.7243 1.8456-.4128.164-.7164-.3704.0667-.6618.4008-.5889 2.386-3.0357 1.4389-1.882.929-1.0868-.0062-.1579h-.0546l-6.3385 4.1164-1.1293.1457-.4857-.4554.0608-.7467.2307-.2429 1.9064-1.3114Z"/></svg>
                  </span>
                  <span class="logo-badge" style="color:#10A37F" aria-hidden="true">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>OpenAI</title><path d="M22.2819 9.8211a5.9847 5.9847 0 0 0-.5157-4.9108 6.0462 6.0462 0 0 0-6.5098-2.9A6.0651 6.0651 0 0 0 4.9807 4.1818a5.9847 5.9847 0 0 0-3.9977 2.9 6.0462 6.0462 0 0 0 .7427 7.0966 5.98 5.98 0 0 0 .511 4.9107 6.051 6.051 0 0 0 6.5146 2.9001A5.9847 5.9847 0 0 0 13.2599 24a6.0557 6.0557 0 0 0 5.7718-4.2058 5.9894 5.9894 0 0 0 3.9977-2.9001 6.0557 6.0557 0 0 0-.7475-7.0729zm-9.022 12.6081a4.4755 4.4755 0 0 1-2.8764-1.0408l.1419-.0804 4.7783-2.7582a.7948.7948 0 0 0 .3927-.6813v-6.7369l2.02 1.1686a.071.071 0 0 1 .038.052v5.5826a4.504 4.504 0 0 1-4.4945 4.4944zm-9.6607-4.1254a4.4708 4.4708 0 0 1-.5346-3.0137l.142.0852 4.783 2.7582a.7712.7712 0 0 0 .7806 0l5.8428-3.3685v2.3324a.0804.0804 0 0 1-.0332.0615L9.74 19.9502a4.4992 4.4992 0 0 1-6.1408-1.6464zM2.3408 7.8956a4.485 4.485 0 0 1 2.3655-1.9728V11.6a.7664.7664 0 0 0 .3879.6765l5.8144 3.3543-2.0201 1.1685a.0757.0757 0 0 1-.071 0l-4.8303-2.7865A4.504 4.504 0 0 1 2.3408 7.872zm16.5963 3.8558L13.1038 8.364 15.1192 7.2a.0757.0757 0 0 1 .071 0l4.8303 2.7913a4.4944 4.4944 0 0 1-.6765 8.1042v-5.6772a.79.79 0 0 0-.407-.667zm2.0107-3.0231l-.142-.0852-4.7735-2.7818a.7759.7759 0 0 0-.7854 0L9.409 9.2297V6.8974a.0662.0662 0 0 1 .0284-.0615l4.8303-2.7866a4.4992 4.4992 0 0 1 6.6802 4.66zM8.3065 12.863l-2.02-1.1638a.0804.0804 0 0 1-.038-.0567V6.0742a4.4992 4.4992 0 0 1 7.3757-3.4537l-.142.0805L8.704 5.459a.7948.7948 0 0 0-.3927.6813zm1.0976-2.3654l2.602-1.4998 2.6069 1.4998v2.9994l-2.5974 1.4997-2.6067-1.4997Z"/></svg>
                  </span>
                </div>
                <div>
                  <h3>Chat apps</h3>
                  <div class="integrate-sub">Claude.ai · ChatGPT</div>
                </div>
              </div>
            </div>
            <span class="integrate-kicker">no terminal</span>
          </div>
          <p class="desc">Add one custom <b>MCP connector</b> in Settings → Connectors. It runs the wallet and payments server-side, so the chat app can log in, check balance, and pay — just by asking.</p>
          <div class="code-block">
            <pre>https://api.xdcai.tech/mcp</pre>
            <button class="copy-btn" data-copy="https://api.xdcai.tech/mcp" aria-label="Copy MCP connector URL">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="12" height="12" rx="2"/><path d="M5 15H4a1 1 0 01-1-1V4a1 1 0 011-1h10a1 1 0 011 1v1"/></svg>
            </button>
          </div>

          <p class="usecases-note mb-0">
            <a href="https://docs.xdcai.tech/agents/claude-ai" target="_blank" class="socialHead-button mt-auto">
            Setup for Claude.ai & ChatGPT
            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
            </a>
          </P>

        </div>

        <div class="integrate-card reveal">
          <div class="integrate-top">
            <div>
              <div class="integrate-logos">
                <div class="d-flex gap-2">
                  <span class="logo-badge" style="color:#16232F" aria-hidden="true">
                    <svg fill="#000000" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Cursor</title><path d="M11.503.131 1.891 5.678a.84.84 0 0 0-.42.726v11.188c0 .3.162.575.42.724l9.609 5.55a1 1 0 0 0 .998 0l9.61-5.55a.84.84 0 0 0 .42-.724V6.404a.84.84 0 0 0-.42-.726L12.497.131a1.01 1.01 0 0 0-.996 0M2.657 6.338h18.55c.263 0 .43.287.297.515L12.23 22.918c-.062.107-.229.064-.229-.06V12.335a.59.59 0 0 0-.295-.51l-9.11-5.257c-.109-.063-.064-.23.061-.23"/></svg>
                  </span>
                  <span class="logo-badge" style="color:#000000" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.7"></rect><path d="m7 9 3 3-3 3M13 15h4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                  </span>
                </div>
                <div>
                  <h3>Terminal agents</h3>
                  <div class="integrate-sub">Claude Code · Cursor · Codex · Hermes</div>
                </div>
              </div>
            </div>
          </div>
          <p class="desc">Run the <b>CLI</b> and let the agent drive it. One JSON object per command, gasless payment on every <b>402</b> — nothing else to wire up.</p>
          <br>
          <div class="code-block">
            <pre>npx xdcai login · call</pre>
            <button class="copy-btn" data-copy="npx xdcai login · call" aria-label="Copy terminal commands">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="12" height="12" rx="2"/><path d="M5 15H4a1 1 0 01-1-1V4a1 1 0 011-1h10a1 1 0 011 1v1"/></svg>
            </button>
          </div>

          <p class="usecases-note mb-0">
            <a href="https://docs.xdcai.tech/agents/cli" target="_blank" class="socialHead-button mt-auto">
            Setup for terminal agents
            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
            </a>
          </P>
        </div>
      </div>

      <p class="usecases-note">Works with Claude, ChatGPT, Cursor, Codex, Hermes & more. 
        <a href="https://xdcai.tech/integrate" target="_blank" class="socialHead-button mt-auto">
          See every platform
          <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
      </p>
    </div>
  </section>

  <!-- ============================= WHY XDC AI ============================= 
  <section class="section why-section">
    <div class="wrap container">
      <div class="section-head reveal">
        <div class="section-eyebrow">Why XDC AI</div>
        <h2>The missing wallet and checkout for autonomous agents</h2>
      </div>

      <div class="why-grid">
        <div class="why-card reveal">
          <div class="why-index">01</div>
          <h3>Gasless by default</h3>
          <p>Payments use EIP-3009 transferWithAuthorization: the agent signs off-chain and a relayer pays the XDC gas. Agents only ever spend USDC — never native gas.</p>
        </div>
        <div class="why-card reveal">
          <div class="why-index">02</div>
          <h3>A wallet from an email</h3>
          <p>Custodial, deterministic XDC address per account. The same email maps to the same address on every machine, forever — no seed phrases, no key custody for the agent.</p>
        </div>
        <div class="why-card reveal">
          <div class="why-index">03</div>
          <h3>Pay exactly per call</h3>
          <p>Each request settles the exact USDC price on-chain — no subscriptions, no invoices, no minimums. Metered, programmatic spend that an agent can reason about.</p>
        </div>
      </div>
    </div>
  </section>-->



  <!-- ============================= WHY XDC AI ============================= -->
  <section class="section why-section">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="section-eyebrow">Why XDC AI</div>
        <h2>The missing wallet and checkout for autonomous agents</h2>
      </div>

      <div class="why-card-outer reveal">
        <div class="why-row">
          <div class="why-row-left">
            <span class="why-row-num">01</span>
            <span class="why-row-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>
            </span>
            <h3>Gasless by default</h3>
          </div>
          <p>Payments use EIP-3009 transferWithAuthorization: the agent signs off-chain and a relayer pays the XDC gas. Agents only ever spend USDC — never native gas.</p>
        </div>
        <div class="why-row">
          <div class="why-row-left">
            <span class="why-row-num">02</span>
            <span class="why-row-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 6l10 7 10-7"/></svg>
            </span>
            <h3>A wallet from an email</h3>
          </div>
          <p>Custodial, deterministic XDC address per account. The same email maps to the same address on every machine, forever — no seed phrases, no key custody for the agent.</p>
        </div>
        <div class="why-row">
          <div class="why-row-left">
            <span class="why-row-num">03</span>
            <span class="why-row-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M14.5 9.5a2.5 2.5 0 00-2.5-1.5c-1.7 0-3 1-3 2.5S10.3 13 12 13s3 1 3 2.5-1.3 2.5-3 2.5a2.5 2.5 0 01-2.5-1.5M12 6.5v1M12 16.5v1"/></svg>
            </span>
            <h3>Pay exactly per call</h3>
          </div>
          <p>Each request settles the exact USDC price on-chain — no subscriptions, no invoices, no minimums. Metered, programmatic spend that an agent can reason about.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================= BUILT RIGHT ============================= -->
  <section class="section built-section">
    <div class="wrap container">
      <div class="section-head reveal">
        <div class="section-eyebrow">Built right</div>
        <h2>Everything an agent needs to transact safely</h2>
      </div>

      <div class="built-grid">
        <div class="built-card reveal">
          <h3>Agent-native output</h3>
          <p>Exactly one JSON object per command on stdout, structured errors on failure — any LLM can parse and act on the result.</p>
        </div>
        <div class="built-card reveal">
          <h3>MCP &amp; SKILL.md</h3>
          <p>Ships a skill manifest and MCP discovery tools so Claude, Codex and other agents can drive it autonomously.</p>
        </div>
        <div class="built-card reveal">
          <h3>Open x402 standard</h3>
          <p>Speaks x402 exact-evm — works with any compliant facilitator or resource server, not a walled garden.</p>
        </div>
        <div class="built-card reveal">
          <h3>Swappable wallet</h3>
          <p>Ports and adapters let you move from HD to MPC to smart accounts or a third-party custodian with zero caller changes.</p>
        </div>
        <div class="built-card reveal">
          <h3>Settled on XDC</h3>
          <p>Fast, low-cost finality with USDC (Circle FiatTokenV2) — real on-chain transfers, with an explorer link per call.</p>
        </div>
        <div class="built-card reveal">
          <h3>Two-sided</h3>
          <p>Providers wrap any API in middleware to earn USDC per call and get discovered by paying agents.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================= AUDIENCE CTA ============================= -->
  <section class="section audience-section">
    <div class="wrap container audience-grid">
      <div class="audience-card reveal">
        <span class="audience-kicker">For agents & developers</span>
        <h3>Ship an agent that pays its own way</h3>
        <ul>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            One JSON object per CLI command — built for LLMs
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            SKILL.md + MCP so Claude, Codex &amp; others self-drive
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            Custodial XDC wallet from a single email login
          </li>
        </ul>

        <p class="usecases-note">
          <a href="https://xdcai.tech/integrate" target="_blank" class="socialHead-button mt-auto">
            Read the Agent Guide
            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
            </a>
        </p>

      </div>
      <div class="audience-card reveal">
        <span class="audience-kicker">For API providers</span>
        <h3>Turn any API into per-call USDC revenue</h3>
        <ul>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            Wrap routes in x402 middleware — return 402, get paid
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            Receive USDC to your address; a relayer pays the gas
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>
            Get discovered in the agent marketplace
          </li>
        </ul>
        <p class="usecases-note">
          <a href="https://xdcai.tech/providers" target="_blank" class="socialHead-button mt-auto">
            List Your API
            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
            </a>
        </p>
      </div>
    </div>
  </section>

  <!-- ============================= FINAL CTA ============================= -->
  <section class="section final-cta">
    <div class="wrap container">
      <div class="section-head reveal">
        <div class="section-eyebrow">Get started</div>
        <h2>Drop this into your AI agent</h2>
        <p>It fetches our setup guide and configures itself end to end.</p>
      </div>
      <div class="code-block code-block-white reveal">
        <pre>curl -sL https://xdcai.tech/setup.md
and follow the instructions to set up XDC AI</pre>
        <button class="copy-btn" data-copy="curl -sL https://xdcai.tech/setup.md
and follow the instructions to set up XDC AI" aria-label="Copy setup instructions">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="12" height="12" rx="2"/><path d="M5 15H4a1 1 0 01-1-1V4a1 1 0 011-1h10a1 1 0 011 1v1"/></svg>
        </button>
      </div>
      <div class="final-cta-actions reveal">
        <a href="https://xdcai.tech/integrate" class="btn btn-primary" target="_blank" rel="noopener">Start Building</a>
        <a href="https://xdcai.tech/marketplace" class="btn btn-outline" target="_blank" rel="noopener">Browse Services</a>
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
(function () {
  'use strict';

  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------------------------------------------------------------------
     1. Terminal animation
  --------------------------------------------------------------------- */
  var TERMINAL_SCRIPT = [
    { type: 'cmd', text: 'xdcai call /x402/forecast' },
    { type: 'out', text: '{' },
    { type: 'out', text: '  "ok": true,' },
    { type: 'out',  text: '  "paid": "0.01 USDC",' },
    { type: 'out', text: '  "txHash": "0x9c…a1",' },
    { type: 'out', text: '  "result": { "tempC": 21 }' },
    { type: 'out', text: '}' }
  ];

  function renderLine(step) {
    if (step.type === 'cmd') {
      return '<div class="terminal-line"><span class="prompt">$</span><span class="cmd">' + escapeHtml(step.text) + '</span></div>';
    }
    if (step.type === 'ok') {
      return '<div class="terminal-line ok">' + escapeHtml(step.text) + '</div>';
    }
    return '<div class="terminal-line out">' + escapeHtml(step.text) + '</div>';
  }

  function escapeHtml(str) {
    var div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
  }

  function initTerminal() {
    var body = document.getElementById('terminalBody');
    if (!body) return;

    if (prefersReducedMotion) {
      body.innerHTML = TERMINAL_SCRIPT.map(renderLine).join('');
      return;
    }

    var i = 0;
    var restartDelay = 2600;
    var lineDelay = 340;

    function step() {
      if (i === 0) body.innerHTML = '';

      if (i < TERMINAL_SCRIPT.length) {
        var el = document.createElement('div');
        el.innerHTML = renderLine(TERMINAL_SCRIPT[i]);
        body.appendChild(el.firstChild);
        i += 1;
        setTimeout(step, lineDelay);
      } else {
        var caret = document.createElement('div');
        caret.className = 'terminal-line';
        //caret.innerHTML = '<span class="prompt">$</span><span class="terminal-caret"></span>';
        body.appendChild(caret);
        i = 0;
        setTimeout(step, restartDelay);
      }
    }

    step();
  }

  /* ---------------------------------------------------------------------
     2. Copy-to-clipboard for code blocks
  --------------------------------------------------------------------- */
  function initCopyButtons() {
    var buttons = document.querySelectorAll('.copy-btn[data-copy]');
    var CHECK_ICON = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg>';
 
    buttons.forEach(function (btn) {
      var originalIcon = btn.innerHTML;
 
      btn.addEventListener('click', function () {
        var text = btn.getAttribute('data-copy') || '';
 
        var done = function () {
          btn.classList.add('is-copied');
          btn.innerHTML = CHECK_ICON;
          var original = btn.getAttribute('aria-label');
          btn.setAttribute('aria-label', 'Copied');
          setTimeout(function () {
            btn.classList.remove('is-copied');
            btn.innerHTML = originalIcon;
            btn.setAttribute('aria-label', original);
          }, 1600);
        };
 
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(text).then(done).catch(function () {
            fallbackCopy(text);
            done();
          });
        } else {
          fallbackCopy(text);
          done();
        }
      });
    });
 
    function fallbackCopy(text) {
      var textarea = document.createElement('textarea');
      textarea.value = text;
      textarea.style.position = 'fixed';
      textarea.style.opacity = '0';
      document.body.appendChild(textarea);
      textarea.select();
      try { document.execCommand('copy'); } catch (err) { /* no-op */ }
      document.body.removeChild(textarea);
    }
  }

  /* ---------------------------------------------------------------------
     3. Scroll reveal
  --------------------------------------------------------------------- */
  function initScrollReveal() {
    var items = document.querySelectorAll('.reveal');
    if (!items.length) return;

    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
      items.forEach(function (el) { el.classList.add('is-visible'); });
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.14, rootMargin: '0px 0px -40px 0px' });

    items.forEach(function (el) { observer.observe(el); });
  }

  /* ---------------------------------------------------------------------
     Init
  --------------------------------------------------------------------- */
  document.addEventListener('DOMContentLoaded', function () {
    initTerminal();
    initCopyButtons();
    initScrollReveal();
  });
})();
</script>

<?php include('inc/footer.php') ?>