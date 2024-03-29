<!DOCTYPE html>
<html>

<head>
    <title> Admin - Ultimate246</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link href="{{asset('../members/css/style.css?id=f4d7c4f0b52b27603ae1')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="menu-position-side  menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="search-with-suggestions-w">
            <div class="search-with-suggestions-modal">
                <div class="search-suggestions-group">

                </div>

            </div>
        </div>
        <div class="layout-w">
            <!--------------------
				START - Mobile Menu
				-------------------->
            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="#">
                        <script data-pagespeed-no-defer>
                            (function() {
                                for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                        if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                        b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                    }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                                    var m = k[l];
                                    m in h || (h[m] = {});
                                    h = h[m]
                                }
                                var n = k[k.length - 1],
                                    p = h[n],
                                    q = p ? p : function(b) {
                                        var c;
                                        if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                                        c = this + "";
                                        if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                        b |= 0;
                                        for (var a = ""; b;)
                                            if (b & 1 && (a += c), b >>>= 1) c += c;
                                        return a
                                    };
                                q != p && null != q && g(h, n, {
                                    configurable: !0,
                                    writable: !0,
                                    value: q
                                });
                                var t = this;

                                function u(b, c) {
                                    var a = b.split("."),
                                        d = t;
                                    a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                    for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                                };

                                function v(b) {
                                    var c = b.length;
                                    if (0 < c) {
                                        for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                        return a
                                    }
                                    return []
                                };

                                function w(b) {
                                    var c = window;
                                    if (c.addEventListener) c.addEventListener("load", b, !1);
                                    else if (c.attachEvent) c.attachEvent("onload", b);
                                    else {
                                        var a = c.onload;
                                        c.onload = function() {
                                            b.call(this);
                                            a && a.call(this)
                                        }
                                    }
                                };
                                var x;

                                function y(b, c, a, d, e) {
                                    this.h = b;
                                    this.j = c;
                                    this.l = a;
                                    this.f = e;
                                    this.g = {
                                        height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                                        width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                                    };
                                    this.i = d;
                                    this.b = {};
                                    this.a = [];
                                    this.c = {}
                                }

                                function z(b, c) {
                                    var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                    if (a = e && !(e in b.c))
                                        if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                        else {
                                            d = c.getBoundingClientRect();
                                            var f = document.body;
                                            a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                            d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                            f = a.toString() + "," + d;
                                            b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                        }
                                    a && (b.a.push(e), b.c[e] = !0)
                                }
                                y.prototype.checkImageForCriticality = function(b) {
                                    b.getBoundingClientRect && z(this, b)
                                };
                                u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                                    x.checkImageForCriticality(b)
                                });
                                u("pagespeed.CriticalImages.checkCriticalImages", function() {
                                    A(x)
                                });

                                function A(b) {
                                    b.b = {};
                                    for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                                    if (a.length && a[0].getBoundingClientRect) {
                                        for (d = 0; c = a[d]; ++d) z(b, c);
                                        a = "oh=" + b.l;
                                        b.f && (a += "&n=" + b.f);
                                        if (c = !!b.a.length)
                                            for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                                var e = "," + encodeURIComponent(b.a[d]);
                                                131072 >= a.length + e.length && (a += e)
                                            }
                                        b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                                        C = a;
                                        if (c) {
                                            d = b.h;
                                            b = b.j;
                                            var f;
                                            if (window.XMLHttpRequest) f = new XMLHttpRequest;
                                            else if (window.ActiveXObject) try {
                                                f = new ActiveXObject("Msxml2.XMLHTTP")
                                            } catch (r) {
                                                try {
                                                    f = new ActiveXObject("Microsoft.XMLHTTP")
                                                } catch (D) {}
                                            }
                                            f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                        }
                                    }
                                }

                                function B() {
                                    var b = {},
                                        c;
                                    c = document.getElementsByTagName("IMG");
                                    if (!c.length) return {};
                                    var a = c[0];
                                    if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                    for (var d = 0; a = c[d]; ++d) {
                                        var e = a.getAttribute("data-pagespeed-url-hash");
                                        e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                            rw: a.width,
                                            rh: a.height,
                                            ow: a.naturalWidth,
                                            oh: a.naturalHeight
                                        })
                                    }
                                    return b
                                }
                                var C = "";
                                u("pagespeed.CriticalImages.getBeaconData", function() {
                                    return C
                                });
                                u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                                    var r = new y(b, c, a, e, f);
                                    x = r;
                                    d && w(function() {
                                        window.setTimeout(function() {
                                            A(r)
                                        }, 0)
                                    })
                                });
                            })();
                            pagespeed.CriticalImages.Run('/ngx_pagespeed_beacon', 'https://ultimate246.com/admin/catalog', 'v84etq1rMa', true, false, 'Vd_JKY37SVs');
                        </script><img src="{{url('../members/img/logo.png')}}" data-pagespeed-url-hash="2837788309" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><span>{{@Auth::user()->name}}</span></a>
                    <div class="mm-buttons">
                        <!-- <div class="content-panel-open">
								<div class="os-icon os-icon-grid-circles"></div>
							</div> -->
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w">
                            <img alt="" src="{{asset('../members/img/avatar1.png')}}" data-pagespeed-url-hash="3110170124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                {{@Auth::user()->name}}
                            </div>

                        </div>
                    </div>
                    <!--------------------
					START - Mobile Menu List
					-------------------->
                    <ul class="main-menu">
                        <li>
                            <a href="{{url('member/')}}">
                                <div class="icon-w" title='Dasbor'>
                                    <div class="icon icon-dashboard"></div>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('member/catalog')}}">
                                <div class="icon-w" title="Katalog">
                                    <div class="icon icon-catalogue"></div>
                                </div>
                                <span>Katalog</span>
                            </a>
                        </li> 
                        <li>
                            <a href="{{url('member/product')}}">
                                <div class="icon-w" title="Produk">
                                    <div class="icon icon-product"></div>
                                </div>
                                <span>Product</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://ultimate246.com/admin/discount">
                                <div class="icon-w" title="Diskon">
                                    <div class="icon icon-coupon"></div>
                                </div>
                                <span>Coupon</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('member/team')}}">
                                <div class="icon-w" title="Team">
                                    <div class="icon icon-team"></div>
                                </div>
                                <span>Team</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://ultimate246.com/admin/page">
                                <div class="icon-w" title="Halaman">
                                    <div class="icon icon-pages"></div>
                                </div>
                                <span>Pages</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/member/gajian')}}">
                                <div class="icon-w" title='Gajian'>
                                    <div class="icon icon-payout"></div>
                                </div>
                                <span>Gajian</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/member/order')}}">
                                <div class="icon-w" title="Pesanan">
                                    <div class="icon icon-order"></div>
                                </div>
                                <span>Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://ultimate246.com/admin/order/track">
                                <div class="icon-w" title="Lacak Pesanan">
                                    <div class="icon icon-track-order"></div>
                                </div>
                                <span>Lacak Pesanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/member/app')}}">
                                <div class="icon-w" title="Aplikasi">
                                    <div class="icon icon-apps"></div>
                                </div>
                                <span>Apps</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://ultimate246.com/admin/custom-form">
                                <div class="icon-w" title="Custom Form">
                                    <div class="icon icon-form-custom"></div>
                                </div>
                                <span>Custom Form</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('member/setting')}}">
                                <div class="icon-w" title="Pengaturan">
                                    <div class="icon icon-setting"></div>
                                </div>
                                <span>Setting</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://ultimate246.com/admin/help">
                                <div class="icon-w" title="FAQ">
                                    <div class="icon icon-help"></div>
                                </div>
                                <span>FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <div class="icon-w" title="Logout">
                                    <div class="icon"><i class="fa fa-logout"></i></div>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                    <!--------------------
					END - Mobile Menu List
					-------------------->
                </div>
            </div>
            <!--------------------
				END - Mobile Menu
				-------------------->
            <!--------------------
				START - Main Menu
				-------------------->
            <div class="menu-w color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-mini sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
                <div class="logo-w">
                    <a class="logo" href="https://ultimate246.com">
                        <div class="logo-element"></div>
                        <div class="logo-label">
                            {{@Auth::user()->name}}
                        </div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w">
                            <img alt="" src="{{asset('../members/img/avatar1.png')}}" data-pagespeed-url-hash="3110170124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                {{@Auth::user()->name}}
                            </div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w">
                                    <img alt="" src="{{asset('../members/img/avatar1.png')}}" data-pagespeed-url-hash="3110170124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name">
                                            {{@Auth::user()->name}}
                                    </div>
                                </div>
                            </div>
                            <div class="bg-icon">

                            </div>
                            <ul>
                                <li>
                                    <a href="{{url('member/setting')}}"><i class="os-icon os-icon-ui-46"></i><span>Setting</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h1 class="menu-page-header">
						TITLE HEADER
					</h1>
                <ul class="main-menu">
                    <li>
                        <a href="{{url('member/')}}">
                            <div class="icon-w" title='Dasbor'>
                                <div class="icon icon-dashboard"></div>
                            </div>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('member/catalog')}}">
                            <div class="icon-w" title="Katalog">
                                <div class="icon icon-catalogue"></div>
                            </div>
                            <span>Katalog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('member/product')}}">
                            <div class="icon-w" title="Produk">
                                <div class="icon icon-product"></div>
                            </div>
                            <span>Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('member/coupon')}}">
                            <div class="icon-w" title="Diskon">
                                <div class="icon icon-coupon"></div>
                            </div>
                            <span>Coupon</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/member/team')}}">
                            <div class="icon-w" title="Team">
                                <div class="icon icon-team"></div>
                            </div>
                            <span>Team</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/member/landingpage')}}">
                            <div class="icon-w" title="Halaman">
                                <div class="icon icon-pages"></div>
                            </div>
                            <span>Pages</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/member/gajian')}}">
                            <div class="icon-w" title='Gajian'>
                                <div class="icon icon-payout"></div>
                            </div>
                            <span>Gajian</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/member/order')}}">
                            <div class="icon-w" title="Pesanan">
                                <div class="icon icon-order"></div>
                            </div>
                            <span>Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ultimate246.com/admin/order/track">
                            <div class="icon-w" title="Lacak Pesanan">
                                <div class="icon icon-track-order"></div>
                            </div>
                            <span>Lacak Pesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/member/apps')}}">
                            <div class="icon-w" title="Aplikasi">
                                <div class="icon icon-apps"></div>
                            </div>
                            <span>Apps</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ultimate246.com/admin/custom-form">
                            <div class="icon-w" title="Custom Form">
                                <div class="icon icon-form-custom"></div>
                            </div>
                            <span>Custom Form</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/member/setting')}}">
                            <div class="icon-w" title="Pengaturan">
                                <div class="icon icon-setting"></div>
                            </div>
                            <span>Setting</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ultimate246.com/admin/help">
                            <div class="icon-w" title="FAQ">
                                <div class="icon icon-help"></div>
                            </div>
                            <span>FAQ</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--------------------
				END - Main Menu
				-------------------->
            <div class="content-w">
                <!--------------------
					START - Top Bar
					-------------------->
                <div class="top-bar d-none d-sm-block color-scheme-light">
                    <!--------------------
					START - Top Menu Controls
					-------------------->
                    <div class="top-menu-controls">
                        <!--------------------
						START - Messages Link in secondary top menu
						-------------------->

                        <!--------------------
							END - Messages Link in secondary top menu
							-------------------->
                        <!--------------------
							START - User avatar and menu in secondary top menu
                            -------------------->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w">
                                    <img alt="" src="{{asset('../members/img/avatar1.png')}}" data-pagespeed-url-hash="3110170124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="logged-user-menu color-style-bright">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w">
                                            <img alt="" src="{{asset('../members/img/avatar1.png')}}" data-pagespeed-url-hash="3110170124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name">
                                                    {{@Auth::user()->name}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-icon">
                                        <i class="os-icon os-icon-wallet-loaded"></i>
                                    </div>
                                    <ul>

                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--------------------
						END - User avatar and menu in secondary top menu
						-------------------->
                    </div>
                    <!--------------------
					END - Top Menu Controls
					-------------------->
                </div>
                <!--------------------
				END - Top Bar
				-------------------->

                <div class="content-panel-toggler">
                    <i class="os-icon os-icon-grid-squares-22"></i>
                    <span>Sidebar</span>
                </div>
                @yield('content')
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <div class="overlay" style="display: none; width: 100%; height: 100%; position: fixed; top:0; left:0; background:rgba(0,0,0,.3); z-index: 99999;">
        <div style=" width: 80px;
	height: 80px;  margin: auto;
	position: absolute;
	top: 0; left: 0; bottom: 0; right: 0;" class="text-center"><i class="fa fa-5x fa-refresh fa-spin"></i></div>
    </div>

    <script src="{{asset('../members/js/app.js?id=f4afb0a08c857f0c4362')}}"></script>
    <script src="{{asset('../members/js/modernizr-custom.js')}}"></script>
    <script type="text/javascript">
        if (Modernizr.promises && Modernizr.localstorage) {} else {
            $('body').append($('<div>').addClass('alert alert-warning fixed-top text-center rounded-0').html('Update browser Anda untuk mendapatkan performa terbaik, ').append($('<a>').addClass('text-info').attr('target', '_blank').attr('href', 'https://www.google.com/chrome/').text('Download Chrome')));
        }
    </script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
      var konten = document.getElementById("konten");
        CKEDITOR.replace(konten,{
        language:'en-gb'
      });
      CKEDITOR.config.allowedContent = true;
    </script>

    
<!-- detail product -->
    <script type="text/javascript">
        $(".tab-content").hide()
        $(".tab-content#deskripsi").show()
        
        function setActiveTab(id, e) {
            e.preventDefault();
            $('#tab .nav-link').removeClass('active')
            $('#tab .nav-link[href="#' + id + '"]').addClass('active')
            $(".tab-content").hide()
            $('.tab-content#' + id).show()
        }
        window.product = {
            sellPrice: Number('{{@$pricepackage->agent_price}}'),
            profit: Number('{{@$collectiondetail->profit_limit}}'),
            recommendedPrice: Number('{{@$pricepackage->agent_price + @$collectiondetail->profit_limit}}')
        }
        const instance = axios.create({
            baseURL: '{{url('/members/')}}',
            headers: {
                'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImQ0Y2EyMjY4NmQxZDIxMWQ4MDcxYWM2NWQyM2E4N2UxYTk5NjMzMjRkOTI4OGMwYWJhOGYyMTc1ZGY5ODZjMTkyM2MxOTZlODI1NDNkOTljIn0.eyJhdWQiOiI1IiwianRpIjoiZDRjYTIyNjg2ZDFkMjExZDgwNzFhYzY1ZDIzYTg3ZTFhOTk2MzMyNGQ5Mjg4YzBhYmE4ZjIxNzVkZjk4NmMxOTIzYzE5NmU4MjU0M2Q5OWMiLCJpYXQiOjE1NjQwNDczOTMsIm5iZiI6MTU2NDA0NzM5MywiZXhwIjoxNTk1NjY5NzkzLCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.MY50qY-9uM0bAhJGLTRbI7dGVKjRVUXuFbUtm4Ifb0rIr__Lb8vwgfXmN72jZrHZ7capb8N6HN2wRV_21V7NLFPBVntzMG_ChUvXMWfGZT5APMgKDtEdAivyBdE_ul0Odx6SpaOoFRxuMA6U6GZz1fYgArFudoCR29U_0-kVgWXEx-RksoWAETCKpEX458-hhgfWeVfKDwwzy-qN34XVdCUk9_bQcFAYGCOZJdppMqKhC_rAE11S-MMI3y4OZGPo-jGGqp-W3m-PY62KZqdWUvcl7DkLPfC6ExkVvO1OhEvn1IO9Gb0oEifIqOixRMcVTSmtX8_e6YHx6npdd4_0Db5fXE-opdIQoVHsqcJEdORSraorre_NFqyHX8856yFqXShh24uuabGdmFFNdSMAQdoGl2IT758T7RFZCc64moRpOz7djiPPVtzS8iVSHIeVg5d9S67KViEu6BLsb7wTa_bLRwIrS-IGM4zQFXhf4_ioF82U3UsJqlO9Zs4mRsWWZO-hP7lCGVzANkXh6_5Ue9pdwgWIgE7emGcCpyqdh7nVVnCuqOkzhsKv5TcUWxC14euIWYFjB1JgQdtBj39Br5UraWtKa8jO7QwFZDozmgmcQ8UWUtKSOEmkmzyfNDr5lCX7n4A-inzc9DgotApX1jsAedkhKFZqP3jzub-7yak'
            }
        });
    
        function numberFormat(number) {
            return new Intl.NumberFormat('id-Id', {
                style: 'currency',
                currency: 'IDR'
            }).format(number)
        }
    
        function priceformat() {
            $('.priceformat').priceFormat({
                prefix: 'Rp ',
                centsLimit: 0,
                centsSeparator: ',',
                thousandsSeparator: '.',
            })
        }
    
        function unformat() {
            $('.priceformat').unmask()
        }
    
        function setProfitList(profit) {
            $('#profit-1').text(numberFormat(profit))
            $('#profit-10').text(numberFormat(profit * 10))
            $('#profit-25').text(numberFormat(profit * 25))
            $('#profit-50').text(numberFormat(profit * 50))
            $('#profit-150').text(numberFormat(profit * 150))
            $('#profit-500').text(numberFormat(profit * 250))
        }
        $(document).ready(function() {
            var profit = window.product.profit;
                var recommendedPrice = window.product.recommendedPrice;
                var sellPrice = window.product.sellPrice;
                var _sellPrice = parseInt($('#sell_price').unmask());
                var _profit = _sellPrice - sellPrice;
                if (_sellPrice < recommendedPrice) {
                    $('#sell_price').val(recommendedPrice);
                    $('#profit').val(recommendedPrice - sellPrice);
                    swal({
                        title: 'Ooops',
                        html: 'Harga tidak boleh dibawah <span class="priceformat">' + recommendedPrice + '</span>',
                        type: 'error'
                    });
                } else {
                    $('#sell_price').val(_sellPrice)
                    $('#profit').val(_profit)
                }
                setProfitList(_profit)
                priceformat()

            $('.next').click(function(event) {
                event.preventDefault();
                $('.carousel-indicators').animate({
                    scrollLeft: "+=100px"
                }, "slow");
            });
            $('.before').click(function(event) {
                event.preventDefault();
                $('.carousel-indicators').animate({
                    scrollLeft: "-=100px"
                }, "slow");
            }); 
            $("[class*='product_image_tag']").css({
                height: 0,
                width: 0
            });
            const instance = axios.create({
                baseURL: "{{url('/api')}}",
                timeout: 1000,
                headers: {
                    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImQ0Y2EyMjY4NmQxZDIxMWQ4MDcxYWM2NWQyM2E4N2UxYTk5NjMzMjRkOTI4OGMwYWJhOGYyMTc1ZGY5ODZjMTkyM2MxOTZlODI1NDNkOTljIn0.eyJhdWQiOiI1IiwianRpIjoiZDRjYTIyNjg2ZDFkMjExZDgwNzFhYzY1ZDIzYTg3ZTFhOTk2MzMyNGQ5Mjg4YzBhYmE4ZjIxNzVkZjk4NmMxOTIzYzE5NmU4MjU0M2Q5OWMiLCJpYXQiOjE1NjQwNDczOTMsIm5iZiI6MTU2NDA0NzM5MywiZXhwIjoxNTk1NjY5NzkzLCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.MY50qY-9uM0bAhJGLTRbI7dGVKjRVUXuFbUtm4Ifb0rIr__Lb8vwgfXmN72jZrHZ7capb8N6HN2wRV_21V7NLFPBVntzMG_ChUvXMWfGZT5APMgKDtEdAivyBdE_ul0Odx6SpaOoFRxuMA6U6GZz1fYgArFudoCR29U_0-kVgWXEx-RksoWAETCKpEX458-hhgfWeVfKDwwzy-qN34XVdCUk9_bQcFAYGCOZJdppMqKhC_rAE11S-MMI3y4OZGPo-jGGqp-W3m-PY62KZqdWUvcl7DkLPfC6ExkVvO1OhEvn1IO9Gb0oEifIqOixRMcVTSmtX8_e6YHx6npdd4_0Db5fXE-opdIQoVHsqcJEdORSraorre_NFqyHX8856yFqXShh24uuabGdmFFNdSMAQdoGl2IT758T7RFZCc64moRpOz7djiPPVtzS8iVSHIeVg5d9S67KViEu6BLsb7wTa_bLRwIrS-IGM4zQFXhf4_ioF82U3UsJqlO9Zs4mRsWWZO-hP7lCGVzANkXh6_5Ue9pdwgWIgE7emGcCpyqdh7nVVnCuqOkzhsKv5TcUWxC14euIWYFjB1JgQdtBj39Br5UraWtKa8jO7QwFZDozmgmcQ8UWUtKSOEmkmzyfNDr5lCX7n4A-inzc9DgotApX1jsAedkhKFZqP3jzub-7yak'
                }
            });
            priceformat()
            $("[name='price']").blur(function() {
                var profit = window.product.profit;
                var recommendedPrice = window.product.recommendedPrice;
                var sellPrice = window.product.sellPrice;
                var _sellPrice = parseInt($('#sell_price').unmask());
                var _profit = _sellPrice - sellPrice;
                if (_sellPrice < recommendedPrice) {
                    $('#sell_price').val(recommendedPrice);
                    $('#profit').val(recommendedPrice - sellPrice);
                    swal({
                        title: 'Ooops',
                        html: 'Harga tidak boleh dibawah <span class="priceformat">' + recommendedPrice + '</span>',
                        type: 'error'
                    });
                } else {
                    $('#sell_price').val(_sellPrice)
                    $('#profit').val(_profit)
                }
                setProfitList(_profit)
                priceformat()
            })
            $("#profit").blur(function() {
                var profit = window.product.profit;
                var recommendedPrice = window.product.recommendedPrice;
                var sellPrice = window.product.sellPrice;
                var _profit = parseInt($('#profit').unmask())
                if (_profit < profit) {
                    $('#sell_price').val(recommendedPrice);
                    $('#profit').val(recommendedPrice - sellPrice);
                    swal({
                        title: 'Ooops',
                        html: 'Harga tidak boleh dibawah <span class="priceformat">' + recommendedPrice + '</span>',
                        type: 'error'
                    });
                } else {
                    $('#sell_price').val(sellPrice + _profit)
                    $('#profit').val(_profit)
                }
                setProfitList(_profit)
                priceformat()
            })
            $('#addProduct').submit(function(e) {
                e.preventDefault()
                data                = $(this).serializeObject();
                data.product_id     = '{{@$collectiondetail->id}}'
                data.price          = $('#sell_price').unmask().trim();
                data.priceprofit    = $('#profit').unmask().trim();
                instance.post('/productadd', data).then(function(res) {
                    console.log(res)
                    if (res.data.meta.status) {
                        swal('Sukses', 'Produk berhasil ditambahkan ke store', 'success');
                        //window.location = "{{url('/member/catalog/')}}" + "/" + res.data.data.id;
                        window.location = "{{url('/member/catalog/')}}";
                    } else {
                        swal('Ooops!', res.data.meta.message, 'error');
                    }
                }).catch(function(res) {
                    console.log(res);
                    swal('Ooops!', 'Gagal', 'error');
                })
            })
        });
    </script>
    <script>
        
    $(document).ready(function(){
        const instance = axios.create({
                baseURL: "{{url('/api')}}",
                timeout: 1000,
                headers: {
                    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImQ0Y2EyMjY4NmQxZDIxMWQ4MDcxYWM2NWQyM2E4N2UxYTk5NjMzMjRkOTI4OGMwYWJhOGYyMTc1ZGY5ODZjMTkyM2MxOTZlODI1NDNkOTljIn0.eyJhdWQiOiI1IiwianRpIjoiZDRjYTIyNjg2ZDFkMjExZDgwNzFhYzY1ZDIzYTg3ZTFhOTk2MzMyNGQ5Mjg4YzBhYmE4ZjIxNzVkZjk4NmMxOTIzYzE5NmU4MjU0M2Q5OWMiLCJpYXQiOjE1NjQwNDczOTMsIm5iZiI6MTU2NDA0NzM5MywiZXhwIjoxNTk1NjY5NzkzLCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.MY50qY-9uM0bAhJGLTRbI7dGVKjRVUXuFbUtm4Ifb0rIr__Lb8vwgfXmN72jZrHZ7capb8N6HN2wRV_21V7NLFPBVntzMG_ChUvXMWfGZT5APMgKDtEdAivyBdE_ul0Odx6SpaOoFRxuMA6U6GZz1fYgArFudoCR29U_0-kVgWXEx-RksoWAETCKpEX458-hhgfWeVfKDwwzy-qN34XVdCUk9_bQcFAYGCOZJdppMqKhC_rAE11S-MMI3y4OZGPo-jGGqp-W3m-PY62KZqdWUvcl7DkLPfC6ExkVvO1OhEvn1IO9Gb0oEifIqOixRMcVTSmtX8_e6YHx6npdd4_0Db5fXE-opdIQoVHsqcJEdORSraorre_NFqyHX8856yFqXShh24uuabGdmFFNdSMAQdoGl2IT758T7RFZCc64moRpOz7djiPPVtzS8iVSHIeVg5d9S67KViEu6BLsb7wTa_bLRwIrS-IGM4zQFXhf4_ioF82U3UsJqlO9Zs4mRsWWZO-hP7lCGVzANkXh6_5Ue9pdwgWIgE7emGcCpyqdh7nVVnCuqOkzhsKv5TcUWxC14euIWYFjB1JgQdtBj39Br5UraWtKa8jO7QwFZDozmgmcQ8UWUtKSOEmkmzyfNDr5lCX7n4A-inzc9DgotApX1jsAedkhKFZqP3jzub-7yak'
                }
            });
            /*
        var simplemde = new SimpleMDE({
                element: $("#description")[0],
                placeholder: "Deskrwipsi Produk...",
                spellChecker: false,
                autosave: {
                    enabled: false,
                    uniqueId: "create-campaign-desc",
                    delay: 500,
                }
            });*/
        $('.priceformat').priceFormat({
                prefix: 'Rp ',
                centsLimit: 0,
                centsSeparator: ',',
                thousandsSeparator: '.',
            });
        $('.btn-reset-desc').click(function (e) {
            e.preventDefault();
            var $this = $(this); 
            swal({
                title: 'Reset Deskripsi ?',
                text : 'Anda akan mereset deskripsi produk ke default',
                type : 'question',
                showCancelButton : true
            }).then(function (e) {
                if(e.value) {
                    simplemde.value($this.data('text'));
                }
            });
        });
        $('.btn-nonactive').click(function(e){
            e.preventDefault();
            instance.get('/productstatus/{{@$collectionproduct->shop_product_id}}?stat=0').then(function(res) {
                    console.log(res)
                    if (res.data.meta.status) {
                        swal('Sukses', 'Produk berhasil ditambahkan ke store', 'success');
                        //window.location = "{{url('/member/catalog/')}}" + "/" + res.data.data.id;
                        window.location.reload();
                    } else {
                        swal('Ooops!', res.data.meta.message, 'error');
                    }
                }).catch(function(res) {
                    console.log(res);
                    swal('Ooops!', 'Gagal', 'error');
                })
        });
    
        $('.btn-active').click(function(e){
            e.preventDefault();
            instance.get('/productstatus/{{@$collectionproduct->shop_product_id}}?stat=1').then(function(res) {
                    console.log(res)
                    if (res.data.meta.status) {
                        swal('Sukses', 'Produk berhasil ditambahkan ke store', 'success');
                        //window.location = "{{url('/member/catalog/')}}" + "/" + res.data.data.id;
                        window.location.reload();
                    } else {
                        swal('Ooops!', res.data.meta.message, 'error');
                    }
                }).catch(function(res) {
                    console.log(res);
                    swal('Ooops!', 'Gagal', 'error');
                })
        })
        

        var value = parseInt($('#sell_price_detail').unmask());
            if(value < {{@$collectionproduct->profit_limit + @$collectionpack->agent_price}}) {
                swal('Oops','Harga Jual Tidak Boleh Kurang Dari Rp {{@$collectionproduct->profit_limit + @$collectionpack->agent_price}}',  'warning');
                $('#profit').val({{@$collectionpack->profit}});
                $('#sell_price_detail').val({{@$collectionproduct->price_sell}});
            } else {
                profit = value - {{@$collectionpack->agent_price}};
                $('#profit').val(profit);
            }
    
            $('.priceformat').priceFormat({
                prefix: 'Rp ',
                centsLimit: 0,
                centsSeparator: ',',
                thousandsSeparator: '.',
            });
        $('#sell_price_detail').blur(function(){
            var value = parseInt($(this).unmask());
            if(value < {{@$collectionproduct->profit_limit + @$collectionpack->agent_price}}) {
                swal('Oops','Harga Jual Tidak Boleh Kurang Dari Rp {{@$collectionproduct->profit_limit + @$collectionpack->agent_price}}',  'warning');
                $('#profit').val({{@$collectionpack->profit}});
                $('#sell_price_detail').val({{@$collectionproduct->price_sell}});
            } else {
                profit = value - {{@$collectionpack->agent_price}};
                $('#profit').val(profit);
            }
    
            $('.priceformat').priceFormat({
                prefix: 'Rp ',
                centsLimit: 0,
                centsSeparator: ',',
                thousandsSeparator: '.',
            });
        });
    
        $('#display_price').blur(function (e) {
            var display = parseInt($('#display_price').unmask());
            var sell_price_detail = parseInt($('#sell_price_detail').unmask());
            if(display <= sell_price_detail) {
                swal('Oops', 'Harga Coret Harus Diatas Harga Jual', 'info').then(function (params) {
                    $('#display_price').val(sell_price_detail);
                    $('.priceformat').priceFormat({
                        prefix: 'Rp ',
                        centsLimit: 0,
                        centsSeparator: ',',
                        thousandsSeparator: '.',
                    });
                });
            }
        });
    
        $('#updateProduct').submit(function(e){
            e.preventDefault()
                var datakonten = CKEDITOR.instances.konten.getData();
                data                = $(this).serializeObject();
                data._id            = '{{@$collectionproduct->shop_product_id}}'
                data.price          = $('#sell_price_detail').unmask().trim();
                data.priceprofit    = $('#profit').unmask().trim();
                data.display_price  = $('#display_price').unmask().trim();
                
                data.content        = datakonten;
                instance.post('/productupdate', data).then(function(res) {
                    console.log(res)
                    if (res.data.meta.status) {
                        swal('Sukses', 'Produk berhasil ditambahkan ke store', 'success');
                        //window.location = "{{url('/member/catalog/')}}" + "/" + res.data.data.id;
                        window.location.reload();
                    } else {
                        swal('Ooops!', res.data.meta.message, 'error');
                    }
                }).catch(function(res) {
                    console.log(res);
                    swal('Ooops!', 'Gagal', 'error');
                })

            /*e.preventDefault();
            var data            = $(this).serializeObject();
            data.price          = parseInt($('#sell_price_detail').unmask());
            data.display_price  = parseInt($('#display_price').unmask());
            //instance.post('/productadd', data).then(function(res) {
            instance.patch(
                    '/productupdate',data
                )
                    .then(function(res) {
                            if(res.data.meta.status == true){
                            swal( 'Success','Produk berhasil di Update', 'success').then(function(){
                                window.location.reload();
                            });
                        } else {
                            swal( 'Oops', 'Produk gagal di update', 'error');
                        }
    
                    })
                    .catch(function(res) {
                        console.log(res);
                        swal('Ooops!',  'Gagal', 'error');
                    })*/
        });
    
    });
    </script>
    
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        </script>
    
    

</body>

</html>