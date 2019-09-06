function getNowFormatDate() {
    var date = new Date();
    var seperator1 = "-";
    var seperator2 = ":";
    var month = date.getMonth() + 1;
    var strDate = date.getDate();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
    return currentdate;
}
function GetDateStr(AddDayCount) {
    var dd = new Date();
    dd.setDate(dd.getDate()+AddDayCount);//获取AddDayCount天后的日期
    var y = dd.getFullYear();
    var m = dd.getMonth()+1;//获取当前月份的日期
    var d = dd.getDate();
    return y+"-"+m+"-"+d;
}
$(".rf2").html(GetDateStr(-1));//昨天
$(".rf1").html(GetDateStr(0));//今天



$(function() {
	//评论滚动
	var speed = 30;
	var colee2 = document.getElementById("colee2");
	var colee1 = document.getElementById("colee1");
	var colee = document.getElementById("colee");
	colee2.innerHTML = colee1.innerHTML; //克隆colee1为colee2  
	function Marquee1() {
		
		if(colee.scrollTop >= colee1.offsetHeight) {
			colee.scrollTop = 0;
		} else {
			colee.scrollTop++;
		}
	}
	var MyMar1 = setInterval(Marquee1, speed) //设置定时器  
	//鼠标移上时清除定时器达到滚动停止的目的  
	colee.onmouseover = function() {
		clearInterval(MyMar1)
	}
	//鼠标移开时重设定时器  
	colee.onmouseout = function() {
		MyMar1 = setInterval(Marquee1, speed)
	}
	
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	$(window).scroll(function() {
		if($(window).scrollTop() > 800) {
			$("#back_top").fadeIn(1000);
		} else {
			$("#back_top").fadeOut(1000);
		}
	});

	//当点击跳转链接后，回到页面顶部位置
	$("#back_top").click(function() {
		//$('body,html').animate({scrollTop:0},1000);
		if($('html').scrollTop()) {
			$('html').animate({
				scrollTop: 0
			}, 1000);
			return false;
		}
		$('body').animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
});
$(function() {
	var showtx = "";
	var starttx = "";
	$(".items > a").click(function() {
		var total = "";
		$("#clsize").val("");
		$(".checked").each(function(index, element) {
			total = total + $(this).text() + ",";
		});
		$("#clsize").val(total);
	});

	$("#itemPrice > a").click(function() {
		price = $("#itemPrice > .checked").attr("data-price");
		size1 = $("#itemPrice > .checked").attr("data-id");
		$("input[name='size1']").val(size1);
		$("input[name='price']").val(price);
		$("#quantity").val(1);
		$("#total_money").html(price);
		if(price) {
			$(".price").html("RP " + price);
		} else {
			$(".price").html("RP ")
		}
	});
	price = $("#itemPrice > .checked").attr("data-price");
	$("input[name='price']").val(price);
	$("#total_money").html(price);
	size1 = $("#itemPrice > .checked").attr("data-id");
	$("input[name='size1']").val(size1);
	/*var color=$(".color > .checked").html();
	var size=$(".size > .checked").html();
	var size2="颜色:"+color+"尺码:"+size;
	$("input[name='size2']").val(size2);*/
});
function addnumber() {
	if(parseInt($('#quantity').val()) < 1) {
		var num = parseInt($('#quantity').val()) + 1;
		var n = $("input[name='price']").val();
		var price_tt = (num * n).toFixed(2);
		$("#quantity").val(num);
		$('#total_money').html(price_tt);
	}
}
// -
function minnumber() {
	var num = parseInt($('#quantity').val()) - 1;
	if(num <= 1) {
		num = 1;
		$("#quantity").val(num);
		var n = $("input[name='price']").val(); //获得价格
		console.log(n);
		var price_tt = (num * n).toFixed(2);
		$('#total_money').html(price_tt);
	} else {
		var n = $("input[name='price']").val(); //获得价格
		var price_tt = (num * n).toFixed(2);
		$("#quantity").val(num);
		$('#total_money').html(price_tt);
	}

}
//
setshow();
var levelone,leveltwo,levelthree;
   /* $("#location_p").append(renderAddress()); */
   $(".textbox").on('change','#location_p',function(event){
       var rendertwo = event.target.value;
       levelone = event.target.value;
       
       $("#location_c").append(renderTwoLevel(levelone));
       $("#location_c").change(function(e){
           leveltwo = e.target.value;
           var renderthree = e.target.value;
           $("#location_a").empty();
         	$("#postcode").empty();
           $("#location_a").append(renderThreeLevel(levelone,leveltwo));
           $("#location_a").change(function(eve){
               var rendercode = eve.target.value;
               levelthree = eve.target.value;
             	//$("#postcode").empty();
             	//$("#postcode").append(renderCode(levelone,leveltwo,levelthree));
               $("#postcode").val(renderCode(levelone,leveltwo,levelthree));
             	/*$("#postcode").change(function(even){
                 var wuliu = even.target.value;
                 c=even.target.value;
                 renderwuliu(levelone,leveltwo,levelthree,c);
               })*/
           })
       })
   })

var num = $("#itemPrice a:eq(0)").attr("data-num");
//遍历套餐i
$("#itemPrice >a").each(function(index, element) {
	if($(this).attr("class")=="checked"){
		$("#tcid").val($(this).attr("data_id"));//套餐ID写入隐藏input
	}
	$(this).click(function(index) {
		$("#tcid").val($(this).attr("data_id"));//套餐ID写入隐藏input
		//将当前的元素清空
		//$(".colordiv").html('');
		$(".colordiv").hide();
		$(".spec_"+$(this).attr("data_id")).show();
		var num = $(this).attr("data-num");
		if(num < 1) {
			return;
		}
		setColor();
		setshow();
	});
});
//将颜色尺码设置到input中
function setColor() {
	var sizeAndColor = '';
	$(".colordiv .checked").each(function(index, element) {
		var singleSize = "";
		if(index % 2 == 0) {
			singleSize = $(this).html() + ":";
		} else {
			singleSize = $(this).html() + ",";
		}
		sizeAndColor += singleSize;
		document.getElementById("colors").value = sizeAndColor;
	});

	var newSize = sizeAndColor.substring(0, sizeAndColor.length - 1);
	$("input[name='color']").val(newSize);
}

function clickOption(option) {
	$(option).addClass('checked').siblings('a').removeClass('checked');			
	setshow();
	setColor();
}

function setshow() {
	var starttx=new Array();
	var showtx=new Array();
	var sku=new Array();
	$(".checked").each(function(index, element) {
		if(!$(this).is(":hidden")){
			
			if(typeof(starttx[$(this).attr("data")]) == "undefined"){
				starttx[$(this).attr("data")]="";
			}
			if(typeof(showtx[$(this).attr("data")]) == "undefined"){
				showtx[$(this).attr("data")]="";
			}
			if(typeof(sku[$(this).attr("data")]) == "undefined"){
				sku[$(this).attr("data")]="FZ"+$(this).attr("goods_id")+"N";
			}
			starttx[$(this).attr("data")]=starttx[$(this).attr("data")]+$(this).text() + ",";
			showtx[$(this).attr("data")]=showtx[$(this).attr("data")]+$(this).text() + "&nbsp;&nbsp;";	
			sku[$(this).attr("data")]=sku[$(this).attr("data")]+$(this).attr("tag");
		}

		
	});
	//$("#clsize").val(starttx);
	//alert(showtx[2]);
	var sku_='';
	for (var i=1;i<=showtx.length;i++){
		$(".selected-container"+i).html(showtx[i]+sku[i]);
		if(typeof(sku[i]) != "undefined"){
			sku_+= sku[i]+','
		}
	}
	var sku_comma = sku_.substring(0,sku_.length-1)
   var spec_img={"FZ5N0002":"\/Public\/upload\/goods\/2018-08-07\/5b692e1e99171.jpg"};
	$("#sku").val(sku_comma);
 	$("#goods_img").attr("src",spec_img[sku_comma]);
//	alert(sku_comma)
}


$(function(){
	$('#bwbuy').click(function(){
		var contact_name = $('#contact_name').val();
		var phone = $('#phone').val();
		var province = $('#province').val();
		var location_p = $('#location_p').val();
		var location_c = $('#location_c').val();
		var location_a = $('#location_a').val();
		var address = $('#address').val();
		var postcode = $('#postcode').val();
		var message = $('#message').val();
		var email = $('#email').val();
		var total_money = $('#total_money').text();
		var goods_my_id = $('#goods_my_id').val();
		var sku = $('#sku').val();
		var tcid = $('#tcid').val();
		var admin_id = $('#admin_id').val();
		//验证email格式的正则表达式
		var isEmail = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/;
		
		if ( contact_name == '' ) {
			layer.msg('Contact Name cannot be empty')
			return false;
		}
		
		if ( phone == '' ) {
			layer.msg('Phone Number cannot be empty')
			return false;
		} else if (phone.length < 8 || phone.length > 12) {  
			layer.msg("The phone number format is incorrect. Please enter 8-12 digits!");
			return false;
		}

		if ( province == '' ) {
			layer.msg('Country cannot be empty')
			return false;
		}
		
		if ( location_p == '' ) {
			layer.msg('Province cannot be empty')
			return false;
		}
		
		if ( location_c == '' ) {
			layer.msg('City cannot be empty')
			return false;
		}
		
		if ( location_a == '' ) {
			layer.msg('District cannot be empty')
			return false;
		}
		
		if ( address == '' ) {
			layer.msg('Street & Building cannot be empty')
			return false;
		} else  if(!isNaN(address) || address.length < 6){
	        layer.msg('"Street & Building" cannot fill in pure Numbers, and must not be less than 6 characters in length');
	        return false;
	    }
		
		if ( postcode == '' ) {
			layer.msg('Post/Zip Code cannot be empty')
			return false;
		}
		
		if (email == '') {
		}else {
			if (!(isEmail.test(email))) {
				layer.msg('Email format is incorrect')
				return false;
			}
		}
		
		$('#bwbuy').attr({'disabled':'disabled'});
		var index = layer.load(1, {
		  shade: [0.1,'#fff'] //0.1透明度的白色背景
		});
		$.ajax({
			type:"post",
			url:"/index.php/Home/index/order.html",
			async:true,
			dataType:"json",
			data:{goods_my_id:goods_my_id,sku:sku,tcid:tcid,name:contact_name,mobile:phone,country_id:province,state:location_p,city:location_c,area_:location_a,address:address,total_money:total_money,zip:postcode,marks:message,email:email,wuliu:$("#wuliu").val(),admin_id:admin_id},
			success:function(data){
				if (data.status == 1) {
					layer.close(index);
					layer.msg('Submitted successfully');
						location.href='/index.php/Home/index/order_success.html'
				}
			}
		});
		
	})
})