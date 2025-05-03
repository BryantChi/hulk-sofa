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