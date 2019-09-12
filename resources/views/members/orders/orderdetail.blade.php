@extends('layouts.member_layout')
@section('content')
<style>
.tabcontent {
  display: none;
}
</style>
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="row">
                <div class="col-sm-4">
                    <div class="element-box">
                        <div class="element-header">
                        <h6>Track Order </h6>
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
                            <h6>{{@$orderdetail->invoice_number}}</h6>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Nama</strong>
                            </div>
                            <div class="col-9"> : {{@$orderdetail->contact_person}}</div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Email</strong>
                            </div>
                            <div class="col-9"> : {{@$orderdetail->order_email}}</div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Phone</strong>
                            </div>
                            <div class="col-9">: {{@$orderdetail->address_phone}}</div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Tujuan</strong>
                            </div>
                            <div class="col">
                              :  {{@$orderdetail->address_tujuan}}
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Jumlah Profit (Rp.)</strong>
                            </div>
                            <div class="col">
                               : {{"Rp. ".number_format(@$profit,0)}}
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-3">
                                <strong>Status Order </strong>
                            </div>
                            <div class="col">
                                : <b>{{@$orderdetail->order_status}}</b>
                            </div>
                        </div>
                    </div>
                    <div class="element-box">

                        <div class="os-tabs-w mb-3 p-0">
                            <div class="os-tabs-controls mb-0">
                                <ul class="nav nav-tabs upper">
                                    <li class="nav-item">
                                        <a onclick="openCity(event, 'v-pills-home')" aria-expanded="false"class="nav-link tablinks" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" id="defaultOpen"> Keranjang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a onclick="openCity(event, 'v-pills-profile')" aria-expanded="false" class="nav-link tablinks" data-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="true"> Histori</a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        
                            <div class="tab-pane fade show tabcontent" id="v-pills-home" style="display:block"e="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="item-info-menu">
                                    <div class="row border-bottom mb-3 pb-2">
                                        <div class="col-md-6">
                                            Item
                                        </div>
                                        <div class="col-md-3">
                                            QTY | Price
                                        </div>
                                        <div class="col-md-3">
                                            <span class="price">Price</span>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($dataitem as $itemcart)
                                <div class="row border-bottom pb-2">
                                    <div class="col-md-6 m-auto">
                                        <div class="product">
                                            <a href="#">
                                                <span class="product-image">
                                                    <img src="{{asset('images/products/'.$itemcart->main_image)}}"
                                                        class="img-fluid" style="height: 64px;width: 77px">
                                                </span>
                                                <span class="product-title" style="font-size: 14px;">{{$itemcart->name}}</span>
                                                <!-- <span class="color">Abu Muda - ALL</span> -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 m-auto">
                                        <span class="price"> {{$itemcart->quantity." @ ".number_format($itemcart->price*$itemcart->quantity,0)}} </span>
                                    </div>
                                    <div class="col-md-3 m-auto">
                                        <span class="price">{{"Rp. ".number_format($itemcart->price*$itemcart->quantity,0)}}</span>
                                    </div>
                                </div>
                                @endforeach
                                
                                <div class="row mt-4">
                                    <div class="col-4 col-lg-6">
                                        Total Order
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span id="totalQty"></span>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span class="price">{{"Rp. ".number_format($orderdetail->amount)}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-lg-9">
                                        Ongkos Kirim
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span class="price">{{"Rp. ".number_format(@$orderdetail->shipping_price,0)}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-lg-9">
                                        Kode Unik
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span class="price">Rp -138</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-lg-9">
                                        Total Pembayaran
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <span class="price">{{"Rp. ".number_format($dataitem->sum('amount')+$orderdetail->shipping_price,0)}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade tabcontent" id="v-pills-profile" role="tabpanel"
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
                                                    <h4 class="card-title text-muted">Order Masuk</h4>
                                                    @if(@$orderdetail->order_status=='processing' or @$orderdetail->order_status=='packing' or @$orderdetail->order_status=='delivering' or @$orderdetail->order_status=='success')
                                                    <div class="float-right text-muted small moment">2018-10-05</div>
                                                    <p class="card-text text-success">Telah Diproses </p>
                                                    @else
                                                    <p class="card-text text-success">Belum Diproses </p>
                                                    @endif
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
                                                    @if(@$orderdetail->order_status=='processing' or @$orderdetail->order_status=='packing' or @$orderdetail->order_status=='delivering' or @$orderdetail->order_status=='success')
                                                    <div class="float-right text-muted small moment">2018-10-05</div>
                                                    <p class="card-text text-success">Telah Diproses</p>
                                                    @else
                                                    <p class="card-text text-muted">Belum Diproses</p>
                                                    @endif
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
@endsection

@section('script-extra')
<script>
    $('textarea').ckeditor();


    if (Modernizr.promises && Modernizr.localstorage) {} else {
        $('body').append($('<div>').addClass('alert alert-warning fixed-top text-center rounded-0').html(
            'Update browser Anda untuk mendapatkan performa terbaik, ').append($('<a>').addClass('text-info')
            .attr('target', '_blank').attr('href', 'https://www.google.com/chrome/').text('Download Chrome')));
    }

</script>
<form action="" style="display:none" method="get" id="success">
    @csrf
    <input type="text" name="pixel" id="pixelData" value="">
</form>

<script>
    document.getElementById("defaultOpen").click();
    $(document).ready(function () {
        $('#formTracker').validate({
            submitHandler: function (e) {
                // console.log($('.priceformat').unpriceFormat());
                var data = $('#formTracker').serializeObject();
                // $('.overlay').fadeIn();
                instance.post('../api/order/track', data).then(function (response) {
                    $('.overlay').fadeOut();
                    if (response.data.meta.code == 200) {
                        $('#success').attr('action', '/admin/order/track/' + data.code);
                        $('#success').trigger('submit');
                    } else if (response.data.meta.code == 409) {
                        swal(
                            'Maaf',
                            'Data Invoice Tidak Ditemukan.',
                            'warning'
                        )
                    }
                });
            }
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
@endsection
