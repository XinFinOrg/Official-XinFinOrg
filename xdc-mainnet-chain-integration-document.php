<?php 
$title = "XinFin Blockchain Network Technical Details";
$desc = "Companies and individuals who are looking for real-time cross border financial transactions can use XinFin's Blockchain platform backed integrated wallet solutions.";

include('inc/header.php') ?>
    <section id="contactbanner">
        <!--  <div id="particle-canvas" ></div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 bannertext">
                    <h1>XDC Mainnet Chain Integration Document</h1>
                    <p>Details required to Integrate XinFin-XDC (MainNet Chain)
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                    </p>
                </div>
            </div>
        </div>
        </div>

        <section id="xdce" class="exchange-listing">
            <div class="container">
                <div class="tab-content pt-2">
                    <div id="network" class="tab-pane fade in active">

                        <div class="flex-row align-items-center">
                            <div class="col-md-6">
                                <div class="content-box">
                                    <div class="mb-2">
                                        <h1>What is XinFin Network</h1>
                                        <p class="subTitle">Enterprise Ready Hybrid Blockchain For Global Trade and Finance</p>
                                        <p>Combining the power of Public & Private blockchains with Interoperable Smart Contracts.</p>
                                    </div>
                                    <div class="btn-block mb-1">
                                        <a href="https://xinfin.network/#stats" target="_blank">
                                            <button class="btn-hover color-1">Join The Network</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="video-frame">
                                    <div class="video-container">
                                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/K-tHZkV6zAs" frameborder="0" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="flex-row mt-2">
                            <div class="col-lg-6 col-md-6 col-sm-6 mt-3 mb-1">
                                <div class="configurationsBox">
                                    <h5 class="heading">Live Network</h5>
                                    <p><a href="https://XinFin.Network/" target="_blank">https://XinFin.Network/</a></p>
                                    <p>(from top Menu you can see link for <a href="https://xinfin.network/#webWallet" target="_blank">Web Wallet</a>, <a href="https://play.google.com/store/apps/details?id=com.xdcwallet" target="_blank">Mobile wallet</a>, <a href="https://xinfin.network/#explorer" target="_blank">Block Explorer</a>, <a href="https://xinfin.org/setup-masternode.php" target="_blank">One-Click Node Installer</a> and <a href="https://apothem.network/#masternode" target="_blank">Become a Master node/Validator</a>)</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mt-3 mb-1">
                                <div class="configurationsBox">
                                    <h5 class="heading">SandBox / Testnet</h5>
                                    <p><a href="https://apothem.network/" target="_blank">http://apothem.network/</a></p>
                                    <p>(from top Menu you can see link for <a href="https://apothem.network/#getTestXDC" target="_blank">Faucet</a> (to get Free XDC for sandbox Testing) <a href="https://xinfin.network/#webWallet" target="_blank">Web Wallet</a>, <a href="https://play.google.com/store/apps/details?id=com.xdcwallet" target="_blank">Mobile wallet</a>, <a href="https://xinfin.network/#explorer" target="_blank">Block Explorer</a>, <a href="https://xinfin.org/setup-masternode.php" target="_blank">One-Click Node Installer</a> and <a href="https://apothem.network/#masternode" target="_blank">Become a master node/Validator</a>)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="clear"></div>
        </section>

        <section id="xdce" class="bg-white exchange-listing">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHeading">
                            <h1>Details required to Integrate XinFin-XDC (MainNet Chain)</h1>
                            <p>We are fork out of go-ethereum hence the implementation of XinFin Network using XDC3 (Clone of Web3 API)</p>
                        </div>
                    </div>
                </div>

                <div class="tab-content pt-2">
                    <div id="network" class="tab-pane fade in active">

                        <div class="flex-row">
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mb-1">
                                <a href="https://www.npmjs.com/package/xdc3" target="_blank">
                                    <div class="configurationsBox bordered">
                                        <h5 class="heading">XDC3</h5>
                                        <p>This is the XinFin JavaScript API which connects to the Generic JSON RPC spec</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mb-1">
                                <a href="https://github.com/XinFinOrg/XDPoSChain" target="_blank">
                                    <div class="configurationsBox bordered">
                                        <h5 class="heading">Github</h5>
                                        <p class="link-break-out">Source code available at https://github.com/XinFinOrg/XDPoSChain</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mb-1">
                                <a href="https://rpc.xinfin.network" target="_blank">
                                    <div class="configurationsBox bordered">
                                        <h5 class="heading">Blockchain endpoint</h5>
                                        <p>
                                            <p class="link-break-out">https://rpc.xinfin.network</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mb-1">
                                <a href="exchange-listing-resource.php">
                                    <div class="configurationsBox bordered">
                                        <h5 class="heading">Integration Code</h5>
                                        <p class="link-break-out">Example: https://xinfin.org/exchange-listing-resource.php</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="clear"></div>
        </section>

        <section id="xdce" class="exchange-listing">
            <div class="container">
                <div class="tab-content pt-2">
                    <div id="network" class="tab-pane fade in active">

                        <div class="flex-row align-items-center">
                            <div class="col-md-6">
                                <div class="content-box">
                                    <div class="mb-2">
                                        <h1>XinPay</h1>
                                        <p>XinPay is a self-hosted wallet to store, send and receive XDC and XRC20. It allows you to control your funds as it is an HD wallet that provides a mnemonic phrase that you can keep as a backup.</p>
                                    </div>
                                    <div class="btn-block mb-1">
                                        <a href="https://chrome.google.com/webstore/detail/xinpay/bocpokimicclpaiekenaeelehdjllofo" target="_blank">
                                            <button class="btn-hover color-1">Download Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="">
                                    <img src="assets/images/xinpay-extension.jpg" / class="img-responsive img-shadow">
                                </div>
                            </div>

                        </div>

                        <div class="row mt-6">
                            <div class="col-md-12">
                                <div style="height:1px;width:100%;border-top:1px solid rgba(0,0,0,0.2);"></div>
                            </div>
                        </div>

                        <div class="flex-row mt-6 align-items-center">
                            <div class="col-md-6 col-md-push-6">
                                <div class="content-box cb-alt">
                                    <div class="mb-2">
                                        <h1>XinFin-Remix</h1>
                                        <p>XinFin Remix, previously known as Browser Solidity, is a web browser-based IDE that allows you to write solidity smart contracts, then deploy and run the smart contract. The advantage of running XinFin Remix from your local computer is that it can communicate with a XinFin node client running on your local machine via the XinFin API. You can then execute your smart contracts in XinFin Remix while connected to your local development blockchain, the Testnet blockchain or the Mainnet blockchain.</p>
                                    </div>
                                    <div class="btn-block mb-1">
                                        <a href="https://remix.xinfin.network" target="_blank">
                                            <button class="btn-hover color-1">Explore More</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-md-pull-6">
                                <div class="">
                                    <img src="assets/images/xinfin-remix.jpg" / class="img-responsive img-shadow">
                                </div>
                            </div>

                        </div>

                        <div class="row mt-6">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p class="sub-header">Technical Community Support available at:</p>
                                <p class="mt-1 mb-1 link-break-out">Telegram Community: <a href="https://t.me/XinFinDevelopers" target="_blank">https://t.me/XinFinDevelopers</a></p>
                                <p class="mb-1 link-break-out">Slack Community: <a href="https://xinfin-public.slack.com/messages/CELR2M831/" target="_blank">https://xinfin-public.slack.com/messages/CELR2M831/</a></p>
                                <p class="mb-1 link-break-out">Slack Invitation Link: <a href="https://launchpass.com/xinfin-public" target="_blank">https://launchpass.com/xinfin-public</a></p>
                                <p class="mb-1 link-break-out">Technical help Resource: <a href="http://howto.xinfin.org/" target="_blank">http://howto.xinfin.org/</a></p>
                                <p class="link-break-out">Feel free to <a href="contactus.php">Contact us</a> for any of your queries.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="clear"></div>
        </section>

        <?php include('inc/footer.php') ?>