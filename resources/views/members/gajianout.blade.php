@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h3> Gajian </h3>
                    <div class="element-content">
                        <!-- Total, Sisa, dan Dicairkan -->
                        <div class="row">
                            <div class="col-sm-4">
                                <a class="element-box el-tablo" href="#">
                                    <div class="label"> Saldo Outstanding </div>
                                    <div class="value">Rp 0</div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="element-box el-tablo" href="#">
                                    <div class="label"> Saldo Tersedia </div>
                                    <div class="value">Rp 0 </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="element-box el-tablo" href="#">
                                    <div class="label">
                                        Sudah Dicairkan
                                    </div>
                                    <div class="value">
                                        Rp 0
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="element-box-tp">
                        <!--------------------
    START - Controls Above Table
    -------------------->

                        <div class="os-tabs-w p-0">
                            <div class="os-tabs-controls mb-4">
                                <ul class="nav nav-tabs upper">
                                    <li class="nav-item">
                                        <a aria-expanded="false" class="nav-link active"
                                            href="https://incerz.com/admin/payout">Mutasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-expanded="false" class="nav-link "
                                            href="https://incerz.com/admin/payout/request">Request Pencairan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="controls-above-table">
                            <div class="row">
                                <div class="col-sm-6">
                                    <form class="form-inline">
                                        <div class="row">
                                            <div class="col-6">
                                                <select class="form-control form-control-sm bright px-4 date">
                                                    <option value="" data-start="2019-06-08" data-end="2019-06-15"
                                                        selected="selected">
                                                        7 Hari Terakhir
                                                    </option>
                                                    <option value="Pending" data-start="2019-06-01"
                                                        data-end="2019-06-15">
                                                        14 Hari Terakhir
                                                    </option>
                                                    <option value="Active" data-start="2019-06-01"
                                                        data-end="2019-06-15">
                                                        1 Bulan Terakhir
                                                    </option>
                                                </select>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <div class="element-actions">
                                        <a class="btn btn-primary trigger-button" href="#">Tarik Dana</a>
                                        <div id="dimmer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Popup tarikdana -->
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="element-box popup invisible-box">
                                    <div class="header">
                                        <h5>Saldo Tersedia: Rp 0</h5>
                                        <div class="os-progress-bar primary">
                                            <div class="bar-labels">
                                            </div>
                                            <div class="bar-level-1" style="width: 100%">
                                                <div class="bar-level-3" style="width: 8%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="m-2" id="form-payout" novalidate="true">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Jumlah Penarikan</label>
                                            <input type="text" class="form-control" id="nominal" name="nominal"
                                                placeholder="Masukkan Jumlah Penarikan">
                                        </div>



                                        <div class="alert alert-warning rounded-0 my-3" style="display:none">
                                            <div class="row">
                                                <div class="col-6 font-weight-bold">
                                                    Pajak
                                                </div>
                                                <div class="col-6 item-pajak"></div>
                                                <div class="col-6 font-weight-bold">
                                                    Total
                                                </div>
                                                <div class="col-6 item-subtotal text-success font-weight-bold"></div>
                                            </div>
                                        </div>
                                        <div class="footer mt-3">
                                            <div class="label mb-3">Note : <br>- Proses penarikan saldo min. Rp100.000
                                                <br>- Proses penarikan saldo 3 hari kerja (Sabtu-Minggu Tidak Dihitung)
                                            </div>
                                            <button class="btn btn-outline-primary mx-2 pull-right"
                                                type="submit">Konfirmasi</button>
                                            <a href="#"
                                                class="btn btn-outline-info mx-2 pull-right cancel-button">Batal</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <!--------------------
