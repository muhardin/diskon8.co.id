@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 asset-top">
                    <div class="product-status-wrap">
                        <div class="element-header">
                          <h4>Asset</h4>
                        </div>
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#model">Model</a></li>
                            <li><a href="#creativeDesk">Creative Desk</a></li>
                            <li><a href="#videos">Videos</a></li>
                            <li><a href="#creativeContent">Creative Content</a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content custom-product-edit">
                        <div  class="product-tab-list tab-pane fade active in" id="model">
                          <div class="row">
                            @foreach ($data as $asset)
                              @if ($asset->type == 'model')
                                <div class="col-md-3">
                                  <img class="img-responsive" src="{{asset('images/products/'.$asset->image)}}" alt="">
                                </div>
                              @endif
                            @endforeach
                          </div>
                        </div>

                        <div  class="product-tab-list tab-pane fade in" id="creativeDesk">
                          <div class="row">
                            @foreach ($data as $asset)
                              @if ($asset->type == 'creative_desk')
                                <div class="col-md-3">
                                  <img class="img-responsive" src="{{asset('images/products/'.$asset->image)}}" alt="">
                                </div>
                              @endif
                            @endforeach
                          </div>
                        </div>


                        <div  class="product-tab-list tab-pane fade in" id="videos">
                          <div class="row">
                            @foreach ($data as $asset)
                              @if ($asset->type == 'videos')
                                <div class="col-md-3">
                                  {{-- <img class="img-responsive" src="{{asset('images/products/'.$asset->image)}}" alt=""> --}}
                                  <video width="320" height="240" controls>
                                    <source src="{{asset('images/products/'.$asset->image)}}">                                                                        
                                  </video>
                                </div>
                              @endif
                            @endforeach
                          </div>
                        </div>


                        <div  class="product-tab-list tab-pane fade in" id="creativeContent">
                          <div class="row">
                            @foreach ($data as $asset)
                              @if ($asset->type == 'creative_content')
                                <div class="col-md-3">
                                  <img class="img-responsive" src="{{asset('images/products/'.$asset->image)}}" alt="">
                                </div>
                              @endif
                            @endforeach
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
