@extends('layouts.default')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Bank Akun</h4>
                        <div class="add-product">
                            <a href="{{ route('bank.create') }}">Add Akun Bank</a>
                        </div>
                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Nama Bank</th>
                                <th>Nama Akun</th>
                                <th>Nomor Rekening</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banks as $key => $bank)
                                <tr>
                                    <td>{{ $bank->bank_name }}</td>
                                    <td>{{ $bank->bank_account_name }}</td>
                                    <td>{{ $bank->bank_account_number }}</td>
                                    @if (Auth::user()->user_type != 'finance')
                                      <td>
                                          <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('bank.edit', $bank->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                          <a href="{{ route('bank.destroy', $bank->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form{{ $bank->id }}').submit();"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                          <form id="delete-form{{ $bank->id }}" action="{{ route('bank.destroy', $bank->id) }}" method="POST" style="display: none;">
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
