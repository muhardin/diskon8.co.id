// ajax封装
var ajax_prefix="",ajax_suffix="",uploadCacheFileMap={key:"file",url:"uploadCacheFile"},stompClient,isCheckPerms=false,isRequestBody=false,ajax_is_saveing=false;
function ajax(url, data, success, cache, alone, async, type, dataType,notRepeat) {
	if(notRepeat&&ajax_is_saveing)return;
	if(notRepeat)ajax_is_saveing=true;
    var type = type || 'post';//请求类型
    var dataType = dataType || 'json';//接收数据类型
    async=async===undefined?true:async;//异步请求
    alone=alone===undefined?false:alone;
    cache=cache===undefined?false:cache;
    var success = success || function (data) {};
    var error =function (data) {if(notRepeat)ajax_is_saveing=false;setTimeout(function () {if(data.status == 200){}else if(data.status == 404)console.log('404,请求失败，请求未找到');else if(data.status == 503)console.log('503,请求失败，服务器内部错误');else console.log('请求失败,网络连接超时');},500);};
    function toSuccess(data){if(notRepeat)ajax_is_saveing=false;/*try{if(data&&data.code){if(data.code==10015){window.parent.appVue.$Message.warning('保存数据失败，请刷新重试！');}}}catch(err){}*/success(data);}
    var ajaxMap={'url':url,'data': data,'type': type,'dataType': dataType,'async': async,'success':toSuccess,'error': error,'jsonpCallback': 'jsonp' + (new Date()).valueOf().toString().substr(-4)};
    if(isRequestBody){$.extend(ajaxMap,{contentType:'application/json;charset=utf-8'});isRequestBody=false;}
    return  $.ajax(ajaxMap);
}
function get(url,data,success) {if(isCheckPerms&&checkPerms){checkPerms(url);}return ajax(ajax_prefix+url+ajax_suffix,data, success,false, false, true, 'get','json');}
function post(url, data, success) {if(isCheckPerms&&checkPerms){checkPerms(url);}return ajax(ajax_prefix+url+ajax_suffix, data, success,false, false, true, 'post','json');}
function submitAjax(form, success) {var form = $(form);var url = form.attr('action');var data = form.serialize();ajax(url, data, success,false, false, true, 'post','json');}
function getAsync(url,data,success) {if(isCheckPerms&&checkPerms){checkPerms(url);}return ajax(ajax_prefix+url+ajax_suffix,data, success,false, false, false, 'get','json');}
function postAsync(url, data, success) {if(isCheckPerms&&checkPerms){checkPerms(url);}return ajax(ajax_prefix+url+ajax_suffix, data, success,false, false, false, 'post','json');}
function submitAjaxAsync(form, success) {if(isCheckPerms&&checkPerms){checkPerms(url);}var form = $(form);var url = form.attr('action');var data = form.serialize();ajax(ajax_prefix+url+ajax_suffix, data, success,false, false, false, 'post','json');}
function getNotRepeat(url,data,success) {if(isCheckPerms&&checkPerms){checkPerms(url);}return ajax(ajax_prefix+url+ajax_suffix,data, success,false, false, true, 'get','json',true);}
function postNotRepeat(url, data, success) {if(isCheckPerms&&checkPerms){checkPerms(url);}return ajax(ajax_prefix+url+ajax_suffix, data, success,false, false, true, 'post','json',true);}
function submitAjaxNotRepeat(form, success) {var form = $(form);var url = form.attr('action');var data = form.serialize();ajax(url, data, success,false, false, true, 'post','json',true);}
function upload(url,ids,dataName,data,success){if(isCheckPerms&&checkPerms){checkPerms(url);}var formData = new FormData();for (var i = 0; i < $(ids).length; i++){formData.append(dataName,$(ids)[i].files[0]);}if($.isPlainObject(data)){$.each(data,function(key,value){formData.append(key,value);});}return $.ajax({url:ajax_prefix+url+ajax_suffix,type:"post",data:formData,cache: false,contentType: false,processData: false,success:success});}
function jsonp(url, success) {return ajax(url, {}, success,false, false, true, 'get','jsonp');}
function getCors(url,data,success){return $.ajax({url:url,type:'get','data': data,dataType:'json',xhrFields:{withCredentials:true},success:success});}
function postCors(url,data,success){return $.ajax({url:url,type:'post','data': data,dataType:'json',xhrFields:{withCredentials:true},success:success});}
function uploadCors(url,ids,dataName,data,success){var formData = new FormData();for (var i = 0; i < $(ids).length; i++){formData.append(dataName,$(ids)[i].files[0]);}if($.isPlainObject(data)){$.each(data,function(key,value){formData.append(key,value);});}return $.ajax({url:url,type:"post",data:formData,cache: false,contentType: false,processData: false,xhrFields:{withCredentials:true},success:success});}
//websocket发起连接
function connectWebsocket(serverUrl,succeed,error){ stompClient = Stomp.over(new SockJS(serverUrl));if(!succeed){succeed=function(data){console.log("websocket连接成功!");}}if(!error){error=function(error){console.log("websocket连接失败!");}}stompClient.connect({},succeed,error);}
//websocket广播发生消息(如：send("/app/sendTest",'消息');)
function send(url,data){stompClient.send(url,{},data);}
//websocket广播订阅消息 (如：subscribe('/topic/sendTest',function(data){console.log(data);});)
function subscribe(url,succeed){if(!succeed){succeed=function(data){console.log("接收到消息,data=",data);}}stompClient.subscribe(url,succeed);}
//bootstrapTable封装
var bootstrapTableCongfigAdd={showExport:true,exportDataType:'selected',exportTypes:['excel','xlsx'],exportOptions:{fileName:'导出数据'},Icons:'glyphicon-export icon-share'};
function bootstrapTable(url,data,configs,success){
	if(isCheckPerms&&checkPerms){checkPerms(url);}
	configs.treeShowField=configs.treeColumn?configs.columns[configs.treeColumn].field:'id';
	var $table=$(configs.id?configs.id:'#select-list-table');
	var map={height:800,showToggle:true,showColumns:true,/*resizable:true,*/showExport:bootstrapTableCongfigAdd.showExport,exportDataType:bootstrapTableCongfigAdd.exportDataType,exportTypes:bootstrapTableCongfigAdd.exportTypes,exportOptions:bootstrapTableCongfigAdd.exportOptions,Icons:bootstrapTableCongfigAdd.Icons,url:ajax_prefix+url+ajax_suffix,dataType:'json',method:'POST',contentType: "application/x-www-form-urlencoded",striped: true,clickToSelect:true,sidePagination: 'server',idField: 'id',parentIdField:(configs.parentId?configs.parentId:'parentId'),search: true,strictSearch:true,showRefresh:true,columns:configs.columns,queryParams:function(params){if(data){$.extend(params,data);}return params;},onLoadSuccess:function(data){if(configs.hasTree){$table.treegrid({treeColumn:(configs.treeColumn?configs.treeColumn:1),initialState:'collapsed',expanderExpandedClass:'glyphicon glyphicon-chevron-right',expanderCollapsedClass:'glyphicon glyphicon-chevron-down',onChange:function(){$table.bootstrapTable('resetWidth');}});}if(success){success(data);}}};
	if(configs.hasTree){$.extend(map,{treeShowField:configs.treeShowField});}
	if(configs.hasPage){$.extend(map,{pagination: true,pageNumber:1,pageSize:25,pageList: [10,25,50,100,300,500,1000,10000,100000,1000000,10000000,100000000]});}
	return $table.bootstrapTable(map);
}
var bootstrapTableCongfigAdd2={showExport:true,exportDataType:'selected',exportTypes:['excel','xlsx'],exportOptions:{fileName:'导出数据'},Icons:'glyphicon-export icon-share'};
function bootstrapTable2(url,data,configs,success){
	return $(configs.id?configs.id:"#jqGrid").jqGrid({height: 385,url: ajax_prefix+url+ajax_suffix,datatype: "json",colModel: configs.columns,viewrecords: true,
		rowNum: configs.pageSize?configs.pageSize:100,rowList:[100,200,500,1000,2000,10000,100000,1000000,10000000,100000000],
	    rownumbers: true,rownumWidth: 25,autowidth: true,multiselect: true,pager:configs.pageId?configs.pageId:"#jqGridPager",
	    jsonReader:{root: "page.list",page: "page.currPage",total: "page.totalPage",records: "page.totalCount"},
	    prmNames:{page: "page",rows: "limit",order: "order"},serializeGridData:function(params){if(data){$.extend(params,data);}return params;},footerrow: configs.footer?true:false,
	    gridComplete:function(data){
	    	if(configs.footer){var footData={};footData[configs.footer.mainKey] =configs.footer.mainValue;for ( var i in configs.footer.list){footData[configs.footer.list[i].key]=$(this).getCol(configs.footer.list[i].key,false,configs.footer.list[i].type);}$(this).footerData("set",footData);}
	    },loadComplete:function(data){if(success){success(data);}},
	});
}
function bootstrapTableLocal(rowDatas,configs,success){
	var getBootstrap= $(configs.id?configs.id:"#jqGrid").jqGrid({height: 385,datatype: "local",colModel: configs.columns,viewrecords: true,
	    rowNum: configs.pageSize?configs.pageSize:100,rowList:[100,200,500,1000,2000,10000,100000,1000000,10000000,100000000],
	    rownumbers: true,rownumWidth: 25,autowidth: true,autoScroll:true,multiselect: true,pager:configs.pageId?configs.pageId:"#jqGridPager",
	    jsonReader:{root: "page.list",page: "page.currPage",total: "page.totalPage",records: "page.totalCount"},
	    prmNames:{page: "page",rows: "limit",order: "order"},footerrow: configs.footer?true:false,
	    gridComplete:function(data){
	    	$(configs.id?configs.id:"#jqGrid").closest(".ui-jqgrid-bdiv").css({"overflow-x": "hidden"});
	    	if(configs.footer){var footData={};footData[configs.footer.mainKey] =configs.footer.mainValue;for ( var i in configs.footer.list){footData[configs.footer.list[i].key]=$(this).getCol(configs.footer.list[i].key,false,configs.footer.list[i].type);}$(this).footerData("set",footData);}
	    },
	});
	for( var i = 0; i <= rowDatas.length; i++){$(configs.id?configs.id:"#jqGrid").jqGrid('addRowData', i + 1,rowDatas[i]);}
	if(success){success(rowDatas);}
	return getBootstrap;
}
//通用方法
function formatDate (date, fmt) {if(!date||date<0){return"";}if(isNaN(date)){return date;}if (/(y+)/.test(fmt)) {fmt = fmt.replace(RegExp.$1,(date.getFullYear()+'').substr(4-RegExp.$1.length));}var o = {'M+': date.getMonth() + 1,'d+': date.getDate(),'h+': date.getHours(),'m+': date.getMinutes(),'s+': date.getSeconds()};for (var k in o) {if (new RegExp("(" + k + ")").test(fmt)) {var str = o[k] + '';fmt = fmt.replace(RegExp.$1, (RegExp.$1.length === 1) ? str : padLeftZero(str));}}return fmt; };
function formatDate2(date,nowTime,fmt){if(!date||date<0){return"";}if(isNaN(date)||!fmt){return date;}if(isNaN(nowTime)||!nowTime||nowTime<date){return formatDate(date,fmt);}if(nowTime-date<60000){return Math.ceil((nowTime-date)/1000)+"绉掑墠";}if(nowTime-date<3600000){return Math.ceil((nowTime-date)/60000)+"鍒嗛挓鍓�";}if(nowTime-date<86400000){return Math.ceil((nowTime-date)/3600000)+"灏忔椂鍓�";}if(nowTime&&nowTime-date<2592000000){return Math.ceil((nowTime-date)/86400000)+"澶╁墠";}return formatDate(new Date(date),fmt);}
function padLeftZero (str) {return ('00' + str).substr(str.length);};
function sort(list,typeName){var sort_flag = 0,sort_data = [];for(var i = 0; i< list.length; i++) {var az = '';for (var j = 0; j < sort_data.length; j++) {if(eval("sort_data[j][0]."+typeName+" == list[i]."+typeName+"")) {sort_flag = 1;az = j;break;}}if(sort_flag == 1){sort_data[az].push(list[i]);sort_flag = 0;}else if (sort_flag == 0) { wdy = new Array();wdy.push(list[i]);sort_data.push(wdy);}}return sort_data;}
function getOneKey(name){var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");var r = window.location.search.substr(1).match(reg);if(r!=null)return  decodeURI(r[2]); return null;}
function highlight(val,key){if(!val){return '';}if(!key){return val;}return val.replace(RegExp(key,"g"),"<span class='vue-highlight'>"+key+"</span>");}
function dateToLong(string) {if(!string)return-1;var f = string.split(' ', 2);var d = (f[0] ? f[0] : '').split('-', 3);var t = (f[1] ? f[1] : '').split(':', 3);return (new Date(parseInt(d[0],10)||null,(parseInt(d[1],10)||1)-1,parseInt(d[2],10)||null,parseInt(t[0],10)||null,parseInt(t[1],10)||null,parseInt(t[2],10)||null)).getTime();}
function formatCurrency(num) {  num = num.toString().replace(/\$|\./g,'');  if(isNaN(num))  num = "0";  sign = (num == (num = Math.abs(num)));  num = Math.floor(num*100+0.50000000001);  cents = num%100;  num = Math.floor(num/100).toString();if(cents<10)cents = "0" + cents;for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));num=(((sign)?'':'-') + num + '.' + cents);return num.substr(0,num.length-3);  }
String.prototype.startWith=function(str){var reg = new RegExp("^" +str);return reg.test(this);}
String.prototype.endWith=function(str){var reg = new RegExp(str + "$");return reg.test(this);}
function intersect(arr1, arr2){if(Object.prototype.toString.call(arr1) === "[object Array]" && Object.prototype.toString.call(arr2) === "[object Array]") {return arr1.filter(function(v){return arr2.indexOf(v)!==-1;});}}
function jsonToExcel(fileName, jsonData,success) {
    var arrData = typeof jsonData != 'object' ? JSON.parse(jsonData) : jsonData,excel = '<table>',row = "<tr>";
    for (var name in arrData[0]){row += "<td style='font-weight:bold;text-align:center;'>" + name + '</td>';}excel += row + "</tr>";
    for(var i = 0; i < arrData.length; i++){var row = "<tr>";for (var index in arrData[i]){var value = arrData[i][index] === "." ? "" : arrData[i][index];row += '<td style="text-align:center;">' + value + '</td>';}excel += row + "</tr>";}excel += "</table>";
    var excelFile = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:x='urn:schemas-microsoft-com:office:excel' xmlns='http://www.w3.org/TR/REC-html40'>";
    excelFile += '<meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">';excelFile += '<meta http-equiv="content-type" content="application/vnd.ms-excel';
	excelFile += '; charset=UTF-8">';excelFile += "<head>";excelFile += "<!--[if gte mso 9]>";excelFile += "<xml>";excelFile += "<x:ExcelWorkbook>";excelFile += "<x:ExcelWorksheets>";excelFile += "<x:ExcelWorksheet>";
	excelFile += "<x:Name>";excelFile += "sheet1";excelFile += "</x:Name>";excelFile += "<x:WorksheetOptions>";excelFile += "<x:DisplayGridlines/>";
	excelFile += "</x:WorksheetOptions>";excelFile += "</x:ExcelWorksheet>";excelFile += "</x:ExcelWorksheets>";excelFile += "</x:ExcelWorkbook>";excelFile += "</xml>";excelFile += "<![endif]-->";excelFile += "</head>";excelFile += "<body>";
	excelFile += excel;excelFile += "</body>";excelFile += "</html>";
    if(excelFile.length<1024*1024){
    	var uri = 'data:application/vnd.ms-excel;charset=utf-8,' + encodeURIComponent(excelFile),link = document.createElement("a");
	    link.href = uri;link.style = "visibility:hidden";link.download = fileName + ".xls";
	    document.body.appendChild(link);link.click();
	    document.body.removeChild(link);
	    if(success)success();
    }else{
    	var uri = 'data:application/vnd.ms-excel;charset=utf-8,' + excelFile,link = document.createElement("a");
    	var formData = new FormData();formData.append(uploadCacheFileMap.key,uri);formData.append("fileName",fileName + ".xls");
    	$.ajax({url:ajax_prefix+uploadCacheFileMap.url+ajax_suffix,type:"post",data:formData,cache:false,contentType: false,processData: false,success:function(data){
    		window.location.href=ajax_prefix+data;
    	    if(success)success();
    	}});
    }
}