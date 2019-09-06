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
            <div class="element-box">
                <div class="os-tabs-w p-0">
                    @include('members.settings.header')
                </div>
                <form action="#" id="formstore" class="w-50">
					<div class="form-group">
						<label>Nomor Whatsapp</label>
						<input type="text" name="phone" id="phone" class="form-control" minlength="10" required value="{{$shop->phone}}">
					</div>
					<div class="form-group">
						<label for="">Nama Toko</label>
						<input type="text" name="name" id="nama_toko" value="{{$shop->company_name}}" required class="form-control">
					</div>
					<div class="form-group">
						<label for="">Tagline Toko</label>
						<input type="text" name="tagline" value="" required class="form-control">
					</div>
					<div class="form-group mt-5">
						<button class="btn btn-lg btn-primary" type="submit">Simpan</button>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-extra')
<script>
	$(document).ready(function(params) {
		// callbacks
		$('#formstore').validator().submit(function (e) {
			if(e.defaultIsPrevented) {

			} else {
				e.preventDefault();
				var data = $(this).serializeObject();
				data.shop_id        = {{$shop->id}};
				data.nama_toko      = $('#nama_toko').val();
				data.phone      = $('#phone').val();
				
				$('.overlay').show();
								axios.post('{{url('api/profiletoko')}}', data, {
					headers:{'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjlkOTRlOGE3OWY2Y2EwMzgzZjdkMmQzYjRhYTlkMzA1MGUxNDcxYjkxMGUxNTQxZjVhMWU1MWU2YWNmNGZhMjBjMjA0ZjgyZTc5YTY0ZjA3In0.eyJhdWQiOiI1IiwianRpIjoiOWQ5NGU4YTc5ZjZjYTAzODNmN2QyZDNiNGFhOWQzMDUwZTE0NzFiOTEwZTE1NDFmNWExZTUxZTZhY2Y0ZmEyMGMyMDRmODJlNzlhNjRmMDciLCJpYXQiOjE1NjUwMjgyMTQsIm5iZiI6MTU2NTAyODIxNCwiZXhwIjoxNTk2NjUwNjE0LCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.Jds_ke2I27zTHdKrLSIQMnPcH4PDflqTL8uBGEomMz3eXcD3X81mXytcPfGusPU7vI6LSwY41ntFhZSQLlHR4G6XEvmLQyKV_52SCkVMCX4rhY4IeDipTCC7pdH25U_gZTTE7Zld8cylyLHWuYain2eMwchK8EXmX_Rm6ZRBWkC24pClbjHVVCwHQCpJVhXUVrzjYuA9GnZlrQogXeUAA1LqTBqZOSju2x_4Rop5myoHTqE_NsFr9Qqe2FXLiXhj_T-uoUBH3qyXq_ewmnu-oLlox4TOaiue-TnTf4HQfc7IvkOkgwKSdoiWmkp1n-7Z9UT0aLIT43nyKe6GcYzfIOwu5B24xvZ8x5NbiteQn-j5BAaOHOh__94SEr2FNUvQobE1xGBoRYjPEBXrmhP3XkkGkbeSqQ54jLdjeJrCjxAzNl0dtqPiO1cQ-lWlklwKndGIZI0ogUPXGJTBaNQBxizO7XdYlpeQKfh9PRWR3H7QEM4gPcBuIgcp8xhEkuk_Tm6CkyM_xQCgSLsAZqLb_BI5IcV9fanqk8KkrzosvRTD0cJFy0T2fH1DdpL_4rGJMHpCgEiMCJ8w6EShTG6JQWuuUabiEMLZU3StOKk4mjsYSoUs3EVMAGyC8dGnIiCHm632fo2rt2MQzGPBNYMMHphEleWOjJIeHt6HfwuQrC0'}
				}).then(function (response) {
						$('.overlay').hide();
						if (response.data.meta.status) {
							swal('Berhasil', response.data.meta.message, 'success').then(function (params) {
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
