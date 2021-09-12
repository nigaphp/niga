const path = require("path");
const miniCssExtractPlugin = require("mini-css-extract-plugin");
const mode = process.env.NODE_ENV === "production" ? "production": "development";

module.exports = {
    mode: mode,

    plugins: [
        new miniCssExtractPlugin({
            filename: "bundle.css",
        })
    ],
    entry: "./assets/app.js",
    output: {
        filename: "bundle.js",
        path: path.resolve(__dirname, "./public/build")
    },
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
            loader: "babel-loader",
            options: {
                presets: ['@babel/preset-env'],
            }
        },
            {
                test: /\.(css|scss|sass)$/i,
                exclude: /node_modules/,
                use: [
                    miniCssExtractPlugin.loader,
                    "css-loader",
                    "sass-loader",
                ],

            },
        ],
    },
};