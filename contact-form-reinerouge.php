<?php

/*
Plugin name: ReineRouge - Contact Form 7
Plugin URI:  https://reinerouge.fr
Description: Save and manage Contact Form 7 messages. This plugin is an add-on for the Contact Form 7 plugin.
Author:      TLH SARL
Author URI:  https://tousleshoraires.com
License:     GPL v2
License URI: https://github.com/tousleshoraires/contact-form-reinerouge/blob/main/LICENSE.md
Text Domain: contact-form-rr7
Domain Path: /languages/
Version:     1.4.5
*/

if (!defined('ABSPATH')) {
    exit;
}

require __DIR__.'/src/Collection.php';

ReineRougeContactForm7\Collection::instance();
