var path = require('path');
var url = require('url');

route = [
  {
    data: {
      "title": "Alive - home page"
    },
    "partials": './partials.js',
    "layout":  "./view/index.hbs",
    "filename": "./docs/index.php"
  },
  {
    data: {
      "title": "Alive - search page"
    },
    "partials": './partials.js',
    "layout":  "./view/searchpage.hbs",
    "filename": "./docs/searchpage.php"
  },
  {
    data: {
      "title": "Alive - detail page"
    },
    "partials": './partials.js',
    "layout":  "./view/detail.hbs",
    "filename": "./docs/detail.php"
  },
  {
    data: {
      "title": "Alive - register page"
    },
    "partials": './partials.js',
    "layout":  "./view/register.hbs",
    "filename": "./docs/register.php"
  },
  {
    data: {
      "title": "Alive - login page"
    },
    "partials": './partials.js',
    "layout":  "./view/login.hbs",
    "filename": "./docs/login.php"
  }
];

module.exports = route;
