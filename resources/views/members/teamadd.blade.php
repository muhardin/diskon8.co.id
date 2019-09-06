@extends('layouts.member_layout')
@section('content')
<div class="content-i">
        <div class="content-box">
<div class="row">
<div class="col-sm-6 m-auto">
<div class="element-wrapper">
    <div class="element-box-tp">
        <!--------------------
        START - Controls Above Table
        -------------------->
        <!--------------------
        END - Controls Above Table
        ------------------          -->
        <div class="element-actions">
                <a href="{{url('/member/team')}}" class="btn btn-primary"><i class="fa fa-arrow-left ml-2"></i> Kembali</a>
            </div>
            <div class="element-header">
                <h2>Register CS</h2>
            </div>
        <div class="element-box">
            <form action="#" id="form" novalidate="true">

                <div class="from-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="name" required="" class="form-control">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="from-group">
                    <label for="">No. Whatsapp</label>
                    <input type="text" id="phone" name="phone" pattern="^08[0-9]{9,}$" required="" class="form-control">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="from-group">
                    <label for="">Email</label>
                    <input type="email" name="email" required="" class="form-control" value="">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="from-group">
                    <label for="">Password</label>
                    <input type="password" name="password" required="" class="form-control">
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" class="btn btn-block btn-lg rounded-0 btn-primary mt-4 enabled">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
    </div>
@endsection

