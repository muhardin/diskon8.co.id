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
                    <div id="orderTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="orderTable_length"><label>Show <select
                                            name="orderTable_length" aria-controls="orderTable"
                                            class="form-control form-control-sm">
                                            <option value="10" selected="selected">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="orderTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="form-control form-control-sm" placeholder=""
                                            aria-controls="orderTable"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table
                                    class="table table-bordered datatable table-lg table-v2 table-striped dataTable no-footer"
                                    id="orderTable" role="grid" aria-describedby="orderTable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="orderTable" rowspan="1"
                                                colspan="1" style="width: 215.217px;" aria-sort="ascending"
                                                aria-label="Tanggal: activate to sort column descending">Tanggal</th>
                                            <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1"
                                                colspan="1" style="width: 205.333px;"
                                                aria-label="Invoice: activate to sort column ascending">Invoice</th>
                                            <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1"
                                                colspan="1" style="width: 280.117px;"
                                                aria-label="Nama: activate to sort column ascending">Nama</th>
                                            <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1"
                                                colspan="1" style="width: 141.833px;"
                                                aria-label="Total: activate to sort column ascending">Total</th>
                                            <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1"
                                                colspan="1" style="width: 140.433px;"
                                                aria-label="Status: activate to sort column ascending">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1"
                                                colspan="1" style="width: 34.6px;"
                                                aria-label="CS: activate to sort column ascending">CS</th>
                                            <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1"
                                                colspan="1" style="width: 110.8px;"
                                                aria-label="Funnel: activate to sort column ascending">Funnel</th>
                                            <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1"
                                                colspan="1" style="width: 189.667px;"
                                                aria-label=": activate to sort column ascending"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach ($collectiondata as $item)
                                       <tr role="row" class="even">
                                        <td class="sorting_1">{{@$item->created_at}}</td>
                                        <td>{{@$item->invoice_number}}</td>
                                        <td>{{@$item->ordered_by}}</td>
                                        <td class="text-right">{{"Rp. ".number_format(@$item->amount,0)}}</td>
                                        <td><button class="btn btn-success btn-sm btn-close-order" data-id="1053">
                                            {{ucfirst(strtolower(@$item->order_status))}}
                                        </button></td>
                                        <td>-</td>
                                        <td>
                                            Salespage
                                        </td>
                                        <td>
                                            <a href="https://ultimate246.com/admin/order/1053/wa" target="_blank"
                                                class="btn btn-wa btn-sm m-0"><i class="fa fa-whatsapp"></i></a>
                                            <a href="{{url('member/order/detail/'.$item->id)}}" class="btn btn-primary btn-sm m-0"><i
                                                    class="fa fa-search"></i></a>
                                            <button class="btn btn-danger btn-sm btn-close-order" data-id="1053">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </td>
                                    </tr>
                                       @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="orderTable_info" role="status" aria-live="polite">
                                    Showing 1 to 5 of 5 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="orderTable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="orderTable_previous"><a href="#" aria-controls="orderTable"
                                                data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="orderTable" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item next disabled" id="orderTable_next"><a
                                                href="#" aria-controls="orderTable" data-dt-idx="2" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" id="assign" novalidate="true">
                        <select name="cs_id" class="select-cs form-control">
                            <option value="" selected="selected">Please select CS</option>
                            There are no cs yet!
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
