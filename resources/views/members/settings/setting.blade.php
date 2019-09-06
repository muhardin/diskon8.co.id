@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
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
                        <form action="#" id="form" novalidate="true">
                            <div class="element-header">
                                <h4>
                                    Homepage
                                </h4>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Section Homepage</h6>
                                    <small>Tambah / Kurangi Section Yang Anda Inginkan</small>
                                </div>
                                <div class="col-sm-2 m-auto text-right">
                                    <button class="btn-outline-info btn add-new-section"><i class="fa fa-plus"></i>
                                        Tambah Section</button>
                                </div>

                                <div class="col-sm-12 mt-3 py-3 movable-sections" id="items"
                                    style="border: 2px dashed #ddd">
                                    <div class="no-items w-100 py-3 text-center">Belum ada section, silahkan tambahkan
                                        section.</div>

                                </div>
                            </div>

                            <div class="form-group row my-5">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Slider</h6>
                                    <small>Aktif / Non Aktifkan slider pada homepage</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="slider[status]" checked="checked">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Slider Homepage</h6>
                                    <small>Tambah / Kurangi Slider Yang Anda Inginkan</small>
                                </div>
                                <div class="col-sm-2 m-auto text-right">
                                    <button class="btn-outline-info btn add-new-slider" type="button"><i
                                            class="fa fa-plus"></i> Tambah Slider</button>
                                </div>

                                <div class="col-sm-12 mt-3 py-3 movable-sections-slider" id="items-slider"
                                    style="border: 2px dashed #ddd">
                                    <div class="w-100 draggable p-3 border mb-2" id="item-slider-0">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="">Pilih File</label>
                                                            <input type="file"
                                                                class="form-control  slide-upload slide-item-0"
                                                                data-id="0" accept="image/*">
                                                        </div>
                                                        <h6>Informasi Image</h6>
                                                        <ul class="pl-3">
                                                            <li>Dimensi image : 1110px x 398px</li>
                                                            <li>Rekomendasi image PNG</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <img src="Satujuan44_files/x5bbcc4f9960f5.png"
                                                            class="img-fluid slide-item-img-0" alt="">
                                                        <input type="text" name="slider[item][]"
                                                            value="https://cdn1.satujuan.com/file/2018/10/5bbcc4f9960f5.png"
                                                            class="slide-item-input-0 d-none">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 text-right m-auto">
                                                <i class="fa fa-close btn-delete text-danger fa-2x cursor-pointer"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 draggable p-3 border mb-2" id="item-slider-1">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="">Pilih File</label>
                                                            <input type="file"
                                                                class="form-control  slide-upload slide-item-1"
                                                                data-id="1" accept="image/*">
                                                        </div>
                                                        <h6>Informasi Image</h6>
                                                        <ul class="pl-3">
                                                            <li>Dimensi image : 1110px x 398px</li>
                                                            <li>Rekomendasi image PNG</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <img src="Satujuan44_files/x5bbcbbfba3b06.png"
                                                            class="img-fluid slide-item-img-1" alt="">
                                                        <input type="text" name="slider[item][]"
                                                            value="https://cdn1.satujuan.com/file/2018/10/5bbcbbfba3b06.png"
                                                            class="slide-item-input-1 d-none">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 text-right m-auto">
                                                <i class="fa fa-close btn-delete text-danger fa-2x cursor-pointer"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="element-header pt-3 mt-4">
                                <h4>
                                    Pixel
                                </h4>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <h6 class="font-weight-bold d-block">Pixel</h6>
                                    <small>Facebook Pixel ID</small>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <input type="text" class="form-control" name="pixel" placeholder="Masukkan fb pixel"
                                        value="366815837191779">
                                </div>
                            </div>
                            <div class="element-header pt-3 mt-4">
                                <h4>
                                    Salespage
                                </h4>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Show Chat Button</h6>
                                    <small>Tombol Whatsapp</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="sales[wa]" checked="checked">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Sticky Button</h6>
                                    <small>Tombol beli sekarang melayang</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="sales[sticky]" checked="checked">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Button pada Form</h6>
                                    <small>Memunculkan tombol beli sekarang di form pembelian saat sticky</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="sales[buy_button]">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Chat Now</h6>
                                    <small>Tombol WA bersebelahan dengan Beli Sekarang</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="sales[chat_now]" checked="checked">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Sembunyikan Button Beli Sekarang Di Mobile</h6>
                                    <small>Menghilangkan button beli sekarang di mobile untuk pembeli</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="sales[guest_buy_now]">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Total Kupon yang Digunakan</h6>
                                    <small>Munculkan total kupon yang sudah digunakan di sales page</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="sales[coupon_total]">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <h6 class="font-weight-bold d-block">Custom Text Diskon</h6>
                                    <small>Ubah Text Diskon pada Form Di Salespage</small>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <input type="text" class="form-control" name="sales[text_coupon]"
                                        placeholder="Harga Promo Digunakan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <h6 class="font-weight-bold d-block">Custom Text Beli Sekarang</h6>
                                    <small>Ubah Text Beli Sekarang Di Salespage</small>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <input type="text" class="form-control" name="sales[text_buy_now]"
                                        placeholder="Beli Sekarang">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <h6 class="font-weight-bold d-block">Custom Text Chat Sekarang</h6>
                                    <small>Ubah Text Chat Sekarang Di Salespage</small>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <input type="text" class="form-control" name="sales[text_chat_now]"
                                        placeholder="Chat Sekarang">
                                </div>
                            </div>

                            <div class="element-header pt-3 mt-4">
                                <h4>
                                    Checkout
                                </h4>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Sembunyikan Email</h6>
                                    <small>Menghilangkan input email</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="checkout[email]">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <h6 class="font-weight-bold d-block">Sembunyikan Kode Pos</h6>
                                    <small>Menghilangkan input Kode Pos</small>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <label class="switch-light switch-candy" onclick="">
                                        <input type="checkbox" name="checkout[postal_code]" checked="checked">

                                        <span aria-hidden="true">
                                            <span>Off</span>
                                            <span>On</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group text-right mt-5 mb-0">
                                <button class="btn btn-primary btn-lg" type="submit">Simpan</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/template" id="template">

        <div class="w-100 draggable p-3 border mb-2 section-item" id="item-<%= id %>">
