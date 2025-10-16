<?php
header("Access-Control-Allow-Origin: *");
require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get API key from .env
$campaignApiKey = $_ENV['CAMPAIGN_API_KEY'] ?? null;
?>
<!DOCTYPE html>
<html lang="en" class="has-timer has-reviews">
    <head>
    <meta charset="utf-8"/>
<title>Extreme Power Saver</title>

<meta name="description" content="" /> 

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
 
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>

<meta property="og:title" content="Extreme Power Savers" />
<meta property="og:description" content="Extreme Power Savers">
<meta property="og:type" content="website" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image" content="images/package-1-c.png?v=67" />
<meta property="og:url" content="" />


<link rel="stylesheet" href="css/app2.css?v=896463384" />

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png?v=3.36">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="css/upsells.css?v=1939745832" />
<script>
    window.nextConfig = {
            apiKey: "<?php echo $campaignApiKey;?>",
    };
</script>
    <!-- Load SDK -->
<script src="https://campaign-cart-v2.pages.dev/loader.js"></script>

<!-- Campaign API Key -->
<meta name="next-api-key" content="<?php echo $campaignApiKey;?>">

<!-- Next URL After order complete (normally on checkout pages) -->
<meta name="next-debug" content="true">
<meta name="next-page-type" content="receipt"> <!-- Can be product, checkout, upsell, receipt -->
<style>
.spinner {
            border: 2px solid rgba(255, 255, 255, 0.4);
            border-top: 2px solid #ffffff;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            animation: spin 0.7s linear infinite;
            display: inline-block;
            margin-left: 10px;
            vertical-align: middle;
            }

@keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
</style>
</head>

    <body>
       
             <div class="bg-danger">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col text-center text-white p-2">Special Offer Unlocked - <span class="text-tertiary">Do Not Close This Page</span></div>
                </div>
            </div>
        </div>
        <div class="topbar pb-3 p-md-0">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5 d-flex justify-content-center justify-content-md-start align-items-center">
                        <div class="logo py-2">
                            <img src="images/logo.png?v=3.36" alt="product_name" class="img-fluid" />
                        </div>
                        <div class="ms-2 ps-2 text-start d-none d-md-block secure-checkout">
                            <span class="topbar-secure">SECURE</span><br />
                            <span class="topbar-checkout">CHECKOUT</span><br />
                        </div>
                    </div>

                    <div class="col-md-7 d-flex justify-content-center justify-content-md-end align-items-center">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item is-complete"><span>CHECKOUT</span></li>
                                <li class="breadcrumb-item is-current">UPGRADES</li>
                                <li class="breadcrumb-item">SUMMARY</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="main">
            <div class="container-fluid bg-info">
                <div class="row">
                    <div class="col text-center py-5">
                        <div class="pb-5">
                            <p class="h2 fw-bold text-tertiary">
                                <i class="d-none d-sm-inline-block fas fa-caret-right bounce-arrow me-1"></i><span class="ups1hd ups1hd2 ">WAIT, Here's a chance for you to get an Exclusive Deal!!</span>
                                <i class="d-none d-sm-inline-block fas fa-caret-left bounce-arrow-r "></i>
                            </p>
                            <p class="h6 text-white">Add this Exclusive Deal to your order and it will be shipped for FREE.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <div class="row up-box bg-white">
                            <div class="col-lg-6 py-4 px-0 p-lg-4">
                                <div class="text-center">
                                    <div class="up-txt1 fs-5">
                                        <img src="images/ck-img.png" />Flash Sale - Save 75% Off Today Only<img src="images/ck-img.png" />
                                    </div>
                                    <div class="up-txt2 fs-4 border-top border-bottom"><span class="fs-2">
                                        Extreme Power Saver Discounted
                                    </span></div>
                                    <div class="bg-light d-lg-none text-center">
                                        <img src="images/powersaver.jpg" class="img-fluid" /> 
                                    </div>
                                    <ul class="up-list my-3">
                                        <li><i class="fas fa-check-circle text-success me-3"></i>Quickly and easily stabilize your homes electrical current</li>

                                        <li><i class="fas fa-check-circle text-success me-3"></i>Reduce harmful dirty electricity from your home</li>

                                        <li><i class="fas fa-check-circle text-success me-3"></i>Waste less power, dramatically lower energy consumption</li>
                                    </ul>
                                    <div class="save-strip d-flex justify-content-center align-items-center fs-5">
                                        <i class="fas fa-check-circle text-success me-3"></i>
                                        <span> Your Discounted Price Reserved For <span id="timer" class="text-danger"></span></span>
                                    </div>
                                    <div class="up-prcBox d-flex justify-content-center align-items-center">
                                        <div class="prc-bx ret-prc p-3 border-end">
                                            <div class="fs-7">Retail Price</div>
                                            <span class="originalPrice fs-1 fw-bold text-muted" id="regprice">$139.96</span>
                                        </div>
                                        <div class="prc-bx ofr-prc p-3">
                                            <div class="fs-7">Offer Price</div>
                                            <span style="color: #000;" class="currentPrice fs-1 fw-bold">$29.99</span>
                                        </div>
                                    </div>
                                    <div class="clearall"></div>


                                    <div class="qtySec">
                                        <div>
                                            <button class="down">-</button>
                                            <input class="qtyInput" readonly="" onchange="change_qty()" type="text" value="1" max="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');">

                                            <button class="up">+</button>
                                        </div>
                                    </div>










                                    
                                    <div class="d-flex align-items-center justify-content-center mb-3"> 
                                    <input type="button" value="Yes! Add To My Order." class="btn btn-upsell pulse" />  
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-3"><i class="fas fa-truck me-2"></i>Free Shipping In The Same Order</div>

                                    <img src="images/cards-icon.jpg" class="img-fluid px-4 pt-3" />
                                </div>
                            </div>
                            <div class="col-lg-6 d-none bg-light d-lg-flex justify-content-lg-center align-items-lg-center">
                                <div class="text-center">
                                    <img src="images/powersaver.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center ntylink py-3">
                            <div class="col py-2 text-center">
                                <!--<small>-->
                                    <a href="thank-you.php?prospect_id=1211583&order_id=6219855&customer_id=994769" class="d-inline justify-content-center align-items-center text-muted fs-light" style="text-decoration: none;font-size:13px;">
                                        <i class="fas fa-times-circle me-2 mt-2 mt-lg-2"></i> No thank you, I don’t want to take advantage of this one-time offer
                                    </a>
                                <!--</small>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer mt-2">
            <div class="container pt-4 pb-5">
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3 footer-column">
                        <div class="d-none d-sm-block footer-inf footer-column-header">INFORMATION</div>

                        <a href="#" target="_blank">Contact Us</a>
                        <a href="#" target="_blank">Terms &amp; Conditions</a>
                        <a href="#" target="_blank">Privacy Policy</a><br>
                    </div>
                    <div class="d-none d-sm-block col-sm-4 col-md-3 col-lg-3 footer-column">
                        <div class="footer-pmethods footer-column-header">PAYMENT METHODS</div>
                        <div>
                            <span>
                                <img class="credit-cards-image" src="images/pay-meth-vmpk.svg" />
                            </span>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-3 col-lg-3 footer-column">
                        <div class="footer-guarantee footer-column-header">GUARANTEE</div>
                        <div class="footer-guarantee-content">We offer a 90-Days money-back guarantee</div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3 d-flex align-items-start justify-content-end footer-column">
                        <a href="javascript:void(0);"><img src="images/logo.png?v=2.36" class="img-fluid ps-xl-5" /></a>
                    </div>
                    <div class="col-12 mt-3 pt-2 text-center footer-copyright" style="color:#fff;">&copy;Copyright 2025 <span class="text-white">Extreme Power Saver</span>. All Rights Reserved.</div>
                </div>
            </div>
        </footer>
        <!-- CVV modal -->
        <div class="modal fade" id="cvvModal" tabindex="-1" aria-labelledby="cvvLocations" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/cvv-check.jpg" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
        <p id="loading-indicator" style="display:none;"></p>
        <p id="crm-response-container" style="display:none;"></p>
        
        
               
              
             
              <style>
              @supports (-webkit-appearance: -apple-pay-button) { 
                     .apple-pay-button {
                        display: inline-block;
                        -webkit-appearance: -apple-pay-button;
                        -apple-pay-button-type: buy;
                        -apple-pay-button-style: black;
                        --apple-pay-button-width: 150px;
                        --apple-pay-button-height: 30px;
                        width: 150px;
                        height: 30px;
                    }
                }
                @supports not (-webkit-appearance: -apple-pay-button) {
                    .apple-pay-button {
                        display: inline-block;
                        background-size: 100% 60%;
                        background-repeat: no-repeat;
                        background-position: 50% 50%;
                        border-radius: 5px;
                        padding: 0px;
                        box-sizing: border-box;
                        min-width: 150px;
                        min-height: 30px;
                        max-height: 60px;
                    }
                }
                
              </style>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById("timer").innerHTML = 0o5 + ":" + 0o0;
        startTimer();

        function startTimer() {
            var presentTime = document.getElementById("timer").innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond(timeArray[1] - 1);
            if (s == 59) {
                m = m - 1;
            }
            if (m < 0) {
                return;
            }

            document.getElementById("timer").innerHTML = m + ":" + s;
            setTimeout(startTimer, 1000);
        }

        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {
                sec = "0" + sec;
            }
            if (sec < 0) {
                sec = "59";
            }
            return sec;
        }
    </script>
    <script>
        $(".up").click(function () {
            if ($(".qtyInput").val() < 10) {
                $(".qtyInput").val(parseInt($(".qtyInput").val()) + 1);
                $("#c_qty").val(parseInt($("#c_qty").val()) + 1);
            }
        });
        $(".down").click(function () {
            if ($(".qtyInput").val() > 1) {
                $(".qtyInput").val(parseInt($(".qtyInput").val()) - 1);
                $("#c_qty").val(parseInt($("#c_qty").val()) - 1);
            }
        });
        function change_qty(){
            $("#c_qty").val(parseInt($(".qtyInput").val()));
        }
        $(".btn-upsell").on("click", async function() {
            const ref_id = sessionStorage.getItem("ref_id");
            let baseURL = window.location.origin + "/29nextPOC/";
            if(!ref_id){
                Swal.fire({
                    icon: "error",
                    title: "Order id missing",
                    text: "No reference id found!",
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
                return
            }
            $(this).prop("disabled", true).html('<span class="spinner"></span> Processing...');
            try {
                const payload = {
                    "lines": [
                        {
                            "package_id": parseInt($("[data-selected-package]").attr("data-selected-package") || "5", 10),
                            "quantity": parseInt($(".qtyInput").val()),
                        }
                    ]
                };

                const res = await fetch('https://campaigns.apps.29next.com/api/v1/orders/' + ref_id + '/upsells/', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "<?php echo $campaignApiKey;?>"
                },
                body: JSON.stringify(payload)
                });

                const result = await res.json();
                console.log("🔥 Upsell Response:", result);

                if (res.ok && result.number) {
                console.log("✅ Upsell order created:", result.number);
                const redirectUrl = `${baseURL}thank-you.php${window.location.search}`;
                window.location.href = redirectUrl;
                } else {
                console.log("Upsell failed: " + (result.detail || "Unknown error"));
                $(this).prop("disabled", false).html('<span class="btn-text">Yes! Add to My Order</span><span class="spinner" style="display:none;"></span>');
                }
            } catch (err) {
                console.error("Upsell Error:", err);
                alert("Error: " + err.message);
                $(this).prop("disabled", false).html('<span class="btn-text">Yes! Add to My Order</span><span class="spinner" style="display:none;"></span>');
            }
        });
    </script>
</body>
</html>
