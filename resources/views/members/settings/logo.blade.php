@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="element-header">
                <h1>
                    Setting
                </h1>
            </div>

                @if (Session::get('warning'))
                <div class="alert alert-danger"> <i class="fa fa-warning"></i> {{Session::get('warning')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                @elseif(Session::get('success'))
                <div class="alert alert-success"> <i class="fa fa-check"></i> {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                @endif
                
            <div class="element-box">
                <div class="os-tabs-w p-0">
                    @include('members.settings.header')
                </div>
                
                <form id="form" class="w-50" action="{{route('logoupdate')}}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Logo</label>
                        <input type="file" name="logo" class="form-control input-logo">
                    </div>
                    <img src="{{asset('images/'.$shop->logo)}}" alt="" class="img-fluid preview-logo" width="250">
                    <br><br>
                    <div class="form-group">
                        <label for="">Favicon</label>
                        <input type="file" name="favicon" class="form-control input-logo">
                    </div>
                    <div class="mt-5 file-load col-sm-12 mx-auto text-center" style="display:none">
                        <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
                    </div>
                    <img src="{{asset('images/'.$shop->favicon)}}" alt="" class="img-fluid preview-logo">
                    <div class="form-group mt-5">
                        <button class="btn btn-lg btn-primary" type="submit">Simpan</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</div>
@endsection

@section('script-extra')
<script>
    $(document).ready(function (params) {
        $('#form').submit(function (e) {
            $('.overlay').show();
        });
    });

</script>
@endsection
