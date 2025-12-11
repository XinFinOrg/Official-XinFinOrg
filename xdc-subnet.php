<?php 
   $title = "XDC Subnet";
   $desc = "An XDC Mainnet-like network owned by you, further protected by the Mainnet with total privacy.";
   
   include('inc/header.php') ?>

<!-- Hero Home Starts -->
<section class="px-200 px-t250-b100 hero-inside">
    <!--<div class="container p-relative">-->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hero-content">
                <h1 class="title-m text-center mb-0">XDC Subnet</h1>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">XDC Subnet is a technology that allows you to create a secure, scalable, and decentralized network within the XDC Ecosystem. It enables various use cases, including creating private subnets, deploying decentralized applications (dApps), and more.</h2>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">Are you ready to embark on a journey into the world of secure, scalable, and decentralized networks? Look no further than XDC Subnet, the cutting-edge technology that empowers you to create a digital realm tailored to your needs within the thriving XDC Ecosystem.</h2>
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-lg-12 text-center">
                <div class="btn-block multi mt-5">
                    <a href="docs/whitepaper-xdc-gasless-subnet.pdf" target="_blank"><button class="btn-blue">XDC Gasless Subnet Whitepaper</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Home Ends -->

<section class="px-80 bg-lightgray">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8 mb-5">
                        <h3 class="title-m text-center">Key Features</h3>
                        <div class="subtitle subtitle-s text-center">Unlock the Future of Decentralized Networking with XDC Subnet.</div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-light75 br-20 border-0">
                            <div class="card-info">
                                <img src="assets/images/inside-page/masternode/transaction-validation.svg" class="img-fluid" />
                                <div class="card-infoHead mt-3 mb-3">Sovereignty</div>
                                <p class="fs-6 mb-0">
                                    Take charge of your destiny! XDC Subnet places the power firmly in your hands. You become the master of your domain, ensuring complete control over your data and transactions. Your network, your rules.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-light75 br-20 border-0">
                            <div class="card-info">
                                <img src="assets/images/inside-page/masternode/scalability.svg" class="img-fluid" />
                                <div class="card-infoHead mt-3 mb-3">Scalability</div>
                                <p class="fs-6 mb-0">
                                    Whether you're a small business or a colossal enterprise, XDC Subnet is your perfect companion. Tailor your subnet to grow and evolve alongside your ambitions, effortlessly adapting to your application's
                                    unique requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-light75 br-20 border-0">
                            <div class="card-info">
                                <img src="assets/images/inside-page/masternode/security.svg" class="img-fluid" />
                                <div class="card-infoHead mt-3 mb-3">Security</div>
                                <p class="fs-6 mb-0">
                                    Rest easy knowing that XDC Subnet is fortified by the robust consensus mechanism of the XDC Network. It's a fortress against threats, offering unparalleled resilience to attacks and ensuring the integrity
                                    of your network.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-light75 br-20 border-0">
                            <div class="card-info">
                                <img src="assets/images/inside-page/masternode/privacy.svg" class="img-fluid" />
                                <div class="card-infoHead mt-3 mb-3">Privacy</div>
                                <p class="fs-6 mb-0">
                                    Privacy is paramount. Configure your subnets to be private sanctuaries, granting access only to authorized users. Your data and transactions remain shielded from prying eyes, ensuring confidentiality and
                                    trust.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Architecture Starts -->
<section class="px-80">
    <div class="container p-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-4 mb-lg-0">
                <h3 class="title-m mb-3">Architecture</h3>
                <div class="subtitle subtitle-s">The architecture consists of the following key components owned by the customer:</div>
                <div class="orderList subtitle subtitle-s">
                    <ul class="checkmark">
                        <li>A subnet driven by the XDC2.0 consensus engine, with system configurations tailored for the customer</li>
                        <li>A relayer program that checkpoint critical consensus data of the subnet to the XDC Mainnet</li>
                        <li>A smart contract in the XDC Mainnet that verifies and records the checkpoints</li>
                        <li>Wallet APIs that enable additional protection of subnet transaction from the XDC Mainnet</li>
                        <li>The subnet will also natively support XDC's abundant utility tools such as blockchain explorer and forensic monitor</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <!--<img src="assets/images/xdc-subnet-architecture.svg" class="img-fluid iconD" alt="XDC SUbnet" />
                <img src="assets/images/xdc-subnet-architecture_light.svg" class="img-fluid iconL" alt="XDC SUbnet" />-->

                <picture>
                    <source srcset="assets/images/xdc-subnet-architecture.avif" type="image/avif" alt="XDC SUbnet" class="img-fluid iconD" />
                    <source srcset="assets/images/xdc-subnet-architecture.webp" type="image/webp" alt="XDC SUbnet" class="img-fluid iconD" />
                    <img src="assets/images/xdc-subnet-architecture.svg" alt="XDC SUbnet" class="img-fluid iconD" />
                </picture>
                <picture>
                    <source srcset="assets/images/xdc-subnet-architecture_light.avif" type="image/avif" alt="XDC SUbnet" class="img-fluid iconL" />
                    <source srcset="assets/images/xdc-subnet-architecture_light.webp" type="image/webp" alt="XDC SUbnet" class="img-fluid iconL" />
                    <img src="assets/images/xdc-subnet-architecture_light.svg" alt="XDC SUbnet" class="img-fluid iconL" />
                </picture>
            </div>
        </div>
    </div>
