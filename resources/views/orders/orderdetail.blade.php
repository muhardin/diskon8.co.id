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

                                <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                    <div class="single-product-details res-pro-tb">
                                        <h1>{{@$orderdetail->invoice_number}}</h1>
                                        
                                        <div class="form-group-inner">
                                            <label>Nama</label>
                                            <input value="{{$orderdetail->order_name}}" type="text" class="form-control" readonly/>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Email</label>
                                            <input value="{{$orderdetail->address_email}}" type="email" class="form-control" readonly/>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Phone</label>
                                            <input value="{{$orderdetail->address_phone}}" type="text" class="form-control" readonly />
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Daerah :</label>
                                            <p>{{@$orderdetail->province_name." - ".@$orderdetail->city_name." - ".@$orderdetail->subdistrict_name}}</p>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Tujuan :</label>
                                            <p>{{$orderdetail->address_tujuan}}</p>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Shipping :</label>
                                            <p>{{$orderdetail->shipping_method}}</p>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Shipping Package :</label>
                                            <p>{{$orderdetail->shipping_package}}</p>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Kode Pos :</label>
                                            <p>{{$orderdetail->zip_address}}</p>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Ongkir :</label>
                                            <p>{{"Rp. ".number_format($orderdetail->shipping_price,0,',','.')}}</p>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Total :</label>
                                            <p>{{"Rp. ".number_format($orderdetail->amount,0,',','.')}}</p>
                                        </div>
                                        


                                        <!-- <div class="single-pro-cn">
                                            <h3>OVERVIEW</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
                                        </div>
                                    -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul id="myTab" class="tab-review-design">
                                    <li class="active"><a href="#description">description</a></li>
                                    <li><a href="#RESELLER"><span><i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i></span> RESELLER</a></li>
                                    <li><a href="#reviews"><span><i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i></span> reviews (1)
                                        <span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </span></a></li>
                                    <li><a href="#INFORMATION">INFORMATION</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="product-tab-list product-details-ect tab-pane fade active in"
                                        id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Item</th>
                                                                <th>Name (SKU)</th>
                                                                <th>Qty</th>
                                                                <th>Price</th>
                                                                <th>Profit Reseller</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $detailitem = \DB::table('order_details')->select('products.*','order_details.quantity as order_quantity','order_details.price as order_price','order_details.amount as order_amount','order_details.profit')->leftjoin('products','products.id','=','order_details.product_id')->where('order_details.order_id',$orderdetail->id)->get()
                                                            @endphp
                                                        @foreach ($detailitem as $itemproduct)
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <img src="{{asset('images/products/'.$itemproduct->main_image)}}" width="90">
                                                                </td>
                                                                <td>
                                                                        {!! @$itemproduct->name." (<b>".@$itemproduct->sku."</b>) "!!}
                                                                </td>
                                                                <td>{{@$itemproduct->order_quantity}}</td>
                                                                <td>{{number_format(@$itemproduct->order_price,0,',','.')}}</td>
                                                                <td>{{number_format(@$itemproduct->profit,0,',','.')}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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
                                                <div class="row">
                                                                <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="single-product-details res-pro-tb">
                                                                        <div class="form-group-inner">
                                                                            <label>Bukti Transfer</label><br>
                                                                            <a href="{{$orderdetail->domain.'/images/confirmPayment/'.$orderdetail->payment_image}}"><img src="{{$orderdetail->domain.'/images/confirmPayment/'.$orderdetail->payment_image}}"
                                                                                class="img-fluid" style="height: 124px;width: 177px"></a>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <label>Profit Reseller (Rp.)</label>
                                                                            <input value="{{"Rp. ".number_format($profit,0)}}" type="text" class="form-control" readonly/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="RESELLER">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">

                                                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                                            <div class="single-product-details res-pro-tb">
                                                                <div class="form-group-inner">
                                                                    <label>Domain Toko Reseller</label>
                                                                    <input value="{{$orderdetail->domain}}" type="text" class="form-control" readonly/>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Package Reseller</label>
                                                                    <input value="{{@$orderdetail->reseller_package_name}}" type="text" class="form-control" readonly/>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Nama Toko Reseller</label>
                                                                    <input value="{{$orderdetail->company_name}}" type="text" class="form-control" readonly/>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Nama Reseller</label>
                                                                    <input value="{{$orderdetail->nama_pemilik}}" type="text" class="form-control" readonly/>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Email</label>
                                                                    <input value="{{$orderdetail->email}}" type="email" class="form-control" readonly/>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Phone</label>
                                                                    <input value="{{$orderdetail->phone}}" type="text" class="form-control" readonly />
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
