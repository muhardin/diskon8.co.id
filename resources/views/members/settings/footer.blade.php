@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="element-header">
                <h1>
                    Setting
                </h1>
			</div>
			@if (Session::get('warning'))
                <div class="alert alert-danger"> <i class="fa fa-warning"></i> {{Session::get('warning')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                @elseif(Session::get('success'))
                <div class="alert alert-success"> <i class="fa fa-check"></i> {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                @endif
            <div class="element-box">
                <div class="os-tabs-w p-0">
                    @include('members.settings.header')
				</div>
				<form id="form" class="w-50" action="{{url('/member/setting/footerdetailpost')}}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Picture</label>
                        <input type="file" name="picture" class="form-control input-logo">
                    </div>
                    <div class="form-group">
							<label for="">Link (http://sample.com)</label>
                    <input value="{{@$collectionedit->link}}" type="text" name="link" class="form-control input-logo">
					</div>
                    <div class="form-group">
							<label for="">Content</label>
                    <textarea id="content" class="form-control" name="content" rows="5" cols="50">{{@$collectionedit->content}}</textarea>
					</div>
                    
					<div class="form-group mt-2">
                            <input value="{{@$collectionedit->id}}" type="hidden" name="id" class="form-control input-logo">
							<button class="btn btn-lg btn-primary" type="submit">Save</button>
                    <button onclick="location.href='{{url('/member/setting/mainfooter')}}';" class="btn btn-lg btn-warning" type="reset">Reset</button>
						</div>
				</form>
				
                <div class="table-responsive">
                    <table class="table table-bordered table-lg table-v2 table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Picture
                                </th>
                                <th>
                                    Link
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item) <tr>
                                <td>
                                    <div class="cell-image-list mr-2" style="vertical-align: top;">
                                        <div class="cell-img"
                                            style="background-image:url({{asset('images/slides/'.@$item->picture)}})">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    {{@$item->link}}
                                </td>
                                <td class="text-left">
										{{@$item->content}}
                                </td>
                                <td class="text-center">
										@if(@$item->status==0)
										Non Aktif
										@else
										Aktif
										@endif
                                </td>
                                <td class="row-actions">
                                    <a href='{{url('member/setting/mainfooter?id='.@$item->id)}}'
                                        class="text-light btn btn-sm btn-primary m-0" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href='#'
                                        class="text-secondary btn btn-sm btn-warning m-0" data-toggle="tooltip"
                                        data-placement="top" title="Enable or Disable"><i class="fa fa-check"></i></a>
                                    <a href='{{asset('images/slides/'.@$item->picture)}}' target="_blank"
                                        class="text-light btn btn-sm btn-success m-0" data-toggle="tooltip"
                                        data-placement="top" title="View Image"><i class="fa fa-image"></i></a>
									<a onclick="return confirm('Yakin ingin menghapus data?')" href='{{url('/member/setting/footerdetaildel/'.@$item->id)}}'
                                        class="text-light btn btn-sm btn-info m-0" data-toggle="tooltip"
                                        data-placement="top" title="Delete"><i class="fa fa-close"></i></a>
                                    
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
    $(document).ready(function (params) {
        // callbacks
        $('#formbank').validator().submit(function (e) {
            if (e.defaultIsPrevented) {

            } else {
                e.preventDefault();
                var data = $(this).serializeObject();
                data.user_id = {
                    {
                        Auth::user() - > id
                    }
                };
                data.nama_bank = $('#nama_bank').val();
                data.nama_pemilik = $('#nama_pemilik').val();
                data.no_rekening = $('#no_rekening').val();
                $('.overlay').show();
                axios.post('{{url('
                    api / updatebank ')}}', data, {
                        headers: {
                            'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjlkOTRlOGE3OWY2Y2EwMzgzZjdkMmQzYjRhYTlkMzA1MGUxNDcxYjkxMGUxNTQxZjVhMWU1MWU2YWNmNGZhMjBjMjA0ZjgyZTc5YTY0ZjA3In0.eyJhdWQiOiI1IiwianRpIjoiOWQ5NGU4YTc5ZjZjYTAzODNmN2QyZDNiNGFhOWQzMDUwZTE0NzFiOTEwZTE1NDFmNWExZTUxZTZhY2Y0ZmEyMGMyMDRmODJlNzlhNjRmMDciLCJpYXQiOjE1NjUwMjgyMTQsIm5iZiI6MTU2NTAyODIxNCwiZXhwIjoxNTk2NjUwNjE0LCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.Jds_ke2I27zTHdKrLSIQMnPcH4PDflqTL8uBGEomMz3eXcD3X81mXytcPfGusPU7vI6LSwY41ntFhZSQLlHR4G6XEvmLQyKV_52SCkVMCX4rhY4IeDipTCC7pdH25U_gZTTE7Zld8cylyLHWuYain2eMwchK8EXmX_Rm6ZRBWkC24pClbjHVVCwHQCpJVhXUVrzjYuA9GnZlrQogXeUAA1LqTBqZOSju2x_4Rop5myoHTqE_NsFr9Qqe2FXLiXhj_T-uoUBH3qyXq_ewmnu-oLlox4TOaiue-TnTf4HQfc7IvkOkgwKSdoiWmkp1n-7Z9UT0aLIT43nyKe6GcYzfIOwu5B24xvZ8x5NbiteQn-j5BAaOHOh__94SEr2FNUvQobE1xGBoRYjPEBXrmhP3XkkGkbeSqQ54jLdjeJrCjxAzNl0dtqPiO1cQ-lWlklwKndGIZI0ogUPXGJTBaNQBxizO7XdYlpeQKfh9PRWR3H7QEM4gPcBuIgcp8xhEkuk_Tm6CkyM_xQCgSLsAZqLb_BI5IcV9fanqk8KkrzosvRTD0cJFy0T2fH1DdpL_4rGJMHpCgEiMCJ8w6EShTG6JQWuuUabiEMLZU3StOKk4mjsYSoUs3EVMAGyC8dGnIiCHm632fo2rt2MQzGPBNYMMHphEleWOjJIeHt6HfwuQrC0'
                        }
                    }).then(function (response) {
                    $('.overlay').hide();
                    if (response.data.meta.status) {
                        swal('Berhasil', response.data.meta.message, 'success').then(function (
                            params) {
                            window.location.reload();
                        });
                    } else {
                        //swal('Oops!', app.handleError(response.data.error ? response.data.error : response.data.meta.message));
                        swal('Oops!', response.data.meta.message, 'warning');
                    }
                }).catch(function (error) {
                    $('.overlay').hide();
                    console.log(error);
                    swal(
                        'Maaf',
                        'Terjadi kesalahan dalam saat proses penyimpanan, coba beberapa saat lagi, atau kontak CS',
                        'warning'
                    );
                });
            }
        });
    });

</script>
@endsection
