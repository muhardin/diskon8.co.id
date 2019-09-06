@extends('layouts.member_layout')
@section('content')
@php
	$shopdata = \DB::table('shops')->where('user_id',Auth::user()->id)->first();
@endphp
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
                <form action="#" id="formfooterhome" class="w-50">
                    <div class="form-group">
                        <label for=""><b>Footer Content Home</b></label>
                        <textarea id="konten" class="form-control" name="konten" rows="12" cols="50">
							{!! @$collection->footer_home !!}
							
						</textarea>
                    </div>
                    
                    <div class="form-group mt-2">
                        <button class="btn btn-lg btn-primary" type="submit">Simpan</button>
                    </div>
				</form>
				<br><br>
                <form action="#" id="formfooterdetail" class="w-50">
                    <div class="form-group">
                        <label for=""><b>Footer Content Detail Page</b></label>
                        <textarea id="content" class="form-control" name="content" rows="12" cols="50">
							{!! @$collection->footer_detail !!}
							
						</textarea>
                    </div>
                    
                    <div class="form-group mt-2">
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
	var konten = document.getElementById("konten2");
	  CKEDITOR.replace(konten,{
	  language:'en-gb'
	});
	CKEDITOR.config.allowedContent = true;
</script>
<script>
	var konten = document.getElementById("content");
	  CKEDITOR.replace(konten,{
	  language:'en-gb'
	});
	CKEDITOR.config.allowedContent = true;
</script>

<script>
	$(document).ready(function(params) {
		// callbacks
		$('#formfooterhome').submit(function(e){
            e.preventDefault()
                var datakonten = CKEDITOR.instances.konten.getData();
                data                = $(this).serializeObject();
                data.content        = datakonten;
                data.shop_id        = {{$shopdata->id}};
                instance.post('../api/updatefooterhome', data).then(function(res) {
                    console.log(res)
                    if (res.data.meta.status) {
                        swal('Sukses', 'Produk berhasil diupdate', 'success');
                        window.location.reload();
                    } else {
                        swal('Ooops!', res.data.meta.message, 'error');
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
		});
		$('#formfooterdetail').submit(function(e){
            e.preventDefault()
                var datakonten = CKEDITOR.instances.content.getData();
                data                = $(this).serializeObject();
                data.content        = datakonten;
                data.shop_id        = {{$shopdata->id}};
                instance.post('../api/updatefooterdetail', data).then(function(res) {
                    console.log(res)
                    if (res.data.meta.status) {
                        swal('Sukses', 'Produk berhasil diupdate', 'success');
                        window.location.reload();
                    } else {
                        swal('Ooops!', res.data.meta.message, 'error');
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
		});
	});
</script>
@endsection
