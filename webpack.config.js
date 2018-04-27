 
const path = require('path');

module.exports = {
  entry: './src/index.js',
  output: {
      path: path.resolve(__dirname, 'dist'),
    filename: 'bundle_tmm.js'
  }
  /*,
  module:{
    loaders: [
      {test: /\.css$/, 
      loader: "style-loader!css-loader"},
    ]
  }
  */
};