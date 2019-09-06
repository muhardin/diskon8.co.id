@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Lacak Pesanan</h4>
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Nomor Resi</th>
                                {{--<th>Nama Produk</th>--}}
                                <th>Pengirim</th>
                                <th>Penerima</th>
                                <th>Kurir</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $checkShipping['summary']['waybill_number'] }}</td>
                                    {{--<td>{{ $value->title }}</td>--}}
                                    <td>{{ $checkShipping['summary']['shipper_name'] }} - ({{ $checkShipping['summary']['origin'] }})</td>
                                    <td>{{ $checkShipping['summary']['receiver_name'] }} - ({{ $checkShipping['summary']['destination'] }})</td>
                                    <td>{{ $checkShipping['summary']['courier_name'] }} - ({{ $checkShipping['summary']['service_code'] }})</td>
                                    <td>{{ $checkShipping['summary']['status'] }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="alert-icon">
                        
                        @if($checkShipping['manifest'] != null)
                        @foreach($checkShipping['manifest'] as $key=>$value)
                            <div class="alert alert-info alert-st-two alert-st-bg1 alert-st-bg12" role="alert">
                                <p class="message-mg-rt"><strong>{{ $value['manifest_date'].' '.$value['manifest_time'] }}</strong> 
                                {{ $value['manifest_description'].' at '.$value['city_name'] }}.</p>
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
@endsection

@section('script-extra')
    {{--<script>--}}
        {{--$(document).ready( function () {--}}
            {{--$('#myTable').DataTable()--}}
        {{--} )--}}
    {{--</script>--}}
@endsection