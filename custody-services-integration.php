<?php 
    $title = "Custody Services Integration";
    $desc = "Details require to list XDC Network (MainNet Chain) with exchange.";
    
    include('inc/header.php') ?>

<!-- Hero Home Starts -->
<section class="px-200 px-t250-b100 hero-inside">
    <!--<div class="container p-relative">-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 hero-content">
                <h1 class="title-m text-center mb-0">Custody Services Integration</h1>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">
                    Details require to list XDC Network (MainNet Chain) with exchange.
                </h2>
            </div>
        </div>
    </div>
</section>
<!-- Hero Home Ends -->

<!-- Listing Resource Starts -->
<section class="px-80 pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <p class="fs-6 mb-3">Project Name</p>
                        <div class="card-infoHead mb-0">XDC Network</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <p class="fs-6 mb-3">Project website</p>
                        <div class="card-infoHead mb-0"><a href="https://xinfin.org">xinfin.org</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <p class="fs-6 mb-3">Token Name</p>
                        <div class="card-infoHead mb-0">XDC MainNet</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <p class="fs-6 mb-3">Token Symbol</p>
                        <div class="card-infoHead mb-0">XDC</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <p class="fs-6 mb-3">Block Finality</p>
                        <div class="card-infoHead mb-0">32 Blocks</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <p class="fs-6 mb-3">XDC Logo</p>
                        <div class="card-infoHead mb-0">
                            <div class="">
                                <img src="assets/images/xdc-icon-white.svg" style="width: 45px !important;" class="iconD m-auto" />
                                <img src="assets/images/xdc-icon.svg" style="width: 45px !important;" class="iconL m-auto" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <p class="fs-6 mb-3">XDC:USDC, XDC:ETH, XDC:BTC, XDC:USD</p>
                        <div class="card-infoHead mb-0">Pair Reference</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <p class="fs-6 mb-3">Preference to run Bounty</p>
                        <div class="card-infoHead mb-0">No</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Listing Resource Ends -->

