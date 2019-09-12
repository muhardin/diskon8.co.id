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
        <div class="swiper-container swiper-container-horizontal swiper-container-wp8-horizontal">
            <div class="slideshow-container">
                <?php
          $i=1;
           ?>
                @foreach ($slidePicture as $valslidePicture)
                <div class="mySlides fade">
                    <div class="numbertext">{{@$i++}} / {{@$slidePicture->count()}}</div>
                    <img src="{{asset('images/products/'.$valslidePicture->image)}}" style="width:100%;height:50%">
                    <!-- <div class="text">{{@$valslidePicture->title}}t</div> -->
                </div>
                @endforeach
            </div>
            <div style="text-align:center">
                @foreach ($slidePicture as $valslidePicture)
                <span class="dot"></span>
                @endforeach
            </div>

        </div>
        <div class="seckill-container">
            <div class="seckill-price-wrap">
                <div class="seckill-price"><span>Rp. </span><span
                        class="seckill-big-price">{{number_format(@$collection->agent_price,0)}}</span><span
                        class="seckill-small-price">{{"Rp. ".number_format(@$collection->harga_coret,0)}}</span></div>
                <div class="seckill-btm-div"><span class="skf-icon-pos"><i
                            class="label-icon-div white-border have-icon-div"><i
                                class="label-icon seckill-floor-icon"></i> <span class="label-text white-text"
                                style="display: inline-block; vertical-align: middle; line-height: 0.8rem; font-style: normal;">Flash
                                Deals</span></i>
                    </span>
                    <div class="progress">
                        <div role="progressbar" class="progress-bar progress-bar-success"
                            style="width: {{@$collection->flashProduct}}%;"><span>Sold
                                {{@$collection->flashProduct}}%</span></div>
                    </div>
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
        <div class="title-container">
            <div class="title"><span style="font-size: 28px; font-weight: bold;">{{@$collection->productName}}</span>
                <br>
            </div>
            <!-- <div class="tips">Bebas biaya kirim, Pembayaran di tempat</div>-->
            <p id="demo"></p>
            <div class="tips">{{@$collection->productSubname}}</div>
        </div>
        <div class="label-container clearfix">
            @foreach ($benefit as $key)
            <div class="label"><span><img src="{{asset('front/files/red_4.png')}}" alt=""
                        style="width: 30px;"></span>{{@$key->content}}</div>
            @endforeach
            <!--
            <div class="label"><span><img src="{{asset('front/files/red_4.png')}}" alt="" style="width: 30px;"></span>Pembayaran di tempat</div>
            <div class="label"><span><img src="{{asset('front/files/red_4.png')}}" alt="" style="width: 30px;"></span>Bebas biaya kirim</div>
            <div class="label"><span><img src="{{asset('front/files/red_4.png')}}" alt="" style="width: 30px;"></span>Jaminan kualitas</div>
            <div class="label"><span><img src="{{asset('front/files/red_4.png')}}" alt="" style="width: 30px;"></span>7 hari kembali</div>
            -->
        </div>
        <div class="label-container clearfix">
            <br>
            <div class="description-header">Detail Produk</div>
            <hr>
            <div class="description-body">
                {!!@$collection->content_detail!!}
            </div>
        </div>
        <div class="review-container">
            <div class="description-container">
                <div class="description-header">Galery Produk</div>
                <div class="description-body">
                    <div id="detial-context" class="detail-block" style="padding-top: 0px;">
                        @foreach ($productPicture as $key)
                        <p><img src="{{asset('images/products/'.$key->image)}}"
                                title="{{asset('images/products/'.$key->image)}}" alt="{{@$key->picture}}"></p>
                        @endforeach

                        <!--
                        <p><img src="{{asset('front/files/131617229c2a72.jpg')}}" title="http://yy.jiaoyoumao.com/dacuige/20190517/131617229c2a72.jpg" alt="1_01.jpg"></p>
                        <p><img src="{{asset('front/files/14223983220495.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/14223983220495.jpg"></p>
                        <p><img src="{{asset('front/files/14221226837df4.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/14221226837df4.jpg"></p>
                        <p><img src="{{asset('front/files/142341519b09e9.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142341519b09e9.jpg"></p>
                        <p><img src="{{asset('front/files/142321958cbd16.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142321958cbd16.jpg"></p>
                        <p><img src="{{asset('front/files/1423502803c323.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/1423502803c323.jpg"></p>
                        <p><img src="{{asset('front/files/142451623f8b89.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142451623f8b89.jpg"></p>
                        <p><img src="{{asset('front/files/142502795e03f1.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142502795e03f1.jpg"></p>
                        <p><img src="{{asset('front/files/142459985cf248.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142459985cf248.jpg"></p>
                        <p><img src="{{asset('front/files/14254595566197.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/14254595566197.jpg"></p>
                        <p><img src="{{asset('front/files/142543101729fb.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142543101729fb.jpg"></p>
                        <p><img src="{{asset('front/files/142618302b9d22.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142618302b9d22.jpg"></p>
                        <p><img src="{{asset('front/files/14261381a6d87.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/14261381a6d87.jpg"></p>
                        <p><img src="{{asset('front/files/142612826fcc3c.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142612826fcc3c.jpg"></p>
                        <p><img src="{{asset('front/files/1426283505c3fb.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/1426283505c3fb.jpg"></p>
                        <p><img src="{{asset('front/files/1426277817bea4.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/1426277817bea4.jpg"></p>
                        <p><img src="{{asset('front/files/1426266969d7b3.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/1426266969d7b3.jpg"></p>
                        <p><img src="{{asset('front/files/142632430b1ec6.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/142632430b1ec6.jpg"></p>
                        -->
                        <p>
                            <br>
                        </p>
                    </div>
                    <div class="review-title">Umpan Balik({{@$productComment->count()}})</div>
                    <div
                        style="height:200px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">

                        <div id="colee" style="height: 265px;" class="marquee">
                            <?php $i=1; ?>

                            @foreach ($productComment as $productCommentkey)
                            <div id="colee1" class="review-items">
                                <div class="review-item">
                                    <div class="review-header">
                                        <div class="review-user">{{@$productCommentkey->dateComment}}</div>
                                        <div><span
                                                class="comment-stars-width5"><b>{{@$productCommentkey->custName}}</b></span>
                                        </div>
                                    </div>
                                    <div class="review-body"><span
                                            class="content">{{@$productCommentkey->content}}</span>
                                        <div class="images-container">
                                            <div class="images-item">
                                            
                                            <!--
                                            <p><img src="{{asset('front/files/1439315928f667.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/1439315928f667.jpg"></p>
                                            <p><img src="{{asset('front/files/14393184221a70.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/14393184221a70.jpg"></p>
                                            <p><img src="{{asset('front/files/14393211743b99.jpg')}}" style="" title="http://yy.jiaoyoumao.com/dacuige/20190515/14393211743b99.jpg"></p>
                                            -->
                                                <p>
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>

                    @foreach($productPictureFooter as $valproductPictureFooter)
                    <p><img src="{{url('assets/uploads/'.@$valproductPictureFooter->picture)}}"></p>
                    @endforeach
                    <p style="margin: 20px 0px; border: 2px solid rgb(247, 247, 247);"></p>
                    <div style="border: 2px solid #1cb64d;">
                        <p
                            style="background:#1cb64d; color:white; text-align: center; line-height: 40px; height: 40px; font-size: 16px;">
                            Jaminan kualitas</p>
                        <p style="font-size: 1em; padding: 15px; color: #1cb64d; line-height: 25px;">
                           @foreach($globalFooter as $valueglobalFooter)
                            {{@$valueglobalFooter->content}}
                            <br>
                            @endforeach
                            {{-- 
                            @php
                                $footerdetail = \DB::table('footers')->where('shop_id',$this->dataShop->id)->first();
                            @endphp
                            {!! $footerdetail->footer_detail !!}
                            --}}  
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <p class="search_top">
            <a href="#"><img src="{{asset('front/files/order_ioc_top.png')}}"></a>
        </p>
        <p id="back_top" class="back_top">
            <a href="#top"><img src="{{asset('front/files/top_1.png')}}"></a>
        </p>

        <div style="clear: both;"></div>
        <div id="submit_order" style="display: block;">
            <div onclick="location.href='/';" class="buy sku-buy" style="width: 14%; float: left; height: 85%;"><img
                    src="{{asset('front/files/shop2.png')}}" style="width: 85%;"></div>
            <!--
                <div onclick="toHome()" class="buy sku-buy" style="width: 14%; float: left; height: 85%;"><img
                    src="{{asset('front/files/shop2.png')}}" style="width: 85%;"></div>
            -->
            <div id="bViewContent" style="margin-left: 17%;">Add To Cart</div>
        </div>
    </div>
    <div id="order" class="widgets-cover widgets-cover-sku">
        <form id="donation" onsubmit="return submitForm();">
        <div class="cover-bg"></div>
        <div class="cover-content">
            <div class="sku-wrap">
                <div class="header">
                    <div class="img-wrap">
                        <img class="j-summary-img" src="{{asset('images/products/'.$collection->main_image)}}"></div>
                    <div class="main">
                        <div class="price"> {{"Rp. ".number_format(@$collection->agent_price,0)}}</div>
                        <div class="sku-info"><span>Warna:Silakan pilih spesifikasi Anda<br></span>
                            <br>
                        </div>
                    </div>
                    <a class="sku-close"></a>
                </div>
                <div class="body">
                    <input type="hidden" name="variant_id" value="">
                    <ul class="sku-list-wrap sys_spec_text">
                        <li>
                            <h2>Silakan pilih apa yang Anda butuhkan &nbsp;Warna:</h2>
                            <div role="radiogroup" class="items">
                                @foreach ($varian as $itemvarian)
                                <a spec-id="0" href="javascript:;"
                                    data-img="http://yy.jiaoyoumao.com/dacuige/20190515/14563545093a8a.jpg"
                                    data-serial="S6354-1" data-key="Warna"
                                    data-value="{{@$itemvarian->color." (".@$itemvarian->size.")"}}" data-chinese="黑色M"
                                    class="select-varian">{{@$itemvarian->color." (".@$itemvarian->size.")"}}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                    <div class="number-wrap">
                        <div class="number-line">
                            <label for="number">Jumlah</label> <span class="J_limitTxt limit-txt"></span>
                            <div class="input-group">
                                <input type="button" value="-" class="button-minus" data-field="quantity">
                                <input type="number" step="1" max="" value="1" name="quantity" id="quantityBuy" class="quantity-field">
                                <input type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                            <div class="cl"></div>
                            <p style="color: red; font-size: 16px;">{{@$collection->name}}</p>
                        </div>
                    </div>
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
                        <label for="address" class="bdxx"><em>*</em>Alamat</label>
                        <div class="textbox">
                            <input name="userAddress" id="userAddress" datatype="*" type="text" required="required"
                                placeholder="Silakan isi alamat lengkapnya">
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
                    <div class="bdbox">
                        <label class="bdxx"><em>*</em>Pilih Kurir</label>
                        <div class="textbox">
                            <select id="courierID" name="courier_id" required="required"
                                style="width: 95%; border: none; font-size: 0.6rem; color: rgb(102, 102, 102);">
                                <option value="" selected="selected">Silahkan Pilih</option>
                                <option value="jne">JNE</option>
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
                        <input type="hidden" id="startPrice" value="{{$collection->agent_price}}">
                        <input type="hidden" id="total_money2" value="{{$collection->agent_price}}">
                        <input type="hidden" id="product_name" value="{{@$collection->name}}">
                        <input type="hidden" id="total_cost" value="0">
                        <input type="hidden" id="idProduct" value="{{@$collection->product_id}}">
                        <input type="text" id="Shop_Id" value="{{@$collection->shop_id}}">
                        
                        <div class="text3box text-r"><span id="j_total" style="color: rgb(239, 53, 96);"></span><span
                                id="total_money">{{"Rp. ".number_format(@$collection->agent_price,0)}}</span> <span
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
                                </select>
                            </div>
                        </div>

                </div>
                <div class="footer trade">
                    <div role="button" id="bAddToCart" class="buy ssku-buy">Add To Cart</div>
                    <input type="hidden" name="token" id="token">
                    <input type="button" value="Kirim Pesanan" onclick="submitForm()" class="buy"
                        style="width: 95%; border: 0px;">
                </div>
            </div>
        </div>
    </form>
    </div>
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
                    alert("Silakan pilih spesifikasi Anda!");
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
                            startPrice: $('#startPrice').val(),
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
        donation_type: $('#product_name').val(),
        customer_name: $('#userName').val(),
        customer_email: $('#userEmail').val(),
        customer_phone: $('#userPhone').val(),
        customer_address: $('#userAddress').val(),
        customer_postalcode: $('#payname').val(),
        ongkir: $('#total_cost').val(),

        courierID: $('#courierID').val(),
        courierPacket: $('#courierPacket').val(),

        idProduct: $('#idProduct').val(),
        quantityBuy: $('#quantityBuy').val(),
        
        subdistrictID: $('#subdistrictID').val(),
        subdistrictIDText: $('#subdistrictID option:selected').text()
        
        cityID: $('#cityID').val(),
        cityIDText: $('#cityID option:selected').text(),
        
        provinceID: $('#provinceID').val(),
        provinceIDText: $('#provinceID option:selected').text(),

        paidID: $('#paidID').val(),
    },
    function (data, status) {
        if (data.status == 'error') {
            alert(data.message);
        } else {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    location.reload();
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
                donation_type: $('#product_name').val(),
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
                $.ajax({

					url: "{{ route('rajaOngkir.getCost') }}",
					cache: false,
					type: "get",
					data: {						
						destination: subdistrictID,
						courirDT: courirDT,
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