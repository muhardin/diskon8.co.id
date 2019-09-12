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
        
        <div class="seckill-container">
            <div class="seckill-price-wrap">
                <div class="seckill-price">
                    <span>Rp. </span>
                    <span
                        class="seckill-big-price">{{number_format(@$collectionsum,0)}}</span><span
                        class="seckill-small-price">{{"Rp. ".number_format(0,0)}}
                    </span>
                </div>
                <div class="seckill-btm-div">
                    <span class="skf-icon-pos"><i
                            class="label-icon-div white-border have-icon-div"><i
                                class="label-icon seckill-floor-icon"></i> 
                    <span class="label-text white-text" style="display: inline-block; vertical-align: middle; line-height: 0.8rem; font-style: normal;">Jumlah Total</span></i>
                    </span>
                    
                </div>
            </div>
            <div class="seckill-time-wrap"><span class="seckil-time-title">
                    <font color="#1cb64d">Berakhir Dalam:</font>
                </span>
                <div id="seckill_time" class="seckill-time-div">
                    <p id="demo"></p>
                </div>
            </div>
        </div>
        
        
        <div class="label-container clearfix">
                <br>
                <div class="description-header">Detail Cart</div>
                <hr>
                <div class="description-body">
                        <div style="overflow-x:auto;">
                                <table class="table-responsive">
                                  <tr>
                                    <th>Product Name</th>
                                    <th>Picture</th>
                                    <th>Price (Rp.)</th>
                                    <th>Qty</th>
                                    {{-- <th>Berat(gr)</th> --}}
                                    <th>Amount (Rp.)</th>
                                    <th>Action</th>
                                  </tr>
                                  @foreach ($collection as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td><img
                                            src="{{asset('images/products/'.$item->main_image)}}" style="width: 50px;" alt=" "
                                            class="img-responsive"></td>
                                        <td>{{number_format(@$item->price,0)}}</td>
                                        <td>{{@$item->quantity}}</td>
                                        {{-- <td>{{@$item->weight}}</td> --}}
                                        <td>{{number_format($item->amount,0)}}</td>
                                        <td>
                                        <a href="{{url('/cartdelete/'.$item->id)}}"><img
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWkl71TFJOXAjWG1msYuG-OPnzxCZ5rcNN1JRe9DbOGf6pMP5p" style="width: 50px;" alt=" "
                                                class="img-responsive">
                                          </a>
                                        </td>
                                    </tr>
                                  @endforeach
                                  <!-- <tr>
                                        <td colspan="2" align="right"><b>Ongkir</b</td>
                                        <td align="right"></td>
                                        <td align="right">&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" align="right"><b>Total</b</td>
                                        <td align="right"></td>
                                        <td align="right">&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                    -->
                                  </table>
                              </div>
                </div>
            </div>
        <div class="review-container">
            
        </div>
        <p class="search_top">
            <a href="#"><img src="{{asset('front/files/order_ioc_top.png')}}"></a>
        </p>
        <p id="back_top" class="back_top">
            <a href="#top"><img src="{{asset('front/files/top_1.png')}}"></a>
        </p>

        <div style="clear: both;"></div>
        <div id="submit_order" style="display: block;">
            <div onclick="location.href='/';" class="buy sku-buy" style="width: 14%; float: left; height: 85%;"><img src="{{asset('front/files/shop2.png')}}" style="width: 85%;"></div>
            <!--
                <div onclick="toHome()" class="buy sku-buy" style="width: 14%; float: left; height: 85%;"><img
                    src="{{asset('front/files/shop2.png')}}" style="width: 85%;"></div>
            -->
            <div id="bViewContent" style="margin-left: 17%;">Check Out</div>
        </div>
    </div>
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
                    <ul class="sku-list-wrap sys_spec_text">
                        <li>
                            <h2>Silakan pilih akun order anda :</h2>
                            <div role="radiogroup" class="items">
                                <!-- <a spec-id="0" href="javascript:;"
                                    data-img="http://yy.jiaoyoumao.com/dacuige/20190515/14563545093a8a.jpg"
                                    data-serial="S6354-1" data-key="Warna"
                                    data-value="" data-chinese="黑色M"
                                    class="select-varian">{{@$itemvarian->color." (".@$itemvarian->size.")"}}</a>
                                -->
                                @if(!@Auth::user()->id)
                                <!-- <a id="speck" value="Guest" spec-id="1" href="javascript:;"
                                    data-img="http://yy.jiaoyoumao.com/dacuige/20190515/14563545093a8a.jpg"
                                    data-serial="S6354-1" data-key="Warna"
                                    data-value="guest" data-chinese="黑色M"
                                    class="select-varian">Guest</a>
                                <a id="speck" value="New" spec-id="2" href="javascript:;"
                                    data-img="http://yy.jiaoyoumao.com/dacuige/20190515/14563545093a8a.jpg"
                                    data-serial="S6354-1" data-key="Warna"
                                    data-value="new" data-chinese="黑色M"
                                    class="select-varian">New Member</a>
                                -->
                                <div class="radio-toolbar">
                                    <input class="" type="radio" id="radioFruit" name="choiceAccount" value="Guest">
                                    <label for="radioFruit">Guest</label>
                                    <input type="radio" id="radioBanana" name="choiceAccount" value="NewMember">
                                    <label for="radioBanana">New Member</label>
                                    <input type="radio" onclick="location.href='{{url('/login')}}';" id="radioOrange" name="radioFruit" value="banana">
                                    <label for="radioOrange">Login</label>
                                
                                    {{--
                                        <input type="radio" id="radioOrange" name="radioFruit" value="orange">
                                        <a id="speck" href="{{url('/login')}}"><label for="radioOrange">Login</label>
                                        </a> 
                                    --}}
                                    <div>Dengan mendaftar, saya menyetujui
                                        <a href="{{url('/syaratdanketentuan')}}">Syarat dan Ketentuan</a> serta <a href="{{url('/kebijakanprivacy')}}">Kebijakan Privasi</a> 
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                @else
                                <div class="radio-toolbar">
                                <input type="radio" id="radioApple" name="address" value="NewAdd">
                                <label for="radioApple">New Address</label>
                                <a id="speck" href="{{url('/logout')}}">Logout</a>
                            </div>
                                @endif
                            </div>
                        </li>
                        @if(@Auth::user()->id)
                        <div class="card card-cascade narrower" id="address">
                            <div
                            class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
                            </div>
                            <!--/Card image-->
                            <div class="px-4">
                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table table-hover mb-0">
                                <!--Table head-->
                                <thead>
                                    <tr>
                                    
                                    <th class="th-lg">
                                        #
                                    </th>
                                    <th class="th-lg">
                                        <a>Name
                                        <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="">Address
                                        <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="">#
                                        <i class="fas fa-sort ml-1"></i>
                                        </a>
                                    </th>
                                    
                                    </tr>
                                </thead>
                                <!--Table head-->
                                @php
                                    $collectionaddress = \DB::table('user_addresses')->where('user_id',Auth::user()->id)->get();
                                @endphp
                                <!--Table body-->
                                <tbody>
                                    @foreach ($collectionaddress as $itemaddress)
                                            <tr data-contact="{{@$itemaddress->contact_person}}" data-phone="{{@$itemaddress->phone}}" data-addressdetail="{{@$itemaddress->address}}" data-province="{{@$itemaddress->province}}" data-city="{{@$itemaddress->city}}" data-subdistrict="{{@$itemaddress->subdistrict}}" data-postal="{{@$itemaddress->zip_code}}" data-email="{{@$itemaddress->email}}">
                                            <th scope="row">
                                            <input class="form-check-input" type="radio" id="choiceAddress" name="address" value="{{@$itemaddress->id}}">
                                            <label class="form-check-label" for="checkbox1" class="label-table"></label>
                                            </th>
                                            <td>{{@$itemaddress->contact_person}}</td>
                                            <td>{{@$itemaddress->address}}</td>
                                            <td><img
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWkl71TFJOXAjWG1msYuG-OPnzxCZ5rcNN1JRe9DbOGf6pMP5p" style="width: 20px;" alt=" "
                                                class="img-responsive"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!--Table body-->
                                </table>
                                <!--Table-->
                            </div>
                        
                            </div>
                        
                        </div>

                        @endif
                    </ul>
                    <!-- Table with panel -->
    
      <!-- Table with panel -->
                    <div class="number-wrap">
                        <div class="number-line" >
                        </div>
                        <div class="number-line" style="display:none">
                            <label for="number">Jumlah</label> <span class="J_limitTxt limit-txt"></span>
                            <div class="input-group">
                                <input type="button" value="-" class="button-minus" data-field="quantity">
                                <input type="number" step="1" max="" value="1" name="quantity" id="quantityBuy" class="quantity-field">
                                <input type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                            <div class="cl"></div>
                            <p style="color: red; font-size: 16px;"></p>
                        </div>
                    </div>
                    <div id='addressinput'>
                    <div class="bdbox">
                        <label for="contact_name" class="bdxx"><em>*</em>Nama</label>
                        <div class="textbox">
                            <input name="userName" type="text" id="userName" required="required"
                                placeholder="Silakan isi nama">
                        </div>
                    </div>
                    <div class="bdbox">
                        <label for="mob" class="bdxx"><em>*</em>Nomor Telepon</label>
                        <div class="textbox">
                            <input name="userPhone" id="userPhone" datatype="m" type="text" required="required"
                                placeholder="Harap isi nomor telepon yang benar" style="width: 80%; font-size: 0.6rem;">
                        </div>
                    </div>
                    <div class="bdbox">
                        <label for="address" class="bdxx"><em>*</em>Provinsi</label>
                        <div class="textbox">
                            <select id="provinceID" name="province"
                                style="width: 95%; border: none; font-size: 0.6rem; color: rgb(102, 102, 102);">

                                <option value="" disabled="disabled" selected="selected" style="display: none;">silahkan
                                    pilih</option>
                                @foreach($provinceData as $province => $value)
                                <option value="{{$value["province_id"]}}">{{$value["province"]}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="bdbox">
                        <label for="address" class="bdxx"><em>*</em>Kota/Kabupaten</label>
                        <div class="textbox">
                            <select id="cityID" name="city" required="required"
                                style="width: 95%; border: none; font-size: 0.6rem; color: rgb(102, 102, 102);">
                                <option value="" selected="selected">silahkan
                                    pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="bdbox" style="position: relative;">
                        <label for="address" class="bdxx"><em>*</em>Kecamatan</label>
                        <div class="textbox">
                            <select id="subdistrictID" name="subdistrictID" required="required"
                                style="width: 95%; border: none; font-size: 0.6rem; color: rgb(102, 102, 102);">
                                <option value="" selected="selected" style="display: none;">silahkan
                                    pilih</option>
                            </select>
                        </div>
                        <div id="district-suggest-box" class="index-box suggest-div suggest-panel"
                            style="display: none;">
                            <div class="suggest-content"></div>
                            <div class="suggest-title">
                                <div class="suggest-close">关闭</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bdbox">
                        <label for="payname" class="bdxx"><em>*</em>Kode Pos</label>
                        <div class="textbox">
                            <input type="text" id="payname" name="payname" placeholder="Silakan isi kode pos"> <span
                                id="zfbyh"></span></div>
                    </div>
                    <div class="bdbox">
                        <label for="message" class="bdxx"><em>*</em>Email</label>
                        <div class="text2box">
                            <input type="text" name="userEmail" rows="1" id="userEmail" placeholder="Silakan isi email">
                        </div>
                    </div>
                    {{-- <div class="bdbox">
                        <label for="message" class="bdxx">Opsional</label>
                        <div class="text2box">
                            <!-- <textarea rows="2" name="message" id="message" placeholder="Pembelian lebih dari 1, tulis warna dan jumlah di sini" style="width: 100%; font-size: 0.6rem; font-family: Arial, &quot;Microsoft YaHei&quot;, sans-serif;"></textarea>
								-->
                        </div>
                    </div> --}}
                </div>
                <div class="bdbox">
                    <label for="address" class="bdxx"><em>*</em>Alamat</label>
                    <div class="textbox">
                        <input name="userAddress" id="userAddress" datatype="*" type="text" required="required"
                            placeholder="Silakan isi alamat lengkapnya">
                    </div>
                </div>
                    <div class="bdbox">
                        <label class="bdxx"><em>*</em>Pilih Kurir</label>
                        <div class="textbox">
                            <select id="courierID" name="courier_id" required="required"
                                style="width: 95%; border: none; font-size: 0.6rem; color: rgb(102, 102, 102);">
                                <option value="" selected="selected">Silahkan Pilih</option>
                                <option value="jne">JNE</option>
                                <option value="jnt">JNT</option>
                                <option value="pos">POS Indonesia</option>
                                <option value="tiki">TIKI</option>
                                <option value="sicepat">Si Cepat</option>
                                <option value="wahana">Wahana</option>
                                <option value="lion">Lion Parcel</option>
                            </select>
                        </div>
                    </div>
                    <div class="bdbox">
                        <label class="bdxx"><em>*</em>Pilihan Paket</label>
                        <div class="textbox">
                            <select id="courierPacket" name="courier_packet" required="required" style="width: 95%; border: none; font-size: 0.6rem; color: rgb(102, 102, 102);">
                                <option value="" selected="selected">Silahkan Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="bdbox">
                        <label class="bdxx">Biaya pengiriman</label>
                        <div class="text3box text-r costSend"><span style="color: rgb(239, 53, 96);"></span><span>Rp.
                                0</span>
                            <span></span></div>
                    </div>
                    <div class="bdbox">
                        <label class="bdxx">Total</label>
                        <input type="hidden" id="startPrice" value="{{$collectionsum}}">
                        <input type="hidden" id="total_money2" value="{{$collectionsum}}">
                        <input type="hidden" id="total_cost" value="0">
                        <input type="hidden" id="quantity_all" value="{{@$collection->sum('quantity')}}">
                        <input type="hidden" id="weight_all" value="{{@$collection->sum('weight_amount')}}">
                        
                        
                        <div class="text3box text-r"><span id="j_total" style="color: rgb(239, 53, 96);"></span><span
                                id="total_money">{{"Rp. ".number_format(@$collectionsum,0)}}</span> <span
                                id="zfbyh"></span></div>
                    </div>

                    <div class="bdbox">
                            <label class="bdxx"><em>*</em>Cara Bayar</label>
                            <div class="textbox">
                                <select id="paidID" name="paidID" required="required"
                                    style="width: 95%; border: none; font-size: 0.6rem; color: rgb(102, 102, 102);">
                                    <option value="" selected="selected">Silahkan Pilih</option>
                                    <option value="cod">COD</option>
                                    <option value="now">Paid Now</option>
                                    <option value="transfer">Transfer</option>
                                </select>
                            </div>
                        </div>
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
    <script type="text/javascript">
        $(window).on('load',function(){
          $(this).closest('.wsku-buy').removeClass('buy wsku-buy').addClass('buy sku-buy');
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#bAddToCart').click(function(){
                let quantity = $('.quantity-field').val();
                let startPrice = $('#startPrice').val();
                let totalPrice = formatRupiah(parseInt(startPrice) * parseInt(quantity),"Rp.");                
                $("#total_money").text(totalPrice);
                //alert('aaa');
                         
            })
        })
            $('.widgets-cover-sku .ssku-buy').on('click', function() {
            var isShow = true;
            if ($("#order").hasClass("show")) $(".sys_spec_text>li").each(function() {
                if ($(this).find(".checked").length != 1) {
                    alert("Silakan pilih akun order Anda!");
                    isShow = false;
                    return;
                }
            });
            if (!isShow) {
                return;
            }
            
            $.post("{{ route('donation.addtocart') }}",
                        {
                            _method: 'POST',
                            _token: '{{ csrf_token() }}',
                            idProduct: $('#idProduct').val(),
                            quantityBuy: $('#quantityBuy').val(),
                            amount: $('#total_money2').val(),
                            Shop_Id: $('#Shop_Id').val(),
                        },
                        
                        function (data, status) {
                            if (data.status == 'error') {
                                alert(data.message);
                            } else {
                                window.location.replace("{{url('/addedcart')}}");
                            }
                        });
            //$(this).closest('.widgets-cover').removeClass('widgets-cover-sku').addClass('widgets-cover-order');
        });
            $('.widgets-cover-sku .wsku-buy').on('click', function() {
            var isShow = true;
            
            if ($("#order").hasClass("show")) $(".sys_spec_text>li").each(function() {
                
                //const radioApple = $('#radioApple:checked');
                const radioApple = $("input[name='choiceAccount']:checked");
                if (radioApple.length != 1) {
                
                //const choiceAddress = $('#choiceAddress:checked');
                const choiceAddress = $("input[name='address']:checked");
                if(!choiceAddress.length){
                    alert("Mohon Pilih Akun Address Anda!");
                    isShow = false;
                    return;
                    }
                    else{
                        if(choiceAddress.val()=='NewAdd')
                        {
                            
                          $("#addressinput").show();
                            
                        }
                        else{
                        $(".bdbox.box-save-address").hide();
                        //$("#addressinput").hide();
                        let contact = $(".table-wrapper tbody tr").data('contact'),
                            phone = $(".table-wrapper tbody tr").data('phone'),
                            address = $(".table-wrapper tbody tr").data('addressdetail'),
                            province = $(".table-wrapper tbody tr").data('province'),
                            city = $(".table-wrapper tbody tr").data('city'),
                            subdistrict = $(".table-wrapper tbody tr").data('subdistrict'),
                            zip_code = $(".table-wrapper tbody tr").data('postal')
                            email = $(".table-wrapper tbody tr").data('email')
                        $("#userName").val(contact);
                        $("#userPhone").val(phone);
                        $("#userAddress").val(address);
                        $(`#provinceID option[value=${province}]`).attr('selected', 'selected');                                   
                        $("#payname").val(zip_code);
                        $("#userEmail").val(email);
                            $.ajax({
                                    url: "{{ route('rajaOngkir.getCity') }}",
                                    cache: false,
                                    type: "get",
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        provinceID: province
                                    },
                
                                    success: function(data) {                                                        
                                        var options = '<option value="">Pilih Kota</option>';
                                        $("#cityID").html('')
                                        $.each(data, function (idx, val) {
                                            if(val["city_id"] == city){
                                                options += '<option value="'+ val["city_id"] +'" selected="selected">'+ val["city_name"] +'</option>'
                                            }else{
                                                options += '<option value="'+ val["city_id"] +'">'+ val["city_name"] +'</option>'
                                            }
                                        })
                
                                        $("#cityID").append(
                                            options
                                        )                            
                                    }
                            });            
                            $.ajax({
                                url: "{{ route('rajaOngkir.getSubdistrict') }}",
                                cache: false,
                                type: "get",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    cityID: city
                                },

                                success: function(data) {							                        
                                    var options = '<option value="">Pilih Kecamatan</option>';
                                    $("#subdistrictID").html('');
                                    $.each(data, function (idx, val) {
                                        if(val["subdistrict_id"] == subdistrict){                                
                                            options += '<option value="'+ val["subdistrict_id"] +'" selected="selected">'+ val["subdistrict_name"] +'</option>'
                                        }else{
                                            options += '<option value="'+ val["subdistrict_id"] +'">'+ val["subdistrict_name"] +'</option>'
                                        }
                                    });
                                    $("#subdistrictID").append(
                                            options
                                    )
                                }
                            })
                        }
                    }
                }else{
                    //alert("New"+radioApple);
                    //isShow = false;
                }
            });
            if (!isShow) {
                return;
            }
            
            $(this).closest('.widgets-cover').removeClass('widgets-cover-sku').addClass('widgets-cover-order');
            $(this).closest('.wsku-buy').removeClass('buy wsku-buy').addClass('buy sku-buy');
        });
        
            /*$('.widgets-cover-sku .csku-buy').on('click', function() {
            var isShow = true;
            
            if ($("#order").hasClass("show")) $(".sys_spec_text>li").each(function() {
                if ($(this).find(".checked").length != 1) {
                    alert("Silakan pilih akun order Anda!");
                    isShow = false;
                    return;
                }
            });

            if (!isShow) {
                return;
            }
            $(this).closest('.widgets-cover').removeClass('widgets-cover-sku').addClass('widgets-cover-order');
        }); */
    </script>
    <script>
        var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
      }
    </script>

    {{-- <script src="{{asset('front/files/ajax.js')}}"></script> --}}
    <script src="{{asset('front/js/raja_ongkir.js')}}"></script>
    {{-- <script src="{{asset('front/files/zl.js')}}"></script> --}}
    <script src="{{asset('front/js/btn_plus_minus.js')}}"></script>
    {{-- <script src="{{asset('front/files/data_add.js')}}"></script> --}}
    <script src="{{asset('front/files/product_2.js')}}"></script>
    <script>
        $('.marquee').marquee({
      //speed in milliseconds of the marquee
      duration: 8000,
      //gap in pixels between the tickers
      gap: 50,
      //time in milliseconds before the marquee will start animating
      delayBeforeStart: 100,
      //'left' or 'right'
      direction: 'up',
      //true or false - should the marquee be duplicated to show an effect of continues flow
      duplicated: true
  });
  $(".marquee span:last-child").after("<span>.</span>");
    </script>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
