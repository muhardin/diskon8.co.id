var mainUrl=window.document.location.pathname.substring(0,window.document.location.pathname.substr(1).indexOf('/')+1)+"/";
/*通用*/
var cookieKey={seekKeys:'diskon8_seek_keys',lastGoodsKey:'diskon8_last_goods_key'};
function getToken(success){get(mainUrl+"token.action",{},success);}
/*主页*/
function nideshopAdSelectById(success){post(mainUrl+"nideshopAdSelectById.action",{},success);}
function nideshopAdSelectAll(success){post(mainUrl+"nideshopAdSelectAll.action",{},success);}
function nideshopGoodsSelectAll(nowPage,key,lastGoodsKey,success){post(mainUrl+"nideshopGoodsSelectAll.action",{nowPage:nowPage,key:key,lastGoodsKey:lastGoodsKey},success);}
function nideshopGoodsSelectAlls(nowPage,key,order,startPrice,stopPrice,type,success){post(mainUrl+"nideshopGoodsSelectAlls.action",{nowPage:nowPage,key:key,order:order,startPrice:startPrice,stopPrice:stopPrice,type:type},success);}
function nideshopGoodsSelectType(nowPage,type,success){post(mainUrl+"nideshopGoodsSelectType.action",{nowPage:nowPage,type:type},success);}
function nideshopSelectIdByShowid(showId){var id=null;ajax(mainUrl+"nideshopSelectIdByShowid.action", {showId:showId},function(data){if(data){id=parseInt(data);}},false, false, false, 'post','json');return id;}
function nideshopSelectIdByShowidGift(showId){var id=null;ajax(mainUrl+"nideshopSelectIdByShowidGift.action", {showId:showId},function(data){if(data){id=parseInt(data);}},false, false, false, 'post','json');return id;}
function nideshopGoodsselectByprice(id,success){post(mainUrl+"nideshopGoodsselectByprice.action",{id:id},success);}
function nideshopGoodsSelectGift(success){post(mainUrl+"nideshopGoodsSelectGift.action",{},success);}
/*订单*/
function nideshopSpecificationSelectAll(specid,success){post(mainUrl+"nideshopSpecificationSelectAll.action",{specid:specid},success);}
function nideshopSpecificationSelectAllGift(specid,success){post(mainUrl+"nideshopSpecificationSelectAllGift.action",{specid:specid},success);}
function nideshopOrderSave(data,success){post(mainUrl+"nideshopOrderSave.action",data,success);}
function sysRegionSelectAll(id,success){post(mainUrl+"sysRegionSelectAll.action",{id:id},success);}
function sysRegionSelectAlld(sid,success){post(mainUrl+"sysRegionSelectAlld.action",{sid:sid},success);}
function sysRegionThSelectAll(id,success){post(mainUrl+"sysRegionThSelectAll.action",{id:id},success);}
function sysRegionThSelectAlld(sid,success){post(mainUrl+"sysRegionThSelectAlld.action",{sid:sid},success);}
function nideshopOrderGetdistricts(key,success){post(mainUrl+"nideshopOrderGetdistricts.action",{key:key},success);}
function nideshopOrderSelectByMobile(mobile,success){post(mainUrl+"nideshopOrderSelectByMobile.action",{mobile:mobile},success);}
/*商品分类*/
function nideshopCategorySelectById(success){post(mainUrl+"nideshopCategorySelectById.action",{},success);}
function nideshopCategorySelectAllById(parentAllId,success){post(mainUrl+"nideshopCategorySelectAllById.action",{parentAllId:parentAllId},success);}
function nideshopCategorySelectAll(cid,nowPages,success){post(mainUrl+"nideshopCategorySelectAll.action",{cid:cid,nowPages:nowPages},success);}
function nideshopChannelSelectAll(success){post(mainUrl+"nideshopChannelSelectAll.action",{},success);}
function nideshopCategorySelectByMId(id,success){post(mainUrl+"nideshopCategorySelectByMId.action",{id:id},success);}
function nideshopGoodsselectByTypel(typeId,success){post(mainUrl+"nideshopGoodsselectByTypel.action",{typeId:typeId},success);}
function nideshopCategorySelectAllL1(success){post(mainUrl+"nideshopCategorySelectAllL1.action",{},success);}
/*统计*/
function nideshopStatisticFlowAdd(name,success){post(mainUrl+"nideshopStatisticFlowAdd.action",{name:name},success);}
function nideshopStatisticSearchSelectByName(name,success){post(mainUrl+"nideshopStatisticSearchSelectByName.action",{name:name},success);}
function nideshopStatisticSearchSave(name,success){post(mainUrl+"nideshopStatisticSearchSave.action",{name:name},success);}
function nideshopOrdGetByPhone(phone,stopPage,success){get(mainUrl+"nideshopOrdGetByPhone.action",{phone:phone,stopPage:stopPage},success);}

