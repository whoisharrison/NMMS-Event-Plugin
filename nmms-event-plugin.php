<?php

/**
 * @package NmmsEventPlugin
 */

 /*
 Plugin Name: NMMS Event Plugin
 Plugin URI: https://github.com/whoisharrison/NMMS-Event-Plugin
 Description: A quick add option for NMMS Events
 Version: 1.0.0
 Author: Michael Harrison
 Author URI: http://whoisharrison.com
 License: MIT License
 Text Domain: nmms-event-plugin
 */

/*
Copyright (c) 2018 Michael Harrison

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

defined('ABSPATH') or die('Something has gone horribly awry');

class NmmsEventPlugin {

  function register(){
    add_action('admin_enqueue_scripts', array('NmmsEventPlugin', 'enqueue'));
  }

  function create_post_type(){
    add_action('init', array($this, 'custom_post_type')); 
  }

  function custom_post_type(){
    register_post_type('event', ['public' => true, 'label' => 'Event'])
  }

  function enqueue(){
    wp_enqueue_style('pluginstyle', plugins_url('/assets/syle.css', __FILE__));
    wp_enqueue_style('pluginscript', plugin_url('assets/scripts.js', __FILE__));
  }

  function activate() {
    require_once plugin_dir_path( __FILE__) . 'includes/nmms-event-plugin-activate.php'
    NmmsEventPluginActivate::activate();
  }

  function deactivate(){
    require_once plugin_dir_path( __FILE__) . 'includes/nmms-event-plugin-deactivate.php'
    NmmsEventPluginActivate::deactivate();
  }

}

if (class_exists('NmmsEventPlugin')) {
  $nmmsEventPlugin = new NmmsEventPlugin();
  $nmmsEventPlugin-> register();
}

//activate
register_activation_hook( __FILE__, array($nmmsEventPlugin, 'activate') );

//deactivate
register_deactivation_hook( __FILE__, array($nmmsEventPlugin, 'deactivate') );

//uninstall

