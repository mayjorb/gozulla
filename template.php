<?php
// Footheme by Adaptivethemes.com, a starter sub-sub-theme.

/**
 * Rename each function and instance of "footheme" to match
 * your subthemes name, e.g. if you name your theme "footheme" then the function
 * name will be "footheme_preprocess_hook". Tip - you can search/replace
 * on "footheme".
 */

/**
 * Override or insert variables into the html templates.
 * Replace 'footheme' with your themes name, i.e. mytheme_preprocess_html()
 */
 
 
function gozulla_preprocess_html(&$vars) {

  // Load the media queries styles
  // If you change the names of these files they must match here - these files are
  // in the /css/ directory of your subtheme - the names must be identical!
  $media_queries_css = array(
    'gozulla.responsive.style.css',
    'gozulla.responsive.gpanels.css'
  );
  load_subtheme_media_queries($media_queries_css, 'gozulla'); // Replace 'gozulla' with your themes name
  
  //dpm($vars);
  
  /**
    *  set body class "sport-[sport]" so we can use different bg images for each sport
  */
  
   $uri_array = explode('/', request_uri());
   $sport = $uri_array[1];
   
   if (!$sport || $sport == 'content') {
     $sport = 'default';
   }

   $vars['classes_array'][] = drupal_html_class('sport-' . $sport);
  
 
 /**
  * Load IE specific stylesheets
  * AT automates adding IE stylesheets, simply add to the array using
  * the conditional comment as the key and the stylesheet name as the value.
  *
  * See our online help: http://adaptivethemes.com/documentation/working-with-internet-explorer
  *
  * For example to add a stylesheet for IE8 only use:
  *
  *  'IE 8' => 'ie-8.css',
  *
  * Your IE CSS file must be in the /css/ directory in your subtheme.
  */
  /* -- Delete this line to add a conditional stylesheet for IE 7 or less.
  $ie_files = array(
    'lte IE 7' => 'ie-lte-7.css',
  );
  load_subtheme_ie_styles($ie_files, 'footheme'); // Replace 'footheme' with your themes name
  // */

}

function gozulla_preprocess_page(&$vars) {
  
  $sport = '';
  if (!$sport || $sport == 'content') {
    $sport = 'default';
  }
   
  $vars['current_sport'] = $sport;
 

  // Populate the page template suggestions.
  if ($suggestions = theme_get_suggestions(arg(), 'page')) {
    $vars['theme_hook_suggestions'] = $suggestions;
  }
}
