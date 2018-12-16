<?php

/**
* @package NmmsEventPlugin
*/

namespace Includes;

final class Init {
   
  public static function register_services(){

  }

}

// use Includes\Activate;
// use Includes\Deactivate;
// use Includes\Admin\AdminPages;

// class NmmsEventPlugin {
//   public $title;

//   function __construct() {
//     $this->title = plugin_basename( __FILE__ );
//   }


//   function register(){
//     add_action('admin_enqueue_scripts', array('NmmsEventPlugin', 'enqueue'));
//     add_action('admin_menu', array( $this, 'add_admin_pages'));
//     add_filter("plugin_action_links_$this->title", array( $this, 'settings_link'));
//   }

//   public function settings_link( $links ){
//     $settings_link = '<a href="admin.php?page=nmms_event_plugin">Settings</a>';
//     array_push( $links, $settings_link );
//     return $links;
//   }

//   function create_post_type(){
//     add_action('init', array($this, 'custom_post_type')); 
//   }

//   public function add_admin_pages() {
//     add_menu_page( 'NMMS Event Plugin', 'NMMS Events', 'manage_options', 'NMMS_Event_Plugin', array( $this, 'admin_index'), 'dashicons-megaphone', 110 );
//   }

//   public function admin_index(){
//     require_once plugin_dir_path( __FILE__) . 'templates/admin.php';
//   }

//   protected function custom_post_type(){
//     register_post_type('event', ['public' => true, 'label' => 'Event']);
//   }

//   function enqueue(){
//     wp_enqueue_style('pluginstyle', plugins_url('/assets/syle.css', __FILE__));
//     wp_enqueue_style('pluginscript', plugin_url('assets/scripts.js', __FILE__));
//   }

//   function activate() {
//     Activate::activate();
//   }

//   function deactivate(){
//     Deactivate::deactivate();
//   }
// }

// if (class_exists('NmmsEventPlugin')) {
//   $nmmsEventPlugin = new NmmsEventPlugin();
//   $nmmsEventPlugin-> register();
// }

// //activate
// register_activation_hook( __FILE__, array($nmmsEventPlugin, 'activate') );

// //deactivate
// register_deactivation_hook( __FILE__, array($nmmsEventPlugin, 'deactivate') );

// //uninstall