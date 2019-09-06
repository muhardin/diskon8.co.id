function stringEndWith(str,endStr){var d=str.length-endStr.length;return (d>=0&&str.lastIndexOf(endStr)==d);}
if(window.location.href.indexOf("/")!=-1&&!stringEndWith(window.location.href,'/')&&!stringEndWith(window.location.href,'.html')){window.location.href=window.location.href+"/";}
document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + 'px';
var deviceWidth = document.documentElement.clientWidth;
if(deviceWidth > 750) deviceWidth = 750;
document.documentElement.style.fontSize = deviceWidth / 7.5 + 'px';
function toData(obj){window.location.href ="F"+parseInt($(obj).attr("data-id")).toString(32)+".html";}
function toHref(obj){window.location.href =$(obj).attr("data-href");}
$(function() {$("body").removeClass("hidden");});
nideshopStatisticFlowAdd("/",function(){});
var lastGoodsKey=$.cookie(cookieKey.lastGoodsKey);lastGoodsKey=lastGoodsKey&&lastGoodsKey!=''&&!isNaN(lastGoodsKey)?parseInt(lastGoodsKey):null;
var app={q:{key:"",lastGoodsKey:lastGoodsKey},iocList:[],wTop:document.documentElement.scrollTop||document.body.scrollTop,slideshows:[],goods:{list:[]},isLoad:false,nideshopChannel:[]};
new Vue({el:'.main', data:app,filters:{formatDate:function(time){var data = new Date(time);return formatDate(data,'yyyy-MM-dd');},filtePrice:function(price){if(!price) return 0;return formatCurrency(price);}},watch:{
	"q.key":function(newVal,oldVal){nideshopGoodsSelectAll(1,app.q.key,app.q.lastGoodsKey,function(data){app.goods=data;});},
},methods:{
	toType:function(name,iconUrl){if(iconUrl=='images/type_ioc_big.png'){window.location.href ="type.html";}else{window.location.href ="seek_data.html?type="+encodeURI(name);}}
}});
Vue.prototype.filtePrice=function(price){if(price===undefined)return 0;return formatCurrency(price);};
window.onscroll=function(){app.wTop=document.documentElement.scrollTop||document.body.scrollTop;}
function init(){
	nideshopGoodsSelectAll(1,app.q.key,app.q.lastGoodsKey,function(data) {app.goods=data;});
	setTimeout(function(){new Swiper($(".swiper-container"),{direction:'horizontal',loop:true,pagination:{el:$(".swiper-container .swiper-pagination")},autoplay:{delay:5000}});},100);
	setTimeout(function(){new Swiper('.ioc-container',{scrollbar:{el:'.ioc-container .swiper-scrollbar'}});},100);
}
$(window).scroll(function(){
	 var $this =$(this),viewH =$(this).height(),contentH =parseInt($("html").css("height")),scrollTop =$(this).scrollTop();
     if(!app.isLoad&&app.goods.hasNextPage&&contentH-scrollTop-viewH<100){
    	app.isLoad=true;
    	nideshopGoodsSelectAll(app.goods.nextPage,app.q.key,app.q.lastGoodsKey,function(data) {
 			var getList=data.list;data.list=app.goods.list;
 			for (var i = 0; i < getList.length; i++) {data.list.push(getList[i]);}
 			app.goods=data;app.isLoad=false;
 		});
     }
});
init();
