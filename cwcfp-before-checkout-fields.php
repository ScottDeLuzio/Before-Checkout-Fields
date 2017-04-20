<?php
   /*
   Plugin Name: Before Checkout Fields
   Plugin URI: https://conditionalcheckoutfields.com
   Description: Display content before the checkout fields
   Version: 1.0.1
   Author: Scott DeLuzio
   Author URI: https://scottdeluzio.com
   */

	/*  Copyright 2017  Scott DeLuzio  (email : me (at) scottdeluzio.com)	*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
function show_children_information(){
   echo '<h4>Childrens Information :</h4>';
}
add_action( 'cwcfp_before_checkout_fields', 'show_children_information', 10 );

function show_children_group( $repeat, $field_id ){
   switch ( $field_id ) {
      case '1':
         /* This would be the English version that would show up for field #1
          * Add case 'XX': etc. under case '1': above to add additional fields.
          * Replace '1' or 'XX' with actual field IDs.
          */
         echo '<strong>Child ' . $repeat . ':</strong>';
         break;
      case '2':
         /* This would be the Spanish version that would show up for field #2
          * Add case 'XX': etc. under case '2': above to add additional fields.
          * Replace '2' or 'XX' with actual field IDs.
          */
         echo '<strong>Niño ' . $repeat . ':</strong>';
         break;
      
      default:
         /* You can add a default message here, or leave blank if you only want
          * this to display for a handful of fields.
          */
         break;
   }
}
add_action( 'cwcfp_before_checkout_fields_grouping', 'show_children_group', 10, 2 );
