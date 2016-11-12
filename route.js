var path = require('path');
var url = require('url');

route = [
  {
    data: {
      "title": "Alive"
    },
    "partials": './partials.js',
    "layout":  "./view/index.hbs",
    "filename": "./docs/index.html"
  }
];

module.exports = route;
