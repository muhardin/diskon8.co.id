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
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Reseller Dashboard</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">

                                    <form method="POST" action="{{ route('resellerDashboard.update', $data->id) }}">
                                        @csrf
                                        <input type="hidden" value="PUT" name="_method">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label>Information</label>
                                                        <textarea name="information" class="form-control" placeholder="Information">{{ $data->information }}</textarea>
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
                                                      <a href="{{ route('resellerDashboard.index') }}"><button type="button" class="btn btn-warning waves-effect waves-light">Discard
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
