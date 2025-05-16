$(function() {
    $('.faq-item-q').on('click', function () {
        const $currentBox = $(this).closest('.faq-item-box');
        const $currentAnswer = $currentBox.find('.faq-item-a');
        const isOpen = $currentAnswer.is(':visible');

        // 關閉所有項目
        $('.faq-item-a').slideUp();
        $('.faq-item-arrow-p').removeClass('d-none');
        $('.faq-item-arrow-d').addClass('d-none');

        // 如果原本是關閉狀態，則打開它
        if (!isOpen) {
            $currentAnswer.slideDown();
            $currentBox.find('.faq-item-arrow-p').addClass('d-none');
            $currentBox.find('.faq-item-arrow-d').removeClass('d-none');
        }
    });

});

let scrollToTopVisible = false;
let lastScrollTop = 0; // 追蹤上一次的滾動位置

$(window).on('scroll', () => {
    const $scrollToTop = $('.scroll-to-top');
    const currentScrollTop = $(window).scrollTop();

    // 只在真正需要時才觸發滾動事件
    if (Math.abs(lastScrollTop - currentScrollTop) <= 5) {
        return;
    }

    if (currentScrollTop > 100) {
        if (!scrollToTopVisible) {
            $scrollToTop.fadeIn();
            scrollToTopVisible = true;
        }
    } else {
        if (scrollToTopVisible) {
            $scrollToTop.fadeOut();
            scrollToTopVisible = false;
        }
    }

    lastScrollTop = currentScrollTop;
});

// 只在點擊回到頂部按鈕時才觸發滾動
$('.scroll-to-top').on('click', (e) => {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, {
        duration: 500,
        easing: 'swing'
    });
});
