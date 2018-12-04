// import external dependencies
import 'jquery';
import 'slick-carousel';
import 'flexslider';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import kontakt from './routes/kontakt';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,

  kontakt,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
