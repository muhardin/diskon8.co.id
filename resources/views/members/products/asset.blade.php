@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="element-actions">
                <a class="btn btn-info" href="{{url('/member/product')}}">Kembali</a>
            </div>
            <div class="element-header">
                <h3>{{@$collectionproduct->name}}</h3>
            </div>
            @include('members.products.header')
            <div class="element-box">
                <div class="os-tabs-w mb-3 p-0">
                    <div class="os-tabs-controls mb-0">
                        <ul class="nav nav-tabs upper">

                            <li class="nav-item">
                            <a aria-expanded="false" class="nav-link {{@$model}}"
                                    href="?cat=model"> Model </a>
                            </li>
                            <li class="nav-item">
                                <a aria-expanded="false" class="nav-link {{@$creative_desk}}"
                                    href="?cat=creative_desk"> Creative
                                    Desk </a>
                            </li>
                            <li class="nav-item">
                                <a aria-expanded="false" class="nav-link {{@$actmodel}}"
                                    href="?cat=creative_desk"> Videos </a>
                            </li>
                            <li class="nav-item">
                                <a aria-expanded="false" class="nav-link {{@$creative_content}}"
                                    href="?cat=creative_content">
                                    Creative Content </a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="row">
                    @foreach ($productPicture as $productPicturedt)
                    
                    <div class="col-sm-3">
                        <div class="card border p-3 mb-3">
                            <a target="_blank" href="{{asset('images/products/'.$productPicturedt->image)}}"><img class="img-fluid" height="50"
                                src="{{asset('images/products/'.$productPicturedt->image)}}"
                                alt="Card image cap"></a>
                            <div class="card-block text-center mt-3">
                                <a class="btn btn-primary btn-sm"
                                    download="{{asset('images/products/'.$productPicturedt->image)}}"
                                    href="{{asset('images/products/'.$productPicturedt->image)}}"
                                    target="_blank">
                                    <i class="fa fa-download"></i>
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>  

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
