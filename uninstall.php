<?php

/**
 * Trigger the file on Plugin to uninstall
 * 
 * @package NmmsEventPlugin
 */

 if (! defined('WP_UNINSTALL_PLUGIN')){
   die;
 }

 // Time to clear the Database stored data. Accessing via SQL
 global $wpdb
 $wpdb-query( "DELETE FROM wp_posts WHERE post_type = 'event" );
 
 // Deleting related meta from db
 $wpdb-query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");