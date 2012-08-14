<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 * Rename each function and instance of "gozulla" to match
 * your subthemes name, e.g. if you name your theme "gozulla" then the function
 * name will be "gozulla_preprocess_hook". Tip - you can search/replace
 * on "gozulla".
 */


/**
 * Override or insert variables for the html template.
 */

function gozulla_preprocess_html(&$vars) {
  
  // Load the media queries styles
   // If you change the names of these files they must match here - these files are
   // in the /css/ directory of your subtheme - the names must be identical!
   $media_queries_css = array(
     'gozulla.responsive.style.css',
     'gozulla.responsive.gpanels.css'
   );
   //load_subtheme_media_queries($media_queries_css, 'gozulla'); // Replace 'gozulla' with your themes name
  
  
  /**
    *  set body class "sport-[sport]" so we can use different bg images for each sport
  */
  
  $uri_array = explode('/', request_uri());
  $sport = $uri_array[1];
  $sport = (explode("?", $sport));
  $sport = $sport[0];

   if (!$sport || $sport == 'content') {
     $sport = 'default';
   }

   $vars['classes_array'][] = drupal_html_class('sport-' . $sport);
  
  
}
/* function gozulla_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */

function gozulla_preprocess_page(&$vars) {
  
  $sport = '';
   if (!$sport || $sport == 'content') {
     $sport = 'default';
   }

   $vars['current_sport'] = $sport;

  /* if (isset($vars['node'])) {
     // If the node type is "blog" the template suggestion will be "page--blog.tpl.php".
      $vars['theme_hook_suggestions'][] = 'page__'. str_replace('_', '--', $vars['node']->type);
    }
     
   // Populate the page template suggestions.
  // if ($suggestions = theme_get_suggestions(arg(), 'page')) {
    // $vars['theme_hook_suggestions'] = $suggestions;
  // }*/
   
}

//dpm($links);
/* function gozulla_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function gozulla_preprocess_node(&$vars) {
}
function gozulla_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function gozulla_preprocess_comment(&$vars) {
}
function gozulla_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function gozulla_preprocess_block(&$vars) {
}
function gozulla_process_block(&$vars) {
}
// */
