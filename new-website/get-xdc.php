<?php 
    $title = "Where to buy XDC";
    $desc = "You can buy XDC from exchanges or from wallets directly. Discover the best exchanges to buy XDC, the native token of the XDC Network.";
    
    include('inc/header.php') ?>
    
<!-- Hero Home Starts -->
<section class="px-200 px-t250-b100 hero-inside">
    <!--<div class="container p-relative">-->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hero-content">
                <h1 class="title-m text-center mb-0">Where to buy XDC</h1>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">You can buy XDC from exchanges or from wallets directly. Discover the best exchanges to buy XDC, the native token of the XDC Network. Take advantage of the growing popularity of XDC and its potential to transform global trade and finance. Join the XDC community and participate in the future of blockchain-powered global transactions by purchasing XDC on trusted exchanges.</h2>
            </div>
        </div>
    </div>
</section>
<!-- Hero Home Ends -->

<!-- Hero Cards Starts -->
<section class="px-80 pt-0 hero-ftr-inside">
    <div class="container">
        <div class="row row-flex">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 mt-2 mb-2">
                        <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
                                <div class="coinmarketcap-currency-widget wbox" data-currencyid="2634" data-base="USD" style="background-color: #; border-radius: 10px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Cards Ends -->

<section class="px-80 pt-0 pb-2 dark-curved">
    <div class="container p-relative">
        <div class="row">
            <nav>
                <div class="nav nav-pills justify-content-center mb-3" id="nav-pills" role="tablist">
                    <button class="nav-link active" id="nav-exchanges-tab" data-bs-toggle="tab" data-bs-target="#nav-exchanges" type="button" role="tab" aria-controls="nav-exchanges" aria-selected="true">Exchanges</button>
                    <button class="nav-link" id="nav-swap-tab" data-bs-toggle="tab" data-bs-target="#nav-swap" type="button" role="tab" aria-controls="nav-swap" aria-selected="false">Crosschain Swap</button>
                    <button class="nav-link" id="nav-dex-tab" data-bs-toggle="tab" data-bs-target="#nav-dex" type="button" role="tab" aria-controls="nav-dex" aria-selected="false">DEX</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-exchanges" role="tabpanel" aria-labelledby="nav-exchanges-tab">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/bitrue.svg" alt="Bitrue" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Bitrue</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.bitrue.com/trade/xdc_eth" target="_blank">ETH</a>, <a href="https://www.bitrue.com/trade/xdc_xrp" target="_blank">XRP</a>, <a href="https://www.bitrue.com/trade/xdc_usdc" target="_blank">USDC</a>, <a href="https://www.bitrue.com/trade/xdc_usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/kucoin.svg" alt="Kucoin" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Kucoin</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.kucoin.com/trade/XDC-ETH" target="_blank">ETH</a>, <a href="https://www.kucoin.com/trade/XDC-USDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/gate.io.svg" alt="Gate.io" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Gate.io</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.gate.io/trade/XDC_USDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/bitfinex.svg" alt="BITFINEX" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">BITFINEX</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.bitfinex.com/t/XDC:USD" target="_blank">USD</a>, <a href="https://www.bitfinex.com/t/XDC:USDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/mercatox.svg" alt="MERCATOX" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">MERCATOX</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://mercatox.com/exchange/XDC/BTC" target="_blank">BTC</a>, <a href="https://mercatox.com/exchange/XDC/ETH" target="_blank">ETH</a>, <a href="https://mercatox.com/exchange/XDC/USDC" target="_blank">USDC</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/cex.svg" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">CEX.IO</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://cex.io/xdc-eur" target="_blank">EUR</a>, <a href="https://cex.io/xdc-usd" target="_blank">USD</a>, <a href="https://cex.io/xdc-usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/huobi.svg" alt="Huobi" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Huobi</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.huobi.com/en-us/exchange/xdc_usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/coinex.svg" alt="CoinEx" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">CoinEx</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.coinex.com/exchange/xdc-btc" target="_blank">BTC</a>, <a href="https://www.coinex.com/exchange/xdc-usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/whitebit.svg" alt="WhitwHit" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">WhiteBit</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://whitebit.com/trade/XDC-ETH" target="_blank">ETH</a>, <a href="https://whitebit.com/trade/XDC-USDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/coindcx.svg" alt="CoinDCX" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">CoinDCX</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://kriptomat.io/cryptocurrency-prices/xdc-network-xdc-price/" target="_blank">INR</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/bybit.svg" alt="BYBIT" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">BYBIT</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.bybit.com/en-US/trade/spot/XDC/USDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/bkex.svg" alt="BKEX" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">BKEX</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.bkex.com/trade/XDC_USDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/bittrex.svg" alt="Bittrex" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Bittrex</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://global.bittrex.com/trade/xdc-btc" target="_blank">BTC</a>, <a href="https://global.bittrex.com/trade/xdc-eur" target="_blank">EUR</a>, <a href="https://global.bittrex.com/trade/xdc-usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/bitmart.svg" alt="Bitmart" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Bitmart</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.bitmart.com/trade/en-US?symbol=XDC_USDT&layout=basic" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/coinw.svg" alt="CoinW" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">CoinW</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.coinw.com/frontSpot/spottrade?symbol=734" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/digifinex.svg" alt="DigiFinex" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">DigiFinex</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.digifinex.com/en-ww/trade/BTC/XDC" target="_blank">BTC</a>, <a href="https://www.digifinex.com/en-ww/trade/ETH/XDC" target="_blank">ETH</a>, <a href="https://www.digifinex.com/en-ww/trade/USDT/XDC" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/fmfw.svg" alt="FMFW" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">FMFW</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://fmfw.io/xdc-to-btc" target="_blank">BTC</a>, <a href="https://fmfw.io/xdc-to-eth" target="_blank">ETH</a>, <a href="https://fmfw.io/xdc-to-usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/hitbtc.svg" alt="HitBTC" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">HitBTC</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://hitbtc.com/xdc-to-btc" target="_blank">BTC</a>, <a href="https://hitbtc.com/xdc-to-usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/indodax.svg" alt="Indodax" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Indodax</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://indodax.com/market/XDCIDR" target="_blank">IDR</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/buyucoin.svg" alt="BuyUcoin" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">BuyUcoin</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://trade.buyucoin.com/trade/XDC-INR" target="_blank">INR</a>, <a href="https://trade.buyucoin.com/trade/XDC-USDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/uphold.svg" alt="Uphold" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Uphold</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://wallet.uphold.com/marketDetails?currency=XDC" target="_blank">USD</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/liquid.svg" alt="Liquid" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Liquid</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://app.liquid.com/exchange/XDCBTC" target="_blank">BTC</a>, <a href="https://app.liquid.com/exchange/XDCSGD" target="_blank">SGD</a>, <a href="https://app.liquid.com/exchange/XDCUSDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/bequant.svg" alt="Bequant" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Bequant</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://bequant.io/xdc-to-btc" target="_blank">BTC</a>, <a href="https://bequant.io/xdc-to-usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/probit.svg" alt="ProBit" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">ProBit</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.probit.com/app/exchange/XDC-ETH" target="_blank">ETH</a>, <a href="https://www.probit.kr/app/exchange/XDC-KRW" target="_blank">KRW</a>, <a href="https://www.probit.com/app/exchange/XDC-USDT" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/lbank.svg" alt="LBank" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">LBank</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://www.lbank.info/exchange/xdc/usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/changellypro.svg" alt="Changelly PRO" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Changelly PRO</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://pro.changelly.com/xdc-to-btc" target="_blank">BTC</a>, <a href="https://pro.changelly.com/xdc-to-usdt" target="_blank">USDT</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/protondex.svg" alt="Proton DEX" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Proton DEX</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://protondex.com/dex/XDC_XMD" target="_blank">XMD</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/globiance.svg" alt="Globiance" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Globiance</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://exchange.globiance.com/trade/XDC-BTC" target="_blank">BTC</a>, <a href="https://exchange.globiance.com/trade/XDC-ETH" target="_blank">ETH</a>, <a href="https://exchange.globiance.com/trade/GBEX-XDC" target="_blank">GBEX</a>, <a href="https://exchange.globiance.com/trade/XDC-USDG" target="_blank">USDG</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/kinesis.svg" alt="Kinesis" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Kinesis</div>
                                                <p class="exchangeCard-type text-muted mb-0">Centralized Exchange</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="pairs-tag"><p class="text-muted mb-0">Pairs</p></div>
                                            <div class="pairs fw-500"><a href="https://kms.kinesis.money/guest-exchange/XDC/USD" target="_blank">USD</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-swap" role="tabpanel" aria-labelledby="nav-swap-tab">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/simpleswap.svg" alt="SimpleSwap" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">SimpleSwap</div>
                                                <p class="exchangeCard-type text-muted mb-0">Crosschain Swap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://simpleswap.io/coins?tickers=xdc" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/rocketx.svg" alt="RocketX" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">RocketX</div>
                                                <p class="exchangeCard-type text-muted mb-0">Crosschain Swap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://app.rocketx.exchange/swap/" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/coinspot.svg" alt="CoinSpot" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">CoinSpot</div>
                                                <p class="exchangeCard-type text-muted mb-0">Crosschain Swap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://www.coinspot.com.au/swap/xdc" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/changelly.svg" alt="Changelly" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Changelly</div>
                                                <p class="exchangeCard-type text-muted mb-0">Crosschain Swap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://changelly.com/" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/changenow.svg" alt="ChangeNOW" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">ChangeNOW</div>
                                                <p class="exchangeCard-type text-muted mb-0">Crosschain Swap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://changenow.io/?from=usdt&to=xdc" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/swapzone.svg" alt="Swapzone" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Swapzone</div>
                                                <p class="exchangeCard-type text-muted mb-0">Crosschain Swap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://swapzone.io/" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/swapika.svg" alt="Swapika" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Swapika</div>
                                                <p class="exchangeCard-type text-muted mb-0">Crosschain Swap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://swapika.com/" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/atomx.svg" alt="AtomX" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">AtomX</div>
                                                <p class="exchangeCard-type text-muted mb-0">Crosschain Swap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://atomx.online/" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                		</div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-dex" role="tabpanel" aria-labelledby="nav-dex-tab">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/fathom.svg" alt="Fathom" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Fathom</div>
                                                <p class="exchangeCard-type text-muted mb-0">DEX</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://swap.fathom.fi/#/swap" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/icecreamswap.svg" alt="IceCreamSwap" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">IceCreamSwap</div>
                                                <p class="exchangeCard-type text-muted mb-0">DEX</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://icecreamswap.com/?chainId=1116" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/xswap.svg" alt="XSwap" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">XSwap</div>
                                                <p class="exchangeCard-type text-muted mb-0">DEX</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://app.xspswap.finance/swap" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                                <div class="h-100 card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                                    <div class="exchangeCard-block card-info d-flex flex-column gap-4">
                                        <div class="exchangeCard-header">
                                            <div class="icon">
                                                <div class=""><img src="assets/images/exchanges/globiance.svg" alt="Globiance" /></div>
                                            </div>
                                            <div class="desc">
                                                <div class="card-infoHead">Globiance</div>
                                                <p class="exchangeCard-type text-muted mb-0">DEX</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pairs fw-500 ml-6"><a href="https://dex.globiance.com/" target="_blank">Swap Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                		</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
        	<div class="col-12">
            	<div class="text-muted small fw-500 lh-sm">
                <p class="fs-6 mb-2">Disclaimer for Links to External, Third-Party Web Sites</p>
                <p class="mb-2">Links to external or third-party Web sites are provided solely for visitors' convenience. When you access an external Web site, keep in mind that xinfin.org has no control over its content. Links taken to other sites are done at your own risk, and xinfin.org accepts no liability for any linked sites or their content.</p>
                <p class="mb-2">Any link from xinfin.org to an external Web site does not imply or mean that xinfin.org endorses or accepts any responsibility for the content or the use of such Web site. xinfin.org does not give any representation regarding the quality, safety, suitability, or reliability of any external Web sites or any of the content or materials contained in them. It is essential for users to take necessary precautions, especially to ensure appropriate safety from viruses, worms, Trojan horses, and other potentially destructive items.</p>
                <p class="mb-0">When visiting external Web sites, users should review those Websites' privacy policies and other terms of use to learn more about what, why, and how they collect and use personally identifiable information.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Wallets & Exchanges Ends -->

