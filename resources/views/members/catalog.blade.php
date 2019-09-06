@extends('layouts.member_layout')
@section('content')
<div class="content-i">
<div class="content-box">
    <div class="element-wrapper">
        <div class="element-header">
            <h3>Katalog Produk</h3>
        </div>
        <div class="row">
            @foreach ($collection as $item)
            <div class="col-6 col-md-3">
            <div class="card mb-5">
                <img class="card-img-top" src="{{asset('images/products/'.$item->main_image)}}" width="480px" height="250" alt="Card image cap" style="max-width: 100%; margin: 0 auto" data-pagespeed-url-hash="3284058906" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                <div class="card-body element-box" style="border-radius: 0; box-shadow: none; margin: 0;">
                    <div style=" white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                        <h6 class="card-title text-primary">{{$item->name}}</h6>
                    </div>
                    <div class="description" style="font-size: 12px">
                        <div class="row mb-1">
                            <div class="col-6">
                                <i class="fa fa-tag"></i> Ready Stock
                            </div>
                            <div class="col-6">
                                <i class="fa fa-th-list"></i> Ransel
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <i class="fa fa-circle-o"></i> 0
                            </div>
                            <div class="col-6">

                                <i class="fa fa-inbox"></i> 640
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <i class="fa fa-balance-scale"></i> {{@$item->weight}} gr
                            </div>
                            <div class="col-6">
                                <i class="fa fa-map-marker"></i> Gedebage
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <i class="fa fa-list-alt"></i> BAGGU
                            </div>
                            <div class="col-6">
                                @php
                                    $packproduct = DB::table('product_prices')->where('product_id',$item->id)->where('reseller_package_id',Auth::user()->reseller_type)->first();
                                @endphp
                                <i class="fa">Rp</i> {{number_format(@$packproduct->agent_price)}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer clearfix" style="border-top: 1px solid #efefef; background: #fff; padding: 1rem; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; ">
                    @php
                        $chkdt = \DB::table('shop_products')->where('product_id',$item->id)->where('user_id',Auth::user()->id)->first();
                    @endphp
                    @if(!$chkdt)
                    <div class="text-danger d-inline-block" style="font-size: 11px">Belum Ditambahkan</div>
                    @else
                <div class="text-success d-inline-block" style="font-size: 11px">Telah Ditambahkan</div>
                    @endif
                    <div class="pull-right">
                        <a href="{{url('/member/detailproduct/'.$item->id)}}" class="btn btn-primary ">Detail</a>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
            
            
        </div>
    </div>

</div>
</div>
@endsection