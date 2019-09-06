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
<form action="#" id="formprofile" class="w-50">
<div class="form-group">
    <label for="">Nama Lengkap</label>
    <input type="text" name="name" value="{{@$user->name}}" required class="form-control" id='txtname'>
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" value="{{@$user->email}}" disabled class="form-control">
</div>
<div class="form-group">
    <label for="">No Telpon</label>
    <input type="text" name="phone" value="{{@$shop->phone}}" disabled class="form-control">
</div>
<div class="form-group">
    <label for="">Alamat</label>
<textarea name="address" class="form-control" id="address" required>{{@$user->address}}</textarea>
</div>
<div class="form-group row">
    <div class="col-md-6">
        <label for="">Provinsi</label>
        <select class="form-control" required name="province_id" id="province">
              <option disabled >Pilih Provinsi</option>
                                                <option  value="1"> Bali</option>
                                                <option  value="2"> Bangka Belitung</option>
                                                <option  value="3"> Banten</option>
                                                <option  value="4"> Bengkulu</option>
                                                <option  value="5"> DI Yogyakarta</option>
                                                <option  value="6"> DKI Jakarta</option>
                                                <option  value="7"> Gorontalo</option>
                                                <option  value="8"> Jambi</option>
                                                <option  value="9"> Jawa Barat</option>
                                                <option  value="10"> Jawa Tengah</option>
                                                <option  value="11"> Jawa Timur</option>
                                                <option  value="12"> Kalimantan Barat</option>
                                                <option  value="13"> Kalimantan Selatan</option>
                                                <option  value="14"> Kalimantan Tengah</option>
                                                <option  value="15"> Kalimantan Timur</option>
                                                <option  value="16"> Kalimantan Utara</option>
                                                <option  value="17"> Kepulauan Riau</option>
                                                <option  value="18"> Lampung</option>
                                                <option  value="19"> Maluku</option>
                                                <option  value="20"> Maluku Utara</option>
                                                <option  value="21"> Nanggroe Aceh Darussalam (NAD)</option>
                                                <option  value="22"> Nusa Tenggara Barat (NTB)</option>
                                                <option  value="23"> Nusa Tenggara Timur (NTT)</option>
                                                <option  value="24"> Papua</option>
                                                <option  value="25"> Papua Barat</option>
                                                <option  value="26"> Riau</option>
                                                <option  value="27"> Sulawesi Barat</option>
                                                <option  value="28"> Sulawesi Selatan</option>
                                                <option  value="29"> Sulawesi Tengah</option>
                                                <option  value="30"> Sulawesi Tenggara</option>
                                                <option  value="31"> Sulawesi Utara</option>
                                                <option  value="32"> Sumatera Barat</option>
                                                <option  value="33"> Sumatera Selatan</option>
                                                <option  value="34"> Sumatera Utara</option>
                                      </select>
    </div>
    <div class="col-md-6">
        <label for="">Kota</label>
        <select class="form-control" readonly required name="city_id" id="city" value=""></select>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-6">
        <label for="">Kecamatan</label>
        <select class="form-control"  readonly required name="district_id" id="district"></select>
    </div>
    <div class="col-md-6">
        <label for="">Kode POS</label>
        <input type="text" class="form-control" placeholder="Isi 00000 Jika Tidak Tahu" required name="postal_code" id="postal_code" value="{{@$user->kodepos}}">
    </div>
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
		var changedProvince = false;
		var changedCity = false;
		$('#formprofile').validator().submit(function (e) {
            if(e.defaultIsPrevented) {
			} else {
			e.preventDefault();
            $('.overlay').show();
			var data = $(this).serializeObject();
            data.user_id  = {{Auth::user()->id}};
            data.txtname  = $('#txtname').val();
            data.address  = $('#address').val();
            data.kodepos  = $('#postal_code').val();
            data.city     = $('#city').val();
            data.district = $('#district').val();
            data.province = $('#province').val();
            
            axios.post('{{url('api/updateprofile')}}', data, {
					headers:{'Authorization': 'a'}
				}).then(function (response) {
					$('.overlay').hide();
					if (response.data.meta.status) {
						swal('Berhasil', response.data.meta.message, 'success').then(function (params) {
							window.location.reload();
						})
					} else {
						//swal('Oops!', app.handleError(response.data.error ? response.data.error : response.data.meta.message));
                        swal('Gagal', response.data.meta.message, 'warning')
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
        $('#province').change(function(e){
          var id = $(this).val();
          $('#city').html('').attr('readonly', 'readonly');
          $('#district').html('').attr('readonly', 'readonly');
          axios.get('https://api2.satujuan.com/v1/province/'+id)
            .then(function (response) {
                if(response.data.meta.status){
                    var cityHolder = $('#city').html('').removeAttr('readonly').focus();
                    $('<option></option>').html('Pilih Kota').appendTo(cityHolder);
                    $.each(response.data.data, function(key, val) {
                        $('<option></option>').attr('value', val.id).html(val.name).appendTo(cityHolder);
                    });
                        if (!changedProvince) {
                    	$('#city').val({{@$user->city}}).trigger('change');
                    	changedProvince = true;
                    }

                } else {
                    swal(
                        'Maaf',
                        'Kota yang kamu maksud tidak ditemukan.',
                        'warning'
                    )
                }
            })
            .catch(function (error) {
                console.log(error);
                swal(
                    'Maaf',
                    'Kota yang kamu maksud tidak ditemukan.',
                    'warning'
                )
            });
        });
        $('#city').change(function(e){
	        var id = $(this).val();
	        $('#district').html('').attr('readonly', 'readonly');
	        axios.get('https://api2.satujuan.com/v1/city/'+id)
            .then(function (response) {
                if(response.data.meta.status){
                    var cityHolder = $('#district').html('').removeAttr('readonly').focus();
                    $('<option></option>').html('Pilih Kecamatan').appendTo(cityHolder);
                    $.each(response.data.data, function(key, val) {
                        $('<option></option>').attr('value', val.id).html(val.name).appendTo(cityHolder);
                    });
                                        if (!changedCity) {
                    	$('#district').val({{@$user->district}}).trigger('change');
                    	changedCity = true;
                    }

                } else {
                    swal(
                        'Maaf',
                        'Kecamatan yang kamu maksud tidak ditemukan.',
                        'warning'
                    )
                }
            })
            .catch(function (error) {
                console.log(error);
                swal(
                    'Maaf',
                    'Kecamatan yang kamu maksud tidak ditemukan.',
                    'warning'
                )
            });
        });
                	$('#province').val({{@$user->province}}).trigger('change');

		
        });
</script>
@endsection