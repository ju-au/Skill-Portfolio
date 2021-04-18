const path = require("path");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const TerserJSPlugin = require('terser-webpack-plugin');

module.exports = {
    entry: './src/index.js',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.(sc|c)ss$/,
                use: ['style-loader', 'css-loader', 'sass-loader']
                // use: [MiniCssExtractPlugin.loader, 'css-loader', "sass-loader"]
            },
            {
                test: /\.m?js$/,
				exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
                // exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            }
        ]
    },
    // plugins: [new MiniCssExtractPlugin({
    //     filename: 'style.css',
    // })],
    optimization: {
        minimizer: [new TerserJSPlugin({}),
        new OptimizeCssAssetsPlugin({})],
    },
    target: ["web", "es4"],
};