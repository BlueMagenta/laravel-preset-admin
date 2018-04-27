/**
 * main js file
 */

import './config/vendor';
import config from './config/global';
import functions from './functions/index';


// bind indexed js functions to window object
global.admin = functions;

// bind the config to document ready event
$(config);