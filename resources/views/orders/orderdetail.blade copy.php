@extends('layouts.default')
@section('content')
<br><br>
<div class="button-adminpro-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="button-ad-wrap">
                    <form method="POST" action="{{ route('order.trackOrder') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <label>Nomor Resi</label>
                                        <input type="text" name="waybill" class="form-control" placeholder="Nomor Resi" value="{{ old('waybill') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Lacak
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <div class="button-ad-wrap res-mg-t-30">

                    <div class="single-product-tab-area mg-t-30 mg-b-30">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                    <div class="single-product-details res-pro-tb">
                                        <h1>{{$orderdetail->invoice_number}}</h1>
                                        <span class="single-pro-star"><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        <div class="single-pro-price">
                                            <span class="single-regular">$150.00</span><span
                                                class="single-old"><del>$20.00</del></span>
                                        </div>
                                        <div class="single-pro-size">
                                            <h6>Size</h6>
                                            <span>S</span> <span>M</span> <span>L</span> <span>XL</span>
                                            <span>XXL</span>
                                        </div>
                                        <div class="color-quality-pro">
                                            <div class="color-quality-details">
                                                <h5>Color</h5>
                                                <span class="red"></span> <span class="green"></span> <span
                                                    class="yellow"></span> <span class="black"></span> <span
                                                    class="white"></span>
                                            </div>
                                            <div class="color-quality">
                                                <h4>Quality</h4>
                                                <div class="quantity">
                                                    <div class="pro-quantity-changer">
                                                        <input type="text" value="1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="single-pro-button">
                                                <div class="pro-button">
                                                    <a href="#">ADD TO Cart</a>
                                                </div>
                                                <div class="pro-viwer">
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="single-social-area">
                                                <h3>share this on</h3>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-feed"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-pro-cn">
                                            <h3>OVERVIEW</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-14 col-sm-12 col-xs-12">
                                <ul id="myTab" class="tab-review-design">
                                    <li class="active"><a href="#description">description</a></li>
                                    <li><a href="#reviews"><span><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></span> reviews (1) <span><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i></span></a></li>
                                    <li><a href="#INFORMATION">INFORMATION</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="product-tab-list product-details-ect tab-pane fade active in"
                                        id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip
                                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                        qui officia deserunt
                                                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                                        natus error sit voluptatem accusantium doloremque laudantium,
                                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                                        et quasi architecto
                                                        beatae vitae dicta sunt explicabo.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco labo
                                                        nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut
                                                        labore et dolore magna aliqua. Ut enim ad , quis nostrud
                                                        exercitation ullamco
                                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                        dolor in reprehenderit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
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
                                                                            <input type="radio" id="star5" name="rating"
                                                                                value="5">
                                                                            <label class="full" for="star5"></label>
                                                                            <input type="radio" id="star4half"
                                                                                name="rating" value="4 and a half">
                                                                            <label class="half" for="star4half"></label>
                                                                            <input type="radio" id="star4" name="rating"
                                                                                value="4">
                                                                            <label class="full" for="star4"></label>
                                                                            <input type="radio" id="star3half"
                                                                                name="rating" value="3 and a half">
                                                                            <label class="half" for="star3half"></label>
                                                                            <input type="radio" id="star3" name="rating"
                                                                                value="3">
                                                                            <label class="full" for="star3"></label>
                                                                            <input type="radio" id="star2half"
                                                                                name="rating" value="2 and a half">
                                                                            <label class="half" for="star2half"></label>
                                                                            <input type="radio" id="star2" name="rating"
                                                                                value="2">
                                                                            <label class="full" for="star2"></label>
                                                                            <input type="radio" id="star1half"
                                                                                name="rating" value="1 and a half">
                                                                            <label class="half" for="star1half"></label>
                                                                            <input type="radio" id="star1" name="rating"
                                                                                value="1">
                                                                            <label class="full" for="star1"></label>
                                                                            <input type="radio" id="starhalf"
                                                                                name="rating" value="half">
                                                                            <label class="half" for="starhalf"></label>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mg-b-15 mg-t-15">
                                                                <span class="input-group-addon"><i class="fa fa-user"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="User Name">
                                                            </div>
                                                            <div class="input-group mg-b-15">
                                                                <span class="input-group-addon"><i class="fa fa-user"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Last Name">
                                                            </div>
                                                            <div class="input-group mg-b-15">
                                                                <span class="input-group-addon"><i
                                                                        class="fa fa-envelope-o"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email">
                                                            </div>
                                                            <div class="form-group review-pro-edt">
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Submit
                                                                </button>
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
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip
                                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                        qui officia deserunt
                                                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                                        natus error sit voluptatem accusantium doloremque laudantium,
                                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                                        et quasi architecto
                                                        beatae vitae dicta sunt explicabo.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco labo
                                                        nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut
                                                        labore et dolore magna aliqua. Ut enim ad , quis nostrud
                                                        exercitation ullamco
                                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                        dolor in reprehenderit.</p>
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
<script>
    $('textarea').ckeditor();

</script>
@endsection
