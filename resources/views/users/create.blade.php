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
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Add New Admin</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">

                                    <form method="POST" action="{{ route('user.store') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Nama </label>
                                                        <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ old('name') }}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Email </label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Password </label>
                                                        <input type="password" name="password" class="form-control" placeholder="Password" value="">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Password Confirm </label>
                                                        <input type="text" name="password_confirmation" class="form-control" placeholder="Nama" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                    </button>
                                                    <a href="{{ route('user.index') }}"><button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
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