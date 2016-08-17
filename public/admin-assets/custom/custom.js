/**
 * Custom javascript file
 */
(function ($) {

    window.Admin = {
        // setup
        init: function () {
            this.initPjax();
        },

        initPjax: function () {
            $(document).pjax('a', '#pjax-container', {
                timeout: 1600
            });

            $(document).on('pjax:end', function (xhr, options, request) {
                var url = request.requestUrl;
                var tree = $('#nav-tree');
                tree.find('.current-page').removeClass('current-page').removeClass('active');
                var active = tree.find('a[href="' + url + '"]');
                active.parent().addClass('current-page');
                console.log(active);
            });
        }
    };

})(jQuery);

$(function(){
    Admin.init();
});