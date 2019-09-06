@php
$this->baseUrl = App::make('url')->to('/');
$this->dataShop = DB::table('shops')->where('domain', $this->baseUrl)->first();
@endphp

<!DOCTYPE html>
<!-- saved from url=(0033)http://www.diskon8.com/dec/F4pfk2 -->
<html style="font-size: 37.5px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="le-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no, email=no, date=no, address=no">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="shortcut icon" href="#">
    <link rel="icon" href="{{asset('images/'.@$this->dataShop->favicon)}}">
    <title>{{@$this->dataShop->company_name}}</title>
    <link href="{{asset('front/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/swiper.min_4.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/animate.min_4.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/smartphoto.min_4.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/base_4.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

    <script src="{{asset('front/files/hm.js')}}"></script>
    {{-- <script src="{{asset('front/files/2171422026462754')}}" async=""></script>
    <script src="{{asset('front/files/inferredEvents.js')}}" async=""></script> --}}
    {{-- <script src="{{asset('front/files/382671185640959')}}" async=""></script> --}}
    {{-- <script async="" src="{{asset('front/files/fbevents.js')}}"></script> --}}
    <script src="{{asset('front/js/jquery.js')}}"></script>
    <script src="{{asset('front/files/jquery.cookie.js')}}"></script>
    <script src="{{asset('front/files/swiper.min.js')}}"></script>
    <script src="{{asset('front/files/jquery.lazyload.min_4.js')}}"></script>
    <script src="{{asset('front/files/vue.min.js')}}"></script>
    <script src="{{asset('front/files/layer.js')}}"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script
        src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}"
        data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    {{-- <script src="{{asset('front/files/slide/script.js')}}"></script> --}}

    <script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>


    <link rel="stylesheet" href="{{asset('front/files/layer.css')}}" id="layuicss-layer">
    <link rel="stylesheet" href="{{asset('front/files/slide/style.css')}}" id="layuicss-layer">

    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=323274731889796&ev=PageView&noscript=1" /></noscript>

    <!-- End Facebook Pixel Code -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
    <script>
        // Set the date we're counting down to
      var countDownDate = new Date("Jul 4, 2019 24:37:25").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days    = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = "<span id='h' class='seckill-time-num hour'>" + hours + "</span>" + '<span class="seckill-time-colon">:</span> ' + '<span id="m" class="seckill-time-num minute">' + minutes + '</span>' + '<span class="seckill-time-colon">:</span> ' + '<span id="s" class="seckill-time-num s">' + seconds + '</span>' ;

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
    </script>
    <!--
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '382671185640959');
        fbq('track', 'PageView');
    </script>

    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=382671185640959&ev=PageView&noscript=1" /></noscript>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2171422026462754');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2171422026462754&ev=PageView&noscript=1" /></noscript>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?ae32568e7dcc444400cb9cc48263f641";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        fbq('track', 'ViewContent');
    </script>
    <script type="text/javascript">
        $(function() {
            var button = document.getElementById('bAddToCart');
            button.addEventListener('click', function() {
                fbq('track', 'AddToCart', {
                    content_ids: [window.location.href.substring(window.location.href.lastIndexOf("/F") + 2, window.location.href.length)],
                    content_type: app.nowProductData.keywords,
                    value: app.nowProductData.retailPrice,
                    currency: 'USD'
                });
            });
        });
    </script>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', '');
    </script>
    -->
    <style>
        .hidden {
            display: none;
        }

        .numbers {
            width: 105px;
            background: #f5f5f5;
            overflow: hidden;
            border-radius: 5px;
        }

        .left {
            display: inline-block;
            width: 25px;
            height: 100%;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
            border-right: 1px solid #ffffff;
            padding-left: 5px;
            text-align: center;
        }

        .right {
            display: inline-block;
            width: 25px;
            height: 35px;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
            border-left: 1px solid #fff;
            text-align: center;
            font-size: 30px;
            line-height: 35px;
        }

        .quantity {
            display: inline-block;
            width: 25px;
            height: 35px;
            background: #f5f5f5;
            border: none;
            line-height: 50px;
            text-align: center;
            font-size: 18px;
        }

        .first {
            border-color: #ef3470;
            background-color: #ef3470;
            color: #fff;
        }

        .seckil-time-title {
            margin: 0.3rem 0 0.3rem;
            display: inline-block;
            font-size: 0.6rem;
            line-height: 0.6rem;
            color: #e8063c;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        .cl {
            clear: both;
        }

        input[type=button],
        input[type=submit],
        input[type=file],
        button {
            cursor: pointer;
            -webkit-appearance: none;
        }

        .review-body .content {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
        }

        .images-container .images-item {
            width: 100%;
        }

        .images-item>p {
            float: left;
            width: 110px;
            margin-right: 5px;
        }

        .images-item>p>img {
            max-width: 110px;
        }

        /* 提示栏 */

        .index-box {
            position: absolute;
            top: 51px;
            width: 100%;
            background-color: #fff;
        }

        .his,
        .sug {
            padding-right: 40px;
            position: relative;
            padding-right: 50px;
            border-bottom: 1px solid #f1f1f1;
            font-size: 16px;
            line-height: 22px;
            text-align: left;
            word-break: break-all;
            color: #555;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .suggest-panel button {
            margin-left: -10px;
        }

        .suggest-div button {
            z-index: 2;
            position: relative;
            display: block;
            -webkit-box-sizing: border-box;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 6px 0 2px 23px;
            border: 0;
            font-size: 16px;
            font-weight: 700;
            line-height: 22px;
            text-align: left;
            color: #333;
            background: none transparent;
            -webkit-appearance: none;
        }

        button {
            outline: 0;
        }

        .sug-edit,
        .sug-searchicon {
            position: absolute;
            z-index: 1;
            top: 0;
            box-sizing: content-box;
            width: 34px;
            height: 100%;
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-size: 15px 15px;
            background-size: 15px 15px;
        }

        .sug-edit {
            padding-right: 0;
            position: absolute;
            z-index: 1;
            top: 0;
            right: 0;
            bottom: 0;
            width: 52px;
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnBAMAAAB+jUwGAAAAKlBMVEUAAADR0dHMzMzPz8/Nzc3Nzc3Nzc3MzMzMzMzMzMzNzc3Ozs7MzMzMzMwenBEEAAAADXRSTlMABNkZr/ijVTTxlX1u3UxzJQAAAI1JREFUKM+Fy7EJQkEQRdEnNmBmFSZ2YBNmvwRBOxBsxCbMLUIFg+1FBeGwO8GfZJjLmdxaP/tVkqkNc0zSZqL37378tvnLXY0bVNyi4hIVg0ZEIwaNiEZERbSLqIiK6BBRERVRERULFVERFVERFUcqoiIqomJPp2cqPbxS6fqUQp3o3YVeU+n7XOPikg+2ELMK5oFHHwAAAABJRU5ErkJggg==') no-repeat scroll center center #fff;
            -webkit-background-size: 11px 11px;
            background-size: 11px 11px;
        }

        .sug-searchicon {
            left: -10px;
            padding-left: 0;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAMAAAANxBKoAAAAUVBMVEUAAADNzc3Nzc3Nzc3MzMzMzMzMzMzNzc3Q0NDb29vNzc3Nzc3MzMzMzMzMzMzNzc3Nzc3Nzc3Ozs7Pz8/Q0NDMzMzOzs7Ozs7MzMzNzc3MzMyjngBVAAAAGnRSTlMA9Vgt/Nyjjg0H4FDOw7+2rYhiQCYeFXzjewzxqiMAAAEsSURBVEjHlZVZFoMgDEUDVIRirVOd9r/QGk5TrFgw78uDF3gJkMBBatF1IURR60VBWqos1p2KMjHhpddI+nXO2lasJxKtPYHHx+dv0/WDMUPfNZ/ZjzF2fF9RlbO73VzlB+/qCAs/LOEg6RcRv/joB58GIpmnX2ZvxnrPJZyq9N53BtsIjvA25FmgDfgrNCO+edfozPynDUalKR+4k4SEJBIq+KogqSrEhRfJpWmHV+xrRNg0bQVZmbaPBjJqNmiijHQ5uqOs1NtHn6P7DaopyCFHDxQmBmBytMFU8GieE16UvAyyTmfhnTzrVvFuLO81sF4a7xWzKgSv+jAq200yqibilyvyjfBL1V4Sfq2TEH6tSwU83wFjPEhN1F0nQgPuIK+Az8DAGTS4eXZvXiowQ7wpXsEAAAAASUVORK5CYII=');
        }

        .sug-edit,
        .sug-searchicon {
            position: absolute;
            z-index: 1;
            top: 0;
            box-sizing: content-box;
            width: 34px;
            height: 100%;
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-size: 15px 15px;
            background-size: 15px 15px;
        }

        .suggest-title {
            margin: 0 -.17rem;
            margin-top: -1px;
            position: relative;
            top: -1px;
            display: -moz-box;
            display: -webkit-box;
            overflow: hidden;
            height: 34px;
            border-top: 1px solid #d3d3d3;
            background: #f8f8f8;
        }

        .index-box .suggest-close {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 80px;
            font-size: 14px;
            line-height: 35px;
            text-align: center;
            color: #666;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .sug-edit {
            height: 95%;
        }

        .sku-wrap .bdbox input {
            padding-top: 0px;
        }

        .sku-wrap .body {
            bottom: 2.6rem;
            padding-bottom: 150px;
        }

        .search_top {
            width: 12%;
            max-width: 40px;
            position: fixed;
            bottom: 4em;
            right: 1em;
            transform: translateY(-50px);
        }

        .back_top {
            width: 12%;
            max-width: 40px;
            position: fixed;
            bottom: 4em;
            right: 1em;
        }


        @import url('https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed');

        .wrapper {
            padding: 20px;
        }

        @keyframes shadow-pulse {
            0% {
                box-shadow: 0 0 0 0px #1cb64d;
            }

            100% {
                box-shadow: 0 0 0 35px rgba(0, 0, 0, 0);
            }
        }

        @keyframes shadow-pulse-big {
            0% {
                box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.1);
            }

            100% {
                box-shadow: 0 0 0 70px rgba(0, 0, 0, 0);
            }
        }

        .example-1 {
            float: left;
            margin: 40px;
            width: 130px;
            height: 130px;
            font: 13px/130px 'Barlow Semi Condensed', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff;
            text-align: center;
            background: rgba(30, 144, 255, 0.6);

            animation: shadow-pulse 1s infinite;
        }

        .example-2 {
            float: left;
            margin: 75px 40px 0 40px;
            width: 130px;
            height: 60px;
            font: 13px/60px 'Barlow Semi Condensed', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff;
            text-align: center;
            background: rgba(3, 3, 3, 0.6);
            border-radius: 3px;
            animation: shadow-pulse 1s 3;
        }

        .example-3 {
            float: left;
            margin: 40px 0 0 40px;
            width: 130px;
            height: 130px;
            font: 13px/130px 'Barlow Semi Condensed', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff;
            text-align: center;
            background: rgba(30, 144, 255, 0.6);
            border-radius: 50%;
            animation: shadow-pulse-big 1s 1;
        }
    </style>
    <style>
    .radio-toolbar {
    margin: 10px;
    }

    .radio-toolbar input[type="radio"] {
    opacity: 0;
    position: fixed;
    width: 0;
    }

    .radio-toolbar label {
        display: inline-block;
        background-color: #ddd;
        padding: 10px 20px;
        font-family: sans-serif, Arial;
        font-size: 14px;
        border: 0px solid #444;
        border-radius: 4px;
    }

    .radio-toolbar label:hover {
    background-color: #dfd;
    }

    .radio-toolbar input[type="radio"]:focus + label {
        border: 0px dashed #444;
    }

    .radio-toolbar input[type="radio"]:checked + label {
        background-color: #bfb;
        /*border-color: #4c4;*/
    }

