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
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Add New Kupon</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">

                                    <form method="POST" action="{{ route('coupon.update', $data->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                        <label>Nama </label>
                                                        <div class="input-group ">
                                                            <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                            <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $data->name }}">
                                                        </div>
                                                    </div>
                                                    <label>Produk</label>
                                                    <select name="product_id" class="form-control pro-edt-select form-control-primary">
                                                        @foreach($products as $key => $value)
                                                            @if ($value->id == $data->product_id)
                                                                <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                                            @else
                                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                        <label>Berlaku Mulai</label>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text" name="start_date" class="form-control datepicker" value="{{ $data->start_date }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                        <label>Berlaku Sampai</label>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text" name="end_date" class="form-control datepicker" value="{{ $data->end_date }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                        <label>Limit </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                            <input type="text" name="limit" class="form-control" placeholder="Kosongkan jika tidak ada batas" value="{{ $data->limit }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                    </button>
                                                    <a href="{{ route('coupon.index') }}"><button type="button" class="btn btn-warning waves-effect waves-light">Discard
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