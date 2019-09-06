@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="element-header">
                <h3>Order</h3>
            </div>
            @include('members.orders.header')

            <div class="element-box mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered datatable table-lg table-v2 table-striped col-sm-12"
                        id="prospekTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Produk</th>
                                <th>Nama</th>
                                <th>No WA</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="assignCS" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Assign CS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" id="assign">
                        <select name="cs_id" class="select-cs form-control">
                            <option value="">Please select CS</option>
                            <p>There are no cs yet!</p>
                        </select>
                        <div class="form-group mt-4 text-center">
                            <button class="btn btn-lg btn-primary" type="submit">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
