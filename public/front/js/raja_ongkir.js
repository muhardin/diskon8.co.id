// $(document).ready(function () {
			
//     $(".textbox").on("change", "#provinceID", function () {
//         console.log("okex")
//         var _this = $(this).val()
//         $.ajax({

//             url: "{{ route('rajaOngkir.getCity') }}",
//             cache: false,
//             type: "get",
//             data: {
//                 // _token: "{{ csrf_token() }}",
//                 provinceID: _this
//             },

//             success: function(data) {
//                 //location = data;
//                 console.log(data);
//                 // var options = '<option value="">Pilih Kota</option>';
//                 // $("#cityID").html('')
//                 // $.each(data, function (idx, val) {
//                 //     options += '<option value="'+ val["city_id"] +'">'+ val["city_name"] +'</option>'
//                 // })

//                 // $("#cityID").append(
//                 //     options
//                 // )
//             },
//             error: function($err){
//                 console.log($err)
//             },
//         })
//     })

//     // $(document).on("change", "#cityID", function () {
//     //     var _this = $(this).val()

//     //     $.ajax({

//     //         url: "{{ route('rajaOngkir.getSubdistrict') }}",
//     //         cache: false,
//     //         type: "get",
//     //         data: {
//     //             _token: "{{ csrf_token() }}",
//     //             cityID: _this
//     //         },

//     //         success: function(data) {
//     //             //location = data;
//     //             console.log(data);
//     //             var options = '<option value="">Pilih Kecamatan</option>';
//     //             $("#subdistrictID").html('')
//     //             $.each(data, function (idx, val) {
//     //                 options += '<option value="'+ val["subdistrict_id"] +'">'+ val["subdistrict_name"] +'</option>'
//     //             })

//     //             $("#subdistrictID").append(
//     //                     options
//     //             )
//     //         }
//     //     })
//     // })

//     // $(document).on("change", "#courierID", function () {
//     //     var _this = $(this).val() ,
//     //         subdistrictID = $("#subdistrictID").val()

//     //     $.ajax({

//     //         url: "{{ route('rajaOngkir.cost') }}",
//     //         cache: false,
//     //         type: "get",
//     //         data: {
//     //             _token: "{{ csrf_token() }}",
//     //             destination: subdistrictID,
//     //             courier: _this
//     //         },

//     //         success: function(data) {						
//     //             console.log(data);
//     //             var options = '<option value="">Pilih Pilihan Paket</option>';
//     //             $("#packageID").html('');

//     //             if(!data || data.length == 0){
                    
//     //                 $("#packageID").html('<option value="">Pilihan Paket tidak ditemukan</option>');
//     //             }else{

//     //             $.each(data, function (idx, val) {
//     //                 options += '<option value="'+ val["cost"][0]["value"] +'">'+ val["service"] + ' - ' + val["cost"][0]["etd"] +' Hari</option>'
//     //             })
//     //             $("#packageID").append(
//     //                     options
//     //             )
//     //             }

//     //         }
//     //     })
//     // })			
//     // $(document).on("change", "#packageID", function () {
//     //     var _this = $(this).val() ,
//     //         subtotal = $("#subtotal").val()

//     //     $("#Estimated").val(_this)
//     //     subtotal = parseInt(subtotal) + parseInt(_this)
//     //     $("#ongkir").html("Rp. " + parseInt(_this))
//     //     $("#total").html("Rp. " + parseInt(subtotal))
//     // })
//     // let token = "{{csrf_token()}}";
//     // $(document).on("click","#saveCheckout",function(){			
//     //     $.ajax({
//     //     type: "post",
//     //     url: "{{ route('checkout.checkoutStore') }}",
//     //     cache: false,
//     //     data: {
//     //         _token: "{{ csrf_token() }}",
//     //         orderID: $("input[name='orderID']").val(),
//     //         quantity: $("input[name='quantity']").val(),
//     //         address: $("textarea[name='address']").val(),

//     //         city_id: $("#cityID").val(),
//     //         province_id: $("#provinceID").val(),
//     //         subdistrict_id: $("#subdistrictID").val(),
//     //         name: $("input[name='name']").val(),
//     //         phone: $("input[name='phone']").val(),

//     //         courierID: $("#courierID").val(),
//     //         shipping_package: $("#packageID").val(),
//     //         subTotal: $("#subtotal").val()
//     //     },

//     //     success: function(data,status) {
//     //         snap.pay(data.snap_token, {
//     //         // Optional
//     //         onSuccess: function (result) {
//     //             location.reload();
//     //         },
//     //         // Optional
//     //         onPending: function (result) {
//     //             location.reload();
//     //         },
//     //         // Optional
//     //         onError: function (result) {
//     //             location.reload();
//     //         }
//     //     });						
//     //     }
//     //     })
//     // })			
// })