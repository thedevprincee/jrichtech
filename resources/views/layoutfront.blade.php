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
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('title')
        @yield('meta')
        <link rel="icon" type="image/png" href="{{ asset($setting->favicon) }}">
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
        <link rel="stylesheet" href="{{ asset('./toastr/toastr.min.css') }}">
		{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" > --}}
    </head>
    <body class="font-sans" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
        <div class="fixed h-16 top-0 inset-x-0 p-3 md:px-12 bg-white z-50 shadow-2xl shadow-primary/30">
    <div class="flex items-center h-full">
        <div class="">
            <a href="#" class="flex items-center space-x-2">
                <img src="./assets/images/logo.png" class="h-8" alt="J-Rich Tech">
            </a>
        </div>

        <div class="hidden md:flex space-x-8 items-center flex-1 mx-12">
            <a href="/#hero" class="home-nav-link">About</a>
            <a href="/#howto" class="home-nav-link">How it works</a>
            <a href="/#specialty" class="home-nav-link">Features</a>
            <a href="/#testimonials" class="home-nav-link">Testimonials</a>
        </div>

        <div class="flit hidden md:flex space-x-4">
            <a href="./login" class="home-nav-link">Sign In</a>
            <a href="./register" class="home-nav-link btn bg-info text-white">Sign Up</a>
        </div>
        <div class="md:hidden flex items-center justify-end flex-1 space-x-2">
            <a href="./login" class="home-nav-link">Sign In</a>
            <a href="./register" class="home-nav-link btn bg-info text-white p-2 px-3">Sign Up</a>
        </div>
    </div>
</div>


@yield('public-content')


<div class="relative w-full p-8  md:p-24 space-y-16 bg-black text-white">
    <div class="grid grid-cols-1 md:grid-cols-10 gap-8">
        <div class="space-y-4 md:space-y-8 col-span-3 text-2xl">
            <img src="./assets/images/logo-white.png" alt="J-Rich Tech">

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


<script src="{{ asset('assets/script/aos.js') }}"></script>
<script>
    AOS.init();
</script>
     
<script src="{{ asset('./toastr/toastr.min.js') }}"></script>
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}



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




    

</body></html>