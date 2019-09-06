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
                     <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Product Detail</a></li>
                     {{-- <li><a href="#reviews"><i class="fa fa-file-image-o" aria-hidden="true"></i> Pictures</a></li> --}}
                     <li><a href="#reviews"><i class="fa fa-book" aria-hidden="true"></i> Stocks</a></li>
                     {{--
                     <li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>
                     --}}
                  </ul>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane fade active in" id="description">
                        <form method="POST" action="{{ route('product.update', $data->id) }}">
                           @csrf
                           {{method_field('put')}}
                           <div class="row">
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                 <div class="sparkline10-list mt-b-30">
                                    <div class="sparkline10-hd">
                                       <div class="main-sparkline10-hd">
                                          <h1>Product Store</span></h1>
                                       </div>
                                    </div>
                                    <div class="review-content-section">
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Product Name</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input readonly type="text" name="name" class="form-control" placeholder="Product Name" value="{{ $data->name }}">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Product Brand</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input readonly type="text" name="brand" class="form-control" placeholder="Product Brand" value="{{ $data->brand }}">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Product SKU</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input readonly type="text" name="sku" class="form-control" placeholder="Product SKU" value="{{ $data->sku }}">
                                             </div>
                                          </div>
                                       </div>
                                       {{-- <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Agent Price</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="agent_price" class="form-control" placeholder="Agent Price" value="{{ $data->agent_price }}">
                                             </div>
                                          </div>
                                       </div> --}}
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Selling Price</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input readonly type="text" name="selling_price" class="form-control" placeholder="Selling Price" value="{{ $data->selling_price }}">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Profit</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input readonly type="text" name="profit" class="form-control" placeholder="Profit" value="{{ $data->profit }}">
                                             </div>
                                          </div>
                                       </div>
                                       {{-- <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Discount</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="discount" class="form-control" placeholder="Discount" value="{{ $data->discount }}">
                                             </div>
                                          </div>
                                       </div> --}}
                                       {{-- <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Quantity</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="">
                                             </div>
                                          </div>
                                       </div> --}}
                                       {{-- <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Category</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $data->category }}">
                                             </div>
                                          </div>
                                       </div> --}}
                                       <div class="form-group-inner">
                                          <label>Description</label>
                                          {{-- <textarea name="description" id="summernote1" rows="8" cols="80">
                                          {{ $data->description }}
                                          </textarea> --}}
                                          <br>
                                          <div style="border: 1px solid #333;padding: 10px;}">
                                            {!!$data->description!!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                 <div class="sparkline11-list responsive-mg-b-30">
                                    <div class="sparkline11-hd">
                                       <div class="main-sparkline10-hd">
                                          <h1>Product Information</span></h1>
                                       </div>
                                       <div class="review-content-section">
                                          {{-- <img src="{{asset('img\product\bg-1.jpg')}}" alt=""> --}}
                                          <img src="{{asset('images/products/'.$data->main_image)}}" alt="">
                                          <div class="form-group-inner">
                                             <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                   <label class="login2">Product Name</label>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                   <label class="login2">{{$data->name}}</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group-inner">
                                             <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                   <label class="login2">Category</label>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                   <label class="login2">{{$data->category->name}}</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group-inner">
                                             <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                   <label class="login2">Weight</label>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                   <label class="login2">{{$data->weight." ".$data->unit}}</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group-inner">
                                             <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                   <label class="login2">Selling Price</label>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                   <label class="login2">{{$data->selling_price}}</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group-inner">
                                             <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                   <label class="login2">Status</label>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                   <label class="login2">{{$data->status}}</label>
                                                   {{-- <button type="button" class="btn btn-custon-rounded-three btn-success">Active</button> --}}
                                                </div>
                                             </div>
                                          </div>
                                          {{--
                                          <select name="select" class="form-control pro-edt-select form-control-primary">
                                             --}}
                                             {{--
                                             <option value="opt1">Select One Value Only</option>
                                             --}}
                                             {{--
                                             <option value="opt2">2</option>
                                             --}}
                                             {{--
                                             <option value="opt3">3</option>
                                             --}}
                                             {{--
                                             <option value="opt4">4</option>
                                             --}}
                                             {{--
                                             <option value="opt5">5</option>
                                             --}}
                                             {{--
                                             <option value="opt6">6</option>
                                             --}}
                                             {{--
                                          </select>
                                          --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           {{-- <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                    </button>
                                    <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                    </button>
                                 </div>
                              </div>
                           </div> --}}
                        </form>
                     </div>
                     <div class="product-tab-list tab-pane fade" id="reviews">
                        {{-- <div class="row">
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
                        </div> --}}
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Warna</th>
                                    <th>Size</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($stocks as $stock)
                                <tr>
                                  <td>{{$stock->color}}</td>
                                  <td>{{$stock->size}}</td>
                                  <td>{{$stock->stock}}</td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
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
