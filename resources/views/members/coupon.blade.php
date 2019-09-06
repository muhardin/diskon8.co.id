@extends('layouts.member_layout')
@section('content')
<div class="content-i">
        <div class="content-box">
<div class="row">
<div class="col-sm-12">
<div class="element-wrapper">
    <div class="row">
        <div class="col-md-3">
            <h3>
                Kupon
            </h3>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3">
            <div class="element-actions">
                <a class="btn btn-primary" href="https://ultimate246.com/admin/discount/create">Buat Kupon</a>
            </div>
        </div>
    </div>
    <div class="os-tabs-w">
        <div class="os-tabs-controls">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a aria-expanded="false" class="nav-link font-weight-bold active" href="https://ultimate246.com/admin/discount"> All</a>
                </li>
                <li class="nav-item">
                    <a aria-expanded="false" class="nav-link font-weight-bold " href="https://ultimate246.com/admin/discount?status=active">Aktif</a>
                </li>
                <li class="nav-item">
                    <a aria-expanded="false" class="nav-link font-weight-bold  " href="https://ultimate246.com/admin/discount?status=nonactive"> Non Aktif</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        
        
        
    </div>
    <div class="element-box-tp pt-3">
        <div class="table-responsive">
            <table class="table table-bordered table-lg table-v2 table-striped">
                <thead>
                    <tr>
                        <th>
                            Kode
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Digunakan
                        </th>
                        <th>
                            Mulai
                        </th>
                        <th>
                            Akhir
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                                                        <tr>
                            <td class="text-center" colspan="6" class="text-center">Tidak Ada Kupon</td>
                        </tr>
                                                </tbody>
            </table>
            <div>
                                                                                                </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
    </div>
@endsection

