/*
 * Proxy Live site and inject local files
 *  - run 'npm install --save-dev browser-sync'
 *  - change the varables below as needed
 *  - 'node bsProxy' to run the task
 */
//
//initialize all of our variables
var PROXY, ASSETS_DIR, REMOTE_ASSETS_PATH, REGEX, browserSync, serveStatic;

// Url of the site to be proxied
PROXY              = 'https://cbufaces.cairnrepo.org';
// Root assets folder (contains /css/, /js/ etc)
ASSETS_DIR         = 'dist/assets';
// Path on server to remote assets folder (escape the slashes; no trailing slash)
//REMOTE_ASSETS_PATH = '\/themes\/custom\/curiosity\/assets';
//REMOTE_ASSETS_PATH = 'https:\/\/cbufaces.cairnrepo.org\/sites\/cbufaces.cairnrepo.org\/themes\/cbu_scholar';
REMOTE_ASSETS_PATH = 'http:\/\/cbufaces.cairnrepo.org\/sites\/cbufaces.cairnrepo.org\/themes\/cbu_scholar\/dist\/assets';


//===================================
// Includes and vars
browserSync = require('browser-sync');
serveStatic = require('serve-static');
REGEX       = new RegExp( REMOTE_ASSETS_PATH, 'g');
//===================================

/*
 * var newpath = path.replace(/\//g, '\\/');
 */

/*
 * Browsersync Task
 *
 */

browserSync({

    // proxy live site
    proxy: PROXY,
    logLevel: "debug",
    //https: "true",
    startPath: '/user'


    // modify url of the remote assets so they point to the locally served version
    //rewriteRules: [
        //{

            ////match: /REMOTE_ASSETS_PATH/g,
            //match: REGEX,
            //fn: function(matched) { return '' }
            ////match: REGEX,
            ////fn: function (req, res, match) {
                ////return '';
            ////}
        //}
    //],

    //// serve up these local files
    //serveStatic: [ASSETS_DIR],

    //// Watch this stuff for changes and inject it if it does
    //files: ASSETS_DIR + '/**'

});
