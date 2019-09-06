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
                     {{-- <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Product</a></li> --}}
                     {{-- <li><a href="#reviews"><i class="fa fa-file-image-o" aria-hidden="true"></i> Pictures</a></li> --}}
                     <li class="active"><a href="#reviews"><i class="fa fa-book" aria-hidden="true"></i> Stocks</a></li>
                     {{--
                     <li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>
                     --}}
                  </ul>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane  active" id="description">
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
