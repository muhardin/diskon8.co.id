@extends('layouts.member_layout')
@section('content')
<div class="content-i">
    <div class="content-box">

        <div class="element-wrapper">
            <div class="element-actions">
                <form class="form-inline justify-content-sm-end">
                    <input type="text" class="form-control rounded" id="report-range">
                </form>
            </div>
            <h3 class="element-header">
Dashboard
</h3>
            <div class="element-balances justify-content-between mobile-full-width">
                <div class="balance balance-v2 col-md-8">
                    <div class="element-box">
                        <div class="balance-title">
                            Profit
                        </div>
                        <div class="balance-value">
                            <span id="totalProfit" style="font-size: 4.8rem" class="priceformat"></span>
                        </div>
                    </div>
                </div>
                <div class="balance-table col-md-4 pl-sm-2 text-center">
                    <div class="row">
                        <div class="col-6">
                            <div class="element-box" style="padding: .5rem;">
                                <div class="balance-value" style="font-size: 1.2rem">
                                    <span id="TotalQty"></span>
                                </div>
                                <div class="balance-title" style="font-size: 1rem">
                                    Item Terjual
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="element-box" style="padding: .5rem;">
                                <div class="balance-value" style="font-size: 1.2rem">
                                    <span id="TotalOrder"></span>
                                </div>
                                <div class="balance-title" style="font-size: 1rem">
                                    Transaksi
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="element-box" style="padding: .5rem;">
                                <div class="balance-value" style="font-size: 1.2rem">
                                    <span id="TotalVisitor"></span>
                                </div>
                                <div class="balance-title" style="font-size: 1rem">
                                    Pengunjung
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="element-box" style="padding: .5rem;">
                                <div class="balance-value" style="font-size: 1.2rem">
                                    <span id="TotalProduct"></span>
                                </div>
                                <div class="balance-title" style="font-size: 1rem">
                                    Produk
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="element-box mt-3">
                        <div class="os-tabs-w">
                            <div class="os-tabs-controls">
                                <ul class="nav nav-tabs smaller">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab_overview">Overview</a>
                                    </li>

                                </ul>

                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_overview">

                                    <div class="el-chart-w">
                                        <canvas height="200px" id="lineChart" width="600px"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!--START - Top Selling Chart-->
                <div class="element-wrapper">
                    <h6 class="element-header"> Ikhtisar </h6>
                    <div class="element-box">
                        <div class="tab-pane active" id="tab_detail">
                            <div class="table-responsive">
                                <table class="table table-lightborder table-td--break" id="table-summary">
                                    <thead>
                                        <tr>
                                            <th width="200">Name</th>
                                            <th>Visitor</th>
                                            <th>Qty</th>
                                            <th>Profit</th>
                                        </tr>
                                    </thead>
                                    <tbody id="detail-summary">
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!--END - Top Selling Chart-->
            </div>
            <div class="col-sm-6">
                <!--START - Top Selling Chart-->
                <div class="element-wrapper">
                    <h6 class="element-header"> Referrer </h6>
                    <div class="element-box">
                        <div class="os-tabs-w">
                            <div class="os-tabs-controls">
                                <ul class="nav nav-tabs smaller">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab_detail_ref">Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">

                                <div class="tab-pane active" id="tab_detail_ref">
                                    <div class="table-responsive">
                                        <table class="table table-lightborder table-td--break" id="table-referrer">
                                            <thead>
                                                <tr>
                                                    <th width="200">Name</th>
                                                    <th>Value</th>
                                                </tr>
                                            </thead>
                                            <tbody id="detail-ref">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END - Top Selling Chart-->
            </div>
            <div class="col-sm-6">
                <!--START - Top Selling Chart-->
                <div class="element-wrapper">
                    <h6 class="element-header"> Location </h6>
                    <div class="element-box">
                        <div class="os-tabs-w">
                            <div class="os-tabs-controls">
                                <ul class="nav nav-tabs smaller">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab_detail">Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_detail">
                                    <div class="table-responsive">
                                        <table class="table table-lightborder table-td--break" id="table-location">
                                            <thead>
                                                <tr>
                                                    <th width="200">Name</th>
                                                    <th>Value</th>
                                                </tr>
                                            </thead>
                                            <tbody id="detail-location">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--END - Top Selling Chart-->
            </div>
        </div>
    </div>
    <div class="content-panel">
        <div class="element-wrapper">
            <h6 class="element-header">
