@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Wallet</h4>
                        <div class="element-header">
                        <h4>Products</h4>
                        </div>
                        <div>
                        @foreach($wallets as $wallet)
                            <h3>Saldo Tersedia : {{ $wallet->balanced }} </h3>
                        @endforeach
                        </div>
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Wallet In</th>
                                <th>Wallet Out</th>
                                <th>Keterangan</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                              @foreach ($walletActivity as $key => $wa)
                                <tr>
                                  <td>{{ $wa->user_name }}</td>
                                  <td>{{ $wa->wallet_in }}</td>
                                  <td>{{ $wa->wallet_out }}</td>
                                  <td>{{ $wa->title }}</td>
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
