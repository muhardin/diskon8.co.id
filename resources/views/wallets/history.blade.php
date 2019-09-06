@extends('layouts.default')



@section('content')

    <div class="product-status mg-tb-15">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="product-status-wrap">

                        <h3></h3>

                        <div class="element-header">

                        <h4>Wallet</h4>

                        </div>

                        <table id="myTable">

                            <thead>

                            <tr>

                                <th>Nama</th>

                                <th>Saldo Dicairkan</th>

                                <th>Balance</th>

                                <th>Title</th>
                                {{-- <th>Action</th>
 --}}
                            </tr>

                            </thead>

                            <tbody>

                            @foreach($walletActivity as $key => $wa)

                                <tr>

                                    <td> <a href={{route ('wallet.reseller', $wa->user_id)}}>{{ $wa->reseller_name }}</a> </td>

                                    <td>{{ $wa->wallet_out }}</td>

                                    <td>{{ $wa->balanced }}</td>

                                    <td>{{ $wa->title }}</td>
                                    {{-- <td>

                                      <form class="" action="{{ route('wallet.status', $wa->id) }}" method="post">

                                        @csrf

                                        {{method_field('put')}}

                                        @if (Auth::user()->user_type != 'cs')

                                          <button type="submit" name="status" value="Approved" data-toggle="tooltip" title="Approve" class="pd-setting-ed"><i class="fa fa-check adminpro-checked-pro" aria-hidden="true"></i></button>

                                          <button type="submit" name="status" value="Rejected" data-toggle="tooltip" title="Reject" class="pd-setting-ed"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i></button>

                                        @endif

                                      </form>

                                    </td>
 --}}
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
