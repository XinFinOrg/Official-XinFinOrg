<?php
$title = "Disclosures Vs. Non-Disclosures";
$desc = "XinFin [XDC] Network is a fully open source and community driven project.";

include('inc/header.php') ?>

<section id="contactbanner">
    <!-- <div id="particle-canvas" ></div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 bannertext">
                <h1>Disclosures Vs. Non-Disclosures</h1>
                <p>XinFin [XDC] Network is a fully open-source and community-driven project. The XDC community runs 95% of the masternodes. XinFin project aims to be a fully transparent and decentralized infrastructure/platform for regulated financial institutions to host their products and services.</p>
            </div>
            <!-- <div id="scroll"><a href="#xdce" class="smooth-scroll" ><span class="arrow-bounce">↓</span></a></div> -->
        </div>
    </div>
</section>

<section id="protocol" class="xifin-dpos-consensus">
    <div class="container">
        <div class="tab-content">
            <div id="network" class="tab-pane fade in active">
                <div class="row" style="margin-top: 0%; padding-bottom: 0px;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p>XinFin Network and its team/partners always thrive to keep all information public. In certain circumstances, the enterprises or regulated financial institutions enforce NDA on the team members during the evaluation stage of working with XinFin Network. If there are any XDC community members who wish to engage in deeper capacity and know about such partnerships which are in the evaluation stage, they may send their details with the form below. Evaluation stage partners will be shared with such community members after signing Non-Disclosure Agreements.</p>
                        <a href="docs/nda.docx">
                            <button class="btn-hover color-1">Download NDA <i class="fa fa-download"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</section>

<script>
    var activeUrl = localStorage.getItem("currentUrl");
    $(".nav.navbar-nav li:nth-child(5)").addClass("active");
</script>

<?php include('inc/footer.php') ?>