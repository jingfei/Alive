var path = require('path');
var url = require('url');

route = [
  {
    data: {
      "title": "Alive - home page"
    },
    "partials": './partials.js',
    "layout":  "./view/index.hbs",
    "filename": "./docs/index.html"
  },
  {
    data: {
      "title": "Alive - search page"
    },
    "partials": './partials.js',
    "layout":  "./view/searchpage.hbs",
    "filename": "./docs/searchpage.html"
  },
  {
    data: {
      "title": "Alive - detail page"
    },
    "partials": './partials.js',
    "layout":  "./view/detail.hbs",
    "filename": "./docs/detail.html"
  },
  {
    data: {
      "title": "Alive - register page"
    },
    "partials": './partials.js',
    "layout":  "./view/register.hbs",
    "filename": "./docs/register.html"
  },
  {
    data: {
      "title": "Alive - login page"
    },
    "partials": './partials.js',
    "layout":  "./view/login.hbs",
    "filename": "./docs/login.html"
  }
];

module.exports = route;
