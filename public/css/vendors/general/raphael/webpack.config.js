"use strict";

const webpack = require("webpack");
const fs = require("fs");

module.exports = function(env) {
    let externals = [];

    if (env && env.noDeps) {
        console.log('Building version without deps');
        externals.push("eve");
    }

    return {
        entry: './dev/raphael.amd.js',
        output: {
            path: __dirname,
            filename: "raphael.js",
            libraryTarget: "umd",
            library: "Raphael"
        },

        externals: externals,
        plugins: [
            new webpack.BannerPlugin({
                banner: fs.readFileSync('./dev/banner.txt', 'utf8'),
                raw: true,
                entryOnly: true
            })
        ],
        resolve: {
            alias: {
                "eve": "eve-raphael/eve"
            }
        },

    };
};
module.exports = {
    mode: 'production'
};
if (process.env.NODE_ENV === 'production') {
    module.exports.devtool = '#source-map'
        // http://vue-loader.vuejs.org/en/workflow/production.html
    module.exports.plugins = (module.exports.plugins || []).concat([
        new webpack.DefinePlugin({
            'process.env': {
                NODE_ENV: '"production"'
            }
        }),
        new webpack.optimize.UglifyJsPlugin({
            sourceMap: true,
            compress: {
                warnings: true
            }
        }),
        new webpack.LoaderOptionsPlugin({
            minimize: true
        }),
        new webpack.optimize.CommonsChunkPlugin({
            name: 'vendor',
            minChunks: function(module) {
                return module.context && module.context.indexOf('node_modules') !== -1;
            }
        })
    ])
}