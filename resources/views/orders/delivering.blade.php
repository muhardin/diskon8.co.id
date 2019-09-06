@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Pengiriman</h4>

                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Jumlah Pesanan</th>
                                <th>Total Harga</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($delivering as $key => $deliver)
                                <tr>
                                    <td>{{ $deliver->product_name }}</td>
                                    <td>{{ $deliver->quantity }}</td>
                                    <td>{{ $deliver->amount }}</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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