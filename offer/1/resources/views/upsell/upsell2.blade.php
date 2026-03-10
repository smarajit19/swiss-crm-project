@include('layouts.user.upsell2-header')

<div class="container">
    <img
        src="{{ asset('upsell2/images/logo.png') }}"
        alt=""
        class="logo"
        width="150"
        loading="lazy" />
    <img
        src="{{ asset('upsell2/images/steps.png') }}"
        alt=""
        class="steps hide-mob"
        style="float: right"
        loading="lazy" />
    <img
        src="{{ asset('upsell2/images/steps-mob.png') }}"
        alt=""
        class="steps show-mob"
        loading="lazy" />
</div>
<p class="ups1-txt1 up2s1-txt1">
    <img
        src="{{ asset('upsell2/images/warning.png') }}"
        class="fls-img2"
        width="50"
        loading="lazy" />Offer will expire when the window is closed.
</p>
</div>
<div class="up-sec1">
    <div class="container">
        <p class="up-txt1">HURRY—Don't Miss Your BONUS OFFER!</p>
        <p class="up-txt2">
            This is your ONLY chance to
            <span style="color: #009a06">SAVE BIG
                <!--<span class="discount-percentage">70%</span> --></span>
            on the Nano Car Cloth
        </p>
        <p class="clearall"></p>
        <div class="up-s1-Box">
            <div class="up-s1-lft">
                <p class="ups1-txt2 hide-mob">
                    Enjoy your <br />
                    <b class="discount-percentage" style="color: #ff4106">EXCLUSIVE</b>
                    <b style="color: #ff4106">OFFER</b> on the <br /><span
                        style="color: #009eaa">Nano Car Cloth</span>
                </p>
                <div class="up-s1-rght show-mob">
                    <div class="slide-div desk_slider_div">
                        <div>
                            <img
                                src="{{ asset('upsell2/images/banner.png') }}"
                                class="prd-slide"
                                alt="img"
                                loading="lazy" />
                        </div>
                        <div>
                            <img
                                src="{{ asset('upsell2/images/feature_pc1-hero.png') }}"
                                class="prd-slide"
                                alt="img"
                                loading="lazy" />
                        </div>
                        <div>
                            <img
                                src="{{ asset('upsell2/images/feature_pc2-hero.png') }}"
                                class="prd-slide"
                                alt="img"
                                loading="lazy" />
                        </div>
                        <div>
                            <img
                                src="{{ asset('upsell2/images/feature_pc3-hero.png') }}"
                                class="prd-slide"
                                alt="img"
                                loading="lazy" />
                        </div>
                    </div>
                    <div class="slider-nav desk_slider_nav">
                        <div>
                            <img
                                src="{{ asset('upsell2/images/banner-hero.png') }}"
                                class="prd-nav"
                                alt="img"
                                loading="lazy" />
                        </div>
                        <div>
                            <img
                                src="{{ asset('upsell2/images/feature_pc1.png') }}"
                                class="prd-nav"
                                alt="img"
                                loading="lazy" />
                        </div>
                        <div>
                            <img
                                src="{{ asset('upsell2/images/feature_pc2.png') }}"
                                class="prd-nav"
                                alt="img"
                                loading="lazy" />
                        </div>
                        <div>
                            <img
                                src="{{ asset('upsell2/images/feature_pc3.png') }}"
                                class="prd-nav"
                                alt="img"
                                loading="lazy" />
                        </div>
                    </div>
                </div>
                <p class="clearall"></p>
                <div class="prt-upA">
                    <div class="show-mob">
                        <p class="ups1-txt2">
                            Enjoy your<br />
                            <b class="discount-percentage" style="color: #ff4106">EXCLUSIVE 70%
                            </b>
                            <b style="color: #ff4106">offer</b> on the
                            <span style="color: #009eaa">Nano Car Cloth</span>
                        </p>
                    </div>
                    <p class="clearall"></p>
                    <ul class="ups1-list">
                        <li>Available to the First 15 Shoppers</li>
                        <li>Made with Nanotechnology</li>
                        <li>Restores Your Car's Shine</li>
                        <li>Highest-Quality Standard</li>
                        <li>Unmatched Cleaning Power</li>
                    </ul>
                    <p class="clearall"></p>
                    <div class="save-strip up2save-strip">
                        <p>
                            <small
                                style="font-weight: bold; color: #ff0f0f; font-size: 16px">Only 5 Nano Car Cloths left!</small><br />
                            <b><span id="stopwatch">04:41</span> MINUTES</b>
                        </p>
                    </div>
                    <p class="clearall"></p>
                    <div
                        class="d-flex justify-content-between align-items-center m-auto customWidth pt-1 pb-0">
                        <h5 class="m-0">Select Quantity</h5>
                        <ul
                            class="quantityList d-flex justify-content-center align-items-center ml-2 mb-0">
                            <li>
                                <label for="q1">
                                    <input
                                        type="radio"
                                        class="d-none"
                                        name="quantity"
                                        id="q1"
                                        data-origPrice="39.94"
                                        data-Price="9.99"
                                        value="1"
                                        checked />
                                    <span>1</span>
                                </label>
                            </li>
                            <li>
                                <label for="q2">
                                    <input
                                        type="radio"
                                        class="d-none"
                                        name="quantity"
                                        id="q2"
                                        data-origPrice="79.88"
                                        data-Price="17.98"
                                        value="2" />
                                    <span>2</span>
                                </label>
                            </li>
                            <li>
                                <label for="q3">
                                    <input
                                        type="radio"
                                        class="d-none"
                                        name="quantity"
                                        id="q3"
                                        data-origPrice="119.82"
                                        data-Price="23.98"
                                        value="3" />
                                    <span>3</span>
                                </label>
                            </li>
                            <li>
                                <label for="q4">
                                    <input
                                        type="radio"
                                        class="d-none"
                                        name="quantity"
                                        id="q4"
                                        data-origPrice="159.76"
                                        data-Price="27.97"
                                        value="4" />
                                    <span>4</span>
                                </label>
                            </li>
                            <li>
                                <label for="q5">
                                    <input
                                        type="radio"
                                        class="d-none"
                                        name="quantity"
                                        id="q5"
                                        data-origPrice="199.70"
                                        data-Price="29.97"
                                        value="5" />
                                    <span>5</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <p class="clearall"></p>
                    <div class="up-prcBox">
                        <div class="prcDv prcDvline">
                            <div class="rtl-prc">
                                <p class="prc-txt">Retail Price:</p>
                                <div class="float-prc1">
                                    <p class="original">$199.70</p>
                                </div>
                            </div>
                        </div>
                        <div class="prcDv">
                            <div class="rtl-prc ofr-prc">
                                <p class="prc-txt">Offer Price:</p>
                                <div class="float-prc1 float-prc2">
                                    <p class="productPrice">$29.97</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="clearall"></p>
                    <button
                        id="i6t8ex"
                        type="button"
                        class="packageBtn pulse fk-i6t8ex">
                        Add To Order
                    </button>
                    <p class="clearall"></p>
                </div>
            </div>
            <div class="up-s1-rght hide-mob">
                <div class="slide-div desk_slider_div">
                    <div>
                        <img
                            src="{{ asset('upsell2/images/banner.png') }}"
                            class="prd-slide"
                            alt="img"
                            loading="lazy" />
                    </div>
                    <div>
                        <img
                            src="{{ asset('upsell2/images/feature_pc1-hero.png') }}"
                            class="prd-slide"
                            alt="img"
                            loading="lazy" />
                    </div>
                    <div>
                        <img
                            src="{{ asset('upsell2/images/feature_pc2-hero.png') }}"
                            class="prd-slide"
                            alt="img"
                            loading="lazy" />
                    </div>
                    <div>
                        <img
                            src="{{ asset('upsell2/images/feature_pc3-hero.png') }}"
                            class="prd-slide"
                            alt="img"
                            loading="lazy" />
                    </div>
                </div>
                <div class="slider-nav desk_slider_nav">
                    <div>
                        <img
                            src="{{ asset('upsell2/images/banner-hero.png') }}"
                            class="prd-nav"
                            alt="img"
                            loading="lazy" />
                    </div>
                    <div>
                        <img
                            src="{{ asset('upsell2/images/feature_pc1.png') }}"
                            class="prd-nav"
                            alt="img"
                            loading="lazy" />
                    </div>
                    <div>
                        <img
                            src="{{ asset('upsell2/images/feature_pc2.png') }}"
                            class="prd-nav"
                            alt="img"
                            loading="lazy" />
                    </div>
                    <div>
                        <img
                            src="{{ asset('upsell2/images/feature_pc3.png') }}"
                            class="prd-nav"
                            alt="img"
                            loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
        <p class="clearall"></p>
        <a href="{{ route('thank-you') }}" class="no-thank">
            No thanks, I don’t need an awesome deal
        </a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ asset('upsell2/js/slick.js') }}"></script>