<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mb-5">
                <h3 class="title-m text-center">RPC Endpoint</h3>
                <div class="subtitle subtitle-s text-center">Obtain the RPC Endpoint for XDC Network</div>
            </div>
        </div>
        <div class="row align-items-center">
            <nav>
                <div class="nav nav-pills transparant justify-content-center mb-3" id="nav-pills" role="tablist">
                    <button class="nav-link active" id="nav-mainnet-tab" data-bs-toggle="tab" data-bs-target="#nav-mainnet" type="button" role="tab" aria-controls="nav-mainnet" aria-selected="true">MainNet</button>
                    <button class="nav-link" id="nav-testnet-tab" data-bs-toggle="tab" data-bs-target="#nav-testnet" type="button" role="tab" aria-controls="nav-testnet" aria-selected="false">TestNet (Apothem Network)</button>
                </div>
            </nav>

            <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-mainnet" role="tabpanel" aria-labelledby="nav-mainnet-tab">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">RPC</div>
                                    <div class="card-info">
                                        <p class="fs-6 mb-2"><a href="https://rpc.xinfin.network" target="_blank">https://rpc.xinfin.network</a></p>
                                        <p class="fs-6 mb-2"><a href="https://erpc.xinfin.network" target="_blank">https://erpc.xinfin.network</a></p>
                                        <p class="fs-6 mb-2"><a href="https://arpc.xinfin.network" target="_blank">https://arpc.xinfin.network</a></p>
                                        <p class="fs-6 mb-2"><a href="https://earpc.xinfin.network" target="_blank">https://earpc.xinfin.network</a></p>
                                        <p class="fs-6 mb-2"><a href="https://xdc.public-rpc.com/" target="_blank">https://xdc.public-rpc.com/</a></p>
                                        <p class="fs-6 mb-0"><a href="https:/rpc.primenumbers.xyz/" target="_blank">https:/rpc.primenumbers.xyz/</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">eRPC</div>
                                    <div class="card-info">
                                        <p class="fs-6 mb-2"><a href="https://erpc.xdcrpc.com" target="_blank">https://erpc.xdcrpc.com</a></p>
                                        <p class="fs-6 mb-2"><a href="https://erpc.xinfin.network" target="_blank">https://erpc.xinfin.network</a></p>
                                        <p class="fs-6 mb-0">Network ID: 50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">Explorer</div>
                                    <div class="card-info">
                                        <p class="fs-6 mb-2"><a href="https://xdcscan.io/" target="_blank">https://xdcscan.io/</a></p>
                                        <p class="fs-6 mb-2"><a href="https://xdc.blocksscan.io/" target="_blank">https://xdc.blocksscan.io/</a></p>
                                        <p class="fs-6 mb-2"><a href="https://explorer.xinfin.network/" target="_blank">https://explorer.xinfin.network/</a></p>
                                        <p class="fs-6 mb-0"><a href="https://xdc.network/" target="_blank">https://xdc.network/</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">Web Socket</div>
                                    <ul class="listStyle fs-6">
                                        <li>wss://ws.xinfin.network</li>
                                        <li>wss://ews.xinfin.network</li>
                                        <li>wss://aws.xinfin.network</li>
                                        <li>wss://eaws.xinfin.network</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-testnet" role="tabpanel" aria-labelledby="nav-testnet-tab">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">RPC</div>
                                    <div class="card-info">
                                        <p class="fs-6 mb-2"><a href="https://rpc.apothem.network" target="_blank">https://rpc.apothem.network</a></p>
                                        <p class="fs-6 mb-0"><a href="https://apothem.xdcrpc.com" target="_blank">https://apothem.xdcrpc.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">eRPC</div>
                                    <div class="card-info">
                                        <p class="fs-6 mb-2"><a href="https://erpc.apothem.network" target="_blank">https://erpc.apothem.network</a></p>
                                        <p class="fs-6 mb-0">Network ID: 51</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">Faucet</div>
                                    <div class="card-info">
                                        <p class="fs-6 mb-2"><a href="https://faucet.apothem.network" target="_blank">https://faucet.apothem.network</a></p>
                                        <p class="fs-6 mb-0"><a href="https://faucet.blocksscan.io/" target="_blank">https://faucet.blocksscan.io/</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">Explorer</div>
                                    <div class="card-info">
                                        <p class="fs-6 mb-2"><a href="https://apothem.xdcscan.io/" target="_blank">https://apothem.xdcscan.io/</a></p>
                                        <p class="fs-6 mb-2"><a href="https://apothem.blocksscan.io/" target="_blank">https://apothem.blocksscan.io/</a></p>
                                        <p class="fs-6 mb-0"><a href="https://explorer.apothem.network/" target="_blank">https://explorer.apothem.network/</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                                    <div class="fs-6 card-infoHead mb-3">Web Socket</div>
                                    <ul class="listStyle fs-6">
                                        <li>wss://ws.apothem.network/ws</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-xdcFaucet" role="tabpanel" aria-labelledby="nav-xdcFaucet-tab">
                    <div class="col-lg-12">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 mb-5 mb-xl-0 mb-lg-0">
                                <h3 class="title-m">XDC Network Faucet</h3>
                                <p class="subtitle subtitle-s fw-600">Prepare for financial processes by accessing test currency.</p>
                                <p class="subtitle subtitle-s">
                                    The XDC Apothem Network Faucet is a valuable resource for developers and users which allows you to request free XDC testnet tokens, which can be used to test applications and smart contracts on the XDC
                                    Apothem Network.
                                </p>
                                <div class="btn-block d-block mt-4">
                                    <a href="https://www.apothem.network/" target="_blank"><button class="btn-blue">Apothem Network</button></a>
                                    <a href="https://www.apothem.network/#getTestXDC" target="_blank"><button class="btn-transp-bordered">Get Test XDC</button></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div><img src="assets/images/inside-page/quick-tools-guide/xdcFaucet.png" alt="XDC Faucet" class="img-fluid br-20" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mb-5">
                <h3 class="title-m text-center">Wallet Extensions</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/exchange-listing/xdcpay-light.svg" class="center img-fluid iconL" />
                        <img src="assets/images/inside-page/exchange-listing/xdcpay.svg" class="center img-fluid iconD" />
                        <div class="card-infoHead mt-3 mb-3">XDCPay2.0</div>
                        <p class="fs-6 mb-0">XDCPay 2.0 Browser Extension</p>
                        <a href="https://chrome.google.com/webstore/detail/xdcpay-20/iidmfamdbddcbjmemafekkohbnfiblhp" target="_blank" class="btn socialHead-button mt-auto">
                            Add Now
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/exchange-listing/xdcpay-light.svg" class="center img-fluid iconL" />
                        <img src="assets/images/inside-page/exchange-listing/xdcpay.svg" class="center img-fluid iconD" />
                        <div class="card-infoHead mt-3 mb-3">XDCPay</div>
                        <p class="fs-6 mb-0">XDCPay Browser Extension</p>
                        <a href="https://chrome.google.com/webstore/detail/xdcpay/bocpokimicclpaiekenaeelehdjllofo" target="_blank" class="btn socialHead-button mt-auto">
                            Add Now
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/exchange-listing/xdcpay-light.svg" class="center img-fluid iconL" />
                        <img src="assets/images/inside-page/exchange-listing/xdcpay.svg" class="center img-fluid iconD" />
                        <div class="card-infoHead mt-3 mb-3">XDC Web Wallet</div>
                        <p class="fs-6 mb-0">Easy-to-use, Open-source platform</p>
                        <a href="https://wallet.xinfin.network/" target="_blank" class="btn socialHead-button mt-auto">
                            Web Wallet
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="https://betawallet.xinfin.network" target="_blank" class="btn socialHead-button mt-auto">
                            Web Wallet - Beta
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/exchange-listing/blockspay-light.svg" class="center img-fluid iconL" />
                        <img src="assets/images/inside-page/exchange-listing/blockspay.svg" class="center img-fluid iconD" />
                        <div class="card-infoHead mt-3 mb-3">BlocksPay</div>
                        <p class="fs-6 mb-0">Secure Multiple Chains Wallet</p>
                        <a href="https://chrome.google.com/webstore/detail/blockspay-secure-multiple/pogabilnghhbafaheaepaaeopjpleimd" target="_blank" class="btn socialHead-button mt-auto">
                            Add Now
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Seamless Integration Starts -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row">
            <!--<div class="col-lg-4 col-md-6 mt-2 mb-2">
            	<div class="h-100 card p-4 bg-light75 br-20 border-0">
                	<div class="fs-6 card-infoHead mb-3">Integration Guide</div>
                    <div class="card-info">
                    	<p class="fs-6 mb-0"><a href="exchange-listing-resource" target="_blank">https://xinfin.org/exchange-listing-resource</a></p>
                	</div>
                </div>
            </div>-->
            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="fs-6 card-infoHead mb-3">XDC Network Tools</div>
                    <div class="card-info">
                        <p class="fs-6 mb-0"><a href="https://xinfin.org/quick-tools-guide" target="_blank">https://xinfin.org/quick-tools-guide</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="fs-6 card-infoHead mb-3">XDC API Links</div>
                    <div class="card-info">
                        <p class="fs-6 mb-2"><a href="https://apidocs.xinfin.network/docs/#xinfin-apis" target="_blank">https://apidocs.xinfin.network/docs/#xinfin-apis</a></p>
                        <p class="fs-6 mb-0"><a href="https://apidocs.xinfin.network/" target="_blank">https://apidocs.xinfin.network/</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="fs-6 card-infoHead mb-3">XDC Document</div>
                    <div class="card-info">
                        <p class="fs-6 mb-2"><a href="https://docs.xdc.org/" target="_blank">https://docs.xdc.org/</a></p>
                        <p class="fs-6 mb-0"><a href="https://howto.xinfin.org/" target="_blank">https://howto.xinfin.org/</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="fs-6 card-infoHead mb-3">Full Node setup Instructions</div>
                    <div class="card-info">
                        <p class="fs-6 mb-0"><a href="https://github.com/XinFinOrg/XinFin-Node" target="_blank">https://github.com/XinFinOrg/XinFin-Node</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="fs-6 card-infoHead mb-3">Find other Endpoints</div>
                    <div class="card-info">
                        <p class="fs-6 mb-2"><a href="https://chainlist.org/chain/50" target="_blank">https://chainlist.org/chain/50</a></p>
                        <p class="fs-6 mb-0"><a href="https://chainlist.org/chain/51" target="_blank">https://chainlist.org/chain/51</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2 mb-4 mt-5">
                <h3 class="title-m text-center">XDC Network Assessment and Chain Analysis</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/exchange-listing/slowmist-light.svg" class="center logoFs img-fluid iconL" />
                        <img src="assets/images/inside-page/exchange-listing/slowmist.svg" class="center logoFs img-fluid iconD" />
                        <div class="card-infoHead mt-5 mb-1">XDC Network Audit Report</div>
                        <p class="fs-7 mb-0">by SlowMist</p>
                        <a href="docs/reports/xdposchain-security-audit-report.pdf" target="_blank" class="btn socialHead-button mt-auto">
                            View Now
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/exchange-listing/bcas-light.svg" class="center logoFs img-fluid iconL" />
                        <img src="assets/images/inside-page/exchange-listing/bcas.svg" class="center logoFs img-fluid iconD" />
                        <div class="card-infoHead mt-5 mb-1">XDC Network Legal Opinion</div>
                        <p class="fs-7 mb-0">By BCAS</p>
                        <a href="docs/reports/legal-opinion-liechtenstein-bcas-xdc-14jan2021.pdf" target="_blank" class="btn socialHead-button mt-auto">
                            View Now
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/exchange-listing/big-light.svg" class="center logoFs img-fluid iconL" />
                        <img src="assets/images/inside-page/exchange-listing/big.svg" class="center logoFs img-fluid iconD" />
                        <div class="card-infoHead mt-5 mb-1">XDC Network Chain Analysis</div>
                        <p class="fs-7 mb-0">By Blockchain Intelligence Group</p>
                        <a href="https://blockchaingroup.io/defi-enabled-enterprise-grade-hybrid-blockchain-xdc-network-gains-compliance-edge/" target="_blank" class="btn socialHead-button mt-auto">
                            View Now
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/exchange-listing/elliptic-light.svg" class="center logoFs img-fluid iconL" />
                        <img src="assets/images/inside-page/exchange-listing/elliptic.svg" class="center logoFs img-fluid iconD" />
                        <div class="card-infoHead mt-5 mb-1">XDC Network Chain Analysis</div>
                        <p class="fs-7 mb-0">By Elliptic</p>
                        <a href="https://www.elliptic.co/" target="_blank" class="btn socialHead-button mt-auto">
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
</section>
<!-- Seamless Integration Ends -->


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
                        <button class="btn-blue"><i class="fa fa-paper-plane me-1"></i> Telegram Dev Community</button>
                    </a>
                    <a href="https://docs.xdc.community/" target="_blank">
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

<?php include('inc/footer.php') ?>