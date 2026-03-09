@include('layouts.user.thank-you-header')
@php
    $shipName = $shippingAddress['name'] ?? '';
    $shipAddress1 = $shippingAddress['address1'] ?? '';
    $shipAddress2 = $shippingAddress['address2'] ?? '';
    $shipCity = $shippingAddress['city'] ?? '';
    $shipState = $shippingAddress['state'] ?? '';
    $shipCountry = $shippingAddress['country'] ?? '';
    $shipZip = $shippingAddress['zip'] ?? '';

    $billName = $billingAddress['name'] ?? '';
    $billAddress1 = $billingAddress['address1'] ?? '';
    $billAddress2 = $billingAddress['address2'] ?? '';
    $billCity = $billingAddress['city'] ?? '';
    $billState = $billingAddress['state'] ?? '';
    $billCountry = $billingAddress['country'] ?? '';
    $billZip = $billingAddress['zip'] ?? '';
@endphp

<div class="overlay"></div>

<header>
    <div class="container">
        <div class="row">
            <div class="logo">
                <img src="{{ asset('thank-you/images/logo.png') }}" class="img-fluid" width="180" alt="Logo">
            </div>
        </div>
    </div>
</header>

<div class="blue-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="blue-sec-text">
                    <h2>
                        <img src="{{ asset('thank-you/images/Vector_w.png') }}" class="img-fluid vctr" alt="Check">
                        Thank you! Your order has been placed.
                    </h2>
                    <p>Your order number is {{ $orderNumber ?: 'N/A' }}. We will pack your order and ship it to you right away. You will receive an email confirmation shortly at {{ $email ?: 'N/A' }}. Please print this page for your records.</p>
                </div>

                <div class="white-sec">
                    <p class="text-center mb-4" style="font-weight:700; color:#f22c2c">Please double check your shipping address in the details below. If you find an error, you can edit it by clicking the "edit shipping address" button below. Invalid addresses will cause shipping delays.</p>

                    <div class="pink-box mt-0">
                        <img src="{{ asset('thank-you/images/ups-nw2.png') }}" class="img-fluid" width="80" style="padding-top: 5px;" alt="Shipping">
                        <p>This is an American-owned business that doesn't believe it should take 45 days to receive your product from China. Orders are sent from our New Jersey warehouse via USPS, FedEx, UPS, or DHL for international customers depending on speed and efficiency of delivery. Product will be shipped within 48 business hours. Please allow between 5-7 days for standard delivery. You will be emailed a tracking link after your order is shipped. Thank you for your purchase!</p>
                    </div>

                    <div class="order-sec">
                        <h2>Order Details</h2>
                        <div class="order-det-sec">
                            <p>Order Date</p>
                            <p>{{ $orderDate }}</p>
                        </div>
                        <div class="order-det-sec">
                            <p>Order Number</p>
                            <p>{{ $orderNumber ?: 'N/A' }}</p>
                        </div>
                        <div class="order-det-sec">
                            <p>Order Total</p>
                            <p>{{ $orderTotalDisplay ?: ($currencySymbol . number_format($orderTotal, 2)) }}</p>
                        </div>
                    </div>

                    <div class="row thank_prtt">
                        <div class="thank_clr">
                            <div class="shipingAdd">
                                <h3>Shipping Address</h3>
                                <p class="shipping-name-section">{{ $shipName }}</p>
                                <p class="shipping-address-section">{{ trim($shipAddress1 . ' ' . $shipAddress2) }}</p>
                                <p class="shipping-citystate-section">{{ $shipCity }}, {{ $shipState }}, {{ $shipCountry }}</p>
                                <p class="shipping-zip-section">{{ $shipZip }}</p>

                                <div class="d-flex justify-content-center align-items-center w-100 mt-2">
                                    <button type="button" class="edit-btn-shw">Edit Shipping Address</button>
                                    <button type="button" class="confirm-btn-shw">Confirm</button>
                                </div>
                            </div>

                            <div class="form-shpping">
                                <form class="update-shipping-address" id="shipping-info" name="prospect_form1">
                                    <input type="hidden" name="orderIds" value="{{ $orderNumber }}">
                                    <h3>Shipping Address</h3>
                                    <div class="form-group form-label-group mb-2">
                                        <input type="text" spellcheck="false" autocorrect="off" name="firstName" id="inputFirstName" class="form-control required cb-remove-class" placeholder="First Name" data-error-message="Please enter your first name!" value="{{ explode(' ', trim($shipName))[0] ?? '' }}" required>
                                    </div>
                                    <div class="form-group form-label-group mb-2">
                                        <input type="text" spellcheck="false" autocorrect="off" name="lastName" id="inputLastName" class="form-control required cb-remove-class" placeholder="Last Name" data-error-message="Please enter your last name!" value="{{ trim(str_replace(explode(' ', trim($shipName))[0] ?? '', '', $shipName)) }}" required>
                                    </div>
                                    <div class="form-group form-label-group mb-2">
                                        <input type="text" spellcheck="false" autocorrect="off" name="shippingAddress1" id="inputAddress" class="form-control required cb-remove-class" placeholder="Address" data-error-message="Please enter your address!" value="{{ $shipAddress1 }}" required>
                                        <input type="text" spellcheck="false" autocorrect="off" name="shippingAddress2" id="inputAddress2" class="form-control" placeholder="Apt, Suite, Unit, Building (optional)" value="{{ $shipAddress2 }}">
                                    </div>
                                    <div class="form-group form-label-group mb-2">
                                        <input type="text" spellcheck="false" autocorrect="off" name="shippingCity" id="inputCity" class="form-control required cb-remove-class" placeholder="City" data-error-message="Please enter your city!" value="{{ $shipCity }}" required>
                                    </div>
                                    <div class="form-group mb-2 position-relative">
                                        <input type="text" id="inputState" name="shippingState" placeholder="Your State" class="form-control required cb-remove-class" data-error-message="Please select your state!" value="{{ $shipState }}" data-selected="{{ $shipState }}" />
                                    </div>
                                    <div class="form-group mb-2 position-relative">
                                        <select id="inputCountry" name="shippingCountry" class="form-control required cb-remove-class" data-selected="{{ $shipCountry }}" data-error-message="Please select your country!">
                                            <option value="">Select Country</option>
                                            @if(!empty($shipCountry))
                                                <option value="{{ $shipCountry }}" selected>{{ $shipCountry }}</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group form-label-group mb-2">
                                        <input type="text" name="shippingZip" id="inputZip" class="form-control required cb-remove-class" placeholder="Zip" data-error-message="Please enter a valid zip code!" value="{{ $shipZip }}" maxlength="7" required>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="cancel-btn"><i class="fa fa-angle-double-left"></i></button>
                                        <button type="button" class="btn_confirm update-shipping-address-btn">Update Details Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="thank_clr">
                            <div class="billAdd">
                                <h3>Billing Address</h3>
                                <p>{{ $billName }}</p>
                                <p>{{ trim($billAddress1 . ' ' . $billAddress2) }}</p>
                                <p>{{ $billCity }}, {{ $billState }}, {{ $billCountry }}</p>
                                <p>{{ $billZip }}</p>
                            </div>
                        </div>
                    </div>

                    <br>
                    <b>Please double check your shipping address in the details below. If you find an error, you can edit it by clicking the "edit shipping address" button below. Invalid addresses will cause shipping delays.</b>

                    <div class="order-sec">
                        <h2>Order Summary</h2>
                        @forelse($items as $item)
                            <div class="order-det-sec">
                                <p>{{ $item['name'] ?? 'Item' }} @if(!empty($item['quantity']) && (int) $item['quantity'] > 1) (x{{ (int) $item['quantity'] }}) @endif</p>
                                <p>{{ $currencySymbol }}{{ number_format((float) ($item['amount'] ?? 0), 2) }}</p>
                            </div>
                        @empty
                            <div class="order-det-sec">
                                <p>No items found</p>
                                <p>{{ $currencySymbol }}0.00</p>
                            </div>
                        @endforelse
                        <div class="order-det-sec">
                            <p>Shipping</p>
                            <p>{{ $shippingDisplay ?: ($currencySymbol . number_format($shippingAmount, 2)) }}</p>
                        </div>
                        <hr class="gry">
                        <div class="order-det-sec totalSec">
                            <p class="tot">Total</p>
                            <p>{{ $orderTotalDisplay ?: ($currencySymbol . number_format($orderTotal, 2)) }}</p>
                        </div>
                        <br>
                        <h3>Charges on your statement will be processed for {{ $statementTotalDisplay ?: ($currencySymbol . number_format($statementTotal, 2)) }} and will appear as {{ $statementDescriptor }}.</h3>
                    </div>
                </div>

                <div class="contact-sec pb-4">
                    <div class="contact-box">
                        <img src="{{ asset('thank-you/images/model.png') }}" class="img-fluid" alt="Support">
                        <p>
                            <span class="help-heading">We are here to help you.</span>
                            <br>
                            If you have any questions or comments about your order or our products, you can reach us at
                            <a href="tel:+1 (877) 375-4479">+1 (877) 375-4479</a>, we are available for you 24/7.
                            You may also email us at <a href="#">support@example.com</a> and one of our agents
                            will get back to you within 24 hours.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="customfooter">
    <div class="footer-container">
        <div class="footer-row">
            <div class="footer-col-4">
                <h3>INFORMATION</h3>
                <ul>
                    <li><a href="#" target="_blank">Reference</a></li>
                    <li><a href="#" target="_blank">Owner's Manual</a></li>
                    <li><a href="#" target="_blank">FAQs</a></li>
                    <li><a href="#" target="_blank">Contact Us</a></li>
                    <li><a href="#" target="_blank">Terms &amp; Conditions</a></li>
                    <li><a href="#" target="_blank">Privacy Policy</a></li>
                    <li><a href="#" target="_blank">Returns</a></li>
                    <li><a href="#" target="_blank">Shipping</a></li>
                    <li><a href="#" target="_blank">Warranty</a></li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>PAYMENT METHODS</h3>
                <div>
                    <span>
                        <img class="credit-cards-image" src="{{ asset('thank-you/images/visa-xpress-icon.png') }}" alt="Cards">
                    </span>
                </div>
            </div>
            <div class="footer-col-4">
                <h3>GUARANTEE</h3>
                <p class="footer-guarantee-content">We offer a 30-Days money-back guarantee</p>
            </div>
            <div class="footer-col-4 footerLogoHolder">
                <img src="{{ asset('thank-you/images/logo-white.png') }}" class="footerLogo" width="180" alt="Footer Logo">
            </div>
        </div>
        <div class="footer-row">
            <div class="footer-col-12 footerBottom">
                <p class="text-white">2026 Copyright
                    <span class="text-white">PressEase Travel</span>.
                    All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<p id="loading-indicator" style="display:none;">Processing...</p>

<script src="{{ asset('thank-you/js/jquery-3.7.1.min.js') }}"></script>
<script>
    $('html,body').animate({
        scrollTop: $(".order-det-sec").offset().top
    }, 1000);
</script>
<script>
    setTimeout(() => {
        $(".overlay").show();
    });

    setTimeout(() => {
        $(".shipingAdd").addClass("form-shipping-prt");
    }, 1500);

    $(".overlay").click(function () {
        $(this).hide();
        $(".shipingAdd").removeClass("form-shipping-prt");
    });

    $(".confirm-btn-shw").click(function () {
        $(this).hide();
        $(".overlay").hide();
        $(".shipingAdd").removeClass("form-shipping-prt");
    });

    $(".edit-btn-shw").click(function () {
        $(".overlay").hide();
        $(".form-shpping").show();
        $(".shipingAdd").hide();
        $(".shipingAdd").removeClass("form-shipping-prt");
    });

    $(".cancel-btn").click(function () {
        $(".form-shpping").hide();
        $(".shipingAdd").show();
    });
</script>
</body>
</html>
