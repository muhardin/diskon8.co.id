@php
        $this->baseUrl = App::make('url')->to('/');
        $this->dataShop = DB::table('shops')->where('domain', $this->baseUrl)->first();
        //$shop_ = \App\Shop::where('user_id',\Auth::user()->id)->first();
@endphp
<!DOCTYPE html>
<html style="font-size: 100px;">
<head>
<title>{{@$this->dataShop->company_name}}</title>
<META content="diskon,produk,harga diskon,gila diskon,harga-diskon,butik,belanja,diskon,ultimate246.com" name="keywords">
<META content="Diskon belanja online Indonesia!" name="description">
<META content="index,follow" name="robots">
<META content="index,follow" name="GOOGLEBOT">
<META content="Diskon"  name="Author">
<META content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport" >
<link rel="icon" href="{{asset('images/'.@$this->dataShop->favicon)}}">
<link rel="stylesheet" type="text/css" href="front/static/css/index/sy.css">
<link rel="stylesheet" href="front/static/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="front/static/css/index/index_add.css">
<link rel="stylesheet" href="front/css/index.css?v=1563944342448">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

<script src="front/static/js/jquery.min.js"></script>
<script src="front/static/js/swiper.min.js"></script>
<script src="front/static/js/base.js"></script>
<script src="front/static/js/jquery.cookie.js"></script>
<script src="front/static/js/iscroll.js"></script>
<script src="front/static/ajax/layer.js"></script>
<script src="front/static/ajax/vue.min.js"></script>
<script src="front/js/ajax_ext.js?v=1563944342448"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style type="text/css">.hidden{display:none;}</style>

  
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  {{--<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
  </script> --}}
@if(Session::get('success'))
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
             </div>
            
            <div class="modal-body">
               
                <div class="thank-you-pop">
                    <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                    <h2>Terima Kasih !</h2>
                    <p>Order Anda Akan Segera Kami Proses Check email anda untuk langkah selanjutnya</p>
                    <!-- <h3 class="cupon-pop">Order Id: <span>12345</span></h3> -->
                 </div>
                 
            </div>

            <div class="modal-body text-center">
                 <a href="{{url('/')}}" class="rd_more btn btn-default">Go to Home</a>
             </div>
            
        </div>
    </div>
</div>
@endif
<script type="text/javascript">
  $(window).on('load',function(){
    @if(Session::get('success'))
      $('#myModal').modal('show');
      refresh: true;
      //location.reload();
    @endif
  });
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ae32568e7dcc444400cb9cc48263f641";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body class="hidden">
  
@yield('content')

<script src="{{asset('front/js/dec_api.js?v=1563944342448')}}"></script>
<script src="{{asset('front/js/index.js?v=1563944342448')}}"></script>

<div style="display:none;"></div>
<style>
    /*--thank you pop starts here--*/
    .thank-you-pop{
        width:100%;
         padding:20px;
        text-align:center;
    }
    .thank-you-pop img{
        width:76px;
        height:auto;
        margin:0 auto;
        display:block;
        margin-bottom:25px;
    }
    
    .thank-you-pop h1{
        font-size: 42px;
        margin-bottom: 25px;
        color:#5C5C5C;
    }
    .thank-you-pop p{
        font-size: 20px;
        margin-bottom: 27px;
         color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
        font-size: 25px;
        margin-bottom: 40px;
        color:#222;
        display:inline-block;
        text-align:center;
        padding:10px 20px;
        border:2px dashed #222;
        clear:both;
        font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
        color:#03A9F4;
    }
    .thank-you-pop a{
        display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
        margin-right:5px;
        color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    /*--thank you pop ends here--*/
    </style>
<!--
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2eugIfOMBHS694tTmdncRrq9OG%2fizvNfas7YrnvRYSyo6k3b0FUKbUORttPxyqXNInS%2bXV3sXyzeSKzv6flLv2RvwgKFkb8SZGEXgY8Rh6vUTDOSs%2fv5u533%2bkPhR2%2fNUywZWi201v8NW%2fiMi4lP9vuQ98qB37SMS8ecVr0W%2bgU5Ef%2fpFTFo4yMMcMZbo9%2fIsJi1%2bwzFbYAwBlWgnmW5PoPZsEdkog33T%2b65iloQhITCFBhsmO9h%2fnoHESsjrUkotmEYbXTBpi0k5EON5H0S4fMOy5FcPdrZFfgKQzrn2duZH8BW3cViJbIg5LSGawyP4h79KZwcKAANGRIHyo5aHfyS8VG69KVqeiesJNgTGV%2bQvEVUaogiz4e119DGDJLm75npnx8qYaCWCWLl1vnJOjJVXLXNk79kbotXyHrt6oXcAPp5zRZDfKVVToUtSrLusyHeRkh2xtWU39riNI2JAyBKVbcFTKZM%2fhoEHVihIPPw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
-->

</body>
</html>
