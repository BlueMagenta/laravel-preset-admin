/**
 * main js file
 */

import './admin/vendor';
import ready from './admin/ready';
import * as functions from './admin/functions';

//make jQuery & our functions accessible from views
global.$ = global.jQuery = $;
global.admin = functions;

//bind ready.js to document ready event
$(config);