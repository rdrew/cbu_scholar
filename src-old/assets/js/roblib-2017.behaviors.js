(function ($) {





    Drupal.behaviors.pageIcons = {
        attach: function (context, settings) {


            var pageTitle = $(".page-databases-all .page_title"); //select the element
            var icon = 'fa-search';
            pageTitle.prepend('<i class="fa ' + icon + '"></i>');
            //==============================================
            var pageTitle = $(".section-bar-askus .page_title"); //select the element
            var icon = 'fa-weixin';
            pageTitle.prepend('<i class="fa ' + icon + '"></i>');
            //==============================================
            var pageTitle = $(".section-computers .page_title"); //select the element
            var icon = 'fa-laptop';
            pageTitle.prepend('<i class="fa ' + icon + '"></i>');
            //==============================================
            var pageTitle = $(".section-printing .page_title"); //select the element
            var icon = 'fa-print';
            pageTitle.prepend('<i class="fa ' + icon + '"></i>');
            //==============================================
            var pageTitle = $(".section-peicollection .page_title"); //select the element
            var icon = 'fa-picture-o';
            pageTitle.prepend('<i class="fa ' + icon + '"></i>');
            //==============================================
            var pageTitle = $(".section-tours .page_title"); //select the element
            var icon = 'fa-info-circle';
            pageTitle.prepend('<i class="fa ' + icon + '"></i>');
            //==============================================
            var pageTitle = $(".section-sg .page_title"); //select the element
            var icon = 'fa-book';
            pageTitle.prepend('<i class="fa ' + icon + '"></i>');
            //==============================================
            var pageTitle = $(".section-faq-frequently-asked-questions-about-library-resources-and-services .page_title"); //select the element
            var icon = 'fa-question-circle';
            pageTitle.prepend('<i class="fa ' + icon + '"></i>');

        }
    };




    Drupal.behaviors.peoplepages = {
        attach: function (context, settings) {

            $('.section-people #block-views-subject-guides-block-1').appendTo($('.section-people .left'));


        }
    };
    Drupal.behaviors.bentoSearch = {
        attach: function (context, settings) {

            $('.js-search-results__container .books').append($('#roblib-eds-books-toc'));
            $('.js-search-results__container .articles').append($('#roblib-eds-articles-toc'));
            $('.js-search-results__container .web').append($('#roblib-solr-search-toc-results'));
            $('.searchtabs .tabs').append($('.admin-menu__container'));

            //move the all results link to bento block header
            var header = '.roblib-search-eds-media-header';
            var link = '#roblib-search-eds-more';
            $( header ).append($( link ));

            var header = '.roblib-search-eds-articles-header';
            var link = '#roblib-search-eds-article-more';
            $( header ).append($( link ));

            var header = '.roblib-search-solr-results-header';
            var link = '#roblib-search-solr-site-results-more';
            $( header ).append($( link ));


        }
    };
    Drupal.behaviors.roblib2017ExampleBehavior = {
        attach: function (context, settings) {
            // By using the 'context' variable we make sure that our code only runs on
            // the relevant HTML. Furthermore, by using jQuery.once() we make sure that
            // we don't run the same piece of code for an HTML snippet that we already
            // processed previously. By using .once('foo') all processed elements will
            // get tagged with a 'foo-processed' class, causing all future invocations
            // of this behavior to ignore them.
            $('.some-selector', context).once('foo', function () {
                // Now, we are invoking the previously declared theme function using two
                // settings as arguments.
                var $anchor = Drupal.theme('roblib2017ExampleButton', settings.myExampleLinkPath, settings.myExampleLinkTitle);

                // The anchor is then appended to the current element.
                $anchor.appendTo(this);
            });
        }
    };

})(jQuery);
