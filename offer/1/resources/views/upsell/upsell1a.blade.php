@include('layouts.user.upsell1a-header')

<div class="header">
    <div class="container">
        <img src="{{ asset('upsell1a/images/logo.png') }}" alt="" class="logo" loading="lazy" />
        <img
            src="{{ asset('upsell1a/images/steps.png') }}"
            alt=""
            class="steps hide-mob"
            style="float: right"
            loading="lazy" />
        <img
            src="{{ asset('upsell1a/images/steps-mob.png') }}"
            alt=""
            class="steps show-mob d-none"
            loading="lazy" />
    </div>
</div>
<div class="up-sec1">
    <div class="container">
        <p class="up-txt1" style="margin-bottom: 15px">
            HURRY—Don't Miss Your BONUS OFFER!
        </p>

        <p class="clearall"></p>
        <div class="up-s1-Box">
            <div class="up-s1-lft up-s1-lft-new">
                <p class="ups1-txt1 up2s1-txt1 hide-mob">
                    <img
                        src="{{ asset('upsell1a/images/warning.png') }}"
                        class="fls-img2"
                        width="50"
                        loading="lazy" />
                    Offer will expire when the window is closed.
                </p>
                <p class="ups1-txt2 hide-mob">
                    TODAY ONLY: Get an Extra <br />
                    <span style="color: #00a070">Vital Smart Glasses</span> for just
                    <span style="color: #ee404c">$59.99!</span>
                </p>

                <p class="clearall"></p>

                <p class="ups1-txt2 ups11 show-mob">
                    Get an Extra <b style="color: #00a070">Vital Smart Glasses</b> for
                    <b style="color: #ee404c">$49.99</b> Today Only!
                </p>
                <div class="prt-upA">
                    <div class="show-mob">
                        <p class="ups1-txt1 up2s1-txt1">
                            <img
                                src="{{ asset('upsell1a/images/warning.png') }}"
                                class="fls-img2"
                                width="50"
                                loading="lazy" />
                            Offer will expire when the window is closed.
                        </p>
                        <p class="ups1-txt2 hide-mob">
                            Enjoy your <br /><b style="color: #ee404c">EXCLUSIVE OFFER</b><br />
                            on the
                            <span style="color: #009eaa">Vital Smart Glasses!</span>
                        </p>
                    </div>
                    <p class="clearall"></p>
                    <div class="vip-box" onclick="fnActive(this)">
                        <div class="container-orders">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="your-order bright-bar">
                                        <div class="form-check">
                                            <p class="text-black">EXCLUSIVE VIP OFFER</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-right: 8px">

                                <div class="col-12">
                                    <div class="right-box px-3 pe-0">
                                        <p class="fs-6 fw-bold pt-0">
                                            <span class="undr"><span class="d-block">1x Vital Smart Glasses</span>
                                                <span class="d-block" style="color: #000">1x VIP Customer Perks</span></span>
                                            <span class="right-span">$59 value</span>
                                        </p>

                                        <p class="bull">
                                            <span><i class="fa fa-check mx-1" aria-hidden="true"></i>Free Monthly Products</span>
                                            <span class="right-span">$49 value</span>
                                        </p>

                                        <p class="bull">
                                            <span><i class="fa fa-check mx-1" aria-hidden="true"></i>50% Off Select Products</span>
                                            <span class="right-span">$19.99 value</span>
                                        </p>

                                        <p class="bull">
                                            <span><i class="fa fa-check mx-1" aria-hidden="true"></i>Free Expedited Shipping</span>
                                            <span class="right-span">$9.99 value</span>
                                        </p>

                                        <!-- <p class="small-font mb-3">
                          $24.99 monthly. No Obligation. Cancel Anytime.
                        </p> -->

                                        <div id="vip-offer" data-price="19.99" style="text-align: left; margin-bottom: 7px;" class="small-font mb-5">
                                            $19.99 monthly. No Obligation. Cancel Anytime.
                                        </div>
                                    </div>
                                </div>
                                <div class="save-circle">
                                    <p>Save <br />$100</p>
                                </div>
                                <div class="save-circleTwo"></div>
                            </div>
                        </div>
                    </div>
                    <!-- new -->

                    <p class="clearall"></p>
                    <div class="save-strip save-strip-new up2save-strip">
                        <p>
                            <small
                                style="font-weight: bold; color: #ff0f0f; font-size: 16px">Only <?php echo rand(6,9); ?> Extra Bonus Vital Smart Glasses left!</small><br />
                            <b><span id="stopwatch">04:41</span> MINUTES</b>
                        </p>
                    </div>
                    <p class="clearall"></p>
                    <p class="clearall"></p>
                    <div class="up-prcBox">
                        <div class="prcDv prcDvline">
                            <div class="rtl-prc">
                                <p class="prc-txt">Retail Price:</p>
                                <div class="float-prc1">
                                    <p class="original">$199.98</p>
                                </div>
                            </div>
                        </div>
                        <div class="prcDv">
                            <div class="rtl-prc ofr-prc">
                                <p class="prc-txt">Offer Price:</p>
                                <div class="float-prc1 float-prc2">
                                    <p class="productPrice yllw_prc yllw_prc-trans">$59.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="clearall"></p>
                    <button
                        id="i6t8ex"
                        class="packageBtn green-packageBtn pulse fk-i6t8ex">
                        Complete My Order
                    </button>
                    <p class="clearall"></p>
                </div>
            </div>
        </div>
        <p class="clearall"></p>
        <a href="{{ route('upsell2') }}" class="no-thank">
            No thanks, I don't want this great offer.
        </a>
    </div>
