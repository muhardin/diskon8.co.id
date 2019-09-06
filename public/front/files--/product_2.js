(function() {
    var productData = window.productData;
    delete window.productData;
    try {
        gtag('event', 'view_item', {
            "items": [{
                "id": productData.product.id,
                "name": productData.product.sku,
                "quantity": 1,
                "price": productData.product.sale_price
            }]
        });
    } catch (e) {}

    function pageFit(doc, win, maxwidth, minwidth, font) {
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function() {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if (clientWidth >= minwidth && clientWidth <= maxwidth) {
                    docEl.style.fontSize = font * (clientWidth / maxwidth) + 'px';
                } else if (clientWidth > maxwidth) {
                    docEl.style.fontSize = font + 'px';
                } else if (clientWidth < minwidth) {
                    docEl.style.fontSize = font * (minwidth / maxwidth) + 'px';
                }
            };
        recalc();
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    }
    pageFit(document, window, 640, 320, 37.5);
    var ua = navigator.userAgent,
        iOS = /iPad|iPhone|iPod/.test(ua),
        iOS11 = /OS 11_0_1|OS 11_0_2|OS 11_0_3|OS 11_1|OS 11_1_1|OS 11_1_2|OS 11_2|OS 11_2_1/.test(ua);
    $('img[data-original]').lazyload({
        threshold: 500
    });
    /*window.addEventListener('DOMContentLoaded',function(){new SmartPhoto(".js-smartPhoto");});*/
    function timer(diff) {
        var ms = 0,
            _time = $('#seckill_time'),
            _hour = _time.find('.hour'),
            _minute = _time.find('.minute'),
            _second = _time.find('.s'),
            _msecond = _time.find('.ms');
        var func = function() {
            if (diff < 0) return;
            if (--ms < 0) ms = 9;
            _msecond.text(ms);
            if (ms === 9) {
                --diff;
                var hour = Math.floor(diff / 3600);
                var remain = diff - hour * 3600;
                var minute = Math.floor(remain / 60);
                second = remain - minute * 60;
                if (hour < 10) hour = '0' + hour;
                if (minute < 10) minute = '0' + minute;
                if (second < 10) second = '0' + second;
                _hour.text(hour);
                _minute.text(minute);
                _second.text(second);
                if (diff == 0) {
                    _time.parent().text('已结束');
                    clearInterval(seed);
                }
            }
        };
        func();
        var seed = setInterval(func, 100);
    }
    $(window).on('scroll', function() {
        var nav = $('.p-head'),
            scrollTop = document.documentElement.scrollTop || document.body.scrollTop,
            height = 48,
            scrollDiv = $('#scrollTop'),
            seckillDiv = $('.seckill-container'),
            dH = document.documentElement.clientHeight,
            imgH = parseInt($('.swiper-container').css('height')),
            orderSubmit = $('#submit_order');
        if (scrollTop > 5) {
            orderSubmit.show();
        }
        if (scrollTop >= imgH) {
            seckillDiv.addClass('fixed');
        } else {
            seckillDiv.removeClass('fixed');
        }
        if (scrollTop > dH + 100) {
            scrollDiv.addClass('fadeInRight').addClass('loading').removeClass('fadeOutRight').show();
        } else {
            scrollDiv.removeClass('fadeInRight').removeClass('loading').addClass('fadeOutRight');
            setTimeout(function() {
                if (!scrollDiv.hasClass('loading')) {
                    scrollDiv.hide()
                }
            }, 500);
        }
    });
    $('#submit_order').click(function() {
        //location.href='https://api.whatsapp.com/send?phone=6281933357030&text=Saya%20tertarik%20untuk%20berlangganan%20KIRIM.EMAIL';
        //fbq&&fbq("track","AddToCart");

        /*
        try {
            gtag('event', 'ecommerce', {
                'event_category': 'Ecommerce',
                'event_action': 'AddToCart'
            });
            gtag('event', 'add_to_cart', {
                "items": [{
                    "id": productData.product.id,
                    "name": productData.product.sku,
                    "quantity": 1,
                    "price": productData.product.sale_price
                }]
            });
        } catch (e) {}
        if (iOS && iOS11) {
            $('body').css('position', 'fixed');
        }
        $('.widgets-cover').addClass('show');
        */
    });
    $('.sku-close').on('click', function() {
        var $cover = $(this).closest('.widgets-cover');
        if ($cover.hasClass('widgets-cover-order') && $('.sku-list-wrap').length > 0) {
            $cover.removeClass('widgets-cover-order').addClass('widgets-cover-sku');
        } else {
            $cover.removeClass('show');
            if (iOS && iOS11) {
                $('body').css('position', 'relative');
            }
        }
    });
    $('input,textarea').on('focus', function() {
        $(this).data('pla', $(this).attr('placeholder')).attr('placeholder', '');
    }).on('blur', function() {
        $(this).attr('placeholder', $(this).data('pla'));
    });
    var $skuInfo = $('.sku-info'),
        $imgWrap = $('.img-wrap img'),
        $priceWrap = $('.main .price'),
        setImages = false,
        setPrice = false;
    $('.sku-list-wrap .items a').on('click', function() {
        if ($(this).hasClass('disabled')) return false;
        $(this).addClass('checked').siblings('a').removeClass('checked');
        var ids = [],
            names = [],
            $variantId = $('[name=variant_id]'),
            $items = $('.sku-list-wrap .items');
        $('.sku-list-wrap .checked').each(function() {
            names.push('<span>' + String($(this).text()) + '</span>');
            ids.push(String($(this).data('id')));
        });
        $skuInfo.find('span.selected-container').html(names.join(''));
        $variantId.val('');
        setImages = setPrice = false;
        $('#quantity').trigger('input');
        $items.find('.disabled').removeClass('disabled');
        $items.find('a').each(function() {
            if ($(this).hasClass('checked')) return true;
        });

        function inArray(arr1, arr2) {
            for (var i in arr1) {
                var value = arr1[i];
                if ($.inArray(value, arr2) <= -1) {
                    return false;
                }
            }
            return true;
        }

        function arrayDiff(arr1, arr2) {
            var values = [];
            arr1.forEach(function(value) {
                $.inArray(value, arr2) > -1 || values.push(value);
            });
            return values;
        }
    });
    var $quantity = $('#quantity'),
        $quantityAdd = $('#quantity_add'),
        $quantityMinus = $('#quantity_minus');
    /*$quantityMinus.click(function(){
        var a=1*$quantity.val()- 1;a>productData.purchaseLimit&&(a=productData.purchaseLimit);
        if(1>=a){
        $(this).addClass('disabled');a=1;}
        else{$(this).removeClass('disabled');$quantityAdd.removeClass('disabled');}
    $quantity.val(a).trigger('input');});*/
    /*$quantityAdd.click(function(){var a=1*$quantity.val()+ 1;1>a&&(a=1);
    if(a>=productData.purchaseLimit){$(this).addClass('disabled');}else{$(this).removeClass('disabled');
    $quantityMinus.removeClass('disabled');}
    $quantity.val(a).trigger('input');});*/
    $('.widgets-cover-sku .sku-buy').on('click', function() {
        /*if(!$('[name=variant_id]').val()){
        return false;}*/
        //改动---------------
        var isShow = true;
        if ($("#order").hasClass("show")) $(".sys_spec_text>li").each(function() {
            if ($(this).find(".checked").length != 1) {
                alert("Silakan pilih spesifikasi Anda!");
                isShow = false;
                return;
            }
        });
        if (!isShow) {
            return;
        }
        $(this).closest('.widgets-cover').removeClass('widgets-cover-sku').addClass('widgets-cover-order');
    });
    $('#scrollTop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 'slow');
    });
})();
