<div class="clearall"></div>

<div class="footer">
    <div class="container">

        <p class="ftr-txt1">
            Copyright &copy; {{ date('Y') }} Total Heat Pro - All rights reserved.
        </p>

        <p class="ftr-txt1">
            <a href="{{ url('contact') }}" target="_blank" class="link">Contact Us</a> |
            <a href="{{ url('terms') }}" target="_blank" class="link">Terms of Use</a> |
            <a href="{{ url('privacy') }}" target="_blank" class="link">Privacy Policy</a>
        </p>

        <center>
            <a href="//www.dmca.com/Protection/Status.aspx?ID=0b693e6c-31d5-424a-8417-2bacb9b8923c"
                title="DMCA.com Protection Status" target="_blank" class="dmca-badge">
                <img src="https://images.dmca.com/Badges/dmca_protected_sml_120n.png?ID=0b693e6c-31d5-424a-8417-2bacb9b8923c"
                    alt="DMCA Protection" loading="lazy" />
            </a>
        </center>

    </div>
</div>

<!-- FOMO Notification -->
<div class="w_fomo_wrapper up-down" id="fomohideformobile">
    <div class="w_outer">
        <div class="w_inner">
            <div class="w_item">
                <div class="w_thumb">
                    <img src="{{ asset('images/product1a.png') }}" alt="" class="img-view no-lazy" loading="lazy">
                </div>
                <div class="w_desc">
                    <p>
                        <span id="randFirst">James</span>
                        <span id="randLast">P</span>. in
                        <span id="randLocation">Albuquerque, NM</span>
                        <br>
                        purchased
                        <strong>
                            <font id="randQuantity"></font>x Total Heat Pro<span id="quantity-plural"></span>
                        </strong>
                    </p>
                    <p>
                        About <span id="randTime">23</span> minutes ago
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================= JS FILES ================= -->
<!--
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/bookmarkscroll.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/slick-cust.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

<!-- Swiper Product Gallery -->
<script>
    document.addEventListener("DOMContentLoaded", function() {

        var thumbsSwiper = new Swiper(".product-thumbs", {
            spaceBetween: 10,
            slidesPerView: 4,
        });

        var mainSwiper = new Swiper(".product-swiper", {
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            thumbs: {
                swiper: thumbsSwiper,
            },
        });

    });
</script>

<!-- Countdown Timer -->
<script>
    var spd = 100;
    var spdVal = 10;
    var cntDown = 5 * 60 * spdVal;

    setInterval(function() {

        cntDown--;
        if (cntDown < 0) return false;

        var mn = Math.floor((cntDown / spdVal) / 60);
        var sc = Math.floor((cntDown / spdVal) % 60);

        mn = (mn < 10 ? '0' + mn : mn);
        sc = (sc < 10 ? '0' + sc : sc);

        document.getElementById('stopwatch').innerHTML = mn + ':' + sc;

    }, spd);
</script>

<!-- Sticky Checkout -->
<script>
    function stickycall() {

        var wh = $(window).innerWidth();
        var $sticky = $("#sticky");

        if (wh > 767) {

            if (!$sticky.parent().hasClass('sticky-wrapper')) {
                $sticky.sticky({
                    topSpacing: 35,
                    bottomSpacing: 300
                });
            }

        } else {

            if ($sticky.parent().hasClass('sticky-wrapper')) {
                $sticky.unstick();
            }

        }
    }

    $(document).ready(function() {

        stickycall();

        $(window).resize(function() {
            stickycall();
        });

        $('.fieldToggle').click(function() {

            if ($('#togData').prop("checked") === true) {
                $('.shipaddress').slideUp();
            } else {
                $('.shipaddress').slideDown();
            }

        });

        $(document).on('click', '.cb-package-container', function() {

            $('html,body').animate({
                scrollTop: $("#cust-info").offset().top
            }, 2000);

        });

    });
</script>
@stack('scripts')

</body>

</html>
