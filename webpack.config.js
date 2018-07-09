const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  mode: 'development',
  devtool: 'eval-source-map',
  entry: ['./src/index.js'],
  output: {
    path: `${__dirname}/dist`,
    filename: 'main.js'
  },
  devServer: {
    contentBase: `${__dirname}/dist`,
    port: 8081,
    publicPath: '/wp-content/themes/futurewoods/dist',
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        use: [
          {
            loader: 'babel-loader',

          }
        ],
        exclude: /node_modules/,
      },
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract(
          { 
            fallback: 'style-loader',
            use: [
              {
                loader: 'css-loader',
              },
              'sass-loader'
            ]
          })
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin('main.css'),
    new webpack.ProvidePlugin({
      jQuery: "jquery",
      $: "jquery",
      'window.jQuery': 'jquery',
      Popper: ['popper.js', 'default'],
    })
  ]
}