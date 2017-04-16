module.exports = {
    // the proxy is used to load any non-plugin assets. if this
    // is an open source plugin and you don't wish to commit
    // this to git, use a .proxy file in your plugin root
    proxy: 'localhost',

    // the public path lets webpack know where compiled files are
    publicPath: '/plugins/author/plugin',
};
