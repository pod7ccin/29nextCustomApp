<?php
header("Access-Control-Allow-Origin: *");
require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get API key from .env
$campaignApiKey = $_ENV['CAMPAIGN_API_KEY'] ?? null;
?>
<!doctype html>
<html lang="en">

<head>
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
  <script>
    window.nextConfig = {
      apiKey: "<?php echo $campaignApiKey;?>",
      nextUrl: "/checkout"
    };
  </script>
  <script async src="https://campaigns.apps.29next.com/js/v1/campaign/"></script>
  <script>
      window.addEventListener('load', function () {
          nextCampaign.config({
              apiKey: "<?php echo $campaignApiKey;?>",
          })
          nextCampaign.event('page_view', {
              title: document.title,
              url: window.location.href
          });
          // next.expressCheckout();
      });
  </script>

  <!-- Load SDK -->
<script src="https://cdn.jsdelivr.net/gh/sellmore-co/campaign-cart@v0.2.28/dist/loader.js"></script>

<!-- Campaign API Key -->
<meta name="next-api-key" content="<?php echo $campaignApiKey;?>"> 

<!-- Next URL After order complete (normally on checkout pages) -->
<meta name="next-next-url" content="/upsell">

<meta name="next-debug" content="true">
<meta name="next-page-type" content="checkout"> <!-- Can be product, checkout, upsell, receipt -->

<!-- Prevent Back navigation (normally on first upsell page) -->
<meta name="next-prevent-back-navigation" content="true">


