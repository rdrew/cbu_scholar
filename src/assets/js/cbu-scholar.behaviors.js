(function($) {



    Drupal.behaviors.searchFacets = {
        attach: function(context, settings) {

            //const imagePath = '/sites/all/themes/cbu_scholar/dist/assets/img/';
            var imagePath = '/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/dist/assets/img/';
            var plus = imagePath + 'plus-square-o.svg';
            var minus = imagePath + 'minus-square-o.svg';
            $('.plusminus .plus')
                .empty()
                .append('<img src="' + plus + '">');
            $('.plusminus .minus')
                .empty()
                .append('<img src="' + minus + '">');

        }
    };
    Drupal.behaviors.socialMenu = {
        attach: function(context, settings) {

            //const imagePath = '/sites/all/themes/cbu_scholar/dist/assets/img/';
            const imagePath = '/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/dist/assets/img/';
            //const imagePath = '/img/';
            var menuItems = [

                {
                    title: 'Twitter',
                    icon: 'twitter.svg'
                },

                {
                    title: 'Facebook',
                    icon: 'facebook.svg'
                },

                {
                    title: 'Instagram',
                    icon: 'instagram.svg'
                },

                {
                    title: 'Linkedin',
                    icon: 'linkedin.svg'
                },

                {
                    title: 'Youtube',
                    icon: 'youtube.svg'
                },

                {
                    title: 'Snapchat',
                    icon: 'twitter.svg'
                }
            ];

            for (let menuItem of menuItems) {
                $('.menu a[title="' + menuItem.title + '"]')
                    .empty()
                    .append('<img src="' + imagePath + menuItem.icon + '">');
            };

        }
    };




})(jQuery);
