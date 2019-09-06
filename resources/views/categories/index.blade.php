@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Category</h4>
                        <div class="add-product">
                            <a href="{{ route('category.create') }}">Add Category</a>
                        </div>
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Picture</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td><img src="{{asset('images/category/'.$category->gambar)}}" width="90"></td>
                                    @if (Auth::user()->user_type != 'finance')
                                      <td>
                                          <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('category.edit', $category->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                          <a href="{{ route('category.destroy', $category->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form{{ $category->id }}').submit();"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                          <form id="delete-form{{ $category->id }}" action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: none;">
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
