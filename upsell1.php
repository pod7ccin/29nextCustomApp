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
    <meta charset="utf-8" />
    <title>Extreme Power Saver</title>

    <meta name="description" content="" />


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="content-language" content="en-us" />

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <meta property="og:title" content="Extreme Power Savers" />
    <meta property="og:description" content="Extreme Power Savers">
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image" content="images/package-1-c.png?v=67" />
    <meta property="og:url" content="" />


    <link rel="stylesheet" href="css/app2.css?v=821675450" />

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png?v=1063388066">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/upsells.css?v=1790569744" />
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
    <meta name="next-page-type" content="upsell2"> <!-- Can be product, checkout, upsell, receipt -->
    <style>
        .btn-upsell {
            padding: 0.8rem 5rem;
        }

        .btn-upsell-green {
            color: #fff;
            background-color: green !important;
            border:none;
            /* border-color: #f2491a;
        font-size: 1.5rem;
        padding: 1rem .5rem; */
        }

        .btn-upsell-green:hover {
            color: #fff;
            background-color: green;
            border-color: #fa643b;
            border:none;
        }

        @media (max-width: 767.98px) {
            .ntylink a i {
                top: 0px;
            }
        }
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
                        <img src="images/logo.png?v=1603407209" alt="product_name" class="img-fluid" />
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
                <div class="col text-center py-3">
                    <div class="">
                        <p class="h2 fw-bold text-tertiary">
                            <i class="d-none d-sm-inline-block fas fa-caret-right bounce-arrow me-1"></i><span>WAIT! YOUR ORDER IS NOT COMPLETE</span>
                            <i class="d-none d-sm-inline-block fas fa-caret-left bounce-arrow-r ms-1"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex pt-2">
                <div class="col-md-9 text-center mx-auto">
                    <a href="javascript:void(0)" onclick="" style="text-decoration: none;">
                        <div class="row">
                            <div class="col text-right"><img src="images/scissors.png" width="50" />
                            </div>
                            <div class="divclick row d-flex p-2  py-lg-3" style="border: 5px dashed #000;background-color:#eff9fc; cursor: pointer;">
                                <a href="javascript:void(0)" style="text-decoration: none;">
                                    <div class="col-lg align-self-center pb-2">
                                        <p class="fw-bold mb-1" style="font-size:28px;color:#000;">Join the VIP CLUB! </p>
                                    </div>
                                </a>
                                <div class="col-lg-7 align-self-center">
                                    <a href="javascript:void(0)">
                                        <img src="images/mystery_box_supreme4.png" class="img-fluid mx-auto p-2" />
                                    </a>
                                </div>
                                <div class="col-lg-5 align-self-center">
                                    <!--    <p class="fw-bold mb-1" style="font-size:25px">Join the VIP CLUB! </p>-->
                                    <ul class="text-left fw-bold mb-2 fa-ul" style="font-size:21px;line-height:48px">
                                        <li style=""><span class="fa-li"><i class="fa fa-check" style="color:#58d058;"></i></span>GET $75 GIFT CARD</li>
                                        <li style="line-height: 23px;"><span class="fa-li"><i class="fa fa-check" style="color:#58d058;"></i></span>COUPON DISCOUNT ACCOUNT</li>
                                        <li style=""><span class="fa-li"><i class="fa fa-check" style="color:#58d058;"></i></span>A FREE MYSTERY BOX</li>
                                    </ul>
                                    <p class="mb-1 small">Add for a <span class="fw-bold" style="color:#58d058;">SPECIAL PRICE</span> of</p>
                                    <p class="fw-bold mb-0" style="font-size:30px">$9.99</p>

                                    <div class="clearall"></div>
                                    <div class="d-flex align-items-center justify-content-center" data-next-upsell="offer" data-next-package-id="4">
                                        <button data-next-upsell-action="add" class="btn btn-upsell fw-bold" value="BUY NOW" style="padding: 3px 45px; background-color: #ff9d08;max-width: 160px;">Yes</button>
                                    </div>
                                </div>
                            </div>
                    </a>
                </div>

                <div class="row justify-content-center pt-1 pb-3 ntylink">
                    <div class="col py-2 text-center" data-next-upsell="offer" data-next-package-id="4">
                        <div class="mb-3">
                            <button type="button" class="divclick btn btn-upsell-green btn-upsell fw-bold w-100">COMPLETE CHECKOUT</button>
                        </div>
                        <small>
                            <a href="#" class="text-muted fs-light" style="text-decoration: none;">
                                <i class="fas fa-times-circle me-1 mt-2 mt-lg-2"></i> No thank you, I don’t want to take advantage of this one-time offer
                            </a>
                        </small>
                    </div>
                </div>
            </div>

    </section>
    <footer class="footer mt-2">
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 footer-column">
                    <div class="d-none d-sm-block footer-inf footer-column-header">INFORMATION</div>
                    <a href="#" target="_blank">Terms &amp; Conditions</a><br>
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
                    <a href="javascript:void();"><img src="images/logo.png?v=465718597" class="img-fluid ps-xl-5" /></a>
                </div>
                <div class="col-12 mt-3 pt-2 text-center footer-copyright">&copy;2025 <span class="text-white">Extreme Power Saver</span>. All Rights Reserved.</div>
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
    const ref_id = sessionStorage.getItem("ref_id");
    
    $(".btn-upsell").on("click", async function() {
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

      let baseURL = window.location.origin + "/29nextPOC/";
      try {
        const payload = {
            "lines": [
                {
                    "package_id": parseInt($("[data-selected-package]").attr("data-selected-package") || "4", 10),
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
          const redirectUrl = `${baseURL}upsell2.php${window.location.search}`;
          window.location.href = redirectUrl;
        } else {
          console.log("Upsell failed: " + (result.detail || "Unknown error"));
          $(this).prop("disabled", false).html('<span class="btn-text">COMPLETE CHECKOUT</span><span class="spinner" style="display:none;"></span>');
        }
      } catch (err) {
        console.error("Upsell Error:", err);
        alert("Error: " + err.message);
        $(this).prop("disabled", false).html('<span class="btn-text">COMPLETE CHECKOUT</span><span class="spinner" style="display:none;"></span>');
      }
    });
  </script>
</body>

</html>