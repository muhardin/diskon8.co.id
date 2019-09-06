@extends('layouts.default')

@section('content')
    <div class="blog-area mg-tb-15">
    <div class="container-fluid">
        <div class="col-md-12">
          <form action="{{ URL::to('/catalog')}}" method="GET" style="float: right; margin-right: 30px;" class="form-inline">
              <div class="form-group">
                  <input type="text" class="form-control" name="cari" placeholder="Cari " value="{{ old('cari') }}">

              </div>
              <input type="submit" value="search" class="btn btn-default">
          </form>
        </div>
        @foreach($products as $key => $product)
            @if (($key + 1) % 4 === 0)
                <div class="row">
            @endif
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hpanel blog-box mg-t-30">
                    <div class="panel-body blog-pra">
                        <div class="blog-img">
                            <img src="{{ asset('images/products/'. $product->main_image) }}" width="400" height="400" alt="" />
                            <a href="{{ route('product.show', $product->id) }}">
                                <h4>{{ $product->name }}</h4>
                            </a>
                        </div>
                        <p>
                            <span><i class="fa fa-tag"></i></span> Ready Stock &nbsp; &nbsp; &nbsp;
                            <span><i class="fa fa-th-list"></i></span> {{ $product->category_name }}
                        </p>
                        <p>
                            <span><i class="fa fa-balance-scale"></i></span> {{ $product->weight }} gram&nbsp; &nbsp; &nbsp;
                            <span><i class="fa fa-inbox"></i></span> 50
                        </p>
                        <br>
                        <p>
                            Harga Modal <br>
                            <ul>
                                @if ($priceLists[$key])
                                    @foreach($priceLists[$key] as $keyList => $value)
                                        <li>
                                            {{ $value['package_title'] }} : Rp. {{ number_format($value['agent_price'],0,',','.') }}
                                        </li>
                                    @endforeach
                                @endif
                                {{--<li>--}}
                                    {{--ONYX : Rp. {{ number_format($product->selling_price,0,',','.') }}--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--GOLD : Rp. {{ number_format($product->selling_price,0,',','.') }}--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--SILVER : Rp. {{ number_format($product->selling_price,0,',','.') }}--}}
                                {{--</li>--}}
                            </ul>
                        </p>
                    </div>
                    <div class="panel-footer">
                        @if(Auth::user()->user_type == 'reseller')
                            @if ($product->shop_products_id == null)
                                <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert{{ $key }}"><button class="btn btn-primary" style="width: 100%;">Tambahkan Produk</button></a>
                            @else
                                <button class="btn btn-primary">Produk Telah Ditambahkan</button>
                            @endif
                        @endif
                        <a class="Primary mg-b-10" href="{{route('product.show', $product->id)}}"><button class="btn btn-info" style="width:100%; margin-top:1%;">Detail Produk</button></a>
                    </div>

                    <div id="PrimaryModalalert{{ $key }}" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <form method="POST" action="{{ route('catalog.store') }}">
                                <div class="modal-body">
                                    {{--<i class="fa fa-check modal-check-pro"></i>--}}
                                    @csrf
                                    <input type="hidden" name="profit_limit" class="profit_limit" id="profit_limit{{ $key }}" value="{{ $product->profit_limit }}">
                                    <input type="hidden" name="product_id" id="" value="{{ $product->id }}">

                                    <div class="form-group data-custon-pick" id="data_1">
                                        <label>Harga Jual (Profit Harus Lebih besar dari {{ number_format($product->profit_limit,0,',','.') }})</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="profit" data="{{ $key }}" id="profit{{ $key }}" class="form-control profit" value="{{ old('profit') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    {{--<a data-dismiss="modal" href="#">Cancel</a>--}}
                                    <button class="btn btn-primary" type="submit" disabled id="btnSubmit{{ $key }}">Process</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (($key + 1) % 4 === 0)
                </div>
            @endif

        @endforeach
    </div>

    <nav aria-label="Page navigation example">
  <ul class="pagination">
    {{$products->links()}}
  </ul>
</nav>

</div>
@endsection

@section('script-extra')
    <script>
        $(document).ready(function () {

            $(document).on("change", ".profit", function () {
                var profit = $(this).val() ,
                    _this = $(this).attr("data") ,
                    profit_limit = $("#profit_limit" + _this).val()

                if (profit < profit_limit) {
                    alert("Profit tidak boleh dibawah dari " + profit_limit)
                    $("#btnSubmit" + _this).prop("disabled", true)
                } else {
                    $("#btnSubmit" + _this).prop("disabled", false)
                }
            })
        })
    </script>
@endsection
