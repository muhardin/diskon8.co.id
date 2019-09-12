@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <div class="element-header">
                            <h4>Order</h4>
                        </div>
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#orderMasuk">Order Masuk</a></li>
                            <li><a href="#konfirmasi">Konfirmasi</a></li>
                            <li><a href="#pembayaranDiterima">Pembayaran Diterima</a></li>
                            <li><a href="#packing">Packing</a></li>
                            <li><a href="#pengiriman">Pengiriman</a></li>
                            <li><a href="#diterimaBuyer">Diterima Buyer</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="orderMasuk">
                            <table id="myTable1">
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama</th>
                                    <th>Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all as $key => $pending)
                                    <tr>
                                        <td>{{ $pending->created_at }}</td>
                                        <td>{{ $pending->invoice_number }}</td>
                                        <td>{{ $pending->ordered_by }}</td>
                                        <td>{{ $pending->product_name }}</td>
                                        <td>{{ $pending->quantity }}</td>
                                        <td>{{ $pending->amount }}</td>
                                        <td>{{ $pending->order_status}}</td>
                                        <td>
                                            @if (Auth::user()->user_type != 'finance')
                                              <button style="display: inline;" data-toggle="tooltip" title="WhatsApp" class="pd-setting-ed bg-green"><a target="_blank" href="https://web.whatsapp.com/send?phone=62{{substr($pending->phone, 1)}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></button>
                                              <button onclick="location.href='{{url('order/detail/'.@$pending->id)}}';" style="display: inline;" data-toggle="tooltip" title="Track" class="pd-setting-ed bg-pink">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                             </button>
                                                  <form style="display: inline;" id="delete-form{{ $pending->id }}" action="{{ route('order.destroy', $pending->id) }}" method="POST">
                                                      @csrf
                                                      {{ method_field('DELETE') }}
                                                      <input type="hidden" name="_method" value="DELETE">
                                                      <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i  class="fa fa-trash-o" aria-hidden="true"></i>
                                                      </button>
                                                  </form>
                                              @if($pending->order_status == "pending")
                                                  <button style="display: inline;" data-toggle="tooltip" title="Konfirmasi" class="pd-setting-ed"><a href="{{url('/konfirmasi/'.$pending->id)}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a></button>
                                              @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>




                            <div  class="product-tab-list tab-pane fade in" id="konfirmasi">
                            <table id="myTable2">
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama</th>
                                    <th>Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($confirms as $key => $confirm)
                                    <tr>
                                        <td>{{ $confirm->created_at }}</td>
                                        <td>{{ $confirm->invoice_number }}</td>
                                        <td>{{ $confirm->ordered_by }}</td>
                                        <td>{{ $confirm->product_name }}</td>
                                        <td>{{ $confirm->quantity }}</td>
                                        <td>{{ $confirm->amount }}</td>
                                        <td>{{ $confirm->order_status}}</td>
                                        <td>
                                            @if (Auth::user()->user_type != 'finance')
                                              <button data-toggle="tooltip" title="WhatsApp" class="pd-setting-ed bg-green"><a target="_blank" href="https://web.whatsapp.com/send?phone=62{{substr($confirm->phone, 1)}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></button>
                                              <button onclick="location.href='{{url('order/detail/'.@$confirm->id)}}';" data-toggle="tooltip" title="Track" class="pd-setting-ed bg-pink"><i class="fa fa-search" aria-hidden="true"></i></button>
                                              <button data-toggle="tooltip" title="Konfirmasi" class="pd-setting-ed"><a href="{{url('/pembayaranDiterima/'.$confirm->id)}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a></button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>


                            <div  class="product-tab-list tab-pane fade in" id="pembayaranDiterima">
                            <table id="myTable3">
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama</th>
                                    <th>Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $key => $order)
                                    <tr>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->invoice_number }}</td>
                                        <td>{{ $order->ordered_by }}</td>
                                        <td>{{ $order->product_name }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->order_status}}</td>
                                        <td>
                                            @if (Auth::user()->user_type != 'finance')
                                              <button data-toggle="tooltip" title="WhatsApp" class="pd-setting-ed bg-green"><a target="_blank" href="https://web.whatsapp.com/send?phone=62{{substr($order->phone, 1)}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Track" class="pd-setting-ed bg-pink"><a href="{{route('order.tracking')}}"><i class="fa fa-search" aria-hidden="true"></i></a></button>
                                            @endif
                                            @if (Auth::user()->user_type != 'cs')
                                              <button data-toggle="tooltip" title="Konfirmasi" class="pd-setting-ed"><a href="{{url('/pengiriman/'.$order->id)}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a></button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>


                            <div  class="product-tab-list tab-pane fade in" id="packing">
                            <table id="myTable4">
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama</th>
                                    <th>Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($packings as $key => $packing)
                                    <tr>
                                        <td>{{ $packing->created_at }}</td>
                                        <td>{{ $packing->invoice_number }}</td>
                                        <td>{{ $packing->ordered_by }}</td>
                                        <td>{{ $packing->product_name }}</td>
                                        <td>{{ $packing->quantity }}</td>
                                        <td>{{ $packing->amount }}</td>
                                        <td>{{ $packing->order_status}}</td>
                                        <td>
                                            @if (Auth::user()->user_type != 'finance')
                                              <button data-toggle="tooltip" title="WhatsApp" class="pd-setting-ed bg-green"><a target="_blank" href="https://web.whatsapp.com/send?phone=62{{substr($packing->phone, 1)}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Track" class="pd-setting-ed bg-pink"><a href="{{route('order.tracking')}}"><i class="fa fa-search" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Konfirmasi" class="pd-setting-ed"><a href="{{url('/pengiriman/'.$packing->id)}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a></button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>

                            <div  class="product-tab-list tab-pane fade in" id="pengiriman">
                            <table id="myTable5">
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama</th>
                                    <th>Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($delivering as $key => $delivery)
                                    <tr>
                                        <td>{{ $delivery->created_at }}</td>
                                        <td>{{$delivery->invoice_number}}</td>
                                        <td>{{ $delivery->ordered_by }}</td>
                                        <td>{{ $delivery->product_name }}</td>
                                        <td>{{ $delivery->quantity }}</td>
                                        <td>{{ $delivery->amount }}</td>
                                        <td>{{ $delivery->order_status}}</td>
                                        <td>
                                            @if (Auth::user()->user_type != 'finance')
                                              <button data-toggle="tooltip" title="WhatsApp" class="pd-setting-ed bg-green"><a target="_blank" href="https://web.whatsapp.com/send?phone=62{{substr($delivery->phone, 1)}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Track" class="pd-setting-ed bg-pink"><a href="{{route('order.tracking')}}"><i class="fa fa-search" aria-hidden="true"></i></a></button>
                                              <button data-toggle="tooltip" title="Konfirmasi" class="pd-setting-ed"><a href="{{url('/diTerima/'.$delivery->id)}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a></button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>


                            <div  class="product-tab-list tab-pane fade in" id="diterimaBuyer">
                            <table id="myTable6">
                                <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($success as $key => $scs)
                                @php
                                    $qtyorder = \DB::table('order_details')->where('order_id',$scs->id)->sum('quantity');
                                @endphp
                                    <tr>
                                        <td>{{ $scs->created_at }}</td>
                                        <td>{{$scs->invoice_number}}</td>
                                        <td>{{ $scs->ordered_by }}</td>
                                        
                                        <td>{{ $qtyorder }}</td>
                                        <td>{{ $scs->amount }}</td>
                                        <td>{{ $scs->order_status}}</td>
                                        <td>
                                            @if (Auth::user()->user_type != 'finance')
                                              <button data-toggle="tooltip" title="WhatsApp" class="pd-setting-ed bg-green"><a target="_blank" href="https://web.whatsapp.com/send?phone=62{{substr($scs->phone, 1)}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></button>
                                              <button onclick="location.href='{{url('order/detail/'.@$scs->id)}}';" data-toggle="tooltip" title="Track" class="pd-setting-ed bg-pink"><i class="fa fa-search" aria-hidden="true"></i></button>
                                              {{--<button data-toggle="tooltip" title="Konfirmasi" class="pd-setting-ed"><a href=""><i class="fa fa-check-circle" aria-hidden="true"></i></a></button>--}}
                                              {{--<button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>--}}
                                            @endif
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
        </div>
    </div>
@endsection

@section('script-extra')
    <script>
        $(document).ready( function () {
            $('#myTable1,#myTable2,#myTable3,#myTable4,#myTable5,#myTable6').DataTable()
        } )
    </script>
@endsection
