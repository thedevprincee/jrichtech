@php
    $setting = App\Models\Setting::first();
    $announcementModal = App\Models\AnnouncementModal::first();
    $productCategories = App\Models\Category::where(['status' => 1])->get();
    $megaMenuCategories = App\Models\MegaMenuCategory::orderBy('serial','asc')->where('status',1)->get();
    $megaMenuBanner = App\Models\BannerImage::find(1);
    $modalProducts = App\Models\Product::all();
    $currencySetting = App\Models\Setting::first();
    $menus = App\Models\MenuVisibility::select('status','id')->get();
    $customPages = App\Models\CustomPage::where('status',1)->get();
    $googleAnalytic = App\Models\GoogleAnalytic::first();
    $facebookPixel = App\Models\FacebookPixel::first();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @yield('title')
    @yield('meta')

    <link rel="icon" type="image/png" href="{{ asset($setting->favicon) }}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/aos.css') }}">

        <link href="{{ asset('assets/style/css.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/style/css1.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/style/css2.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/style/css3.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/style/css4.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/style/mystyle.css') }}" rel="stylesheet">
        
        <link rel="preload" as="style" href="{{ asset('assets/style/app-12748960.css') }}">
		<link rel="modulepreload" href="{{ asset('assets/script/app-e1185e0f.js') }}">
		<link rel="stylesheet" href="{{ asset('assets/style/app-12748960.css') }}">
		<script type="module" src="{{ asset('assets/script/app-e1185e0f.js') }}"></script>    
		
		<style id="_goober"> @keyframes go2264125279{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go3020080000{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}@keyframes go463499852{from{transform:scale(0) rotate(90deg);opacity:0;}to{transform:scale(1) rotate(90deg);opacity:1;}}@keyframes go1268368563{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}@keyframes go1310225428{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go651618207{0%{height:0;width:0;opacity:0;}40%{height:0;width:6px;opacity:1;}100%{opacity:1;height:10px;}}@keyframes go901347462{from{transform:scale(0.6);opacity:0.4;}to{transform:scale(1);opacity:1;}}.go4109123758{z-index:9999;}.go4109123758 > *{pointer-events:auto;}</style>
        
        <!--jquery library js-->
        <script src="{{ asset('user/js/jquery-3.6.0.min.js') }}"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
    
        @if ($googleAnalytic->status == 1)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $googleAnalytic->analytic_id }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ $googleAnalytic->analytic_id }}');
        </script>
        @endif

        @if ($facebookPixel->status == 1)
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ $facebookPixel->app_id }}');
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id={{ $facebookPixel->app_id }}&ev=PageView&noscript=1"
        /></noscript>
        @endif

        <script>
            var end_year = '';
            var end_month = '';
            var end_date = '';
            var capmaign_time = '';
            var campaign_end_year = ''
            var campaign_end_month = ''
            var campaign_end_date = ''
            var campaign_hour = ''
            var campaign_min = ''
            var campaign_sec = ''
            var productIds = [];
            var productYears = [];
            var productMonths = [];
            var productDays = [];
        </script>
</head>

