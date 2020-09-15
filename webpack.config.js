const path = require('path');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const webpack = require('webpack');

module.exports = {
    mode: "production",
    entry: ['./src/assets/js/app.js', './src/assets/scss/app.scss'],
    output: {
        filename: './dist/assets/js/app.min.js',
        path: path.resolve(__dirname)
    },
    plugins: [
        new MiniCssExtractPlugin({ filename: './dist/assets/css/app.min.css' }),
    ],
    module: {
        rules: [
            {
                test: /\.js$/, exclude: /node_modules/,
                use: {
                    loader: "babel-loader", 
                    options: { presets: ['babel-preset-env'] } 
                }
            },
            {
                test: /\.(sass|scss)$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
            } 
        ]
    },
    optimization: {
        minimizer: [
            new UglifyJSPlugin({
                cache: true,
                parallel: true
            }), 
            new OptimizeCSSAssetsPlugin({})
        ]
    }
};