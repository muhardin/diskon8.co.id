@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
<div class="row">
<div class="col-sm-12">
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
                    <a aria-expanded="false" class="nav-link active" href="https://ultimate246.com/admin/setting/wa">Whatsapp</a>
                </li>
                <li class="nav-item">
                    <a aria-expanded="false" class="nav-link " href="https://ultimate246.com/admin/setting/store">Profile Store</a>
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
    <form action="#" id="form" novalidate="true">
        <div class="form-group row">
            <div class="col-sm-2">
                <h6 class="font-weight-bold d-block">Nomor Whatsapp</h6>
                <small>Nomor Default Whatsapp Untuk Toko</small>
            </div>
            <div class="col-sm-5">
                <input type="text" name="sales[phone]" class="form-control" value="+6282283880822">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                <h6 class="font-weight-bold d-block">Custom Message <span class="bg-dark px-2 rounded-circle text-light tooltipd" data-toggle="tooltip" data-placement="right" data-html="true" title="" data-original-title="
                &lt;div class='text-left'&gt;&lt;span class='font-weight-bold'&gt;Shortcut&lt;/span&gt; &lt;br&gt;
                    &lt;ul class='px-3'&gt;
                        &lt;li&gt;[[nama-produk]] = Nama Produk&lt;/li&gt;
                        &lt;li&gt;[[toko]] = Nama Toko&lt;/li&gt;
                        &lt;li&gt;[[harga]] = Harga Produk&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
                ">?</span></h6>
                <small>Pesan kustom untuk sales page</small>
            </div>
            <div class="col-sm-5">
                <textarea name="sales[custom_message]" class="form-control">Haii..[[toko]] mau nanya [[nama-produk]] apakah ready ?</textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                <h6 class="font-weight-bold d-block">Follow Up Message <span class="bg-dark px-2 rounded-circle text-light tooltipd" data-toggle="tooltip" data-placement="right" data-html="true" title="" data-original-title="
                &lt;div class='text-left'&gt;&lt;span class='font-weight-bold'&gt;Shortcut&lt;/span&gt; &lt;br&gt;
                    &lt;ul class='px-3'&gt;
                        &lt;li&gt;[[toko]] = Nama Toko&lt;/li&gt;
                        &lt;li&gt;[[bank]] = nama bank&lt;/li&gt;
                        &lt;li&gt;[[code]] = kode invocie&lt;/li&gt;
                        &lt;li&gt;[[pembayaran]] = total pembayaran&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
                ">?</span></h6>
                <small>Pesan kustom untuk followup order</small>
            </div>
            <div class="col-sm-5">
                <textarea name="sales[follow_up_message]" class="form-control">Hallo sahabat pecinta produk Indonesia, Terimakasih sudah belanja di [[toko]] |

[[toko]] mau mengingatkan orderan sahabat invoice [[code]] dengan total [[pembayaran]] bisa dilakukan pembayaran ke [[bank]]</textarea>
            </div>
        </div>

        <div class="form-group text-right mt-5 mb-0">
            <button class="btn btn-primary btn-lg" type="submit">Simpan</button>
        </div>
    </form>

</div>
</div>
</div>
</div>
</div>
</div>
@endsection