<div class="row">
<div class="col-sm-10">
<div class="from-group row">
    <div class="col-sm-3 m-auto">
        <label for="">Pilih Section</label>
    </div>
    <div class="col-sm-9">
        <select name="sections[][type]" class="form-control section-type" data-section-id="">
            <option value="latest">Latest Product</option>
            <option value="popular">Popular Product</option>
            <option value="tag">Product by Tag</option>
        </select>
    </div>
    <div class="col-sm-3 m-auto">
        <label>Title</label>
    </div>
    <div class="col-sm-9">
        <input class='form-control' name="sections[][title]" placeholder="Judul Section">
    </div>
    <div class="col-sm-3 m-auto">
        <label>Tampilkan Produk</label>
    </div>
    <div class="col-sm-9">
        <select name="sections[][offset]" class="form-control section-offset" data-section-id=''>
            <option value="4">4</option>
            <option value="8">8</option>
            <option value="12">12</option>
            <option value="16">16</option>
            <option value="ALL">ALL</option>
        </select>
    </div>
    <div class="col-sm-3 m-auto tag tag_" style="display: none">
        <label>Pilih Tag</label>
    </div>
    <input class="non-tag" type="hidden" name="sections[][value]" value="non-tag">
    <div class="col-sm-9 tag" style="display: none">
        <select class="form-control" name="sections[][value]">
            <option disabled selected>Pilih Tag</option>
                                                                                <option value="1">Pria</option>
                                                                                                                <option value="2">Wanita</option>
                                                                                                                <option value="3">Hijab</option>
                                                                                                                <option value="4">Printing</option>
                                                                                                                <option value="5">Dress</option>
                                                                    </select>
    </div>
</div>
</div>
<div class="col-sm-2 text-right m-auto">
<i class="fa fa-close btn-delete text-danger fa-2x cursor-pointer"></i>
</div>
</div>
</div>
</script>
    <script type="text/template" id="template-slide">
        <div class="w-100 draggable p-3 border mb-2" id="item-slider-<%= id %>">
<div class="row">
<div class="col-sm-10">
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label for="">Pilih File</label>
            <input type="file" class="form-control slide-upload slide-item-<%= id %>" data-id="<%= id %>" accept="image/*">
        </div>
        <h6>Informasi Image</h6>
        <ul class="pl-3">
            <li>Dimensi image : 1110px x 398px</li>
            <li>Rekomendasi image PNG</li>
        </ul>
    </div>
    <div class="col-sm-8">
        <img src="https://ultimate246.com/images/slider/2.png" class="img-fluid slide-item-img-<%= id %>" alt="">
        <input type="text" name="slider[item][]" value="https://ultimate246.com/images/slider/2.png" class="slide-item-input-<%= id %> d-none">
    </div>
