@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="product-status-wrap">

                        <h3></h3>
                        <div class="element-header">
                            @if(Session::get('success'))
                            <div class="alert alert-success alert-st-one alert-st-bg alert-st-bg11" role="alert">
                                    <p class="message-mg-rt"><strong>Well done!</strong> {{Session::get('success')}}.</p>
                                </div>
                            @elseif(Session::get('warning'))
                            <div class="alert alert-danger alert-st-two" role="alert">
                                    <p class="message-mg-rt"><strong>Heads up!</strong> {{Session::get('warning')}}</p>
                                </div>

                            @endif
                        <h4>Wallet</h4>
                        </div>
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nama Toko</th>
                                <th>Saldo Dicairkan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($walletActivity as $key => $wa)
                                <tr>
                                    <td> <a href={{route ('wallet.reseller', $wa->user_id)}}>{{ $wa->reseller_name }}</a> </td>
                                    <td>{{ $wa->email }}</td>
                                    <td>{{ @$wa->company_name }}</td>
                                    <td>{{ "Rp. ".number_format($wa->balanced,0) }}</td>
                                    <td>
                                            @if($wa->status==0)
                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Pending
                                                </button>
                                            @else
                                            <button type="button" class="btn btn-warning waves-effect waves-light m-r-10">Success
                                                </button>
                                            @endif
                                    </td>

                                    <td>
                                      <form class="" action="{{ route('wallet.status', $wa->id) }}" method="POST">
                                       
                                        @csrf
                                       
                                        {{method_field('POST')}}
                                       
                                        @if (Auth::user()->user_type != 'cs')
                                            @if($wa->status==0)
                                            <button onclick="return confirm('Are you sure to accept ?')" type="submit" name="status" value="Approved" data-toggle="tooltip" title="Approve" class="pd-setting-ed"><i class="fa fa-check adminpro-checked-pro" aria-hidden="true"></i></button>
                                            <button onclick="return confirm('Are you sure to reject ?')" type="submit" name="status" value="Rejected" data-toggle="tooltip" title="Reject" class="pd-setting-ed"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i></button>
                                            @endif
                                        @endif
                                      </form>
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
