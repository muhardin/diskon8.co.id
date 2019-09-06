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
                            <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Add New Product</a></li>
                            {{--<li><a href="#reviews"><i class="fa fa-file-image-o" aria-hidden="true"></i> Pictures</a></li>--}}
                            {{--<li><a href="#reviews"><i class="fa fa-book" aria-hidden="true"></i> Stocks</a></li>--}}
                            {{--<li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>--}}
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">

                                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <label>Nama Produk </label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                    <input type="text" name="name" class="form-control" placeholder="">
                                                </div>
                                                <label>Brand Produk </label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                    <input type="text" name="brand" class="form-control" placeholder="">
                                                </div>
                                                <label>SKU Produk </label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                    <input type="text" name="sku" class="form-control" placeholder="">
                                                </div>
                                                <label>Berat Produk (gram)</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                    <input type="number" name="weight" class="form-control" placeholder="">
                                                </div>
                                                {{--<div class="input-group mg-b-pro-edt">--}}
                                                    {{--<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>--}}
                                                    {{--<input type="text" name="agent_price" class="form-control" placeholder="Agent Price">--}}
                                                {{--</div>--}}
                                                {{--<div class="input-group mg-b-pro-edt">--}}
                                                    {{--<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>--}}
                                                    {{--<input type="text" name="selling_price" class="form-control" placeholder="Selling Price">--}}
                                                {{--</div>--}}
                                                <label>Batas Minimum Profit Reseller </label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                    <input type="text" name="profit_limit" class="form-control" placeholder="Batas Minimum Profit Reseller">
                                                </div>
                                                {{--<label> </label>--}}
                                                {{--<div class="input-group mg-b-pro-edt">--}}
                                                    {{--<span class="input-group-addon"><i class="fa fa-percent" aria-hidden="true"></i></span>--}}
                                                    {{--<input type="text" name="discount" class="form-control" placeholder="Discount">--}}
                                                {{--</div>--}}
                                                <label>Total Stock </label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                    <input type="text" name="quantity" class="form-control" placeholder="">
                                                </div>
                                                <label>Harga Reseller </label>
                                                @foreach($resellerPackages as $key => $value)
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>{{ $value->title }}</label>
                                                        <input type="text" name="agent_price[]" class="form-control" placeholder="Harga Reseller">
                                                        <input type="hidden" name="reseller_package_id[]" class="form-control" value="{{ $value->id }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <label>Deskripsi Produk </label>
                                                <div class="input-group mg-b-pro-edt">
                                                    {{-- <textarea name="description" class="form-control" placeholder="Product Description"></textarea> --}}
                                                    <textarea name="description" id="summernote1" rows="8" cols="80" placeholder="Product Description"></textarea>
                                                </div>
                                                <label>Category</label>
                                                <select name="category_id" class="form-control pro-edt-select form-control-primary">
                                                    @foreach($categories as $key => $value)
                                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                                <label>Gambar Utama </label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                    <input type="file" name="images" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (Auth::user()->user_type != 'finance')
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                  </button>
                                                  <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                  </button>
                                              </div>
                                          </div>
                                      </div>
                                    @endif
                                </form>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="pro-edt-img">
                                                        <img src="img/new-product/5-small.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="product-edt-pix-wrap">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">TT</span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-radio">
                                                                            <form>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                    </label>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="product-edt-remove">
                                                                            <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="pro-edt-img">
                                                        <img src="img/new-product/6-small.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="product-edt-pix-wrap">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">TT</span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-radio">
                                                                            <form>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                    </label>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="product-edt-remove">
                                                                            <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="pro-edt-img">
                                                        <img src="img/new-product/7-small.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="product-edt-pix-wrap">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">TT</span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-radio">
                                                                            <form>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio radiofill">
                                                                                    <label>
                                                                                        <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                    </label>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="product-edt-remove">
                                                                            <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="card-block">
                                                <div class="text-muted f-w-400">
                                                    <p>No reviews yet.</p>
                                                </div>
                                                <div class="m-t-10">
                                                    <div class="txt-primary f-18 f-w-600">
                                                        <p>Your Rating</p>
                                                    </div>
                                                    <div class="stars stars-example-css detail-stars">
                                                        <div class="review-rating">
                                                            <fieldset class="rating">
                                                                <input type="radio" id="star5" name="rating" value="5">
                                                                <label class="full" for="star5"></label>
                                                                <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                                <label class="half" for="star4half"></label>
                                                                <input type="radio" id="star4" name="rating" value="4">
                                                                <label class="full" for="star4"></label>
                                                                <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                                <label class="half" for="star3half"></label>
                                                                <input type="radio" id="star3" name="rating" value="3">
                                                                <label class="full" for="star3"></label>
                                                                <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                                <label class="half" for="star2half"></label>
                                                                <input type="radio" id="star2" name="rating" value="2">
                                                                <label class="full" for="star2"></label>
                                                                <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                                <label class="half" for="star1half"></label>
                                                                <input type="radio" id="star1" name="rating" value="1">
                                                                <label class="full" for="star1"></label>
                                                                <input type="radio" id="starhalf" name="rating" value="half">
                                                                <label class="half" for="starhalf"></label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="input-group mg-b-15 mg-t-15">
                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="User Name">
                                                </div>
                                                <div class="input-group mg-b-15">
                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="input-group mg-b-15">
                                                    <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group review-pro-edt">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

@endsection
