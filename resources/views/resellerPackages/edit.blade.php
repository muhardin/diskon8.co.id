@extends('layouts.default')

@section('content')
    <div class="single-product-tab-area mg-tb-15">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Package</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">

                                    <form method="POST" action="{{ route('resellerPackage.update', $data->id) }}">
                                        @csrf
                                        <input type="hidden" value="PUT" name="_method">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Nama Paket</label>
                                                        <input type="text" name="title" class="form-control" placeholder="Nama Paket" value="{{ $data->title }}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Harga</label>
                                                        <input type="text" name="price" class="form-control" placeholder="Harga" value="{{ $data->price }}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Keterangan</label>
                                                        <textarea name="description_price" class="form-control" placeholder="Keterangan Harga">{{ $data->description_price }}</textarea>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Benefit</label>
                                                        <textarea name="benefit" class="form-control" placeholder="Benefit">{{ $data->benefit }}</textarea>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Max Product List</label>
                                                        <input type="number" name="maximum_product_sale" class="form-control" placeholder="Max Product List" value="{{ $data->maximum_product_sale }}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Batas Harga Minimum</label>
                                                        <input type="number" name="minimum_price_sale" class="form-control" placeholder="Batas Harga Minimum" value="{{ $data->minimum_price_sale }}">
                                                    </div>

                                                    {{--<div class="input-group mg-b-pro-edt">--}}
                                                    {{--<label>Keterangan Lain</label>--}}
                                                    {{--<textarea name="other_rule" class="form-control" placeholder="Keterangan Lain"></textarea>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        @if (Auth::user()->user_type != 'finance')
                                          <div class="row">
                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                  <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                      <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                      </button>
                                                      <a href="{{ route('resellerPackage.index') }}"><button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                          </button></a>
                                                  </div>
                                              </div>
                                          </div>
                                        @endif
                                    </form>
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
