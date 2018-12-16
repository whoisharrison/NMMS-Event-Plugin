<?php

/**
* @package NmmsEventPlugin
*/

class NmmsEventPluginActivate {
   
  public static function activate() {
    flush_rewrite_rules();
  }
 }