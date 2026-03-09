@extends('layouts.user.master')

@section('content')

<div class="checkout-section">
    <div class="container">
        <p class="chk-rgt-text1 forMob">New & Improved 2026 Model </p>
        <p class="prod-name forMob">Total Heat Pro </p>
        <p class="str-rvw forMob"><img src="{{ asset('images/star02.png') }}" alt="Star" loading="lazy">12,421 Verified Customer
            Reviews </p>
        <p class="prd-det-disc forMob">Heat That Hugs.</p>
        <div class="left-sec">
            <div id="sticky">
                <div class="vehicle-detail-banner banner-content clearfix">
                    <div class="banner-slider">
                        <div class="slider-banner-image">
                            <img src="{{ asset('images/black-trans2.png') }}" class="prd-nav" alt="img" loading="lazy">
                        </div>
                    </div>
                </div>
                <ul class="s1-list">
                    <li>
                        <img src="{{ asset('images/s1-ic1.png') }}" class="s1-ic" loading="lazy">
                        <p>Quick <br> warm-up</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/s1-ic2.png') }}" class="s1-ic" loading="lazy">
                        <p>Low noise</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/s1-ic3.png') }}" class="s1-ic" loading="lazy">
                        <p>Remote control</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/s1-ic4.png') }}" class="s1-ic" loading="lazy">
                        <p>Safety sensors</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right-sec">
            <p class="chk-rgt-text1 hide-mob">New & Improved 2026 Model </p>
            <p class="prod-name hide-mob">Total Heat Pro </p>
            <p class="str-rvw hide-mob"><img src="{{ asset('images/star02.png') }}" alt="Star" loading="lazy">12,421 Verified Customer
                Reviews </p>

            <p class="bdr-line hide-mob"></p>
            <p class="prd-det-disc hide-mob">Heat That Hugs.</p>
            <p class="bdr-line"></p>

            <p class="pkg-hdng" id="pkgview">Choose your package </p>
            <div class="pkg-opt">
                <div class="cb-first-item"></div>
                <div class="buyopt packageClass cb-package-container" id="product3" data-quantity="3" data-price="266.64"
                    data-regPrice="666.60" data-package="" data-ship="24.95" data-package-discount="60"
                    data-warranty="9.95" data-name="3x Total Heat Pros Multi Pack" data-journey-package-protection="3.5">
                    <div class="buy-opt-left">
                        <p>
                            Buy 3 Total Heat Pros
                            <br>
                            <span>Save <span>60</span>% OFF</span> <span class="cb-discountPercentage"></span>
                        </p>
                    </div>
                    <div class="buy-opt-rgt">
                        <p class="reco_deal">
                            <i class="fas fa-star" style="color:orange"></i> Recommended Deal
                        </p>
                        <p class="pkg-prc">
                            <span class="cb-reg-price">$666.60</span>
                            <br>
                            <span class="cb-buy-each font-weight-bold"></span><span class="font-weight-bold ea">/ea</span>
                        </p>
                    </div>
                </div>
                <div class="buyopt packageClass cb-package-container" id="product1" data-quantity="1" data-price="111.10"
                    data-regPrice="222.20" data-package="" data-ship="24.95" data-package-discount="50"
                    data-warranty="9.95" data-name="1x Total Heat Pro Single Pack" data-journey-package-protection="3.5">
                    <div class="buy-opt-left">
                        <p>
                            Buy 1 Total Heat Pro
                            <br>
                            <span>Save <span>50</span>% OFF</span> <span class="cb-discountPercentage"></span>
                        </p>
                    </div>
                    <div class="buy-opt-rgt">
                        <p class="pkg-prc">
                            <span class="cb-reg-price">$222.20</span>
                            <br>
                            <span class="cb-buy-each font-weight-bold"></span><span class="font-weight-bold ea">/ea</span>
                        </p>
                    </div>
                </div>
                <div class="buyopt packageClass cb-package-container" id="product2" data-quantity="2" data-price="199.98"
                    data-regPrice="444.40" data-package="" data-ship="24.95" data-package-discount="55"
                    data-warranty="9.95" data-name="2x Total Heat Pros Studio Pack" data-journey-package-protection="3.5">
                    <div class="buy-opt-left">
                        <p>
                            Buy 2 Total Heat Pros
                            <br>
                            <span>Save <span>55</span>% OFF</span> <span class="cb-discountPercentage"></span>
                        </p>
                    </div>
                    <div class="buy-opt-rgt">
                        <p class="pkg-prc">
                            <span class="cb-reg-price">$444.40</span>
                            <br>
                            <span class="cb-buy-each font-weight-bold"></span><span class="font-weight-bold ea">/ea</span>
                        </p>
                    </div>
                </div>

                <div class="buyopt packageClass cb-package-container" id="product4" data-quantity="4" data-price="311.09"
                    data-regPrice="888.80" data-package="" data-ship="24.95" data-package-discount="65"
                    data-warranty="9.95" data-name="4x Total Heat Pros Deluxe Pack" data-journey-package-protection="3.5">
                    <div class="buy-opt-left">
                        <p>
                            Buy 4 Total Heat Pros
                            <br>
                            <span>Save <span>65</span>% OFF</span> <span class="cb-discountPercentage"></span>
                        </p>
                    </div>
                    <div class="buy-opt-rgt">
                        <p class="pkg-prc">
                            <span class="cb-reg-price">$888.80</span>
                            <br>
                            <span class="cb-buy-each font-weight-bold"></span><span class="font-weight-bold ea">/ea</span>
                        </p>
                    </div>
                </div>
            </div>
            <p class="bdr-line"></p>
            <p class="pkg-hdng" id="cust-info">Enter customer information</p>
            <form class="form" method="post" action="ajax.php?method=downsell1" name="downsell_form1"
                accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8" id="payment-form">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="prospectId" id="prospectId" value="" />
                <input type="hidden" name="campaigns[1][id]" id="campaign_id" value="">
                <input type="hidden" name="campaigns[2][id]" id="campaign_id2" class="" value="">
                <input type="hidden" name="campaigns[2][quantity]" id="campaign_id_2_qty" value="">
                <input type="hidden" name="campaigns[3][id]" id="split_click_bump" class="cb-split-click-bump" value=""
                    disabled>
                <input type="hidden" name="campaigns[4][id]" id="split_click_bump3" class="cb-split-click-bump-3"
                    value="">
                <input type="hidden" id="dynamic-shipping-charge" name="dynamic_shipping_charge" value="">
                <input type="hidden" name="custom[shipping_charge]" value="" id="custom-shipping-charge">
                <input type="hidden" name="coupon_code" value="No Discount">
                <input type="hidden" name="regprice" id="regprice" value="">
                <input type="hidden" name="individualPrice" id="individualPrice" value="">
                <input type="hidden" name="packageQuantity" id="packageQuantity" value="3">

                <div class="formBox">
                    <div class="frm-flds fl form-floating">
                        <input type="email" name="email" id="email"
                            class="input-flds required cb-remove-class frmField form-control" placeholder="Email Address"
                            data-validate="email" data-error-message="Please enter a valid email id!">
                        <label for="email" class="fl-label">Email (For order confirmation)</label>
                    </div>
                    <!--<div class="frm-flds fl form-floating">
                     <input type="tel" name="phone" id="phone" class="input-flds required cb-remove-class frmField form-control" placeholder="Phone" data-validate="phone" data-min-length="11" data-max-length="17" maxlength="17" onkeyup="javascript:this.value=this.value.replace(/[^0-9]/g,'');" data-error-message="Please enter a valid contact number!" >
                      <label for="phone" class="fl-label">Phone number</label>
                  </div>-->

                    <div
                        class="form-group form-label-group mb-2 form-floating position-relative countrycode-content-container frm-flds">
                        <div class="country-code-container">
                            <select name="country_phone_code" id="country-phone-code" class="country-code-selector">
                                <option data-country="US" value="+1"
                                    data-image="https://offer.buytotalheatproshop.com/offer/1/extensions/CountryPhoneCode/flags/us.png">
                                    +1</option>
                                <option data-country="CA" value="+1"
                                    data-image="https://offer.buytotalheatproshop.com/offer/1/extensions/CountryPhoneCode/flags/ca.png">
                                    +1</option>

                                <option data-country="IN" value="+91" selected="selected"
                                    data-image="https://offer.buytotalheatproshop.com/offer/1/extensions/CountryPhoneCode/flags/in.png">
                                    +91</option>

                            </select>
                        </div>
                        <input type="tel" name="formated_phone_number" id="formated-phone-number" value=""
                            class="required cb-remove-class form-control input-flds" placeholder="Phone"
                            onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');"
                            data-error-message="Please enter a valid contact number!" data-min-length="14"
                            data-max-length="14" maxlength="14">
                        <label for="formated-phone-number">Phone</label>
                    </div>
                    <input type="hidden" name="phone" id="phone" />


                    <div class="frm-flds fl form-floating">
                        <input type="text" name="firstName" id="firstName"
                            class="input-flds required cb-remove-class frmField form-control" placeholder="First Name"
                            data-error-message="Please enter your first name!">
                        <label for="fname" class="fl-label">First Name</label>
                    </div>
                    <div class="frm-flds fl form-floating">
                        <input type="text" name="lastName" id="lastName"
                            class="input-flds required cb-remove-class frmField form-control" placeholder="Last Name"
                            data-error-message="Please enter your last name!">
                        <label for="lanme" class="fl-label">Last Name</label>
                    </div>

                    <p class="pkg-hdng">Enter your payment information </p>
                    <p>&nbsp;</p>
                    <div class="card-gurantee-sec text-center">
                        <img src="{{ asset('images/money-back-new.jpg') }}" alt="Money-back logo" class="m-back" loading="lazy">
                    </div>
                    <select name="creditCardType" class="form-control" data-error-message="Please select valid card type!"
                        style="display: none;">
                        <option value="">Card Type</option>
                        <option value="master">Master Card</option>
                        <option value="visa">Visa</option>
                        <option value="amex">Amex</option>
                        <option value="discover">Discover</option>
                        <option value="paypal">Paypal</option>
                    </select>
                    <div class="payoptbox">
                        <div class="payment-cards-box paypal-box">
                            <label class="paymybtn PaypalOpt">
                                <input type="radio" name="cctype" value="paypal" class="ccard cb-paypemt-radio"
                                    data-paymentmethod="paypal">
                                <svg height="24" viewBox="0 0 100 32" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMinYMin meet" class="payplsvg">
                                    <path fill="#003087"
                                        d="M 12 4.917 L 4.2 4.917 C 3.7 4.917 3.2 5.317 3.1 5.817 L 0 25.817 C -0.1 26.217 0.2 26.517 0.6 26.517 L 4.3 26.517 C 4.8 26.517 5.3 26.117 5.4 25.617 L 6.2 20.217 C 6.3 19.717 6.7 19.317 7.3 19.317 L 9.8 19.317 C 14.9 19.317 17.9 16.817 18.7 11.917 C 19 9.817 18.7 8.117 17.7 6.917 C 16.6 5.617 14.6 4.917 12 4.917 Z M 12.9 12.217 C 12.5 15.017 10.3 15.017 8.3 15.017 L 7.1 15.017 L 7.9 9.817 C 7.9 9.517 8.2 9.317 8.5 9.317 L 9 9.317 C 10.4 9.317 11.7 9.317 12.4 10.117 C 12.9 10.517 13.1 11.217 12.9 12.217 Z">
                                    </path>
                                    <path fill="#003087"
                                        d="M 35.2 12.117 L 31.5 12.117 C 31.2 12.117 30.9 12.317 30.9 12.617 L 30.7 13.617 L 30.4 13.217 C 29.6 12.017 27.8 11.617 26 11.617 C 21.9 11.617 18.4 14.717 17.7 19.117 C 17.3 21.317 17.8 23.417 19.1 24.817 C 20.2 26.117 21.9 26.717 23.8 26.717 C 27.1 26.717 29 24.617 29 24.617 L 28.8 25.617 C 28.7 26.017 29 26.417 29.4 26.417 L 32.8 26.417 C 33.3 26.417 33.8 26.017 33.9 25.517 L 35.9 12.717 C 36 12.517 35.6 12.117 35.2 12.117 Z M 30.1 19.317 C 29.7 21.417 28.1 22.917 25.9 22.917 C 24.8 22.917 24 22.617 23.4 21.917 C 22.8 21.217 22.6 20.317 22.8 19.317 C 23.1 17.217 24.9 15.717 27 15.717 C 28.1 15.717 28.9 16.117 29.5 16.717 C 30 17.417 30.2 18.317 30.1 19.317 Z">
                                    </path>
                                    <path fill="#003087"
                                        d="M 55.1 12.117 L 51.4 12.117 C 51 12.117 50.7 12.317 50.5 12.617 L 45.3 20.217 L 43.1 12.917 C 43 12.417 42.5 12.117 42.1 12.117 L 38.4 12.117 C 38 12.117 37.6 12.517 37.8 13.017 L 41.9 25.117 L 38 30.517 C 37.7 30.917 38 31.517 38.5 31.517 L 42.2 31.517 C 42.6 31.517 42.9 31.317 43.1 31.017 L 55.6 13.017 C 55.9 12.717 55.6 12.117 55.1 12.117 Z">
                                    </path>
                                    <path fill="#009cde"
                                        d="M 67.5 4.917 L 59.7 4.917 C 59.2 4.917 58.7 5.317 58.6 5.817 L 55.5 25.717 C 55.4 26.117 55.7 26.417 56.1 26.417 L 60.1 26.417 C 60.5 26.417 60.8 26.117 60.8 25.817 L 61.7 20.117 C 61.8 19.617 62.2 19.217 62.8 19.217 L 65.3 19.217 C 70.4 19.217 73.4 16.717 74.2 11.817 C 74.5 9.717 74.2 8.017 73.2 6.817 C 72 5.617 70.1 4.917 67.5 4.917 Z M 68.4 12.217 C 68 15.017 65.8 15.017 63.8 15.017 L 62.6 15.017 L 63.4 9.817 C 63.4 9.517 63.7 9.317 64 9.317 L 64.5 9.317 C 65.9 9.317 67.2 9.317 67.9 10.117 C 68.4 10.517 68.5 11.217 68.4 12.217 Z">
                                    </path>
                                    <path fill="#009cde"
                                        d="M 90.7 12.117 L 87 12.117 C 86.7 12.117 86.4 12.317 86.4 12.617 L 86.2 13.617 L 85.9 13.217 C 85.1 12.017 83.3 11.617 81.5 11.617 C 77.4 11.617 73.9 14.717 73.2 19.117 C 72.8 21.317 73.3 23.417 74.6 24.817 C 75.7 26.117 77.4 26.717 79.3 26.717 C 82.6 26.717 84.5 24.617 84.5 24.617 L 84.3 25.617 C 84.2 26.017 84.5 26.417 84.9 26.417 L 88.3 26.417 C 88.8 26.417 89.3 26.017 89.4 25.517 L 91.4 12.717 C 91.4 12.517 91.1 12.117 90.7 12.117 Z M 85.5 19.317 C 85.1 21.417 83.5 22.917 81.3 22.917 C 80.2 22.917 79.4 22.617 78.8 21.917 C 78.2 21.217 78 20.317 78.2 19.317 C 78.5 17.217 80.3 15.717 82.4 15.717 C 83.5 15.717 84.3 16.117 84.9 16.717 C 85.5 17.417 85.7 18.317 85.5 19.317 Z">
                                    </path>
                                    <path fill="#009cde"
                                        d="M 95.1 5.417 L 91.9 25.717 C 91.8 26.117 92.1 26.417 92.5 26.417 L 95.7 26.417 C 96.2 26.417 96.7 26.017 96.8 25.517 L 100 5.617 C 100.1 5.217 99.8 4.917 99.4 4.917 L 95.8 4.917 C 95.4 4.917 95.2 5.117 95.1 5.417 Z">
                                    </path>
                                </svg>
                            </label>
                        </div>
                        <div class="payment-cards-box cardPayOpt">
                            <label class="paymybtn">
                                <input type="radio" class="ccard cb-paypemt-radio" name="cctype" value="cc" checked=""
                                    data-paymentmethod="credit_card">
                                Credit card
                                <img src="{{ asset('images/visa-mstr-disc.png') }}" class="visa-imgg" loading="lazy">
                            </label>
                        </div>
                        <div class="payment-flds-box credit-card">
                            <div class="frm-flds fl fl-form form-floating">
                                <input type="tel" name="creditCardNumber"
                                    class="input-flds required frmField numeric remove form-control" maxlength="16"
                                    placeholder="Credit Card #" data-error-message="Please enter your card number!"
                                    onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" id="cardNumber">
                                <label for="cardNumber" class="fl-label">Card Number #</label>
                            </div>

                            <div class="frm-flds half-fld fl-form form-floating">
                                <input type="text" class="input-flds required frmField numeric remove form-control"
                                    name="expirationDate" id="expirationDate" placeholder="MM / YY" data-error-message=""
                                    maxlength="7" autocomplete="cc-exp">
                                <label for="expirationDate" class="fl-label">MM / YY</label>
                            </div>
                            <div class="frm-flds fl half-fld  billing-cvv form-floating">
                                <input type="tel" name="CVV"
                                    class="form-control input-flds fl-input required frmField remove" placeholder="CVV"
                                    id="cvv" data-validate="cvv" maxlength="3"
                                    data-error-message="Please enter a valid CVV code!">
                                <label for="cvv" class="fl-label">CVV</label>
                            </div>
                            <div class="frm-flds half-fld fl d-none">
                                <label for="month" class="fl-label">Month</label>
                                <select name="expmonth" class="selcet-fld required frmField month_exp remove"
                                    data-error-message="Please enter a valid expiration month!" style="display:none">
                                    <option value="">Month</option>
                                    <option value="01">(01) January</option>
                                    <option value="02">(02) February</option>
                                    <option value="03">(03) March</option>
                                    <option value="04">(04) April</option>
                                    <option value="05">(05) May</option>
                                    <option value="06">(06) June</option>
                                    <option value="07">(07) July</option>
                                    <option value="08">(08) August</option>
                                    <option value="09">(09) September</option>
                                    <option value="10">(10) October</option>
                                    <option value="11">(11) November</option>
                                    <option value="12">(12) December</option>
                                </select>
                            </div>
                            <div class="frm-flds half-fld fr d-none">
                                <label for="year" class="fl-label">Year</label>
                                <select name="expyear" class="selcet-fld required frmField month_year remove"
                                    data-error-message="Please enter a valid expiration year!" style="display:none">
                                    <option value="">Year</option>
                                    <option value="26">2026</option>
                                    <option value="27">2027</option>
                                    <option value="28">2028</option>
                                    <option value="29">2029</option>
                                    <option value="30">2030</option>
                                    <option value="31">2031</option>
                                    <option value="32">2032</option>
                                    <option value="33">2033</option>
                                    <option value="34">2034</option>
                                    <option value="35">2035</option>
                                    <option value="36">2036</option>
                                    <option value="37">2037</option>
                                    <option value="38">2038</option>
                                    <option value="39">2039</option>
                                    <option value="40">2040</option>
                                    <option value="41">2041</option>
                                    <option value="42">2042</option>
                                    <option value="43">2043</option>
                                    <option value="44">2044</option>
                                    <option value="45">2045</option>
                                </select>
                            </div>
                            <div class="clearall"></div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="continue-ship pulse"
                        onclick="javascript:bookmarkscroll.scrollTo('shipAddress')">Continue to Shipping</a>
                    <div class="js_choose_billing" style="display:none;">
                        <div class="w_radio">
                            <input type="radio" id="radio_same_as_shipping" name="billingSameAsShipping" value="yes"
                                checked="checked">
                            <label for="radio_same_as_shipping">
                                Billing is the same as shipping
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
                    <label class="fieldToggle" id="fieldToggle">
                        <input type="checkbox" id="togData" class="cb-address-differs-check" name='billShipSame'
                            checked="">
                        <span class="togship"></span>
                        Billing is the same as shipping
                    </label>
                    <div class="clearall"></div>

                    <div class="shipaddress billing-info mt-3" style="display:none">
                        <div class="frm-flds fl form-floating">
                            <input type="text" name="billingFirstName"
                                class="input-flds required cb-remove-class-billing form-control-custom frmField form-control"
                                placeholder="Billing First Name" data-error-message="Please enter your billing first name!">
                            <label for="fname" class="fl-label">Billing First Name</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <input type="text" name="billingLastName"
                                class="input-flds required cb-remove-class-billing frmField form-control"
                                placeholder="Billing Last Name" data-error-message="Please enter your billing last name!">
                            <label for="lanme" class="fl-label">Billing Last Name</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <input type="text" name="billingAddress1"
                                class="input-flds required cb-remove-class-billing frmField form-control"
                                placeholder="Billing Address" data-error-message="Please enter your billing address!">
                            <label for="address" class="fl-label">Billing Address</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <input type="text" name="billingAddress2" class="input-flds form-control"
                                placeholder="Apartment, suite, etc. (optional)" id="appt">
                            <label for="appt" class="fl-label">Apartment, suite, etc. (optional)</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <input type="text" name="billingCity"
                                class="input-flds required cb-remove-class-billing frmField form-control"
                                placeholder="Billing City" data-error-message="Please enter your billing city!">
                            <label for="city" class="fl-label">Your City</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <select name="billingCountry"
                                class="selcet-fld required cb-remove-class-billing frmField form-control no-error"
                                data-selected="US"
                                data-error-message="Please select your billing country!">
                                <option value="">Select Country</option>
                                <option value="US" selected>United States</option>
                                <option value="CA">Canada</option>
                                <option value="IND">India</option>
                            </select>
                            <label for="billingCountry" class="fl-label">Select Country</label>
                        </div>

                        <div class="frm-flds fl form-floating">
                            <input type="text"
                                name="billingState"
                                class="selcet-fld required cb-remove-class-billing frmField form-control"
                                placeholder="Your State"
                                data-error-message="Please enter your billing state!"
                                value="" />
                            <label for="billingState" class="fl-label">Select State</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <input type="tel" name="billingZip"
                                class="input-flds required cb-remove-class-billing frmField form-control"
                                placeholder="Billing Zip Code" data-error-message="Please enter a valid billing zip code!">
                            <label for="zip" class="fl-label">Zip Code</label>
                        </div>
                    </div>

                    <p class="bdr-line"></p>
                    <div class="payment-flds-box">
                        <p class="pkg-hdng">Enter your shipping information</p>
                        <div class="frm-flds fl form-floating">
                            <input type="text" name="shippingAddress1"
                                class="form-control input-flds required cb-remove-class frmField" placeholder="Your Address"
                                data-error-message="Please enter your address!" id="shipAddress">
                            <!--<input type="text" name="shippingAddress1" class="input-flds" placeholder="Apartment, suite, etc. (optional)" > -->
                            <label for="shipAddress" class="fl-label">Shipping Address</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <input type="text" name="shippingAddress2" class="input-flds form-control"
                                placeholder="Apartment, suite, etc. (optional)" id="appt">
                            <label for="appt" class="fl-label">Apartment, suite, etc. (optional)</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <input type="text" name="shippingCity"
                                class="input-flds required cb-remove-class frmField form-control" placeholder="Your City"
                                data-error-message="Please enter your city!">
                            <label for="city" class="fl-label">Your City</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <select name="shippingCountry"
                                class="selcet-fld required cb-remove-class frmField form-select"
                                data-selected="US"
                                data-error-message="Please select your country!">
                                <option value="">Select Country</option>
                                <option value="US" selected>United States</option>
                                <option value="CA">Canada</option>
                                <option value="IND">India</option>
                            </select>
                            <label for="shippingCountry" class="fl-label">Select Country</label>
                        </div>

                        <div class="frm-flds fl form-floating">
                            <input type="text"
                                name="shippingState"
                                class="selcet-fld required cb-remove-class frmField form-control"
                                placeholder="Your State"
                                data-error-message="Please enter your state!"
                                value="" />
                            <label for="shippingState" class="fl-label">Select State</label>
                        </div>
                        <div class="frm-flds fl form-floating">
                            <input type="tel" name="shippingZip" id="zip"
                                class="input-flds required cb-remove-class frmField form-control" placeholder="Zip Code"
                                data-error-message="Please enter a valid zip code!" />
                            <label for="zip" class="fl-label">Zip Code</label>
                        </div>
                        <!--   <a href="javascript:void(0)" class="continue-order addon_btn"
                        onclick="javascript:bookmarkscroll.scrollTo('wrnty')">Select Addon</a>-->
                    </div>
                </div>
                <!--<p class="bdr-line"></p>--->
                <!-- <p class="pkg-hdng">Would you like to add Total Heat Pro coverage?</p>
               <p class="pkg-subhdng color-blk">Be covered for a 3 years with our replacement and protection plan for
                  <!--span id="protection_value"  class="cb-warranty-price" <span id="protection_value">$9.95</span>. This extended warranty means you are covered for 3 years.</p>-->
                <div class="selectr-grpBox warrantyClass" id="wrnty">
                    <div class="d-flex justify-content-between">
                        <div class="pckt_rts">
                            <label class="pckt_rts_container">
                                <input type="checkbox" class="wrnt cb-check-status" name="packopt" id="checkStatus">
                                <span class="checkmark"></span>
                                <p class="grp-bx-text1">Total Heat Pro Coverage</p>
                            </label>

                        </div>
                        <p class="grp-bx-text2"><!--span class="cb-warranty-original-price">$99.98</span-->
                            <!--span id="protection" class="cb-warranty-price"-->
                            <!-- <span>$19.90</span> -->
                            <span id="protection">$9.95</span>
                        </p>
                    </div>
                    <ul class="grpbx-list">
                        <li>Accidental damage protection </li>
                        <li>Free parts replacement guarantee </li>
                        <li>Express replacement service - we'll ship you a replacement, so you don't have to wait for a
                            repair</li>
                        <li>24/7 priority access to Total Heat Pro experts </li>
                    </ul>
                </div>

                <!--<p class="bdr-line"></p>-->
                <div class="py-2 d-inline-block w-100 selectr-grpBox">
                    <div class="row align-items-center my-2">
                        <div class="col-9">
                            <h3 class="nw-txt">Journey Package Protection</h3>
                        </div>
                        <div class="col-3">
                            <label class="switch">
                                <input type="checkbox" class="cb-check-status-3" name="jpp" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="np-txt">Protection From Damage, Loss & Theft For Just
                                $3.50.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="order-summary-section">
                    <div class="top-row">
                        <div>
                            <p>Item</p>
                        </div>
                        <div>
                            <p>Amount</p>
                        </div>
                    </div>
                    <div class="item-detail-section">
                        <!--row-->
                        <div class="item-detail-row">
                            <div class="item-name">
                                <p class="main_prd cb-cart-title"></p>
                            </div>
                            <div class="item-price">
                                <p class="main_prd_price">$<span class="cb-product-price"></span></p>
                            </div>
                        </div>
                        <!--row-->

                        <div class="item-detail-row cb-click-bump-order-sum-div d-none" id="Kinetic_Pro_Coverage">
                            <div class="item-name">
                                <p>Total Heat Pro Coverage</p>
                            </div>
                            <div class="item-price">
                                <p id="Kinetic_Pro_Coverage_Price"><span>$9.95 <!--span class="cb-warranty-price"--></p>
                            </div>
                        </div>
                        <div class="item-detail-row cb-click-bump-order-sum-div-3" id="Kinetic_Pro_Fitness_Club">
                            <div class="item-name">
                                <p>Journey Package Protection</p>
                            </div>
                            <div class="item-price">
                                <!--p><span class="cb-clickbump-price-3"></span></p-->
                                <p><span>$3.50</span></p>
                            </div>
                        </div>

                        <p>Shipping and tax will be settled upon checkout confirmation</p>
                    </div>
                    <div class="offer-prcBox">
                        <div class="save-txt">
                            <p>Today You<br><span>Saved</span></p>
                            <img src="{{ asset('images/save-arw_new.png') }}" loading="lazy">
                        </div>
                        <div class="ofr-rgt">
                            <p>Discount: <span class="discount-total">$<span class="cb-total-discount"></span></span></p>
                            <p>Grand Total: <span class="grand-total totalAmt"><span
                                        class="cb-gtotal-without-shipping"></span></span></p>
                        </div>
                    </div>
                </div>
                <div class="termSec">
                    <p>By clicking the Complete Checkout button below, I agree to the <a href="terms.php?"
                            target="_blank">Terms &amp; Conditions</a> and <a href="privacy.php?" target="_blank">Privacy
                            Policy</a></p>
                    <button type="submit" class="complete-btn cb-checkout-button pulse">Complete Checkout</button>
                </div>
                <img src="{{ asset('images/secure-checkout.png') }}" class="secure-checkout" loading="lazy">
            </form>
        </div>
    </div>
    <p id="loading-indicator" style="display:none;">Processing...</p>
    <div id="page-loader" style="display:none;">
        <div class="loader-spinner"></div>
    </div>

