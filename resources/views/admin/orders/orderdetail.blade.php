@extends('layouts.admin_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="row">
                <div class="col-sm-4">
                    <div class="element-box">
                        <div class="element-header">
                            <h6>Track Order</h6>
                        </div>
                        <form class="form" id="formTracker" novalidate="novalidate">
                            <div class="row">
                                <div class="form-group col-8">
                                    <input type="text" class="form-control" required="" name="code"
                                        placeholder="Kode Invoice">
                                </div>
                                <div class="form-group col-4">
                                    <button type="submit" class="btn btn-primary btn-block py-2"
                                        style="border-radius: 4px;"><i class="fa fa-search"></i> Track</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="element-box">
                        <div class="element-actions">
                            Order Masuk
                        </div>
                        <div class="element-header">
                            <h6>Invoice #I0009-19076QJF01</h6>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Nama</strong>
                            </div>
                            <div class="col-9">erwin suryanto</div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Email</strong>
                            </div>
                            <div class="col-9">bisnis.plazabatam@gmail.com</div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Phone</strong>
                            </div>
                            <div class="col-9">08117770878</div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Tujuan</strong>
                            </div>
                            <div class="col">
                                Batam centre <br>
                                Batam Kota, Kota Batam, Kepulauan Riau
                            </div>
                        </div>
                    </div>
                    <div class="element-box">

                        <div class="os-tabs-w mb-3 p-0">
                            <div class="os-tabs-controls mb-0">
                                <ul class="nav nav-tabs upper">
                                    <li class="nav-item">
                                        <a onclick="openCity(event, 'v-pills-home')" aria-expanded="false" class="nav-link active show" data-toggle="pill"
                                            href="#v-pills-home"
                                            role="tab" aria-controls="v-pills-home" aria-selected="true"> Keranjang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a onclick="openCity(event, 'v-pills-profile')" aria-expanded="false" class="nav-link" data-toggle="pill"
                                            href="#"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                            Histori</a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="item-info-menu">
                                    <div class="row border-bottom mb-3 pb-2">
                                        <div class="col-md-6">
                                            Item
                                        </div>
                                        <div class="col-md-3">
                                            QTY
                                        </div>
                                        <div class="col-md-3">
                                            <span class="price">Price</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-bottom pb-2">
                                    <div class="col-md-6 m-auto">
                                        <div class="product">
                                            <a href="https://incerz.satujuan.id/product/rivera">

                                                <span class="product-image">
                                                    <img src="./Satujuan_files/5c0fada6ce414_360.jpg" class="img-fluid"
                                                        style="height: 64px">
                                                </span>
                                                <span class="product-title" style="font-size: 14px;">Rivera</span>
                                                <span class="color">Baby Blue - ALL</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 m-auto">
                                        <span class="price"> 1 </span>
                                    </div>
                                    <div class="col-md-3 m-auto">
                                        <span class="price">Rp 289.000</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-4 col-lg-6">
                                        Total Order
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span id="totalQty"></span>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span class="price">Rp 289.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-lg-9">
                                        Ongkos Kirim
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span class="price">Rp 35.000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-lg-9">
                                        Kode Unik
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span class="price">Rp -157</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-lg-9">
                                        Total Pembayaran
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span class="price">Rp 323.843</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">

                                <div class="container py-2">
                                    <!-- timeline item 1 -->
                                    <div class="row no-gutters">
                                        <div class="col-sm">
                                            <!--spacer-->
                                        </div>
                                        <!-- timeline item 1 center dot -->
                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                            <h5 class="m-2">
                                                <span class="badge badge-pill bg-light border">&nbsp;</span>
                                            </h5>
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!-- timeline item 1 event content -->
                                        <div class="col-sm py-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-right text-muted small moment">2019-07-19</div>
                                                    <h4 class="card-title text-muted">Order Masuk</h4>
                                                    <p class="card-text text-success">Telah Diproses </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="row no-gutters">
                                        <!-- timeline item 1 event content -->
                                        <div class="col-sm py-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-right text-muted small "></div>
                                                    <h4 class="card-title text-muted">Konfirmasi</h4>
                                                    <p class="card-text text-muted">Belum Diproses</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- timeline item 1 center dot -->
                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                            <h5 class="m-2">
                                                <span class="badge badge-pill bg-light border">&nbsp;</span>
                                            </h5>
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <!--spacer-->
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <!-- timeline item 1 -->
                                    <div class="row no-gutters">
                                        <div class="col-sm">
                                            <!--spacer-->
                                        </div>
                                        <!-- timeline item 1 center dot -->
                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                            <h5 class="m-2">
                                                <span class="badge badge-pill bg-light border">&nbsp;</span>
                                            </h5>
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!-- timeline item 1 event content -->
                                        <div class="col-sm py-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-right text-muted small "></div>
                                                    <h4 class="card-title text-muted">Pembayaran Diterima</h4>
                                                    <p class="card-text text-muted">Belum Diproses </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="row no-gutters">
                                        <!-- timeline item 1 event content -->
                                        <div class="col-sm py-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-right text-muted small "></div>
                                                    <h4 class="card-title text-muted">Produksi</h4>
                                                    <p class="card-text text-muted">Belum Diproses</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- timeline item 1 center dot -->
                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                            <h5 class="m-2">
                                                <span class="badge badge-pill bg-light border">&nbsp;</span>
                                            </h5>
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <!--spacer-->
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <!-- timeline item 1 -->
                                    <div class="row no-gutters">
                                        <div class="col-sm">
                                            <!--spacer-->
                                        </div>
                                        <!-- timeline item 1 center dot -->
                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                            <h5 class="m-2">
                                                <span class="badge badge-pill bg-light border">&nbsp;</span>
                                            </h5>
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!-- timeline item 1 event content -->
                                        <div class="col-sm py-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-right text-muted small "></div>
                                                    <h4 class="card-title text-muted">Packing</h4>
                                                    <p class="card-text text-muted">Belum Diproses </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="row no-gutters">
                                        <!-- timeline item 1 event content -->
                                        <div class="col-sm py-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-right text-muted small "></div>
                                                    <h4 class="card-title text-muted">Pengiriman</h4>
                                                    <p class="card-text text-muted">Belum Diproses</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- timeline item 1 center dot -->
                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                            <h5 class="m-2">
                                                <span class="badge badge-pill bg-light border">&nbsp;</span>
                                            </h5>
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <!--spacer-->
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <!-- timeline item 1 -->
                                    <div class="row no-gutters">
                                        <div class="col-sm">
                                            <!--spacer-->
                                        </div>
                                        <!-- timeline item 1 center dot -->
                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                            <h5 class="m-2">
                                                <span class="badge badge-pill bg-light border">&nbsp;</span>
                                            </h5>
                                            <div class="row h-50">
                                                <div class="col border-right">&nbsp;</div>
                                                <div class="col">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!-- timeline item 1 event content -->
                                        <div class="col-sm py-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-right text-muted small "></div>
                                                    <h4 class="card-title text-muted">Terkirim</h4>
                                                    <p class="card-text text-muted">Belum Diproses </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection

@section('script-extra')
<script>
    $('textarea').ckeditor();

</script>
@endsection
