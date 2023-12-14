// const path = require("path");

// module.exports = {
//   entry: "./dist/main.js", // Entry point of your application
//   output: {
//     filename: "bundle.js",
//     path: path.resolve(__dirname, "dist"),
//   },
//   mode: "development", // Set to 'production' for minification
// };
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
module.exports = {
  mode: "development",
  watch: true,
  entry: {
    app: [
      "./wp-content/themes/casinohotel/assets/src/app.scss",
      "./wp-content/themes/casinohotel/assets/src/app.js",
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css",
    }),
  ],
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
    ],
  },
};
