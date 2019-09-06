@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="element-actions">
                <a class="btn btn-info" href="{{url('/member/product')}}">Kembali</a>
            </div>
            <div class="element-header">
                <h3>Detail Product</h3>
            </div>
            @include('members.products.header')


            <div class="row">
                <div class="col-sm-8">
                    <form class="form mt-3" id="updateProduct" method="POST">
                        <div class="element-box">
                            <div class="element-header">
                                <h6 class="font-weight-bold">Produk Store</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Nama Produk</p>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control m-0" id='product_name' placeholder="Masukkan Nama Produk"
                                        value="{{@$collectionproduct->name}}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Harga Dasar</p>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control m-0 priceformat" id='price_base' name='price_base'
                                        placeholder="Masukkan Harga Jual" value="{{@$collectionpack->agent_price}}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Harga Jual</p>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control m-0 priceformat" id='sell_price_detail' name='price'
                                        placeholder="Masukkan Harga Jual" value="{{@$collectionproduct->price_sell}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Profit</p>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control m-0 priceformat" id='profit' readonly
                                        placeholder="Masukkan Profit" value="{{@$collectionproduct->profit}}">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Harga Coret</p>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control m-0 priceformat" id='display_price' name='display_price'
                                        placeholder="Masukkan Harga Coret" value="{{@$collectionproduct->harga_coret}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 my-2">
                                    <p class="font-weight-bold">Tampilkan Harga Coret</p>
                                </div>
                                <div class="col-md-7">
                                    <input  id='display_price_show' name='display_price_show'
                                        placeholder="Masukkan Harga Coret" type="radio" value="1" @if(@$collectionproduct->is_harga_coret==1) checked @endif> Ya
                                    <input  id='display_price_show' name='display_price_show'
                                        placeholder="Masukkan Harga Coret" type="radio" value="0" @if(@$collectionproduct->is_harga_coret==0) checked @endif> Tidak
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="font-weight-bold">Deskripsi</p>
                                    </div>
                                    <div class="col-sm-4 text-right"><button class="btn btn-sm btn-primary btn-reset-desc" data-text="Tampil standout&nbsp;dengan Gamis terbaru dari Azeeza. Long dress&nbsp;berdesain modern&nbsp;dengan aplikasi ruffle yang memikat untuk anda Muslimah penuh semangat
            
                                    ##### Materials
                                    Bubblepop
                                    
                                    ##### Fitur
                                    •	Dibuat dari material bubblepop, tebal namun terasa ringan saat dipakai. Anda akan merasa    nyaman dan bebas bergerak saat memakainya.
                                    •	Terdapat zipper pada bagian depan yang busui friendly
                                    •	Terdapat karet pada bagian ujung lengan agar memudahkan anda saat berwudhu.
                                    •	Pada bagian dalam gamis dilapisi furing berbahan halus sehingga terasa adem dan nyaman saat dipakai seharian.
                                    •	Desain dengan rempel pada bagian depan hijab dan bagian bawah gamis membuat anda terlihat lebih menarik saat memakai gamis ini.
                                    •	Tersedia dalam bberbagai warna yang sedang trend yang dapat anda pilih.
                                    •	Ukuran all size, bisa dipakai oleh siapa saja.
                                    
                                    ##### Tinggi/Berat Badan Model
                                    173cm/51kg"><i class="fa fa-refresh"></i> Reset</button></div>
                                </div>
                                
                                <textarea id="konten" class="form-control" name="konten" rows="12" cols="50">
                                    @if(@$collectionproduct->reset==1)
                                    {!! @$collectionproduct->description !!}
                                    @else
                                    {!! @$collectionproduct->detail_product !!}
                                    @endif
                                </textarea>
                            </div>
                            <hr />
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-sm-4">
                    <div class="element-box mt-3">
                        <div class="element-header">
                            <h6>Informasi Produk</h6>
                        </div>
                        <img src="{{asset('images/products/'.$collectionproduct->main_image)}}" alt=""
                            class="img-thumbnail mb-3 img-fluid">
                        <div class="row mb-2">
                            <div class="col-5 font-weight-bold">
                                Nama Produk
                            </div>
                            <div class="col-7 text-primary">{{$collectionproduct->name}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 font-weight-bold">
                                Kategori
                            </div>
                            <div class="col-md-7 text-primary">-</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 font-weight-bold">
                                Berat
                            </div> 
                            <div class="col-7 text-primary">{{$collectionproduct->weight." ".$collectionproduct->unit}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 font-weight-bold">
                                Harga Dasar
                            </div>
                            <div class="col-7 text-primary priceformat">{{"Rp. ".number_format(@$collectionpack->agent_price,0)}}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 font-weight-bold">
                               Status
                            </div>
                            @if($collectionproduct->status==0)
                            <div class="col-7 text-primary">
                                Non Aktif &nbsp;
                                <a class="btn btn-success btn-sm btn-active" href="#">Aktifkan</a>
                            </div>
                            @else
                            <div class="col-7 text-primary">
                                Aktifk &nbsp;
                                <a class="btn btn-primary btn-sm btn-nonactive" href="#">Non Aktifkan</a>
                            </div>
                            @endif
                        </div>
                        <pre style="border: 1px solid #aaa; background: #ccc; border-radius: 4px;" target="_blank"
                    class="py-2 px-1 mt-3"><a href="https://kitakitaja.com/productDetail/{{@$collectionproduct->shop_product_id}}" target="_blank"><i class="fa fa-link"></i> https://kitakitaja.com/productDetail/{{@$collectionproduct->shop_product_id}}</a></pre>
                        <pre style="border: 1px solid #aaa; background: #ccc; border-radius: 4px;" target="_blank"
                            class="py-2 px-1 mt-3"><a href="https://kitakitaja.com/productDetail/api/wa?id=1727" target="_blank"><i class="fa fa-whatsapp"></i> https://ultimate246.com/api/wa?id=1727</a></pre>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra-script')
<script type = "text/javascript" >
$(document).ready(function() {
    
    $(".trigger-button").click(function(e) {
        e.preventDefault();
        $('#dimmer').toggle();
        $(".invisible-box").css("display", "grid");
    });
    $(".cancel-button").click(function(f) {
        f.preventDefault();
        $('#dimmer').toggle();
        $(".invisible-box").css("display", "none");
    });
    
    $(".sms-button").click(function(f) {
        f.preventDefault();
        $('#dimmer').toggle();
        var data = $(this).serializeObject();
        data.user_id = {{Auth::user()->id}};
        $('.overlay').show();
        axios.post('{{url('/api/smscode')}}', data, {
            headers: {
                'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI5ZDI3YTlmZTc3ZjMxOGM1YmQ1M2U5YzJiZWI0NDU3NDBkYWM2MTY0MWNmODg2ZjdkNmM5ZGZhNmI2MWRlMTI3MWIzYjQ5ZWVlODA5YzFiIn0.eyJhdWQiOiI1IiwianRpIjoiYjlkMjdhOWZlNzdmMzE4YzViZDUzZTljMmJlYjQ0NTc0MGRhYzYxNjQxY2Y4ODZmN2Q2YzlkZmE2YjYxZGUxMjcxYjNiNDllZWU4MDljMWIiLCJpYXQiOjE1NjA1ODIwNjUsIm5iZiI6MTU2MDU4MjA2NSwiZXhwIjoxNTkyMjA0NDY1LCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.R1i42NAnC04tn2Z6nsx7UC6ipyBSKphe9e9lgg3lmBlsLQFjrFr7uJ6i3EEaYbfjw_corK2JgJz4E9_yT_RxsYNveINIeVlnBnKUlo0LsrwaVtbDXGsraCpJD7Qj5lFpkD23wuxd6WawtzB-YFiH01ikeD3l3MEey7H-RiP7CnDO9eSwXdNLUNX2_yuBvlrQSZeyBWAxjBDdaiLi-5ukHCVE_bifMbl43w5qeEwNqzHxaHjPBmyi1KZE2-1IzDA4PDo29owrmblMDu13p6NDS6i2EWsfdB7pNpt8ypJ4CxfVgf6xmg7Z2m2fO1iy-bRN1k4wx9NXv2NhiqlUsvlQjAbeaNl0V-g2koPbwVyrcOE9Yd5nnfG-JBsrAtdythDB-Y90v7InijP6yxF_gUwSKsMs_kj35V88YmP7fFTQDXgBPCw2nBWqlxrNYvwcc72tMzGDXhzhsbiY-y1ZWikSGt9ooypW557snmYUl0-DmDUG96YVToAc89Xrnpuf1Amdq4oNjvviHt5-ezpq_1bCLu_l8fZbSVXfXCFcqjI4zqLt0COxqXHQahuwOM6kRCS5Je7j1EDtqzY93U4mS-HM70l5mbPDLMdpY-Iah9XahsBoTOFmYVtkpem1RJtQcSIGbjnQCBivFSNq9fJ76Zl9LFybsgk96ZV32tSX7_HDVe8'
            }
        }).then(function(response) {
            $('.overlay').hide();
            if (response.data.meta.message=='Berhasil') {
                $('.item-sms').html('<span class="">Berhasil Kirim SMS</span>');
                $('.sms-button').hide();
            }
            else {
                swal('Oops!', app.handleError(response.data.error ? response.data.error : response.data.meta.message, 'info'));
            }
        }).catch(function(error) {
            $('.overlay').hide();
            console.log(error);
            swal('Maaf', 'Terjadi kesalahan dalam saat proses penyimpanan, coba beberapa saat lagi, atau kontak CS', 'warning');
        });
    });
    

}); 
</script>   
@endsection