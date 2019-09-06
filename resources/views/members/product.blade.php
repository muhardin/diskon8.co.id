@extends('layouts.member_layout')
@section('content')
<div class="content-i">
<div class="content-box">
<div class="row">
<div class="col-sm-12">
<div class="element-wrapper">
<div class="element-header">
<h3> Produk </h3>
</div>
<div class="os-tabs-w">
<div class="os-tabs-controls">
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a aria-expanded="false" class="nav-link font-weight-bold {{@$activeall}}" href="{{url('member/product')}}">All</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link font-weight-bold {{@$active}}" href="{{url('member/product?active=1')}}">Aktif</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link font-weight-bold {{@$activenon}}" href="{{url('member/product?active=0')}}">Non-Aktif</a>
        </li>
    </ul>
</div>
</div>
<div class="element-box-tp">
<!--------------------
START - Controls Above Table
-------------------->

<!--------------------
END - Controls Above Table
------------------          -->
<div class="table-responsive">
    <table class="table table-bordered table-lg table-v2 table-striped">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Brand
                </th>
                <th>
                    Status
                </th>
                <th>
                    Penjualan
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
                @foreach ($collection as $item) <tr>
                    <td>
                        <div class="cell-image-list mr-2" style="vertical-align: top;">
                            <div class="cell-img" style="background-image:url({{asset('images/products/'.$item->main_image)}})"></div>
                        </div>
                        <div class="d-inline-block">
                            <h6 class="mb-0"><a href="{{url('member/productdetail/'.$item->id)}}">{{@$item->name}}</a></h6>
                            <span>Ready Stock</span> -
                            <span>Jam Tangan</span>
                        </div>
                    </td>
                    <td class="text-center">
                            {{@$item->brand}}
                    </td>
                    <td class="text-center">
                        @if(@$item->shop_products_status==0)
                        Non Aktif
                        @else
                        Aktif
                        @endif
                    </td>
                    <td class="text-center">
                       {{@\DB::table('order_details')->leftjoin('orders','orders.id','=','order_details.order_id')->where('orders.user_id',\Auth::user()->id)->where('order_details.product_id',$item->id)->sum('order_details.quantity')}}
                    </td>
                    <td class="row-actions">
                        <a href='{{url('member/productdetail/'.$item->id)}}' class="text-light btn btn-sm btn-primary m-0" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-file"></i></a>
                        <a href='https://ultimate246.com/admin/product/1727/order' class="text-secondary btn btn-sm btn-warning m-0" data-toggle="tooltip" data-placement="top" title="Kostumer"><i class="fa fa-shopping-cart"></i></a>
                        <a href='{{url('member/productdetail/'.$item->id.'/productasset')}}' class="text-light btn btn-sm btn-success m-0" data-toggle="tooltip" data-placement="top" title="Asset"><i class="fa fa-image"></i></a>
                        <a href='https://ultimate246.com/admin/product/1727/stock' class="text-light btn btn-sm btn-info m-0" data-toggle="tooltip" data-placement="top" title="Stock"><i class="fa fa-archive"></i></a>
                        <a href='https://ultimate246.com/product/hamani-127' target="_blank" class="text-light btn btn-sm btn-danger m-0" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-link"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
<div class="row mt-3">
    <div class="col-sm-5"></div>
    <div class="col-md-7 text-right">
        <div class="pagination-info mr-2">
            Tampilan hasil <span class="pagination-info-from">1</span> - <span class="pagination-info-to">10</span>
            dari <span class="pagination-info-total">30</span>
        </div>
                                    <a class="btn btn-sm btn-default btn-pagination prev" href="https://ultimate246.com/admin/product?page=0" data-number="0" style="display:none"><i class="fa fa-chevron-left"></i></a>
        <a class="btn btn-sm btn-default btn-pagination next" href="https://ultimate246.com/admin/product?page=2" data-number="2" style=""><i class="fa fa-chevron-right"></i></a>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
@endsection