END - Controls Above Table
--------------------->
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg table-v2 table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Detail
                                        </th>
                                        <th>
                                            Nominal
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            Anda belum memiliki history penarikan dana
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-extra')
<script > 
!function(e, n, o) {
    function s(e) {
        var n = r.className,
            o = Modernizr._config.classPrefix || "";
        if (l && (n = n.baseVal), Modernizr._config.enableJSClass) {
            var s = new RegExp("(^|\\s)" + o + "no-js(\\s|$)");
            n = n.replace(s, "$1" + o + "js$2")
        }
        Modernizr._config.enableClasses && (n += " " + o + e.join(" " + o), l ? r.className.baseVal = n : r.className = n)
    }

    function t(e, n) {
        return typeof e === n
    }

    function a() {
        var e, n, o, s, a, r, l;
        for (var c in f)
            if (f.hasOwnProperty(c)) {
                if (e = [], n = f[c], n.name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length))
                    for (o = 0; o < n.options.aliases.length; o++) e.push(n.options.aliases[o].toLowerCase());
                for (s = t(n.fn, "function") ? n.fn() : n.fn, a = 0; a < e.length; a++) r = e[a], l = r.split("."), 1 === l.length ? Modernizr[l[0]] = s : (!Modernizr[l[0]] || Modernizr[l[0]] instanceof Boolean || (Modernizr[l[0]] = new Boolean(Modernizr[l[0]])), Modernizr[l[0]][l[1]] = s), i.push((s ? "" : "no-") + l.join("-"))
            }
    }
    var i = [],
        r = n.documentElement,
        l = "svg" === r.nodeName.toLowerCase(),
        f = [],
        c = {
            _version: "3.6.0",
            _config: {
                classPrefix: "",
                enableClasses: !0,
                enableJSClass: !0,
                usePrefixes: !0
            },
            _q: [],
            on: function(e, n) {
                var o = this;
                setTimeout(function() {
                    n(o[e])
                }, 0)
            },
            addTest: function(e, n, o) {
                f.push({
                    name: e,
                    fn: n,
                    options: o
                })
            },
            addAsyncTest: function(e) {
                f.push({
                    name: null,
                    fn: e
                })
            }
        },
        Modernizr = function() {};
    Modernizr.prototype = c, Modernizr = new Modernizr, Modernizr.addTest("promises", function() {
        return "Promise" in e && "resolve" in e.Promise && "reject" in e.Promise && "all" in e.Promise && "race" in e.Promise && function() {
            var n;
            return new e.Promise(function(e) {
                n = e
            }), "function" == typeof n
        }()
    }), Modernizr.addTest("localstorage", function() {
        var e = "modernizr";
        try {
            return localStorage.setItem(e, e), localStorage.removeItem(e), !0
        } catch (n) {
            return !1
        }
    }), a(), s(i), delete c.addTest, delete c.addAsyncTest;
    for (var u = 0; u < Modernizr._q.length; u++) Modernizr._q[u]();
    e.Modernizr = Modernizr
}(window, document); </script>
<script type = "text/javascript" >
    $(document).ready(function() {
        $('.tooltipd').tooltip({
            boundary: 'window'
        });
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
        $('#nominal, .priceformat').priceFormat({
            prefix: 'Rp ',
            centsLimit: 0,
            centsSeparator: ',',
            thousandsSeparator: '.',
        });
        $('#nominal').keyup(_.debounce(function(e) {
            var nominal = $('#nominal').unmask();
            if (nominal < 100000) {
                return swal('Oops!', 'Nominal minimum untuk payout Rp 100.000', 'info');
            } else if (nominal > 0) {
                return swal('Oops!', 'Nominal melebihi saldo yang ada', 'info');
            }
            axios.post('https://api.satujuan.com/v1/payout/store/494/check', {
                nominal: nominal,
                bank_id: 101
            }, {
                headers: {
                    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI5ZDI3YTlmZTc3ZjMxOGM1YmQ1M2U5YzJiZWI0NDU3NDBkYWM2MTY0MWNmODg2ZjdkNmM5ZGZhNmI2MWRlMTI3MWIzYjQ5ZWVlODA5YzFiIn0.eyJhdWQiOiI1IiwianRpIjoiYjlkMjdhOWZlNzdmMzE4YzViZDUzZTljMmJlYjQ0NTc0MGRhYzYxNjQxY2Y4ODZmN2Q2YzlkZmE2YjYxZGUxMjcxYjNiNDllZWU4MDljMWIiLCJpYXQiOjE1NjA1ODIwNjUsIm5iZiI6MTU2MDU4MjA2NSwiZXhwIjoxNTkyMjA0NDY1LCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.R1i42NAnC04tn2Z6nsx7UC6ipyBSKphe9e9lgg3lmBlsLQFjrFr7uJ6i3EEaYbfjw_corK2JgJz4E9_yT_RxsYNveINIeVlnBnKUlo0LsrwaVtbDXGsraCpJD7Qj5lFpkD23wuxd6WawtzB-YFiH01ikeD3l3MEey7H-RiP7CnDO9eSwXdNLUNX2_yuBvlrQSZeyBWAxjBDdaiLi-5ukHCVE_bifMbl43w5qeEwNqzHxaHjPBmyi1KZE2-1IzDA4PDo29owrmblMDu13p6NDS6i2EWsfdB7pNpt8ypJ4CxfVgf6xmg7Z2m2fO1iy-bRN1k4wx9NXv2NhiqlUsvlQjAbeaNl0V-g2koPbwVyrcOE9Yd5nnfG-JBsrAtdythDB-Y90v7InijP6yxF_gUwSKsMs_kj35V88YmP7fFTQDXgBPCw2nBWqlxrNYvwcc72tMzGDXhzhsbiY-y1ZWikSGt9ooypW557snmYUl0-DmDUG96YVToAc89Xrnpuf1Amdq4oNjvviHt5-ezpq_1bCLu_l8fZbSVXfXCFcqjI4zqLt0COxqXHQahuwOM6kRCS5Je7j1EDtqzY93U4mS-HM70l5mbPDLMdpY-Iah9XahsBoTOFmYVtkpem1RJtQcSIGbjnQCBivFSNq9fJ76Zl9LFybsgk96ZV32tSX7_HDVe8'
                }
            }).then(function(response) {
                $('.overlay').hide();
                if (response.data.meta.status) {
                    $('.item-pajak').html('<span class="priceformat">' + response.data.data.tax + '</span>');
                    $('.item-subtotal').text(response.data.data.total).priceFormat({
                        prefix: 'Rp ',
                        centsLimit: 0,
                        centsSeparator: ',',
                        thousandsSeparator: '.',
                    });
                    $('.priceformat').priceFormat({
                        prefix: 'Rp ',
                        centsLimit: 0,
                        centsSeparator: ',',
                        thousandsSeparator: '.',
                    });
                    $('.alert').show();
                } else {
                    swal('Oops!', app.handleError(response.data.error ? response.data.error : response.data.meta.message, 'info'));
                }
            }).catch(function(error) {
                $('.overlay').hide();
                console.log(error);
                swal('Maaf', 'Terjadi kesalahan dalam saat proses penyimpanan, coba beberapa saat lagi, atau kontak CS', 'warning');
            });
        }, 1000));
        $('.filter').change(function(params) {
            var url = window.location.href;
            url = app.updateUrl(url, 'filter', $(this).val());
            window.location = url;
        });
        $('.date').change(function(params) {
            var url = window.location.href;
            url = app.updateUrl(url, 'start_at', $(this).find('option:selected').data('start'));
            url = app.updateUrl(url, 'end_at', $(this).find('option:selected').data('end'));
            window.location = url;
        });
        $('#form-payout').validator().submit(function(e) {
            e.preventDefault();
            var data = $(this).serializeObject();
            data.nominal = Number($('#nominal').unmask());
            data.bank_id = 101;
            if (data.nominal < 100000) {
                return swal('Oops!', 'Nominal minimum untuk payout Rp 100.000', 'info');
            } else if (data.nominal > 0) {
                return swal('Oops!', 'Nominal melebihi saldo yang ada', 'info');
            }
            $('.overlay').show();
            axios.post('https://api.satujuan.com/v1/payout/store/494', data, {
                headers: {
                    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI5ZDI3YTlmZTc3ZjMxOGM1YmQ1M2U5YzJiZWI0NDU3NDBkYWM2MTY0MWNmODg2ZjdkNmM5ZGZhNmI2MWRlMTI3MWIzYjQ5ZWVlODA5YzFiIn0.eyJhdWQiOiI1IiwianRpIjoiYjlkMjdhOWZlNzdmMzE4YzViZDUzZTljMmJlYjQ0NTc0MGRhYzYxNjQxY2Y4ODZmN2Q2YzlkZmE2YjYxZGUxMjcxYjNiNDllZWU4MDljMWIiLCJpYXQiOjE1NjA1ODIwNjUsIm5iZiI6MTU2MDU4MjA2NSwiZXhwIjoxNTkyMjA0NDY1LCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.R1i42NAnC04tn2Z6nsx7UC6ipyBSKphe9e9lgg3lmBlsLQFjrFr7uJ6i3EEaYbfjw_corK2JgJz4E9_yT_RxsYNveINIeVlnBnKUlo0LsrwaVtbDXGsraCpJD7Qj5lFpkD23wuxd6WawtzB-YFiH01ikeD3l3MEey7H-RiP7CnDO9eSwXdNLUNX2_yuBvlrQSZeyBWAxjBDdaiLi-5ukHCVE_bifMbl43w5qeEwNqzHxaHjPBmyi1KZE2-1IzDA4PDo29owrmblMDu13p6NDS6i2EWsfdB7pNpt8ypJ4CxfVgf6xmg7Z2m2fO1iy-bRN1k4wx9NXv2NhiqlUsvlQjAbeaNl0V-g2koPbwVyrcOE9Yd5nnfG-JBsrAtdythDB-Y90v7InijP6yxF_gUwSKsMs_kj35V88YmP7fFTQDXgBPCw2nBWqlxrNYvwcc72tMzGDXhzhsbiY-y1ZWikSGt9ooypW557snmYUl0-DmDUG96YVToAc89Xrnpuf1Amdq4oNjvviHt5-ezpq_1bCLu_l8fZbSVXfXCFcqjI4zqLt0COxqXHQahuwOM6kRCS5Je7j1EDtqzY93U4mS-HM70l5mbPDLMdpY-Iah9XahsBoTOFmYVtkpem1RJtQcSIGbjnQCBivFSNq9fJ76Zl9LFybsgk96ZV32tSX7_HDVe8'
                }
            }).then(function(response) {
                $('.overlay').hide();
                if (response.data.meta.status) {
                    swal('Berhasil', response.data.meta.message, 'success').then(function(params) {
                        window.location.reload();
                    })
                } else {
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
