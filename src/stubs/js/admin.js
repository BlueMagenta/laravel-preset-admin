/**
 * main js file
 */

import './vendor';
import ready from './ready';
import functions from './functions';

//make jQuery accessible from views
global.$ = global.jQuery = $;

//make our functions from functions.js accessible from views
global.admin = functions;

//bind ready.js to document ready event
$(config);