<?php

/**
* @package NmmsEventPlugin
*/

class NmmsEventPluginDeactivate {
   
  public static function deactivate() {
    flush_rewrite_rules();
  }
 }