</section>
<!-- Architecture Ends -->

<!-- Guides Starts -->
<section class="px-80 bg-lightgray">
    <div class="container p-relative">
        <div class="row pb-5">
            <div class="col-lg-10 offset-lg-1 mb-0">
                <h3 class="title-m text-center">Guides and Documentation</h3>
                <div class="subtitle subtitle-s text-center">
                    Looking for more details or instructions? No Problem. We've got you covered.
                </div>
            </div>
        </div>

        <!--<div class="row justify-content-center pb-5">
            <div class="col-lg-5 col-md-5 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mb-2">Docker Setup</div>
                        <p class="fs-6 mt-3 mb-0">Setting up XDC subnet using Docker is a convenient way to deploy and manage your subnet.</p>
                        <a href="https://www.xdc.dev/vinn_9686/xdc-subnet-installation-guide-building-a-secure-and-scalable-network-4hb3" target="_blank" class="btn socialHead-button internalLink mt-auto">
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
                        <div class="card-infoHead mb-2">Community Support</div>
                        <p class="fs-6 mt-3 mb-0">For any question on setting up your XDC Subnet, post on XDC developers forum.</p>
                        <a href="https://www.xdc.dev/" target="_blank" class="btn socialHead-button internalLink mt-auto">
                            Learn More
                            <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>            
        </div>-->

        <div class="row align-items-center pb-5">
            <div class="col-lg-6">
                <div class="col-lg-12 mt-2 mb-2">
                    <div class="h-100 card p-4 bg-light75 br-20 border-0">
                        <div class="card-info">
                            <div class="card-infoHead mb-2">Docker Setup</div>
                            <p class="fs-6 mt-3 mb-0">Setting up XDC subnet using Docker is a convenient way to deploy and manage your subnet.</p>
                            <a href="https://www.xdc.dev/vinn_9686/xdc-subnet-installation-guide-building-a-secure-and-scalable-network-4hb3" target="_blank" class="btn socialHead-button internalLink mt-auto">
                                Learn More
                                <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-2 mb-2">
                    <div class="h-100 card p-4 bg-light75 br-20 border-0">
                        <div class="card-info">
                            <div class="card-infoHead mb-2">Community Support</div>
                            <p class="fs-6 mt-3 mb-0">For any question on setting up your XDC Subnet, post on XDC developers forum.</p>
                            <a href="https://www.xdc.dev/" target="_blank" class="btn socialHead-button internalLink mt-auto">
                                Learn More
                                <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!--<img src="assets/images/xdc-subnet-ui.png" class="img-fluid br-20" alt="XDC SUbnet UI">-->
                <picture>
                    <source srcset="assets/images/xdc-subnet-ui.avif" type="image/avif" alt="XDC SUbnet UI" class="img-fluid iconL" />
                    <source srcset="assets/images/xdc-subnet-ui.webp" type="image/webp" alt="XDC SUbnet UI" class="img-fluid iconL" />
                    <img src="assets/images/xdc-subnet-ui.png" alt="XDC SUbnet UI" class="img-fluid br-20">
                </picture>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-10 offset-lg-1 mb-5">
                <h3 class="title-m text-center">Visual Guide to Setup XDC Subnet</h3>
                <div class="subtitle subtitle-s text-center">Hands-on guide to Setup XDC Subnet.</div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="h-100 card p-3 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mt-3 mb-4">Setting Up Your Own XDC-Subnet</div>
                        <div class="tutorial container text-center ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/VwfI4VTMUnY?si=VpFlH7anidYYHX-A" allowfullscreen="" class="br-20"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="h-100 card p-3 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mt-3 mb-4">Introducing the XDC Subnet</div>
                        <div class="tutorial container text-center ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/53zTfZCRQ_k?si=UDWkI9DlXxbZulNX" allowfullscreen="" class="br-20"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Guides Ends -->

