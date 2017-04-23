<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Custom navigation menu for WordPress with individual classes
 */

class FlightBoot_Walker extends Walker_Nav_Menu {
    
	// Displays start of an element. E.g '<li> Item Name'
    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 ) {
    	$object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
    	$description = $item->description;
    	$permalink = $item->url;
     
      $output .= "<li class='nav-item'>";
      $output .= '<a class="nav-link" href="' . $permalink . '">';  
      $output .= $title;

      if( $description != '' && $depth == 0 ) {
      	$output .= '<small class="description">' . $description . '</small>';
      }

      $output .= '</a>';
  
    }
}