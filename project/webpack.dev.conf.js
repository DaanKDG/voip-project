const HtmlWebpackExternalsPlugin = require('html-webpack-externals-plugin');

plugins: [
    ...
    new HtmlWebpackExternalsPlugin({
      externals: [
        {
          module: 'sinch',
          entry: 'http://cdn.sinch.com/latest/sinch.min.js',
          global: 'sinch'
        }
      ]
    }),
