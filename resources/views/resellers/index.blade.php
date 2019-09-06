@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Reseller</h4>
                        <div class="add-product">
                            <a href="{{ route('reseller.create') }}">Add Reseller</a>
                        </div>
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tipe Reseller</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($resellers as $key => $reseller)
                                <tr>
                                    <td>{{ $reseller->name }}</td>
                                    <td>{{ $reseller->email }}</td>
                                    <td>{{ $reseller->reseller_type_name }}</td>
                                    <td>
                                        {{-- <button class="pd-setting">{{ $reseller->status }}</button> --}}
                                        {{ $reseller->status }}
                                    </td>
                                    @if (Auth::user()->user_type != 'finance')
                                      <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('reseller.edit', $reseller->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                          <a href="{{ url('reseller/destroy',$reseller->id) }}" onclick="return confirm('Are you sure to delete?');"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        <form id="delete-form{{ $reseller->id }}" action="{{ route('reseller.destroy', $reseller->id) }}" method="POST" style="display: none;">
                                              @csrf
                                              <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                          @if($reseller->status == "active")
                                              <button data-toggle="tooltip" title="Disable Reseller" class="btn btn-custon-rounded-three btn-danger"><a href="{{url('disable-user/'.$reseller->id)}}"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i></a></button>
                                          @else
                                              <button data-toggle="tooltip" title="Enable Reseller" class="btn btn-custon-rounded-three btn-success"><a href="{{url('enable-user/'.$reseller->id)}}"><i class="fa fa-check adminpro-checked-pro" aria-hidden="true"></i></a></button>
                                          @endif
                                      </td>
                                    @endif
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
