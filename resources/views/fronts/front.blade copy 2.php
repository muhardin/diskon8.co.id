@extends('layouts.front')
@section('content')
<div class="main">
<div class="wrapper">
    <h1 v-show="false">test</h1>
    <div class="search-content" :class="wTop<3?'wbox':''">
        <a class="class" name="index_none_header_syfl"href="type.html"></a>
        <a class="wbox-flex search-bar pr" style="padding: 0px;margin: 0px 0px 0px 48px;" href="seek.html"><div class="scan"></div><input type="text" disabled="disabled" v-model="q.key" placeholder="cari produk"></a>
        <a href="search.html" name="index_none_header_sydl"class="mybtn myBtnNoLogin"></a>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper"><div class="swiper-slide"><a href="Fumft.html"><img src="http://yy.jiaoyoumao.com/dacuige/20190520/1855021820a27b.jpg"></a></div><div class="swiper-slide"><a href="Fumfo.html"><img src="http://yy.jiaoyoumao.com/dacuige/20190520/18545178701414.jpg"></a></div><div class="swiper-slide"><a href="Fumfn.html"><img src="http://yy.jiaoyoumao.com/dacuige/20190520/1854402544a611.jpg"></a></div><div class="swiper-slide"><a href="Fumfd.html"><img src="http://yy.jiaoyoumao.com/dacuige/20190520/1855459900e1a1.jpg"></a></div></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="ioc-container"><div class="swiper-wrapper">
        <div class="swiper-slide"><div class="ioc-boxs">
            <div class="ioc-box">
                    <a href="seek_data.html?type=Tas wanita" title="Tas wanita"><img alt="Tas wanita" src="http://yy.jiaoyoumao.com/dacuige/20190520/162256520691ba.jpg"><span>Tas wanita</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Tas pria" title="Tas pria"><img alt="Tas pria" src="http://yy.jiaoyoumao.com/dacuige/20190520/16383113930342.jpg"><span>Tas pria</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Pakaian wanita" title="Pakaian wanita"><img alt="Pakaian wanita" src="http://yy.jiaoyoumao.com/dacuige/20190520/161906985e8629.jpg"><span>Pakaian wanita</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Pakaian pria" title="Pakaian pria"><img alt="Pakaian pria" src="http://yy.jiaoyoumao.com/dacuige/20190520/161048312ef8bf.jpg"><span>Pakaian pria</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Produk digital" title="Produk digital"><img alt="Produk digital" src="http://yy.jiaoyoumao.com/dacuige/20190520/16170897183c0f.jpg"><span>Produk digital</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Strap Jam tangan" title="Strap Jam tangan"><img alt="Strap Jam tangan" src="http://yy.jiaoyoumao.com/dacuige/20190520/1634098376e5f8.jpg"><span>Strap Jam tangan</span></a>
            </div><div class="ioc-box">
                    <a href="seek_data.html?type=Aksesori mobil" title="Aksesori mobil"><img alt="Aksesori mobil" src="http://yy.jiaoyoumao.com/dacuige/20190520/1640345393c108.jpg"><span>Aksesori mobil</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=aksesoris" title="aksesoris"><img alt="aksesoris" src="http://yy.jiaoyoumao.com/dacuige/20190520/13574379d2daa.JPG"><span>aksesoris</span></a>
            </div>
        </div>
