@php
    $setting = App\Models\Setting::first();
    $user = Auth::guard('web')->user();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @yield('title')
    <link rel="icon" type="image/png" href="{{ asset($setting->favicon) }}">

			<link rel="stylesheet" href="{{ asset('user/css/bootstrap1.min.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/themefy_icon/themify-icons.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/niceselect/css/nice-select.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/owl_carousel/css/owl.carousel.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/gijgo/gijgo.min.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/font_awesome/css/all.min.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/tagsinput/tagsinput.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/datepicker/date-picker.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/vectormap-home/vectormap-2.0.2.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/scroll/scrollable.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/datatable/css/jquery.dataTables.min.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/datatable/css/responsive.dataTables.min.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/datatable/css/buttons.dataTables.min.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/text_editor/summernote-bs4.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/vendors/morris/morris.css') }}">
			<link rel="stylesheet" href="{{ asset('user/vendors/material_icon/material-icons.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/css/metisMenu.css') }}">
			<link rel="stylesheet" href="{{ asset('user/css/style1.css') }}" />
			<link rel="stylesheet" href="{{ asset('user/css/colors/default.css') }}" id="colorSkinCSS">


    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/clockpicker/dist/bootstrap-clockpicker.css') }}">

    @include('theme_style_css')
    <!--jquery library js-->

    <script>
        var capmaign_time = 0;
        var filter_max_val = 1000;
        var currency_icon = $;
        var themeColor = "{{ $setting->theme_one }}";
    </script>

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

<body class="crm_body_bg">



    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="{{ route('user.dashboard') }}"><img src="{{ asset($setting->logo) }}" alt></a>
            <a class="small_logo" href="{{ route('user.dashboard') }}"><img src="{{ asset($setting->favicon) }}" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li>
                <a href="{{ route('user.dashboard') }}" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('user.trade') }}" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/2.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Trade </span>
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('user.dashboard') }}" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/3.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Transactions </span>
                    </div>
                </a>
            </li>
    
            <h4 class="menu-text"><span>CUSTOM</span> <i class="fas fa-ellipsis-h"></i> </h4>
            <li>
                <a href="{{ route('user.dashboard') }}" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Wallet</span>
                    </div>
                </a>
            </li>
    
            
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/5.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Application </span>
                    </div>
                </a>
                <ul>
                    <li><a href="editor.html">editor</a></li>
                    <li><a href="mail_box.html">Mail Box</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </li>
        <li>
            <a href="{{ route('user.my-profile') }}" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/15.svg" alt> 
            </div>
            <div class="nav_title">
                <span>My Profile </span>
            </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.change-password') }}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/2.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Change Password </span>
                </div>
            </a>
        </li>
    
            <h4 class="menu-text"><span><hr></span> <i class="fas fa-ellipsis-h"></i> </h4>
        
            <li>
                <a href="{{ route('user.logout') }}" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/15.svg" alt> 
                    </div>
                    <div class="nav_title">
                        <span>Logout </span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
    
        

    
    
<section class="main_content dashboard_part large_header_bg">

    <div class="container-fluid g-0">
    <div class="row">
    <div class="col-lg-12 p-0 ">
    <div class="header_iner d-flex justify-content-between align-items-center">
    <div class="sidebar_icon d-lg-none">
    <i class="ti-menu"></i>
    </div>
    <label class="form-label switch_toggle d-none d-lg-block" for="checkbox">
    <input type="checkbox" id="checkbox">
    <div class="slider round open_miniSide"></div>
    </label>
    <div class="header_right d-flex justify-content-between align-items-center">
    <div class="header_notification_warp d-flex align-items-center">
   
    <li>
    <a class="bell_notification_clicker" href="#"> <img src="img/icon/bell.svg" alt>
    <span>2</span>
    </a>
    
    <div class="Menu_NOtification_Wrap">
    <div class="notification_Header">
    <h4>Notifications</h4>
    </div>
    <div class="Notification_body">
    
        <div class="single_notify d-flex align-items-center">
        <div class="notify_thumb">
        <a href="#"><img src="img/staf/4.png" alt></a>
        </div>
        <div class="notify_content">
        <a href="#"><h5>Awesome packages</h5></a>
        <p>Lorem ipsum dolor sit amet</p>
        </div>
        </div>
    

    </div>
    <div class="nofity_footer">
    <div class="submit_button text-center pt_20">
    <a href="#" class="btn_1">See More</a>
    </div>
    </div>
    </div>
    
    </li>
  
    </div>
    <div class="profile_info">
         @if ($user->image)
            <img src="{{ asset($user->image) }}" alt="#">
        @else
            <img src="img/client_img.png" alt="#">

        @endif
    <div class="profile_info_iner">
    <div class="profile_author_name">
    <p>{{ $user->username }} </p>
    <h5>{{ $user->name }}</h5>
    </div>
    <div class="profile_info_details">
    <a href="{{ route('user.my-profile') }}">My Profile </a>
    <a href="{{ route('user.change-password') }}">Change Password</a>
    <a href="{{ route('user.logout') }}">Log Out </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    


    <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
            
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_25 f_w_700 dark_text">Dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Analytic</li>
                            </ol>
                        </div>
                        <div class="page_title_right">
                
                
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">

                @yield('user-content')
            </div>
        </div>
    </div>


    <div class="footer_part">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <div class="footer_iner text-center">
        @php
            $now_year = date('Y');
        @endphp
        <p>2022 - {{ $now_year }} © J-Rich Tech</p>
        </div>
        </div>
        </div>
        </div>
        </div>
