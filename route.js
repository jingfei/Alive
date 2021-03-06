var path = require('path');
var url = require('url');

route = [
  {
    data: {
      "title": "Alive - home page",
      "menu_start": true
    },
    "partials": './partials.js',
    "layout":  "./view/index.hbs",
    "filename": "./docs/index.php"
  },
  {
     data: {
       "title": "Alive - search page",
       "menu_search": true
     },
     "partials": './partials.js',
     "layout":  "./view/searchpage.hbs",
     "filename": "./docs/searchpage.php"
  },
  {
    data: {
      "title": "Alive - detail page",
      "menu_search": true
    },
    "partials": './partials.js',
    "layout":  "./view/detail.hbs",
    "filename": "./docs/detail.php"
  },
  {
    data: {
      "title": "Alive - register page",
      "menu_register": true
    },
    "partials": './partials.js',
    "layout":  "./view/register.hbs",
    "filename": "./docs/register.php"
  },
  {
    data: {
      "title": "Alive - setting page",
      "menu_profile": true
    },
    "partials": './partials.js',
    "layout":  "./view/setting.hbs",
    "filename": "./docs/setting.php"
  },
  {
    data: {
      "title": "Alive - login page",
      "menu_login": true
    },
    "partials": './partials.js',
    "layout":  "./view/login.hbs",
    "filename": "./docs/login.php"
  },
  {
    data: {
      "title": "Alive - profile page",
      "menu_profile": true
    },
    "partials": './partials.js',
    "layout":  "./view/profile.hbs",
    "filename": "./docs/profile.php"
  },
  {
    data: {
      "title": "Alive - post job form",
      "menu_job": true
    },
    "partials": './partials.js',
    "layout":  "./view/PostJobForm.hbs",
    "filename": "./docs/postjobform.php"
  },
  {
    data: {
      "title": "Alive - searchbar page",
      "menu_search": true
    },
    "partials": './partials.js',
    "layout":  "./view/searchbar.hbs",
    "filename": "./docs/searchbar.php"
  },
  {
    data: {
      "title": "Alive - modify job",
      "menu_job": true
    },
    "partials": './partials.js',
    "layout":  "./view/updatejob.hbs",
    "filename": "./docs/updatejob.php"
  }
];

module.exports = route;
