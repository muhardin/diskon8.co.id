@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Wallet</h4>
                        {{--<div class="add-product">--}}
                            {{--<a href="{{ route('wallet.create') }}">Add Product</a>--}}
                        {{--</div>--}}
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Saldo Dicairkan</th>
                                <th>Total Saldo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($wallets as $key => $wallet)
                                <tr>
                                    <td>{{ $wallet->user_name }}</td>
                                    <td>{{ $wallet->withdraw }}</td>
                                    <td>{{ $wallet->balanced }}</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('product.edit', $wallet->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--<div class="custom-pagination">--}}
                        {{--<nav aria-label="Page navigation example">--}}
                        {{--<ul class="pagination">--}}
                        {{--<li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
                        {{--</ul>--}}
                        {{--</nav>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-extra')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable()
        } )
    </script>
@endsection