</div>
  <div class="swiper-slide">
    <div class="ioc-boxs">
            <div class="ioc-box">
                    <a href="seek_data.html?type=Dompet" title="Dompet"><img alt="Dompet" src="http://yy.jiaoyoumao.com/dacuige/20190520/160022945167bb.jpg"><span>Dompet</span></a>
            </div><div class="ioc-box">
                    <a href="seek_data.html?type=Sepatu wanita" title="Sepatu wanita"><img alt="Sepatu wanita" src="http://yy.jiaoyoumao.com/dacuige/20190522/102620152fd102.jpg"><span>Sepatu wanita</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Bepergian" title="Bepergian"><img alt="Bepergian" src="http://yy.jiaoyoumao.com/dacuige/20190516/210727814d26fe.png"><span>Bepergian</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Kebutuhan sehari-hari" title="Kebutuhan sehari-hari"><img alt="Kebutuhan sehari-hari" src="http://yy.jiaoyoumao.com/dacuige/20190520/1631361630e8d5.jpg"><span>Kebutuhan sehari-hari</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Kosmetik" title="Kosmetik"><img alt="Kosmetik" src="http://yy.jiaoyoumao.com/dacuige/20190530/190520171efa1d.jpg"><span>Kosmetik</span></a>
            </div>
    <div class="ioc-box">
                    <a href="seek_data.html?type=Rok dan celana" title="Rok dan celana"><img alt="Rok dan celana" src="http://yy.jiaoyoumao.com/dacuige/20190612/152702149228aa.png"><span>Rok dan celana</span></a>
            </div><div class="ioc-box">
                    <a href="type.html"><img alt="" src="images/type_ioc_big.png"><span>Kategori</span></a>
            </div>
        </div></div>
    </div><div class="swiper-scrollbar"></div></div>
    <div class="clr"></div>
    <div class="love_add">
        <div class="type_main"><span class="type_name">Produk terpopuler</span>
            <div class="type_body">
               
                <div onclick="toData(this)" data-id="1006072" class="data_list_small list_left">
                    <div class="img_body"><img src="front/images/products//153757720dc085.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[34]Earphone Bluetooth diluar kuping</span> <span class="price"><span class="data_price">RP<font>299.000</font></span><span class="data_price_old">RP<font>599.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006089" class="data_list_small">
                    <div class="img_body"><img src="front/images/products//16315597594262.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[51]bingkai ponsel berlian</span> <span class="price"><span class="data_price">RP<font>298.000</font></span><span class="data_price_old">RP<font>429.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <!--
                <div onclick="toData(this)" data-id="1006075" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//11404957325867.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[37]efek surround tiga dimensi</span> <span class="price"><span class="data_price">RP<font>299.000</font></span><span class="data_price_old">RP<font>699.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006170" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//22304394618cd.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[131]Kabel Data Portable (Multifungsi)</span> <span class="price"><span class="data_price">RP<font>295.000</font></span><span class="data_price_old">RP<font>499.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006191" class="data_list_small2">
                    <div class="img_body"><img src="front/images/products//141229810c60dc.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[152]Kabel&nbsp;Data&nbsp;Magnetik</span> <span class="price"><span class="data_price">RP<font>288.000</font></span><span class="data_price_old">RP<font>485.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006057" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//12252797359d24.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[19]kasing hp kaca</span> <span class="price"><span class="data_price">RP<font>299.000</font></span><span class="data_price_old">RP<font>499.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006043" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//202855792d2131.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[9]kasing hp model tas</span> <span class="price"><span class="data_price">RP<font>299.000</font></span><span class="data_price_old">RP<font>599.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006064" class="data_list_small2">
                    <div class="img_body"><img src="front/images/products//195250533f296e.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[26]penempel multifungsi</span> <span class="price"><span class="data_price">RP<font>199.000</font></span><span class="data_price_old">RP<font>399.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006033" class="data_list_small list_left">
                    <div class="img_body"><img src="front/images/products//10012339953146.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[2]Casing ponsel fashion</span> <span class="price"><span class="data_price">RP<font>285.000</font></span><span class="data_price_old">RP<font>450.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006058" class="data_list_small">
                    <div class="img_body"><img src="front/images/products//1425234613c449.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[20]kabel 3 in 1 ( Iphone+ Android+  type-c )</span> <span class="price"><span class="data_price">RP<font>280.000</font></span><span class="data_price_old">RP<font>399.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="178102" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//15501938924158.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[242]Kabel data dengan 3 fungsi</span> <span class="price"><span class="data_price">RP<font>299.000</font></span><span class="data_price_old">RP<font>499.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="4062701" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//1758182647b1e8.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[358]Kasus telpon berkilat</span> <span class="price"><span class="data_price">RP<font>269.000</font></span><span class="data_price_old">RP<font>399.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="7423341" class="data_list_small2">
                    <div class="img_body"><img src="front/images/products//1053449993002a.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[169]Case Handphone Bercermin</span> <span class="price"><span class="data_price">RP<font>279.000</font></span><span class="data_price_old">RP<font>599.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="9974929" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//1221363533b642.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[371] Case handphone Kelinci 3D SPARKLING! </span> <span class="price"><span class="data_price">RP<font>265.000</font></span><span class="data_price_old">RP<font>489.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006174" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//0104241355b43b.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[135]Kabel Data berwujud Gantungan Kunci</span> <span class="price"><span class="data_price">RP<font>299.000</font></span><span class="data_price_old">RP<font>428.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="3901635" class="data_list_small2">
                    <div class="img_body"><img src="front/images/products//155051967b5669.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[190]Pembias layar handphone</span> <span class="price"><span class="data_price">RP<font>308.000</font></span><span class="data_price_old">RP<font>489.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006050" class="data_list_small list_left">
                    <div class="img_body"><img src="front/images/products//11005856140d96.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[12]Stand Hp model mobil sport</span> <span class="price"><span class="data_price">RP<font>299.000</font></span><span class="data_price_old">RP<font>399.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006114" class="data_list_small">
                    <div class="img_body"><img src="front/images/products//161424209500c0.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[76]case kulit  hp super tipis cowok</span> <span class="price"><span class="data_price">RP<font>278.000</font></span><span class="data_price_old">RP<font>788.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006171" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//002308108b0749.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[132]Kacamata Gradient</span> <span class="price"><span class="data_price">RP<font>249.000</font></span><span class="data_price_old">RP<font>499.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                <div onclick="toData(this)" data-id="1006084" class="data_list_small2 list_left2">
                    <div class="img_body"><img src="front/images/products//1148022237f0c6.jfif"><span></span></div>
                    <div class="data_desc"><span class="data_name">[46]Tas kunci mobil multifungsi【Kulit Asli】</span> <span class="price"><span class="data_price">RP<font>278.000</font></span><span class="data_price_old">RP<font>450.000</font></span></span>
                        <div class="data_buy">Beli Sekarang</div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
    <div class="love" v-if="false">
        <h2>Các mặt hàng nóng nổi bật</h2>
        <ul><li v-for="item in goods.list"><a href="javascript:void(0)" onclick="toData(this)" :data-id="item.showId"><img :src="item.primaryPicUrl"><dl><dt style="font-weight: bold;"><font v-text="item.name"></font></dt><dd style="font-weight: bold;"> RP<font v-text="item.retailPrice"></font>(VNĐ) <span>RP<font v-text="item.marketPrice"></font></span></dd></dl></a></li></ul>
    </div>
    <p style="margin: 10px 0px; border:2px solid #f7f7f7;"></p>
    <div class="seo-show" v-show="false"><a href="sitemap.html"></a></div>
    <div style="border:2px solid #EF002E;">
        <p style="background: #EF002E; color: #FFF; text-align: center; line-height: 40px; height: 40px; font-size: 16px;">Untuk produk lain, silahkan scroll ke atas</p>
        <p style="font-size: 17px;font-weight: 400; padding:15px; color: #F1244C; line-height: 25px;background-color: #fff;">
            Kami menangani semua pesanan dan kapal dalam  48 jam dari hari kerja.<br>
            Metode pengiriman: semua pesanan, cash on delivery.<br>
            Layanan Pelanggan: diskon80@gmail.com<br>
            Situs web: http://www.diskon8.com<br>
            Permintaan pemesanan: http://www.diskon8.com/dec/search.html<br>
            keywords：<a href=" http://diskon8.com/sitemap.html " title="diskon"target="_blank"><strong>diskon</strong></a> <a href=" http://diskon8.com/sitemap.xml " title="diskon"target="_blank"><strong>diskon</strong></a>
        </p>
    </div>
</div>
<p id="back_top" style="width:40px;position:fixed;top:81%;right:5%;"><a href="#top"><img src="front/picture/top_1.png"></a></p>
</div>
@endsection