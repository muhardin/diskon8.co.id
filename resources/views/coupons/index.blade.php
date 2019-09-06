@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Kupon</h4>
                        <div class="add-product">
                            <a href="{{ route('coupon.create') }}">Add Kupon</a>
                        </div>
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Discount</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $key => $coupon)
                                <tr>
                                    <td>{{ $coupon->product_name }}</td>
                                    <td>{{ $coupon->discount }} %</td>
                                    <td>{{ $coupon->start_date }}</td>
                                    <td>{{ $coupon->end_date }}</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('coupon.edit', $coupon->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                        <a href="{{ route('coupon.destroy', $coupon->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form{{ $coupon->id }}').submit();"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        <form id="delete-form{{ $coupon->id }}" action="{{ route('coupon.destroy', $coupon->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
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