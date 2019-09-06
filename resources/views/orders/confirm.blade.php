@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Konfirmasi Pesanan</h4>

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
                            @foreach($confirms as $key => $confirm)
                                <tr>
                                    <td>{{ $confirm->product_name }}</td>
                                    <td>{{ $confirm->quantity }}</td>
                                    <td>{{ $confirm->amount }}</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Konfirmasi" class="pd-setting-ed"><a href=""><i class="fa fa-check-circle" aria-hidden="true"></i></a></button>
                                        {{--<button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>--}}
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