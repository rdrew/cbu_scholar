//@format
(function($) {
    Drupal.behaviors.scholarDOI = {
        attach: function(context, settings) {
            //search results
            $('dd.mods-identifier-doi-ms').each(function() {
                let doi = $(this)
                    .text()
                    .replace(/\s+/g, '');
                $(this).html(
                    '<a href="http://doi.org/' + doi + '">' + doi + '</a>',
                );
            });
            let doi_cell = $('.metadata dt:contains("DOI")').next();
            let doi = doi_cell.text().replace(/\s+/g, '');
            doi_cell.html(
                '<a href="http://doi.org/' + doi + '">' + doi + '</a>',
            );
        },
    };

    Drupal.behaviors.searchFilters = {
        attach: function(context, settings) {
            //put the filter term inside the 'remove-filter' link
            var elem = $('.filter-list li');
            $(elem).each(function(index, value) {
                var text = $(this)
                    .contents()
                    .filter(function() {
                        return this.nodeType === 3;
                    });
                var link = $(this)
                    .contents()
                    .filter(function() {
                        return this.nodeType === 1;
                    });
                link.empty().prepend(text);
            });
            //add classes for unique styling
            $(".remove-filter:contains('=')").addClass('equal');
            $(".remove-filter:contains('≠')").addClass('notequal');
            //add search term to search box
            var query = $('.islandora-solr-query-list li')
                .contents()
                .filter(function() {
                    return this.nodeType === 3;
                })
                .text();
            var searchBox = $(
                '.page-islandora-search #edit-islandora-simple-search-query',
            );
            searchBox.attr('value', query);

            //tooltips for remove filter buttons
            var filterButton = $('.remove-filter');

            filterButton
                .attr('aria-haspopup', 'true')
                .attr('title', 'click to remove search filter')
                .addClass('has-tip');

            //move the datepicker
            $('#ui-datepicker-div').appendTo($('.date-range-filter-wrapper'));
        },
    };

    Drupal.behaviors.scholarCitationDisplay = {
        attach: function(context, settings) {
            let label = $('.ir_citationCModel  > .form-item > label');
            let link = $('.ir_citationCModel  > .form-item > a');
            let metadataLabel = $('.ir_citationCModel  > fieldset label');
            label.addClass('show-for-sr');
            link.addClass('button').prepend('Download ');
            metadataLabel.addClass('show-for-sr');
        },
    };
    Drupal.behaviors.searchDropdown = {
        attach: function(context, settings) {
            //const imagePath = '/sites/all/themes/cbu_scholar/dist/assets/img/';
            const imagePath =
                '/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/dist/assets/img/';
            //const imagePath = '/img/';
            var menuItems = [
                {
                    title: 'List',
                    icon: 'list.svg',
                },
                {
                    title: 'Search',
                    icon: 'search.svg',
                },
                {
                    title: 'Contact',
                    icon: 'envelope.svg',
                },
            ];

            for (let menuItem of menuItems) {
                $('.user-menu [title="' + menuItem.title + '"]')
                    .empty()
                    .append('<img src="' + imagePath + menuItem.icon + '">');
            }
        },
    };

    Drupal.behaviors.searchFacets = {
        attach: function(context, settings) {
            //const imagePath = '/sites/all/themes/cbu_scholar/dist/assets/img/';
            var imagePath =
                '/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/dist/assets/img/';
            var plus = imagePath + 'plus-square-o.svg';
            var minus = imagePath + 'minus-square-o.svg';
            $('.plusminus .plus')
                .empty()
                .append('<img src="' + plus + '">');
            $('.plusminus .minus')
                .empty()
                .append('<img src="' + minus + '">');
            //More (Expand) or Less (Collapse)
            //$('.categories-menu.menu.nested').each(function(){
            //var filterAmount = $(this).find('li').length;
            //if( filterAmount > 5){
            //$('li', this).eq(4).nextAll().hide().addClass('toggleable');
            //$(this).append('<li class="more">More</li>');
            //}
            //});

            //$('.categories-menu.menu.nested').on('click','.more', function(){
            //if( $(this).hasClass('less') ){
            //$(this).text('More').removeClass('less');
            //}else{
            //$(this).text('Less').addClass('less');
            //}
            //$(this).siblings('li.toggleable').slideToggle();
            //});
        },
    };
    Drupal.behaviors.socialMenu = {
        attach: function(context, settings) {
            //const imagePath = '/sites/all/themes/cbu_scholar/dist/assets/img/';
            const imagePath =
                '/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/dist/assets/img/';
            //const imagePath = '/img/';
            var menuItems = [
                {
                    title: 'Twitter',
                    icon: 'twitter.svg',
                },

                {
                    title: 'Facebook',
                    icon: 'facebook.svg',
                },

                {
                    title: 'Instagram',
                    icon: 'instagram.svg',
                },

                {
                    title: 'Linkedin',
                    icon: 'linkedin.svg',
                },

                {
                    title: 'Youtube',
                    icon: 'youtube.svg',
                },

                {
                    title: 'Snapchat',
                    icon: 'twitter.svg',
                },
            ];

            for (let menuItem of menuItems) {
                $('.menu a[title="' + menuItem.title + '"]')
                    .empty()
                    .append('<img src="' + imagePath + menuItem.icon + '">');
            }
        },
    };
})(jQuery);
