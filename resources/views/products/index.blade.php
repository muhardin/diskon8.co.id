@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <div class="element-header">
                            <h4>Products</h4>
                            <div class="add-product">
                                <a href="{{ route('product.create') }}">Add Product</a>
                            </div>
                        </div>
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description">All</a></li>
                            <li><a href="#activeProduct">Active</a></li>
                            <li><a href="#inactiveProduct">Not Active</a></li>
                            {{--<li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>--}}
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                        <div  class="product-tab-list tab-pane fade active in" id="description">
                          <table id="myTable" class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Brand</th>
                                      <th>Status</th>
                                      <th>Purchases</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($products as $key => $product)
                                      <tr>
                                          <td>
                                              {{--<img src="{!! asset('img/logo/logo.png') !!}" alt="">--}}
                                              {{ $product->name }}</td>
                                          <td>{{ $product->brand }}</td>
                                          <td>
                                              {{-- <button class="pd-setting">{{ $product->status }}</button> --}}
                                              {{ $product->status }}
                                          </td>
                                          <td>0</td>
                                          <td>
                                              <button data-toggle="tooltip" title="Detail" class="pd-setting-ed bg-pink"><a href="{{ route('product.edit', $product->id) }}"><i class="fa fa-file" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Customer" class="pd-setting-ed bg-cream"><a href="{{route('order.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Asset" class="pd-setting-ed bg-green"><a href="{{ route('asset.show', $product->id) }}"><i class="fa fa-image" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Stock" class="pd-setting-ed bg-yellow"><a href="{{route('stock.show', $product->id)}}"><i class="fa fa-archive" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Show" class="pd-setting-ed bg-orange"><a href="{{ route('product.show', $product->id) }}"><i class="fa fa-link" aria-hidden="true"></i></a></button>
                                              @if (Auth::user()->user_type != 'finance')
                                                @if ($product->status == "active")
                                                  <button data-toggle="tooltip" title="Disable Product" class="btn btn-custon-rounded-three btn-danger"><a href="{{url('disable-product/'.$product->id)}}"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i></a></button>
                                                @else
                                                  <button data-toggle="tooltip" title="Enable Product" class="btn btn-custon-rounded-three btn-success"><a href="{{url('enable-product/'.$product->id)}}"><i class="fa fa-check adminpro-checked-pro" aria-hidden="true"></i></a></button>
                                                @endif
                                              @endif
                                                <a type="button" class="btn btn-custon-rounded-three btn-warning" onclick="return confirm('Are you sure to delete?')" href="{{url('product/destroy',$product->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="activeProduct">
                            <table id="myTable2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Status</th>
                                        <th>Purchases</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $key => $product)
                                        @if ($product->status == "active")
                                        <tr>
                                            <td>
                                                {{--<img src="{!! asset('img/logo/logo.png') !!}" alt="">--}}
                                                {{ $product->name }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>
                                                {{-- <button class="pd-setting">{{ $product->status }}</button> --}}
                                                {{ $product->status }}
                                            </td>
                                            <td>0</td>
                                            <td>
                                                <button data-toggle="tooltip" title="Detail" class="pd-setting-ed bg-pink"><a href="{{ route('product.edit', $product->id) }}"><i class="fa fa-file" aria-hidden="true"></i></a></button>
                                                {{-- <button data-toggle="tooltip" title="Seller" class="pd-setting-ed bg-cream"><a href="{{route('order.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></button> --}}
                                                <button data-toggle="tooltip" title="Customer" class="pd-setting-ed bg-red"><a href="{{route('order.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></button>
                                                <button data-toggle="tooltip" title="Asset" class="pd-setting-ed bg-green"><a href="{{ route('asset.show', $product->id) }}"><i class="fa fa-image" aria-hidden="true"></i></a></button>
                                                <button data-toggle="tooltip" title="Stock" class="pd-setting-ed bg-yellow"><a href="{{route('stock.index')}}"><i class="fa fa-archive" aria-hidden="true"></i></a></button>
                                                <button data-toggle="tooltip" title="Show" class="pd-setting-ed bg-orange"><a href="{{ route('product.show', $product->id) }}"><i class="fa fa-link" aria-hidden="true"></i></a></button>
                                                @if (Auth::user()->user_type != 'finance')
                                                  @if ($product->status == "active")
                                                    <button data-toggle="tooltip" title="Disable Product" class="btn btn-custon-rounded-three btn-danger"><a href="{{url('disable-product/'.$product->id)}}"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i></a></button>
                                                  @else
                                                    <button data-toggle="tooltip" title="Enable Product" class="btn btn-custon-rounded-three btn-success"><a href="{{url('enable-product/'.$product->id)}}"><i class="fa fa-check adminpro-checked-pro" aria-hidden="true"></i></a></button>
                                                  @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="inactiveProduct">
                            <table id="myTable3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Status</th>
                                        <th>Purchases</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $key => $product)
                                        @if ($product->status == "inactive")
                                        <tr>
                                            <td>
                                                {{--<img src="{!! asset('img/logo/logo.png') !!}" alt="">--}}
                                                {{ $product->name }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>
                                                {{-- <button class="pd-setting">{{ $product->status }}</button> --}}
                                                {{ $product->status }}
                                            </td>
                                            <td>0</td>
                                            <td>
                                                <button data-toggle="tooltip" title="Detail" class="pd-setting-ed bg-pink"><a href="{{ route('product.edit', $product->id) }}"><i class="fa fa-file" aria-hidden="true"></i></a></button>
                                                {{-- <button data-toggle="tooltip" title="Seller" class="pd-setting-ed bg-cream"><a href="{{route('order.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></button> --}}
                                                <button data-toggle="tooltip" title="Customer" class="pd-setting-ed bg-red"><a href="{{route('order.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></button>
                                                <button data-toggle="tooltip" title="Asset" class="pd-setting-ed bg-green"><a href="{{ route('asset.show', $product->id) }}"><i class="fa fa-image" aria-hidden="true"></i></a></button>
                                                <button data-toggle="tooltip" title="Stock" class="pd-setting-ed bg-yellow"><a href="{{route('stock.index')}}"><i class="fa fa-archive" aria-hidden="true"></i></a></button>
                                                <button data-toggle="tooltip" title="Show" class="pd-setting-ed bg-orange"><a href="{{ route('product.show', $product->id) }}"><i class="fa fa-link" aria-hidden="true"></i></a></button>
                                                @if (Auth::user()->user_type != 'finance')
                                                  @if ($product->status == "active")
                                                    <button data-toggle="tooltip" title="Disable Product" class="btn btn-custon-rounded-three btn-danger"><a href="{{url('disable-product/'.$product->id)}}"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i></a></button>
                                                  @else
                                                    <button data-toggle="tooltip" title="Enable Product" class="btn btn-custon-rounded-three btn-success"><a href="{{url('enable-product/'.$product->id)}}"><i class="fa fa-check adminpro-checked-pro" aria-hidden="true"></i></a></button>
                                                  @endif
                                                @endif
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
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
        $(document).ready( function () {
            $('#myTable,#myTable2,#myTable3').DataTable()
        } )
    </script>
@endsection
