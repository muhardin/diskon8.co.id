var ajax_prefix=window.document.location.pathname.substring(0,window.document.location.pathname.substr(1).indexOf('/')+1)+"/";ajax_prefix=ajax_prefix.replace("produk/","");
/*通用*/
var cookieKey={seekKeys:'diskon8_seek_keys',lastGoodsKey:'diskon8_last_goods_key'};
function getToken(success){return get("token.action",{},success);}
/*主页*/
function nideshopAdSelectById(success){return post("nideshopAdSelectById.action",{},success);}
function nideshopAdSelectAll(success){return post("nideshopAdSelectAll.action",{},success);}
function nideshopGoodsSelectAll(nowPage,key,lastGoodsKey,success){return post("nideshopGoodsSelectAll.action",{nowPage:nowPage,key:key,lastGoodsKey:lastGoodsKey},success);}
function nideshopGoodsSelectAlls(nowPage,key,order,startPrice,stopPrice,type,success){return post("nideshopGoodsSelectAlls.action",{nowPage:nowPage,key:key,order:order,startPrice:startPrice,stopPrice:stopPrice,type:type},success);}
function nideshopGoodsSelectAlls2(nowPage,key,order,startPrice,stopPrice,type,success){return post("nideshopGoodsSelectAlls2.action",{nowPage:nowPage,key:key,order:order,startPrice:startPrice,stopPrice:stopPrice,type:type},success);}
function nideshopGoodsSelectType(nowPage,type,success){return post("nideshopGoodsSelectType.action",{nowPage:nowPage,type:type},success);}
function nideshopSelectIdByShowid(showId){var id=null;postAsync("nideshopSelectIdByShowid.action", {showId:showId},function(data){if(data){id=parseInt(data);}});return id;}
function nideshopGoodsselectByprice(id,success){return post("nideshopGoodsselectByprice.action",{id:id},success);}
function nideshopGoodsSelectAllSmall(success){return post("nideshopGoodsSelectAllSmall.action",{},success);}
/*订单*/
function nideshopSpecificationSelectAll(specid,success){return post("nideshopSpecificationSelectAll.action",{specid:specid},success);}
function nideshopOrderSave(data,success){return post("nideshopOrderSave.action",data,success);}
function sysRegionSelectAll(id,success){return post("sysRegionSelectAll.action",{id:id},success);}
function sysRegionSelectAlld(sid,success){return post("sysRegionSelectAlld.action",{sid:sid},success);}
function sysRegionThSelectAll(id,success){return post("sysRegionThSelectAll.action",{id:id},success);}
function sysRegionThSelectAlld(sid,success){return post("sysRegionThSelectAlld.action",{sid:sid},success);}
function nideshopOrderGetdistricts(key,success){return post("nideshopOrderGetdistricts.action",{key:key},success);}
function nideshopOrderSelectByMobile(mobile,success){return post("nideshopOrderSelectByMobile.action",{mobile:mobile},success);}
/*商品分类*/
function nideshopCategorySelectById(success){return post("nideshopCategorySelectById.action",{},success);}
function nideshopCategorySelectAllById(parentAllId,success){return post("nideshopCategorySelectAllById.action",{parentAllId:parentAllId},success);}
function nideshopCategorySelectAll(cid,nowPages,success){return post("nideshopCategorySelectAll.action",{cid:cid,nowPages:nowPages},success);}
function nideshopChannelSelectAll(success){return post("nideshopChannelSelectAll.action",{},success);}
function nideshopCategorySelectByMId(id,success){return post("nideshopCategorySelectByMId.action",{id:id},success);}
function nideshopGoodsselectByTypel(typeId,success){return post("nideshopGoodsselectByTypel.action",{typeId:typeId},success);}
function nideshopCategorySelectAllL1(success){return post("nideshopCategorySelectAllL1.action",{},success);}
/*统计*/
function nideshopStatisticFlowAdd(name,success){return post("nideshopStatisticFlowAdd.action",{name:name},success);}
function nideshopStatisticSearchSelectByName(name,success){return post("nideshopStatisticSearchSelectByName.action",{name:name},success);}
function nideshopStatisticSearchSave(name,success){return post("nideshopStatisticSearchSave.action",{name:name},success);}
function nideshopOrdGetByPhone(phone,stopPage,success){return get("nideshopOrdGetByPhone.action",{phone:phone,stopPage:stopPage},success);}
/*关键字*/
function nideshopSeoKeywordSelectAll(success){return post("nideshopSeoKeywordSelectAll.action",{},success);}
