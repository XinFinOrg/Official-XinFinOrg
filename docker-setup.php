<?php 
    $title = "XDC Network Docker Setup - Simplifying Masternode Deployment for Everyone!";
    $desc = "Effortless XDC Network Masternode Setup with Docker";
    
    include('inc/header.php') ?>

<!-- Hero Home Starts -->
<section class="px-200 px-t250-b100 hero-inside">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 hero-content">
                <h1 class="title-m text-center mb-0">XDC Network Docker Setup</h1>
                <h2 class="subtitle subtitle-s fw-500 text-center mb-0">
                    Welcome to the hassle-free world of XDC Network Masternode setup! In this comprehensive guide, we'll walk you through the steps to establish your very own XDC Network Masternode using Docker. With just a single bootstrap
                    command, you'll be on your way to participating in the XDC Network and contributing to its growth. Whether you're running CentOS, RedHat Enterprise Linux, or Ubuntu, our guide has got you covered. Let's dive right in!
                </h2>
            </div>
        </div>
    </div>
</section>
<!-- Hero Home Ends -->

<!-- System Requirements Starts -->
<section class="px-80 pt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">System Requirements</h3>
                <div class="subtitle subtitle-s text-center">Before we embark on the journey of setting up your XDC Network Masternode, let's ensure your system meets the following requirements.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/masternode/windows.svg" class="center img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Operating System</div>
                        <p class="fs-6 mb-0">CentOS or RedHat Enterprise Linux (latest release) or Ubuntu (20.04+) supported</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/masternode/cpu.svg" class="center img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">CPU</div>
                        <p class="fs-6 mb-0">A 64-bit x86_64 processor with a minimum of 6 cores</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/masternode/disk.svg" class="center img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">Disk</div>
                        <p class="fs-6 mb-0">Minimum 800GB SSD is recommended for the database partition, with 500+ IOPS (more is always better)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-lightgray br-20 border-0">
                    <div class="card-info text-center">
                        <img src="assets/images/inside-page/masternode/ram.svg" class="center img-fluid" />
                        <div class="card-infoHead mt-3 mb-3">RAM</div>
                        <p class="fs-6 mb-0">You will need at least 32GB of RAM to ensure smooth operation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- System Requirements Ends -->

<!-- Troubleshooting Starts -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">Troubleshooting</h3>
                <div class="subtitle subtitle-s text-center">If you encounter any issues during the setup process, don't worry; we are here to help. Follow these troubleshooting steps:</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <div class="step-num">1</div>
                        <div class="card-infoHead mt-3 mb-3">Collect Information</div>
                        <p class="fs-6 mb-0">The first step is to gather all relevant details about the problem you're facing.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <div class="step-num">2</div>
                        <div class="card-infoHead mt-3 mb-3">Visit Our Forum</div>
                        <p class="fs-6 mb-0">Head over to the XDC Network forum at <a href="https://xdc.dev" target="_blank">https://xdc.dev</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-2 mb-2">
                <div class="h-100 card p-4 bg-light75 br-20 border-0">
                    <div class="card-info text-center">
                        <div class="step-num">3</div>
                        <div class="card-infoHead mt-3 mb-3">Create Issue</div>
                        <p class="fs-6 mb-0">Create a detailed post outlining your issue. Be sure to include all the information you collected.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Troubleshooting Ends -->

<!-- CTA Btn Starts -->
<section class="px-20 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-5 bg-light75 br-20 border-0">
                    <div class="row align-items-center">
                        <div class="col-lg-10 col-md-9 col-sm-12 mb-4 mb-md-4 mb-lg-0">
                            <h3 class="title-xs text-center text-md-start text-lg-start mb-3">
                                Setting up an XDC Network Masternode with Docker on GitHub: A Quick and Easy Guide
                            </h3>
                            <div class="subtitle subtitle-s text-center text-md-start text-lg-start">
                                Learn how to establish your very own XDC Network masternode using Docker. This straightforward guide will help you set up your masternode efficiently by following the instructions provided in the repository.
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12">
                            <div class="mt-sm-2 mt-md-0 mt-lg-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-block">
                                        <a href="https://github.com/XinFinOrg/XinFin-Node" target="_blank">
                                            <button class="btn-blue"><i class="fab fa-github me-1"></i> GitHub</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Btn Ends -->

<!-- Docker Setup Videos Starts -->
<section class="px-80 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-5">
                <h3 class="title-m text-center">Docker Setup Videos</h3>
                <div class="subtitle subtitle-s text-center">Hands-on guide Docker Setup Videos.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="h-100 card p-3 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mt-3 mb-4">XDC Masternode Setup on MainNet using BootStrap (on AWS)</div>
                        <div class="tutorial container text-center ratio ratio-16x9">
                            <iframe src="https://www.youtube-nocookie.com/embed/lWXfo42daSU?si=4RvEIps2950e5TDU" allowfullscreen class="br-20"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="h-100 card p-3 bg-light75 br-20 border-0">
                    <div class="card-info">
                        <div class="card-infoHead mt-3 mb-4">XDC Masternode Setup on MainNet using Docker (on AWS)</div>
                        <div class="tutorial container text-center ratio ratio-16x9">
                            <iframe src="https://www.youtube-nocookie.com/embed/gtV6PrSe5BA?si=jQ7QvvILY0-6MyEF" allowfullscreen class="br-20"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Docker Setup Videos Ends -->

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

<?php include('inc/footer.php') ?>