@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="element-actions">
                <a class="btn btn-dark rounded font-weight-bold" href="{{url('/member/catalog')}}"><i class="fa fa-caret-left"></i>  Kembali</a>
            </div>
            <div class="element-header">
                <h4>{{$collection->name}}</h4>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <!--Nama Product dan Info -->
                    <div class="element-box">
                        <div class="row">
                            <div class="col-md-7">
                                <div id="slider">
                                    <div id="myCarousel" class="carousel slide" data-interval="false">
                                        <!-- main slider carousel items -->
                                        <div class="carousel-inner">

                                            <div class="active  text-center item carousel-item">
                                                <img src="{{asset('images/products/'.$collection->main_image)}}" width="540" height="540" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a13a7b00_780.jpg" data-pagespeed-url-hash="1459413726" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                           
                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a158b2a2_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a158b2a2_780.jpg" data-pagespeed-url-hash="1191843609" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>

                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a16ad469_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a16ad469_780.jpg" data-pagespeed-url-hash="3677673235" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>

                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a171ed0e_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a171ed0e_780.jpg" data-pagespeed-url-hash="253657275" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>

                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a182497a_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a182497a_780.jpg" data-pagespeed-url-hash="544146498" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>

                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1820ccd_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1820ccd_780.jpg" data-pagespeed-url-hash="944032247" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>

                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a18d6b59_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a18d6b59_780.jpg" data-pagespeed-url-hash="3821837421" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>

                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a187d78b_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a187d78b_780.jpg" data-pagespeed-url-hash="1216363705" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>

                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1b7834b_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1b7834b_780.jpg" data-pagespeed-url-hash="1654944003" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>

                                            <div class="  text-center item carousel-item">
                                                <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1966642_540.jpg" class="img-fluid magnify" data-large-img-url="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1966642_780.jpg" data-pagespeed-url-hash="714156956" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                                <span class="fa fa-chevron-left text-dark fa-2x" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                                <span class="fa fa-chevron-right text-dark fa-2x" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>

                                        </div>
                                        <!-- main slider carousel nav controls -->

                                        <ul class="carousel-indicators list-inline border px-5 py-2 mt-3 bg-light" style="width:345px; max-width: 450px;">
                                            <li class="list-inline-item active ml-5">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a13a7b00_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="3835707922" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-1" class="selected" data-slide-to="1" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a158b2a2_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="3568137805" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-2" class="selected" data-slide-to="2" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a16ad469_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="1759000135" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-3" class="selected" data-slide-to="3" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a171ed0e_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="2629951471" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-4" class="selected" data-slide-to="4" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a182497a_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="2920440694" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-5" class="selected" data-slide-to="5" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1820ccd_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="3320326443" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-6" class="selected" data-slide-to="6" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a18d6b59_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="1903164321" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-7" class="selected" data-slide-to="7" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a187d78b_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="3592657901" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-8" class="selected" data-slide-to="8" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1b7834b_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="4031238199" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a id="carousel-selector-9" class="selected" data-slide-to="9" data-target="#myCarousel">
                                                    <img src="https://asset-satujuan-live.sgp1.cdn.digitaloceanspaces.com/file/2018/12/5c0f8a1966642_360.jpg" style="height:50px;width:50px" data-pagespeed-url-hash="3090451152" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </a>
                                            </li>

                                        </ul>

                                        <div class="next rounded cursor-pointer">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="before rounded cursor-pointer">
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="element-header">
                                    <strong>Detail</strong>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-5 font-weight-bold"><i class="fa fa-th-list mr-1"></i> Kategori</div>
                                    <div class="col-7 text-primary">Ransel</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-5 font-weight-bold"><i class="fa fa-circle-o mr-1"></i> Poin</div>
                                    <div class="col-7 text-primary">0</div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-5 font-weight-bold"><i class="fa mr-1">Rp</i>Base Cost</div>
                                    <div class="col-7 text-primary">Rp150.000</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-5 font-weight-bold"><i class="fa fa-tag mr-1"></i>Type</div>
                                    <div class="col-7 text-primary">Ready Stock</div>
                                </div>

                            </div>
                        </div>
                        <div class="os-tabs-controls">
                            <ul class="nav nav-tabs" id="tab">
                                <li class="nav-item">
                                    <a aria-expanded="false" class="nav-link active" href="#deskripsi" onclick='setActiveTab("deskripsi", event)'>Deskripsi</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-expanded="false" class="nav-link" href="#stock" onclick='setActiveTab("stock", event)'>Stock</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-expanded="false" class="nav-link" href="#insight" onclick='setActiveTab("insight", event)'>Insight</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="deskripsi">
                            <p class="text-justify">
                                <p>TRANSFORMER BAG dengan 2 STYLE berbeda. Di desain khusus buat kamu yang selalu ingin tampil beda setiap harinya</p>
                                <h5>Materials</h5>
                                <p>Cordura Nylon</p>
                                <h5>Fitur</h5>
                                <p>• Terbuat dari material condura nylon, kuat dan tahan lama. • Bagpack dengan bagian dalam yang luas bisa muat untuk banyak barang sehingga pas juga dipakai untuk kerja, travelling atau hiking. • Bagian depan tas dapat dilepas dan dijadikan slingbag yang cocok dipakai saat hangout atau jalan ke mall. • Terdapat slot khusus untuk laptop 14inch dan ipad, buku, tumblr dll agar barang-barang anda tersimpan dengan aman dan tidak berceceran. • Menggunakan webbing FA yang kuat. • Fitur tambahan pada kedua sisi tas untuk menggantung sepatu/jaket. • Tersedia dalam warna navy, hijau army dan hitam</p>
                                <h5>Berat</h5>
                                <p>750 gr</p>
                            </p>
                        </div>
                        <div class="tab-content" id="stock">
                            <table class="table table-bordered table-lg table-v2 table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>Warna</th>
                                        <th>Size</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="1">Hitam</td>
                                        <td>ALL</td>
                                        <td>217</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="1">Navy</td>
                                        <td>ALL</td>
                                        <td>211</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="1">Green Army</td>
                                        <td>ALL</td>
                                        <td>212</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-content" id="insight">
                            <h4 class="text-center">Coming Soon</h4>
                        </div>

                    </div>

                </div>
                <div class="col-md-5">
                    <!--Tentukan dan Estimasi Profit -->
                    <form class="form" action="https://ultimate246.com" id="addProduct">
                        <input type="hidden" value="76" name="product_id">
                        <div class="element-box m-0" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;border-top-right-radius: 4px;border-top-left-radius: 4px;">
                            <div class="row">
                                <div class="col-md-12 my-2">
                                    <h6 class="font-weight-bold">Tentukan</h6>
                                </div>
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Nama Produk</p>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control m-0" id='product_name' readonly placeholder="Masukkan Nama Produk" value="Office Pack">
                                </div>
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Harga Jual</p>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control m-0 priceformat" id='sell_price' name='price' placeholder="Masukkan Harga Jual" value="255000">
                                </div>
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Profit</p>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control m-0 priceformat" id='profit' placeholder="Masukkan Profit" value="105000" readonly>
                                </div>
                                <div class="col-md-12 my-2">
                                    <h6 class="font-weight-bold">Estimasi Profit</h6>
                                </div>
                                <div class='col-md-12 my-2'>
                                    <table id='profit_list' style="width: 100%">
                                        <tr class='border-bottom'>
                                            <th class="py-2">Item Terjual</th>
                                            <th>Profit</th>
                                        </tr>
                                        <tr class='border-bottom'>
                                            <td class="py-2">1 pcs</td>
                                            <td class='profit' id='profit-1'>Rp105.000</td>
                                        </tr>
                                        <tr class='border-bottom'>
                                            <td class="py-2">10 pcs</td>
                                            <td class='profit' id='profit-10'>Rp1.050.000</td>
                                        </tr>
                                        <tr class='border-bottom'>
                                            <td class="py-2">25 pcs</td>
                                            <td class='profit' id='profit-25'>Rp2.625.000</td>
                                        </tr>
                                        <tr class='border-bottom'>
                                            <td class="py-2">50 pcs</td>
                                            <td class='profit' id='profit-50'>Rp5.250.000</td>
                                        </tr>
                                        <tr class='border-bottom'>
                                            <td class="py-2">150 pcs</td>
                                            <td class='profit' id='profit-150'>Rp15.750.000</td>
                                        </tr>
                                        <tr class='border-bottom'>
                                            <td class="py-2">500 pcs</td>
                                            <td class='profit' id='profit-500'>Rp52.500.000</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-5 mb-4 py-3" style="border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;border-top-right-radius: 0;border-top-left-radius: 0;"><i class="fa fa-plus"></i> Tambahkan Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

