var banner = Backbone.View.extend({

    el: '#main',

    events: {
        'click #banner': 'bannerClick'

    },

    initialize: function () {
        console.log('init page');
    },

    bannerClick: function (e) {
        console.log("click");
        e.preventDefault();
        this.banner = $("#banner");
        var url =  window.location.origin + '/ajax/banner/click';
        var data = {
            id: this.banner.attr('data-id')
        };

        var that = this;
        $.post(url, data, function (response) {
            try {
                if (response.status) {
                    window.location = that.banner.attr('data-url');
                } else {
                    console.log("Ошибка сохранения", "error", 3000);
                }
            } catch (error) {
                console.log("Ошибка сохранения", "error", 3000);
            }
        });
    }
});

window.shiro.Views.banner = new banner();