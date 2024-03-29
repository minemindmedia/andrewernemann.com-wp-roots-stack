// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'
import 'slick-carousel/slick/slick.min';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import singleProperties from './routes/singleProperties';
import ourApproach from './routes/ourApproach';
import meetTheTeam from './routes/meetTheTeam';
import privacyPolicy from './routes/privacyPolicy';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // Single Properties
  singleProperties,
  // Page Our Approach
  ourApproach,
  // Meet The Team
  meetTheTeam,
  // Privacy Policy
  privacyPolicy,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import { faPhoneAlt } from '@fortawesome/free-solid-svg-icons';
import { faEnvelope, faPlayCircle } from '@fortawesome/free-regular-svg-icons';

// add the imported icons to the library
library.add(faPhoneAlt, faEnvelope, faPlayCircle);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();