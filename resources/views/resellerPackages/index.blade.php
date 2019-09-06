@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Reseller Package</h4>
                        <div class="add-product">
                            <a href="{{ route('resellerPackage.create') }}">Add Package</a>
                        </div>
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($packages as $key => $package)
                                <tr>
                                    <td>{{ $package->title }}</td>
                                    <td>Rp. {{ number_format($package->price,0,',','.') }}</td>
                                    @if (Auth::user()->user_type != 'finance')
                                      <td>
                                          <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('resellerPackage.edit', $package->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                          <a href="{{ route('resellerPackage.destroy', $package->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form{{ $package->id }}').submit();"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                          <form id="delete-form{{ $package->id }}" action="{{ route('resellerPackage.destroy', $package->id) }}" method="POST" style="display: none;">
                                              @csrf
                                              <input type="hidden" name="_method" value="DELETE">
                                          </form>
                                      </td>
                                    @endif
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
