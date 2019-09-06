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
<div class="element-box">
<div class="os-tabs-w p-0">
<div class="os-tabs-controls mb-4">
    <ul class="nav nav-tabs upper">
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link " href="https://ultimate246.com/admin/setting">Global Setting</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link " href="https://ultimate246.com/admin/setting/profile">Profile Account</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link " href="https://ultimate246.com/admin/setting/bank">Bank</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link " href="https://ultimate246.com/admin/setting/telegram">Telegram</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link " href="https://ultimate246.com/admin/setting/wa">Whatsapp</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link active" href="https://ultimate246.com/admin/setting/store">Profile Store</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link " href="https://ultimate246.com/admin/setting/avatar">Logo</a>
        </li>
        <li class="nav-item">
            <a aria-expanded="false" class="nav-link " href="https://ultimate246.com/admin/setting/domain">Domain</a>
        </li>
    </ul>
</div>
</div>
<form action="#" id="form" class="w-50" novalidate="true">
<div class="form-group">
    <label>Nomor Whatsapp</label>
    <input type="text" name="phone" id="phone" class="form-control" minlength="10" required="" value="082283880822">
</div>
<div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" value="incerz" required="" class="form-control">
</div>
<div class="form-group">
    <label for="">Tagline</label>
    <input type="text" name="tagline" value="incer gayamu disini" required="" class="form-control">
</div>
<div class="form-group mt-5">
    <button class="btn btn-lg btn-primary" type="submit">Simpan</button>
</div>
</form>

</div>
</div>

</div>

</div>
@endsection