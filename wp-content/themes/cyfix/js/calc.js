function initCalcWEB() {
    console.clear();

    function updatePrices() {
        let currentSum = calc();
        let currentServicesSum = additionalServiceCalc();
        $('.calc-section .calc-price span').text(new Intl.NumberFormat('uk').format(currentSum));
        $('.calc-section .calc-other-price span').text(new Intl.NumberFormat('uk').format(currentServicesSum));
    }

    function checkType() {
        let calcType = $('[data-calc-types="checkTypes"] input:checked').data('calcType');
        $('[data-calc-title="additiolalFunc"] input').each(function () {
            let element = $(this);
            if (element.data('show') === calcType || element.data('show') === undefined) {
                element.closest('.checkbox-block').removeClass('hide').addClass('show');
            } else {
                element.closest('.checkbox-block').addClass('hide').removeClass('show');
            }
        });
    }

    function checkCalc() {
        updatePrices();
        let coupons = $('.calc-section .coupon');
        let couponsBlock = $('.calc-section .coupon-block');
        let couponCount = 0;
        let calcType = $('[data-calc-types="checkTypes"] input:checked').data('calcType');

        coupons.each(function () {
            let coupon = $(this);
            let couponPrice = parseInt(coupon.data('checkPrice'));
            let couponTypeChecked = coupon.data('checkType');

            if (couponTypeChecked.indexOf(calcType) >= 0) {
                if (calc() >= couponPrice) {
                    coupon.addClass('open');
                    couponsBlock.addClass('active-promo');
                    couponCount += 1;
                } else {
                    coupon.removeClass('open');
                    couponsBlock.removeClass('active-promo');
                    couponCount -= 1;
                }
            } else {
                coupon.removeClass('open');
            }

            if (couponCount < 0) couponCount = 0;

            let couponTextSwipe = $('.coupon-block .info span');
            couponTextSwipe.text(couponCount <= 1 ? 'код' : 'коди');
        });
    }

    $('[data-calc-title="additiolalFunc"] input, [data-calc-types="checkTypes"] input').change(function () {
        checkType();
        checkCalc();
    });

    $('input[type="range"], .calc-step input').on('input change', function () {
        checkCalc();
    });

    $('[data-target="promoSend"]').click(function () {
        let coupons = $('.calc-section .coupon.open');
        coupons.each(function () {
            let coupon = $(this);
            let couponCode = coupon.find('.coupon-code').text();
            let couponText = coupon.find('.coupon-percent').text();

            let checkboxCreate = $('<div class="checkbox-block"></div>');
            checkboxCreate.html(`
                <input type="checkbox" id="${couponCode}" name="${couponCode}" class="quiz-radio" value=""/>
                <label for="${couponCode}"><span class="circle"></span>${couponText}</label>
            `);
            checkboxCreate.insertAfter($('#promoSend .radio-group .radio-subtitle'));
        });
    });

    console.log('init calculation');
    checkType();
    checkCalc();
}

function additionalServiceCalc() {
    let additionalSum = 0;
    $('[data-calc-title="additiolalServices"] input:checked').each(function () {
        additionalSum += parseInt($(this).val());
    });
    return additionalSum;
}


function calc() {
    let sum = 0;

    // Додаємо базову ціну типу сайту
    let typeWebPrice = parseInt($('input[name="typeSite"]:checked').val());
    sum += typeWebPrice;

    // Додаємо ціну дизайну
    let typeDesignPrice = parseInt($('input[name="typeDesign"]:checked').val());
    sum += typeDesignPrice;

    // Додаємо ціну за кількість сторінок
    // let pagesPrice = parseInt($('#pagesSlider').val());
    // sum += pagesPrice;

    // Додаємо ціну шаблонів
    let countTemplatePrice = parseInt($('input[name="countTemplate"]:checked').val());
    sum += countTemplatePrice;

    // Додаємо ціну CMS
    let cmsPrice = parseInt($('input[name="cms"]:checked').val());
    sum += cmsPrice;

    // Додаємо вартість додаткових функцій
    $('[data-calc-title="additiolalFunc"] .show input:checked').each(function () {
        sum += parseInt($(this).val());
    });

    return sum;
}


$(document).ready(function () {
    initCalcWEB();
});
