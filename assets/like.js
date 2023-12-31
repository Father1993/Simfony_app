import $ from 'jquery';

$(function () {

    $('[data-item=likes]').each(function () {
        const $container = $(this);

        $container.on('click', function (e) {
            e.preventDefault();

            const type = $container.data('type');

            $.ajax({
                url: '/articles/1/like/' + type,
                method: 'POST'
            }).then(function (data) {
                $container.data('type', type === 'like' ? 'dislike' : 'like');

                $container.find('.btn').toggleClass('btn-outline-success btn-outline-primary');
                $container.find('[data-item=likesCount]').text(data.likes);
            });
        });
    });

});