<style>
    .btn-loader {
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-top-color: #fff;
        border-radius: 50%;
        animation: btn-spin 0.8s linear infinite;
        vertical-align: middle;
        margin-right: 8px;
    }
    @keyframes btn-spin {
        to {
            transform: rotate(360deg);
        }
    }
    #i6t8ex.is-loading {
        opacity: 0.85;
        pointer-events: none;
    }
</style>

<script>
    const pricingMap = {
        1: { retail: 31.98, offer: 15.99 },
        2: { retail: 63.96, offer: 28.78 },
        3: { retail: 95.94, offer: 38.38 },
        4: { retail: 127.92, offer: 44.77 },
        5: { retail: 159.90, offer: 47.97 }
    };

    function formatPrice(price) {
        return "$" + Number(price).toFixed(2);
    }

    function updatePrices(quantity) {
        const selected = pricingMap[quantity] || pricingMap[1];
        $(".original").text(formatPrice(selected.retail));
        $(".productPrice").text(formatPrice(selected.offer));
    }

    $(document).on("change", "input[name='quantity']", function () {
        updatePrices($(this).val());
    });

    $(document).on("click", "#i6t8ex", function (e) {
        e.preventDefault();
        const $btn = $(this);
        if ($btn.hasClass("is-loading")) {
            return;
        }

        const originalText = $btn.data("original-text") || $btn.text().trim();
        $btn.data("original-text", originalText);
        $btn
            .addClass("is-loading")
            .prop("disabled", true)
            .html('<span class="btn-loader"></span>Processing...');

        const quantity = $("input[name='quantity']:checked").val() || 1;

        $.ajax({
            url: "{{ route('upsell2.store') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                quantity: quantity
            },
            success: function (response) {
                if (response.status) {
                    window.location.href = $(".no-thank").attr("href");
                } else {
                    $btn
                        .removeClass("is-loading")
                        .prop("disabled", false)
                        .text(originalText);
                    alert(response.message || "Something went wrong");
                }
            },
            error: function () {
                $btn
                    .removeClass("is-loading")
                    .prop("disabled", false)
                    .text(originalText);
                alert("Server error");
            }
        });
    });

    updatePrices($("input[name='quantity']:checked").val() || 1);

    $(".slide-div").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: ".slider-nav",
        autoplay: false,
        autoplaySpeed: 11000,
        dots: false,
    });
    $(".slider-nav").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".slide-div",
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        arrows: false,
    });
</script>
</body>

</html>
