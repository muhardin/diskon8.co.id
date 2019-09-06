$(function(){$("body").removeClass("hidden");});
nideshopStatisticFlowAdd("type.html",function(){});
function goodsScroll(obj){var viewH =$(obj).height(),contentH =$(obj)[0].scrollHeight,scrollTop =$(obj).scrollTop(); if(!app.isLoad&&app.goods.hasNextPage&&contentH-scrollTop-viewH<100){
	app.isLoad=true;nideshopGoodsSelectType(app.goods.nextPage,app.q.type,function(data){var getList=data.list;data.list=app.goods.list;for (var i = 0; i < getList.length; i++) {data.list.push(getList[i]);}app.goods=data;app.isLoad=false;});
}}
var app={q:{type:null},typeList:[],wTop:document.documentElement.scrollTop||document.body.scrollTop,slideshows:[],goods:{list:[]},isLoad:false};
var appVue=new Vue({el:'#app',data:app,filters:{formatDate:function(time){return formatDate(new Date(time),'yyyy年MM月dd日');},},watch:{
	"q.type":function(newVal,oldVal){appVue.reload();},
},methods:{
	toGoods:function(productId){window.location.href ="F"+parseInt(productId).toString(32)+".html";},
	reload:function(){nideshopGoodsSelectType(1,app.q.type,function(data){if(data&&data.list){app.goods=data;}});},
}});
Vue.prototype.filtePrice=function(price){if(price===undefined)return 0;return formatCurrency(price);};
function init(){
	nideshopCategorySelectAllL1(function(data){app.typeList=data;if(data.length>0){app.q.type=data[0].name;appVue.reload();}});
}init();