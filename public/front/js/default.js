$(function() {$("body").removeClass("hidden");});
nideshopStatisticFlowAdd("default.html",function(){});
function toOrder(){window.location.href ="order.html?goodsNo="+app.goodsId;}
function toHome(){window.location.href ="/";}
$(function() {
	$(window).scroll(function(){
		var top=0;if($(".detail-profile").offset()&&$(".detail-profile").offset().top)top=$(".detail-profile").offset().top;
	    if($(document).scrollTop()>=top+ 45)$(".detail-bars").addClass("fixed");
	    else $(".detail-bars").removeClass("fixed");
	});
	$(".scrollBar").click(function(){
		var y = $(this).attr("scroll-y");
		$('html, body').animate({scrollTop: $($(this).attr("href")).offset().top- y}, 1000);
	});
	$("#mq").click(function(){
	 	isStop=true;$("#mq").stop();
	});
});
var time={h:0,m:0,s:0},app={wTop:document.documentElement.scrollTop||document.body.scrollTop,slideshows:[],goodsId:0,nowProductData:{}};
new Vue({el:'#page', data:app,filters:{formatDate:function(time){var data = new Date(time);return formatDate(data,'dd/MM/yyyy');},filtePrice:function(price){if(!price)return 0;return formatCurrency(price);},}});
Vue.prototype.fiter=function(val){return val.replace(/src=/g, "data-original=");}
Vue.prototype.filtePrice=function(price){if(price===undefined)return 0;return formatCurrency(price);};
window.onscroll=function(){app.wTop=document.documentElement.scrollTop||document.body.scrollTop;}
function getGoodsId(){
	var get=window.location.href.substring(window.location.href.lastIndexOf("/F")+2,window.location.href.length);get=get.replace(".html","");
	var getId=parseInt(get,32);
	if(!getId||getId<1){return getId;}
	return nideshopSelectIdByShowid(getId);
}
var f=0;
function openTime(startTime,sumTime){
	startTime--;if(startTime==0)startTime=sumTime;
	time.s=startTime%60;time.m=Math.floor(startTime/60)%60;time.h=Math.floor(startTime/60/60);
	$("#h").text(time.h>9?time.h:"0"+time.h);
	$("#m").text(time.m>9?time.m:"0"+time.m);
	$("#s").text(time.s>9?time.s:"0"+time.s);
	setTimeout(function(){openTime(startTime,sumTime);},1000);
}
function addJs(){setTimeout(function(){var add_js="<script src='static/js/data_add.js'><\/script><script src='static/js/product_2.js'><\/script>";$("body").append(add_js);},300);}
var isStop=false;function openScroll(isOpen,speed){
	if(isStop)return;
	var openScrollHeight=$("#mq>div:first").height()*2-$("#mq").height();
	var openScrollTime=openScrollHeight/speed;
	if(isOpen){$("#mq").animate({scrollTop:openScrollHeight},openScrollTime);isOpen=false;}
	else {$("#mq").animate({scrollTop:0},openScrollTime);isOpen=true;}
	setTimeout(function(){openScroll(isOpen,speed);},openScrollTime);
}
function init(){
    app.goodsId=getGoodsId();
    nideshopGoodsselectByprice(app.goodsId,function(data){
		if(data!=null) {app.nowProductData=data;openTime(60*60*data.times,60*60*data.times);}
		setTimeout(function(){new Swiper($(".swiper-container"),{direction:'horizontal',loop:true,pagination:{el:$(".swiper-container .swiper-pagination")},autoplay:{delay:5000}});openScroll(true,0.04);$("img").lazyload();},100);
		addJs();
		$.cookie(cookieKey.lastGoodsKey,app.goodsId,{expires:365});
	});
}
init();
$(function() {
	$(".mui-numbox-btn-minus").click(function() {if(orderApp.order.buyNumber>1)orderApp.order.buyNumber--;});
	$(".mui-numbox-btn-plus").click(function() {orderApp.order.buyNumber++;});
	$("#city").click(function(){var ret=orderApp.order.nowProvinceList;orderApp.order.nowProvinceList=[];orderApp.order.nowProvinceList=ret;$(".dropdown").removeClass("hidden");$("html").addClass("no_over");});
	$(".cancel").click(function(){$(".dropdown").addClass("hidden");$("html").removeClass("no_over");orderApp.order.province={};orderApp.order.city={};});
});
function set_spec(obj){
	orderApp.nowProductData.primaryPicUrl=$(obj).attr("data-img");
	$(obj).parent().children().removeClass("checked");
	$(obj).addClass("checked");
	for (var i = 0; i < orderApp.order.spec.length; i++) {
		if(orderApp.order.spec[i].key==$(obj).attr("data-key")) {
			orderApp.order.spec[i].value=$(obj).attr("data-value");
			orderApp.order.spec[i].serial=$(obj).attr("data-serial");
			orderApp.order.spec[i].chinese=$(obj).attr("data-chinese");
		}
	}
}
var orderApp={nowDistrictListes:{},get_province:{},goodsId:0,order:{nowProvinceList:[],nowCityList:[],city:{},province:{},district:{},buyNumber:1,spec:[]},nowProductData:{},nideshopSpecification:[],showSuggest:false,select:{district:null},districtSuggests:[]};
new Vue({el:'#order', data:orderApp,filters:{formatDate:function(time){var data = new Date(time);return formatDate(data,'yyyy-MM-dd');},filtePrice:function(price){if(price===undefined)return 0;return formatCurrency(price);}},methods:{}});
function districtFocus(){
	console.log("districtFocus");
	$(".body").scrollTop(280);
	//window.location.href="#district-suggest-box";
}
function districtKeyDown(obj){
	if(orderApp.select.district.length<3){orderApp.showSuggest=false;return;}orderApp.showSuggest=true;
	nideshopOrderGetdistricts(orderApp.select.district,function(data){orderApp.districtSuggests=data;});
}
function districtChange(){setTimeout(function(){orderApp.showSuggest=false;},100);}
function cut_city(){
	$(".data").toggleClass("hidden");$("#ret_p").toggleClass("hidden");
}
function choose_province1(obj){
	var get=orderApp.order.nowProvinceList[$(obj).val()];
	sysRegionSelectAlld(get.id,function(data){
		orderApp.order.nowCityList=data;
		orderApp.order.province=get;
		orderApp.order.city={};
		$("#city_select").val("");
	});
}
function choose_city1(obj){
	var get=orderApp.order.nowCityList[$(obj).val()];
	sysRegionSelectAlld(get.id,function(data){
		orderApp.order.nowDistrictList=data;
		orderApp.order.city=get;
		orderApp.order.district={};
		$("#choose_district").val("");
	});
}
var isSave=false;
function submit_order(obj){
	var order={
		city:orderApp.order.city.name,
		province:orderApp.order.province.name,
		agencyId:orderApp.order.province.agencyId,
		goodsNumber:orderApp.nowProductData.goodsNumber*orderApp.order.buyNumber,
		retailPrice:orderApp.nowProductData.retailPrice,
		listPicUrl:orderApp.nowProductData.primaryPicUrl,
		keywords:orderApp.nowProductData.keywords,
		number:orderApp.order.buyNumber,
		goodsSpecifitionNameValue:function(){var ret="";$(".sys_spec_text .checked").each(function(){ret+=$(this).attr("data-serial").replace(/\s/g, "")+",";});return ret.substr(0,ret.length-1);},
		specifitionValue:function(){var ret="";$(".sys_spec_text .checked").each(function(){ret+=$(this).attr("data-value").replace(/\s/g, "")+",";});return ret.substr(0,ret.length-1);},
		chineses:function(){var rets="";$(".sys_spec_text .checked").each(function(){rets+=$(this).attr("data-chinese").replace(/\s/g, "")+",";});return rets.substr(0,rets.length-1);},
		goodsId:orderApp.goodsId,
		orderPrice:orderApp.order.buyNumber*orderApp.nowProductData.retailPrice+orderApp.nowProductData.expenses,
		goodsName:orderApp.nowProductData.name,
		consignee:$.trim($("#userName").val()),
		mobile:$.trim($("#userPhone").val()),
		address:$.trim($("#userAddress").val()),
		postscript:$.trim($("#userEmail").val()),
		payname:$.trim($("#payname").val()),
		district:$.trim($("#district").val()),
		orderType:$.trim($("#message").val()),
	}
	order.goodsSpecifitionNameValue=order.goodsSpecifitionNameValue();
	order.chineses=order.chineses();
	order.specifitionValue=order.specifitionValue();
	if(order.consignee=='')alert("Silakan isi nama!");
	else if (order.mobile.length< 8 || order.mobile.length > 13)alert("Harap isi nomor telepon yang benar!");
	else if(!orderApp.order.province.name)alert("Silakan pilih provinsi!");
	else if(!orderApp.order.city.name)alert("Silakan pilih kota!");
	else if(order.district=='')alert("Harap isi distrik!");
	else if(order.address=='')alert("Silakan isi alamat lengkapnya!");
	else if(order.payname=='')alert("Silakan isi kode pos");
	else if(order.retailPrice<0.01||order.number<1||order.goodsId<1||order.orderPrice<0.01)alert("Kesalahan perintah!");
	else{if(!isSave){
		isSave=true;$(obj).val("Memesan, harap tunggu......");
		nideshopOrderSave(order,function(data){
			if(data==null||!data.save) {isSave=false;alert("Pesan kesalahan, coba lagi!");$(obj).val("Kirim Pesanan");fbq('track', 'InitiateCheckout', {value: app.nowProductData.retailPrice,currency: 'USD'});}
			else{window.location.href="result.html?ordersn="+encodeURI(data.ordersn)+"&consignee="+encodeURI(data.consignee)+"&mobile="+encodeURI(data.mobile)+"&goodsName="+encodeURI(data.goodsName)+"&goodsSpecifitionNameValue="+encodeURI(data.goodsSpecifitionNameValue)+"&number="+encodeURI(data.number)+"&address="+encodeURI(data.address)+"&orderprice="+encodeURI(data.orderprice);}
		});
	}}
}
function alert(data){layer.msg(data);}
function orderInit(){
	orderApp.goodsId=getGoodsId();
	sysRegionSelectAll(1,function(data){orderApp.order.nowProvinceList=data;});
	nideshopGoodsselectByprice(orderApp.goodsId,function(data){
		if(data!=null) {
			var goodsDesc=[];
			$(data.goodsDesc).each(function() {
				var lunbotu=$(this).children("img").attr("src");
				if(lunbotu!==undefined&&lunbotu!=null)goodsDesc.push(lunbotu);
			});
			data.goodsDesc=goodsDesc;
			orderApp.nowProductData=data;
			nideshopSpecificationSelectAll(orderApp.goodsId,function(data){
				orderApp.nideshopSpecification=data;
				orderApp.nowProductData.primaryPicUrl=data[0].nideshopGoods.primaryPicUrl;
				//gaidong
				for ( var i in data) {
					orderApp.order.spec.push({key:data[i].name,serial:null,value:"Silakan pilih spesifikasi Anda"});
					for ( var j in data[i].nideshopGoodsSpecification) {
						if(data[i].nideshopGoodsSpecification[j].defaults==1){
							orderApp.order.spec[i]={key:data[i].name,serial:data[i].nideshopGoodsSpecification[j].serial,value:data[i].nideshopGoodsSpecification[j].value};
							orderApp.nowProductData.primaryPicUrl=data[i].nideshopGoodsSpecification[j].picUrl;
						}
					}
				}
			});
		}
	});
}
orderInit();
