@extends('layouts.member_layout')
@section('content')
<div class="content-i">
<div class="content-box">
    <div class="element-wrapper">
        <div class="element-header">
            <h3>Mobile Apps</h3>
        </div>
        <div class="row">
          
            <div class="col-6 col-md-3">
            <div class="card mb-5">
                <a href="#" target="_blank"><img class="card-img-top" src="{{asset('images/app/app.png')}}" alt="Card image cap" style="max-width: 100%; margin: 0 auto" data-pagespeed-url-hash="3284058906" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </a>

                <div class="card-body element-box" style="border-radius: 0; box-shadow: none; margin: 0;">
                    <div style=" white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                        <h6 class="card-title text-primary">{{@$item->name}}</h6>
                    </div>
                    <!--
                        <div class="description" style="font-size: 12px">
                        <div class="row mb-1">
                            <div class="col-6">
                                <i class="fa fa-tag"></i> Ready Stock
                            </div>
                            <div class="col-6">
                                <i class="fa fa-th-list"></i> Ransel
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <i class="fa fa-circle-o"></i> 0
                            </div>
                            <div class="col-6">

                                <i class="fa fa-inbox"></i> 640
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <i class="fa fa-balance-scale"></i> {{@$item->weight}} gr
                            </div>
                            <div class="col-6">
                                <i class="fa fa-map-marker"></i> Gedebage
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <i class="fa fa-list-alt"></i> BAGGU
                            </div>
                            <div class="col-6">
                               
                                <i class="fa">Rp</i> {{number_format(@$packproduct->agent_price)}}
                            </div>
                        </div>
                    </div>
                     
                    -->
                </div>

                <div class="card-footer clearfix" style="border-top: 1px solid #efefef; background: #fff; padding: 1rem; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; ">
                 <div class="text-success d-inline-block" style="font-size: 11px">Telah Gunakan</div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-primary ">Aktifkan</a>
                    </div>
                </div>
            </div>
        </div>
            
           
            
            
        </div>
    </div>

</div>
</div>
@endsection