Kunjungan
</h6>
            <div class="element-box">
                <div class="os-tabs-w">
                    <div class="os-tabs-controls">
                        <ul class="nav nav-tabs smaller">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab_chart">Chart</a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_chart">
                            <div class="el-chart-w">
                                <canvas height="120" id="donutChart" width="120"></canvas>
                                <div class="inside-donut-chart-label">
                                    <span><strong class="data-os"></strong> Kunjungan</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_detail"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--END - Top Selling Chart-->

    </div>
</div>
@endsection

@section('script-extra')
<script>
    $(document).ready(function(params) {
        var apiVisitor      = 'https://incerz.satujuan.id/admin/api/dashboard/visitor';
        var apiOS           = 'https://incerz.satujuan.id/admin/api/dashboard/os';
        var apiReferral     = 'https://incerz.satujuan.id/admin/api/dashboard/referral?type=table';
        var apiLocation     = 'https://incerz.satujuan.id/admin/api/dashboard/location?type=table';
        var apiSummary      = 'https://ultimate246.com/admin/api/dashboard/summary?type=table';
        var apiSummary2     = "{{url('api/dashboard/summary?user='.Auth::user()->id)}}";
        var tableLocation   = $('#table-location').DataTable({
            info: false,
            searching: false,
            lengthChange: false,
            pageLength: 5
        });
        var tableReferrer = $('#table-referrer').DataTable({
            info: false,
            searching: false,
            lengthChange: false,
            pageLength: 5
        });
        var tableSummary = $('#table-summary').DataTable({
            info: false,
            searching: false,
            lengthChange: false,
            pageLength: 5
        });
        var elLoader = {
            loading: function($target) {
                var $parent = $target.closest('.tab-content');
                var $loadingScreen = $('<div>').addClass('w-100 text-center loading-el').css({
                    position: 'absolute',
                    top: '10%',
                    'z-index': 222,
                    opacity: 1
                }).append($('<i>').addClass('fa fa-spinner fa-pulse fa-4x fa-fw'));
                $parent.css({
                    position: 'relative',
                    opacity: .4
                });
                $parent.append($loadingScreen);
            },
            done: function($target) {
                var $parent = $target.closest('.tab-content');
                $parent.css({
                    opacity: 1
                });
                $parent.find('.loading-el').remove();
            }
        }

        function loadData() {
            if ($("#donutChart").length) {
                var donutChart = $("#donutChart");
                if (window.cDonut) {
                    window.cDonut.destroy();
                } else {
                    window.cDonut = '';
                }
                elLoader.loading($('.data-os'));
                axios.get(apiOS).then(function(res) {
                    elLoader.done($('.data-os'));
                    if (res.data.data.total_visitor > 0) {
                        $('.data-os').text(res.data.data.total_visitor);
                        var data = {
                            labels: res.data.data.label,
                            datasets: [{
                                data: res.data.data.visitor,
                                backgroundColor: res.data.data.color,
                                borderWidth: 0
                            }]
                        };
                        window.cDonut = new Chart(donutChart, {
                            type: 'doughnut',
                            data: data,
                            options: {
                                legend: {
                                    display: false
                                },
                                animation: {
                                    animateScale: true
                                },
                                cutoutPercentage: 80
                            }
                        });
                    }
                }).catch(function(error) {
                    elLoader.loading($('.data-os'));
                    console.log(error);
                    //swal('Maaf', 'Terjadi kesalahan dalam saat proses pengambilan data, coba beberapa saat lagi, atau kontak CS', 'warning');
                });
            }
            if ($("#lineChart").length) {
                var lineChart = $("#lineChart");
                if (window.myLineChart) {
                    window.myLineChart.destroy();
                } else {
                    window.myLineChart = '';
                }
                elLoader.loading($('.data-visitor'));
                axios.get(apiVisitor).then(function(res) {
                    elLoader.done($('.data-visitor'));
                    var lineData = {
                        labels: res.data.data.visitor ? res.data.data.visitor.label : [],
                        datasets: [{
                            label: "Visitor",
                            fill: false,
                            lineTension: 0.3,
                            backgroundColor: "#fff",
                            borderColor: "#047bf8",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "#fff",
                            pointBackgroundColor: "#141E41",
                            pointBorderWidth: 3,
                            pointHoverRadius: 10,
                            pointHoverBackgroundColor: "#FC2055",
                            pointHoverBorderColor: "#fff",
                            pointHoverBorderWidth: 3,
                            pointRadius: 5,
                            pointHitRadius: 10,
                            data: res.data.data.visitor ? res.data.data.visitor.data : [],
                            spanGaps: false
                        }, {
                            label: "Sales",
                            fill: false,
                            lineTension: 0.3,
                            backgroundColor: "#fff",
                            borderColor: "#f00",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "#fff",
                            pointBackgroundColor: "#141E41",
                            pointBorderWidth: 3,
                            pointHoverRadius: 10,
                            pointHoverBackgroundColor: "#FC2055",
                            pointHoverBorderColor: "#fff",
                            pointHoverBorderWidth: 3,
                            pointRadius: 5,
                            pointHitRadius: 10,
                            data: res.data.data.sales ? res.data.data.sales.data : [],
                            spanGaps: false
                        }, ]
                    };
                    window.myLineChart = new Chart(lineChart, {
                        type: 'line',
                        data: lineData,
                        options: {
                            legend: {
                                display: false
                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        fontSize: '11',
                                        fontColor: '#969da5'
                                    },
                                    gridLines: {
                                        color: 'rgba(0,0,0,0.05)',
                                        zeroLineColor: 'rgba(0,0,0,0.05)'
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                    }
                                }]
                            }
                        }
                    });
                }).catch(function(error) {
                    $('.overlay').hide();
                    console.log(error);
                    //swal('Maaf', 'Terjadi kesalahan dalam saat proses pengambilan data, coba beberapa saat lagi, atau kontak CS', 'warning');
                });
            }
            elLoader.loading($('#detail-location'));
            axios.get(apiLocation).then(function(res) {
                elLoader.done($('#detail-location'));
                if (res.data.data.length > 0) {
                    tableLocation.destroy();
                    $('#detail-location').html('');
                    $.each(res.data.data, function(i, val) {
                        $('#detail-location').append($('<tr>').append($('<td>').text(val.country + ', ' + val.province)).append($('<td>').text(val.visitor)))
                    });
                    tableLocation = $('#table-location').DataTable({
                        info: false,
                        searching: false,
                        lengthChange: false,
                        pageLength: 5
                    });
                }
            }).catch(function(error) {
                elLoader.done($('#detail-location'));
                console.log(error);
                //swal('Maaf', 'Terjadi kesalahan dalam saat proses pengambilan data, coba beberapa saat lagi, atau kontak CS', 'warning');
            });
            elLoader.loading($('#detail-ref'));
            axios.get(apiReferral).then(function(res) {
                elLoader.done($('#detail-ref'));
                if (res.data.data.length > 0) {
                    $('#detail-ref').html('');
                    tableReferrer.destroy();
                    $.each(res.data.data, function(i, val) {
                        $('#detail-ref').append($('<tr>').append($('<td>').text(val.url)).append($('<td>').text(val.visitor)))
                    });
                    tableReferrer = $('#table-referrer').DataTable({
                        info: false,
                        searching: false,
                        lengthChange: false,
                        pageLength: 5
                    });
                }
            }).catch(function(error) {
                elLoader.done($('#detail-ref'));
                console.log(error);
                //swal('Maaf', 'Terjadi kesalahan dalam saat proses pengambilan data, coba beberapa saat lagi, atau kontak CS', 'warning');
            });
            elLoader.loading($('#detail-summary'));
            axios.get(apiSummary).then(function(res) {
                elLoader.done($('#detail-summary'));
                if (res.data.data.data.length > 0) {
                    tableSummary.destroy();
                    $('#detail-summary').html('');
                    $.each(res.data.data.data, function(i, val) {
                        $('#detail-summary').append($('<tr>').append($('<td>').html('<a href="https://ultimate246.com/admin/product/' + val.id + '">' + val.name + '</a>')).append($('<td>').text(val.visitor)).append($('<td>').text(val.quantity)).append($('<td>').text(val.profit).addClass('priceformat')))
                    });
                    tableSummary = $('#table-summary').DataTable({
                        info: false,
                        searching: false,
                        lengthChange: false,
                        pageLength: 5
                    });
                    $('.priceformat').priceFormat({
                        prefix: 'Rp ',
                        centsLimit: 0,
                        centsSeparator: ',',
                        thousandsSeparator: '.',
                    });
                }
            }).catch(function(error) {
                elLoader.done($('#detail-ref'));
                console.log(error);
                //swal('Maaf', 'Terjadi kesalahan dalam saat proses pengambilan data, coba beberapa saat lagi, atau kontak CS', 'warning');
            });
            axios.get(apiSummary2).then(function(res) {
                console.log(res);
                $('#totalProfit').html(res.data.data.profit);
                $('#TotalQty').html(res.data.data.quantity);
                $('#TotalOrder').html(res.data.data.sales);
                $('#TotalVisitor').html(res.data.data.visitor);
                $('#TotalProduct').html(res.data.data.product);
                $('.priceformat').priceFormat({
                    prefix: 'Rp ',
                    centsLimit: 0,
                    centsSeparator: ',',
                    thousandsSeparator: '.',
                });
            }).catch(function(error) {
                elLoader.done($('#detail-ref'));
                console.log(error);
                swal('Maaf', 'Terjadi kesalahan dalam saat proses pengambilan data, coba beberapa saat lagi, atau kontak CS', 'warning');
            });
        }
        $('#report-range').daterangepicker({
            startDate: moment().subtract(7, 'days'),
            endDate: moment(),
            opens: 'left',
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, function(startx, endx) {
            apiLocation = app.updateUrl(apiLocation, 'start', moment(startx).format('YYYY-MM-DD'));
            apiLocation = app.updateUrl(apiLocation, 'end', moment(endx).format('YYYY-MM-DD'));
            apiReferral = app.updateUrl(apiReferral, 'start', moment(startx).format('YYYY-MM-DD'));
            apiReferral = app.updateUrl(apiReferral, 'end', moment(endx).format('YYYY-MM-DD'));
            apiVisitor = app.updateUrl(apiVisitor, 'start', moment(startx).format('YYYY-MM-DD'));
            apiVisitor = app.updateUrl(apiVisitor, 'end', moment(endx).format('YYYY-MM-DD'));
            apiSummary = app.updateUrl(apiSummary, 'start', moment(startx).format('YYYY-MM-DD'));
            apiSummary = app.updateUrl(apiSummary, 'end', moment(endx).format('YYYY-MM-DD'));
            apiSummary2 = app.updateUrl(apiSummary2, 'start', moment(startx).format('YYYY-MM-DD'));
            apiSummary2 = app.updateUrl(apiSummary2, 'end', moment(endx).format('YYYY-MM-DD'));
            apiOS = app.updateUrl(apiOS, 'start', moment(startx).format('YYYY-MM-DD'));
            apiOS = app.updateUrl(apiOS, 'end', moment(endx).format('YYYY-MM-DD'));
            loadData();
        });
        loadData();
    });
</script>   
@endsection
    