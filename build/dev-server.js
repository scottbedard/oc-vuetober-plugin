'use strict';

const chalk = require('chalk');
const config = require('./config');
const express = require('express');
const fs = require('fs');
const path = require('path');
const proxyMiddleware = require('http-proxy-middleware');
const webpack = require('webpack');
const webpackConfig = require('./webpack.dev.conf');

// set our node environment
process.env.NODE_ENV = 'development';

// make sure a .proxy file is present
let proxy;

try {
    // check if a .proxy file is present. if one is, use that
    fs.statSync(path.resolve(__dirname, '../.proxy')).isFile();
    proxy = fs.readFileSync(path.resolve(__dirname, '../.proxy'), 'utf8').trim();
} catch (e) {
    // otherwise use the value from our config
    if (typeof config.proxy === 'string' && config.proxy) {
        proxy = config.proxy.trim();
    } else {
        console.log();
        console.log(chalk.red('  Error:') + ' A .proxy file or entry in the config must be present to use the dev server.');
        console.log();
        console.log(chalk.gray('  See the docs for more information on this error.'));
        console.log(chalk.gray('  https://github.com/scottbedard/oc-vuetober-plugin#development-server'));
        console.log();
        process.exit();
    }
}

// create a server for our development assets
const app = express();
const compiler = webpack(webpackConfig);

const devMiddleware = require('webpack-dev-middleware')(compiler, {
    publicPath: webpackConfig.output.publicPath,
    quiet: true,
});

const hotMiddleware = require('webpack-hot-middleware')(compiler, {
    log: function() { /* this disables standard error messages */ },
});

// proxy our vendor assets to void.js to silence annoying 404 errors
app.use(proxyMiddleware(config.publicPath + '/assets/dist/vendor.min.js', {
    target: proxy,
    pathRewrite() {
        return '/plugins/bedard/vuetober/assets/js/void.js';
    },
}));

// and proxy everything else to our October site
app.use(proxyMiddleware(
    function(pathname) {
        return pathname.indexOf('__webpack') === -1
            && pathname.indexOf('bedard/vuetober/assets') === -1;
    },
    { target: proxy }
));

app.use(devMiddleware);

app.use(hotMiddleware);

// fire up the dev server
module.exports = app.listen(8080, function (err) {
    if (err) {
        console.log(err);
        return;
    }

    console.log('Listening at http://localhost:8080' + '\n');
});
