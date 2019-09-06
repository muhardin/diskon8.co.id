<script>
    const instance = axios.create({
            baseURL: 'https://api2.satujuan.com/v1',
            timeout: 30000,
            headers: {'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjM2MWE0YzgyNTU1YWZmOGMxM2M5MzY3NmIyOGVkMWRlYzQ3N2NkODY4YTdmM2YwOWFlMGMwYmE0NjFhNzEwZTFlMmY1OGI4NzQ0ZmFlNTU3In0.eyJhdWQiOiI1IiwianRpIjoiMzYxYTRjODI1NTVhZmY4YzEzYzkzNjc2YjI4ZWQxZGVjNDc3Y2Q4NjhhN2YzZjA5YWUwYzBiYTQ2MWE3MTBlMWUyZjU4Yjg3NDRmYWU1NTciLCJpYXQiOjE1NjQ4MTU2NjksIm5iZiI6MTU2NDgxNTY2OSwiZXhwIjoxNTk2NDM4MDY5LCJzdWIiOiIyMDQ3Iiwic2NvcGVzIjpbXX0.PutVhPQ0_y39k4298Q_0F9BJ9RBqlt8BvXNC37YOhIJp_h1kp_XX63yso8lZiK6OOfQGldEHdOOjKYp_V3v8zaBeAyM7SIdkfFIfHyB0Z2oBIgRIwxqpGJcUi2Jt7u1Eki6ig5bYWAzCzLkipRILTLExDCVLlB1y648PCop6IPD34C-789BgZiNG2j2faSUsr3EXeEa9sZBz1pPmwZJbs0sSGbPvjaZ2oVWa8ZDnzvULmk-CnRTckwdbSylo_GnobdkBM7GaTuLA4DkyXoWyeRZDBJz-U5xsChRQ8vfrgVIo6wIuYjE7-yq_zqWN2tGiEAxo8siVMMXWNP7uudal_u_hbsQrtZa-FejwDYvB2gxzLmxhkcFC0VMOzvFRQ-FRdz7aW6TE8sXFq8OkGxSvzterE1mQV2iQ2Y1pF6youKEsb5ENA9aaDLQTdfAzXTZCcMUrYSCVedVHVQ1FzckUocOdukDtdtFMbEpYSvLDuKdjZvwMfiTI_7Gj8PZu5YWjtErpJn1tXYnaoVgbH4goovCqKmZ-TKgyIxK3n0DVC4Le4ipFJe5-8bp7XQ3otrJpvgScSsE7jcZjQNRqhYk4MR6rGK4Xs4Pr3bJOEiZxDq5s3bV_btvfxRrj7NT8xTu5MiQJ5t2b53VP-WYYD6UQC4mZAjYZD_ZpD1wNKDuWb-A'}
        });
$(document).ready(function(){

    var simplemde = new SimpleMDE({
            element: $("#description")[0],
            placeholder: "Deskripsi Produk...",
            spellChecker: false,
            autosave: {
                enabled: false,
                uniqueId: "create-campaign-desc",
                delay: 500,
            }
        });
    $('.priceformat').priceFormat({
            prefix: 'Rp ',
            centsLimit: 0,
            centsSeparator: ',',
            thousandsSeparator: '.',
        });
    $('.btn-reset-desc').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        swal({
            title: 'Reset Deskripsi ?',
            text : 'Anda akan mereset deskripsi produk ke default',
            type : 'question',
            showCancelButton : true
        }).then(function (e) {
            if(e.value) {
                simplemde.value($this.data('text'));
            }
        });
    });
    $('.btn-nonactive').click(function(e){
        e.preventDefault();
        instance.patch(
                '/store/494/product/1727/status', {
                    status: 'non-active'
                }
            )
                .then(function(res) {
                    if(res.data.meta.status == true){
                        swal('Produk berhasil di Nonaktifkan', 'Success', 'success').then(function(){
                            window.location.reload();
                        });
                    } else {
                        swal('Produk gagal di Nonaktifkan', 'Alert', 'danger');
                    }

                })
                .catch(function(res) {
                    console.log(res);
                    swal('Ooops!', 'Gagal', 'error');
                })
    });

    $('.btn-active').click(function(e){
        e.preventDefault();
        instance.patch(
                '/store/494/product/1727/status',{
                    status: 'active'
                }
            )
                .then(function(res) {
                        if(res.data.meta.status == true){
                        swal('Produk berhasil di Nonaktifkan', 'Success', 'success').then(function(){
                            window.location.reload();
                        });
                    } else {
                        swal('Produk gagal di Nonaktifkan', 'Alert', 'danger');
                    }

                })
                .catch(function(res) {
                    console.log(res);
                    swal('Ooops!', 'Gagal', 'error');
                })
    })

    $('#sell_price_detail').blur(function(){
        var value = parseInt($(this).unmask());
        if(value < 154002) {
            swal('Oops','Harga Jual Tidak Boleh Kurang Dari Rp 154,002',  'warning');
            $('#profit').val(72249);
            $('#sell_price_detail').val(212250);
        } else {
            profit = value - 140001;
            $('#profit').val(profit);
        }

        $('.priceformat').priceFormat({
            prefix: 'Rp ',
            centsLimit: 0,
            centsSeparator: ',',
            thousandsSeparator: '.',
        });
    });

    $('#display_price').blur(function (e) {
        var display = parseInt($('#display_price').unmask());
        var sell_price_detail = parseInt($('#sell_price_detail').unmask());
        if(display <= sell_price_detail) {
            swal('Oops', 'Harga Coret Harus Diatas Harga Jual', 'info').then(function (params) {
                $('#display_price').val(sell_price_detail);
                $('.priceformat').priceFormat({
                    prefix: 'Rp ',
                    centsLimit: 0,
                    centsSeparator: ',',
                    thousandsSeparator: '.',
                });
            });
        }
    });

    $('#updateProduct').submit(function(e){
        e.preventDefault();
        var data = $(this).serializeObject();
        data.price = parseInt($('#sell_price_detail').unmask());
        data.display_price = parseInt($('#display_price').unmask());
        instance.patch(
                '/store/494/product/1727',data
            )
                .then(function(res) {
                        if(res.data.meta.status == true){
                        swal( 'Success','Produk berhasil di Update', 'success').then(function(){
                            window.location.reload();
                        });
                    } else {
                        swal( 'Oops', 'Produk gagal di update', 'error');
                    }

                })
                .catch(function(res) {
                    console.log(res);
                    swal('Ooops!',  'Gagal', 'error');
                })
    });

});
</script>