<!-- Community Starts -->
<section class="px-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-5">
                    <h3 class="title-m text-center">Join the Global Community</h3>
                    <div class="subtitle subtitle-s text-center">Join a fast-growing XDC Network Community and innovators, connected all over the world. The XDC Network community includes people of many different backgrounds and skill sets.</div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!--<div class="col-lg-8 offset-lg-2">
                    <div class="row items-3 justify-content-center">
               <div class="col mt-2 mb-2">-->
               <div class="<div class="col-lg-10 col-md-12">
               <div class="row justify-content-center">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                  <div class="card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                     <div class="card-info">
                        <div class="socialHead"><i class="fas fa-paper-plane"></i>Telegram</div>
                        <a href="https://t.me/xinfin" target="_blank" class="btn socialHead-button">
                           Join discussion
                           <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                  <div class="card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                     <div class="card-info">
                        <div class="socialHead"><i class="fab fa-twitter"></i>Twitter</div>
                        <a href="https://twitter.com/XinFin_Official" target="_blank" class="btn socialHead-button">
                           Follow
                           <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                  <div class="card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                     <div class="card-info">
                        <div class="socialHead"><i class="fab fa-reddit-alien"></i>Reddit</div>
                        <a href="https://www.reddit.com/r/xinfin/" target="_blank" class="btn socialHead-button">
                           Dive in
                           <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                  <div class="card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                     <div class="card-info">
                        <div class="socialHead"><i class="fab fa-github"></i>GitHub</div>
                        <a href="https://github.com/XinFinorg" target="_blank" class="btn socialHead-button">
                           Build with us
                           <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                  <div class="card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                     <div class="card-info">
                        <div class="socialHead"><i class="fab fa-medium"></i>Medium</div>
                        <a ahref="https://medium.com/xinfin" target="_blank" class="btn socialHead-button">
                           Follow
                           <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
                  <div class="card pt-4 pb-4 px-3 bg-lightgray br-20 border-0">
                     <div class="card-info">
                        <div class="socialHead"><i class="fab fa-discord"></i>Developers Forum</div>
                        <a href="https://xdc.dev/" target="_blank" class="btn socialHead-button">
                           Get involved
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
        </div>
    </section>
<!-- Community Ends -->
<?php include('inc/footer.php') ?>