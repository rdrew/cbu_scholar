(function($) {


    Drupal.behaviors.userMenu = {
        //attach: function(context, settings) {

            ////const imagePath = '/sites/all/themes/cbu_scholar/dist/assets/img/';
            ////const imagePath = '/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/dist/assets/img/';
            //const imagePath = '/img/';
            //var menuItems = [{
            //title: 'help',
            //icon: 'question.svg'
            //},

            //{
            //title: 'contact',
            //icon: 'envelope.svg'
            //},

            //{
            //title: 'bookmarks',
            //icon: 'list.svg'
            //}

            //];

            //for (let menuItem of menuItems) {
            //$('.menu a[title="' + menuItem.title + '"]')
            ////.empty()
            //.prepend('<img src="' + imagePath + menuItem.icon + '">');
            //};

        //}
    };
    Drupal.behaviors.socialMenu = {
        attach: function(context, settings) {

            //const imagePath = '/sites/all/themes/cbu_scholar/dist/assets/img/';
            //const imagePath = '/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/dist/assets/img/';
            const imagePath = '/img/';
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