function submitForm() {
                let quantity = $('.quantity-field').val();
                let startPrice = $('#startPrice').val();
                //let totalPrice = formatRupiah(parseInt(startPrice) * parseInt(quantity),"Rp.");                
                let totalPricew = (parseInt(startPrice) * parseInt(quantity));
                
                const choiceAddress = $("input[name='address']:checked");
                const choiceAddresschoiceAccount = $("input[name='choiceAccount']:checked");
                if(choiceAddress.length){
                    var akun_order = $("input[name='address']:checked").val();
                }else if(choiceAddresschoiceAccount.length)
                {
                    var akun_order = $("input[name='choiceAccount']:checked").val();
                }

    if($('#paidID').val()=='now'){

    $.post("{{ route('donation.store') }}",
    {
        _method: 'POST',
        _token: '{{ csrf_token() }}',
        /*
        amount: $('input#amount').val(),
        note: $('textarea#note').val(),
        donation_type: $('select#donation_type').val(),
        //donor_name: $('input#donor_name').val(),
        donor_name: $('#userName').val(),
        donor_email: $('#userEmail').val(),
        */
        //.unmask()
        amount: $('#total_money2').val(),
        note: $('textarea#note').val(),
        //donation_type: $('#product_name').val(),
        customer_name: $('#userName').val(),
        customer_email: $('#userEmail').val(),
        customer_phone: $('#userPhone').val(),
        customer_address: $('#userAddress').val(),
        customer_postalcode: $('#payname').val(),
        ongkir: $('#total_cost').val(),

        courierID: $('#courierID').val(),
        
        //courierPacket: $('#courierPacket').val(),
        courierPacket: $("#courierPacket option:selected").text(),
        courierPacketVal: $('#courierPacket').val(),
        
        idProduct: $('#idProduct').val(),
        quantityBuy: $('#quantityBuy').val(),
        
        subdistrictID: $('#subdistrictID').val(),
                subdistrictIDText: $('#subdistrictID option:selected').text(),

                cityID: $('#cityID').val(),
                cityIDText: $('#cityID option:selected').text(),
                

                provinceID: $('#provinceID').val(),
                provinceIDText: $('#provinceID option:selected').text(),

        paidID: $('#paidID').val(),
        akun_order: akun_order,
    },

    function (data, status) {
        if (data.status == 'error') {
            alert(data.message);
        } else {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    //location.reload();
                    window.location = "/success";;
                },
                // Optional 
                onPending: function (result) {
                    location.reload();
                },
                // Optional
                onError: function (result) {
                    location.reload();
                }
            });
        }
    });

    }else {
            $.post("{{ route('donation.storecod') }}",
            {
                _method: 'POST',
                _token: '{{ csrf_token() }}',
                amount: $('#total_money2').val(),
                note: $('textarea#note').val(),
                //donation_type: $('#product_name').val(),
                customer_name: $('#userName').val(),
                customer_email: $('#userEmail').val(),
                customer_phone: $('#userPhone').val(),
                customer_address: $('#userAddress').val(),
                customer_postalcode: $('#payname').val(),
                ongkir: $('#total_cost').val(),

                courierID: $('#courierID').val(),
                courierPacketVal: $('#courierPacket').val(),
                courierPacket: $("#courierPacket option:selected").text(),
                
                idProduct: $('#idProduct').val(),
                quantityBuy: $('#quantityBuy').val(),
                
                subdistrictID: $('#subdistrictID').val(),
                subdistrictIDText: $('#subdistrictID option:selected').text(),

                cityID: $('#cityID').val(),
                cityIDText: $('#cityID option:selected').text(),
                

                provinceID: $('#provinceID').val(),
                provinceIDText: $('#provinceID option:selected').text(),

                paidID: $('#paidID').val(),
                akun_order: akun_order,
            },
            function (data, status) {
                if (data.status == 'error') {
                    alert(data.message);
                } else {
                    window.location.replace("{{url('/success')}}");
                }
            });
    }
    return false;
}
</script>

    <script>
        $(document).ready(function () {
                
                $(document).on("change", "#provinceID", function () {
                    var _this = $(this).val()
    
                    $.ajax({
                        url: "{{ route('rajaOngkir.getCity') }}",
                        cache: false,
                        type: "get",
                        data: {
                            _token: "{{ csrf_token() }}",
                            provinceID: _this
                        },
    
                        success: function(data) {                                                        
                            var options = '<option value="">Pilih Kota</option>';
                            $("#cityID").html('')
                            $.each(data, function (idx, val) {
                                options += '<option value="'+ val["city_id"] +'">'+ val["city_name"] +'</option>'
                            })
    
                            $("#cityID").append(
                                options
                            )
                        }
                    })
                })    
                $(document).on("change", "#cityID", function () {
				var _this = $(this).val();       
				$.ajax({
					url: "{{ route('rajaOngkir.getSubdistrict') }}",
					cache: false,
					type: "get",
					data: {
						_token: "{{ csrf_token() }}",
						cityID: _this
					},

					success: function(data) {							                        
						var options = '<option value="">Pilih Kecamatan</option>';
						$("#subdistrictID").html('');
						$.each(data, function (idx, val) {
							options += '<option value="'+ val["subdistrict_id"] +'">'+ val["subdistrict_name"] +'</option>'
						});
						$("#subdistrictID").append(
								options
						)
					}
				})
			});

            $(document).on("change","#courierID",function(){
                var _this = $(this).val();
                let subdistrictID = $("#subdistrictID").val();                
                let courirDT = $("#courierID").val();                
                let qtyOrder = $("#quantity_all").val();                
                let weightOrder = $("#weight_all").val();                
                $.ajax({

					url: "{{ route('rajaOngkir.getCost') }}",
					cache: false,
					type: "get",
					data: {						
						destination: subdistrictID,
						courirDT: courirDT,
						qtyOrder: qtyOrder,
						weightOrder: weightOrder,
						courierID: _this
					},

					success: function(data) {												
						var options = '<option value="">Pilih Pilihan Paket</option>';
						$("#courierPacket").html('');

						if(!data || data.length == 0){
							
							$("#courierPacket").html('<option value="">Pilihan Paket tidak ditemukan</option>');
						}else{

						$.each(data, function (idx, val) {                                                    
							options += '<option value="'+ val["cost"][0]["value"] +'">'+ val["service"] + ' - ' + val["cost"][0]["etd"] +' Hari</option>'
						})
						$("#courierPacket").append(
								options
						)
						}
					}
				})
            });
            $(document).on('change',"#courierPacket",function(){
                var _this = $(this).val();
                let costSend = formatRupiah(parseInt(_this),"Rp.");                
                let quantity = $('.quantity-field').val();
                let startPrice = $('#startPrice').val();
                let currentTotal = parseInt(startPrice) * parseInt(quantity);                  

                $('.costSend').text(costSend);                
                $("#total_money").text(formatRupiah(parseInt(currentTotal) + parseInt(_this),"Rp."));
                $("#total_money2").val(parseInt(currentTotal) + parseInt(_this));
                $("#total_cost").val(parseInt(_this));
            })
               	
            })
    </script>
</body>

</html>