</div>
</div>
<div class="col-sm-2 text-right m-auto">
<i class="fa fa-close btn-delete text-danger fa-2x cursor-pointer"></i>
</div>
</div>
</div>
</script>
</div>
@endsection
@section('script-extra')
<script>
    $(document).ready(function (params) {
        // glob vars
        var setting = {
            "pixel": "366815837191779",
            "sales": {
                "wa": true,
                "phone": "+6282283880822",
                "sticky": true,
                "chat_now": true,
                "buy_button": false,
                "text_coupon": null,
                "coupon_total": false,
                "text_buy_now": null,
                "guest_buy_now": false,
                "text_chat_now": null,
                "custom_message": "Haii..[[toko]] mau nanya [[nama-produk]] apakah ready ?",
                "follow_up_message": "Hallo sahabat pecinta produk Indonesia, Terimakasih sudah belanja di [[toko]] |\r\n\r\n[[toko]] mau mengingatkan orderan sahabat invoice [[code]] dengan total [[pembayaran]] bisa dilakukan pembayaran ke [[bank]]"
            },
            "slider": {
                "item": ["https:\/\/cdn1.satujuan.com\/file\/store\/494\/5d0a09255fc4b.png",
                    "https:\/\/cdn1.satujuan.com\/file\/2018\/10\/5bbcbbfba3b06.png"
                ],
                "status": true
            },
            "checkout": {
                "email": false,
                "postal_code": true
            },
            "sections": [{
                "type": "latest",
                "title": "Latest Product",
                "value": null,
                "offset": "4"
            }]
        };
        var uuid = 0;
        var total_section = 1;
        var $template = _.template($('#template').html());
        var $templateSlider = _.template($('#template-slide').html());

        // plugins
        // ..tooltip
        $('.tooltipd').tooltip({
            boundary: 'window'
        });
        // ..Sortable
        Sortable.create(document.getElementById('items'), {
            group: 'items',
            animation: 100,
            ghostClass: 'bg-warning',
            chosenClass: 'chosen-item',
            scroll: true
        });
        Sortable.create(document.getElementById('items-slider'), {
            group: 'items-slider',
            animation: 100,
            ghostClass: 'bg-warning',
            scroll: true
        });

        // form validation & submit
        $('#form').validator().submit(function (e) {
            if (e.defaultIsPrevented) {

            } else {
                e.preventDefault();
                var data = {
                    setting: setting
                }
                $.each($(this).serializeObject(), function (i, val) {
                    if (typeof val == 'array' || typeof val == 'object') {
                        if (!data.setting[i] && i == 'sections' || i == 'sections') {
                            data.setting[i] = [];
                        } else if (!data.setting[i]) {
                            data.setting[i] = {};
                        }
                        $.each(val, function (it, item) {
                            if (typeof data.setting[i] == 'object') {
                                data.setting[i][it] = item;
                            } else {
                                data.setting[i].push(item);
                            }
                        });
                    } else {
                        data.setting[i] = val;
                    }
                });

                // sections validation
                var section_error = [];
                if (data.setting && data.setting.sections) {
                    data.setting.sections = data.setting.sections.slice(0, $('.section-item').length);
                } else {
                    data.setting = data.setting || {};
                    data.setting.sections = data.setting.sections || [];
                }
                $.each(data.setting.sections, function (i, section) {
                    if (section.title == '') {
                        section_error.push('Section ' + (i + 1) + ': Title harus diisi!');
                    }
                    if (section.type == 'tag') {
                        if (!section.value || section.value == '') {
                            section_error.push('Section ' + (i + 1) + ': Silahkan pilih tag');
                        }
                    } else {
                        data.setting.sections[i]['value'] = '';
                    }
                })
                data.setting.sections = data.setting.sections.filter(function (sct) {
                    return sct.type
                });
                if (section_error.length != 0) {
                    return swal({
                        title: 'Oops!',
                        html: section_error.join('<br>'),
                        type: 'error'
                    })
                }

                // reset all data
                if (!data.setting.slider) {
                    data.setting.slider = {};
                }
                if (!data.setting.sales) {
                    data.setting.sales = {};
                }
                if (!data.setting.checkout) {
                    data.setting.checkout = {};
                }
                // insert new value
                data.setting.slider.status = $('input[name="slider[status]"]').is(":checked");
                data.setting.sales.wa = $('input[name="sales[wa]"]').is(":checked");
                data.setting.sales.sticky = $('input[name="sales[sticky]"]').is(":checked");
                data.setting.sales.buy_button = $('input[name="sales[buy_button]"]').is(":checked");
                data.setting.sales.chat_now = $('input[name="sales[chat_now]"]').is(":checked");
                data.setting.sales.guest_buy_now = $('input[name="sales[guest_buy_now]"]').is(
                    ":checked");
                data.setting.sales.coupon_total = $('input[name="sales[coupon_total]"]').is(":checked");
                data.setting.checkout = {};
                data.setting.checkout.email = $('input[name="checkout[email]"]').is(":checked");
                data.setting.checkout.postal_code = $('input[name="checkout[postal_code]"]').is(
                    ":checked");

                $('.overlay').show();
                axios.post('https://api2.satujuan.com/v1/store/494/setting/global', data, {
                    headers: {
                        'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBkMDE3ODNkZjQ0ZGUwZjg4NzkyMGIyNmM2MjU1ZGQ2YTU3YWQ0MTBiODI2MTNjMTI3ZDNlZGMwYjdmZjE0YTRhZjE2YzZjZTlhZmI4YWE0In0.eyJhdWQiOiI1IiwianRpIjoiMGQwMTc4M2RmNDRkZTBmODg3OTIwYjI2YzYyNTVkZDZhNTdhZDQxMGI4MjYxM2MxMjdkM2VkYzBiN2ZmMTRhNGFmMTZjNmNlOWFmYjhhYTQiLCJpYXQiOjE1NjcwMTAyNTAsIm5iZiI6MTU2NzAxMDI1MCwiZXhwIjoxNTk4NjMyNjUwLCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.J5fHf2hxnAUMloUCvw0NrnMkDQMt4hOTpiPeLrTCk7LWy8VwB6mAZULIIaVdfdQ6YIV9lsqWE7zF8eOAgfBkEmV5fpPDYj3ccUnicHXw36wqOD1fYHEhmEa43kgtxD6uMSDbeuh4TOzahOMBbdd-cTLblH7DT56uZa3kDCl9EhQgcuLpa4EN-pGIJYxxIdMuViwXyqUdDofmiG60dg_XlMtDM-bcdt_bKhJtkW776v8txiaPdftRBpGiuMZUGxUUkBxwOgh3nFG_5oS3qjeD_OM0L4g8qZMkx7_tYeW3xCp5HM_VCfoafDZ0MOqet88DqHvWOydcCTYtMiE8KZTZwjIdh6EgaDVC-tJ2rgIbM9B-hm2YmhvycBtzAYxtJPQw1-ovDEd07aitTP1kE-BynQXV6NQBVq8f6YNtGrCbxiVArNZQA5w3x-N3GNkycWMx38-kqYvKYAzj7Nb7Dy-e_YnVlyq8d9SGuC6YOMG1lY35k3heR2M5qtYwqjfv2f-qzMEwCNyrTB0585k2lRnqVj8JpGEa2tTaDkY_Ay1KQ9qoUTcFQ5Mx17TpYuj6M_IWAFhcgDOr9kqY1fClgNK2BpR6bn7gxbSOI10p3AeSS0QH3nyXXOugnL-f6MevnJAzUxC_U0JOXf8JHr_8Ridhufw3bhZcTMxyAQVvoa0d7Hk'
                    }
                }).then(function (response) {
                    // console.log(response)
                    $('.overlay').hide();
                    if (response.data.meta.status) {
                        swal('Berhasil', response.data.meta.message, 'success').then(function (
                            params) {
                            window.location.reload();
                        })
                    } else {
                        swal('Oops!', app.handleError(response.data.error ? response.data
                            .error : response.data.meta.message));
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

        $(document)
            .on('change', '.section-type', function (e) {
                var value = $(this).val();
                if (value == 'tag') {
                    $(this).parent().parent().find('.tag').show()
                    $(this).parent().parent().find('.non-tag').remove()

                } else {
                    $(this).parent().parent().find('.tag').hide()
                    $(this).parent().parent().append($('<input>').attr({
                        'class': 'non-tag',
                        'value': 'non-tag',
                        'type': 'hidden',
                        'name': 'sections[][value]'
                    }).val('non-tag'));
                }
            })
            .on('click', '.add-new-section', function (e) {
                e.preventDefault();
                var data = {
                    id: uuid++,
                    total_section: total_section++,
                };
                $('.no-items').hide();
                $('.movable-sections').append($template(data));
            })
            .on('click', '.add-new-slider', function (e) {
                e.preventDefault();
                var data = {
                    id: uuid++
                };
                $('.no-items').hide();
                $('.movable-sections-slider').append($templateSlider(data));
            })
            .on('click', '.btn-delete', function (e) {
                e.preventDefault();
                total_section--;
                if ($('.draggable').length < 1) {
                    $('.no-items').show();
                }
                $(this).closest('.draggable').remove();
            })
            .on('change', '.slide-upload', function (e) {
                var form = new FormData();
                form.append('file', $(this)[0].files[0]);
                form.append('source', 'store');
                form.append('source_id', 494);
                var ids = $(this).data('id');
                $('.overlay').show();
                axios.post('https://api2.satujuan.com/v1/media', form, {
                    headers: {
                        'Authorization': 'Bearer'
                    }
                }).then(function (res) {
                    if (res.data.meta.status) {
                        $('.slide-item-img-' + ids).attr('src', res.data.data.name.original);
                        $('.slide-item-input-' + ids).val(res.data.data.name.original);
                    } else {
                        swal('Oops!', app.handleError(res.data.error ? res.data.error : res.data
                            .meta.message, 'error'));
                    }
                    $('.overlay').hide();
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
