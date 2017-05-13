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
  // {
  //   data: {
  //     "title": "Alive - search page"
  //   },
  //   "partials": './partials.js',
  //   "layout":  "./view/searchpage.hbs",
  //   "filename": "./docs/searchpage.php"
  //},
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
      "title": "Alive - setting page"
    },
    "partials": './partials.js',
    "layout":  "./view/setting.hbs",
    "filename": "./docs/setting.php"
  },
  {
    data: {
      "title": "Alive - login page"
    },
    "partials": './partials.js',
    "layout":  "./view/login.hbs",
    "filename": "./docs/login.php"
  },
  {
    data: {
      "title": "Alive - post job page"
    },
    "partials": './partials.js',
    "layout":  "./view/postjob.hbs",
    "filename": "./docs/postjob.php"
  },
  // {
  //   data: {
  //     "title": "Alive - profile page"
  //   },
  //   "partials": './partials.js',
  //   "layout":  "./view/profile.hbs",
  //   "filename": "./docs/profile.php"
  // },
  {
    data: {
      "title": "Alive - post job form"
    },
    "partials": './partials.js',
    "layout":  "./view/PostJobForm.hbs",
    "filename": "./docs/postjobform.php"
  },
  {
    data: {
      "title": "Alive - searchbar page"
    },
    "partials": './partials.js',
    "layout":  "./view/searchbar.hbs",
    "filename": "./docs/searchbar.php"
  },
  {
    data: {
      "title": "Alive - modify job"
    },
    "partials": './partials.js',
    "layout":  "./view/updatejob.hbs",
    "filename": "./docs/updatejob.php"
  }
];

module.exports = route;
