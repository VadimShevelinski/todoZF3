const path = require('path');
const webpack = require('webpack');
module.exports = {
    plugins: [
        new webpack.ProvidePlugin({
            '$': 'jquery',
            'jQuery': "jquery",
            "window.jQuery": "jquery",
            'window.$': 'jquery',
        }),
    ],
    entry: {
        index: './app.js'
    },
    output: {
        filename: 'index.js',
        path: path.resolve(__dirname, './../')
    },

    watch: true,

    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                        plugins: ['transform-regenerator'],
                    }
                }
            }
        ]
    },
    optimization: {
        splitChunks: {
            chunks: 'async',
            minSize: 30000,
            maxSize: 0,
            minChunks: 1,
            maxAsyncRequests: 5,
            maxInitialRequests: 3,
            automaticNameDelimiter: '~',
            name: true,
            cacheGroups: {
                vendors: {
                    test: /[\\/]node_modules[\\/]/,
                    priority: -10
                },
                default: {
                    minChunks: 2,
                    priority: -20,
                    reuseExistingChunk: true
                }
            }
        }
    }
}