<!-- Guides Starts 
<section class="px-80 bg-lightgray">
    <div class="container p-relative">
        <div class="row pb-5">
            <div class="col-lg-10 offset-lg-1 mb-0">
                <h3 class="title-m text-center">A Quick and Easy Guide to Set up your XDC Network Subnet / Private Network</h3>
                <div class="subtitle subtitle-s text-center">
                    Learn how to create your XDC Network Subnet / Private Network. This guide will help you set up your Subnet / Private Network efficiently by following the instructions in the GitHub repository or Guide.
                </div>
                <div class="btn-block mt-4">
                    <a href="https://docs.xdc.network" target="_blank">
                        <button class="btn-blue">Subnet Guide</button>
                    </a>
                    <a href="https://github.com/XinFinorg" target="_blank">
                        <button class="btn-transp-bordered"><i class="fab fa-github me-1"></i> Subnet GitHub</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-10 offset-lg-1 mb-5">
                <h3 class="title-m text-center">Visual Guide to Setup XDC Network Private Network / Subnet</h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="h-100 card p-3 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mt-3 mb-4">Setting Up Your Own XDC-Subnet</div>
                        <div class="tutorial container text-center ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/VwfI4VTMUnY?si=VpFlH7anidYYHX-A" allowfullscreen="" class="br-20"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="h-100 card p-3 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mt-3 mb-4">Introducing the XDC Subnet</div>
                        <div class="tutorial container text-center ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/53zTfZCRQ_k?si=UDWkI9DlXxbZulNX" allowfullscreen="" class="br-20"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Guides Ends -->

<section class="px-80">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8 mb-5">
                        <h3 class="title-m text-center">Versatile Use Cases</h3>
                        <div class="subtitle subtitle-s text-center">XDC Subnet opens the door to a myriad of possibilities.</div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <div class="card-infoHead mb-3">Private Blockchain Networks</div>
                                <p class="fs-6 mb-0">Create confidential, customized blockchain networks for businesses and organizations that demand data secrecy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <div class="card-infoHead mb-3">Cross-Chain Transactions</div>
                                <p class="fs-6 mb-0">Seamlessly conduct cross-chain transactions between diverse blockchains, fostering interoperability.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <div class="card-infoHead mb-3">Supply Chain Security</div>
                                <p class="fs-6 mb-0">Safeguard your supply chain by monitoring the movement of goods and materials with the precision of blockchain technology.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-2 mb-2">
                        <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                            <div class="card-info">
                                <div class="card-infoHead mb-3">Decentralized Applications</div>
                                <p class="fs-6 mb-0">Deploy high-security, scalable DApps that are built to excel in the decentralized landscape.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-80 bg-lightgray">
    <div class="container p-relative">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="title-m mb-3">Transformational Advantages</h3>
                <div class="subtitle subtitle-s">
                    XDC Subnet is a rapidly developing technology, and new use cases are being discovered all the time. If you are looking for a secure, scalable, and customizable blockchain platform, then XDC Subnet is a great option.
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mb-3">Cost-Effectiveness</div>
                        <p class="fs-6 mb-0">Say goodbye to exorbitant fees. XDC Subnet offers a more cost-effective alternative to traditional blockchain networks, saving you resources and capital.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mb-3">Speed and Scalability</div>
                        <p class="fs-6 mb-0">XDC Subnet is designed to be highly scalable, so it can handle a large number of transactions without sacrificing performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mb-3">Security Beyond Measure</div>
                        <p class="fs-6 mb-0">Trust the battle-tested security of XDC Subnet, safeguarding your network from threats and vulnerabilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mb-3">Guarded Privacy</div>
                        <p class="fs-6 mb-0">Customize your subnet to be a fortress of privacy, allowing only those with authorization to access your network's data and transactions.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5">
                <p class="subtitle subtitle-s fw-500 text-center mb-0">
                    Don't miss the chance to unlock the limitless potential of XDC Subnet. Embrace the future of decentralized networking today! For any assistance or queries related to creating your Subnet using XDC Network,
                    <a href="https://forms.gle/KQxw5DVbrMYrHv5N9" target="_blank">Contact Us</a> now.
                </p>
            </div>
        </div>
    </div>
</section>

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
                    <a href="https://docs.xdc.network" target="_blank">
                        <button class="btn-blue"><i class="fa fa-book me-1"></i> XDC Documents</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Need More Help Ends -->
<?php include('inc/footer.php') ?>