</div>
</body>

</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    const checkoutDebugKey = 'checkout_api_debug_log';
    try {
        const checkoutDebugRaw = sessionStorage.getItem(checkoutDebugKey);
        if (checkoutDebugRaw) {
            console.log('Checkout API debug log from previous page:', JSON.parse(checkoutDebugRaw));
        }
    } catch (e) {
        console.warn('Unable to read checkout debug log', e);
    }

    function setUpsell1Loading(isLoading) {
        const $btn = $("#i6t8ex");
        const originalText = $btn.data("original-text") || $btn.text().trim();
        $btn.data("original-text", originalText);

        if (isLoading) {
            $btn
                .addClass("is-loading")
                .prop("disabled", true)
                .html('<span class="btn-loader"></span>Processing...');
        } else {
            $btn
                .removeClass("is-loading")
                .prop("disabled", false)
                .text(originalText);
        }
    }

    $(document).on("click", "#i6t8ex", function(e) {

        var vip_price = $("#vip-offer").data("price");

        var priceText = $(".productPrice").text(); // "$59.99"
        var upsell_price = priceText.replace('$', ''); // "59.99"
        e.preventDefault();
        if ($(this).hasClass("is-loading")) {
            return;
        }
        setUpsell1Loading(true);

        $.ajax({

            url: "{{ route('upsell1a.store') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                vip_price: vip_price,
                upsell_price: upsell_price,
            },

            success: function(response) {

                if (response.status) {

                    window.location.href = "{{ route('upsell2') }}";

                } else {
                    setUpsell1Loading(false);
                    alert("Something went wrong");

                }

            },

            error: function() {
                setUpsell1Loading(false);
                alert("Server error");
            }

        });

    });
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    let display = document.getElementById("stopwatch");
    let time = display.innerText.split(":");

    let minutes = parseInt(time[0]);
    let seconds = parseInt(time[1]);

    let totalSeconds = (minutes * 60) + seconds;

    function updateTimer() {
        if (totalSeconds <= 0) {
            display.innerText = "00:00";
            clearInterval(timerInterval);
            return;
        }

        totalSeconds--;

        let m = Math.floor(totalSeconds / 60);
        let s = totalSeconds % 60;

        m = m < 10 ? "0" + m : m;
        s = s < 10 ? "0" + s : s;

        display.innerText = m + ":" + s;
    }

    let timerInterval = setInterval(updateTimer, 1000);

});
</script>
