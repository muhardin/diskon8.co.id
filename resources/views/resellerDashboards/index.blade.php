@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Reseller Dashboard Information</h4>
                        <div class="add-product">
                            <a href="{{ route('resellerDashboard.create') }}">Add New</a>
                        </div>
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Information</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{ $value->information }}</td>
                                    @if (Auth::user()->user_type != 'finance')
                                      <td>
                                          <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('resellerDashboard.edit', $value->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                          <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
