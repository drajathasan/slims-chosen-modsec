<?php
/**
 * Plugin Name: Choosen ModSec Experiment
 * Plugin URI: -
 * Description: Ekperimen Module Security SLiMS
 * Version: 0.0.1
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

$plugin->register('bibliography_init', function() {
   if (!isset($_GET['inPopUp'])) {
      global $dbs,$sysconf;
      include __DIR__ . '/index.php';
      exit;
   }
});