<link rel="stylesheet" href="css/app2.css?v=1262384201" />

    <!-- Favicon link -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png?v=3.0" />
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/app.css" rel="stylesheet">

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Fontawesome 6.1.1 link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <!-- Custom CSS link -->
  <link rel="stylesheet" href="css/style.css">
  <!-- discount popup CSS link -->
  <link rel="stylesheet" href="css/discount-popup.css">
  <!-- Responsive CSS link -->
  <link rel="stylesheet" href="css/bottom-popup.css">

  <!-- Responsive CSS link -->
  <link rel="stylesheet" href="css/responsive.css">


  <style>
    .container{max-width:1100px !important;}
    .main-middle-sec .checkout-page-cart-product-section{ text-align: center; margin: auto;}
    .button, button, input[type=button]{    padding: 14px 15px;}
    .paypal-button{ background: #F6C038; border-radius: 8px;}
    .paypal-button:hover{background: #F6C038;}
    .cc-google-pay{background: #1E1E1E;border-radius: 8px;}
    .cc-google-pay:hover{background: #1E1E1E;}

    .gpay-button.black.short,
    .gpay-button.black.plain {
      background-size: 68px;
      background-repeat: no-repeat;
      background-position: center;
    }

    .pkg-savings {
      color: #49d426;
    }

    .logo-image {
      width: 200px;
    }


    ul.package-order {
      display: flex;
      flex-direction: column;
    }

    .package-order li.order1 {
      -webkit-box-ordinal-group: -1;
      -moz-box-ordinal-group: -1;
      -ms-flex-order: -1;
      -webkit-order: -1;
      order: -1;
    }

    .timer-bar {
      background-color: #ACF4A1;
      display: flex;
      gap: 15px;
      justify-content: center;
      align-items: center;
      padding: 12px 15px 12px;
      font-size: 18px;
      overflow: hidden;
      box-sizing: border-box;

    }

    .t-box {
      background: #000;
      color: #fff;
      font-weight: 700;
      display: inline-block;
      text-align: center;
      border-radius: 8px;
      min-width: 34px;
      padding: 4px 0px;
    }

    .t-text {
      position: absolute;
      bottom: 0px;
      left: 50%;
      transform: translateX(-50%);
      font-weight: 700;
      font-size: 12px;
      text-align: center;
    }

    .timer-wrapper {
      display: flex;
      gap: 5px;
    }

    .hl-text {
      background: #000;
      color: #fff;
      font-weight: 700;
      padding: 6px 10px;
      border-radius: 8px;
      text-transform: uppercase;
    }

    .timer-bar b {
      font-weight: 700;
    }

    .timer-bar p {
      margin-bottom: 0px;
      display: flex;
      align-items: center;
      gap: 9px;
    }

    .t-wrper {
      position: relative;
      overflow: hidden;
      box-sizing: border-box;
      padding-bottom: 20px;
    }

    /* ================================== */

    .t-br p {
      margin-bottom: 0px;
      font-size: 12px;
      font-weight: 700;

    }

    .t-br {
      display: flex;
      flex-wrap: wrap;
      margin: 10px 0px 30px;
     /* max-width: 550px;*/

    }

    .coupon-box {
      width: 160px;
      background-color: #000;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .coupon-text {
      width: calc(100% - 160px);
      background-color: #ADF4A1;
      padding: 10px;
      display: flex;
      align-items: center;
    }


    .c-code {
      color: #ACF4A1;
      text-transform: uppercase;

    }

    .c-code span img {
      margin-right: 5px;
    }

    .coupon-text p span.timer-text {

      color: #E44613;

    }

    .coupon-text br {
      display: none;
    }




    @media screen and (max-width:991.5px) {

      .hl-day,
      .uptp-text {
        display: block;
        text-align: center;
        margin-bottom: 3px;
      }

      .hl-text {
        display: inline-block;
      }

      .timer-bar {
        padding: 12px 15px 12px;
      }

      .t-box {
        padding: 2px 0px;
      }

      .t-br {
        margin: 10px auto 30px;
      }

      .t-box {
        padding: 2px 0px;
      }

    }

    @media screen and (max-width:767.5px) {

      .coupon-text br {
        display: block;
      }

      .t-br {
        margin: 10px auto 30px;
      }

      .timer-bar p {
        flex-wrap: wrap;
        justify-content: center;
        line-height: 1;
        font-size: 16px;

      }

      .uptp-text {
        letter-spacing: -1px;
        width: 100%;
      }

      .t-br p {
        text-align: center;
        width: 100%;
        font-size: 12px;
      }

    }


    @media screen and (min-width:320px) and (max-width: 380.5px) {
      .t-box {
        min-width: 38px;
      }

      .hl-text {
        padding: 4px 5px;
      }

      .timer-bar {
        font-size: 16px;
      }

      .t-br p {
        font-size: 11px;
      }

      .coupon-box {
        width: 120px;
      }

      .coupon-text {
        width: calc(100% - 120px);
      }

      .t-br {
        margin: 0 auto;
      }

    }

    @media screen and (min-width:320px) and (max-width: 370.5px) {
      .t-box {
        min-width: 38px;
      }

      .hl-text {
        padding: 4px 5px;
      }

      .timer-bar {
        font-size: 16px;
      }

    }
    .product-selector {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-bottom: 30px;
    }

    .product-card {
      border: 2px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      background: #fff;
      cursor: pointer;
      transition: all 0.3s;
    }

    [data-next-selected="true"] .product-card {
      border-color: #007bff;
      background: #eef6ff;
    }

    .next-error-label {
      color: #c51a00;
      margin-top: .25rem;
      font-size: .75rem;
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


  <div class="animated yt-loader" id="yt-loader"></div>


  <div class="timer-bar">
    <p>

      <span class="uptp-text"><b>GET 55% OFF NOW!</b> USE PROMO CODE:</span>
      <span class="hl-text"><b>Extreme25</b></span>
      <span class="limited-text"><b>- ENDS AT MIDNIGHT</b></span>


    </p>

  </div>

  <div class="floating-cart">
    <div class="black-stripe">
      <h2 class="black-stripe-text">Your Cart</h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="left">
            <img src="images/checkout-page-cart-product.png"
              srcset="images/checkout-page-cart-product@2x.png 2x, images/checkout-page-cart-product@3x.png 3x"
              alt="checkout-page-cart-product" class="img-fluid">
          </div>
        </div>
        <div class="col-6">
          <div class="right">
            <p><span class="qty_s">1x</span> Extreme Power Saver</p>
            <p>You Saved: <span class="org save_price">$50.00</span></p>
            <p>Total: <span class="total_price">$99.00</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Define your template in HTML -->
<template data-template="exit-intent">
  <div class="exit-modal">
    <h2>Wait! Don't Leave Yet!</h2>
    <p>Get 20% OFF your order</p>
    
    <!-- Display dynamic cart data -->
    <div class="cart-info">
      Your cart total: <span data-next-display="cart.total"></span>
    </div>
    
    <!-- Action buttons with special attributes -->
    <button data-exit-intent-action="apply-coupon" data-coupon-code="SAVE20" class="btn-primary">
      Apply 20% Discount
    </button>
    
    <!-- This button triggers the custom action function -->
    <button data-exit-intent-action="custom" class="btn-primary">
      Show Me More
    </button>
    
    <button data-exit-intent-action="close" class="btn-secondary">
      No Thanks
    </button>
  </div>
</template>
  <!--discount popup-->
  <!-- <div id="leaveFade">
    <div id="leavePop1" class="leavepop_all" style="display: none;">
      <div class="partOne">
        <img class="" src="images/coupon-nw.jpg">

      </div>
      <div class="partTwo">
        <div class="innrPrt">
          <div id="innerA1" class="innerStyling innerA_all"> WAIT! </div>
          <div id="innerB1" class="innerStyling innerB_all"> You have been chosen
            to receive an <strong style="font-family: 'Poppins', sans-serif;font-weight: 700;"> additional
              +10% OFF</strong></div>
          <p>valid for</p>
          <div id="innerE1">
            <div id="popTimer"></div>
          </div>
          <div id="timeInit" style="display: none;"></div>
          <div id="innerF1">
            <div id="innerFa1">Minutes</div>
            <div id="innerFb1">Seconds</div>
            <div class="clear"></div>
          </div>
          <div id="innerButton1" class="innerButton_all"> UNLOCK &amp; SAVE</div>
          <span id="leaveX1" class="save"><a id="closeInnerButton" href="javascript:void(0)">No Savings For
              Me</a></span>
        </div>
      </div>
    </div>
    <div id="leavePop2" class="leavepop_all">
      <div id="leaveX2" class="leaveX_all">
        <img class="" src="images/xclose.png?v=1.5">
      </div>
      <div id="innerA2" class="innerStyling innerA_all"> WAIT! Here is our BEST &amp; FINAL OFFER! </div>
      <div id="innerB2" class="innerStyling innerB_all"> Save an <span
          style="text-decoration: underline; color: #c00;">EXTRA 5% OFF (15% OFF TOTAL)</span> on top of the
        10% Discount with this FREE COUPON!
      </div>
      <div id="innerButton2" class="innerButton_all"> Activate my 10% OFF Coupon! </div>
    </div>
  </div> -->

  <!--discount pop up end-->
  
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-4 col-lg-6">
          <div class="left">
            <img src="images/logo.png" alt="logo" class="img-fluid logo-image" />
          </div>
        </div>
        <div class="col-8 col-lg-6">
          <div class="right">
            <img src="images/money-back-top.png"
              srcset="images/money-back-top@2x.png 2x, images/money-back-top@3x.png 3x" alt="money-back-top"
              class="img-fluid" />
            <p class="header-right-first-text"><span>90 - Days 100%</span> <span>Money Back Guarantee</span></p>
            <p class="header-right-last-text"><span>Questions?</span> <span>Call:<a href="tel:10000000000">
                  10000000000</a></span></p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="black-stripe" id="black-stripe">
      <img src="images/lock.png" srcset="images/lock@2x.png 2x, images/lock@3x.png 3x" alt="lock" class="lock" />
      <h2 class="black-stripe-text">100% Encrypted & Secure Checkout</h2>
    </div>

    <div class="checkout-bonusDeals-reciept" id="checkout-bonusDeals-reciept">
      <h3><span class="active">Checkout</span><span class="line-with-arrow"><img src="images/desktop-active-arrow.png"
            srcset="images/desktop-active-arrow@2x.png 2x, images/desktop-active-arrow@3x.png 3x"
            alt="desktop-active-arrow" class="desktop-active-arrow" /> <img src="images/mobile-active-arrow.png"
            srcset="images/mobile-active-arrow@2x.png 2x, images/mobile-active-arrow@3x.png 3x"
            alt="mobile-active-arrow" class="mobile-active-arrow" /></span><span>Bonus Deals</span><span
          class="line-with-arrow"><img src="images/desktop-inactive-arrow.png"
            srcset="images/desktop-inactive-arrow@2x.png 2x, images/desktop-inactive-arrow@3x.png 3x"
            alt="desktop-inactive-arrow" class="desktop-inactive-arrow" /> <img src="images/mobile-inactive-arrow.png"
            srcset="images/mobile-inactive-arrow@2x.png 2x, images/mobile-inactive-arrow@3x.png 3x"
            alt="mobile-inactive-arrow" class="mobile-inactive-arrow" /></span><span>Receipt</span></h3>
    </div>

    <div class="main-middle-sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="left">
              <!--  <div class="green-stripe" id="green-stripe">
                  <h4><span id="disc_per">56</span>% <span class="discount-off"></span>off Applied! Code expires in: <span id="ten-countdown">10:00</span>. Stay on this page.</h4>
                </div> -->

              <div class="t-br">
                <div class="coupon-box">
                  <p class="c-code"><span><img src="images/tick.svg"></span>Extreme25</p>
                  <p>PROMO APPLIED</p>
                </div>
                <div class="coupon-text">
                  <p>Your order is reserved for: <br><span id="countDown" class="timer-text">00:00</span>. Stay on this
                    page.</p>
                </div>
              </div>

              <h4 class="express-checkout" id="express-checkout">Express Checkout</h4>

              <div class="paypal-gpay-buttons" id="paypal-gpay-buttons" data-next-express-checkout="buttons">
                <button data-next-express-checkout="paypal" data-action="submit" class="paypal-button">
                  <img src="images/paypal.png"
                            srcset="images/paypal@2x.png 2x, images/paypal@3x.png 3x" alt="paypal" class="img-fluid" />
                </button>
                <!-- <a href="javascript:void(0)" class="paypal-button"><img src="images/paypal.png"
                    srcset="images/paypal@2x.png 2x, images/paypal@3x.png 3x" alt="paypal" class="img-fluid" />
                  </a> -->
                <button data-next-express-checkout="google_pay" data-action="submit" class="payment-btn cc-google-pay">
                  Google Pay
                </button>
              </div>
              <h4 class="Choose-your-package" id="Choose-your-package">Choose your package</h4>
              <div class="Choose-your-package-section" id="Choose-your-package-section">
                <ul class="package-order" data-next-cart-selector data-next-selection-mode="swap" data-next-selector-id="button-selector" data-next-required="true">
                  <li>
                      <div class="radio-section" id="product1" data-quantity="1" data-campaigns="16" data-price="49.99" data-regPrice="99.98" data-ship="8.99" data-unitPrice="49.99" data-name="1x" data-package-discount="50" data-disunit="44.99" data-next-selector-card data-next-package-id="1">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="secondRadio">
                            <label class="form-check-label" for="secondRadio">
                              <div class="left">
                                <p><span data-next-display="package.name">1x Extreme Power Saver</span> <br class="mob-only"><span class="pkg-savings discountPercentage"></span></p>
                                <p class="save-off-text" >Save <span data-next-display="package.savingsPercentage">50%</span> Off</p>
                              </div>
                              <div class="right">
                                <p class="original-price" data-next-display="package.price_retail_total">$99.98</p>
                                <p class="offer-price" data-next-display="package.price_total">$49.99</p>
                              </div>
                            </label>
                          </div>
                      </div>
                   </li>
                  <li class="active">
                      <div class="radio-section dispop" id="product2" data-quantity="2" data-campaigns="17"  data-price="99.98" data-regPrice="222.18" data-ship="8.99" data-unitPrice="49.99" data-name="2x" data-package-discount="55" data-disunit="44.99" data-next-selector-card data-next-package-id="2" data-next-selected="true">
                          <div class="form-check" data-next-package-id="2">
                            <input class="form-check-input" type="radio" name="" id="firstRadio">
                            <label class="form-check-label" for="firstRadio">
                              <div class="left">
                                <p class="recommended-deal"><img src="images/star.png" srcset="images/star@2x.png 2x, images/star@3x.png 3x" alt="star" class="img-fluid"> Recommended Deal</p>
                                <p><span data-next-display="package.name">2x Extreme Power Saver</span> <br class="mob-only"><span class="pkg-savings discountPercentage"></span></p>
                                <p class="save-off-text">Save <span data-next-display="package.savingsPercentage">55%</span> Off <!--+ FREE Shipping--></p>
                              </div>
                              <div class="right">
                                <p class="recommended-deal"><img src="images/star.png" srcset="images/star@2x.png 2x, images/star@3x.png 3x" alt="star" class="img-fluid" /> Recommended Deal</p>
                                <p class="original-price" data-next-display="package.price_retail_total">$222.18</p>
                                <p class="offer-price" data-next-display="package.price_total">$99.98</p>
                              </div>
                            </label>
                          </div>
                      </div>
                    </li>
                    <li>
                      <div class="radio-section" id="product3" data-quantity="3"  data-campaigns="18" data-price="119.97" data-regPrice="299.93" data-ship="8.99" data-unitPrice="39.99" data-name="3x" data-package-discount="60" data-disunit="35.99" data-next-selector-card data-next-package-id="3">
                          <div class="form-check" data-next-selector-card data-next-package-id="3">
                            <input class="form-check-input" type="radio" name="" id="fourthRadio">
                            <label class="form-check-label" for="fourthRadio">
                              <div class="left">
                                <p><span data-next-display="package.name">3x Extreme Power Saver</span> <br class="mob-only"><span class="pkg-savings discountPercentage"></span></p>   
                                <p class="save-off-text">Save <span data-next-display="package.savingsPercentage">60%</span> Off <!--+ FREE Shipping--></p>
                              </div>
                              <div class="right">
                                <p class="original-price" data-next-display="package.price_retail_total">$299.93</p>
                                <p class="offer-price" data-next-display="package.price_total">$119.97</p>
                              </div>
                            </label>
                          </div>
                      </div>
                    </li>
                </ul>
              </div>

              <h4 class="shipping-address" id="shipping-address">Shipping address</h4>
              <p class="enter-your-shipping-details" id="enter-your-shipping-details">Enter your shipping details</p>

              <form method="post" accept-charset="utf-8"
                enctype="application/x-www-form-urlencoded;charset=utf-8" class="checkout-form" id="checkoutForm">
                <div id="form-top-part" id="shipAddress11">
                  <div class="input_wrap">
                    <input type="email" name="email" id="inputEmail"
                      class="form-control required remove-class c-details" data-validate="email"
                      data-error-message="Please enter a valid email!" value="" required placeholder="" data-next-checkout-field="email">
                    <label>Email address</label>
                  </div>

                  <div class="first-last-name">
                    <div class="input_wrap">
                      <input type="text" spellcheck="false" autocorrect="off" name="first_name" id="inputFirstName"
                        class="form-control required remove-class c-details"
                        data-error-message="Please enter your first name!" value="" required data-next-field="shipping_address.first_name">
                      <label>First name</label>
                    </div>

                    <div class="input_wrap">
                      <input type="text" spellcheck="false" autocorrect="off" name="last_name" id="inputLastName"
                        class="form-control required remove-class c-details"
                        data-error-message="Please enter your last name!" value="" required data-next-field="shipping_address.last_name">
                      <label>Last name</label>
                    </div>
                  </div>

                  <div class="input_wrap country-wrap">
                    <select id="country-select" name="country"
                      class="form-select form-control required remove-class c-details" data-selected="US"
                      data-error-message="Please select your country!" data-next-field='shipping_address.country'>
                      <option value="US">United States</option>
                    </select>
                    <label>Country/Region</label>
                  </div>


                  <div class="input_wrap">
                    <input spellcheck="false" autocorrect="off" name="address1" id="inputAddress" type="text"
                      class="form-control required remove-class c-details"
                      data-error-message="Please enter your address!" value="" required data-next-field='shipping_address.address1'>
                    <label>Enter your address here</label>
                    <a href="javascript:void(0)" id="shippingAddressSearch"><img src="images/search.png"
                        srcset="images/search@2x.png 2x, images/search@3x.png 3x" alt="star" class="img-fluid" /></a>
                  </div>


                  <div class="row">
                    <div class="col-md-4 show_case" style="display:block;">
                      <div class="input_wrap">
                        <input type="text" spellcheck="false" autocorrect="off" name="city" id="inputCity"
                          class="form-control required remove-class c-details"
                          data-error-message="Please enter your city!" value="" required data-next-field="shipping_address.city">
                        <label>City</label>
                      </div>
                    </div>

                    <div class="col-md-4 show_case" style="display:block;">
                      <div class="input_wrap country-wrap">
                          <select id="state" name="state" required class="form-control required remove-class c-details" data-error-message="Please select your state!" data-selected="" data-next-field="shipping_address.state">
                            <option value="">Select State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                          </select>
                        <label>State</label>
                      </div>



                    </div>

                    <div class="col-md-4 show_case" style="display:block;">
                      <div class="input_wrap">
                        <input type="tel" name="zip" id="inputZip"
                          onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" maxlength="5"
                          class="form-control required remove-class c-details"
                          data-error-message="Please enter a valid zip code!" value="" required data-next-field="shipping_address.zip">
                        <label>Zip</label>
                      </div>


                    </div>

                  </div>

                  <div class="input_wrap show_case ph-pos" style="display:block;">
                    <input type="tel" name="phone" id="inputPhone" class="form-control required remove-class c-details"
                      data-validate="phone" data-min-length="10" data-max-length="15"
                      data-error-message="Please enter a valid contact number!" value="" required maxlength="10"
                      onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" data-next-field="shipping_address.phone">
                    <label>Phone</label>
                    <!-- <span class="opt-text">optional</span> -->
                  </div>
                  <!---------------------------->





                  <div class="right-top">
                    <h4 class="your-cart">Your Cart</h4>

                    <div class="star-happyCustomer">
                      <img src="images/rating-star.png"
                        srcset="images/rating-star@2x.png 2x, images/rating-star@3x.png 3x" alt="rating-star"
                        class="img-fluid">
                      <h5>26,983+ Happy Customers</h5>
                    </div>

                    <p class="checkout-page-cart-product-title">Protect and Prolong the Life of Your Appliances &
                      Electronics..</p>

                    <div class="checkout-page-cart-product-section">
                      <img src="images/checkout-page-cart-product.png"
                        srcset="images/checkout-page-cart-product@2x.png 2x, images/checkout-page-cart-product@3x.png 3x"
                        alt="checkout-page-cart-product" class="img-fluid">
                    </div>

                    <div class="checkout-page-cart-price-section">
                      <ul>
                        <li>
                          <p><span>Item</span></p>
                          <p><span>Amount</span></p>
                        </li>

                        <li>
                          <p><span class="qty_s" id="qty" data-next-display="selection.{selectorId}.name">2x Extreme Power Saver</span></p>
                          <p class="price_s" data-next-display="selection.{selectorId}.total">$138.00</p>
                        </li>

                        <li>
                          <p class="ship_name">Shipping</p>
                          <p><span class="org shipping_price">FREE</span></p>
                        </li>

                        <li>
                          <p><span>Today you saved</span></p>
                          <p>Discount: <span class="org save_price">$176.00</span></p>
                        </li>

                        <li>
                          <p>Grand Total: <span class="total_price" data-next-display="order.total">$138.00</span></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <h4 class="payment-text">Payment</h4>

                <div class="payment-section active">
                  <div class="payment-section-head">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="" id="creditCardRadio" checked>
                      <label class="form-check-label" for="creditCardRadio">
                        <div class="left">
                          <p>Credit Card</p>
                        </div>
                        <div class="right">
                          <img src="images/cards.png" srcset="images/cards@2x.png 2x, images/cards@3x.png 3x"
                            alt="cards" class="img-fluid" />
                          <span>and more...</span>
                        </div>
                      </label>
                    </div>
                  </div>

                  <div class="payment-section-body">
                    <div class="input_wrap">
                      <input type="tel" name="creditCardNumber" id="card_number" class="required form-control"
                        maxlength="16" data-error-message="Please enter a valid credit card number!"
                        onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');">
                      <label>Card number</label>
                      <a href="javascript:void(0)" id="cardNumber" class="has-tooltip1"
                        aria-label="All transactions are secure and encrypted."><img src="images/card-no-info.png"
                          srcset="images/card-no-info@2x.png 2x, images/card-no-info@3x.png 3x" alt="card-no-info"
                          class="img-fluid"></a>
                    </div>

                    <div class="expiration-security">
                      <div class="input_wrap">
                        <select name="expmonth" class="form-control required"
                          data-error-message="Please select a valid expiry month!" id="card_exp_month">
                          <option value="">Month</option>
                          <?php
                            // Array of month names
                            $months = [
                                '01' => 'January',
                                '02' => 'February',
                                '03' => 'March',
                                '04' => 'April',
                                '05' => 'May',
                                '06' => 'June',
                                '07' => 'July',
                                '08' => 'August',
                                '09' => 'September',
                                '10' => 'October',
                                '11' => 'November',
                                '12' => 'December'
                            ];

                            $currentMonth = date('m'); // e.g. 10 for October

                            foreach ($months as $num => $name) {
                                $selected = ($num === $currentMonth) ? 'selected' : '';
                                echo "<option value='{$num}' {$selected}>({$num}) {$name}</option>";
                            }
                        ?>
                        </select>
                      </div>
                      <div class="input_wrap">
                        <select name="expyear" class="form-control required"
                          data-error-message="Please select a valid expiry year!" id="card_exp_year">
                          <option value="">Year</option>
                          <?php
                                $currentYear = date('Y');
                                $endYear = $currentYear + 20;
                                for ($y = $currentYear; $y <= $endYear; $y++) {
                                    $short = substr($y, -2);
                                    echo "<option value='{$short}'>{$y}</option>";
                                }
                            ?>
                        </select>
                      </div>

                      <div class="input_wrap">
                        <input type="tel" onKeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');"
                          name="CVV" id="card_cvv" class="required form-control" data-validate="cvv" maxlength="3"
                          data-error-message="Please enter a valid CVV code!">
                        <label>Security code</label>
                        <a href="javascript:void(0)" id="securityCode" class="has-tooltip2"
                          aria-label="3-digit security code usually found on the back of your card. American Express cards have a 4-digit code located on the front."><img
                            src="images/security-code-question.png"
                            srcset="images/security-code-question@2x.png 2x, images/security-code-question@3x.png 3x"
                            alt="security-code-question" class="img-fluid"></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="billing-address-section">
                  <div class="/checkout0/app/desktop/js_choose_billing" style="display:none;">
                    <div class="w_radio">
                      <input type="radio" id="radio_same_as_shipping" name="billingSameAsShipping" value="yes"
                        checked="checked">
                      <label for="radio_same_as_shipping">
                        Billing Address same as Shipping
                      </label>
                      <i class="icon-check"></i>
                    </div>
                    <div class="w_radio">
                      <input type="radio" id="radio_different_shipping" name="billingSameAsShipping" value="no">
                      <label for="radio_different_shipping">
                        Billing Address different as Shipping
                      </label>
                      <i class="icon-check"></i>
                    </div>
                  </div>
                  <div class="billing-address-head">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="sameShippingBilling"
                        name='billShipSame' checked>
                      <label class="form-check-label" for="sameShippingBilling">
                        Use shipping address as billing address
                      </label>
                    </div>
                  </div>


                  <div class="billing-address-body">
                    <h4 class="billing-address">Billing address</h4>
                    <p class="enter-your-billing-details">Enter your billing details</p>

                    <!--div class="input_wrap">
                        <input type="email" name="" id="" class="form-control">
                        <label>Email address</label>
                      </div-->

                    <div class="first-last-name">
                      <div class="input_wrap">
                        <input type="text" spellcheck="false" autocorrect="off" name="billingFirstName"
                          id="inputFirstName" class="form-control remove-class-billing"
                          data-error-message="Please enter your billing first name!" value="">
                        <label>First name</label>
                      </div>

                      <div class="input_wrap">
                        <input type="text" spellcheck="false" autocorrect="off" name="billingLastName"
                          id="billingLastName" class="form-control remove-class-billing"
                          data-error-message="Please enter your billing last name!" value="">
                        <label>Last name</label>
                      </div>
                    </div>

                    <div class="input_wrap country-wrap country-wrap2">
                      <select id="billing_country"
                        class="field-all billing-country remove-class-billing form-select form-control"
                        name="billingCountry" data-error-message="Please select your  billing Country!"
                        data-selected="US" required style="border-radius:4px">
                        <option value="US">United States</option>
                      </select>
                      <label>Country/Region</label>
                    </div>



                    <div class="input_wrap">
                      <input type="text" spellcheck="false" autocorrect="off" name="billingAddress1"
                        id="inputBillingAddress" class="form-control remove-class-billing"
                        data-error-message="Please enter your billing address!" value="">
                      <label>Enter your address here</label>
                      <a href="javascript:void(0)" class="search_bar" id="billingAddressSearch"><img
                          src="images/search.png" srcset="images/search@2x.png 2x, images/search@3x.png 3x" alt="star"
                          class="img-fluid"></a>
                    </div>

                    <!--------------Added field------------------>
                    <div class="row after-sec">
                      <div class="col-md-4">
                        <div class="input_wrap bill_show_case" style="display:block;">
                          <input type="text" spellcheck="false" autocorrect="off" name="billingCity" id="inputCity"
                            class="form-control remove-class-billing"
                            data-error-message="Please enter your billing city!" value="">
                          <label>Billing City</label>
                        </div>


                      </div>
                      <div class="col-md-4">
                        <div class="input_wrap bill_show_case country-wrap" style="display:block;">
                          <input type="text" name="billingState" class="form-control remove-class-billing"
                            data-error-message="Please select your billing state!" data-selected="" />
                          <label>Billing State</label>
                        </div>


                      </div>
                      <div class="col-md-4">

                        <div class="input_wrap bill_show_case" style="display:block;">
                          <input type="tel" name="billingZip" id="inputBillingZip" pattern="[0-9-]*"
                            onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" maxlength="5"
                            class="form-control remove-class-billing"
                            data-error-message="Please enter a valid billing zip code!" value="">
                          <label>Billing Zip</label>
                        </div>

                      </div>

                    </div>


                    <!-------------------------------->




                    <!------------------------>

                    <!------------------------>
                  </div>
                </div>

                <button type="submit" class="checkout-form-submit payment-btn-spinner">
                  <span class="btn-text">COMPLETE YOUR SECURE PURCHASE</span>
                  <span class="spinner" style="display:none;"></span>
                </button>
              </form>
              <div class="ssl-safe-section">
                <div class="inner-section">
                  <img src="images/secure.png" srcset="images/secure@2x.png 2x, images/secure@3x.png 3x" alt="secure"
                    class="img-fluid">
                  <h5><span>SECURE</span><span>SSL ENCRYPTION</span></h5>
                </div>

                <div class="inner-section">
                  <img src="images/safe.png" srcset="images/safe@2x.png 2x, images/safe@3x.png 3x" alt="safe"
                    class="img-fluid">
                  <h5><span>GUARANTEED</span><span>SAFE CHECKOUT</span></h5>
                </div>
              </div>

              <div class="bundle-of-cards">
                <img src="images/bundle-cards.png" srcset="images/bundle-cards@2x.png 2x, images/bundle-cards@3x.png 3x"
                  alt="bundle-of-cards" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="right">
              <div class="right-top">
                <h4 class="your-cart">Your Cart</h4>

                <div class="star-happyCustomer">
                  <img src="images/rating-star.png" srcset="images/rating-star@2x.png 2x, images/rating-star@3x.png 3x"
                    alt="rating-star" class="img-fluid">
                  <h5>26,983+ Happy Customers</h5>
                </div>

                <p class="checkout-page-cart-product-title">Protect and Prolong the Life of Your Appliances &
                  Electronics..</p>

                <div class="checkout-page-cart-product-section">
                  <img src="images/checkout-page-cart-product.png"
                    srcset="images/checkout-page-cart-product@2x.png 2x, images/checkout-page-cart-product@3x.png 3x"
                    alt="checkout-page-cart-product" class="img-fluid">
                </div>

                <div class="checkout-page-cart-price-section">
                  <ul>
                    <li>
                      <p><span>Item</span></p>
                      <p><span>Amount</span></p>
                      <span data-next-display="cart.couponCount"></span>
                    </li>

                    <li>
                      <p><span class="qty_s" id="qty" data-next-display="selection.button-selector.name">2x Extreme Power Saver</span></p>
                      <p class="price_s" data-next-display="selection.button-selector.total">$138.00</p>
                    </li>

                    <li>
                      <p class="ship_name">Shipping</p>
                      <p><span class="org shipping_price">FREE</span></p>
                    </li>

                    <li>
                      <p><span>Today you saved</span></p>
                      <p>Discount: <span class="org save_price" data-next-display="selection.button-selector.savingsAmount">$176.00</span></p>
                    </li>

                    <li>
                      <p>Grand Total: <span class="total_price" data-next-display="selection.button-selector.total">$138.00</span></p>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="right-bottom">
                <div class="right-bottom-image">
                  <img src="images/money-back-bottom.png"
                    srcset="images/money-back-bottom@2x.png 2x, images/money-back-bottom@3x.png 3x"
                    alt="money-back-bottom" class="img-fluid" />
                </div>
                <div class="right-bottom-text">
                  <p><span>90 Days Money-Back Guarantee:</span> Feel safe knowing you are protected with a 90 day
                    guarantee. Simply send the item(s) back in the original packaging to receive a full refund or
                    replacement, less S&H.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>

  <footer>
    <p>&copy;2025 Copyright Extreme Power Saver - All rights reserved.</p>
    <ul>
      <li><a href="#" target="_blank">Contact Us</a></li>
      <li><a href="#" target="_blank">Terms of Use</a></li>
      <li><a href="#" target="_blank">Privacy Policy</a></li>
    </ul>
  </footer>

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
  <!-- Custom JS link -->
  <script src="js/custom.js?v=1862084479"></script>
    <script>

    $(document).ready(function () {
      const urlParams = new URLSearchParams(window.location.search);
      const unitParam = urlParams.get('unit');
      //alert(unitParam);
      // alert(`#product${unitParam}`);
      if (unitParam) {
        $('.radio-section').removeClass("dispop")
        $(`#product${unitParam}`).parent('li').addClass("order1 dispop")
        $(`#product${unitParam}`).trigger('click');
      } else {
        $("#product2").trigger('click');
      }
    });

    // $("#inputAddress").change(function () {
    //   var add = $(this).val();
    //   if (add.length >= 1) {
    //     $("#inputZip").addClass('has-value');
    //   } else {
    //     $("#inputZip").removeClass('has-value');
    //   }
    // });

    // $('#inputAddress').on('change', function () {
    //   $(".show_case").css('display', 'block')
    // });

    $('#inputBillingAddress').on('change', function () {
      $(".bill_show_case").css('display', 'block')
    });

    // $("#inputBillingAddress").change(function () {
    //   var add = $(this).val();
    //   if (add.length >= 1) {
    //     $("#inputBillingZip").addClass('has-value');
    //   } else {
    //     $("#inputBillingZip").removeClass('has-value');
    //   }
    // });

    $("#sameShippingBilling").change(function () {
      if ($("#sameShippingBilling").is(':checked')) {
        $('input[name="billingSameAsShipping"]').filter('[value="yes"]').prop('checked', true).trigger('change');
        $(".remove-class-billing").removeClass('required');
      } else {
        $('input[name="billingSameAsShipping"]').filter('[value="no"]').prop('checked', true).trigger('change');
        $(".remove-class-billing").addClass('required');
      }

    });

    // $(".paypal-button").on('click', function () {
    //   window.dataLayer = window.dataLayer || [];
    //   window.dataLayer.push({ 'event': 'pay_with_paypal_cta' })
    //   $('.remove-class-billing').removeClass('required');
    //   $('.c-details').removeClass('required');
    //   $('select[name=creditCardType]').val('paypal').trigger('change');
    //   $('.checkout-form-submit').hide();
    //   $("form").submit();
    // });

    // $(".checkout-form-submit").on('click', function () {
    //   setTimeout(function () {
    //     if ($('input').hasClass('has-error') && $('select').hasClass('has-error')) {
    //       $('html, body').animate({
    //         scrollTop: $("input.has-error").offset().top - 15
    //       }, 500);
    //     } else if (!$('input').hasClass('has-error') && $('select').hasClass('has-error')) {
    //       $('html, body').animate({
    //         scrollTop: $("select.has-error").offset().top - 15
    //       }, 500);
    //     } else if ($('input').hasClass('has-error') && !$('select').hasClass('has-error')) {
    //       $('html, body').animate({
    //         scrollTop: $("input.has-error").offset().top - 15
    //       }, 500);
    //     }
    //   }, 500);
    // })

    $('#radio_same_as_shipping').change(function () {
      if (this.checked) {
        $('.js_choose_billing').hide();
      }
      else {
        $('.js_choose_billing').show();
      }
    });

    $("#shippingAddressSearch").click(function () {
      $("#inputAddress").focus();
    });

    $(".search_bar").click(function () {
      $("#inputBillingAddress").focus();
    });
    var pro_sel = 0;
    /*$(".radio-section").click(function () {
      console.log('hi');
      pro_sel++;
      if (pro_sel >= 2) {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ 'event': 'select_item' });
      }
      var camp = $(this).attr('data-campaigns');
      var proname = $(this).attr('data-name');
      var price = $(this).attr('data-price');
      var shipprice = $(this).attr('data-ship');
      var orgprice = $(this).attr('data-regPrice');
      var discount = $(this).attr('data-package-discount');
      $(this).closest(".form-check-input").trigger('click');
      var shipping = '';
      if (shipprice == '0.00') {
        shipping = 'FREE';
        $(".ship_name").html('Shipping');
      } else {
        shipping = '';
        $(".ship_name").html('Shipping and tax will be settled upon checkout confirmation');
      }
      $('.save_price').html('$' + Number(orgprice - price).toFixed(2));
      $("#disc_per").html(discount)
      $('#campaign_id').val(camp);
      $(".qty_s").text(proname);
      $(".price_s").html('$' + price);
      $(".shipping_price").html(shipping);
      var totalAmount = (Number(price) + Number(shipprice)).toFixed(2);
      $(".total_price").html('$' + (Number(price)).toFixed(2));
      // $("#loading-indicator").show();
    });*/

    $('#innerButton1').click(function () {
      discountTimes = 0;
      window.dataLayer = window.dataLayer || [];
      // window.dataLayer.push({'event': 'Exit_Pop_Take'});
      window.dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
      window.dataLayer.push({
        event: "Exit_Pop_Take",
        ecommerce: {
          creative_name: "Popup Checkout Banner",
          promotion_id: "10OFF",
          promotion_name: "Autumn Sale"
        }
      });
      if ($('#coupon_custom').val() == '2OFF' || $('#coupon_custom').val() == '12OFF') {
        $("#coupon_code").val("12OFF");
        $('#coupon_custom').val('12OFF');
        maximumOff(12);
      }
      else {
        $("#coupon_code").val("10OFF");
        $('#coupon_custom').val('10OFF');
        maximumOff(10);
      }
    });


    $(document).on('mouseleave', leaveFromTop);
    discountTimes = 1;
    function leaveFromTop(e) {
      if (e.clientY < 0) {
        if (discountTimes != 0) {
          $('#leaveFade, #leavePop1').show();
          $('#timeInit').click();
          $('#timeInit').remove();
        }
      }
    }

    function leaveFromTop1(e) {
      if (discountTimes != 0) {
        $('#leaveFade, #leavePop1').show();
        $('#timeInit').click();
        $('#timeInit').remove();
      }
    }

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      $(document).ready(function () {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function () {
          leaveFromTop1();
          window.history.pushState(null, "", window.location.href);
        };

      });
    }

    $('#leaveX1, #leaveX2').click(function () {
      $('#leaveFade').fadeOut();
      setTimeout(function () {
        $('#leaveFade').hide();
      }, 700);
      discountTimes = 0;
    });

    function startTimer() {
      var presentTime = $("#timeCount").text();
      var timeArray = presentTime.split(/[:]+/);
      var m = timeArray[0];
      var s = checkSecond((timeArray[1] - 1));
      if (s == 59) {
        m = m - 1
      }
      if (m < 0) {
        $('#leaveFade').fadeOut();
        setTimeout(function () {
          $('#leaveFade').hide();
        }, 700);
        discountTimes = 0;
      }
      $("#timeCount").text(m + ":" + s);
      setTimeout(startTimer, 1000);
    }

    function checkSecond(sec) {
      if (sec < 10 && sec >= 0) {
        sec = "0" + sec
      };
      if (sec < 0) {
        sec = "59"
      };
      return sec;
    }

    $('#timeInit').click(function () {
      $("#timeCount").text('05' + " : " + '00');
      timer();
    });

    $('#leaveX1, #leaveX2').click(function () {
      $('#leaveFade').fadeOut();
      setTimeout(function () {
        $('#leaveFade').hide();
      }, 700);
      discountTimes = 0;
    });


    function timer() {
      var min = 0x5;
      var seconds = 0o0;
      var displayMin = "05";
      var displaySeconds = "00";

      document.getElementById("popTimer").innerHTML = "<div><span>" + displayMin + "</span> : <span>" + displaySeconds + "</span></div>";

      var time = setInterval(function () {
        if (seconds != 0) {
          seconds -= 1;
        }

        if (seconds == 0 && min > 0) {
          seconds = 59;
          min -= 1;
        }

        if (min >= 0 && min <= 9) {
          displayMin = "0" + min;
        } else {
          displayMin = min;
        }


        if (seconds >= 0 && seconds <= 9) {
          displaySeconds = "0" + seconds;
        } else {
          displaySeconds = seconds;
        }

        if (min == 0 && seconds == 0) {
          document.getElementById("leaveFade").style.display = "none";
          clearInterval(sessionStorage.getItem('timer'));
        }

        document.getElementById("popTimer").innerHTML = "<div><span>" + displayMin + "</span> : <span>" + displaySeconds + "</span></div>";
      }, 1000);

      sessionStorage.setItem("timer", time);


    }
  </script>

  <script>
    // Wait for SDK to be fully initialized
    window.addEventListener('next:initialized', function() {
      console.log('SDK initialized, starting FOMO popups...');
      next.fomo();

      next.exitIntent({
        image: 'https://cdn.prod.website-files.com/68106277c04984fe676e423a/6823ba8d65474fce67152554_exit-popup1.webp',
        action: async () => {
          console.log('✅ Exit intent triggered');
          const result = await next.applyCoupon('SAVE10');
          console.log('Coupon result:', result);
          if (result.success) {
            alert('Coupon applied successfully: ' + result.message);
          } else {
            alert('Coupon failed: ' + result.message);
          }
        }
      });

      next.on('exit-intent:shown', (data) => {
          console.log('Exit intent popup shown:', data);
        });

        next.on('exit-intent:clicked', (data) => {
          console.log('Exit intent popup clicked:', data);
        });

        next.on('exit-intent:dismissed', (data) => {
          console.log('Exit intent popup dismissed:', data);
        });
    });
    // Control functions
    function startFomo() {
      next.fomo({
        initialDelay: 2000, // Start after 2 seconds
        displayDuration: 5000, // Show for 5 seconds
        delayBetween: 10000 // 10 seconds between popups
      });
    }

    function stopFomo() {
      next.stopFomo();
    }
    // Custom configuration example
    function customFomo() {
      next.fomo({        
        maxMobileShows: 3, // Show max 3 times on mobile
        displayDuration: 4000,
        delayBetween: 15000,
        initialDelay: 0 // Start immediately
      });
    }
  </script>
  
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function () {
  const $form = $("#checkoutForm");

  $(document).on("click", "button[type='submit']", async function (e) {
    e.preventDefault();
    // console.log("✅ Form submit triggered");

    const $submitBtn = $(this);
    $submitBtn.prop("disabled", true).html('<span class="spinner"></span> Processing...');

    let isValid = true;

    // Remove old errors
    $(".next-error-label").remove();
    $(".has-error").removeClass("has-error");

    // ==============================
    // 🔍 VALIDATE SHIPPING FIELDS
    // ==============================
    $form.on("keyup change blur", ".required, [data-next-field]", function () {
      validateField($(this));
    });
    $form.find(".required, [data-next-field]").each(function () {
      if (!validateField($(this))) {
        isValid = false;
      }
    });
    function validateField($field) {
      const tag = $field.prop("tagName").toLowerCase();
      let value = $.trim($field.val());
      if (tag === "select") {
        value = $field.find("option:selected").val();
      }

      const fieldName = $field.attr("data-next-field") || $field.attr("name");
      const errorMessage = $field.data("error-message") || "This field is required";
      let fieldValid = true;

      // ✅ Required check
      if (!value) fieldValid = false;

      // ✅ Email validation
      if (fieldValid && $field.data("validate") === "email") {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) fieldValid = false;
      }

      // ✅ Phone validation (10–15 digits)
      if (fieldValid && $field.data("validate") === "phone") {
        const phoneRegex = /^[0-9]{10,15}$/;
        if (!phoneRegex.test(value)) fieldValid = false;
      }

      // ✅ Zip code validation (5–6 digits)
      if (fieldValid && fieldName?.includes("zip")) {
        const zipRegex = /^[0-9]{5,6}$/;
        if (!zipRegex.test(value)) fieldValid = false;
      }

      // ✅ Remove previous error if now valid
      const $wrap = $field.closest(".input_wrap");
      if (fieldValid) {
        $field.removeClass("has-error");
        $wrap.find(".next-error-label").remove();
      } else {
        // ❌ If invalid — show error (only if not already shown)
        if ($wrap.find(".next-error-label").length === 0) {
          addError($field, errorMessage);
        }
      }

      return fieldValid;
    }

    // ==============================
    // 💳 VALIDATE CREDIT CARD FIELDS
    // ==============================
    const $cardNumber = $("#card_number");
    const $cardMonth = $("#card_exp_month");
    const $cardYear = $("#card_exp_year");
    const $cardCVV = $("#card_cvv");

    const number = $.trim($cardNumber.val());
    const month = $.trim($cardMonth.val());
    const year = $.trim($cardYear.val());
    const cvv = $.trim($cardCVV.val());

    function luhnCheck(num) {
      const arr = (num + "")
        .split("")
        .reverse()
        .map((x) => parseInt(x));
      const lastDigit = arr.shift();
      let sum = arr.reduce(
        (acc, val, i) =>
          acc + (i % 2 === 0 ? (val * 2 > 9 ? val * 2 - 9 : val * 2) : val),
        0
      );
      sum += lastDigit;
      return sum % 10 === 0;
    }

    // ✅ Card number
    if (!number || !/^\d{13,19}$/.test(number) || !luhnCheck(number)) {
      isValid = false;
      addError($cardNumber, "Please enter a valid card number");
    }

    // ✅ Expiry month/year
    const currentYear = new Date().getFullYear();
    const currentMonth = new Date().getMonth() + 1;
    const expYear = parseInt(year.length === 2 ? "20" + year : year, 10);
    const expMonth = parseInt(month, 10);

    if (!(expMonth >= 1 && expMonth <= 12)) {
      isValid = false;
      addError($cardMonth, "Please enter a valid month (01–12)");
    }

    if (expYear < currentYear || (expYear === currentYear && expMonth < currentMonth)) {
      isValid = false;
      addError($cardMonth, "Card has expired");
      addError($cardYear, "Card has expired");
    }

    // ✅ CVV
    if (!/^\d{3,4}$/.test(cvv)) {
      isValid = false;
      addError($cardCVV, "Please enter a valid CVV");
    }

    // ==============================
    // 🚫 STOP IF INVALID
    // ==============================
    if (!isValid) {
      // console.log("❌ Validation failed");
      const $firstError = $form.find(".has-error").first();
      if ($firstError.length) {
        $("html, body").animate(
          { scrollTop: $firstError.offset().top - 100 },
          500
        );
      }
      $submitBtn.prop("disabled", false).html('<span class="btn-text">COMPLETE YOUR SECURE PURCHASE</span><span class="spinner" style="display:none;"></span>');

      return;
    }

    console.log("✅ Validation passed — creating payload...");

    let baseURL = window.location.origin + "/29nextPOC/";

    const ipData = await fetch("https://ipapi.co/json/").then((res) => res.json());

    // ---- 📱 Normalize Phone Number to E.164 ----
    let phone = $("#inputPhone").val().trim();
    phone = phone.replace(/[\s\-()]/g, "");
    if (!phone.startsWith("+")) {
      phone = "+1" + phone;
    }

    const e164Regex = /^\+[1-9]\d{6,14}$/;
    if (!e164Regex.test(phone)) {
      addError($("#inputPhone"), "Please enter a valid phone number");
      $submitBtn.prop("disabled", false)
        .html('<span class="btn-text">COMPLETE YOUR SECURE PURCHASE</span><span class="spinner" style="display:none;"></span>');
      return;
    }

    // ✅ Build payload
    const payload = {
      user: {
        first_name: $("#inputFirstName").val(),
        last_name: $("#inputLastName").val(),
        email: $("#inputEmail").val(),
        accepts_marketing: true,
        ip: ipData.ip || "unknown",
        user_agent: navigator.userAgent,
        language: "en",
      },
      lines: [
        {
          package_id: parseInt($("[data-selected-package]").attr("data-selected-package") || "0", 10),
          quantity: 1,
          is_upsell: false,
        },
      ],
      shipping_address: {
        first_name: $("#inputFirstName").val(),
        last_name: $("#inputLastName").val(),
        line1: $("#inputAddress").val(),
        line4: $("#inputAddress").val(),
        city: $("#inputCity").val() || "",
        state: $("select[name='state']").val() || "",
        postcode: $("#inputZip").val(),
        phone_number: phone,
        country: $("#country-select").val() || "US",
        is_default_for_shipping: false,
        is_default_for_billing: false,
      },
      billing_same_as_shipping_address: true,
      payment_detail: {
        payment_method: "card_token",
        card_token: "test_card", // Replace with real token from SDK
      },
      shipping_method: 1,
      success_url: baseURL + "upsell1.php" + window.location.search,
      payment_failed_url: baseURL,
      attribution: {},
      currency: "USD",
      use_default_billing_address: false,
      use_default_shipping_address: false,
      vouchers: ["SAVE10"],
      notes: "Test order " + new Date().toISOString(),
    };

    console.log("🧠 Creating cart...");

    const cartId = await createCart(payload);

    if (cartId) {
      console.log("🧾 Proceeding to create order...");
      await createOrder(cartId, payload);
    } else {
      console.error("Cart creation failed, please try again.");
    }

    $submitBtn.prop("disabled", false)
      .html('<span class="btn-text">COMPLETE YOUR SECURE PURCHASE</span><span class="spinner" style="display:none;"></span>');
  });

  // ==============================
  // 🧱 Helper: Add Error Label
  // ==============================
  function addError($field, message) {
    $field.addClass("has-error");
    const $wrap = $field.closest(".input_wrap");
    if ($wrap.find(".next-error-label").length === 0) {
      $wrap.append(
        $("<div>", {
          class: "next-error-label",
          role: "alert",
          "aria-live": "polite",
          text: message,
        })
      );
    }
  }

  // ==============================
  // 🛒 Create Cart
  // ==============================
  async function createCart(payload) {
    try {
      const res = await fetch("https://campaigns.apps.29next.com/api/v1/carts/", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "Authorization": "<?php echo $campaignApiKey;?>",
        },
        body: JSON.stringify(payload),
      });

      const result = await res.json();
      console.log("🛒 Cart response:", result);

      if (res.ok && result.checkout_url) {
        console.log("✅ Cart created successfully!");
        return result.checkout_url;
      } else {
        console.warn("❌ Cart creation failed!", result);
        return null;
      }
    } catch (err) {
      console.error("Cart API error:", err);
      return null;
    }
  }

  // ==============================
  // 📦 Create Order
  // ==============================
  async function createOrder(cartId, payload) {
    try {
      payload.cart_id = cartId;
      const res = await fetch("https://campaigns.apps.29next.com/api/v1/orders/", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "Authorization": "<?php echo $campaignApiKey;?>",
        },
        body: JSON.stringify(payload),
      });

      const result = await res.json();
      console.log("✅ Order result:", result);

      if (res.ok && result.number) {
        const hasQuery = payload.success_url.includes("?");
        const separator = hasQuery ? "&" : "?";
        sessionStorage.setItem("ref_id", result.ref_id);
        const redirectUrl = `${payload.success_url}${separator}order_id=${encodeURIComponent(
          result.number
        )}`;
        window.location.href = redirectUrl;
      }
      
      if (result.payment_complete_url) {
        window.location.href = result.payment_complete_url;
      }

      if (result.shipping_address) {
      // Handle phone error
      if (result.shipping_address.phone_number) {
        const msg = result.shipping_address.phone_number[0];
        const $phoneField = $("#inputPhone");
        $(".next-error-label").remove(); // remove old
        $(".has-error").removeClass("has-error");
        addError($phoneField, msg);
        $("html, body").animate({ scrollTop: $phoneField.offset().top - 100 }, 500);
        return;
      }
    } 
      console.warn("Order could not be created:", result || "Unknown error");
      
    } catch (err) {
      console.error("Order API error:", err);
      // alert("Something went wrong while placing your order. Please try again.");
    } finally {
    // Re-enable the button after all cases
    $("button[type='submit']")
      .prop("disabled", false)
      .html('<span class="btn-text">COMPLETE YOUR SECURE PURCHASE</span><span class="spinner" style="display:none;"></span>');
    }
  }
});
</script>

</body>

</html>