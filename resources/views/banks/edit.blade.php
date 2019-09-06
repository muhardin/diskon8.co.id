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
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Akun Bank</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">

                                    <form method="POST" action="{{ route('bank.update', $data->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Nama Bank</label>
                                                        <input type="text" name="bank_name" class="form-control" placeholder="BCA" value="{{ $data->bank_name }}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Nama Pemilik Rekening</label>
                                                        <input type="text" name="bank_account_name" class="form-control" placeholder="PT ABCD Alfabeth" value="{{ $data->bank_account_name }}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Nomor Rekening </label>
                                                        <input type="number" name="bank_account_number" class="form-control" placeholder="1422299292" value="{{ $data->bank_account_number }}">
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
                                                      <a href="{{ route('bank.index') }}"><button type="button" class="btn btn-warning waves-effect waves-light">Discard
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

@endsection
