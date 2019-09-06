$(function(){$("body").removeClass("hidden");});
nideshopStatisticFlowAdd("seek_data.html",function(){});
var getKey=getOneKey('key'),getOrder=getOneKey('order'),getStartPrice=getOneKey('startPrice'),getStopPrice=getOneKey('stopPrice'),getType=getOneKey('type');
var app={orderShow:false,MoreShow:false,tpyeList:[],q:{key:getKey?getKey:null,order:getOrder?getOrder:1,startPrice:getStartPrice?getStartPrice:null,stopPrice:getStopPrice?getStopPrice:null,type:getType?getType:null},oldKey:getOneKey('key'),goods:[],isSearch:true,isLoad:false,showMore:false};
var appVue=new Vue({el:'#app',data:app,filters:{filtePrice:function(price){if(!price) return 0;return formatCurrency(price);}},watch:{
	"q.order":function(newVal,oldVal){appVue.reload();}
},methods:{
	toGoods:function(productId){window.location.href ="F"+parseInt(productId).toString(32)+".html";},
	reload:function(){nideshopGoodsSelectAlls(1,app.q.key,app.q.order,app.q.startPrice,app.q.stopPrice,app.q.type,function(data){if(data&&data.list){app.goods=data;}app.isSearch=false;});}
}});
Vue.prototype.filtePrice=function(price){if(price===undefined)return 0;return formatCurrency(price);};
function init(){
	nideshopCategorySelectAllL1(function(data){app.tpyeList=data;});
	appVue.reload();
}
$(window).scroll(function(){
	var $this =$(this),viewH =$(this).height(),contentH =parseInt($("html").css("height")),scrollTop =$(this).scrollTop(); 
    if(!app.isLoad&&app.goods.hasNextPage&&contentH-scrollTop-viewH<100){
	   	app.isLoad=true;nideshopGoodsSelectAlls(app.goods.nextPage,app.q.key,app.q.order,app.q.startPrice,app.q.stopPrice,app.q.type,function(data) {var getList=data.list;data.list=app.goods.list;for(var i = 0; i < getList.length; i++) {data.list.push(getList[i]);}app.goods=data;app.isLoad=false;});
    }
});
init();