</style>
    <style>
            table {
              border-collapse: collapse;
              border-spacing: 0;
              width: 100%;
              border: 1px solid #ddd;
            }
            
            th, td {
              text-align: left;
              padding: 8px;
            }
            
            tr:nth-child(even){background-color: #f2f2f2}
            </style>
   
    <script>
        // Set the date we're counting down to
var countDownDate = new Date("Jan 6, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text
  if (distance < 0) { 
    clearInterval(x);
    document.getElementById("demo2").innerHTML = "EXPIRED";
  }
}, 1000);
    </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d6d047777aa790be331f7d3/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>
   
    
<body style="max-width: 640px;margin: auto;" class="">
    <div id="page">
        
         <div class="review-container" style="margin-left: 20px;">
         SYARAT & KETENTUAN   
        </div>
        
        <div style="clear: both;"></div>
        <div id="submit_order" style="display: block;">
            <div onclick="location.href='/cart';" class="buy sku-buy" style="width: 14%; float: left; height: 85%;"><img src="{{asset('front/files/shop2.png')}}" style="width: 85%;"></div>
            
            <div id="bViewContent" style="margin-left: 17%;">Syarata & Ketentuan</div>
        </div>
    </div>
    @php
        $datatext = \DB::table('settings')->where('id',1)->first();
    @endphp
    <br>
    <div style="margin-left: 20px;margin-right: 20px;">{!! @$datatext->syaratdanketentuan !!}</div>
    <div id="order" class="widgets-cover widgets-cover-sku">
        <form id="donation" onsubmit="return submitForm();">
        <div class="cover-bg"></div>
        <div class="cover-content">
            <div class="sku-wrap">
                <div class="header">
                    <div class="img-wrap">
                        <img class="j-summary-img" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/shopping-cart-71-543136.png"></div>
                    <div class="main">
                        <div class="price"><b>{{"Rp. ".number_format(@$collectionsum,0)}}</b></div>
                        <div class="sku-info"><span>Checkout:Silakan pilih spesifikasi Akun Order<br></span>
                            <br>
                        </div>
                    </div>
                    <a class="sku-close"></a>
                </div>
                <div class="body">
                    <input type="hidden" name="variant_id" value="">
                    
                    
                </div>
                
                <div class="footer trade">
                    <div role="button" id="bAddToCart" class="buy wsku-buy">Check Out</div>
                    <input type="hidden" name="token" id="token">
                    <input type="button" value="Kirim Pesanan" onclick="submitForm()" class="buy"
                        style="width: 95%; border: 0px;">
                </div>
            </div>
        </div>
    </form>
    </div>

    
</body>

</html>