</div>

@endsection

@push('scripts')

<script>
    $(document).ready(function() {

        /* ===============================
           PACKAGE SELECTION
        =============================== */
        $('.cb-package-container').on('click', function() {

            $('.cb-package-container').removeClass('active');
            $(this).addClass('active');

            let quantity = $(this).data('quantity');
            let price = parseFloat($(this).data('price'));
            let regPrice = parseFloat($(this).data('regprice'));
            let name = $(this).data('name');
            let shipping = parseFloat($(this).data('ship'));

            let individualPrice = (price / quantity).toFixed(2);
            let discount = (regPrice - price).toFixed(2);

            console.log(quantity)
            // Hidden fields
            $('#regprice').val(regPrice);
            $('#individualPrice').val(individualPrice);
            $('#packageQuantity').val(quantity);
            $('#dynamic-shipping-charge').val(shipping);
            $('#custom-shipping-charge').val(shipping);

            // Order summary update
            $('.cb-cart-title').text(name);
            $('.cb-product-price').text(price.toFixed(2));
            $('.cb-total-discount').text(discount);
            // $('.cb-gtotal-without-shipping').text((price + shipping).toFixed(2));
        });


        /* ===============================
           BILLING TOGGLE
        =============================== */
        $('#togData').on('change', function() {
            if ($(this).is(':checked')) {
                $('.billing-info').hide();
            } else {
                $('.billing-info').show();
            }
        });


        /* ===============================
           FORM SUBMIT AJAX
        =============================== */
        $('#payment-form').on('submit', function(e) {
            e.preventDefault();

            // Combine country code + phone
            let countryCode = $('#country-phone-code').val();
            let phoneNumber = $('#formated-phone-number').val();
            $('#phone').val(countryCode + phoneNumber);

            // Disable button
            $('.cb-checkout-button')
                .prop('disabled', true)
                .text('Processing...');

            // Show loader immediately
            $('#page-loader').fadeIn(200);

            $.ajax({
                url: "{{ route('checkout-frm-submit') }}",
                type: "POST",
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                console.log(response, 'response')
                    if (response.status === true) {
                        window.location.href = response.redirect_url;
                    } else {
                        $('#page-loader').hide();
                        alert(response.message);

                        $('.cb-checkout-button')
                            .prop('disabled', false)
                            .text('Complete Checkout');
                    }
                },

                error: function(xhr) {
                    console.log(xhr, 'error')
                    $('#page-loader').hide();

                    $('.cb-checkout-button')
                        .prop('disabled', false)
                        .text('Complete Checkout');

                    if (xhr.status === 422) {

                        let errors = xhr.responseJSON.errors;
                        let errorMsg = "";

                        $.each(errors, function(key, value) {
                            errorMsg += value[0] + "\n";
                        });

                        alert(errorMsg);

                    } else {
                        alert("Something went wrong. Please try again.");
                    }
                }
            });

        });

    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const packages = document.querySelectorAll('.cb-package-container');

        const warrantyCheckbox = document.querySelector('.wrnt');
        const journeyCheckbox = document.querySelector('.cb-check-status-3');

        const warrantyRow = document.getElementById('Kinetic_Pro_Coverage');
        const journeyRow = document.getElementById('Kinetic_Pro_Fitness_Club');

        const warrantyPrice = 9.95;
        const journeyPrice = 3.50;

        /* ======================
           /EA PRICE CALCULATION
        ====================== */
        packages.forEach(pkg => {

            let price = parseFloat(pkg.dataset.price);
            let qty = parseInt(pkg.dataset.quantity);

            if (!isNaN(price) && !isNaN(qty) && qty > 0) {
                let eachPrice = (price / qty).toFixed(2);
                let eachBox = pkg.querySelector('.cb-buy-each');
                if (eachBox) {
                    eachBox.textContent = "$" + eachPrice;
                }
            }

        });

        /* ======================
           UPDATE TOTALS FUNCTION
        ====================== */
        function updateTotals() {

            const activePackage = document.querySelector('.cb-package-container.active');
            if (!activePackage) return;

            let packagePrice = parseFloat(activePackage.dataset.price) || 0;
            let regPrice = parseFloat(activePackage.dataset.regprice) || packagePrice;

            let warranty = 0;
            let journey = 0;

            /* WARRANTY */
            if (warrantyCheckbox.checked) {
                warranty = warrantyPrice;
                warrantyRow.classList.remove("d-none");
                document.querySelector("#Kinetic_Pro_Coverage_Price span")
                    .textContent = "$" + warrantyPrice.toFixed(2);
            } else {
                warrantyRow.classList.add("d-none");
            }

            /* JOURNEY */
            if (journeyCheckbox.checked) {
                journey = journeyPrice;
                journeyRow.classList.remove("d-none");
            } else {
                journeyRow.classList.add("d-none");
            }

            /* DISCOUNT */
            let discount = regPrice - packagePrice;
            console.log(activePackage, 'activePackage')
            if (isNaN(discount) || discount < 0) {
                discount = 0;
            }

            /* GRAND TOTAL */
            let grandTotal = packagePrice + warranty + journey;

            /* UPDATE UI */
            document.querySelector('.cb-product-price').textContent = packagePrice.toFixed(2);
            document.querySelector('.cb-total-discount').textContent = discount.toFixed(2);
            document.querySelector('.cb-gtotal-without-shipping').textContent = '$' + grandTotal.toFixed(2);

            // Update /ea price for active package
            let qty = parseInt(activePackage.dataset.quantity) || 1;
            let eachPrice = (packagePrice / qty).toFixed(2);
            let eachBox = activePackage.querySelector('.cb-buy-each');
            if (eachBox) {
                eachBox.textContent = "$" + eachPrice;
            }

        }

        /* ======================
           PACKAGE CLICK
        ====================== */
        packages.forEach(pkg => {

            pkg.addEventListener("click", function() {

                packages.forEach(p => p.classList.remove("active"));
                this.classList.add("active");

                document.querySelector('.cb-cart-title').textContent = this.dataset.name;

                updateTotals();

            });

        });

        /* ======================
           WARRANTY CHANGE
        ====================== */
        warrantyCheckbox.addEventListener("change", updateTotals);

        /* ======================
           JOURNEY CHANGE
        ====================== */
        journeyCheckbox.addEventListener("change", updateTotals);

        /* ======================
           DEFAULT STATES ON PAGE LOAD
        ====================== */
        journeyCheckbox.checked = true;

        // Set default package to "Package 3" if it exists
        let defaultPackage = Array.from(packages).find(pkg => pkg.dataset.name === "Package 3");

        // Fallback to first package
        if (!defaultPackage && packages.length > 0) {
            defaultPackage = packages[0];
        }

        if (defaultPackage) {
            packages.forEach(p => p.classList.remove("active"));
            defaultPackage.classList.add("active");
            document.querySelector('.cb-cart-title').textContent = defaultPackage.dataset.name;
        }

        // Calculate totals on page load
        updateTotals();

    });
</script>

@endpush