<body class="font-sans" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    <div class="fixed h-16 top-0 inset-x-0 p-3 md:px-12 bg-white z-50 shadow-2xl shadow-primary/30">
        <div class="flex items-center h-full">
            <div class="">
                <a href="#" class="flex items-center space-x-2">
                    <img src="{{ asset($setting->logo) }}" class="h-8" alt="J-Rich Tech">
                </a>
            </div>
    
            <div class="hidden md:flex space-x-8 items-center flex-1 mx-12">
                <a href="/#hero" class="home-nav-link">About</a>
                <a href="/#howto" class="home-nav-link">How it works</a>
                <a href="/#specialty" class="home-nav-link">Features</a>
                <a href="/#testimonials" class="home-nav-link">Testimonials</a>
            </div>
    
            <div class="flit hidden md:flex space-x-4">
                <a href="/login" class="home-nav-link">Sign In</a>
                <a href="/register" class="home-nav-link btn bg-info text-white">Sign Up</a>
            </div>
            <div class="md:hidden flex items-center justify-end flex-1 space-x-2">
                <a href="/login" class="home-nav-link">Sign In</a>
                <a href="/register" class="home-nav-link btn bg-info text-white p-2 px-3">Sign Up</a>
            </div>
        </div>
    </div>
    @yield('public-content')

    @php
        $setting = App\Models\Setting::first();
        $footer = App\Models\Footer::first();
        $links = App\Models\FooterSocialLink::all();
        $footerLinks = App\Models\FooterLink::all();
    @endphp
 

    <div class="relative w-full p-8  md:p-24 space-y-16 bg-black text-white">
        <div class="grid grid-cols-1 md:grid-cols-10 gap-8">
            <div class="space-y-4 md:space-y-8 col-span-3 text-2xl">
                <img src="{{ asset($setting->logo2) }}" alt="J-Rich Tech">
    
                <p class="text-base md:text-sm text-center">
                    J-Rich Tech was born out of a shared vision: to create
                    an accessible platform for both seasoned traders and
                    newbies
                </p>
            </div>
            <div class="space-y-8 col-span-3  px-12 md:px-4">
                <p class="font-semibold text-info">LINKS</p>
    
                <div class="space-y-4 text-white">
                    <a href="#hero" class="footer-link">About</a>
                    <a href="#howto" class="footer-link">How it works</a>
                    <a href="#specialty" class="footer-link">Features</a>
                    <a href="#testimonials" class="footer-link">Testimonials</a>
                    <a href="./login.html" class="footer-link">Sign in</a>
                    <a href="./register.html" class="footer-link">Sign up</a>
                </div>
            </div>
            <div class="space-y-8 col-span-3  px-12 md:px-4">
                <p class="font-semibold text-info">LEGAL</p>
    
                <div class="space-y-4 text-white">
                    <a href="#" class="footer-link">Terms of Use</a>
                    <a href="#" class="footer-link">Terms of conditions</a>
                    <a href="#" class="footer-link">Privacy policy</a>
                    <a href="#" class="footer-link">Cookie policy</a>
                </div>
            </div>
            
        </div>
    </div>
    
    <!--============================
        FOOTER PART END
    ==============================-->


    <!--============================
        SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
        SCROLL BUTTON  END
    ==============================-->

    @php
        $isAuth = false;
        if(Auth::check()) $isAuth = true;
        $shop_page = App\Models\ShopPage::first();
        $max_val = $shop_page->filter_price_range;
        $currencySetting = App\Models\Setting::first();
        $currency_icon = $currencySetting->currency_icon;
        $tawk_setting = App\Models\TawkChat::first();
        $cookie_consent = App\Models\CookieConsent::first();
        $setting = App\Models\Setting::first();

    @endphp


    @if ($tawk_setting->status == 1)
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='{{ $tawk_setting->chat_link }}';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>

    @endif

    @if ($cookie_consent->status == 1)
    <script src="{{ asset('user/js/cookieconsent.min.js') }}"></script>

    <script>
    window.addEventListener("load",function(){window.wpcc.init({"border":"{{ $cookie_consent->border }}","corners":"{{ $cookie_consent->corners }}","colors":{"popup":{"background":"{{ $cookie_consent->background_color }}","text":"{{ $cookie_consent->text_color }} !important","border":"{{ $cookie_consent->border_color }}"},"button":{"background":"{{ $cookie_consent->btn_bg_color }}","text":"{{ $cookie_consent->btn_text_color }}"}},"content":{"href":"{{ route('privacy-policy') }}","message":"{{ $cookie_consent->message }}","link":"{{ $cookie_consent->link_text }}","button":"{{ $cookie_consent->btn_text }}"}})});
    </script>
    @endif

    <!--bootstrap js-->
    <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}"></script>
 
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>

    <script>
        @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
        @endif
    </script>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
    @endif



    <script>
        (function($) {
            "use strict";
            $(document).ready(function () {
                $(".click_first_cat").click();
                $(".click_featured_product").click();

                $("#modalSubscribeForm").on('submit', function(e){
                    e.preventDefault();

                    var isDemo = "{{ env('APP_VERSION') }}"
                    if(isDemo == 0){
                        toastr.error('This Is Demo Version. You Can Not Change Anything');
                        return;
                    }

                    $("#modal-subscribe-spinner").removeClass('d-none')
                    $("#modalSubscribeBtn").addClass('after_subscribe')
                    $("#modalSubscribeBtn").attr('disabled',true);

                    $.ajax({
                        type: 'POST',
                        data: $('#modalSubscribeForm').serialize(),
                        url: "{{ route('subscribe-request') }}",
                        success: function (response) {
                            if(response.status == 1){
                                toastr.success(response.message);
                                $("#modal-subscribe-spinner").addClass('d-none')
                                $("#modalSubscribeBtn").removeClass('after_subscribe')
                                $("#modalSubscribeBtn").attr('disabled',false);
                                let expiredDate = $("#announcement_expired_date").val();
                                expiredDate = expiredDate*1;
                                let date = new Date();
                                date.setDate(date.getDate() + expiredDate);
                                let nextDate = date.toISOString().slice(0,10);
                                sessionStorage.setItem("announcementModal", "yes");
                                sessionStorage.setItem("announcementModalExpiration", nextDate);
                                $("#cross").click();

                            }

                            if(response.status == 0){
                                toastr.error(response.message);
                                $("#modal-subscribe-spinner").addClass('d-none')
                                $("#modalSubscribeBtn").removeClass('after_subscribe')
                                $("#modalSubscribeBtn").attr('disabled',false);
                            }
                        },
                        error: function(err) {
                            toastr.error('Something went wrong');
                            $("#modal-subscribe-spinner").addClass('d-none')
                            $("#modalSubscribeBtn").removeClass('after_subscribe')
                            $("#modalSubscribeBtn").attr('disabled',false);
                        }
                    });
                })

                $("#flexCheckDefault11").on("click", function(){
                    let expiredDate = $("#announcement_expired_date").val();
                    expiredDate = expiredDate*1;
                    let date = new Date();
                    date.setDate(date.getDate() + expiredDate);
                    let nextDate = date.toISOString().slice(0,10);
                    sessionStorage.setItem("announcementModal", "yes");
                    sessionStorage.setItem("announcementModalExpiration", nextDate);
                    $("#cross").click();
                })

                $("#subscriberForm").on('submit', function(e){
                    e.preventDefault();
                    var isDemo = "{{ env('APP_VERSION') }}"
                    if(isDemo == 0){
                        toastr.error('This Is Demo Version. You Can Not Change Anything');
                        return;
                    }

                    $("#subscribe-spinner").removeClass('d-none')
                    $("#SubscribeBtn").addClass('after_subscribe')
                    $("#SubscribeBtn").attr('disabled',true);

                    $.ajax({
                        type: 'POST',
                        data: $('#subscriberForm').serialize(),
                        url: "{{ route('subscribe-request') }}",
                        success: function (response) {
                            if(response.status == 1){
                                toastr.success(response.message);
                                $("#subscribe-spinner").addClass('d-none')
                                $("#SubscribeBtn").removeClass('after_subscribe')
                                $("#SubscribeBtn").attr('disabled',false);
                                $("#subscriberForm").trigger("reset");
                            }

                            if(response.status == 0){
                                toastr.error(response.message);
                                $("#subscribe-spinner").addClass('d-none')
                                $("#SubscribeBtn").removeClass('after_subscribe')
                                $("#SubscribeBtn").attr('disabled',false);
                            }
                        },
                        error: function(err) {
                            toastr.error('Something went wrong');
                            $("#subscribe-spinner").addClass('d-none')
                            $("#SubscribeBtn").removeClass('after_subscribe')
                            $("#SubscribeBtn").attr('disabled',false);
                        }
                    });
                })

                $(".productModalVariant").on("change", function(){
                    let id = $(this).data("product");
                    calculateProductModalPrice(id);

                })



            });
        })(jQuery);

        function addToWishlist(id){

            var isDemo = "{{ env('APP_VERSION') }}"
            if(isDemo == 0){
                toastr.error('This Is Demo Version. You Can Not Change Anything');
                return;
            }

            let isAuth = "{{ $isAuth }}";
            if(!isAuth){
                toastr.error("{{__('user.Please Login First')}}");
                return;
            }
            $.ajax({
                type: 'get',
                url: "{{ url('user/add-to-wishlist/') }}"+ "/" + id,
                success: function (response) {
                    if(response.status == 1){
                        toastr.success(response.message)

                        let currentQty = $("#wishlistQty").text();
                        currentQty = currentQty * 1 + 1*1;
                        $("#wishlistQty").text(currentQty);

                        let mobileMenuCurrentQty = $("#mobileMenuwishlistQty").text();
                        mobileMenuCurrentQty = mobileMenuCurrentQty *1 + 1*1;
                        $("#mobileMenuwishlistQty").text(mobileMenuCurrentQty);
                    }
                    if(response.status == 0){
                        toastr.error(response.message)
                    }
                },
                error: function(response) {
                    alert('error');
                }
            });
        }


        function calculateProductModalPrice(productId){
            $.ajax({
                type: 'get',
                data: $('#productModalFormId-'+productId).serialize(),
                url: "{{ route('calculate-product-price') }}",
                success: function (response) {
                    let qty = $("#productModalQty-"+productId).val();
                    let price = response.productPrice * qty;
                    price = price.toFixed(2);
                    $("#productModalPrice-"+productId).text(price);
                    $("#mainProductModalPrice-"+productId).text(price);
                },
                error: function(err) {
                    alert('error')
                }
            });

        }

        function productModalIncrement(id, current_stock){
            let qty = $("#productModalQty-"+id).val();
            if(parseInt(qty) < parseInt(current_stock)){
                qty = qty*1 + 1*1;
                $("#productModalQty-"+id).val(qty);
                calculateProductModalPrice(id)
            }

        }

        function productModalDecrement(id){
            let qty = $("#productModalQty-"+id).val();
            if(qty > 1){
                qty = qty - 1;
                $("#productModalQty-"+id).val(qty);
                calculateProductModalPrice(id)
            }

        }

        function addToCartMainProduct(productId){
            addToCartInProductModal(productId);
        }


        function addToCartInProductModal(productId){
            $.ajax({
                type: 'get',
                data: $('#productModalFormId-'+productId).serialize(),
                url: "{{ route('add-to-cart') }}",
                success: function (response) {
                    if(response.status == 0){
                        toastr.error(response.message)
                    }
                    if(response.status == 1){
                        toastr.success(response.message)
                        $.ajax({
                            type: 'get',
                            url: "{{ route('load-sidebar-cart') }}",
                            success: function (response) {
                                $("#load_sidebar_cart").html(response)
                                $.ajax({
                                    type: 'get',
                                    url: "{{ route('get-cart-qty') }}",
                                    success: function (response) {
                                        $("#cartQty").text(response.qty);
                                        $("#productModalView-"+productId).modal('hide');
                                    },
                                });
                            },
                        });
                    }
                },
                error: function(response) {

                }
            });
        }

        function addToBuyNow(id){
            $.ajax({
                type: 'get',
                data: $('#productModalFormId-'+id).serialize(),
                url: "{{ route('add-to-cart') }}",
                success: function (response) {
                    if(response.status == 0){
                        toastr.error(response.message)
                    }
                    if(response.status == 1){
                        window.location.href = "{{ route('cart') }}";
                        toastr.success(response.message)
                        $.ajax({
                            type: 'get',
                            url: "{{ route('load-sidebar-cart') }}",
                            success: function (response) {
                                $("#load_sidebar_cart").html(response)
                                $.ajax({
                                    type: 'get',
                                    url: "{{ route('get-cart-qty') }}",
                                    success: function (response) {
                                        $("#cartQty").text(response.qty);
                                    },
                                });
                            },
                        });
                    }
                },
                error: function(response) {

                }
            });
        }

        function sidebarCartItemRemove(id){
            $.ajax({
                type: 'get',
                url: "{{ url('sidebar-cart-item-remove') }}" + "/" + id,
                success: function (response) {
                    toastr.success(response.message)
                    let ifCheckoutPage = "{{ Route::is('user.checkout.payment') || Route::is('user.checkout.checkout') || Route::is('user.checkout.billing-address') ? 'yes' : 'no' }}";
                    if(ifCheckoutPage == 'yes'){
                        window.location.reload();
                    }
                    $.ajax({
                        type: 'get',
                        url: "{{ route('load-sidebar-cart') }}",
                        success: function (response) {
                            $("#load_sidebar_cart").html(response)
                            $.ajax({
                                type: 'get',
                                url: "{{ route('get-cart-qty') }}",
                                success: function (response) {
                                    $("#cartQty").text(response.qty);
                                },
                            });
                        },
                    });

                    $.ajax({
                        type: 'get',
                        url: "{{ route('load-main-cart') }}",
                        success: function (response) {
                            $("#CartResponse").html(response)
                        },
                    });
                },
            });

        }

        function addToCompare(id){
            $.ajax({
                type: 'get',
                url: "{{ url('add-to-compare') }}" + "/" + id,
                success: function (response) {
                    if(response.status == 1){
                        toastr.success(response.message)
                        let currentQty = $("#compareQty").text();
                        currentQty = currentQty * 1 + 1*1;
                        $("#compareQty").text(currentQty);

                        let mobileMenuCurrentQty = $("#mobileMenuCompareQty").text();
                        mobileMenuCurrentQty = mobileMenuCurrentQty *1 + 1*1;
                        $("#mobileMenuCompareQty").text(mobileMenuCurrentQty);

                    }else{
                        toastr.error(response.message)
                    }
                },
            });

        }

    </script>
    <script src="{{ asset('assets/script/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
         
</body>

</html>
