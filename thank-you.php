
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
<html>

<head>
    <title>Extreme Power Saver</title>
    <meta charset="utf-8" />

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
    };
</script>
    <!-- Load SDK -->
<script src="https://campaign-cart-v2.pages.dev/loader.js"></script>

<!-- Campaign API Key -->
<meta name="next-api-key" content="<?php echo $campaignApiKey;?>">

<!-- Next URL After order complete (normally on checkout pages) -->
<meta name="next-debug" content="true">


    <link rel="stylesheet" href="css/app2.css?v=1784252353" />


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png?v=2.36">
    <link href="css/thank-you.css?v=451739739" rel="stylesheet" />
</head>

<body>
    <div id="header1">
        <div id="inner1">
            <img src="images/logo.png?v=2.36" width="100%" />
        </div>
    </div>
    <div id="text1">Congrats - Order Complete!</div>
    <div id="text2">You will receive an order confirmation email from us.<br />If you do not see it in your inbox, please check your spam folder.
    </div>
    <div id="mainBox">
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin-top: 10px; margin-bottom:20px; color: #020052; width: 100%;">
            <tbody style="padding:15px;">
                <tr>
                    <td valign="top" align="center" colspan="3">
                        <div style="font-size: 25px;font-weight:500; padding: 5px; margin-bottom: 10px;background-color: #00b5b0; color:#FFF">
                            EXCLUSIVE HOT DEALS
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" align="center" style="padding-right: 2px" width="33%">
                        <a href="#" target="blank" style="text-decoration:none;">
                            <div style="background-color: #00b5b0; padding-bottom:5px">
                                <img src="images/glasses.jpg">
                                <span style="font-weight:700;color:#fff;font-size:12px">ADJUSTABLE FOCUS GLASSES</span><br>
                                <span style="font-weight:700;color:#fff;font-size:18px">60% OFF</span>
                            </div>
                        </a>
                    </td>
                    <td valign="top" align="center" style="padding-right: 1px; padding-left:1px" width="33%">
                        <a href="#" target="blank" style="text-decoration:none;">
                            <div style="background-color: #00b5b0; padding-bottom:5px">
                                <img src="images/drone.jpg">
                                <span style="font-weight:700;color:#fff;font-size:12px">4K HI-TECH FLY DRONE</span><br>
                                <span style="font-weight:700;color:#fff;font-size:18px">60% OFF</span>
                            </div>
                        </a>
                    </td>
                    <td valign="top" align="center" style="padding-left:2px" width="33%">
                        <a href="#" target="blank" style="text-decoration:none;">
                            <div style="background-color: #00b5b0; padding-bottom:5px">
                                <img src="images/heater.jpg">
                                <span style="font-weight:700;color:#fff;font-size:12px;">SMART PORTABLE HEATER</span><br>
                                <span style="font-weight:700;color:#fff;font-size:18px">60% OFF</span>
                            </div>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="title1">
            <div id="logo1">
                <img src="images/pin.svg" width="100%" />
            </div>
            <div id="line1">Your order will Ship to:</div>
            <div class="clear"></div>
        </div>
        <div id="ship2"></div>
        <div id="title1">
            <div id="logo1">
                <img src="images/check.png" width="100%" />
            </div>
            <div id="line1">Your Product Receipt:</div>
            <div class="clear"></div>
        </div>
        <div id="ship2">
            Order Number: #<span id="orderid"></span>
        </div>
        <div id="tableStyles">
            <table class="kthanksItemsTable table">
                <thead>
                    <tr>
                        <th style="width: 56%; text-align: left;padding:0 5px;">Product</th>
                        <th style="text-align:right;padding:0 5px;">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="kthanks_row">
                        <td id="orderName"></td>
                        <td id="price"></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div id="totalText2a">
            <div class="pullLeft">Subtotal</div>
            <div class="pullRight">$0.00</div>
            <div class="clear"></div>
        </div>
        <div id="totalText2b">
            <div class="pullLeft">Shipping</div>
            <div class="pullRight" id="shippingPrice">$0.00</div>
            <div class="clear"></div>
        </div>
        <div id="totalText2c" style="display:none">
            <div class="pullLeft">Discount</div>
            <div class="pullRight" id="discountPrice">$0.00</div>
            <div class="clear"></div>
        </div>
        <div id="totalText2">
            <div class="pullLeft">Total</div>
            <div class="pullRight">
                <strong>$0.00</strong>
            </div>
            <div class="clear"></div>
        </div>
        <div id="title2" style="background-color:#43B4FD; color:#fff">
            <div id="logo2">
                <img src="images/check.png" width="100%">
            </div>
            <div id="line2" style="color:#fff"> Congratulations! You've earned an exclusive GIFT CARD</div>
            <div class="clear"></div>
        </div>

        <div id="giftBlock">
            <div id="giftIcon">
                <img src="images/gift.png" width="100%">
            </div>
            <div id="giftText">
                <div id="gift2">Look out for your <strong>EXCLUSIVE GIFT CARD</strong> in your email to use on our #1 online store for consumer goods, health, fitness goods, and so much more!
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="title2">
            <div id="logo2">
                <img src="images/check.png" width="100%">
            </div>
            <div id="line2">Feel free to email or call us with any questions:</div>
            <div class="clear"></div>
        </div>
        <br />
    </div>
    <div id="footerText">Copyright <?php echo date('Y');?> - <b>Extreme Power Saver</b> - All Rights Reserved</div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script>
            $(document).ready(function () {
                (async () => {
                const ref_id = sessionStorage.getItem("ref_id");
                if (!ref_id) {
                    console.warn("No ref_id found in sessionStorage!");
                    return;
                }
                try {
                    const res = await fetch('https://campaigns.apps.29next.com/api/v1/orders/' + ref_id + '/', {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "<?php echo $campaignApiKey;?>"
                    },
                    });

                    const result = await res.json();
                    // console.log("ThankYou Response:", result);

                    if (res.ok && result.number) {
                        // console.log("Order found:", result.number);
                        $("#orderid").text(result.number);
                         const discount = result.discounts && result.discounts.length > 0 ? parseFloat(result.discounts[0].amount || 0): 0;
                         if(result.discounts && result.discounts.length > 0){
                            $("#totalText2c").show();
                         }
                         let subtotal = parseFloat(result.total_incl_tax || 0) + discount;
                         const shipping = parseFloat(result.shipping || 0);
                         const tbody = $(".kthanksItemsTable tbody");
                         tbody.empty();
                         
                         
                         result.lines.forEach(line => {
                            const productName = `${line.product_title} x ${line.quantity}`;
                            const productPrice = (parseFloat(line.price_excl_tax_excl_discounts) || 0).toFixed(2);

                            const row = `
                                <tr class="kthanks_row">
                                    <td id="orderName">${productName}</td>
                                    <td id="price">$${productPrice}</td>
                                </tr>
                            `;
                            tbody.append(row);
                        });
                        
                        const total = subtotal + shipping - discount;
                        const formattedSubtotal = subtotal.toFixed(2);
                        const formattedShipping = shipping ? shipping.toFixed(2) : "0.00";
                        const formattedDiscount = discount.toFixed(2);
                        const formattedTotal = total.toFixed(2);
                        $("#totalText2a .pullRight").text(`$${formattedSubtotal}`);
                        $("#shippingPrice").text(`$${formattedShipping}`);
                        $("#discountPrice").text(`$${formattedDiscount}`);
                        $("#totalText2 .pullRight strong").text(`$${formattedTotal}`);

                        if (result.shipping_address) {
                            const ship = result.shipping_address;
                            const formattedShipping = `
                                ${ship.first_name || ''} ${ship.last_name || ''}<br>
                                ${ship.line1 || ''}${ship.line2 ? ', ' + ship.line2 : ''}<br>
                                ${ship.line4 || ''}, ${ship.state || ''}<br>
                                ${ship.country || ''}, ${ship.postcode || ''}<br>
                            `;
                            $("#ship2").html(formattedShipping);
                        }
                    } else {
                        console.warn("⚠️ No valid order response:", result);
                    }
                } catch (err) {
                    console.log(err);                    
                }
                })();
            });
</script>
</body>

</html>