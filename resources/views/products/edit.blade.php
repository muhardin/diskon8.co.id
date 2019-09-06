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
                     <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Product</a></li>
                     <li><a href="#editPicture"><i class="fa fa-file-image-o" aria-hidden="true"></i> Asset</a></li>
                     <li><a href="#editStock"><i class="fa fa-book" aria-hidden="true"></i> Stocks</a></li>
                     {{--
                     <li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>
                     --}}
                  </ul>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane fade active in" id="description">
                        <form method="POST" action="{{ route('product.update', $data->id) }}" enctype="multipart/form-data">
                           @csrf
                           <input type="hidden" value="PUT" name="_method">
                           <div class="row">
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                 <div class="sparkline10-list mt-b-30">
                                    <div class="sparkline10-hd">
                                       <div class="main-sparkline10-hd">
                                          <h1>Product Store</h1>
                                       </div>
                                    </div>
                                    <div class="review-content-section">
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Nama Produk</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="name" class="form-control" placeholder="Product Name" value="{{ $data->name }}">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Brand Produk</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="brand" class="form-control" placeholder="Product Brand" value="{{ $data->brand }}">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">SKU Produk</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="sku" class="form-control" placeholder="Product SKU" value="{{ $data->sku }}">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Berat Produk</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="weight" class="form-control" placeholder="Product SKU" value="{{ $data->weight }}">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Batas Minimun Profit Reseller</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="profit_limit" class="form-control" placeholder="Product SKU" value="{{ $data->profit_limit }}">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Category</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <select name="category_id" class="form-control pro-edt-select form-control-primary">
                                                   @foreach($categories as $key => $value)
                                                   @if ($data->category_id == $value->id)
                                                   <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                                   @else
                                                   <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                   @endif
                                                   @endforeach
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <label>Description</label>
                                          <textarea name="description" id="summernote1" rows="8" cols="80">
                                          {{ $data->description }}
                                          </textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                 <div class="sparkline11-list responsive-mg-b-30">
                                    <div class="sparkline11-hd">
                                       <div class="main-sparkline10-hd">
                                          <h1>Product Information</h1>
                                       </div>
                                       <div class="review-content-section">
                                          {{-- <img src="{{asset('img\product\bg-1.jpg')}}" alt=""> --}}
                                          <img src="{{asset('images/products/'.$data->main_image)}}" alt="">
                                          <label>Ganti Gambar Utama </label>
                                          <div class="input-group mg-b-pro-edt">
                                              <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                              <input type="file" name="images" class="form-control">
                                          </div>
                                          <label>Harga Reseller </label>
                                          @foreach($resellerPackages as $key => $value)
                                              <div class="input-group mg-b-pro-edt">
                                                  <label>{{ $value->resellerPackage->title }}</label>
                                                  <input type="text" name="agent_price[]" class="form-control" placeholder="Harga Reseller" value="{{ $value->agent_price }}">
                                                  <input type="hidden" name="reseller_package_id[]" class="form-control" value="{{ $value->resellerPackage->id }}">
                                              </div>
                                          @endforeach
                                       </div>
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
                     <div class="product-tab-list tab-pane fade" id="editStock">
                        <form class="" action="{{route('stock.store')}}" method="post">
                           @csrf
                           <input type="hidden" name="product_id" value="{{$data->id}}">
                           {{-- <input type="hidden" name="status" value="{{$data->status}}"> --}}
                           <div class="row">
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                 <div class="sparkline10-list mt-b-30">
                                    <div class="sparkline10-hd">
                                       <div class="main-sparkline10-hd">
                                          <h1>Product Store</h1>
                                       </div>
                                    </div>
                                    <div class="review-content-section">
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Product Color</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="color" value="{{old('color') ? old('color') : ''}}">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Product Size</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                {{-- <input type="text" name="size" value="{{old('size') ? old('size') : ''}}"> --}}
                                                <select name="size" value="{{old('size') ? old('size') : ''}}">
                                                  <option value="XXS">XXS</option>
                                                  <option value="XS">XS</option>
                                                  <option value="S">S</option>
                                                  <option value="M">M</option>
                                                  <option value="L">L</option>
                                                  <option value="XL">XL</option>
                                                  <option value="XXL">XXL</option>
                                                  <option value="XXXL">XXXL</option>
                                                  <option value="XXXXL">XXXXL</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Product Stock</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="number" name="stock" value="{{old('stock') ? old('stock') : ''}}">
                                             </div>
                                          </div>
                                       </div>
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
                     <div class="product-tab-list tab-pane fade" id="editPicture">
                       <form class="" action="{{route('asset.store')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="product_id" value="{{$data->id}}">
                          <input type="hidden" name="status" value="{{$data->status}}">
                          <div class="row">
                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="sparkline10-list mt-b-30">
                                   <div class="sparkline10-hd">
                                      <div class="main-sparkline10-hd">
                                         <h1>Product Store</h1>
                                      </div>
                                   </div>
                                   <div class="review-content-section">
                                     <div class="form-group-inner">
                                        <div class="row">
                                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                              <label class="login2">Category</label>
                                           </div>
                                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                              <select name="type">
                                                <option value="model">Model</option>
                                                <option value="creative_desk">Creative Desk</option>
                                                <option value="videos">Video</option>
                                                <option value="creative_content">Creative Content</option>
                                              </select>
                                           </div>
                                        </div>
                                     </div>
                                      <div class="form-group-inner">
                                         <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                               <label class="login2">Product Asset</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                               <input type="file" name="image" value="">
                                            </div>
                                         </div>
                                      </div>
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
