(function ($) {


    Drupal.behaviors.socialMenu = {
        attach: function (context, settings) {

            //const imagePath = '/sites/all/themes/cbu_scholar/dist/assets/img/';
            const imagePath = '/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/dist/assets/img/';
            var menuItems= [
                { title  : 'Twitter',
                    icon : 'twitter.svg' },

                { title  : 'Facebook',
                    icon : 'facebook.svg' },

                { title  : 'Instagram',
                    icon : 'instagram.svg' },

                { title  : 'Linkedin',
                    icon : 'linkedin.svg' },

                { title  : 'Youtube',
                    icon : 'youtube.svg' },

                { title  : 'Snapchat',
                    icon : 'twitter.svg' }
            ];

            for (let menuItem of menuItems) {
                $( '.menu a[title="' + menuItem.title +  '"]' )
                    .empty()
                    .append( '<img src="' + imagePath + menuItem.icon + '">');
            };



            //let menuItemTitle = "Twitter";
            //let icon = 'twitter.svg';

            //$(  '.menu a[title="' + menuItemTitle +  '"]' ).empty().append( '<img src="' + imagePath + icon + '">');


        }
    };




})(jQuery);
