<?php

/**
 * Plugin Name: Presto Player
 * Plugin URI: http://prestoplayer.com
 * Description: A beautiful, fast media player for WordPress.
 * Version: 1.6.13
 * Author: Presto Made, Inc
 * Text Domain: presto-player
 * Tags: private, video, lms, hls
 * Domain Path: languages
 */

use PrestoPlayer\Factory;
use PrestoPlayer\Controller;
use PrestoPlayer\Requirements;
use PrestoPlayer\Dice\Dice as Container;

// Don't do anything if called directly.
if (!\defined('ABSPATH') || !\defined('WPINC')) {
    exit;
}

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
register_activation_hook(__FILE__, function () {
    PrestoPlayer\Activator::activate();
});

// plugin constants
define('PRESTO_PLAYER_PLUGIN_FILE', __FILE__);
define('PRESTO_PLAYER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('PRESTO_PLAYER_PLUGIN_DIR', plugin_dir_path(__FILE__));

if (!function_exists('presto_player_plugin')) {
    function presto_player_plugin()
    {
        // Check plugin requirements.
        $requirements = new Requirements();
        if ($requirements->check()) {
            $container = new Container();
            $factory = new Factory($container);
            $container = $container->addRules($factory->getRules());
            $plugin = $container->create(Controller::class);
            $plugin->run();
        }
    }
    presto_player_plugin();
}