</section>


<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
    <i class="ti-angle-up"></i>
    </a>
</div>


<script src="{{ asset('user/js/jquery1-3.4.1.min.js') }}"></script>
<script src="{{ asset('user/js/popper1.min.js') }}"></script>

<script src="{{ asset('user/js/bootstrap1.min.js') }}"></script>

<script src="{{ asset('user/js/metisMenu.js') }}"></script>

<script src="{{ asset('user/vendors/count_up/jquery.waypoints.min.js') }}"></script>

<script src="{{ asset('user/vendors/chartlist/Chart.min.js') }}"></script>

<script src="{{ asset('user/vendors/count_up/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('user/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('user/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('user/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('user/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('user/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('user/vendors/datatable/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('user/vendors/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('user/vendors/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('user/vendors/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('user/vendors/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('user/vendors/datatable/js/buttons.print.min.js') }}"></script>

<script src="{{ asset('user/vendors/datepicker/datepicker.js') }}"></script>
<script src="{{ asset('user/vendors/datepicker/datepicker.en.js') }}"></script>
<script src="{{ asset('user/vendors/datepicker/datepicker.custom.js') }}"></script>
<script src="{{ asset('user/js/chart.min.js') }}"></script>
<script src="{{ asset('user/vendors/chartjs/roundedBar.min.js') }}"></script>

<script src="{{ asset('user/vendors/progressbar/jquery.barfiller.js') }}"></script>

<script src="{{ asset('user/vendors/tagsinput/tagsinput.js') }}"></script>

<script src="{{ asset('user/vendors/text_editor/summernote-bs4.js') }}"></script>
<script src="{{ asset('user/vendors/am_chart/amcharts.js') }}"></script>

<script src="{{ asset('user/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('user/vendors/scroll/scrollable-custom.js') }}"></script>

<script src="{{ asset('user/vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('user/vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>

<script src="{{ asset('user/vendors/apex_chart/apex-chart2.js') }}"></script>
<script src="{{ asset('user/vendors/apex_chart/apex_dashboard.js') }}"></script>
<script src="{{ asset('user/vendors/echart/echarts.min.js') }}"></script>
<script src="{{ asset('user/vendors/chart_am/core.js') }}"></script>
<script src="{{ asset('user/vendors/chart_am/charts.js') }}"></script>
<script src="{{ asset('user/vendors/chart_am/animated.js') }}"></script>
<script src="{{ asset('user/vendors/chart_am/kelly.js') }}"></script>
<script src="{{ asset('user/vendors/chart_am/chart-custom.js') }}"></script>

<script src="{{ asset('user/js/dashboard_init.js') }}"></script>
<script src="{{ asset('user/js/custom.js') }}"></script>


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

    });

    })(jQuery);
</script>
<script src="{{ asset('js/app.js') }}"></script>

<script>
    let activeSellerId= '';
    let myId = {{ Auth::guard('web')->user()->id; }};
    function loadChatBox(id){
        $(".seller").removeClass('active');
        $("#seller-list-"+id).addClass('active')
        $("#pending-"+ id).addClass('d-none')
        $("#pending-"+ id).html(0)
        activeSellerId = id
        $.ajax({
            type:"get",
            url: "{{ url('user/load-chat-box/') }}" + "/" + id,
            success:function(response){
                $("#chat_box").html(response)
                scrollToBottomFunc()
            },
            error:function(err){
            }
        })
    }


  (function($) {
      "use strict";
      $(document).ready(function () {
            $('.clockpicker').clockpicker();

            Echo.private("App.Models.User.{{$user->id}}")
            .listen('SellerToUser', (e) => {
                if(e.seller_id == activeSellerId){
                    $.ajax({
                        type:"get",
                        url: "{{ url('user/load-new-message/') }}" + "/" + e.seller_id,
                        success:function(response){
                            $(".wsus__chat_area_body").html(response)
                            scrollToBottomFunc()
                        },
                        error:function(err){
                        }
                    })
                }else{
                    var pending = parseInt($("#pending-"+ e.seller_id).html());
                    if (pending) {
                        $("#pending-"+ e.seller_id).html(pending + 1)
                        $("#pending-"+ e.seller_id).removeClass('d-none')
                    } else {
                        $("#pending-"+ e.seller_id).html(pending + 1)
                        $("#pending-"+ e.seller_id).removeClass('d-none')
                    }
                }

            });
      });
  })(jQuery);

    function scrollToBottomFunc() {
        $('.wsus__chat_area_body').animate({
            scrollTop: $('.wsus__chat_area_body').get(0).scrollHeight
        }, 100);
    }
</script>

</body>

</html>
