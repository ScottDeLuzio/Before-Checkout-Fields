<?php
   /*
   Plugin Name: Before Checkout Fields
   Plugin URI: https://conditionalcheckoutfields.com
   Description: Display content before the checkout fields
   Version: 1.0.0
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

function show_children_group( $repeat ){
   echo '<strong>Child ' . $repeat . ':</strong>';
}
add_action( 'cwcfp_before_checkout_fields_grouping', 'show_children_group', 10, 1 );